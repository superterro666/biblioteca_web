<?php /* Smarty version Smarty-3.1.19, created on 2016-05-03 10:56:21
         compiled from "C:\xampp\htdocs\proyecto3\smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:350457109c783fedd3-95599953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '353f72b2131f26deb88161713462e0291461d61e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto3\\smarty\\templates\\index.tpl',
      1 => 1462265776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '350457109c783fedd3-95599953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57109c784006f0_88786485',
  'variables' => 
  array (
    'login' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57109c784006f0_88786485')) {function content_57109c784006f0_88786485($_smarty_tpl) {?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>john-doe Website Template | Home :: w3layouts</title>
		<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="assets/js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="assets/js/move-top.js"></script>
		<script type="text/javascript" src="assets/js/easing.js"></script>
                
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
                
		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
                
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
                
                       
                
	</head>
	<body>
            <?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="#"><img src="assets/images/logo.png" title="Johndeo" /></a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="#home" class="scroll">Sobre</a><span> </span></li>
								<li><a href="index.php?action=login" >Login</a></li>
								<li><a href="index.php?email=email" >Contacto</a></li>
							</ul>
							<a href="#" id="pull"><img src="assets/images/nav-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
						<!----top-header-info--->
						<div class="top-header-info">
							<p>
								Biblioteca<br/>
								Grupo Progresa<br/>
								Administracion Online<br/>
								Valencia<br/>
							</p>
							<a class="contactme" href="index.php?email=email">Contacto</a>
						</div>
						<!----//End-header-info--->
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!---- about us ---->
			<div class="aboutus">
				<div class="container">
					<h2>Sobre<br/>Nosotros</h2>
					<span> </span>
					<div class="col-md-6 aboutus-left">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet., sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					</div>
					<div class="col-md-6 aboutus-right">
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<a class="aboutus-right-btn" href="#">MY RESUME</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!---- about us ---->
			<!---- QUOTE ---->
			<div class="quote text-center">
				<div class="container">
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</p>
				</div>
			</div>
			<!---- //QUOTE ---->
			<!---- WORKS ---->
			<div id="work" class="works">
				<div class="container">
					<h2>MY<br/>WORKS</h2>
					<span> </span>
				</div>
				<!---- partners ---->
				<div class="partners">
					<!----sreen-gallery-cursual---->
						<div class="sreen-gallery-cursual">
							 <!-- requried-jsfiles-for owl -->
							<link href="assets/css/owl.carousel.css" rel="stylesheet">
                                                      
							    <script src="assets/assets/js/owl.carousel.js"></script> 
                                                            
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 5,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : true,
							        navigationText :  false,
							        pagination : false,
							      });
							    });
							    </script>
                                                            
							 <!-- //requried-jsfiles-for owl -->
							 <!-- start content_slider -->
							 <div class="container">
						       <div id="owl-demo" class="owl-carousel">
					                <div class="item">
					                	<img class="lazyOwl" data-src="images/screen1.jpg" alt="screen-name">
					                	<label>PROJECT TITLE</label>
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="images/screen2.jpg" alt="screen-name">
					                	<label>PROJECT TITLE</label>
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="images/screen3.jpg" alt="screen-name">
					                	<label>PROJECT TITLE</label>
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="images/screen4.jpg" alt="screen-name">
					                	<label>PROJECT TITLE</label>
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="images/screen5.jpg" alt="screen-name">
					                	<label>PROJECT TITLE</label>
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="images/screen1.jpg" alt="screen-name">
					                	<label>PROJECT TITLE</label>
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="images/screen2.jpg" alt="screen-name">
					                	<label>PROJECT TITLE</label>
					                </div>
					                <div class="item">
					                	<img class="lazyOwl" data-src="images/screen3.jpg" alt="screen-name">
					                	<label>PROJECT TITLE</label>
					                </div>
				              </div>
							</div>
						<!--//sreen-gallery-cursual---->
				</div>
				<!---- //partners ---->
				<!----project-grid---->
				<div class="project-grid">
					<div class="container">
					<img class="project-screen" src="images/screen.jpg" title="name" />
					<div class="project-grid-info">
						<div class="col-md-3 project-grid-info-left">
							<h3>CLIENT:</h3>
							<label>Some Company</label>
							<h3>WEBSITE:</h3>
							<label><a href="#">http://www.somedomain.com</a></label>
							<a class="sitedemo" href="#">VISIT LIVE SITE</a>
						</div>
						<div class="col-md-9 project-grid-info-left">
							<h3><a href="#">PROJECT TITLE</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  Velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam uptatem.</p>
							<ul class="project-share unstyled-list list-inline">
								<li><a class="p-like" href="#"><label> </label> 144 LIKES</a></li>
								<li><a class="p-share" href="#"><label> </label> SHARE</a></li>
							
							</ul>
                                                        <div class="clearfix">	</div> 
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
				</div>
				<!----project-grid---->
			</div>
			</div>
			<!---- //WORKS ---->
			<!---- TESTIMONIAL ---->
			<div class="testmonials">
				<div class="container">
					<h2>WHAT<br/>THEY SAY</h2>
					<span> </span>
				<div class="people-testmonials">
                                    
					 <script>
							    $(document).ready(function() {
							      $("#owl-demo1").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
						</script>
                                                
					<div id="owl-demo1" class="owl-carousel">
					                <div class="item ">
					                	<p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. "</p>
					               		<div class="test-people">
					               			<div class="test-people-pic">
					               				<a href="#">
					               					<img src="images/test-people-pic.png" title="name" />
					               				</a>
					               			</div>
					               			<div class="test-people-info">
					               				<a href="#">Lily Barnes</a>
					               				<small>Managing Director ABC Ltd.</small>
					               			</div>
					               			<div class="clearfix"> </div>
					               		</div>
									</div>
									<div class="item ">
					                	<p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. "</p>
					               		<div class="test-people">
					               			<div class="test-people-pic">
					               				<a href="#">
					               					<img src="images/test-people-pic.png" title="name" />
					               				</a>
					               			</div>
					               			<div class="test-people-info">
					               				<a href="#">Lily Barnes</a>
					               				<small>Managing Director ABC Ltd.</small>
					               			</div>
					               			<div class="clearfix"> </div>
					               		</div>
									</div>
									<div class="item ">
					                	<p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. "</p>
					               		<div class="test-people">
					               			<div class="test-people-pic">
					               				<a href="#">
					               					<img src="images/test-people-pic.png" title="name" />
					               				</a>
					               			</div>
					               			<div class="test-people-info">
					               				<a href="#">Lily Barnes</a>
					               				<small>Managing Director ABC Ltd.</small>
					               			</div>
					               			<div class="clearfix"> </div>
					               		</div>
									</div>
									<div class="item ">
					                	<p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. "</p>
					               		<div class="test-people">
					               			<div class="test-people-pic">
					               				<a href="#">
					               					<img src="images/test-people-pic.png" title="name" />
					               				</a>
					               			</div>
					               			<div class="test-people-info">
					               				<a href="#">Lily Barnes</a>
					               				<small>Managing Director ABC Ltd.</small>
					               			</div>
					               			<div class="clearfix"> </div>
					               		</div>
									</div>
									<div class="item ">
					                	<p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. "</p>
					               		<div class="test-people">
					               			<div class="test-people-pic">
					               				<a href="#">
					               					<img src="images/test-people-pic.png" title="name" />
					               				</a>
					               			</div>
					               			<div class="test-people-info">
					               				<a href="#">Lily Barnes</a>
					               				<small>Managing Director ABC Ltd.</small>
					               			</div>
					               			<div class="clearfix"> </div>
					               		</div>
									</div>
									<div class="item ">
					                	<p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. "</p>
					               		<div class="test-people">
					               			<div class="test-people-pic">
					               				<a href="#">
					               					<img src="images/test-people-pic.png" title="name" />
					               				</a>
					               			</div>
					               			<div class="test-people-info">
					               				<a href="#">Lily Barnes</a>
					               				<small>Managing Director ABC Ltd.</small>
					               			</div>
					               			<div class="clearfix"> </div>
					               		</div>
									</div>
				    </div>
				</div>
			</div>
			</div>
			<!---- //TESTIMONIAL ---->
			<!---- CONTACT ----->
			<div id="contact" class="contact"> 
				<div class="container">
					<h2>WAYS TO<br/>CONTACT ME</h2>
					<span> </span>
				<!----contact-grids---->
				<div class="contact-grids">
					<div class="col-md-6 contact-left">
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="col-md-6 contact-right">
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<div class="address">
							<label>HOLLA@JOHNDOE.DEV</label>
							<label>+1 (234) 5678901</label>
							<label>715A CD58</label>
						</div>
						<div class="clearfix"> </div>
						<div class="address">
							<label>CREATIVE BUILDING 58</label>
							<label>3083 Romines Mill Road</label>
							<label>Boston, MA 02201  </label>
						</div>
						<div class="clearfix"> </div>
						<div class="social-share">
							<h4>ON SOCIAL</h4>
							<ul class="unstyled-list list-inline">
								<li><a class="facebook" href="#"><span> </span></a></li>
								<li><a class="twitter" href="#"><span> </span></a></li>
								<li><a class="googlepluse" href="#"><span> </span></a></li>
								<li><a class="dribbble" href="#"><span> </span></a></li>
								
							</ul>
                                                        <div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			</div>
			<!---- CONTACT ----->
			<!----contact-map---->
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23352.08300485254!2d-71.68171461926248!3d42.978055078175615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e233e8a9946e0d%3A0x590e6c13b1743f65!2sNew+Boston%2C+NH!5e0!3m2!1sen!2sin!4v1403880819261"></iframe>
				<label>I'M HERE</label>
			</div>
			<!----contact-map---->
			<div class="copy-right text-center">
				<div class="container">
					<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
					<label>Copyright 2014. All rights reserved.</label>
                                        
								<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
                                                                
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	
				</div>
			</div>
                                                                        <?php }?>
                                                                        
                                                                        <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
                                                                            
                                                                            
       <style>	
                

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
                
        </style>                                                                           
                                                                            
    <?php if (!$_smarty_tpl->tpl_vars['email']->value) {?>                      
  <div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="index.php" method="post">
      <input type="text" placeholder="username" name="email"/>
      <input type="password" placeholder="password" name="password"/>
      <button type="submit" name="submit" value="submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
  </div>    
  <?php }?>
  
  
    <?php if ($_smarty_tpl->tpl_vars['email']->value) {?>                                                                   
  <div class="login-page">
      <div class="form">
        
      <form class="login-form" action="index.php" method="post">
      <label>Nombre</label>    
      <input type="text" placeholder="Nombre" name="nombre"/>
      <label>Apellidos</label>
      <input type="text" placeholder="Apellidos" name="apellidos"/>
      <label>Email</label>
      <input type="text" placeholder="Email" name="mail"/>
      <label>Asunto</label>
      <input type="text" placeholder="Asunto" name="asunto"/>
      <label>Texto</label>
      <textarea name="correo" style="width: 260px; background-color:gainsboro;"></textarea>
      <button type="submit" name="email" value="email">Enviar</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    
    </form>
      </div>
  </div>
  <?php }?>
  
  
  
  
  
  
</div>
                                                                        
                                                                        <?php }?>
	</body>
        
</html>

<?php }} ?>
