@extends('layouts.master')
@section('content')
<section class=" bgsection  pt-5 pb-5">
  <div class="container  bg-white rounded-5 pt-4 pb-4" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
    <section class=" text-center dark-grey-text">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-xl-6 col-lg-6 col-xxl-6 justify-content-center pt-5">
          @foreach($banh as $data)
          <h1 class="font-weight-bold p-2  animate__animated animate__fadeInLeft ">{{$data->heading}}</h1>
          <p class="text-muted p-2 animate__animated animate__fadeInLeft">{!!$data->caption!!}</p>
            @endforeach
            <div class="row mb-4 mt-4">
              @foreach($banE as $data)
              <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0 featured-services" id="featured-services  "  >
                <div class="icon-box animate__animated animate__fadeInLeft" >
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{$data->title}}</h5>
                    <p class="card-text">{!!$data->info!!}</p>
                    <div class="card-footer fw-bold">{{$data->subtitle}}</div>
                  </div>
                </div>
                </div>
              </div>
              @endforeach 
            </div>
            <hr class="my-5">
          <p class="font-weight-bold mt-4 animate__animated animate__fadeInLeft">Follow us on:</p>
          <a href="#" class="mx-1 text-success wow animate__animated animate__bounceInDown animate__delay-1s" role="button"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="mx-1 text-success wow animate__animated animate__bounceInDown animate__delay-1s" role="button"><i class="fab fa-twitter"></i></a>
          <a href="#" class="mx-1 text-success wow animate__animated animate__bounceInDown animate__delay-1s" role="button"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="mx-1 text-success wow animate__animated animate__bounceInDown animate__delay-1s" role="button"><i class="fab fa-instagram"></i></a>
          <a href="#" class="mx-1 text-success wow animate__animated animate__bounceInDown animate__delay-1s" role="button"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 justify-content-end  animate__animated animate__fadeInRight my-5">
          @foreach($banimg as $data)
          <img src="{{asset('uploads/'.$data->image)}}" class="img-fluid float-end w-75 rounded-6" alt="">
          @endforeach
        </div>
      </div>
    </section>
  </div>
</section>
<!-- bannner section end here  -->
<div class="container mt-5">
  <section class="">
    <h3 class="text-center font-weight-bold mb-5">Latest news</h3>
    <div class="row">
    @foreach($allevent as $data)
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
        <div class="card hoverable">
          <img class="card-img-top" src="{{asset('uploads/'.$data->image)}}" alt="Card image cap" class="img-fluid" style="height:250px ;width:auto" >
          <div class="card-body">
            <h5>{{$data->title}}</h5>
            <a href="#!" class="black-text">{{$data->subtile}}</a>
            <p class="card-title text-muted font-small mt-3 mb-2">{!!Str::words($data->info,20)!!}</p><br>
            <button class="btn btn-success "  data-bs-toggle="offcanvas" data-bs-target="#{{$data->slug}}" aria-controls="offcanvasBottom"><a class="text-white" href="#">{{$data->button}}</a> <i class="fa fa-angle-right ml-2"></i></button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
</div>
</div>
@foreach($allevent as $data)
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="{{$data->slug}}" aria-labelledby="offcanvasBottomLabel" style="height:500px">
  <div class="offcanvas-header bg-info ">
    <h3 class="offcanvas-title" id="offcanvasBottomLabel">Human & Nature Development Soriety <span class="text-danger"> ( HANDS )</span></h3><hr>
    <button type="button" class="btn-close text-danger" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="content text-justify">
              <h1 class="pb-2">{{$data->title}}</h1>
              <p class="pb-2">{!!$data->caption!!}</p>
              <h4 class="pt-2">{{$data->subtitle}}</h4>
              <p class="pb-2">{!!$data->info!!}</p>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
@endforeach



@endsection 