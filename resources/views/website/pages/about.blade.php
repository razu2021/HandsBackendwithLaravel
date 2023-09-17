@extends('layouts.master')
@section('content')
<section>
    <div id="main-slider">
      <div class="main-slider">
        <div class="owl-carousel index-banner-slider">
          @foreach($all as $data)
          <div class="slider">
          <div class="slider-image bg-image">
            <img src="{{asset('uploads/'.$data->image)}}" alt="Banner Slider ">
          </div>
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)"></div>
          <div class="container">
            <div class=" slider-text">
              <div class="row">
                <div class="col-12 col-lg-8">
                  <div class="banner-text">
                    <h1 class="animate__animated animate__fadeInDown display-3 pb-2 m-0">{{$data->title}}</h1>
                    <h4 class="animate__animated animate__fadeInDown display-6 text-white fw-bold m-0">{{$data->subtitle}}</h4>
                    <p class=" animate__animated animate__fadeInUp  pb-4 m-0">{!!$data->info!!}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
  <!--   banner section end here -->
    <section id="services" class="services  About_service">
      <div class="container">
        <div class="row">
          @foreach($aboutachiv as $data)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 text-center">
            <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100" style=" box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
              <div class=" title text-center"><h1  class="text3d " id="{{$data->heading}}">{{$data->title}}</h1></div>
              <hr>
              <h1 class=" title" style="font-size:24px"><a href="" class="">{{$data->subtitle}} </a></h1>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>
    <!--Achivment section end herre-->
    <section id="about" class="about section-bg section-padding">
        <div class="container" data-aos="fade-up">
          @foreach($abouthead as $data)
          <div class="section-title">
            <h2 class="text3d">About</h2>
            <h3>{{$data->heading}}</span></h3>
            <p>{!!$data->caption!!}</p>
          </div>
          <div class="row">
            <div class="col-lg-6 wow animate__animated animate__fadeInUp " data-aos="fade-right" data-aos-delay="100">
              <img src="{{asset('uploads/'.$data->image)}}" class="img-fluid rounded-2" alt="">
            </div>
            @endforeach
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            @foreach($abouttitle as $data)
              <h3 class="wow animate__animated animate__fadeInRight ">{{$data->title}}</h3>
              @endforeach
              <ul>
                @foreach($aboutussubtitle as $data)
                <li>
                <i class="bi bi-arrow-down-right-circle-fill"></i>
                  <div>
                    <h4 class="wow animate__animated animate__fadeInRight">{{$data->subtitle}}</h4>
                    <p class="wow animate__animated animate__fadeInRight">{!!$data->info!!}</p>
                  </div>
                </li>
                @endforeach
              </ul>
              @foreach($aboutinfo as $data)
              <p class="wow animate__animated animate__fadeInRight">{!!$data->info!!} </p>
              <br>
              <button id="buttonstyle"><a href="{{$data->button_url}}">{{$data->button}}</a></button>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- ================= about us end here  ================== -->
      @foreach($whatwedo as $data)
      <section class="what_we_do section-padding pt-5 mt-10" id="section-padding" style="   
       background-image: url('{{asset('uploads/'.$data->bgimage)}}');
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;" >
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
              <div class="what-we pt-5">
                <h1 class="pb-2 wow  animate__animated animate__backInDown ">{{$data->heading}}</h1>
                <h3 class=" wow  animate__animated animate__backInDown">{{$data->title}}</h3>
                <p class=" wow  animate__animated animate__backInDown mb-2">{!!$data->caption!!}</p><br><br>
              </div>
              @endforeach
              <div class="row">
                @foreach($whatwe as $data)
                <div class="col-lg-6 pb-5">
                  <div class="we-do-content wow  animate__animated animate__bounceInLeft">
                    <h4>{{$data->subtitle}}</h4>
                    <p>{!!$data->info!!}</p>
                  </div>
                </div> 
                @endforeach
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
              <div class="whatwedoimage pt-5 pb-5">
              @foreach($whatweimage as $data)
                <img src="{{asset('uploads/'.$data->image)}}" alt="Image "  class="img-fluid wow  animate__animated animate__zoomIn animate__infinite	infinite animate__slow	4s" >
              @endforeach
              </div>
            </div>
          </div>
        </div>
     </section>
    <!--  WHAT WE DO END HERER  -->
      <section id="about" class="about section-bg mb-10 section-padding">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            @foreach($abouttitle2 as $data)
              <h2 class="wow animate__animated animate__fadeInRight ">{{$data->title}}</h2>
              <p>{!!$data->caption!!}</p>
            @endforeach
              <ul>
                @foreach($aboutussubtitle2 as $data)
                <li>
                <i class="bi bi-arrow-down-right-circle-fill"></i>
                  <div>
                    <h4 class="wow animate__animated animate__fadeInRight">{{$data->subtitle}}</h4>
                    <p class="wow animate__animated animate__fadeInRight">{!!$data->info!!}</p>
                  </div>
                </li>
                @endforeach
              </ul>
              @foreach($aboutinfo2 as $data)
              <p class="wow animate__animated animate__fadeInRight">{!!$data->info!!} </p>
              <br>
              <button id="buttonstyle"><a href="{{$data->button_url}}">{{$data->button}}</a></button>
              
            </div>
            <div class="col-lg-6 wow  animate__animated  animate__fadeInUp justify-content-end" data-aos="fade-right" data-aos-delay="100">
                <img src="{{asset('uploads/'.$data->image)}}" class="img-fluid rounded-2 w-75" alt="">
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- End About two Section end here -->
<section class="missionbg pb-10 bgsectionsvg">
<div class="container">
    <div class="row">
    <div class="col-lg-1 "></div>
      @foreach($aboutmissionh as $data)
      <div class="col-lg-10 ">
        <div class="mission-heading text-center ">
          <h4 class="text-dark fw-bold mt-5">Human & Nature Development Society  <span class="text-danger">( HANDS )</span></h4>
          <h1 class="text3d text-warning pb-4">{{$data->heading}}</h1>
        </div>
      </div>
      @endforeach
      @foreach($aboutmissioninfo as $data)
        <div class="col-md-12">
            <div class="main-timeline wow  animate__animated  animate__fadeInUp">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <h3 class="title">{{$data->title}}</h3>
                        <p class="description">{!!$data->caption!!} </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h3 class="title">{{$data->subtitle}}</h3>
                        <p class="description">{!!$data->info!!}</p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>				                            
</section>
<!-- our upcoming misson end here  -->
<section class="bgsection">
  <div class="container ">
    <div class="row">
      <div class="section_title">
        @foreach($teamhead as $data)
        <h1 class="text-white display-3 text-center pb-4 text3d">{{$data->heading}} </span></h1>
        @endforeach
      </div>
      @foreach($aboutteam as $data)
        <div class="col-12 colsm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3  wow animate__animated  animate__fadeInUp">
            <div class="card teamCard">
                <div class="face front-face">
                    <img src="{{asset('uploads/'.$data->image)}}" alt="" class="profile">
                    <div class="pt-3 text-uppercase name">{{$data->title}}</div>
                    <div class="designation">{{$data->subtitle}}</div>
                </div>
                <div class="face back-face">
                    <span class="fas fa-quote-left"></span>
                    <div class="testimonial">{!!$data->info!!}</div>
                    <span class="fas fa-quote-right"></span>
                    <button class="btn btn-light"><a href="{{$data->button_url}}">{{$data->button}}</a></button>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
</section>
<!--   Our team edn here -->
<section class="bg-white section-padding">
<div class="container mt-40 bg-white">
@foreach($volunteerhead as $data)
  <h3 class="text-center">{{$data->heading}} </h3>
@endforeach
  <div class="row mt-30">
    @foreach($volunteer as $data)
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
          <div class="box7 wow animate__animated  animate__fadeInUp">
              <img class="pic-1 rounded-2" src="{{asset('uploads/'.$data->image)}}">
              <div class="box-content">
                  <h3 class="title">{{$data->title}}</h3>
                  <span class="post">{{$data->subtitle}}</span>
                  <ul class="icon">
                      <li class="text-white"><a href="{{$data->button_url}}" ><i class="bi bi-link"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>
</section>
<!-- ===== about page volunteer end here =========== -->
<section class="section-padding  sectionbg2">
  <div class="container">
    <div class="row">
      <div class="section_title">
      @foreach($Reventh as $data)
        <h1 class="text-capitalize display-3 fw-bold pb-4 text-center text-white text3d ">{{$data->heading}}</h1>
      @endforeach
      </div>
      <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="accordian AccImageStyle">
          <ul>
            @foreach($Revent as $data)
          <li >
            <div class="image_title">
              <a href="{{asset('uploads/'.$data->image)}}">HANDS:{{$data->subtitle}}</a>
            </div> 
            <a href="{{asset('uploads/'.$data->image)}}">
              <img src="{{asset('uploads/'.$data->image)}}"/>
            </a>
          </li>
         @endforeach
        </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  ===== OUR RECENT EVENTS END HERE === -->
<section class="testimonial_section what_we_do section-padding">
  <div class="container">
      <div class="row">
        <div class="pb-4 fw-bold text-uppercase"><h1>Testimonial</h1></div>
          <div class="col-lg-7">
             <div class="about_content  wow animate__animated animate__fadeInLeft animate__slow	2s ">
                  <div class="background_layer"></div>
                  @foreach($hometesthead as $data)
                  <div class="layer_content">
                      <div class="section_title">
                          <h5>CLIENTS</h5>
                          <h2>Happy with<strong>{{$data->heading}}</strong></h2>
                          <div class="heading_line"><span></span></div>
                          <p>{!!$data->caption!!}</p>
                      </div>
                      <a href="{{$data->button_url}}">{{$data->button}}<i class="icofont-long-arrow-right"></i></a>
                  </div>
                @endforeach
              </div>
          </div>
          <div class="col-lg-5">
              <div class="testimonial_box">
                  <div class="testimonial_container">
                      <div class="background_layer"></div>
                      <div class="layer_content">
                          <div class="testimonial_owlCarousel owl-carousel wow animate__animated animate__fadeInRight animate__slow	2s">
                            @foreach($hometestdes as $data)
                              <div class="testimonials"> 
                                  <div class="testimonial_content">
                                      <div class="testimonial_caption">
                                          <h6>{{$data->title}}</h6>
                                          <span>{{$data->subtitle}}</span>
                                      </div>
                                      <p>{!!$data->info!!}</p>
                                  </div>
                                  <div class="images_box">
                                      <div class="testimonial_img">
                                          <img class="img-center" src="{{asset('uploads/'.$data->image)}}" alt="images not found" class="img-fluid">
                                      </div>
                                  </div>
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--   ===================  our testimonial slider end  here =========================== -->
@foreach($Reventall as $data)
<section id="disaster_management" class="mt-5 " style="background:#fcfafa">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
      <div class="section_image">
        <img src="{{asset('uploads/'.$data->image)}}" alt="" height="500px" class="w-100">
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-4">
      <div class="section_text text-center mx-5 ">
      <h3 class="text-warning pt-2 pb-2">Human & Nature Development Society <span class="text-danger"> ( HANDS)</span></h3>
        <h1 class="text-capitalize fw-bold">{{$data->title}}  </h1>
        <p class="">{!!$data->caption!!}</p>
        <button class="btn btn-warning mb-4 mt-4"><a class="text-white fw-bold " href="{{$data->button_url}}">{{$data->button}}</a></button>
      </div>
    </div>
  </div>
</section>
<!-- ==== SECTION END HERE ======= -->
<section id="economice_development" class="mt-5 " style="background:#fcfafa">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
      <div class="section_text text-center mx-5 mt-5">
      <h3 class="text-warning pt-2 pb-2">Human & Nature Development Society <span class="text-danger"> ( HANDS)</span></h3>
        <h1 class="text-capitalize fw-bold">{{$data->subtitle}}</h1>
        <p class="">{!!$data->info!!}</p>
        <button class="btn btn-warning mb-4 mt-4"><a class="text-white fw-bold " href="{{$data->button_url}}">{{$data->button}} </a></button>
      </div>
    </div>
    <!-- COL END  -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
      <div class="section_image">
        <img src="{{asset('uploads/'.$data->bgimage)}}" alt="" height="500px" class="w-100">
      </div>
    </div>
  </div>
</section>
@endforeach
<!-- ==== SECTION END HERE ======= -->
    <section id="services" class="services section-padding">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Our Most valiable Partners </h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div>
        <div class="row">
          @foreach($partner as $data)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-lightbulb-fill"></i></div>
              <h4 class="title"><a href="">{{$data->subtitle}} </a></h4>
              <p class="title text-danger display-6">{!!$data->info!!}  </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- ======= =================  OUR PARTNER END HERE ============================== -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="our-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7820821342634!2d90.37892627599435!3d23.755149188592828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b939a3e2fafb%3A0xaa239ede1a79e04c!2sMd%20Razu%20Hossain%20Raj!5e0!3m2!1sen!2sbd!4v1684665653585!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

