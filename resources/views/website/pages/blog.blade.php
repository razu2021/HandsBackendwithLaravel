@extends('layouts.master')
@section('content')
<section class="bg-white pt-5 pb-5 ">
    <div class=" ">
      <div class="container bg-white pt-4 pb-4" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4  col-xl-4 col-xxl-4">
            @foreach($blogh as $data)
            <div class="blog_banner_content justify-content-center text-center pt-5 ">
              <h1 class="animate__animated animate__fadeInDown">{{$data->heading}} </h1>
              <p>{!!$data->caption!!}</p><br>
              <button id="buttonstyle"><a href="{{$data->button_url}}">{{$data->button}}</a></button>
            </div>
            @endforeach
          </div>
          <div class="col-lg-8 ps-5 pe-0">
            <div class="row mt-3">
              @foreach($all as $data)
              <div class="col-lg-3 col-6  animate__animated animate__fadeInDown">
                <img class="w-100 border-radius-lg shadow" src="{{asset('uploads/'.$data->image)}}" alt="flower-2" >
              </div><br>
              <div class="col-lg-3 col-6 mt-5 animate__animated animate__fadeInDown">
                <img class="w-100 border-radius-lg shadow " src="{{asset('uploads/'.$data->bgimage)}}" alt="flower-2" >
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end here  -->
<section class="sectionbg5">
@foreach($Rblog as $data)
  <div class="container my-5 p-5  ">
    <section class="dark-grey-text bg-white p-4 rounded-6">
      <h2 class="text-center font-weight-bold mb-4 pb-2 text3d text-danger">{{$data->heading}}</h2>
      <p class="text-center lead grey-text mx-auto mb-5"></p>
      <div class="row">
        <div class="col-md-4">
          <div class="row mb-3">
            <div class="col-2">
              <i class="fas fa-2x fa-flag-checkered deep-purple-text"></i>
            </div>
            <div class="col-10 ">
              <h5 class="font-weight-bold mb-3">{{$data->subtitle}}</h5>
              <p class="grey-text">{!!$data->info!!}</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid rounded-9" src="{{asset('uploads/'.$data->image)}}"
            alt="Sample image">
        </div>
        <div class="col-md-4">
          <div class="row mb-3">
            <div class="col-2">
              <i class="far fa-2x fa-heart deep-purple-text"></i>
            </div>
            <div class="col-10">
              <h5 class="font-weight-bold mb-3">{{$data->title}}</h5>
              <p class="grey-text">{!!$data->caption!!}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @endforeach
</section>
<!-- our recent blog end here -->
<div class="container mt-5">
  <section class="">
    <h3 class="text-center font-weight-bold mb-5">Latest news</h3>
    <div class="row">
    @foreach($Lblog as $data)
      <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
        <div class="card hoverable">
          <img class="card-img-top" src="{{asset('uploads/'.$data->image)}}" alt="Card image cap">
          <div class="card-body">
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
@foreach($Lblog as $data)
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="{{$data->slug}}" aria-labelledby="offcanvasBottomLabel" style="height:500px">
  <div class="offcanvas-header bg-info ">
    <h3 class="offcanvas-title" id="offcanvasBottomLabel">Human & Nature Development Soriety <span class="text-danger"> ( HANDS )</span> </h3><hr>
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