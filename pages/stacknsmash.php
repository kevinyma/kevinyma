<!DOCTYPE HTML>

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->

<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->

<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->

<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Stack n' Smash | kevin ma</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,600,700,400italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
	<link rel="icon" type="image/png" href="../img/icon.png">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="../js/waypoints.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>

</head>

<body>
	<?php include_once("../php/analyticstracking.php") ?>


	<?php
		include '../php/menu.php';
	?>

	<div class="slide boxslide" id="projectslide" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
			<div id="content" class="grid_12">

				
				<h2 class="projecttitle">Stack n' Smash</h2>
				<p class="projectdescription">Team: Steven Mah, Geoffrey Goh, Yue Zhu, Mike Elfenbein, Audrey Menna.
				</p>

				<img src="../img/box/pixelbg.jpg">
				<br><br>
				<div class="grid_12 paragraph">
					<div class="grid_6">
					<p> Stack n' Smash was concieved as a tower fighting game. 
					</p>
					</div>
					<div class="grid_6 omega">
					<p class="paragraph">
					
					So the big question was: ok now we have this game, why are
					 players leaving? 
					 </p>
					 <p>
					The flash game format allowed us to find out. It enabled us to
					quickly deploy to a series of flash game sites 
					(Newgrounds, Kongregate) with very large, existing userbases. 
					The analytics and player feedback we collected would drive changes in
					subsequent iterations.
					</p>
					</div>

				</div>

			</div>




			<div class="grid_12 margintop">
				<div class="grid_6">
					<img src="../img/box/likeso.jpg" alt="idea">
				</div>
				<div class="grid_6 omega">
				<p class="paragraph">BOX! came from a simple idea. It goes something like this:
				 </p>
				<p class="paragraph">So a 2D object can traverse across the edges of a cube such that it
				 ends up on it’s original face, in a completely different orientation.
				  What! So crazy! Would it work as a flash game? No idea. Only a prototype would tell. A paper prototype. 

				</div>
			</div>

			<div class="grid_12 margintop">
						<div class="grid_6">
						<img src="../img/box/paperprototype.jpg" alt="storyboards">
					</div>
						<div class="grid_6 omega">
						<img src="../img/box/paperprototype2.jpg" alt="storyboards">
					</div>
			</div>

			<div class="grid_12">
				<br>
					<div class="grid_6">	
						<p class="paragraph">Suprise: playtesters grasped the concept of moving across the edges of a rotating cube fairly quickly.
							 </p>
						<p class="paragraph">Early on, we played with mechanics like spikes and player-created boxes. The spikes 
						were eventually cut, because we wanted players to explore without fear of impalement. The boxes however, stayed: they 
						added a layer of complexity in that the player was actively shaping the level.
						</p>

					</div>

					<div class="grid_6 omega">
	<p class="paragraph">
			More interestingly, the paper prototype revealed that at larger level sizes, players began to lose sense of orientation
							 and position within the box. 7*7 was determined to be a size small enough so that player could remember spatial configurations 
							 , yet large enough to allow for interesting, varied level design.

						</p>
						

					</div>

			</div>





			<div id="content" class="grid_12 margintop">
				<img src="../img/box/leveldesign.gif">
				<br><br>
				<div class="grid_12">
				<div class="grid_6">
					<p class="paragraph">
						There was a huge push for level design early on. All team members ideated on sets of levels we could use at various points in the game. We didn't want to create a tutorial. Rather, we hoped to 
						introduce mechanisms as well as the spatial orientation aspect of the game through a series of increasing challenging levels.
					</p>

				</div>

				<div class="grid_6 omega">
					<p>
						As we iterated, we would throw entire levels out the window and make huge revisions on others if they didn't work.
					</p>

				</div>
				</div>

			</div>
			<div id="content" class="grid_12 margintop">
			<h3>Prototyping</h3>
				<div class="grid_6">
				<img src="../img/box/firstprototype.png" alt="first">
				</div>
				<div class="grid_6 omega">
				<img src="../img/box/avgtime.png" alt="avgtime">
				</div>
				<div class="grid_12">
				<br>
				<div class="grid_6">
				<p class="paragraph">The first prototype was a scramble to get the core functionality down. It was released to our friends with 23 levels that we
				had placed in (supposedly) increasing difficulty. </p>
				<p>Prior to release we decided on which analytics we were going to log.
				These included: number players who finish each level, time spent on each level,
				time spent on each box face 
				 number of actions (key press=action) logged on each level, etc. 
				

				</p>

				</div>
				<div class="grid_6 omega">
					<p class="paragraph">A few hundred friends played the prototype (thank you Facebook). Having recorded thousands of values across different fields from our friends into a database,
					 we created a series of data visualizations to see where they were having the most trouble.
					An average time spent on each level is shown above.</p>
					<p>

					Surprise: generally, levels did get more difficult. 
					But, it was obvious the early levels were way too easy, and some levels were near impossible. We went back to the impossible levels 
					and looked at a combination of level-specific data and real people playing through the level, to find out where we went wrong.</p>

				</div>
				</div>
			</div>



				<div id="content" class="grid_12 margintop">

				<h3>Stumbling Blocks</h3>

					

							<img src="../img/box/heatmap.png" alt="heatmap">

							<br><br>

							<div class="grid_6">
							<p>
							A huge challenge that stuck with us throughout 
							different prototypes was: what is the best way to teach a game mechanic. Game mechanics 
							are learned through repetition but what about the first time that mechanic is introduced?
							</p>
							</div>

							<div class="grid_6 omega">

							<p class="paragraph">In the above level, the player is 
							required to build a block to jump on after they fall in the small pit.</p> 
							<p class="paragraph">
							Collecting player analytics allowed us to we overlay heatmaps on all levels; red (warmer) signifies more time
							 spent on a face. In the level above, players were spending a disproportionate amount of time on the second face;
							  they weren't learning the new mechanics, despite our efforts to display them on various parts of the screen. 
							</p>
							</div>

				</div>

					<div id="content" class="grid_12 margintop">
					<h3>Solutions</h3>
						<div class="grid_6">

								<img src="../img/box/nothoughtbubble.png" alt="nothoughtbubble">

						</div>
						<div class="grid_6 omega">

								<img src="../img/box/thoughtbubble.png" alt="thoughtbubble">

						</div>
						<div class="grid_12">
						<br>
							<div class="grid_6">
									<p>At this point we knew we had to seamlessly incorporate the 
									mechanism instructions into the gameplay. After exploring a few possible solutions, 
									I designed and implemented a series of text bubbles 
									that would appear when a player was confronted with a 
									challenge for the first time, or they took too long completing a challenge.</p>
							</div>

							<div class="grid_6 omega">
									<p class="paragraph">Data collected from A/B testing revealed less time spent on each level, 
									and a smaller player fall off rate per level, when the thought bubbles
									 took the place of the control displays we had previously. </p>
									
							</div>
						</div>
					</div>
					<div id="content" class="grid_12 margintop">

							<div class="grid_6">
								<img src="../img/box/finalscreenshot.png" alt="thoughtbubble">
							</div>
							<div class="grid_6 omega">
									<p class="paragraph"><i>BOX!</i> can be played on 
											<a href="http://www.kongregate.com/games/Casiogre/box">Kongregate</a>.
											 We are still tweaking the game, so C&C is very appreciated! </p>
							</div>	
					</div>
				</div>
			</div>


	<?php
		include '../php/thumbnailslide.php';
		$picturename="funkybrothers.jpg";
		include '../php/customcontactslide.php';
		include '../php/footer.php';
	?>

</body>

</html>