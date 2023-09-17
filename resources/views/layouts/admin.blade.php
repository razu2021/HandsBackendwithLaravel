<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Human&NatureDevelopmentSociety</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon-->
    
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('contents/admin/assets')}}/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
  
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('contents/admin/assets')}}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--   == bootstrap icon list  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="{{asset('contents/admin/assets')}}/css/sweetalert.min.js"></script>
    <!-- ==== bootstrap link ======= -->
    
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="{{asset('contents/admin/assets')}}/img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="{{asset('contents/admin/assets')}}/img/notification/4.jpg" alt="" /></a>
					<h2>Md Razu Hossain  <span class="min-dtn"></span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="bi bi-facebook"></i></a></li>
						<li><a href="#"><i class="bi bi-twitter"></i></a></li>
						<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="{{url('admin')}}">
                                <i class="bi bi-house-door"></i>
								   <span class="mini-click-non">Dashboard </span>
								</a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Dashboard v.1" href="{{url('admin')}}"><span class="mini-sub-pro"> All User   </span></a></li>
                                <li><a title="Dashboard v.1" href="{{url('dashboard/banner')}}"><span class="mini-sub-pro"> Banner    </span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> Home Page </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/home/banner')}}"><span class="mini-sub-pro">Home Banner </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/Event')}}"><span class="mini-sub-pro">Home Event </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/Whatewedo')}}"><span class="mini-sub-pro">Whate we do  </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/HomeCauses')}}"><span class="mini-sub-pro">Our Causes  </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/HomeProduct')}}"><span class="mini-sub-pro">Our Product </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/HomeAboutCauses')}}"><span class="mini-sub-pro">About Causes  </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/HomeDonar')}}"><span class="mini-sub-pro"> Our Donner </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/Volunteer')}}"><span class="mini-sub-pro"> our volunter  </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/HomeTestimonial')}}"><span class="mini-sub-pro"> Testimonial </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/Portfolio')}}"><span class="mini-sub-pro">Portfolio  </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/HomeNews')}}"><span class="mini-sub-pro">News </span></a></li>
                                <li><a title="Alerts" href="{{url('dashboard/website/home/OurPartner')}}"><span class="mini-sub-pro"> Our Partner </span></a></li>
                                <li><a title="Alerts" href="#"><span class="mini-sub-pro"> Extra </span></a></li>
                            </ul>
                        </li>
                        <!-- home end  -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="true"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> About Page  </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/about/AboutBanner')}}"><span class="mini-sub-pro">About Banner </span><i class="bi bi-chevron-double-right "></i></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/about/AboutAchivment')}}"><span class="mini-sub-pro">Our Achivment </span><i class="bi bi-chevron-double-right "></i></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/about/AboutAboutUsOne')}}"><span class="mini-sub-pro">About us  </span><i class="bi bi-chevron-double-right "></i></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/about/AboutAboutusTwo')}}"><span class="mini-sub-pro">About us Two </span><i class="bi bi-chevron-double-right "></i></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/about/AboutOurMission')}}"><span class="mini-sub-pro">About Our Mission  </span><i class="bi bi-chevron-double-right "></i></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/about/AboutRecentEvent')}}"><span class="mini-sub-pro">Our Recent Event</span><i class="bi bi-chevron-double-right "></i></a></li>
                            </ul>
                        </li>
                        <!-- what we do  end  -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> What We Do  </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/wedo/WeDoBanner')}}"><span class="mini-sub-pro"> Banner </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/wedo/WedoAchivment')}}"><span class="mini-sub-pro"> Achivment </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/gallery/CorporateOffice')}}"><span class="mini-sub-pro"> Head office </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/wedo/ServiceCatagoryOne')}}"><span class="mini-sub-pro">Service one  </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/wedo/ServiceCatagoryTwo')}}"><span class="mini-sub-pro">Service Two  </span></a></li>
                            </ul>
                        </li>
                        <!-- where we work  -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> Where we work  </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/wherewework/WhereWework')}}"><span class="mini-sub-pro"> where we Work  </span></a></li>
                            </ul>
                        </li>
                        <!-- our team   -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> Our Team   </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/team/TeamBanner')}}"><span class="mini-sub-pro">Team Banner</span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/team/OurTeam')}}"><span class="mini-sub-pro">Our Team</span></a></li>
                            </ul>
                        </li>
                        <!-- foundeer & Ceo  -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> Founder & CEO  </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/founder/FounderBanner')}}"><span class="mini-sub-pro">Banner  </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/founder/FoundedHistory')}}"><span class="mini-sub-pro">Founded History </span></a></li>
                            </ul>
                        </li>
                        <!-- Company History -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> Company History </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/history/HistoryBanner')}}"><span class="mini-sub-pro"> Banner </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/history/CompanyHistory')}}"><span class="mini-sub-pro"> Company History </span></a></li>
                            </ul>
                        </li>
                        <!-- Our Causes -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> Our Causes  </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/causes/CausesBanner')}}"><span class="mini-sub-pro"> Banner </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/home/HomeCauses')}}"><span class="mini-sub-pro"> Our all Causes</span></a></li>
                            </ul>
                        </li>
                        <!-- Our Event     -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> Our Events   </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/event/EventBanner')}}"><span class="mini-sub-pro">Event Banner </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/event/AllEvent')}}"><span class="mini-sub-pro">All Event</span></a></li>
                            </ul>
                        </li>
                        <!-- Our Blog      -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> Our Blog    </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/blog/BlogBanner')}}"><span class="mini-sub-pro"> Banner </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/blog/OurRecentBlog')}}"><span class="mini-sub-pro"> Our Recent Blog </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/blog/OurLatestBlog')}}"><span class="mini-sub-pro"> Our Latest Blog </span></a></li>
                            </ul>
                        </li>
                        <!-- Our Gallery-->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> Gallery     </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/gallery/GalleryBanner')}}"><span class="mini-sub-pro"> Banner </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/gallery/AboutGallery')}}"><span class="mini-sub-pro"> About Gallery </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/gallery/CorporateOffice')}}"><span class="mini-sub-pro"> Corporate Office  </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/gallery/GalleryWhatwedo')}}"><span class="mini-sub-pro"> What we do   </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/gallery/GalleryWhatidid')}}"><span class="mini-sub-pro"> What I Did </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/gallery/GalleryImage')}}"><span class="mini-sub-pro"> All Image  </span></a></li>
                            </ul>
                        </li>
                        <!-- about volunteer -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> About volunter </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/volunteer/VolunteerBanner')}}"><span class="mini-sub-pro">Volunteer Banner </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/volunteer/VolunteerOurUnity')}}"><span class="mini-sub-pro">Our Unity </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/volunteer/OurHonesty')}}"><span class="mini-sub-pro">Our Honesty </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/volunteer/WeHelpfull')}}"><span class="mini-sub-pro">We Helpfull  </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/volunteer/VolunteerManagementTeam')}}"><span class="mini-sub-pro">Manage Team  </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/volunteer/OurFieldWorkerTeam')}}"><span class="mini-sub-pro">Field worker  </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/volunteer/OurTeamLeader')}}"><span class="mini-sub-pro">Team Leader  </span></a></li>
                            </ul>
                        </li>
                        <!-- Become a volunteer -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> New Volunteer  </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/BecomeVolunteer/BcomeVolunteerBanner')}}"><span class="mini-sub-pro"> Banner </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/BecomeVolunteer/BcomeVolunteer')}}"><span class="mini-sub-pro">applicant </span></a></li>
                            </ul>
                        </li>
                        <!-- Contact us  -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non">Contact us  </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/Contact/BannerContact')}}"><span class="mini-sub-pro">Home Banner </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/contact/ContactMassage')}}"><span class="mini-sub-pro">Contact Massages </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/Contact/ContactDetails')}}"><span class="mini-sub-pro">Contact Details </span></a></li>
                            </ul>
                        </li>
                        <!-- Motivational Spece-->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-list-ol"></i> <span class="mini-click-non"> About volunter </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/home/banner')}}"><span class="mini-sub-pro">Home Banner </span></a></li>
                            </ul>
                        </li>
                        <!-- Manage Section  -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-gear"></i> <span class="mini-click-non"> Manage </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/manage/WebHeader')}}"><span class="mini-sub-pro">Web Header </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/manage/WebFooter')}}"><span class="mini-sub-pro">Web Footer </span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/manage/OurSocial')}}"><span class="mini-sub-pro">Our Social</span></a></li>
                                <li><a title="Notifications" href="{{url('dashboard/website/manage/TeamSocial')}}"><span class="mini-sub-pro">Team Social </span></a></li>
                            </ul>
                        </li>
                        <!-- Manage Section  -->
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="bi bi-gear"></i> <span class="mini-click-non"> Motivational  </span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="{{url('dashboard/website/motivational/MotivationalContent')}}"><span class="mini-sub-pro">Content </span></a></li>
                            </ul>
                        </li>
                        <!-- our motivational content start here  -->
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="bi bi-browser-chrome"></i>  <span class="mini-click-non">Profile</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Register" href="https://handsbd.org/"><span class="mini-sub-pro">Live Site </span></a></li>
                                <li><a title="Login"  href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><span class="mini-sub-pro">Logout</span></a></li>
                            </ul>
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
                                            <i class="bi bi-list-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="bi bi-envelope-fill"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="{{asset('contents/admin/assets')}}/img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="{{asset('contents/admin/assets')}}/img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">

                                                                
                                                                <div class="message-img">
                                                                        <img src="{{asset('contents/admin/assets')}}/img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="{{asset('contents/admin/assets')}}/img/contact/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="bi bi-bell-fill"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        
                                                                        <i class="bi bi-person-circle" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-folder" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="bi bi-person-circle"></i>
															<span class="admin-name">Md Razu Hossain </span>
															<i class="bi bi-arrow-down-circle-fill"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        <li><a href="lock.html"><span class="icon nalika-diamond author-log-ic"></span> Lock</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                        </li>
                                                        <li><a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
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
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="product-list.html">Product List</a></li>
                                                <li><a href="product-edit.html">Product Edit</a></li>
                                                <li><a href="product-detail.html">Product Detail</a></li>
                                                <li><a href="product-cart.html">Product Cart</a></li>
                                                <li><a href="product-payment.html">Product Payment</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="file-manager.html">File Manager</a></li>
                                                <li><a href="contacts.html">Contacts Client</a></li>
                                                <li><a href="projects.html">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <br>
            <hr>
            <div class="breadcome-area ">
                <div class="container-fluid  ">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  " >
                            <div class="breadcome-list" style="border:2px solid #fff;">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                        <div class="breadcomb-wp" >
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Welcome  to <span> Human & Nature Development Society  </span></h2>
												<p class="text-warning">Md Razu hossain Raj  <span class="bread-ntd"> You Are Loged In Admin Panel </span></p>
											</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container end here  -->

        
        @yield('content');
         
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © & Development by 2023 <a href="https://handsbd.org/">Human & Nature Development Society </a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    <!-- jquery
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{asset('contents/admin/assets')}}/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{asset('contents/admin/assets')}}/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('contents/admin/assets')}}/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/calendar/moment.min.js"></script>
    <script src="{{asset('contents/admin/assets')}}/js/calendar/fullcalendar.min.js"></script>
    <script src="{{asset('contents/admin/assets')}}/js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/flot/jquery.flot.js"></script>
    <script src="{{asset('contents/admin/assets')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{asset('contents/admin/assets')}}/js/flot/curvedLines.js"></script>
    <script src="{{asset('contents/admin/assets')}}/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('contents/admin/assets')}}/js/main.js"></script>

    <!-- ck editor  -->
    <script src="{{asset('contents/admin/assets')}}/ckeditor/ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script> -->

    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    <script>
        CKEDITOR.replace( 'editor2' );
    </script>

</body>

</html>