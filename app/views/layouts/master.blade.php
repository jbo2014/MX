<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <title>美想工作室</title>
      <meta name="description" content="蜗牛追日">
      <meta name="author" content="蜗牛追日">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Google Fonts -->
      <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>-->
      <link href={{{asset('style/css/gfonts/gfont.css')}}} rel='stylesheet' type='text/css'>
      <!-- Library CSS -->
      <link rel="stylesheet" href={{{asset('style/css/bootstrap.css')}}}>
      <link rel="stylesheet" href={{{asset('style/css/fonts/font-awesome/css/font-awesome.css')}}}>
      <link rel="stylesheet" href={{{asset('style/css/animations.css')}}} media="screen">
      <link rel="stylesheet" href={{{asset('style/css/superfish.css')}}} media="screen">
      <link rel="stylesheet" href={{{asset('style/css/revolution-slider/css/settings.css')}}} media="screen">
      <link rel="stylesheet" href={{{asset('style/css/prettyPhoto.css')}}} media="screen">
      <!-- Theme CSS -->
	  @if (App::getLocale() == 'zh')
		<link rel="stylesheet" href={{{asset('style/css/style_zh.css')}}}>
	  @elseif (App::getLocale() == 'en')
		<link rel="stylesheet" href={{{asset('style/css/style_en.css')}}}>
	  @endif
      <!-- Skin -->
      <link rel="stylesheet" href={{{asset('style/css/colors/blue.css')}}} id="colors">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href={{{asset('style/css/theme-responsive.css')}}}>
      <!-- Switcher CSS -->
      <link href={{{asset('style/css/switcher.css')}}} rel="stylesheet">
      <link href={{{asset('style/css/spectrum.css')}}} rel="stylesheet">
      <!-- Favicons -->
      <link rel="shortcut icon" href={{{asset('style/img/ico/favicon.ico')}}}>
      <link rel="apple-touch-icon" href={{{asset('style/img/ico/apple-touch-icon.png')}}}>
      <link rel="apple-touch-icon" sizes="72x72" href={{{asset('style/img/ico/apple-touch-icon-72.png')}}}>
      <link rel="apple-touch-icon" sizes="114x114" href={{{asset('style/img/ico/apple-touch-icon-114.png')}}}>
      <link rel="apple-touch-icon" sizes="144x144" href={{{asset('style/img/ico/apple-touch-icon-144.png')}}}>
      <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
      <!--[if IE]>
      <link rel="stylesheet" href="css/ie.css">
      <![endif]-->
   </head>
   <body class="home">
      <div class="wrap">
         <!-- Header Start -->
         <header id="header">
            <!-- Header Top Bar Start -->
            <div class="top-bar">
               <div class="slidedown collapse">
                  <div class="container">
                     <div class="phone-email pull-left">
                        <a><i class="icon-phone"></i> {{{trans('master.callus')}}} +880 41 723 272</a>
                        <a href="mail%40example.html"><i class="icon-envelope"></i> {{{trans('master.email')}}} mail@example.com</a>
                     </div>
                     <div class="pull-right">
                        <ul class="social pull-left">
                           <li class="facebook"><a href="#"><i class="icon-facebook"></i></a></li>
                           <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                           <li class="dribbble"><a href="#"><i class="icon-dribbble"></i></a></li>
                           <li class="linkedin"><a href="#"><i class="icon-linkedin"></i></a></li>
                           <li class="rss"><a href="#"><i class="icon-rss"></i></a></li>
                        </ul>
                        <div id="search-form" class="pull-right">
                           <form action="#" method="get">
                              <input type="text" class="search-text-box">
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Header Top Bar End -->
            <!-- Main Header Start -->
            <div class="main-header">
               <div class="container">
                  <!-- TopNav Start -->
                  <div class="topnav navbar-header">
                     <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                     <i class="icon-angle-down icon-current"></i>
                     </a> 
                  </div>
                  <!-- TopNav End -->
                  <!-- Logo Start -->
                  <div class="logo pull-left">
                     <h1>
                        <a href="index.html">
                        <img src={{{asset('style/img/logo.png')}}} alt="MeiXiang" width="165" height="62">
                        </a>
                     </h1>
                  </div>
                  <!-- Logo End -->
                  <!-- Mobile Menu Start -->
                  <div class="mobile navbar-header">
                     <a class="navbar-toggle" data-toggle="collapse" href=".html">
                     <i class="icon-reorder icon-2x"></i>
                     </a> 
                  </div>
                  <!-- Mobile Menu End -->
                  <!-- Menu Start -->
                  <nav class="collapse navbar-collapse menu">
                     <ul class="nav navbar-nav sf-menu">
                        <li><a  href="index.html">{{{trans('master.home')}}}</a></li>
                        <li>
                           <a href="#" class="sf-with-ul">
                           {{{trans('master.service')}}} 
                           <span class="sf-sub-indicator">
                           <i class="icon-angle-down "></i>
                           </span>
                           </a>
                           <ul>
                              <li><a href="shortcodes.html" class="sf-with-ul">Shortcodes</a></li>
                              <li><a href="icons.html" class="sf-with-ul">Icons</a></li>
                              <li><a href="pricing-table.html" class="sf-with-ul">Pricing Tables</a></li>
                              <li>
                                 <a href="#" class="sf-with-ul"> 
                                 Third Level Menu 
                                 <span class="sf-sub-indicator pull-right">
                                 <i class="icon-angle-right "></i>
                                 </span>
                                 </a>
                                 <ul>
                                    <li><a href="#" class="sf-with-ul">Menu Item</a></li>
                                    <li><a href="#" class="sf-with-ul">Menu Item</a></li>
                                    <li><a href="#" class="sf-with-ul">Menu Item</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="#" class="sf-with-ul">
                           {{{trans('master.solution')}}}
                           <span class="sf-sub-indicator">
                           <i class="icon-angle-down "></i>
                           </span>
                           </a>
                           <ul>
                              <li><a href="about.html" class="sf-with-ul">About Us</a></li>
                              <li><a href="services.html" class="sf-with-ul">Services</a></li>
                              <li><a href="testimonials.html" class="sf-with-ul">Testimonials</a></li>
                              <li><a href="full-width.html" class="sf-with-ul">Full Width Page</a></li>
                              <li><a href="page-left-sidebar.html" class="sf-with-ul">Left Sidebar</a></li>
                              <li><a href="page-right-sidebar.html" class="sf-with-ul">Right Sidebar</a></li>
                              <li><a href="page-left-navigation.html" class="sf-with-ul">Left Navigation</a></li>
                              <li><a href="page-right-navigation.html" class="sf-with-ul">Right Navigation</a></li>
                              <li><a href="faq.html" class="sf-with-ul">FAQ</a></li>
                              <li><a href="page-404.html" class="sf-with-ul">404 Page</a></li>
                              <li><a href="sitemap.html" class="sf-with-ul">Sitemap</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#" class="sf-with-ul">
                           pages
                           <span class="sf-sub-indicator">
                           <i class="icon-angle-down "></i>
                           </span>
                           </a>
                           <ul>
                              <li><a href="portfolio-two.html" class="sf-with-ul">2 Column</a></li>
                              <li><a href="portfolio-three.html" class="sf-with-ul">3 Column</a></li>
                              <li><a href="portfolio-four.html" class="sf-with-ul">4 Column</a></li>
                              <li><a href="portfolio-single.html" class="sf-with-ul">Single Item Page</a></li>
                              <li><a href="portfolio-single-big.html" class="sf-with-ul">Single Large Item Page</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#" class="sf-with-ul">
                           {{{trans('master.dynamic')}}}
                           <span class="sf-sub-indicator">
                           <i class="icon-angle-down "></i>
                           </span>
                           </a>
                           <ul>
                              <li><a href="blog-left-sidebar.html" class="sf-with-ul">Left Sidebar Blog</a></li>
                              <li><a href="blog-right-sidebar.html" class="sf-with-ul">Right Sidebar Blog</a></li>
                              <li><a href="blog-small.html" class="sf-with-ul">Small Blog</a></li>
                              <li><a href="single-post.html" class="sf-with-ul">Single Post</a></li>
                           </ul>
                        </li>
                        <li><a href="contact.html">{{{trans('master.aboutmx')}}}</a></li>
                     </ul>
                  </nav>
                  <!-- Menu End --> 
               </div>
            </div>
            <!-- Main Header End -->
         </header>
         <!-- Header End --> 
		 <!-- Content Start -->
         <div id="main">
            <!-- Title, Breadcrumb Start-->
			@yield('Breadcrumb','')
            <div class="breadcrumb-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title"></h2>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                           <ul>
                              <li>{{{trans('master.position')}}}</li>
                              <li><a href="index-2.html">Home</a></li>
                              <li>Contact</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Title, Breadcrumb End-->
            <!-- Main Content start-->
            <div class="content">
               <div class="container">
			   @section('MainContent')
					This is the Breadcrumb.
 			   @show
               </div>
            </div>
            <!-- Main Content end-->
         </div>
         <!-- Content End -->
         <!-- Footer Start -->
         <footer id="footer">
            <!-- Footer Top Start -->
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-one">
                        <h3>{{{trans('master.about')}}}</h3>
                        <p> 
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. 
                        </p>
                     </section>
                     <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-two">
                        <h3>Twitter Stream</h3>
                        <ul id="tweets">
                        </ul>
                     </section>
                     <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-three">
                        <h3>{{{trans('master.contract')}}}</h3>
                        <ul class="contact-us">
                           <li>
                              <i class="icon-map-marker"></i>
                              <p> 
                                 <strong>{{{trans('master.address')}}}:</strong> 250 Sher-E- Bangla Road, <br>
                                 Khulna, Bangladesh 
                              </p>
                           </li>
                           <li>
                              <i class="icon-phone"></i>
                              <p><strong>{{{trans('master.phone')}}}:</strong> +880 41 723 272</p>
                           </li>
                           <li>
                              <i class="icon-envelope"></i>
                              <p><strong>{{{trans('master.email')}}}:</strong><a href="mailto:info@fifothemes.com">info@fifothemes.com</a></p>
                           </li>
                        </ul>
                     </section>
                     <section class="col-lg-3 col-md-3 col-xs-12 col-sm-3 footer-four">
                        <h3>Flickr Photostream</h3>
                        <ul id="flickrfeed" class="thumbs"></ul>
                     </section>
                  </div>
               </div>
            </div>
            <!-- Footer Top End --> 
            <!-- Footer Bottom Start -->
            <div class="footer-bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">Copyright &copy; 2014.美想工作室 All rights reserved.</div>
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                        <ul class="social social-icons-footer-bottom">
                           <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i class="icon-facebook"></i></a></li>
                           <li class="twitter"><a href="#" data-toggle="tooltip" title="Twitter"><i class="icon-twitter"></i></a></li>
                           <li class="dribbble"><a href="#" data-toggle="tooltip" title="Dribble"><i class="icon-dribbble"></i></a></li>
                           <li class="linkedin"><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="icon-linkedin"></i></a></li>
                           <li class="rss"><a href="#" data-toggle="tooltip" title="Rss"><i class="icon-rss"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer Bottom End --> 
         </footer>
         <!-- Scroll To Top --> 
         <a href="#" class="scrollup"><i class="icon-angle-up"></i></a>
      </div>
      <!-- Wrap End -->
      <section id="style-switcher">
        <h2>Style Switcher <a href="#"><i class="icon-cog"></i></a></h2>
        <div>
           <h3>Predefined Colors</h3>
           <ul id="colors" class="colors">
              <li><a title="Blue" class="blue" href="#"></a></li>
              <li><a title="Green" class="green" href="#"></a></li>
              <li><a title="Orange" class="orange" href="#"></a></li>
              <li><a title="Purple" class="purple" href="#"></a></li>
              <li><a title="Red" class="red" href="#"></a></li>
              <li><a title="Magenta" class="magenta" href="#"></a></li>
              <li><a title="Brown" class="brown" href="#"></a></li>
              <li><a title="Gray" class="gray" href="#"></a></li>
              <li><a title="Golden" class="golden" href="#"></a></li>
              <li><a title="Teal" class="teal" href="#"></a></li>
           </ul>
           <h3>Layout Style</h3>
           <div class="layout-style">
              <select autocomplete="off" id="layout-style">
                 <option value="1">Wide</option>
                 <option value="2">Boxed</option>
              </select>
           </div>
           <h3>Header Color</h3>
           <div class="header-color">
              <input type='text' class="header-bg" />
           </div>
           <h3>Footer Top Color</h3>
           <div class="header-color">
              <input type='text' class="footer-bg" />
           </div>
           <h3>Footer Bottom Color</h3>
           <div class="header-color">
              <input type='text' class="footer-bottom" />
           </div>
           <h3>Background Image</h3>
           <ul id="bg" class="colors bg">
              <li><a class="bg1" href="#"></a></li>
              <li><a class="bg2" href="#"></a></li>
              <li><a class="bg3" href="#"></a></li>
              <li><a class="bg4" href="#"></a></li>
              <li><a class="bg5" href="#"></a></li>
              <li><a class="bg6" href="#"></a></li>
              <li><a class="bg7" href="#"></a></li>
              <li><a class="bg8" href="#"></a></li>
              <li><a class="bg9" href="#"></a></li>
              <li><a class="bg10" href="#"></a></li>
           </ul>
        </div>
     </section>
      <!-- The Scripts -->
      <script src={{{asset('style/js/jquery.min.js')}}}></script>
      <script src={{{asset('style/js/bootstrap.js')}}}></script>
      <script src={{{asset('style/js/jquery.parallax.js')}}}></script> 
      <script src={{{asset('style/js/modernizr-2.6.2.min.js')}}}></script> 
      <script src={{{asset('style/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}}></script>
      <script src={{{asset('style/js/jquery.nivo.slider.pack.js')}}}></script>
      <script src={{{asset('style/js/jquery.prettyPhoto.js')}}}></script>
      <script src={{{asset('style/js/superfish.js')}}}></script>
      <script src={{{asset('style/js/tweetMachine.js')}}}></script>
      <script src={{{asset('style/js/tytabs.js')}}}></script>
      <script src={{{asset('style/js/jquery.sticky.js')}}}></script>
      <script src={{{asset('style/js/jflickrfeed.js')}}}></script>
      <script src={{{asset('style/js/imagesloaded.pkgd.min.js')}}}></script>
      <script src={{{asset('style/js/waypoints.min.js')}}}></script>
      <script src={{{asset('style/js/spectrum.js')}}}></script>
      <script src={{{asset('style/js/switcher.js')}}}></script>
      <!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script src="js/jquery.gmap.min.js"></script>-->
      <script src={{{asset('style/js/custom.js')}}}></script>
   
</body>
</html>