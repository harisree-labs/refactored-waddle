<!DOCTYPE html>
<!-- saved from url=(0034)https://sindresorhus.com/#projects -->
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#3273DC">
	<meta name="author" content="Sindre Sorhus">
	<meta name="description" content="ML &amp; NLP evangelist">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Harisree Labs">
	<meta property="og:url" content="https://harisreelabs.com/">
	<meta property="og:description" content="ML &amp; NLP evangelist">
	<meta property="og:image" content="https://harisreelabs.com/logo.jpg">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@sindresorhus">
	<meta name="twitter:creator" content="@sindresorhus">
	<meta name="x-build-time" content="Fri, 01 Mar 2019 08:01:37 +0000">
	<title>Sindre Sorhus</title>
	<link rel="alternate" type="application/rss+xml" title="Sindre Sorhus&#39; blog" href="https://blog.sindresorhus.com/feed">
	<link rel="preload" href="https://sindresorhus.com/font-awesome.woff" as="font" crossorigin="true">
	<link rel="icon" href="https://sindresorhus.com/favicon.png" sizes="32x32">
	<link rel="stylesheet" href="./assets/main.css">
	<script type="text/javascript" async="" src="./assets/analytics.js"></script>
	<script type="module" src="https://sindresorhus.com/main.js"></script>
	<script src="./assets/timeago.min.js"></script>
	<script type="module" src="./assets/index.js"></script>

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
						<a id="unicorn-btn" class="navbar-item" href="https://sindresorhus.com/logo.jpg" title="Harisree Labs"><img id="profile-pic" src="./assets/logo.jpg" width="50" height="50" itemprop="image" style="max-height: 50px !important"></a>
						<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</a>
					</div>
					<div class="navbar-menu">
						<div class="navbar-end">
							<a class="navbar-item is-tab is-active" href="#home">Home</a>
							<a class="navbar-item is-tab" href="/#articles">Articles</a>
							<a class="navbar-item is-tab" href="/#works">Works</a>
							<a class="navbar-item is-tab" href="/about.html">About</a>
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
						<h2 class="subtitle is-4" itemprop="description">Machine Learning &amp; NLP enthusiast</h2>
						<p>The only way to learn machine learning is to do machine learning.</p>
						<br>
						<p class="has-text-centered">
							<a class="button is-large is-white" href="https://medium.com/harisree-labs">
								<span class="icon">
									<i class="fa fa-pencil"></i>
								</span>
								<span>Blog</span>
							</a>
							<a class="button is-large is-white" href="https://github.com/sreeharibs">
								<span class="icon">
									<i class="fa fa-github"></i>
								</span>
								<span>Code</span>
							</a>
							<a class="button is-large is-white" href="https://twitter.com/sreeharibss">
								<span class="icon">
									<i class="fa fa-twitter"></i>
								</span>
								<span>Tweets</span>
							</a>
						</p>
						<br>
						<a href="https://sindresorhus.com/thanks">Huge thanks to all my amazing supporters!</a>
						<br>
						<br>
						<hr id="latest-blog-post-separator">
						<div id="latest-blog-post" class="visible">
							<h4 class="title is-4">
								<a class="is-gray-link" href="https://medium.com/@sindresorhus/small-focused-modules-9238d977a92a">Small Focused Modules</a>
								<span class="tag is-small">Latest writing</span>
							</h4>
							<p>Make small focused modules for reusability and to make it possible to build larger more advanced things that are easier to reason about.</p>
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
	<section class="hero is-fullheight is-gray">
		<div id="articles" class="hero-body container">
			<div class="columns is-vcentered">
				<div class="column has-text-centered">
					<img id="unicorn-icon" src="./assets/logo.jpg" width="100" height="100">
					<h4 class="title is-4" style="font-weight: 400">Medium</h4>
					<div id="latest-commit">
						<a class="commit-title nice-link" href="https://github.com/sindresorhus/quora-unblocker-userscript/commit/d635fe41cc84d4ef9f742c120c7b40ce97c04565"
							title="See https://github.com/sindresorhus/legal-notices/blob/master/2019-03-01-quora.md">Handle Quora takedown notice</a>
						<br>
						<span style="font-size: 12px">
							<span class="commit-date">13 hours ago</span> in <a class="repo-title" href="https://github.com/sindresorhus/quora-unblocker-userscript">quora-unblocker-userscript</a>
						</span>
					</div>
					<br>
					<a href="https://gitstalk.netlify.com/sindresorhus">Stalk me</a>
				</div>
				<div id="latest-repos-container" class="column is-three-fifths is-offset-1 has-nice-link">
					<h2 class="title is-2">Latest articles</h2>
					<template id="latest-repos-template"></template>
					<div id="latest-repos" class="columns is-multiline">
						<?php
							$json = file_get_contents('https://medium.com/harisree-labs/latest?format=json');

							$re = '/.*({"success":)/m';
							$json = preg_replace($re, '$1', $json);

							$json = json_decode($json, true);
							$url_base = 'https://medium.com/harisree-labs/';

							$i = 0;
							while (isset($json['payload']['posts'][$i]) && $i < 6) {

								$title = $json['payload']['posts'][$i]['title'];
								$subtitle = $json['payload']['posts'][$i]['virtuals']['subtitle'];
								$uniqueSlug = $json['payload']['posts'][$i]['uniqueSlug'];

								echo '<div class="column is-half">
											<h4 class="title is-4">
											<a class="latest-repos-title" href="'.$url_base.$uniqueSlug.'">'.$title.'</a>
											<span class="tag is-small latest-repos-language">¯\_(ツ)_/¯</span>
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
			<p>Some of my showcasable works. Excus</p>
			<br>
			<div class="columns is-multiline">
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/gifski">
						<div class="box">
							<figure class="image">

								<img src="./assets/thumbnail.jpg">
							</figure>
							<h2 class="title">
								<span>Gifski</span>
								<span class="tag is-small is-success">New!</span>
								<span class="tag is-small">macOS</span>
							</h2>
							<p class="subtitle is-6">Convert videos to high-quality GIFs</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/kap">
						<div class="box">
							<figure class="image">

								<img src="./assets/thumbnail(1).jpg">
							</figure>
							<h2 class="title">
								<span>Kap</span>
								<span class="tag is-small">macOS</span>
							</h2>
							<p class="subtitle is-6">Record your screen</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/black-out">
						<div class="box">
							<figure class="image">
								<img src="./assets/thumbnail(2).jpg">

							</figure>
							<h2 class="title">
								<span>Black Out</span>
								<span class="tag is-small">macOS</span>
							</h2>
							<p class="subtitle is-6">Hide sensitive parts of an image</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/heic-converter">
						<div class="box">
							<figure class="image">
								<img src="./assets/thumbnail(3).jpg">
							</figure>
							<h2 class="title">
								<span>HEIC Converter</span>
								<span class="tag is-small">macOS</span>
							</h2>
							<p class="subtitle is-6">Convert HEIC images to JPEG or PNG</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/shareful">
						<div class="box">
							<figure class="image">
								<img src="./assets/thumbnail(4).jpg">
							</figure>
							<h2 class="title">
								<span>Shareful</span>
								<span class="tag is-small is-info">Prerelease</span>
								<span class="tag is-small">macOS</span>
							</h2>
							<p class="subtitle is-6">Give the macOS Share menu superpowers</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/lungo">
						<div class="box">
							<figure class="image">

								<img src="./assets/thumbnail(5).jpg">
							</figure>
							<h2 class="title">
								<span>Lungo</span>
								<span class="tag is-small">macOS</span>
							</h2>
							<p class="subtitle is-6">Prevent your Mac from going to sleep</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/touch-bar-simulator">
						<div class="box">
							<figure class="image">

								<img src="./assets/thumbnail(6).jpg">
							</figure>
							<h2 class="title">
								<span>Touch Bar Simulator</span>
								<span class="tag is-small">macOS</span>
							</h2>
							<p class="subtitle is-6">Use the Touch Bar on any Mac</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/battery-indicator">
						<div class="box">
							<figure class="image">
								<img src="./assets/thumbnail(7).jpg">

							</figure>
							<h2 class="title">
								<span>Battery Indicator</span>
								<span class="tag is-small">macOS</span>
							</h2>
							<p class="subtitle is-6">Remaining battery time in your menu bar</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/caprine">
						<div class="box">
							<figure class="image">
								<img src="./assets/thumbnail(8).jpg">
							</figure>
							<h2 class="title">
								<span>Caprine</span>
								<span class="tag is-small">Cross-platform</span>
							</h2>
							<p class="subtitle is-6">Elegant Facebook Messenger desktop app</p>
						</div>
					</a>
				</div>
				<div class="column is-mobile is-half-tablet is-one-third-desktop">
					<a href="https://sindresorhus.com/blear">
						<div class="box">
							<figure class="image">
								<img src="./assets/thumbnail(9).jpg">
							</figure>
							<h2 class="title">
								<span>Blear</span>
								<span class="tag is-small">iOS</span>
							</h2>
							<p class="subtitle is-6">Transform photos into blurry wallpapers</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>



	<script>
	</script>

</body>

</html>
