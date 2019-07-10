<!doctype html>
<html lang="en">
<head>
  <?php Define ('BASE_URL','https://adityaarolkar.com/');?>
  <!-- ?php Define ('BASE_URL','https://adityaarolkarcompany.000webhostapp.com/');? -->
  <!-- ?php Define ('BASE_URL','http://localhost/adi/');? -->
  <!--meta http-equiv="Content-Type" content="text/html; charset=windows-1252"-->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta name="description" content="My name is Aditya Arolkar and I&#39;m a Website developer. I am proficient in building Responsive, cross-browser and cross-platform compatible websites and web applications." />
	<meta name="keywords" content="front end developer, react, reactjs, redux, reduxjs angular, angularjs, node, nodejs, fullstack, website, website developer, website designer, ui Developer, user interface developer, user interface designer, ui designer, user experience, ux designer, ux developer, front end web developer, web developer, developer, web analyst, seo, google anaytics, web analytics, freelancer, ui, ux, responsive, cross-browser compatible, wordpress, bootstrap, zurb foundation, photoshop, html5, css3, jquery, javascript, js, front end, portfolio, resume, cv" />
	<meta name="author" content="Aditya Arolkar" />
	<meta name="robots" content="index,follow" />
	<meta property="og:title" content="Aditya Arolkar | Front End Developer" />
	<meta property="og:site_name" content="Aditya Arolkar | Front End Developer" />
	<meta property="og:url" content="http://adityaarolkar.com" />
	<meta property="og:image" content="<?php echo BASE_URL; ?>img/aditya-logo.png" />
	<meta property="og:description" content="My name is Aditya Arolkar and I&#39;m a Website developer. I design and code things on the web." />
	<meta property="og:type" content="website" />
  <link rel="canonical" href="http://adityaarolkar.com"/>
  <meta name="theme-color" content="#FF9A19">
	<title>Aditya Arolkar | Front End Developer</title>
  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php echo BASE_URL; ?>favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
  <style>
		.spinner{width:100px;height:50px;position:absolute;top:0;bottom:0;right:0;left:0;margin:auto;text-align:center}.spinner .ball{width:20px;height:20px;background-color:#FF9A19;border-radius:50%;display:inline-block;-webkit-animation:motion 3s cubic-bezier(.77,0,.175,1) infinite;animation:motion 3s cubic-bezier(.77,0,.175,1) infinite}@-webkit-keyframes motion{0%,100%,50%{-webkit-transform:translateX(0) scale(1);transform:translateX(0) scale(1)}25%{-webkit-transform:translateX(-50px) scale(.3);transform:translateX(-50px) scale(.3)}75%{-webkit-transform:translateX(50px) scale(.3);transform:translateX(50px) scale(.3)}}@keyframes motion{0%,100%,50%{-webkit-transform:translateX(0) scale(1);transform:translateX(0) scale(1)}25%{-webkit-transform:translateX(-50px) scale(.3);transform:translateX(-50px) scale(.3)}75%{-webkit-transform:translateX(50px) scale(.3);transform:translateX(50px) scale(.3)}}
		#backdrop{position:fixed !important;z-index:1000;width:100%;height:100%;background:#fff;}
	</style>
	<!-- Bootstrap Core CSS -->
  <link href="<?php echo BASE_URL; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo BASE_URL; ?>css/freelancer.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo BASE_URL; ?>css/style.min.css" rel="stylesheet" type="text/css" />
	<link rel=”author” href="https://google.com/+ADITYAAROLKAR" />
  <!-- Custom Fonts -->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
  <link href="https://fonts.googleapis.com/css?family=Ubuntu|Lato:400,700,400italic,700italic|Neucha|Old+Standard+TT" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>js/pre-script.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
	<script>
	// Wait for window load
    $(window).load(function() {
      // Animate loader off screen
      $('#backdrop').fadeOut('slow',function(){
        $(this).remove();
      });
    });
  </script>
  <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0019/2921.js" async="async"></script>
</head>
<body id="page-top" class="index">
	<!--Loader-->
	<div id="backdrop" >
			<div class="spinner">
			  <div class="ball"></div>
			</div>
		</div>
	</div>
	<!--Menu-->
	<div class="container">
		<div class="menu">
			<div class="menu-bg js-blur"></div>
			<nav class="menu-items">
				<a href="#profile" class="page-scroll menu-item">
					<span  class="js-blur">Profile</span>
				</a>
				<a href="#portfolio" class="page-scroll menu-item">
					<span class="js-blur">About Me</span>
				</a>
				<a href="#work" class="page-scroll menu-item">
					<span class="js-blur">Portfolio</span>
				</a>
				<a href="#contact" class="page-scroll menu-item">
					<span class="js-blur">Contact</span>
				</a>
			</nav>
		</div>
		<button id="menu" class="menu-toggle"><span>Open Menu</span></button>
		<div class="logo" id="logo">
			<img src="<?php echo BASE_URL; ?>img/aditya-logo.png" alt="Aditya Arolkar Logo">
      <span class="ball">.</span>
    </div>
	</div>
    <!-- Header Section-->
    <div id="profile" class="row">
      <div class="col-sm-7">
        <header data-section-name="profile" class="panels">
          <div id="maincontent" tabindex="-1">
            <div class="row">
              <div class="col-lg-12">
                <div class="profile">
                  <div class="profile-pic hidden-sm hidden-lg hidden-md">
                    <span class="profile-image"></span>
                    <span class="shine"></span>
                  </div>
                  <div class="name"><h1>Aditya Arolkar</h1></div>
                  <hr class="star-light">
                  <h2 class="skills">Web Developer - UI/UX Designer - Web Analyst</h2>
                  <h4 class="intro">I design and code things on the web. </h4>
                </div>
              </div>
            </div>
          </div>
      	</header>
      </div>
      <div class="col-sm-5 full-height hidden-xs">
        <div class="main-pic-cont">
          <img class="main-pic formal" alt="Aditya Arolkar" style="max-width:100%;" src="<?php echo BASE_URL; ?>img/aditya-arolkar-formal.png"/>
          <img class="main-pic casual" alt="Aditya Arolkar" style="max-width:100%;" src="<?php echo BASE_URL; ?>img/aditya-arolkar.png"/>
          <span class="shine"></span>
        </div>
      </div>
      <div class="back-canvas">
        <canvas class="containers" id="canvascontainer" role="main"></canvas>
        <div class="blur blurBottom">
          <canvas width="1000px" height="1000px"     class="canvas" id="blurCanvasBottom">
          </canvas>
        </div>
      </div>
      <div class="scrollIndicator hidden-xs">
        <a href="#portfolio">
          <svg viewBox="0 0 22 34">
            <path class="st0" d="M11,33L11,33C5.5,33,1,28.5,1,23V11C1,5.5,5.5,1,11,1h0c5.5,0,10,4.5,10,10v12C21,28.5,16.5,33,11,33z"></path>
          </svg>
        </a>
        <div></div>
      </div>
      <div class="divider"></div>
    </div>

    <!-- About Section -->
    <section id="portfolio" data-section-name="about_me" class="panels">
      <div class="container portfolios">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>My Forte</h2>
    		    <h6 class="subhead">"He's a silent guardian, a watchful protector, a Dark Knight."</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-sm-11 col-md-offset-1">
            <h4>For over 5 years, I have been building responsive, cross-browser and cross-platform compatible websites with cutting edge technologies giving finest user experience and are optimized for SEO & equiped with web analytics.</h4>
					<div class="skills">
    				<div class="skill_row row">
              <div class="col-lg-4 col-sm-3">
    						<h6 class="sub_head">Web Languages</h6>
              </div>
              <div class="col-lg-8 col-sm-9">
    						<div class="text-center skill_set">
    							<div title="HTML 5" class="ico_sprite html"></div>
                </div>
    						<div class="text-center skill_set">
    							<div title="CSS 3" class="ico_sprite css"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="JavaScript" class="ico_sprite js"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="PHP" class="ico_sprite php"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="jQuery" class="ico_sprite jquery"></div>
    						</div>
    					</div>
    				</div>
    				<div class="skill_row row">
              <div class="col-lg-4 col-sm-3">
    						<h6 class="sub_head">Technologies</h6>
              </div>
              <div class="col-lg-8 col-sm-9">
                <div class="text-center skill_set">
                  <div title="NodeJS" class="ico_sprite node"></div>
                </div>
    						<div class="text-center skill_set">
    							<div title="SASS" class="ico_sprite sass"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="LESS" class="ico_sprite less"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="Responsive Web Design" class="ico_sprite rwd"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="Search Engine Optimization" class="ico_sprite seo"></div>
    						</div>
    					</div>
    				</div>
    				<div class="skill_row row skill-text">
              <div class="col-lg-4 col-sm-3">
    						<h6 class="sub_head m-t-0">JavaScript Libraries</h6>
              </div>
              <div class="col-lg-8 col-sm-9">
                <div class="flex-parent">
                  <div class="text-center skill_set">
              			<div class="skill_name">ReactJS</div>
      						</div>
                  <div class="text-center skill_set">
                    <div class="skill_name">ReduxJS</div>
                  </div>
                  <div class="text-center skill_set">
      							<div class="skill_name">AngularJS</div>
      						</div>
      						<div class="text-center skill_set">
      							<div class="skill_name">ThreeJS</div>
      						</div>
                  <div class="text-center skill_set">
      							<div class="skill_name">SailsJS</div>
      						</div>
      						<div class="text-center skill_set">
      							<div class="skill_name">D3JS</div>
      						</div>
                </div>
    					</div>
    				</div>
    				<div class="skill_row row">
              <div class="col-lg-4 col-sm-3">
    						<h6 class="sub_head">Tools</h6>
              </div>
              <div class="col-lg-8 col-sm-9">
    		        <div class="text-center skill_set">
    							<div title="Adobe Photoshop" class="ico_sprite photoshop"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="GitHub" class="ico_sprite github"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="Jira" class="ico_sprite jira"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="Google Analytics" class="ico_sprite googleanalytics"></div>
    						</div>
    						<div class="text-center skill_set">
    							<div title="MySQL" class="ico_sprite mysql"></div>
    						</div>
    					</div>
    				</div>
            <div class="skill_row row skill-text">
              <div class="col-lg-4 col-sm-3">
                <h6 class="sub_head m-t-0">Web Frameworks</h6>
              </div>
              <div class="col-lg-8 col-sm-9">
                <div class="flex-parent">
                  <div class="text-center skill_set">
                    <div class="skill_name">WordPress</div>
                  </div>
                  <div class="text-center skill_set">
                    <div class="skill_name">Twitter Bootstrap</div>
                  </div>
                  <div class="text-center skill_set">
                    <div class="skill_name">Zurb Foundation</div>
                  </div>
                  <div class="text-center skill_set">
                    <div class="skill_name">CodeIgniter</div>
                  </div>
                  <div class="text-center skill_set">
                    <div class="skill_name">Vanilla Forums</div>
                  </div>
                </div>
              </div>
            </div>
					</div>
				</div>
      </div>
    </div>
  </section>
	<!--Work Section-->
	<section id="work" data-section-name="portfolio" class="panels">
		<div class="col-lg-12 text-center">
			<h2>Some of my Work</h2>
			<h6 class="subhead">"It's not who you are underneath, but what you do that defines you"</h6>
		</div>
		<div id="slideshow" class="slideshow">
			<ul>
				<li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<img class="project-snap" src="<?php echo BASE_URL; ?>img/work/soulwaters.png" alt="SoulWaters"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>SoulWaters</h3>
                  <p>Designed and developed the website on WordPress with HTML, CSS, JavaScript. </p>
									<p>Created multisite blog sites for running 2 different blog pages simultaneously.</p>
									<p>Developed creative animations using jQuery and pure JavaScript for interactive activities for <a class="inlinks" href="https://www.soulwaters.com/self_empowerment/" target="_blank">Self Empowerment</a></p>
									<a href="https://soulwaters.net" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Website</span>
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
                  <img class="project-snap" src="<?php echo BASE_URL; ?>img/work/nimzo.png" alt="Nimzo 98"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>Nimzo 98 - Domain registrar</h3>
                  <p>Designed & developed the Domain Registrar website on Angular JS, Bootstrap & PHP.</p>
                  <p>Integrated secure payment gateway with Stripe Payments.</p>
									<a href="https://www.nimzo98.com/" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Website</span>
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
        <li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7 m-t-30">
                  <img class="project-snap" src="<?php echo BASE_URL; ?>img/work/houm.png" alt="Houm Technologies"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>Houm</h3>
									<p>Enables users to build their digital webspace with ownership.</p>
                  <p>Developed the web app using ReactJS, ReduxJS, NodeJS, SailsJS & ExpressJS.</p>
                  <p>Used package managers and bundlers like NPM, Bower, Grunt, Gulp, Webpack, etc.</p>
									<!--a href="https://houm.me/" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Web App</span>
										</button>
									</a-->
								</div>
							</div>
						</div>
					</div>
				</li>
        <li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
                  <img class="project-snap" src="<?php echo BASE_URL; ?>img/work/houm-onboarding.png" alt="Houm Technologies"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>Houm Onboarding</h3>
                  <p>Developed a 3D website for explaing concept of Houm as a story.</p>
                  <p>Used ThreeJS, AnimateJS, Lottie and GSAP Animation.</p>
									<!--a href="https://www.houm.me/onboarding" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Website</span>
										</button>
									</a-->
								</div>
							</div>
						</div>
					</div>
				</li>
        <li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<img class="project-snap" src="<?php echo BASE_URL; ?>img/work/ztedevice.png" alt="ZTE Devices"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>ZTE Devices</h3>
									<p>Showcase website for ZTE mobile devices launched in India.</p>
									<p>Developed the website using HTML, SASS, JavaScript & jQuery.</p>
									<p>Added SEO meta tags and web analytics.</p>
									<!--a href="http://brandmoversindia.com/ztedevice/htdocs/" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Website</span>
										</button>
									</a-->
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<img class="project-snap yatra" src="<?php echo BASE_URL; ?>img/work/yatra.png" alt="Yatra.com"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>Yatra.com</h3>
									<p>Contest page for Yatra.com for members to upload memories.</p>
									<p>Developed the website using CodeIgniter with HTML, SASS, JavaScript, jQuery and PHP. </p>
									<p>Converted website from PSD(Adobe Photoshop File) to HTML.</p>
									<!--a href="http://brandmoversindia.com/yatra-photo-contest/public" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Website</span>
										</button>
									</a-->
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<img class="project-snap" src="<?php echo BASE_URL; ?>img/work/hometown.png" alt="Hometown"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>HomeTown</h3>
									<p>Online shopping website for Hometown.</p>
									<p>Developed the website with HTML, SASS, JavaScript, jQuery.</p>
									<p>Made all the pages compatible for integration with shopping cart.</p>
									<a href="https://www.hometown.in/" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Website</span>
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<img class="project-snap" src="<?php echo BASE_URL; ?>img/work/hearing-delight.png" alt="Hearing Delight"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>Hearing Delight</h3>
                  <p>Designed and developed the website with HTML, SCSS, JavaScript. </p>
									<p>Built a contact form using AJAX and PHP to send a message from user as a mail to client.</p>
									<p>Converted website from AI(Adobe Illustrator File) to HTML.</p>
									<a href="https://hearingdelight.com" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Website</span>
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<img class="project-snap" src="<?php echo BASE_URL; ?>img/work/cometchat.png" alt="CometChat"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>CometChat</h3>
									<p>Customizable chat application for website.</p>
									<p>Designed and developed the website using Bootstrap with PHP, HTML, LESS, JavaScript. </p>
									<p>Created Blog, Documentation and Forum page using Vanilla Forums and Wordpress.</p>
									<!--a href="http://www.cometchat.com" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Website</span>
										</button>
									</a-->
								</div>
							</div>
						</div>
					</div>
				</li>
				<!--li>
					<div class="slide">
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<img class="project-snap" src="<?php echo BASE_URL; ?>img/work/zenopinion.png" alt="ZenOpinion"/>
								</div>
								<div class="col-md-5 project-description">
									<h3>ZenOpinion</h3>
									<p>Feedback plugin for your website.</p>
									<p>Designed and developed the website using Foundation Zurb with HTML, CSS, JavaScript, jQuery. </p>
									<p>Added SEO meta tags and web analytics with Google Analytics.</p>
									<a href="http://www.zenopinion.com" target="_blank">
										<button class="button button--line button--effect-2">
											<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
												<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
													<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
												</svg>
											</span>
												<span type="submit" class="button__text btns">Visit Website</span>
										</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li-->
				<li>
					<div class="slide">
						<!--div class="more">
							<p>Some more Clients</p>
							<div class="row">
								<div class="col-lg-4">
									<img class="project-snap" src="<?php echo BASE_URL; ?>img/work/zenopinion.png" alt="Browser Icon"/>
								</div>
								<div class="col-lg-4">
									<img class="project-snap" src="<?php echo BASE_URL; ?>img/work/zenopinion.png" alt="Browser Icon"/>
								</div>
								<div class="col-lg-4">
									<img class="project-snap" src="<?php echo BASE_URL; ?>img/work/zenopinion.png" alt="Browser Icon"/>
								</div>
							</div>
						</div-->
						<div class="more-link">
							<i class="fa fa-4x fa-linkedin"></i>
							<h3>Looking for more:</h3>
							<p>Check out the projects I have worked on in my Linkedin Profile</p>
							<a href="https://www.linkedin.com/in/adityaarolkar/#projects" target="_blank">
								<button class="button button--line button--effect-2">
									<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
										<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
											<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
										</svg>
									</span>
										<span type="submit" class="button__text btns">Visit Now</span>
								</button>
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
    <!-- Contact Section -->
  <section id="contact" data-section-name="contact" class="panels">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Got a project?</h2>
          <h6 class="subhead">"The bat signal goes on and he shows up."</h6>
        </div>
      </div>
      <div class="row contact-section">
        <div class="contact-form col-md-5 col-sm-11 col-md-offset-1 ">
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row control-group">
              <div class="form-group col-xs-12 controls">
    						<span class="input input--shoko">
    							<input class="form-control input__field input__field--shoko" type="text" id="name" required data-validation-required-message="Please enter your name."/>
    							<label class="input__label input__label--shoko" for="name">
    								<span class="input__label-content input__label-content--shoko">Name</span>
    							</label>
    							<svg class="graphic graphic--shoko" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
    								<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
    								<path d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"/>
    							</svg>
    						</span>
			          <p class="help-block text-danger"></p>
		          </div>
            </div>
		        <div class="row control-group">
              <div class="form-group col-xs-12 controls">
    						<span class="input input--shoko">
    							<input class="input__field input__field--shoko form-control" type="email" id="email" required data-validation-required-message="Please enter your email address."/>
    							<label class="input__label input__label--shoko" for="email">
    								<span class="input__label-content input__label-content--shoko">Email Address</span>
    							</label>
    							<svg class="graphic graphic--shoko" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
    								<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
    								<path d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"/>
    							</svg>
    						</span>
  					    <p class="help-block text-danger"></p>
		          </div>
            </div>
              <div class="row control-group messagebox">
                <div class="form-group col-xs-12 controls ">
      						<span class="input input--shoko">
      							<textarea rows="3" class="input__field input__field--shoko form-control" type="text" id="message" required data-validation-required-message="Please enter a message."></textarea>
      							<label class="input__label input__label--shoko" for="message">
      								<span class="input__label-content input__label-content--shoko">Message</span>
      							</label>
      							<svg class="graphic graphic--shoko" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
      								<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
      								<path d="M0,2.5c0,0,298.666,0,399.333,0C448.336,2.5,513.994,13,597,13c77.327,0,135-10.5,200.999-10.5c95.996,0,402.001,0,402.001,0"/>
      							</svg>
      						</span>
      						<p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success">
		          </div>
      				<div class="row">
      					<div class="form-group col-xs-12">
      						<button class="button button--line button--effect-2">
      							<span class="morph-shape" data-morph-active="M282.5,62.5c0,27.891-8.648,51.994-36.5,50.5c-24.049-1.29-44.75-8-96-8c-56.75,0-71.952,6.71-96,8c-27.851,1.494-36.5-22.609-36.5-50.5l0,0C17.5,34.609,26.215,9.572,54,12c23.973,2.095,39.75,7,96,7c51.502,0,72.01-5.125,96-7C273.807,9.827,282.5,34.609,282.5,62.5L282.5,62.5z">
      								<svg width="100%" height="100%" viewBox="0 0 300 125" preserveAspectRatio="none">
      									<path d="M286.5,62.5c0,27.891-12.609,50.5-40.5,50.5c-44.25,0-44.75,0-96,0c-56.75,0-56.5,0-96,0c-27.891,0-40.5-22.609-40.5-50.5l0,0C13.5,34.609,26.109,12,54,12c39.5,0,39.75,0,96,0c51.502,0,51.5,0,96,0C273.891,12,286.5,34.609,286.5,62.5L286.5,62.5z"/>
      								</svg>
      							</span>
      							<span type="submit" class="button__text btns">Submit</span>
      						</button>
      					</div>
      				</div>
    		    </form>
          </div>
  	<!-- Footer -->
    		<div class="col-md-5 col-md-offset-1 col-sm-12 ">
    			<div class="row">
    				<div class="footer-col col-md-12 col-sm-6">
    					<h3>Shoot a Mail</h3>
    					<p><a href="mailto:adityaarolkar@gmail.com">adityaarolkar[at]gmail.com</a>
    				</div>
    				<div class="footer-col col-md-12 col-sm-6">
    					<h3>Give a Call</h3>
    					<p><a href="tel:+91 8169891810">+91 8169891810</a>
    				</div>
    				<div class="footer-col col-md-12">
    					<h3>Find me on</h3>
    					<ul class="list-inline social-buttons">
    						<li>
    							<a href="http://in.linkedin.com/in/adityaarolkar" target="_blank" class="btn-social btns">
    								<button class="button button--line button--round button--effect-1">
    									<span class="morph-shape" data-morph-active="M251,150c0,93.5-29.203,143-101,143S49,243.5,49,150C49,52.5,78.203,7,150,7S251,51.5,251,150z">
    										<svg width="100%" height="100%" viewBox="0 0 300 300" preserveAspectRatio="none">
    											<path d="M281,150c0,71.797-59.203,131-131,131S19,221.797,19,150S78.203,19,150,19S281,78.203,281,150z"/>
    										</svg>
    									</span>
    									<span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i>
    								</button>
    							</a>
    						</li>
    						<li>
    							<a href="https://www.facebook.com/adityaarolkar19" target="_blank" class="btn-social btns button__text">
    								<button class="button button--line button--round button--effect-1">
    									<span class="morph-shape" data-morph-active="M251,150c0,93.5-29.203,143-101,143S49,243.5,49,150C49,52.5,78.203,7,150,7S251,51.5,251,150z">
    										<svg width="100%" height="100%" viewBox="0 0 300 300" preserveAspectRatio="none">
    											<path d="M281,150c0,71.797-59.203,131-131,131S19,221.797,19,150S78.203,19,150,19S281,78.203,281,150z"/>
    										</svg>
    									</span>
    									<span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i>
    								</button>
    							</a>
    						</li>
    						<li>
    							<a href="https://twitter.com/adiarolkar" target="_blank" class="btn-social btns">
    								<button class="button button--line button--round button--effect-1">
    									<span class="morph-shape" data-morph-active="M251,150c0,93.5-29.203,143-101,143S49,243.5,49,150C49,52.5,78.203,7,150,7S251,51.5,251,150z">
    										<svg width="100%" height="100%" viewBox="0 0 300 300" preserveAspectRatio="none">
    											<path d="M281,150c0,71.797-59.203,131-131,131S19,221.797,19,150S78.203,19,150,19S281,78.203,281,150z"/>
    										</svg>
    									</span>
    									<span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i>
    								</button>
    							</a>
    						</li>
    						<li>
    							<a href="https://www.instagram.com/adiarolkar/" target="_blank" class="btn-social btns button__text">
    								<button class="button button--line button--round button--effect-1">
    									<span class="morph-shape" data-morph-active="M251,150c0,93.5-29.203,143-101,143S49,243.5,49,150C49,52.5,78.203,7,150,7S251,51.5,251,150z">
    										<svg width="100%" height="100%" viewBox="0 0 300 300" preserveAspectRatio="none">
    											<path d="M281,150c0,71.797-59.203,131-131,131S19,221.797,19,150S78.203,19,150,19S281,78.203,281,150z"/>
    										</svg>
    									</span>
    									<span class="sr-only">Instagram</span><i class="fa fa-fw fa-instagram"></i>
    								</button>
    							</a>
    						</li>
    						<!--li><button class="button button--line button--round button--effect-1">
    								<span class="morph-shape" data-morph-active="M251,150c0,93.5-29.203,143-101,143S49,243.5,49,150C49,52.5,78.203,7,150,7S251,51.5,251,150z">
    									<svg width="100%" height="100%" viewBox="0 0 300 300" preserveAspectRatio="none">
    										<path d="M281,150c0,71.797-59.203,131-131,131S19,221.797,19,150S78.203,19,150,19S281,78.203,281,150z"/>
    									</svg>
    								</span>
    								<a class="btn-social btns"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
    							</button>
    						</li-->
    					</ul>
    				</div>
    			</div>
    		</div>
  	</div>
  </div>
  	<div class="row container footer">
  		<div class="col-lg-12 text-center post-footer">
  				&copy; Aditya Arolkar 2019
  		</div>
  	</div>
  </section>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#profile">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
	<div class="nominees">
		<a href="http://www.designnominees.com/sites/aditya-arolkar-portfolio" title="Design Nominees" style="width:70px;height:132px;position:fixed;top:300px;left:0px;z-index:99999;text-indent:-9999px;background: url(http://www.designnominees.com/ribbons/designnominees-ribbon-white-left.png) no-repeat;" target="_blank">Design Nominees</a>
	</div>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery_easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>js/contact_me.js"></script>
    <!-- Theme JavaScript -->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>js/script.min.js"></script>
	<!-- Google Analytics code -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53485425-1', 'auto');
	  ga('send', 'pageview');
	</script>
  <!-- Change titles -->
	<script>
    window.onblur = function () { document.title = 'Hey! Aditya Arolkar is here..'; }

	  window.onfocus = function () { document.title = 'Aditya Arolkar | Front End Developer'; }
	</script>
</body>
</html>
