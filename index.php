<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#3273DC">
	<meta name="author" content="Sindre Sorhus">
	<meta name="description" content="Harisree Labs - About Sreehari">
	<meta property="og:type" content="website">
	<meta property="og:title" content="About">
	<meta property="og:url" content="https://harisree.in/about">
	<meta property="og:description" content="Harisree Labs - Ai &amp; NLP">
	<meta property="og:image" content="https://harisree.in/logo.jpg">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@sreeharibss">
	<meta name="twitter:creator" content="@sreeharibss">
	<meta name="x-build-time" content="Fri, 01 Mar 2019 08:01:37 +0000">
	<title>Sreehari B S | Harisree Labs</title>
	<link rel="alternate" type="application/rss+xml" title="Sreehari B S&#39; blog" href="https://medium.com/harisree-labs">
	<link rel="preload" href="./assets/font-awesome.woff" as="font" crossorigin="true">
	<link rel="icon" href="./assets/favicon.png" sizes="32x32">
	<link rel="stylesheet" href="./assets/main.css">
	<script type="module" src="./assets/main.js"></script>
	<script src="./assets/timeago.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

	<script async="" src="./assets/js"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-25562592-1');
	</script>

</head>

<body>
	<section id="home" class="hero">
		<div class="hero-head">
			<div class="container">
				<nav class="navbar has-shadow is-fixed-top has-background-white" role="navigation" aria-label="main navigation">
					<div class="navbar-brand">
						<a id="unicorn-btn" class="navbar-item" href="#" title="Harisree Labs"><img id="profile-pic" src="./assets/logo.jpg" width="50" height="50" itemprop="image" style="max-height: 50px !important"></a>
						<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</a>
					</div>
					<div class="navbar-menu">
						<div class="navbar-end">
							<a class="navbar-item is-tab is-active" href="#home">Home</a>
							<a class="navbar-item is-tab" href="#articles">Articles</a>
							<a class="navbar-item is-tab" href="#works">Works</a>
							<a class="navbar-item is-tab" href="about.html">About</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</section>
	<style>
		#latest-repos-container h2 {
			margin-bottom: 2rem;
		}

		#latest-repos h4 {
			margin-bottom: 0.5rem;
		}

		.sponsors {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.sponsors a:not(:first-child) {
			margin-left: 10px;
		}
	</style>
	<script type="module">
		// Temp redirect for old URL
if (location.hash === '#apps') {
	location.hash = '';
	location.pathname = '/apps';
}
</script>
	<section class="hero is-fullheight is-default" style="margin-top: 53px;">
		<div class="hero-body">
			<div id="info-container" class="container has-text-centered">
				<div class="columns is-vcentered">
					<div class="column is-two-thirds is-centered has-nice-link" itemscope="" itemtype="http://schema.org/Person">

						<img id="profile-pic" src="./assets/sreehari-bs.jpg" width="160" height="160" itemprop="image">
						<h1 class="title is-2" itemprop="name">Sreehari B S</h1>
						<h2 class="subtitle is-4" itemprop="description">Machine Learning  enthusiast</h2>
						<p>Life would be much easier if I had the source code.</p>
						<br>
						<p class="has-text-centered">
							<a class="button is-large is-white" href="https://medium.com/harisree-labs" target="_blank">
								<span class="icon">
									<i class="fa fa-pencil"></i>
								</span>
								<span>Blog</span>
							</a>
							<a class="button is-large is-white" href="https://github.com/sreeharibs" target="_blank">
								<span class="icon">
									<i class="fa fa-github"></i>
								</span>
								<span>Code</span>
							</a>
							<a class="button is-large is-white" href="https://twitter.com/sreeharibss" target="_blank">
								<span class="icon">
									<i class="fa fa-twitter"></i>
								</span>
								<span>Tweets</span>
							</a>
						</p>
						<br>
						<a href="#">Huge thanks to all my amazing supporters!</a>
						<br>
						<br>
						<hr id="latest-blog-post-separator">
						<div id="latest-blog-post" class="visible">
							<h4 class="title is-4">

								<?php
									$json = file_get_contents('https://medium.com/harisree-labs/latest?format=json');

									$re = '/.*({"success":)/m';
									$json = preg_replace($re, '$1', $json);

									$json = json_decode($json, true);
									$url_base = 'https://medium.com/harisree-labs/';

									$i = 0;

									$title = $json['payload']['posts'][$i]['title'];
									$subtitle = $json['payload']['posts'][$i]['virtuals']['subtitle'];
									$uniqueSlug = $json['payload']['posts'][$i]['uniqueSlug'];
									$tag = $json['payload']['posts'][$i]['virtuals']['tags'][0]['name'];

								?>


								<a class="is-gray-link" href="<?php echo $url_base.$uniqueSlug;?>" target="_blank"><?php echo $title;?></a>
								<span class="tag is-small">Latest writing</span>
							</h4>
							<p><?php echo $subtitle;?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-foot">
			<div class="container">
				<div class="tabs is-centered">
					<ul>
						<li>
							<i id="scroll-hint" class="fa fa-caret-down hidden" aria-hidden="true"></i>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="hero is-fullheight">
		<div id="articles" class="hero-body container">
			<div class="columns is-vcentered">
				<div class="column has-text-centered">
					<img id="unicorn-icon" src="./assets/logo.jpg" width="100" height="100">
					<h4 class="title is-4" style="font-weight: 400">Medium</h4>
					<div id="latest-commit">
						<a class="commit-title nice-link" href="https://medium.com/harisree-labs/">View All Articles</a>
						<br>
						<span style="font-size: 12px">
							<!-- <span class="commit-date">13 hours ago</span> in <a class="repo-title" href="https://github.com/sindresorhus/quora-unblocker-userscript">quora-unblocker-userscript</a> -->
						</span>
					</div>
					<br>
					<a href="https://facebook.com/sreeharibs95">Follow me</a>
				</div>
				<div id="latest-repos-container" class="column is-three-fifths is-offset-1 has-nice-link">
					<h2 class="title is-2">Latest articles</h2>
					<template id="latest-repos-template"></template>
					<div id="latest-repos" class="columns is-multiline">
						<?php

							$i = 0;
							while (isset($json['payload']['posts'][$i]) && $i < 6) {

								$title = $json['payload']['posts'][$i]['title'];
								$subtitle = $json['payload']['posts'][$i]['virtuals']['subtitle'];
								$uniqueSlug = $json['payload']['posts'][$i]['uniqueSlug'];
								$tag = $json['payload']['posts'][$i]['virtuals']['tags'][0]['name'];

								echo '<div class="column is-half">
											<h4 class="title is-4">
											<a class="latest-repos-title" href="'.$url_base.$uniqueSlug.'" target="_blank">'.$title.'</a>
											<span class="tag is-small latest-repos-language" style="color: rgb(51, 51, 51); background-color: rgb(241, 224, 90);">'.$tag.'</span>
											</h4>
											<p class="latest-repos-description">'.$subtitle.'</p>
											</div>';

								$i += 1;
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section hero is-fullheight is-default is-bold">
		<div id="works" class="container">
			<br /><br /><br />
			<h2 class="title is-2">Works</h2>
			<p>I am in the middle of tuning up my works to a demonstrable form. Meanwhile you can browse through my github repository. </p>
			<br>
			<div class="columns is-multiline">
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://github.com/sreeharibs/Review-Analysis">
						<div class="box">
							<figure class="image">
								<img src="./assets/sentiment.jpg">
							</figure>
							<h2 class="title">
								<span>Review</span>
								<span class="tag is-small">GitHub</span>
							</h2>
							<p class="subtitle is-6">
								Sentimental analysis of mobile phone reviews from amazon.
							</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://github.com/harisree-labs/fastText">
						<div class="box">
							<figure class="image">
								<img src="./assets/fasttext.png">
							</figure>
							<h2 class="title">
								<span>Fast Text</span>
								<span class="tag is-small">GitHub</span>
							</h2>
							<p class="subtitle is-6">
								Modificatons to improve malayalam word vector's accuracy.
							</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://github.com/harisree-labs/">
						<div class="box">
							<figure class="image">
								<img src="./assets/github.jpg">
							</figure>
							<h2 class="title">
								<span>Github</span>
								<span class="tag is-small">GitHub</span>
							</h2>
							<p class="subtitle is-6">
								 Explore my github repository
							</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>



	<script>

	$(document).ready(function(){
	  alert("Hi");
	});

	</script>

</body>

</html>
