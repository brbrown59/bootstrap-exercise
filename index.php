<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--bootstrap's css-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
				integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
				crossorigin="anonymous"/>
		<!--optional-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
				integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX"
				crossorigin="anonymous"/>
		<!--My CSS-->
		<link rel="stylesheet" href="css/styles.css" type="text/css"/>
		<!--IE8 crosscompatibility-->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--jQuery-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<!--bootstrap's JavaScript-->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
				  integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
				  crossorigin="anonymous"></script>
		<title>Bootstrap Example</title>
	</head>
	<body>
		<header class="content-header">
			<nav class="navbar">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">The Example</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Option A</a></li>
						<li><a href="#">Option 2</a></li>
						<li><a href="#">Moar Cats</a></li>
						<li class="dropdown">
							<!--don't really know what all of these attributes do-->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Select a Cat Breed</a>
							<ul class="dropdown-menu">
								<li><a href="#">Siamese</a></li>
								<li><a href="#">Burmese</a></li>
								<li><a href="#">Russian Blue</a></li>
								<li><a href="#">LOLcat</a></li>
						  </ul>
					  </ul>
				</div>
			</nav>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Cats are pretty cool animals, and we should all look at more pictures of them</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 cat-description">
					<p>How does a cat fit in a coke can?  That is so awesome.</p>
				</div>
				<div class="col-md-3">
					<img src="img/cat-can.gif" alt="Cat in a soda can"/>
				</div>
				<div class="col-md-3 cat-description">
					<p>Seriously, those kittens are in coffee mugs.  That's adorable.</p>
				</div>
				<div class="col-md-3">
					<img src="img/teacups.jpg" alt="Cats in cups"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 first-bottom-text">
					<p>Really, though, I should have thought of some actual content to put here</p>
				</div>
				<div class="col-md-6 second-bottom-text">
					<p>I mean, the cat pictures are cool and all, but that's not a whole lot of stuff.  Still, though, it is pretty cute</p>
				</div>
			</div>
		</div>
		<footer class="content-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Was anything supposed to be in the footer?  Eh, forget it.</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

