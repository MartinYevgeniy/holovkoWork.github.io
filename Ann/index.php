<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<!-- Template Basic Images End -->

	<!-- Bootstrap (latest) Grid Styles Only -->
	<style></style>

	<!-- Header CSS (first screen styles from header.min.css) - inserted in the build of the project -->
	<style>::-webkit-input-placeholder{color:#666;opacity:1}:-moz-placeholder{color:#666;opacity:1}::-moz-placeholder{color:#666;opacity:1}:-ms-input-placeholder{color:#666;opacity:1}body input:focus:required:invalid,body textarea:focus:required:invalid{color:#666}body input:required:valid,body textarea:required:valid{color:#666}body{margin:0;padding:0;font-size:16px;min-width:320px;position:relative;line-height:1.6;font-family:RobotoRegular,sans-serif;overflow-x:hidden}a{color:#000;text-decoration:none;font-size:16px;-webkit-transition:all .3s ease;transition:all .3s ease}a:hover{color:#de6d6e}p{margin:0;color:#636363;font-size:15px}h1{color:#fff;text-transform:uppercase;font-family:RobotoBold,sans-serif;font-size:73px}h3{color:#aeaeae;font-size:20px}h2,h4,h5,h6{color:#404040;font-size:30px;font-family:RobotoLight,sans-serif}h1,h2,h3,h4,h5,h6{text-align:center;margin:0}ul{margin:0}ul li{list-style-type:none}.container{max-width:1170px;margin:0 auto}.header{position:relative;background:url(img/head_bg.jpg) center;min-height:590px;background-size:cover}.header .topline{background-color:rgba(255,255,255,.8)}.header .topline .container .topl_wrap{min-height:90px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.header .topline .container .topl_wrap .logo{background:url(img/logo.png) center;background-size:cover;width:130px;height:52px}.header .topline .container .topl_wrap .top_nav ul li{margin-left:40px;display:inline-block}.header .topline .container .topl_wrap .top_nav ul li.login{-webkit-transition:all .3s ease;transition:all .3s ease;cursor:pointer;padding:3px 10px;-webkit-border-radius:4px;border-radius:4px;background-color:#de6d6e}.header .topline .container .topl_wrap .top_nav ul li.login:hover{background-color:#d02f30}.header .topline .container .topl_wrap .top_nav ul li.login:hover a{color:#fff100}.header .topline .container .topl_wrap .top_nav ul li.login a{color:#fff}.header .content_head .h1_wrap{left:50%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);position:absolute;bottom:65px}.header .content_head .h1_wrap p{text-align:center;color:#fff;font-family:RobotoLight,sans-serif;font-size:29px}.sect1{-webkit-box-shadow:0 1px 4px rgba(0,0,0,.6);box-shadow:0 1px 4px rgba(0,0,0,.6);padding-bottom:50px}.sect1 .container .h2_wrap{margin:60px 0;text-align:center}.sect1 .container .h2_wrap p{font-size:19px;color:#7e7e7e}.sect1 .container .items{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-justify-content:space-around;-ms-flex-pack:distribute;justify-content:space-around}.sect1 .container .items .item{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;width:200px;height:200px;-webkit-border-radius:50%;border-radius:50%;text-align:center;-webkit-transition:all .5s ease;transition:all .5s ease}.sect1 .container .items .item:hover::before{content:"";position:absolute;margin:0;padding:0;width:200px;height:200px;-webkit-border-radius:50%;border-radius:50%;background-color:rgba(0,0,0,.1)}.sect1 .container .items .item:hover .hidden_text{opacity:1}.sect1 .container .items .item:hover i,.sect1 .container .items .item:hover p{opacity:.4}.sect1 .container .items .item i{font-size:90px;color:#fff}.sect1 .container .items .item h4{font-size:18px;color:#fff}.sect1 .container .items .item .hidden_text{position:absolute;font-size:13px;width:150px;opacity:0;color:#fff}.sect1 .container .items .item:nth-child(1){background-color:#4eb9f4}.sect1 .container .items .item:nth-child(2){background-color:#6fc125}.sect1 .container .items .item:nth-child(3){background-color:#ff5649}.sect1 .container .items .item:nth-child(4){background-color:#e48f23}.sect2 .container .wrap_items{margin-top:50px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}.sect2 .container .wrap_items .item_sect2{margin-bottom:60px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.sect2 .container .wrap_items .item_sect2 img{-webkit-transition:all .3s ease;transition:all .3s ease}.sect2 .container .wrap_items .item_sect2 img:hover{-webkit-transform:scale(1.1);-ms-transform:scale(1.1);transform:scale(1.1)}.sect2 .container .wrap_items .item_sect2 .wrap_h3_p{margin-left:20px}.sect2 .container .wrap_items .item_sect2 .wrap_h3_p h3{font-family:RobotoLight,sans-serif;font-size:26px;color:#404040;text-align:left}footer.footer{padding:50px 0;background-color:#242225}footer.footer .container .wrap_foot_all{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}footer.footer .container .wrap_foot_all .wrap_items_foot{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-flex:2;-webkit-flex-grow:2;-ms-flex-positive:2;flex-grow:2;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}footer.footer .container .wrap_foot_all .wrap_items_foot h4{text-align:left;font-size:25px;color:#aeaeae}footer.footer .container .wrap_foot_all .wrap_items_foot .item_foot_list ul{padding:0;margin:0}footer.footer .container .wrap_foot_all .wrap_items_foot .item_foot_list ul li a{color:#aeaeae}footer.footer .container .wrap_foot_all .wrap_items_foot .item_foot_list ul li a:hover{color:#de6d6e}footer.footer .container .wrap_copyright{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}footer.footer .container .wrap_copyright .icons i{font-size:70px;color:#696b6a;margin-left:15px;-webkit-transition:all .3s ease;transition:all .3s ease}footer.footer .container .wrap_copyright .icons i:hover{color:#8f9190}footer.footer .container .wrap_copyright .copyright p{font-size:17px}</style>

	<!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
	<script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)};function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n};function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>

	<!-- Load Fonts CSS Start -->
	<script>
		loadCSS( "css/fonts.min.css?ver=1.0.0", false, "all" ); // Loading fonts, if the site is located in a subfolder
		// loadLocalStorageCSS( "webfonts", "css/fonts.min.css?ver=1.0.0" ); // Loading fonts, if the site is at the root
	</script>
	<!-- Load Fonts CSS End -->

	<!-- Load Custom CSS Start -->
	
	<script>loadCSS( "css/main.min.css?ver=1.0.0", false, "all" );</script>
	<!-- Load Custom CSS End -->

	<!-- Load Custom CSS Compiled without JS Start -->
	<noscript>
		<link rel="stylesheet" href="css/fonts.min.css">
		<link rel="stylesheet" href="css/main.min.css">
	</noscript>
	<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
	<!-- Load Custom CSS Compiled without JS End -->

	<!-- Custom Browsers Color Start -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">
	<!-- Custom Browsers Color End -->

</head>

<body>

	<!-- Custom HTML -->
	<header class="header">
		<div class="topline">
			<div class="container">
				<div class="topl_wrap">
					<div class="logo"></div>
					<nav class="top_nav">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Contact</a></li>
							<li class="login"><a href="reg.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="content_head">
			<div class="h1_wrap">
				<h1>Welcome to pink</h1>
				<p>A multi purpose theme from lalala</p>
			</div>
		</div>
	</header>
	<section class="sect1">
		<div class="container">
			<div class="h2_wrap">
				<h2>Lorem ipsum dolor sit amet.</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet earum eos ex laboriosam laborum maxime <br> quia suscipit 					voluptates 	voluptatum! Lorem ipsum dolor sit amet, consectet
				</p>
			</div>
			<div class="items">
				<div class="item"><i class="fa-ticket fa"></i><h4> tickets</h4>
					<p class="hidden_text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolorum libero magnam obcaecati, rem sint ullam? Fugit 						inventore iusto modi.
					</p>
				</div>
				<div class="item"><i class="fa-camera fa"></i><h4> camera</h4>
					<p class="hidden_text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus laboriosam provident quis saepe sapiente, sit totam. Animi 						at dolorum necessitatibus.
					</p>
				</div>
				<div class="item"><i class="fa-book fa"></i><h4> book</h4>
					<p class="hidden_text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi illum iusto magnam mollitia natus quia, quos 						reiciendis unde vero.
					</p>
				</div>
				<div class="item"><i class="fa-tablet fa"></i><h4> devices</h4>
					<p class="hidden_text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut dolores facere molestias officiis optio sit. Architecto 						laboriosam quos sequi?
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="sect2">
		<div class="container">
			<div class="wrap_items">
				<div class="item_sect2">
					<img src="img/pict_3sec.jpg" alt="lol">
					<div class="wrap_h3_p">
						<h3>Lorem ipsum dolor sit.</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores aspernatur assumenda consectetur consequatur cum cupiditate delectus distinctio dolore earum exercitationem facere fugiat fugit impedit, iure iusto laborum magni nemo nisi nobis provident rem repellat reprehenderit repudiandae sed sequi similique sint unde veniam veritatis vitae voluptate voluptatem voluptatum. Adipisci eaque ipsam non optio quisquam reprehenderit similique suscipit tenetur velit voluptatem.
						</p>
					</div>
				</div>
				<div class="item_sect2">
					<img src="img/pict_3sec.jpg" alt="lol">
					<div class="wrap_h3_p">
						<h3>Lorem ipsum dolor sit.</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores aspernatur assumenda consectetur consequatur cum cupiditate delectus distinctio dolore earum exercitationem facere fugiat fugit impedit, iure iusto laborum magni nemo nisi nobis provident rem repellat reprehenderit repudiandae sed sequi similique sint unde veniam veritatis vitae voluptate voluptatem voluptatum. Adipisci eaque ipsam non optio quisquam reprehenderit similique suscipit tenetur velit voluptatem.
						</p>
					</div>
				</div>
				<div class="item_sect2">
					<img src="img/pict_3sec.jpg" alt="lol">
					<div class="wrap_h3_p">
						<h3>Lorem ipsum dolor sit.</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores aspernatur assumenda consectetur consequatur cum cupiditate delectus distinctio dolore earum exercitationem facere fugiat fugit impedit, iure iusto laborum magni nemo nisi nobis provident rem repellat reprehenderit repudiandae sed sequi similique sint unde veniam veritatis vitae voluptate voluptatem voluptatum. Adipisci eaque ipsam non optio quisquam reprehenderit similique suscipit tenetur velit voluptatem.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="wrap_foot_all">
				<div class="wrap_items_foot">
					<div class="item_foot_list">
						<h4>Another info</h4>
						<ul>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
						</ul>
					</div>
					<div class="item_foot_list">
						<h4>Another info</h4>
						<ul>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
						</ul>
					</div>
					<div class="item_foot_list">
						<h4>Another info</h4>
						<ul>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
						</ul>
					</div>
					<div class="item_foot_list">
						<h4>Another info</h4>
						<ul>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
							<li><a href="#">link to...</a></li>
						</ul>
					</div>
				</div>
				<div class="wrap_copyright">
					<div class="icons"><i class="fa-facebook-square fa"></i><i class="fa-facebook-square fa"></i><i class="fa-facebook-square fa"></i><i class="fa-facebook-square fa"></i></div>
					<div class="copyright"><p>copyright 2017, by Ann Zavodskaya</p></div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Optimized loading JS Start -->
	<script>var scr = {"scripts":[
		{"src" : "js/libs.min.js", "async" : false},
		{"src" : "js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Optimized loading JS End -->

</body>
</html>
