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
                  <div class="col-12 col-lg-8 ">
                    <div class="banner-text">
                      <h1 class="animate__animated animate__fadeInDown display-3 pb-2 m-0">{{$data->heading}}</h1>
                      <p class="animate__animated animate__fadeInUp p-2 m-0">{!!$data->caption!!}</p><br>
                      <button class="" id="buttonstyle"><a href="{{$data->button_url}}">{{$data->button}}</a></button>
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
  <!-- banner section end here  -->

<section class="section-padding">
    <div class="container">
        <div class="row">
          <div class="heading text-center pt-4 pb-4 ">
            @foreach($volunteerhead as $data)
              <h1>{{$data->heading}}</h1>
            @endforeach
          </div>
          @foreach($volunteer as $data)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                <div class="our_volunteer">
                    <div class="image-flip wow animate__animated animate__lightSpeedInLeft animate__slow	2s" >
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="{{asset('uploads/'.$data->image)}}" alt="card image"></p>
                                        <h4 class="card-title">{{$data->title}} </h4>
                                        <p class="card-text">{{$data->subtitle}}</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">{{$data->title}} </h4>
                                        <p class="card-text">{!!$data->info!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--====  col end here ===== -->
        </div>
    </div>
</section>
<!--  volunteer end here  -->
@foreach($ourunity as  $data)
<section class="bg-image" style="   
    background-image: url('{{asset('uploads/'.$data->image)}}');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;">
<div class=" text-center " style="background-color: rgba(0, 0, 0, 0.3);">
    <div class="  ">
    <div class=" justify-content-center align-items-center h-100">
        <div class="text-white p-5  container-fluid">
          <h1 class="text3d text-white display-4">{{$data->heading}} <span class="text-danger"> <br>( HANDS )</span></h1>
        <p class="display-6 fw-bold">{{$data->title}}</p>
        <p class="mx-5">{!!$data->caption!!}</p><br>
        <button id="buttonstyle"><a href="{{$data->button_url}}">{{$data->button}}</a></button>
        </div>
    </div>
    </div>
</div>
</section>
@endforeach 
<!--our honesty end here -->
<section class="section-padding">
    <div class="container">
        <div class="row">
          <div class="heading text-center pt-4 pb-4 ">
            @foreach($teamlh as $data)
              <h1>{{$data->heading}}</h1>
            @endforeach
          </div>
          @foreach($teamleader as $data)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                <div class="our_volunteer">
                    <div class="image-flip wow animate__animated animate__lightSpeedInLeft animate__slow	2s" >
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="{{asset('uploads/'.$data->image)}}" alt="card image"></p>
                                        <h4 class="card-title">{{$data->title}} </h4>
                                        <p class="card-text">{{$data->subtitle}}</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">{{$data->title}} </h4>
                                        <p class="card-text">{!!$data->info!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--====  col end here ===== -->
        </div>
    </div>
</section>
<!-- Our Team leader end here   -->
@foreach($ourhonesty as  $data)
<section class="bg-image" style="   
    background-image: url('{{asset('uploads/'.$data->image)}}');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;">
<div class=" text-center " style="background-color: rgba(0, 0, 0, 0.3);">
    <div class="  ">
    <div class=" justify-content-center align-items-center h-100">
        <div class="text-white p-5  container-fluid">
          <h1 class="text3d text-white display-4">{{$data->heading}} <span class="text-danger"> <br>( HANDS )</span></h1>
        <p class="display-6 fw-bold">{{$data->title}}</p>
        <p class="mx-5">{!!$data->caption!!}</p><br>
        <button id="buttonstyle"><a href="{{$data->button_url}}">{{$data->button}}</a></button>
        </div>
    </div>
    </div>
</div>
</section>
@endforeach 
<!--our honesty end here -->
<section class="section-padding">
    <div class="container">
        <div class="row">
          <div class="heading text-center pt-4 pb-4 ">
            @foreach($fworkerh as $data)
              <h1>{{$data->heading}}</h1>
            @endforeach
          </div>
          @foreach($fworker as $data)
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                <div class="our_volunteer">
                    <div class="image-flip wow animate__animated animate__lightSpeedInLeft animate__slow	2s" >
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="{{asset('uploads/'.$data->image)}}" alt="card image"></p>
                                        <h4 class="card-title">{{$data->title}} </h4>
                                        <p class="card-text">{{$data->subtitle}}</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">{{$data->title}} </h4>
                                        <p class="card-text">{!!$data->info!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Our feild worker end here-->

@foreach($helpfull as  $data)
<section class="bg-image" style="   
    background-image: url('{{asset('uploads/'.$data->image)}}');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size:cover;">
<div class=" text-center " style="background-color: rgba(0, 0, 0, 0.4);">
    <div class="  ">
    <div class=" justify-content-center align-items-center h-100">
        <div class="text-white p-5  container-fluid">
          <h1 class="text3d text-white display-4">{{$data->heading}} <span class="text-danger"> <br>( HANDS )</span></h1>
        <p class="display-6 fw-bold">{{$data->title}}</p>
        <p class="mx-5">{!!$data->caption!!}</p><br>
        <button id="buttonstyle"><a href="{{$data->button_url}}">{{$data->button}}</a></button>
        </div>
    </div>
    </div>
</div>
</section>
@endforeach 
<!--our helpfull end here -->
<section class="section-padding sectionbg4">
    <div class="container">
        <div class="row">
          <div class="heading text-center pt-4 pb-4 ">
              <h1 class="text3d text-white">Human & Nature Development Society <span class="text-danger"> ( Volunteer )</span></h1> 
          </div>
          @foreach($allvolunteer as $data)
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                <div class="our_volunteer">
                    <div class="image-flip wow animate__animated animate__lightSpeedInLeft animate__slow	2s" >
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="{{asset('uploads/'.$data->image)}}" alt="card image"></p>
                                        <h4 class="card-title">{{$data->title}} </h4>
                                        <p class="card-text">{{$data->subtitle}}</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">{{$data->title}} </h4>
                                        <p class="card-text">{!!$data->info!!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><hr>
<!-- Our feild worker end here-->
@endsection