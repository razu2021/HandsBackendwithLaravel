@extends('layouts.master')
@section('content')
@if(Session::has('success'))
  <script>
    swal({ title: "Success!", text: "Successfully upload banner information!", icon: "success", timer:5000});
  </script>
@endif
@if(Session::has('error'))
  <script>
    swal({ title: "Opps!", text: "Banner information upload failed!", icon: "warning", timer:5000});
  </script>
@endif
<section class="sectionbg2 pt-4 pb-4">
    <div class=" bg-fixed text-center" >
        <div class="" >
        @foreach($all as $data)
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
            <h1 class="display-2 mb-5 fw-bold text-white text3d">{{$data->heading}} </h1>
            <a href="{{$data->button_url}}" class="btn btn-outline-light btn-lg">{{$data->button}}</a>
             </div>
        </div>
        @endforeach
        </div>
    </div>
    </section>
    <!--Section: Design Block-->

    <div class="mb-10 ">
        <div>
          <div  class="" style="position: relative;">
            <section  class="container">
              <section class=" text-center">
                <style>
                  hr.divider-vertical {
                    position: absolute;
                    right: 0;
                    top: 0;
                    width: 1px;
                    background-image: linear-gradient(180deg, transparent, hsl(0, 0%, 40%), transparent);
                    background-color: transparent;
                    height: 100%;
                  }
                </style>
                  @foreach($all as $data)
                <div class="p-5 my-2 bg-image sectionbg2" style="background-image: url('{{asset('uploads/'.$data->image)}}'); height: 600px;width:100%; background-size: cover; background-position: 70% 70%; background-color: rgba(0, 0, 0, 0);" >
                <h1 class="display-5 text-bold bg-success text-white text-capitalize container-fluid " style="margin-top: 170px" ></h1>
                </div>
                @endforeach
                          <div class="card  shadow-5-strong" style=" margin-top: -400px; background: hsla(0, 0%, 99%, 0.88); backdrop-filter: blur(30px); ">
                  <div class="card-body mt-4">
                    <div class="row d-flex justify-content-center">
                      <div class="col-lg-6">
                        <form method="POST" action="dashboard/website/contact/ContactMassage/submit">
                            @csrf         
                            <div class="form-outline mb-4">
                            <input type="text" id="form4Example1" class="form-control" name="name">
                            <label class="form-label" for="form4Example1" style="margin-left: 0px;">Name</label>
                            <div class="form-notch">
                              <div class="form-notch-leading" style="width: 9px;"></div>
                              <div class="form-notch-middle" style="width: 42.4px;"></div>
                              <div class="form-notch-trailing"></div>
                            </div>
                          </div>
                            <!-- phone input -->
                          <div class="form-outline mb-4">
                            <input type="tel" id="form4Example1" class="form-control" name="phone">
                            <label class="form-label" for="form4Example1" style="margin-left: 0px;">Phone</label>
                            <div class="form-notch">
                              <div class="form-notch-leading" style="width: 9px;"></div>
                              <div class="form-notch-middle" style="width: 42.4px;"></div>
                              <div class="form-notch-trailing"></div>
                            </div>
                          </div>
                          <!-- Email input -->
                          <div class="form-outline mb-4">
                            <input type="email" id="form4Example2" class="form-control" name="email">
                            <label class="form-label" for="form4Example2" style="margin-left: 0px;">Email address</label>
                            <div class="form-notch">
                              <div class="form-notch-leading" style="width: 9px;"></div>
                              <div class="form-notch-middle" style="width: 88.8px;"></div>
                              <div class="form-notch-trailing"></div>
                            </div>
                          </div>
                          <!-- Message input -->
                          <div class="form-outline mb-4">
                            <textarea class="form-control" id="form4Example3" rows="4" name="massage"></textarea>
                            <label class="form-label" for="form4Example3" style="margin-left: 0px;">Message</label>
                            <div class="form-notch">
                              <div class="form-notch-leading" style="width: 9px;"></div>
                              <div class="form-notch-middle" style="width: 60px;"></div>
                              <div class="form-notch-trailing"></div>
                            </div>
                          </div>
                          <!-- Submit button -->
                          <button type="submit" class="btn  btn-primary btn-block ripple">massage submit </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </section>
          </div>
        </div>
      </div>

    <div id="" class="sectionbg4 pb-5">
        <div>
          <div  style="position: relative;">
      
            <section  class="container-fluid pt-5">
              <section class="">
                <style>
                  /* Map settings */
                  .map-container-2 {
                    height: 500px;
                  }
                  .map-container-2 iframe {
                    left: 0;
                    top: 0;
                    height: 100%;
                    width: 100%;
                  }
                  .rounded-t-5 {
                    border-top-left-radius: 0.5rem;
                    border-top-right-radius: 0.5rem;
                  }
                  @media (min-width: 992px) {
                    .rounded-tr-lg-0 {
                      border-top-right-radius: 0;
                    }
                    .rounded-bl-lg-5 {
                      border-bottom-left-radius: 0.5rem;
                    }
                  }
                </style>

                <div class="container">
                  <div class="row">
                    @foreach($condetails as $data)
                     <div class=" col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 featured-services text-center mt-4" id="featured-services  ">
                     <div class="icon-box animate__animated animate__fadeInLeft" >
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">{{$data->title}}</h5>
                            <p class="card-text"><a href="mailto:{{$data->caption}}">{!!$data->caption!!}</a></p>
                            <div class="card-footer fw-bold"><a href="tel:{{$data->subtitle}}">{{$data->subtitle}}</a></div>
                          </div>
                        </div>
                        </div>
                      </div>
                      @endforeach
                  </div>
                </div>
              </section>
              <div class="card mb-3 mt-4  " style="border-radius:200px">
                  <div class="row g-0 d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-12  col-lg-12 col-xl-12 col-xxl-12 d-lg-flex">
                      <div class="map-container-2 w-100 mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2259482142854!2d90.38695751524672!3d23.73932078459486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bf54700001%3A0x4ce0dc99dc6a7224!2sUNIVERSITAS%20LAW%20CHAMBERS!5e0!3m2!1sen!2sbd!4v1660329560818!5m2!1sen!2sbd" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class=""></iframe>
                      </div>
                    </div>   
                  </div>
                </div>
            </section>
          </div>
        </div>
      </div>
@endsection