<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human & Nature Development Society </title>
    <!--=====================================   ALL CSS LINK IN START HERE ========================= -->
    <!-- Google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Oswald:wght@700&family=Passions+Conflict&family=Roboto:wght@100;300;400;900&family=Sevillana&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/bootstrap-icons.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <!-- MDB Css ----- -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/mdb.min.css">
    <!-- fontwasome css -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/all.min.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/owl.theme.default.min.css">
    <!-- aos link  -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/aos.css">
    <!-- animate animate css link  -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/animate.min.css">
    <!-- lightbox css link  -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/light-box.css">
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/magnific-popup.css">
    <!-- hover css  -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/hover.css">
  <!-- 3d social link  -->
  <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/3dsocial.css">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/custome.css">
    <!-- Responsice css -->
    <link rel="stylesheet" href="{{asset('contents/website/assets')}}/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="{{asset('contents/admin/assets')}}/css/sweetalert.min.js"></script>
    <!--=====================================   ALL CSS LINK IN ENF HERE       ========================= -->
</head>
<body>
<!-- ===================  Header part start here ================= -->
<!-- Navbar -->
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      @foreach($header as $data)
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{$data->title}}">{{$data->title}}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="tel:{{$data->subtitle}}">{{$data->subtitle}}</a></span></i>
      </div>
      @endforeach
      @foreach($social as $data)
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{$data->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{$data->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{$data->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        <a href="{{$data->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{$data->youtube}}" class="instagram"><i class="bi bi-youtube"></i></a>

      </div>
      @endforeach
    </div>
  </section>

<!-- ===================  Header part start here ================= -->
<nav class="navbar navbar-expand-lg bg-light navbar-light header">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    @foreach($header as $data)
    <a class="navbar-brand" href="https://handsbd.org/"><img src="{{asset('uploads/'.$data->image)}}" alt="foundation logo" height="80px" width="100%"></a>
    @endforeach
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>

      <!-- Icons -->
      <div class="main-menu">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{url('/')}}">Home <span class="text-danger"> | </span></a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{url('/about')}}">About <span class="text-danger">  | </span> <i class="bi bi-caret-down-fill"></i> </a>
                <div class="sumbenu">
                  <ul>
                    <li><a href="{{url('/about')}}">About Us </a></li>
                    <li><a href="{{url('/whate/we/do')}}">Whate We Do </a></li>
                    <li><a href="{{url('/')}}">Where We Work </a></li>
                    <li><a href="{{url('/ourTeam')}}">Our Team  </a></li>
                    <li><a href="{{url('/OurFounder')}}">About Founder & CEO </a></li>
                    <li><a href="{{url('/Company_history')}}">Company History  </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{url('/ourallcauses')}}">Causes <span class="text-danger"> | </span></a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{url('/our_all_events')}}">Events <span class="text-danger"> | </span></a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{url('/blog')}}">Blog <span class="text-danger"> | </span></a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{url('/our_all_gallery')}}">Gallery <span class="text-danger"> | </span></a>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{url('/about_our_volunteeer')}}">volunteer <span class="text-danger"> | </span> <i class="bi bi-caret-down-fill"></i></a>
                <div class="sumbenu">
                  <ul>
                    <li><a href="{{url('/about_our_volunteeer')}}"> About volunteer </a></li>
                    <li><a href="{{url('/Become_a_volunteer_new')}}"> Bcome A volunteer </a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="{{url('/Contact_us')}}">Contact</a>
              </li>
              <button class="btn btn-success"><a href="{{url('/')}}" class="text-white">Donate</a></button>
            </ul>
      </div>
      <!-- Search -->
    </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<!-- ====== hader part end here ================ -->




@yield('content')











<!-- =========================     FOOTER AREA START HERER =================== -->
<!-- Footer -->
@foreach($footercon as $data)
<section class="bg-image"  style="   
    background-image: url('{{asset('uploads/'.$data->image)}}');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;">
@endforeach
<footer class=" text-center" style="background-color: rgba(255, 255, 255, 0.7);">

  <div ></div>
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <div class=" col-12 col-lg-12 mb-5 mt-5">
        <div class="three_social text-center">
          @foreach($social as $data)
            <ul>
                <li class=" wow animate__animated animate__bounce animate__bounce animate__delay-2s  "><a class="btn btn-primary  " style="background-color: #3b5998 ; font-size: 40px;" href="{{$data->facebook}}" role="button"><i class="fab fa-facebook-f"></i></a></li>
                <li class=" wow animate__animated animate__bounce animate__bounce animate__delay-2s  "><a class="btn btn-primary  " style="background-color: #55acee ; font-size: 40px;" href="{{$data->twitter}}" role="button"><i class="bi bi-twitter"></i></a></li>
                <li class=" wow animate__animated animate__bounce animate__bounce animate__delay-2s  "><a class="btn btn-primary  " style="background-color: #dd4b39 ; font-size: 40px;" href="{{$data->linkedin}}" role="button"><i class="fab fa-youtube"></i></a></li>
                <li class=" wow animate__animated animate__bounce animate__bounce animate__delay-2s  "><a class="btn btn-primary  " style="background-color: #0082ca ; font-size: 40px;" href="{{$data->linkedin}}" role="button"><i class="fab fa-linkedin-in"></i></a></li>
                <li class=" wow animate__animated animate__bounce animate__bounce animate__delay-2s  "><a class="btn btn-primary  " style="background-color: #ac2bac ; font-size: 40px;" href="{{$data->youtube}}" role="button"><i class="fab fa-instagram"></i></a></li>
            </ul>
          @endforeach
        </div>
    </div>
      <section class="">
            @foreach($footercon as $data)
              <h1 class="pt-2 pb-4 text3d " style="font-size:30px;color:#000">{{$data->heading}} <span class="text-danger"> ( HANDS)</span></h1>
            @endforeach
      </section>
      <section class="mb-4">
        @foreach($footercon as $data)
        <p>{!!$data->caption!!}</p>
        @endforeach
      </section>
      <section class="">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#!" class="text-dark">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-dark">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
    @foreach($footercon as $data)
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="https://handsbd.org">{{$data->heading}} </a>
    </div>
    @endforeach
  </footer>
</section>
<!--=====================================    ALL Script  LINK IN START HERE       ========================= -->
<script src="{{asset('contents/website/assets')}}/js/jquery-3.6.3.min.js"></script>
<script src="{{asset('contents/website/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('contents/website/assets')}}/js/mdb.min.js"></script>
<script src="{{asset('contents/website/assets')}}/js/all.min.js"></script>
<script src="{{asset('contents/website/assets')}}/js/aos.js"></script>
<script src="{{asset('contents/website/assets')}}/js/wow.min.js"></script>
<script >new WOW().init();</script>
<script src="{{asset('contents/website/assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('contents/website/assets')}}/js/ekko-lightbox.js"></script>
<script src="{{asset('contents/website/assets')}}/js/edit.js"></script>
<script src="{{asset('contents/website/assets')}}/js/custom.js"></script>
<script src="{{asset('contents/website/assets')}}/js/countMe.min.js"></script>
<script>
    window.onload = ()=>{
        $("#num1").countMe(80,10);
        $("#num2").countMe(80, 30);
        $("#num3").countMe(35, 30);
        $("#num4").countMe(5,150);
     }
</script>
<script src="{{asset('contents/website/assets')}}/js/jquery.magnific-popup.min.js"></script>
<script>
      $(document).ready(function(){
    $('.gellarys').magnificPopup({
        type:'image',
        delegate: 'a',
        gallery:{
            enabled:true
          }
      });
  });
  </script>
</body>
</html>