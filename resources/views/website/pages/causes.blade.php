@extends('layouts.master')
@section('content')
<!-- ====== hader part end here ================ -->
@foreach($all as $data)
<section class="what_we_do" style="   
 background-image: url('{{asset('uploads/'.$data->image)}}');
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-5">
                <h1 class="text-uppercase fw-bold text-center pt-5 pb-5">{{$data->heading}} </h1>
                <button id="buttonstyle" ><a class="text-uppercase fw-bold pt-2 pb-4" href="{{$data->button_url}}">{{$data->button}} <span><i class="bi bi-arrow-right-circle"></i></span></a></button>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- ======banner end here =========== -->
<section class="section-padding sectionbg2">
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-12 col-lg-6 pb-5">
        @foreach($causeshead as $data)
        <div class="causes-header text-center">
          <h1 class="text3d text-white">{{$data->heading}}</h1>
          <h4 class="text-white">{!!$data->caption!!}</h4>
        </div>
        @endforeach
      </div>
      <div class="col-lg-3"></div>
      @foreach($causes as $data)
      <div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4 col-xxl-4 mt-4">
        <div class="our-causes wow  animate__animated animate__fadeInUp ">
          <div class="card" style="width:auto; height:auto">
            <div class="row p-2 text-center border-1">
              <p class="col-md-12 ">{{$data->title}}</p>
            </div>
            <img src="{{asset('uploads/'.$data->image)}}" class="card-img-top img-fluid" alt="image" style="height:300px">
            <div class="card-body">
              <h5 class="card-title">{{$data->subtitle}}</h5>
              <p class="card-text m-0">{!!Str::words($data->info,50)!!}</p>
              <a class="text-capitalize text-danger pt-2" data-mdb-toggle="modal" data-mdb-target="#{{$data->slug}}" href="{{$data->button_url}}">{{$data->button}}</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Modal -->
@foreach($causes as $data)
<div
  class="modal fade" id="{{$data->slug}}" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{$data->title}}</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <h2>{{$data->subtitle}}</h2><br>
          <p>{!!$data->info!!}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach



<!-- ====================== our causes end here ========================================================================= -->


@endsection