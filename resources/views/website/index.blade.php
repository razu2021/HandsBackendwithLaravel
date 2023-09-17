@extends('layouts.master')
@section('content')
<!-- ===================  Header part end  here ================= -->
<section>
  <div id="main-slider">
    <div class="main-slider">
      <div class="owl-carousel index-banner-slider">
        @foreach($all as $data)
        <div class="slider">
          <div class="slider-image bg-image">
            <img src="{{asset('uploads/'.$data->ban_image)}}" alt="Banner Slider ">
          </div>
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)"></div>
          <div class="container">
            <div class=" slider-text">
              <div class="row">
                <div class="col-12 col-lg-6 ">
                  <div class="banner-text">
                    <h1 class="animate__animated animate__fadeInDown display-3 pb-2 m-0">{{$data->ban_title}}</h1>
                    <h4 class="animate__animated animate__fadeInDown display-6 text-white fw-bold m-0">{{$data->ban_subtitle}}</h4>
                    <p class=" animate__animated animate__fadeInUp  pb-4 m-0">{!! $data->ban_information !!}</p>
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
<!-- ===========================    banner section end here -= =================== -->
 <section id="services" class="services section-padding">
      <div class="container">
        <div class="row">
          @foreach($HomeEvent as $data)
          <div class=" col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="servicesid" id="servicesid" data-aos="fade-up" data-aos-delay="100">
              <h4>{{$data->heading}} </h4><hr>
              <h6>{{$data->title}}</h6>
              <p>Date:  <time datetime="2008-02-14 20:00">{{$data->subtitle}}</time>.</p><hr>
              <p class="description1">{!! $data->info !!}</p>
              <a href="{{$data->button_url}}">{{$data->button}}</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
<!-- End Featured Services Section -->
@foreach($whatwedo as $data)
<section class="what_we_do section-padding pt-5 mt-10" id="section-padding" style="   
    background-image: url('{{asset('uploads/'.$data->bgimage)}}');
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;">
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
          <div class="col-lg-6 pb-5  ">
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
<!-- =====================================   WHAT WE DO END HERER ======================= -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-12 col-lg-6 pb-5">
        @foreach($causeshead as $data)
        <div class="causes-header text-center">
          <h1>{{$data->heading}}</h1>
          <p>{!!$data->caption!!}</p>
        </div>
        @endforeach
      </div>
      <div class="col-lg-3"></div>
      @foreach($causes as $data)
      <div class="col-12 col-sm-12 col-md-6 col-xl-3 col-lg-3 col-xxl-3 ">
        <div class="our-causes wow  animate__animated animate__fadeInUp ">
          <div class="card" style="width: 20rem; height:460px">
            <div class="row p-2 text-center border-1">
              <p class="col-md-12 ">{{$data->title}}</p>
            </div>
            <img src="{{asset('uploads/'.$data->image)}}" class="card-img-top img-fluid" alt="image" style="height:200px">
            <div class="card-body">
              <h5 class="card-title">{{$data->subtitle}}</h5>
              <p class="card-text">{!!Str::words($data->info,20)!!}</p>
              <a class="text-capitalize text-danger pt-2" href="{{$data->button_url}}">{{$data->button}}</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- ====================== our causes end here ========================================================================= -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <div class="product-huminity">
          @foreach($homeproduct as $data)
          <img src="{{asset('uploads/'.$data->image)}}" alt="donet image " class="img-fluid wow  animate__animated animate__zoomIn" height="100%" width="100%">
          @endforeach
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 justify-content-end">
        <div class="huminity">
          <div class="row">
            <div class="col-lg-4 ">
              @foreach($producthead as $data)
              <div class="huminity-content text-end wow  animate__animated animate__zoomIn">
                <h4 class="fw-bold pb-2">{{$data->heading}}</h4>
                <p>{!!$data->caption!!}</p>
              </div>
              @endforeach
            </div>
            @foreach($productmore as $data)
            <div class="col-lg-4 mt-2">
              <div class="huminity-content wow  animate__animated animate__zoomIn">
               <a href="{{$data->button_url}}"><img src="{{asset('uploads/'.$data->bgimage)}}" alt="donate image "  style="width:100%; height:100%"></a> 
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====================  PRODUCT HUMINITY END HERRE ==================== -->
    <section id="about" class="about_section_bg section-padding ">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="owl-carousel index-causes-slider">
              @foreach($causesimages as $data)
              <div class="slider"> 
                <img src="{{asset('uploads/'.$data->image)}}" class="img-fluid" alt=""> 
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            @foreach($aboutcauses as $data)
            <div class="causes-info">
              <h1 class="pb-2 wow  animate__animated animate__zoomIn">{{$data->heading}}</h1>
              <h4 class="pb-2 wow  animate__animated animate__zoomIn">{{$data->title}}</h4>
              <p class="pb-2 wow  animate__animated animate__zoomIn">{!!$data->caption!!}</p>
              <p class="pb-2 wow  animate__animated animate__zoomIn">{!!$data->info!!}</p>
              <button class="btn btn-success wow  animate__animated animate__zoomIn "><a href="{{$data->button_url}}" class="text-white">{{$data->button}}</a></button>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
<!-- ===================================    Testimonial start here =========== -->
<section class="what_we_do">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <main>
                <div class="book">
                    <div class="book-cover">
                        <div>
                            <h1 class="donar-heading">Our Valuable Donor </h1>
                            <div class="separator"></div>
                            <h2 class="providername">Provided by :</h2>
                            <h2 class="handsname">Human & Nature Development Society  <br><span class="text-danger"> ( HANDS )</span></h2>
                        </div>
                    </div>
                    <div class="book-content ">
                    <div class="container mt-2 mb-2 px-2">
                      <div class="row">
                      @foreach($Ourdonar as $data)
                      <div class="row mb-4 mt-2 " style="border:1px dotted #000 ;background:#FAD7A0;padding:5px 0px ">
                          <div class="col-3 p-2">
                            <img src="{{asset('uploads/'.$data->image)}}" class="img-fluid shadow-1-strong rounded-6" alt="">
                          </div>
                          <div class="col-9">
                            <h3>{{$data->heading}}</h3>
                            <hr>
                            <p class="mb-2"><strong>Date:{{$data->subtitle}}</strong></p>
                            <p>{!!$data->caption!!}</p>
                          </div>
                        </div>
                        <!-- col end here  -->
                      @endforeach

                      </div>
                    </div>
                  <!-- container end here  -->
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
</section>
<!-- =====================================    our valiable donar end here  ======================= -->
<section id="team" class="pb-5 section-padding">
  <div class="container">
      <h5 class="section-title h1 fw-bold wow animate__animated animate__zoomIn ">OUR HEARDWORKING VOLUNTER </h5>
      <div class="row">
          <!-- Team member start here ============================== -->
          <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xx-3">
              <div class="image-flip wow animate__animated animate__lightSpeedInLeft animate__slow	2s" >
                  <div class="mainflip flip-0">
                    @foreach($ourvolunteer as $data)
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="{{asset('uploads/'.$data->image)}}" alt="card image"></p>
                                  <h4 class="card-title">{{$data->title}} </h4>
                                  <p class="card-text">{{$data->subtitle}}</p>
                                  <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">{{$data->title}}</h4>
                                  <p class="card-text">{!!$data->info!!}</p>
                                  <a clas="text-white" href="{{$data->button_url}}"><button class="btn btn-success">{{$data->button}}</button></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
          <!-- ./Team member    end here    ================================= -->         
      </div>
  </div>
</section>
<!--   ===================  our testimonial slider start here =========================== -->
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
<section class="section-padding">
  <div class="container">
    <div class="row">
      @foreach($portfolio as $data)
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xx-4 wow animate__animated animate__fadeInUp ">
        <div class="box17">
          <img class="pic-1" src="{{asset('uploads/'.$data->image)}}">
          <ul class="icon">
              <li><a href="#"><i class="fa fa-link"></i></a></li>
          </ul>
          <div class="box-content">
              <h3 class="title">{{$data->title}}</h3>
              <span class="post">{{$data->subtitle}}</span>
          </div>
      </div>
      </div>
      <!-- col end here  -->
      @endforeach
    </div>
  </div>
</section>
<!-- ===========causes section end herre ======= -->
<section class="what_we_do section-padding">
<div class="container">
  <h3 class="h3 text-center pb-4 fw-bolder">OUR LATEST NEWS  </h3>
  <div class="row">
      <div class="col-md-12">
          <div id="news-slider" class="owl-carousel">
            @foreach($homenews as $data)
              <div class="post-slide">
                  <div class="post-img">
                      <a href="#">
                      @if($data->image!='')
                        <img class="pic-1" src="{{asset('uploads/'.$data->image)}}">
                      @else
                        <img height="200px" width=""  src="{{asset('uploads/avatar.jpg')}}"/>
                      @endif
                          <div class="post-date">
                              <span class="date">10</span>
                              <span class="month">Jan</span>
                          </div>
                      </a>
                  </div>
                  <div class="post-review">
                      <h3 class="post-title"><a href="#">{{$data->heading}}</a></h3>
                      <ul class="post-bar">
                          <li><i class="bi bi-person-circle"></i><a href="#">{{$data->title}} </a></li>
                          <li><i class="fa fa-comment"></i><a href="#">5</a></li>
                      </ul>
                      <p class="post-description">{!!Str::words($data->caption,30)!!}</p>
                  </div>
                  <a class="text-danger" href="{{$data->button_url}}">{{$data->button}}</a>
              </div>

              <div class="post-slide">
                  <div class="post-img">
                      <a href="#">
                      @if($data->image!='')
                        <img class="pic-1" src="{{asset('uploads/'.$data->image)}}">
                      @else
                        <img height="" width=""  src="{{asset('uploads/avatar.jpg')}}"/>
                      @endif
                          
                          <div class="post-date">
                              <span class="date">10</span>
                              <span class="month">Jan</span>
                          </div>
                      </a>
                  </div>
                  <div class="post-review">
                      <h3 class="post-title"><a href="#">{{$data->subtitle}}</a></h3>
                      <ul class="post-bar">
                          <li><i class="bi bi-person-circle"></i><a href="#">{{$data->title}}</a></li>
                          <li><i class="fa fa-comment"></i><a href="#">7</a></li>
                      </ul>
                      <p class="text-justify">{!!Str::words($data->info,30)!!}</p>
                  </div>
                  <a class="text-danger" href="{{$data->button_url}}">{{$data->button}}</a>
              </div>
           
            @endforeach
          </div>
      </div>
  </div>
</div>
</section>
<!-- =====================        NEWS SLIDER END HERE             ===================       -->
    <section id="services" class="services section-padding">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Our Most valiable Partners </h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div>
        <div class="row">
          <!-- col end -->
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


    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente facilis ducimus tempora inventore neque, similique saepe corporis voluptates. Sit asperiores iusto perferendis fuga iure, temporibus aliquid soluta nostrum, optio, repellat quis sapiente aspernatur itaque reprehenderit sed atque. Quasi numquam possimus consectetur dignissimos adipisci quia, neque ab dolores quis, vero et libero voluptatum quam. Deserunt odit quae soluta optio omnis corrupti amet sequi? Aspernatur, animi aut harum similique numquam aliquam nam velit itaque debitis id omnis. Magni amet libero cupiditate, dolorem ipsa, quaerat iusto impedit quasi repellendus dicta praesentium aut voluptatum reiciendis porro. Itaque natus dolorum enim ratione incidunt. Natus eius optio provident nulla consectetur est libero facilis rem voluptatibus, iusto nemo sint qui? Sapiente eligendi fugit non sequi reiciendis est, voluptatem possimus cupiditate enim nihil saepe voluptate minus excepturi culpa, et repudiandae autem quasi libero dicta tenetur placeat consequuntur ullam. Sint, quo debitis. Earum, dolor adipisci commodi itaque fuga sequi eos iste voluptatibus asperiores accusantium perferendis. Voluptatibus placeat natus corrupti incidunt odio id? Repellendus officia impedit corrupti aliquam itaque quos ullam nam repudiandae assumenda veniam. Nihil expedita odit necessitatibus eveniet facere! Iure vel eos amet voluptatem architecto obcaecati explicabo minus recusandae molestiae, aut soluta, nobis veniam voluptas deleniti alias voluptates?</p>
    <!-- ======= =================  OUR PARTNER END HERE ============================== -->
@endsection 