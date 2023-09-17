@extends('layouts.master')
@section('content')
<!-- ======== banner start  here =====    -->
<div class="preview">
    <div style="display: none;"></div>
    <div>
      <div class="" style="position: relative;">
        <section draggable="false" class="overflow-hidden pt-0" >
          <section class="mb-4 position-relative text-center text-lg-start">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="svg position-absolute d-none d-lg-block" style="height: 560px; width: 100%; z-index: 0; overflow: hidden">
              <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                  <stop stop-color="hsl(217, 102%, 99%)" offset="0%"></stop>
                  <stop stop-color="hsl(217,88%, 93%)" offset="100%"></stop>
                </linearGradient>
              </defs>
              <path fill="url(#sw-gradient-0)" d="M 0.351 264.418 C 0.351 264.418 33.396 268.165 47.112 270.128 C 265.033 301.319 477.487 325.608 614.827 237.124 C 713.575 173.504 692.613 144.116 805.776 87.876 C 942.649 19.853 1317.845 20.149 1440.003 23.965 C 1466.069 24.779 1440.135 24.024 1440.135 24.024 L 1440 0 L 1360 0 C 1280 0 1120 0 960 0 C 800 0 640 0 480 0 C 320 0 160 0 80 0 L 0 0 L 0.351 264.418 Z"></path>
            </svg>
            <div class="px-4 py-5 px-md-5">
              <div class="container">
                <div class="row gx-lg-5 align-items-center">
                  @foreach($all as $data)
                  <div class="col-lg-6 mb-5 mb-lg-0 py-5" style="z-index: 1">
                    <h1 class="my-5 display-4 fw-bold ls-tight">
                      <span>{{$data->heading}}</span>
                      <br>
                      <span class="text-primary">{{$data->title}}</span>
                    </h1>
                    <div class="d-md-flex flex-row">
                        <p>{!!$data->caption!!}</p>
                    </div>
                  </div>
                  @endforeach
                  <div class="col-lg-6 mb-5 mb-lg-0 justify-content-end " style="z-index: 1">
                    <div class="ratio ratio-16x9">
                      <iframe src="https://www.youtube.com/embed/O9_EHU5BKnQ" title="YouTube video" class="rounded-4 shadow-4-strong" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </section>
      </div>
    </div>
  </div>
<!--  ====  banner end here ==============  -->
<div class="container mt-40 mb-10">
    <h1 class="text-center"> Our <span class="text-success  display-4 fw-bold ">Team</span> </h1>
    <div class="row mt-30">
      @foreach($allteam as $data)
        <div class="col-md-4 col-sm-6">
            <div class="box3 rounded-6 shadow-3-strong ">
                <img class="pic-1" src="{{asset('uploads/'.$data->image)}}" class="img-fluid  " alt="our team image " style="height:auto ;width:100%">
                <div class="box-content">
                    <h3 class="title">{{$data->title}}</h3>
                    <h6 class="title text-white">{{$data->subtitle}}</h6><br>
                    <ul class="icon">
                        <li><a href="{{asset('uploads/'.$data->image)}}"><i class="fa fa-search"></i></a></li>
                        <li><a href="{{$data->button_url}}"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection