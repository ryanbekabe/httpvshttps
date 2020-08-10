<!--
	Created November 2014
	chris@anthum.com
	www.anthum.com
-->
<html>
<head>
	 
	<script src="https://www.httpvshttps.com/check-server.js"></script>
	
	<script>
		function log(o) {if (console) console.log(o);}
		var proto = window.location.protocol;
		proto = proto.substring(0,proto.length-1);
		function setActiveMenu() {
			if ('http' == proto) {
				document.getElementById('menu-http').className += ' active';
			} else if ('https' == proto) {
				document.getElementById('menu-https').className += ' active';
			}
		}
	</script>

	<script> 
		 
		if (!window.supportsLatestHTTPS) {
			document.getElementsByTagName('html')[0].className+= ' unsupported-browser';
		} 		var start = Date.now();
		var elapsedMs;
	</script>
	<meta charset="utf-8">
	<title>HTTP vs HTTPS — Test them both yourself</title>
	<meta name="theme-color" content="#1ac222">
	<meta id="ip-address" name="ip" content="51.79.141.136" />
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

	<meta content="summary" name="twitter:card" />

	<meta name="descripton" content="Encrypted websites protect our privacy and are significantly faster.
			Run this test and prepare to be amazed. ">
	<meta name="twitter:description" content="Encrypted websites protect our privacy and are significantly faster. Run this test and be amazed. #HttpsEverywhere">

	<meta property="og:description" content="Encrypted websites protect our privacy and are significantly faster. Run this test and prepare to be amazed. #HttpsEverywhere">

	<meta property="og:url" content="http://www.httpvshttps.com/">
	<meta name="twitter:url" content="http://www.httpvshttps.com/">

	<meta content="https://www.httpvshttps.com/https-icon-192.png" name="twitter:image" />
	<meta property="og:image" content="http://www.httpvshttps.com/https-icon-share.png">
	<link rel="icon" sizes="192x192" href="https-icon-192.png">

	<meta property="og:title" content="HTTP vs HTTPS Test">
	<meta name="twitter:title" content="HTTP vs HTTPS">

	<!--meta property="og:site_name" content="HTTP vs HTTPS"-->
	<meta property="og:type" content="website">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<style>
		* {
			box-sizing: border-box;
		}
		#try-again img {
			margin-top: 2em;
			width: 40%;
		}
		#try-again {
			text-align: center;
			color: #c00;
		}
		body,html {
			padding: 0;
			margin: 0;
			-webkit-font-smoothing: antialiased;
			text-rendering: optimizeLegibility;
		}
	 	body {
	 		font-family: "Open Sans", sans-serif;
	 		/*font-family: "Roboto", sans-serif;*/
	 		font-weight: 300;
	 		background: #fff;
			color: #404040;
	 		max-width: 860px;
	 		margin: 0 auto;
	 		padding: 0 .5em;
	 	}
	 	strong {
	 		font-weight: 700;
	 	}
		a {
			color: blue;
			text-decoration: none;
		}
		p {
			line-height: 1.4em;
			margin: 0;
		}
	 	.images {
	 		margin: 0 auto 2rem auto;
	 		text-align: center;
	 		overflow: hidden;
	 	}
		.images img {
			width: 20px;
			height: 20px;
			background: #eee;
/*			background: #0b0;
			background: #B00;
*/			border-radius: 50%;
			margin: 0;
			padding: 0;
		}
		.images span {
			padding : .1em;
			float: left;
			line-height: 20px;	
			cursor: default;
			border-radius: 50%;

		}

		#status {
			padding: 0 0 1em 0;
			border-bottom: 2px solid #eaeaea;
			margin-bottom: 1em;
			text-align: center;
			overflow: hidden;
		}
		#time {
			color: orange;
			font-weight: bold;
		}
		.loaded #time {
			color: #0b0;
		}
		.load, #compared {
			text-align: center;
		}
		#compared {
			color: #666;
			/*font-weight: bold;*/
			font-size: 120%;
			font-weight: 400;
			opacity: 0;
			margin-top: .2em;
			transition: all .3s ease-out;
			transform: translateY(1em);
		}
		.loaded #compared {
			opacity: 1;
			transform: translateY(0em);
		}
		.loaded.slower #compared {
			color: #b00;
		}
		.loaded.faster #compared {
			color: #0b0;
		}

		.buttons {
			display: inline-block;
			margin: 1rem 0 0 0;
		}
		.buttons div {
			display: inline-block;
			padding: 0 .5em;
			white-space: nowrap;
		}
		.buttons a {
			display: inline-block;
			padding: .5rem .2rem;
		}
		.buttons div.active {
			border-bottom: 4px solid blue;
		}
		sub,sup {
			position: relative;
			font-size: 65%;
			line-height: 0;
			vertical-align: baseline;
			display: inline-block;
			color: #666;
			left: .25em;

		}
		sub {
			bottom: -.25em;
			left: .1em;
		}
		sup {
			top: -.50em;
		}
		footer {
			padding: 3em 0;
			margin: 2em 0 0 0;
			text-align: center;
			overflow: hidden;
		}
		.author {
			margin-top: 2em;
		}
		.author a {
			padding: 1rem .5rem 1rem .5rem;
		}
		.desc {
			text-align: left;
		}
		.desc br {
			display: none;
		}
		.load {
			margin: 1rem 0 0 0;
			font-size: 2.5rem;
		}
		h1 {
			margin: 1rem 0 0 0;
			font-size: 2rem;
			font-weight: 300;
			/*line-height: 1.5em;*/
			padding:0;
		}
		h1 img {
			height: 24px;
			margin-right: 1em;
		}
		h2 {
			margin: 1rem 0 1rem 0;
			font-size: 1.25rem;
			font-weight: 600;
			line-height: 1.5em;
		}
		h1,h2, .desc p {
			text-align: center;
		}
		.notice {
			color: #c00;
			font-size: 80%;
			display: none;
		}
		#unsupported {
			display: none;
			background: url(warning.png) no-repeat 1em 1em #fcc;
			background-size: 47px 50px;
			border-bottom: 2px solid #F00;
			margin: 0 -.5em;
			padding: .5em .5em .5em 6em;
			font-size: 80%;
			min-height: 6em;
		}
		.unsupported-browser #unsupported {
			display: block;
		}
		.shares {
			height: 1rem;
			margin-bottom: 5rem;
		}
		.share-box {
			display: inline-block;
			width: 7rem;
		}
		.share-box {
			display: inline-block;
			width: 30%;
		}
		.servers {
			margin: 3rem auto 0 auto;
			line-height: 1.5em;
			max-width: 18rem;
		}
		footer p.sup {
			text-align: left;
			margin-top: 1em;
		}
		footer p.sup strong {
			font-weight: 600;
		}
		.sup sup {
			left: 0;
			margin: 0 1em 0 2em;
			font-weight: 600;
		}
		.le {
			font-size: .75rem;
			margin-top: 3rem;
		}
		.le-logo {
			display: block;
			margin-bottom: .5em;
		}

		.desktop {
			display: none;
		}

		@media (min-width : 768px) {
			.buttons {
				display: inline-block;
				margin: 0;
			}
			span.desktop {
				display: inline;
			}
			footer p.sup {
				text-align: left;
				margin: 0;
			}
			.sup {
				font-size: 1rem;
			}
			#unsupported {
				font-size: 100%;
				margin: 0;
				padding: 1rem 1rem 1rem 5rem;
				min-height: 0;
			}
			.images span {
				padding : .25rem;
				float: left;
				margin: 0;
				line-height: 20px;
				text-align: center;
			}

			#try-again img {
				margin-top: 2em;
				width: 20%;
			}

			p {
				line-height: 1.6em;
			}
			#status {
				margin-bottom: 2em;
			}
			.desc {
				float: left;
				width: 68%;
			}
			.desc br {
				display: block;
			}
			.right {
				width: 30%;
				margin: 1em 0;
				float: right;
				/*text-align: right;*/
			}
			footer {
				color: #666;
				margin: 2em 0 2em 0;
				font-size: .7rem;
			}
			.servers {
				margin-top: 4rem;
			}

			h2 {
				margin: 1rem 0 0rem 0;
				font-size: 1rem;
				font-weight: 600;
				line-height: 1.5em;
			}
			h1,h2, .desc p {
				text-align: left;
			}

		}
		.lock {
			margin: 0 .3em;
			fill: blue;
		}
	</style>
	
	 
        <header class="nocontent" id="unsupported">
                Your browser does not support HTTP2, and test results will be inaccurate. Please use the latest version
                of <a href="https://www.google.com/chrome/">Chrome</a> or <a href="https://www.firefox.com">Firefox</a>. 
                (<a href="http://caniuse.com/#search=http2">List of supported browsers</a>).
        </header>
	 

         

		<div id="status">
		<div class="desc">
			<h1>HTTP vs HTTPS Test</h1>
			<h2>Encrypted Websites Protect Our Privacy and are Significantly Faster</h2>
			<p>				
				Compare load times of the unsecure HTTP and encrypted HTTPS versions of this page.
				Each test loads 360 unique, non-cached images <span style="white-space: nowrap;">(0.62 MB</span> total).
				<span class="desktop">For fastest results, run each test 2-3 times in a private/incognito browsing session.</span>
			</p>
		</div>
		<div class="right">
			<span class="buttons">
				<div id="menu-http"><a href="http://www.httpvshttps.com/">HTTP</a></div>
				<div id="menu-https"><a href="https://www.httpvshttps.com/"><svg class="lock" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="52 115 508 556" enable-background="new 0 0 0 0" width="11" height="12"><path d="M231.336,351.324h142.596V288.9v-0.612c0-9.792-1.938-18.972-5.812-27.54s-9.078-16.014-15.606-22.338 c-6.526-6.324-14.075-11.322-22.644-14.994s-17.748-5.508-27.54-5.508s-18.972,1.836-27.54,5.508s-16.116,8.772-22.644,15.3 c-6.528,6.528-11.628,14.076-15.3,22.644c-3.672,8.568-5.508,17.748-5.508,27.54L231.336,351.324L231.336,351.324z M540.396,351.324 c5.304,0,9.791,1.836,13.464,5.508c3.672,3.672,5.508,8.16,5.508,13.464v281.521c0,5.304-1.836,9.792-5.508,13.464 c-3.673,3.672-8.16,5.508-13.464,5.508H71.604c-5.304,0-9.792-1.836-13.464-5.508c-3.672-3.672-5.508-8.16-5.508-13.464V370.295 c0-5.304,1.836-9.792,5.508-13.464c3.672-3.672,8.16-5.508,13.464-5.508h26.928h31.212V288.9c0-23.664,4.59-46.104,13.77-67.32 c9.18-21.216,21.522-39.576,37.026-55.08s33.762-27.846,54.774-37.026c21.012-9.18,43.35-13.77,67.014-13.77 s46.104,4.59,67.32,13.77c21.216,9.18,39.574,21.522,55.078,37.026c15.506,15.504,27.848,33.864,37.026,55.08 s13.771,43.656,13.771,67.32v0.612v61.812h37.942H540.396L540.396,351.324z"></path></svg>HTTPS</a></div>
			</span>
					<div class="load"><span id="time" will-change>0.000 s</span></div>
			<div id="compared" will-change>&nbsp;</div>
				</div>
	</div>

	<script>
		setActiveMenu();

		
		// run the clock and stop when all the images load
		var timeEl = document.getElementById('time');
		var statusEl = document.getElementById('status');
		var clockUpdate;

		function setElapsedTimeDisplay() {
			elapsedMs = (Date.now()-start);
			timeEl.firstChild.data = (elapsedMs/1000).toFixed(3)+' s';
		}

		clockUpdate = window.setInterval(function() {
			setElapsedTimeDisplay();
		}, 17);
		window.onload = function() {
			log("window.onload complete");
			setElapsedTimeDisplay();
			clearInterval(clockUpdate);
			statusEl.className += ' loaded';

			var lastResults = {};
			try {
				lastResults = JSON.parse(atob(document.cookie.replace(/(?:(?:^|.*;\s*)lastResults\s*\=\s*([^;]*).*$)|^.*$/, "$1")));
			} catch (e) {}

			if (!lastResults.id) {
				lastResults.id = Date.now();
				lastResults.ip = document.getElementById('ip-address').getAttribute('content');
			}


			var lastMs = -1;
			if (lastResults.http && proto == 'https') {
				lastMs = lastResults.http;
			} else if (lastResults.https && proto == 'http') {
				lastMs = lastResults.https;
			}

			var otherProto = (proto == 'http')? "HTTPS" : "HTTP";

			var newClass = ' no-compare';
			var compareText = 'Done! Please try '+otherProto+'.';
			if (lastMs> 0) {
				var diffMs = lastMs - elapsedMs;
				var pct = Math.abs(Math.round(diffMs/lastMs*100));
				newClass = ' faster';
				if (diffMs == 0) {
					return; // tie;
				} else if (diffMs < 0) {
					newClass = ' slower';
				}
				compareText = pct+'% '+newClass+' than '+otherProto;
			}
			statusEl.className += newClass;
			document.getElementById('compared').innerHTML = compareText;

			lastResults[proto] = elapsedMs;
			lastResults.proto = proto;
			var lastResultsString = JSON.stringify(lastResults);
			document.cookie = 'lastResults='+btoa(lastResultsString)+'; path=/; max-age=120';
			// log(lastResultsString);


			log("loading external sharing scripts...");

			// GA
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=0;a.src=g;m.parentNode.insertBefore(a,m);
			a.onload=function() {log('google-analytics loaded.')};
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-50610215-2');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');			
			ga('send', 'event', 'httpvshttps.com', 'load-ms', lastResults.id+":"+proto, elapsedMs);
			ga('send', 'event', 'httpvshttps.com', 'load-data', lastResultsString);

			// Twitter Share
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

			// facebook share
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.onload=function() {log('facebook sharing loaded.')};
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=103234283101202&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

			// Google+ Share
			(function() {
				var s = document.createElement('script');
				s.src='https://apis.google.com/js/platform.js';
				s.onload=function() {log('google+ sharing loaded.')};
				document.getElementsByTagName('head')[0].appendChild(s);
			})();
		}
	</script>
	<div class="images" > 
	<?php
		$x = 1;
		$t = time();
		while($x <= 360) {
			$tx = $t."_".$x;
			//echo $tx."<br>";
			echo "<span><img src=\"check.png?$tx\" /></a></span>";
			$x++;
		}
	?>
	</div>
	<footer>
		<div class="shares">
			<div class="share-box">
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.httpvshttps.com" data-text="Encrypted websites protect our privacy and are significantly faster. Run this test and be amazed. #HttpsEverywhere"></a>
			</div>
			<div class="share-box">
				<div class="fb-share-button" data-href="http://www.httpvshttps.com/" data-layout="button_count"></div>
			</div>
			<div class="share-box">
				<g:plusone size="medium" width="200" align="right" href="http://www.httpvshttps.com/"></g:plusone>
			</div>
		</div>

		<p class="sup">
			Only full, end-end encryption ensures complete privacy. <a href="https://bit.ly/cf-ssl">Cloudflare</a> and <a href="https://bit.ly/max-cdn">MaxCDN</a> SSL encryption services compromise privacy by using
			<a href="https://bit.ly/https-compromise">interceptive middle proxy servers</a>.
			HTTPS means &quot;Secure HTTP&quot;. Plaintext HTTP/1.1 is compared against encrypted
                        <a href="https://http2.github.io/">HTTP/2</a> HTTPS on a non-caching, nginx server with a direct, non-proxied connection.
		</p>
		<p class="le">
			<a class="le-logo" href="https://letsencrypt.org/"><img src="letsencrypt-logo-horizontal.svg" width="200" height="48" /></a>
			Free TLS Certificate provided by <a href="https://letsencrypt.org/">Let's Encrypt</a>.
		</p>

		<div class="servers">
			Server location: <a href="servers.png">Dallas, USA</a>. Contact me below if you're getting slow results from Europe or Japan.
		</div>

		<div class="author">
			©2014-2020<a href="https://www.anthum.com/me">Anthum™</a>
			<a href="https://twitter.com/AnthumChris">@AnthumChris</a>
		</div>
	</footer>
	<div id="fb-root"></div>
</body>
</html>
