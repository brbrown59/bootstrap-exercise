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
		<link rel="stylesheet" href="/css/styles.css"/>
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
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">The Example</a>
				</div>
			</nav>
		</header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="lead-paragraph">This is some content.  It's probably not good content; I'm really just rambling to fill up space.  I mean,
						I might put a few pictures in other containers just to test them, but this is merely a simple example project
						and I don't want to go to extreme lengths when bootstrap is already giving me one heck of a challenge.  So,
						you get these dry ramblings that you probably don't want to read.  Sorry.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p>More meaningless, rambling text that's just here to fill space.  Really though, I should put some images here.</p>
				</div>
				<div class="col-md-3">
					<img src="img/cat-can.gif" alt="Cat in a soda can"/>
				</div>
				<div class="col-md-3">
					<p>Isn't that a cute picture?  Man, cats are awesome.  Let me get another one.</p>
				</div>
				<div class="col-md-3">
					<img src="img/teacups.jpg" alt="Cats in cups"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p>Really, though, I should have thought of some actual content to put here</p>
				</div>
				<div class="col-md-6">
					<p>I mean, the cat pictures are cool and all, but that's not a whole lot of stuff.  Still, though, it is pretty cute</p>
				</div>
			</div>
		</div>
		<footer class="content-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>What was supposed to go in the footer?  Eh, forget it.</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

