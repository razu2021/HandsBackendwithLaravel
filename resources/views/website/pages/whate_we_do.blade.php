@extends('layouts.master')
@section('content')
<section>
    <div id="main-slider">
      <div class="main-slider">
        <div class="owl-carousel index-banner-slider">
          @foreach($all as $data)
          <div class="slider">
            <div class="slider-image bg-image">
              <img src="{{asset('uploads/'.$data->image)}}" alt="Banner Slider " class="">
            </div>
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)"></div>
            <div class="container">
              <div class=" slider-text">
                <div class="row">
                  <div class="col-12 col-lg-6 ">
                    <div class="banner-text">
                      <h1 class="animate__animated animate__fadeInDown display-3 pb-2 m-0">{{$data->heading}}</h1>
                      <p class="animate__animated animate__fadeInUp p-2 m-0">{!!$data->caption!!}</p>
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
  <!--banner section end here -->
  <section id="services" class="services  About_service">
    <div class="container">
      <div class="row">
        @foreach($wedoachiv as $data)
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 ">
          <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100" style=" box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
            <div class=" title text-center"><h1  class="text3d " id="{{$data->heading}}">{{$data->subtitle}}</h1></div>
            <hr>
            <h1 class=" title text-center" style="font-size:24px"><a href="" class="">{{$data->title}}</a></h1>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
<!-- achivment section end herer  -->
    <section id="services" class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-2"></div>
          @foreach($serviceonehead as $data)
          <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8 col-xxl-8 text-center pb-5">
            <div class=" text-center" data-aos="fade-up">
              <h1 class="display-4 fw-bolder p-4">{{$data->heading}}</h1>
              <h4 class="">{{$data->title}}</h4>
              <br>
              <p>{!!$data->caption!!}​</p>
            </div>
          </div>
          @endforeach
          <div class="col-lg-2"></div>
          @foreach($serviceone as $data)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 text-center ">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class=""><a href="#{{$data->slug}}"><img src="{{asset('uploads/'.$data->image)}}" alt="" height="100px" width="auto"></a></div>
              <h4 class="title pt-3 text-uppercase"><a href="#{{$data->slug}}">{{$data->subtitle}} </a></h4>
              <p class="title">{!!$data->info!!}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Service section end here END HERE -->
@foreach($headoffice as $data)
<section class="" style="background: #f1f1f1">
  <div class="container pb-5 pt-5">
    <div class="row">

      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
        <div class="support text-center  p-5 shadow-6-strong bg-white rounded-4">
          <h1 class="text3d text-warning display-1 wow animate__animated animate__fadeInLeft" style="font-size: 130px">{{$data->heading}} </h1>
          <h3 class="wow animate__animated animate__fadeInLeft">{{$data->title}} </h3>
        </div>
       </div>
       <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <div class="need_support text-center ">
          <h1 class="text-center text-capitalize text-bold pb-4 wow animate__animated animate__fadeInRight ">{{$data->subtitle}} </h1>
          <p class="mx-5 wow animate__animated animate__fadeInRight">{!!$data->caption!!}</p>
          <br>
          <br>
          <button class="btn btn-warning pb-2 wow animate__animated animate__fadeInRight"><a href="{{$data->button_url}}"  class="text-white text">{{$data->button}}</a></button>
        </div>
       </div>
      </div>
  </div>
</section>
<section>
<div class="bg-image bg-fixed text-center" style="
    background-image: url('{{asset('uploads/'.$data->image)}}');
    height: 400px;">
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <p class="display-6 mb-5">{!!$data->info!!}</p>
        <a href="{{$data->button_url}}" class="btn btn-outline-light btn-lg">{{$data->button}}</a>
      </div>
    </div>
  </div>
</div>
</section>
@endforeach
<!--our corporate building / support hands end here   -->
@foreach($serviceone as $data)
<section id="{{$data->slug}}" class="mt-5 " style="background:#fcfafa">
@endforeach
@foreach($serviceTwo as $data)
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
      <div class="section_image wow animate__animated animate__bounceInLeft">
        <img src="{{asset('uploads/'.$data->image)}}" alt="" height="500px" class="w-100">
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mt-4 ">
      <div class="section_text text-center mx-5 ">
      <h3 class="text-warning pt-2 pb-2">{{$data->heading}}<span class="text-danger"> ( HANDS)</span></h3>
        <h1 class="text-capitalize fw-bold wow animate__animated animate__bounceInRight">{{$data->title}}</h1>
        <p class="pb-4 pt-2 wow animate__animated animate__bounceInRight">{!!$data->caption!!}</p>
      </div>
    </div>
  </div>
</section>
<section  class="mt-5 " style="background:#fcfafa">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
      <div class="section_text text-center mx-5 mt-5">
      <h3 class="text-warning pt-2 pb-2">{{$data->heading}} <span class="text-danger"> ( HANDS)</span></h3>
        <h1 class="text-capitalize fw-bold">{{$data->subtitle}}</h1>
        <p class="pb-4 pt-2">{!!$data->info!!}</p>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
      <div class="section_image">
        <img src="{{asset('uploads/'.$data->bgimage)}}" alt="" height="500px" class="w-100">
      </div>
    </div>
  </div>
</section>
@endforeach
@endsection