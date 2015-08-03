<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cerita Kita: Dapatkan tips cantik, tips merawat muka, ruang berbagi tips lainnya dan cerita cewek. Yuk gabung dan berbagi sama kita">
        <title>Cerita Kita | Tips Cantik Dan Tips Merawat Muka</title>
            
             <!--Core CSS -->
            <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="assets/vendor/slicknav/slicknav.css" rel="stylesheet">
            <link href="assets/vendor/flexslider/flexslider.css" rel="stylesheet">
            <link href="assets/vendor/eufont/eufont.css" rel="stylesheet">
            <link href="assets/css/gogirl.css" rel="stylesheet">
            <link href="assets/css/responsive.css" rel="stylesheet">
            <script src="assets/vendor/jquery.js"></script>
            <script src="assets/vendor/jquery-ui.js"></script>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
            <script src="assets/vendor/jquery.validate.js"></script>
    
    </head>
    <body>
    <?php
		$full_name = $_SERVER['PHP_SELF'];
		$name_array = explode('/',$full_name);
		$count = count($name_array);
		$page_name = $name_array[$count-1];
		?>
    <section id="container">
    	 <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="topbanner banner-ads">
                       <img src="assets/content/banner.jpg"/>
                        <a href="<?= base_url()?>" class="homebtn"></a>
                        <a href="<?= base_url()?>register" class="registerbtn"></a>
                    </div>
                </div><!-- end .row -->
                <div class="row navigation">
                    <div class="col-md-4">
                        <div class="logo">
                <a href="https://www.facebook.com/cleanclearindonesia" target="_blank"><img src="assets/images/logo-cleanclear.png"/></a>
                            <a href="http://www.gogirlmagz.com/" target="_blank"><img src="assets/images/logo.png"/></a>
                        </div>
                    </div><!-- end .col-md-4 -->
                    <div class="col-md-8">
                        <nav class="navbar nav-collapse">
                              <ul id="menu">
                               <li><a href="<?= base_url()?>"><span>Home</span></a></li>
                                <li><a href="<?= base_url()?>style"><span>Style</span></a></li>
                                <li><a href="<?= base_url()?>event"><span>Events</span></a></li>
                                <li><a href="<?= base_url()?>skin"><span>Skin 101</span></a></li>
                                <li><a href="<?= base_url()?>diy"><span>D.I.Y</span></a></li>
                                <li><a href="<?= base_url()?>relations"><span>Relations</span></a></li>
                                <li><a href="<?= base_url()?>quiz"><span>Quiz</span></a></li>
                              </ul>
                        </nav>
                    </div><!-- end .col-md-4 -->
                    <button class="btn-search" id="showsearch"><i class="icon-search">&nbsp;</i></button>
                    <div id="navbarmobile"></div>
                </div><!-- end .row -->
                <div class="row">
                    <div class="searchbox-container">
                        <div class="searchbox">
                            <div class="search-form-overlay"></div>
                             <form class="search-form" action="{$basedomain}search" method="post">
                                <div class="formbox">
                                    <input type="text" name="param">
                                    <label>Tap enter after search</label>
                                    <button type="submit" class="btn-search"><i class="icon-search">&nbsp;</i></button>
                                </div>
                            </form>
                        </div>
                         <a class="close-search" href="#">&nbsp;</a>
                    </div>
                </div><!-- end .row -->
            </div><!-- end .container -->
        </header><!-- end #header -->
        <section id="main-content">
        	<div class="container">