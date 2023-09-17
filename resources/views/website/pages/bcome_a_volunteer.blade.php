@extends('layouts.master')
@section('content')
<!-- ====== hader part end here ================ -->
<!-- ===========  banner section start here ==== -->
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
<section>
    <div class="bg-image bg-fixed text-center" style="
        background-image: url('assets/images/v4.jpg');
        height: 400px;
        ">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
            <h1 class="display-2 mb-5 fw-bold text-white ">Beome A volunteer  <br> <span class="text-success shadow-6-strong"> Get Registration </span></h1>
            <a href="#!" class="btn btn-outline-light btn-lg">Button</a>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!--Section: Design Block-->
<!-- ===========  banner section start here ==== -->
<div class="sectionbg3">
    <div>
      <div >
        <section  class="overflow-hidden pt-0" >
          <section class=" background-radial-gradient overflow-hidden">
            <div class="container px-4 py-5 px-md-5 text-center text-lg-start">
              <div class="row gx-lg-5 align-items-center mb-5">
              
                <div class="col-lg-12 mb-5 mb-lg-0 position-relative">
                  <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                  <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                  <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                      <form method="post" action="{{url('dashboard/website/BecomeVolunteer/BcomeVolunteer/submit')}}" enctype="multipart/form-data">
                        @csrf 
                        <!-- <input type="hidden" name="_token" value="PwITUTELCBGdAzvbrFIpcs2qAl6gKIRaNIEZcNbN">          -->
                          <div class="row mb-4 " >
                            <div class="col {{$errors->has('fname') ? 'has-error' : ''}}">
                              <div class="form-outline">
                                <input type="text" id="form3Example1" class="form-control"  name="fname" value="{{old('fname')}}"/>
                                <label class="form-label" for="form3Example1">First name</label>
                              </div>
                              @if($errors->has('fname'))
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('fname')}}</strong>
                                  </span>
                              @endif
                            </div>

                            @if($errors)
                                @foreach($errors as $errors)
                                    {{$errors}}
                                @endforeach
                            @endif


                            <div class="col">
                              <div class="form-outline">
                                <input type="text" id="form3Example2" class="form-control"  name="lname" required/>
                                <label class="form-label" for="form3Example2">Last name</label>
                              </div>
                            </div>
                          </div>
                        <!-- name end  -->
                          <div class="row mb-4">
                            <div class="col">
                              <div class="form-outline">
                                <input type="tel" id="form3Example1" class="form-control" name="phone" required/>
                                <label class="form-label" for="form3Example1">Phone No. </label>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-outline">
                                <input type="email" id="form3Example2" class="form-control" name="email" required />
                                <label class="form-label" for="form3Example2">Email  No.</label>
                              </div>
                            </div>
                          </div>
                        <!-- phone end  -->
                          <div class="row mb-4">
                            <div class="col">
                              <div class="form-outline">
                                <input type="text" id="form3Example1" class="form-control" name="nid" placeholder="optional "/>
                                <label class="form-label" for="form3Example1">NID  </label>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-outline">
                                <input type="text" id="form3Example2" class="form-control" name="riligion" placeholder="optional " />
                                <label class="form-label" for="form3Example2"> Religion</label>
                              </div>
                            </div>
                          </div>
                        <!-- email  end  -->
                          <div class="row mb-4">
                            <div class="col">
                              <div class="form-outline">
                                  <input placeholder="Select date" type="date" id="example" class="form-control" name="birth_date"/>
                                <label class="form-label" for="form3Example1">Date of birth   </label>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-outline">
                                <input type="text" id="form3Example2" class="form-control" name="gender"/>
                                <label class="form-label" for="form3Example2"> Gender </label>
                              </div>
                            </div>
                          </div>
                        <!-- phone end  -->

                          <div class="form-outline mb-4">
                            <textarea class="form-control"  style="width:100% ;padding:10px 20px ; background:transparent; " rows="5"   name="address" placeholder="Pleasse Writte your Address"  ></textarea>
                          </div>
                          <div class="form-outline mb-4" >
                            <textarea class="form-control"  style="width:100% ;padding:10px 20px ; background:transparent; " rows="5"  name="massage"  placeholder="Pleasse Writte Your Massage" ></textarea>
                          </div>
                          <div class="row mb-2">
                            <div class="col-md-12">
                              <input style="width:100% ;padding:10px 20px ; background:transparent; " type="file" class="form-control form_control"  name="pic" placeholder="image">
                            </div>
                          </div>
                            <div class="form-check d-flex justify-content-center mb-4">
                              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                              <label class="form-check-label" for="form2Example33">
                                must upload your image
                              </label>
                            </div>
                          <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
                          <div class="text-center">
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                              <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                              <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                              <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                              <i class="fab fa-github"></i>
                            </button>
                          </div>
                        </form>
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

@endsection