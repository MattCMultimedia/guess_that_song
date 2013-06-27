<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body class="container">
		<!--{*Start Menu*}-->
		<div class="wrapper start-menu">
			<div class="row">

				<div class="sidebar span2">
					<!--{*This ul should have as many <li>'s as genres*}-->
					<ul>
						<li><img src=""></li>
						<li><img src=""></li>
						<li><img src=""></li>
						<li><img src=""></li>
						<li><img src=""></li>
					</ul>
				</div>

				<div class="main span7 offset1">
					<div class="page-header">
					  <h2>Guess That Song <small>powered by Grooveshark</small></h2>
					</div>
					<!--{*a form goes here if instead of the <p> they are not loggined into grooveshark*}-->
					<!--{*
						<form action="" method="POST">
							<h4>Username:</h4>
							<input class="input" type="text" name="username" >
							<h4>Password:</h4>
							<input class="input" type="password" name="password" >
						</form>
						*}-->

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<!--{*This button should say Login to GS if they are not logged into grooveshark*}-->
					<button class='btn btn-large btn-warning pull-right'><i class="icon-music"></i> PLAY</button>
				</div>
			</div>
		</div>

		<!--{*Game State*}-->
		<div class="wrapper game-state">
			<div class="row">

				<div class="sidebar span2">
					<!--{*This will be filled with <li>'s corresponding ' *}-->
					<ul>
						<li><img src=""></li>
						<li><img src=""></li>
						<li class="active"><img src=""></li>
					</ul>
				</div>

				<div class="main span7 offset1">
					<div class="page-header">
					  <h2>Guess That Song <small>powered by Grooveshark</small></h2>
					</div>

					<div class="row">
<<<<<<< .merge_file_SltcDL
						<form class="span3">
=======
						<form class="span3" action="" method="POST">	
>>>>>>> .merge_file_JgN0Vb
							<h4>Guess!</h4>
							 <input type="text" class="search-query">
						</form>

						<div class="span4">
							<h4>Song <span class="current_song">6</span> of <span class="total_songs">12</span></h4>
							<div class="progress progress-warning progress-striped active">
							  <!--{* Dont forget javascripts on this Kyle! *} -->
							  <div class="bar" style="width:50%"></div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="span4 offset3">
							<h4>Timer: <span class="timer">12</span></h4>
							<h4>Points: <span class="points">100</span></h4>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!--{*Win Screen*}-->
		<div class="wrapper win-screen">
			<div class="row">

				<div class="sidebar span2">
					<ul>
						<li><img src=""></li>
						<li><img src=""></li>
						<li><img src=""></li>
					</ul>
				</div>

				<div class="main span7 offset1">
					<div class="page-header">
					  <h2>Guess That Song <small>powered by Grooveshark</small></h2>
					</div>

					<div class="row">
<<<<<<< .merge_file_SltcDL
						<div class="span6">
							<h4>You Scored: 1200 pts!</h4>
=======
						<div class="span6">	
							<h4>You Scored: <span class="points">1200 pts!</span></h4>
>>>>>>> .merge_file_JgN0Vb
							<h4>&larr; Share!</h4>
						</div>
						<button class='btn btn-large btn-warning pull-right'></i> PLAY AGAIN</button>
					</div>
				</div>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/grooveshark.js"></script>
	<script src="swfobject/swfobject.js"></script>

	<script>
		swfobject.embedSWF("http://grooveshark.com/APIPlayer.swf", "player", "0", "0", "9.0.0", "", {}, {allowScriptAccess: "always"}, {id:"groovesharkPlayer", name:"groovesharkPlayer"}, function(e) {

	    var element = e.ref;

		    if (element) {
		        setTimeout(function() {
		            window.player = element;
		            window.player.setVolume(99);
		        }, 1500);
		    } else {
		    	console.log("test");
		    }

		});
	</script>
	</body>

</html>