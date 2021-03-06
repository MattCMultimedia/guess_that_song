<?php

?>

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
						<form class="span3" action="" method="POST">	
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
						<div class="span6">	
							<h4>You Scored: <span class="points">1200 pts!</span></h4>
							<h4>&larr; Share!</h4>
						</div>
						<button class='btn btn-large btn-warning pull-right'></i> PLAY AGAIN</button>
					</div>
				</div>
			</div>
		</div>

	<script type="text/javascript" src=""></script>	
	</body>

</html>