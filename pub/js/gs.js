
$(document).ready(function() {
    var maxTime = 20;
    var currentTime = maxTime;
    var currentSongID;
    var completedSongs = [];
    var tagID = null; //will store which genre we are using
    var timingInterval; //handles our counter
    var maxSongCount = 0;
    var currentSongCount = 0;
    var searchSuggestions = [];
    var playingPlaylist;
    var playlist = [];
    var indexOfCurrentSong = 0;
    var currentScore = 0;
    var currentPercent = 0;
    var gameOver = false;
    var genreInfo = [];

    $(".total_songs").html(maxSongCount);
    $(".current_song").html(currentSongCount);
    $("#progress-bar").css("width", "0%");
    // set playBtn and search-bar
    $("#playBtn").attr('disabled', 'disabled');
    $("#search-bar").attr('disabled', 'disabled');


    function startGame() {
        window.player.setVolume(100);
        $("#search-bar").removeAttr("disabled");
        $(".sidebar").attr('disabled', 'disabled');
        // grabs the list of songs in the playlist
        var endpointURL;
        var postData;
        if (playingPlaylist) {
            endpointURL = "../../lib/getPlaylistIDs.php";
            postData = {playlistID: tagID};
        } else {
            // is genre
            endpointURL = "../../lib/getGenrePlaylist.php";
            postData = {autoPlayTag: tagID};
        }
        $.ajax({
            url: endpointURL,
            type: "POST",
            dataType: "JSON",
            data: postData,
            success: function(data) {
                console.log(data);
                if (playingPlaylist) {
                    for (var i = 0; i < data.length; i++) {
                        playlist.push(data[i].SongID);
                    }
                    console.log(playlist);
                    playGameWithPlaylist();
                } else {
                    genreInfo = data;
                    playGameWithGenre();
                }
            }
        });
    }


    function stopGame() {
        stopMusic();
    }


    function gotSongRight() {
        // add points
        // clear search bar
        $("#search-bar").val("");
        incrementSong();
        resetAndStartTimer();
        addPoints(100);
    }

    function gotSongWrong() {
        $("#search-bar").val("");
        addPoints(-20);
    }

    function addPoints(points) {
        currentScore += points;
        $(".score").html(currentScore);
    }

    function playGameWithPlaylist() {
        // play song at 0th index
        maxSongCount = playlist.length;
        $("#total-songs").html(maxSongCount);
        playSong(playlist[0]);
    }

    function playGameWithGenre() {
        maxSongCount = 15;
        $("#total-songs").html(maxSongCount);
        playSong(genreInfo['nextSong']['SongID']);

    }
    // /*
    // ** Creates our stream from a song ID **
    // */
    function playSong(songID) {
        if (songID === undefined) {
            // playlist over!
            endGame();
            return;
        }
        console.log("playSong(" + songID + ")");

        $.ajax({
          url: "../../lib/GroovesharkAPI-PHP/songGetter.php",
          type: "POST",
          data: {
            song: songID
          },
          dataType: "JSON",
          success: function(data) {
            currentSongID = songID;
            console.log(window.player);
            window.player.playStreamKey(data.StreamKey, data.StreamServerHostname, data.StreamServerID);
            setTimeout(resetAndStartTimer(), 700);
          }
        });
    }

    function resetAndStartTimer() {
        if (gameOver) {return;}

        currentTime = maxTime;
        clearInterval(timingInterval);
        timingInterval = setInterval(function() {
            currentTime--;
            if (currentTime <= 0) {
                incrementSong();
                clearInterval(timingInterval);
            }
            $("#timer").html(currentTime);
        }, 1000);
    }

    function incrementSong() {
        indexOfCurrentSong += 1;
        stopMusic();
        // increment progess bar and song # of #
        $("#current-song").html(Math.min(indexOfCurrentSong+1, maxSongCount));
        var newWidth = Math.floor(indexOfCurrentSong/maxSongCount * 100);
        $("#progress-bar").css('width', newWidth.toString() + "%");
        if (playingPlaylist) {
            playSong(playlist[indexOfCurrentSong]);
        } else {
            // genre stream
            getNextGenreSong();
        }
    }

    function getNextGenreSong() {
        var endpointURL = "../../lib/getGenrePlaylist.php";
        var postData = {autoPlayTag: tagID};

        $.ajax({
            url: endpointURL,
            type: "POST",
            dataType: "JSON",
            data: postData,
            success: function(data) {
                console.log(data);
                genreInfo = data;
                playSong(data['nextSong']['SongID']);
            }
        });
    }

    function endGame() {
        //display score div under the guess form
        gameOver = true;
        stopMusic();
        resetAndStartTimer();
        clearInterval(timingInterval);
        $("#search-bar").attr('disabled', 'disabled');
        $("#playBtn").attr('disabled', 'disabled');
        $(".sidebar").removeAttr('disabled');
        console.log("Game ended. Would show score here.");
        if (currentScore < 0) {
            $("#comment").html("Ouch... better luck next time!");
        } else if(currentScore > maxSongCount/2) {
            $("#comment").html("Nicely Done!");
        } else {
            $("#comment").html("Really Impressive!");
        }
        $("#score-div").show();

    }
    // function playError() {
    //     alert("Error playing song... finding new one");
    //     completeSong();
    // }

    // /*
    // ** resets timer and calls method to grab new song **
    // */
    // function initNewSong(autoPlayTag) {
    //     currentTime = maxTime;
    //     getNewGenrePlayList(autoPlayTag);
    // }

    // function completeSong() {
    //     stopMusic();
    //     if (currentSongID !== null) {
    //         completedSongs.push(currentSongID);
    //     }
    //     currentSongCount++;
    //     $(".current_song").html(currentSongCount);
    //     initNewSong(tagID);
    // }

    // function isAlreadyPlayed(songID) {
    //     var exists = false;
    //     for (var i = 0; i < completedSongs.length; i++) {
    //         if (completedSongs[i] == songID) {
    //             exists = true;
    //             break;
    //         }
    //     }
    //     return exists;
    // }
    // /*
    // **
    // */

    // /*
    // ** Gets JSON from genre tag (autoPlayTag) that has our next SongID **
    // */
    // function getNewGenrePlayList(autoPlayTag) {
    //     $.ajax({
    //       url: "../../lib/getGenrePlaylist.php",
    //       type: "POST",
    //       data: {
    //         autoPlayTag: autoPlayTag
    //       },
    //       success: function(response) {
    //         var responseData = jQuery.parseJSON(response);
    //         autoPlayState = JSON.stringify(responseData.autoplayState);
    //         var nextSong = responseData.nextSong.SongID;
    //         console.log("response: "+autoPlayState);
    //         if (isAlreadyPlayed(nextSong) || !response) {
    //             console.log("Either this song has already player or there was no response.");
    //             getNewGenrePlayList(autoPlayTag);
    //         }else{
    //             playSong(nextSong);
    //         }
    //       }
    //     });
    // }

    // function startTimer() {
    //     timingInterval = setInterval(function() {
    //         currentTime--;
    //         if (currentTime <= 0) {
    //             completeSong();
    //             clearInterval(timingInterval);
    //         }
    //         $("#timer").html(currentTime);
    //     }, 1000);
    // }

    function pauseMusic() {
        window.player.pauseStream();
    }

    function resumeMusic() {
        window.player.resumeStream();
    }

    function stopMusic() {
        window.player.stopStream();
    }

    var doc = $(document);

    $(".genre").on("click", function(e) {
        e.preventDefault();
        $(".genre").each(function() {
            $(this).parent().removeClass('genreSelected');
        });
        $(this).parent().addClass('genreSelected');
        tagID = $(this).attr('id');
        if ($(this).hasClass("playlist")) {
            // if is playlist
            playingPlaylist = true;
        } else {
            playingPlaylist = false;
        }
        $("#playBtn").removeAttr('disabled');
    });

    $(".genre").hover(function() {
        $(this).parent().addClass('active');
        $(this).css('color', 'black');
    }, function() {
        $(this).parent().removeClass('active');
        $(this).css('color', 'gray');
    });

    doc.on("click", "#playBtn", function(e) {
        e.preventDefault();
        clearInterval(timingInterval);
        currentTime = maxTime;
        // tagID = $(this).attr('id');
        $("#time-left").html("Loading...");
        if ($("#playBtn").text() == "PLAY" ) {
            $("#playBtn").text("STOP");
            startGame();
        } else {
            $("#playBtn").text("PLAY");
            stopGame();
        }
    });

    doc.on("click", ".pause", function() {
        currentTime += 30;
        pauseMusic();
    });

    doc.on("click", ".resume", function() {
        resumeMusic();
    });

    $('#search-bar').keypress(function (e) {
      if (e.which == 13) {
        e.preventDefault();
        // get the id of the song they selected
        var songName = $("#search-bar").val();
        if (songName === "" || searchSuggestions.options === undefined) {
            return;
        }
        var songIDIndex = searchSuggestions.options.indexOf(songName);
        var chosenSongID = searchSuggestions.ids[songIDIndex];
        console.log(chosenSongID);
        if (chosenSongID == currentSongID) {
            // got song right!
            console.log("Got song right!");
            gotSongRight();
        } else {
            // got song wrong!
            console.log("Wrong!");
            gotSongWrong();
        }
      }
    });


    $('#search-bar').typeahead({
        items: 6,
        autocompleted: function(stuff) {
            console.log("stuff");
        },
        source: _.debounce(function(query, process) {
            $.ajax({
                url:"../../lib/getSearchResults.php",
                type: "POST",
                data:{
                    title: query.value
                },
                dataType: "JSON",
                success: function(data){
                    console.log("Hello");
                    console.log(data);
                    searchSuggestions = data;
                    return process(data.options);
                }
            });
        }, 250)
    });

});