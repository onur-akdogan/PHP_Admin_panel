<?php
ob_start();
session_start();
include 'netting/baglan.php';
//Bbelirli veriyi seçme
$ayarsor=$db->prepare("Select * from ayar where ayar_id=:id");
$ayarsor->execute(array(
  'id'=>0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);



$kullanicisor=$db->prepare("Select * from kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail'=>$_SESSION['kullanici_mail']
));
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
if ($say==0) {
  Header("Location:../index.php");
exit;
}
?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN PAGE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>


    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="<?php echo $kullanicicek['kullanici_resim'];?>" alt="" /></a>
					<h2><span class="min-dtn"><?php echo $kullanicicek['kullanici_ad'];?></span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="https://<?php echo $ayarcek['ayar_facebook'];?>"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="https://<?php echo $ayarcek['ayar_twitter'];?>"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="https://<?php echo $ayarcek['ayar_google'];?>"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                    <li class="active">
                            <a class="has-arrow" href="index.php">
								   <i class="icon nalika-www icon-wrap"></i>
								   <span class="mini-click-non">ANASAYFA</span>
								</a>
                        
                        </li>
                        <li class="active">
                            <a class="has-arrow" href="genelayarlar.php">
								   <i class="icon nalika-home icon-wrap"></i>
								   <span class="mini-click-non">Site Ayarları</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="genelayarlar.php"><span class="mini-sub-pro">Genel Ayarlar</span></a></li>
                                
                            </ul>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="iletisimayarlar.php"><span class="mini-sub-pro">İletisim Ayarlar</span></a></li>
                                
                            </ul>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="apiayarlar.php"><span class="mini-sub-pro">APİ Ayarlar</span></a></li>
                                
                            </ul>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="sosyalayarlar.php"><span class="mini-sub-pro">Sosyal Ayarlar</span></a></li>
                                
                            </ul>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="mailayarlar.php"><span class="mini-sub-pro">Mail Ayarlar</span></a></li>
                                
                            </ul>
                        </li>
                        <li class="active">
                            <a class="has-arrow" href="hakkimizda.php">
								   <i class="icon nalika-info icon-wrap"></i>
								   <span class="mini-click-non">Hakkımızda</span>
								</a>
                        
                        </li>
                    </ul>
                </nav>
            </div>
           
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                 
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                               
                                              
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="index.php">ANASAYFA <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">SİTE AYARLAR <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="genelayarlar.php">Genel Ayarlar</a></li>
                                                <li><a href="iletisimayarlar.php">İletisim Ayarları</a></li>
                                                <li><a href="apiayarlar.php">APİ Ayarları</a></li>
                                                <li><a href="sosyalayarlar.php">Sosyal Ayarlar</a></li>
                                                <li><a href="mailayarlar.php">Mail Ayarları</a></li>

                                             
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Charts" href="hakkimizda.php">Hakkımızda <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            
                                            </li>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
                   
