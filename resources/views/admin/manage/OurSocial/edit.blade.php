@extends('layouts.admin')
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
<section class="mb-4" style="margin: bottom 20px;">
  <div class="container-fluid">
  <div class="row" style="background:#1b2a47;border:2px solid #fff;">
  <div class="col-sm-12 col-12 col-lg-9">
        <h1 class="text-capitalize fw-bold text-white  p-4 " id="table_title" > Edit  All   Information </h1>
      </div>
      <div class="col-lg-3 justify-content-right float-right">
        <div class="button " id="add_catagory">
          <button><a  href="{{url('dashboard/website/manage/OurSocial')}}">All   information </a></button>
        </div>
      </div>
     <div class="col-lg-1"></div>
  </div>
  </div>
</section>
<br>
<section>
  <div class="container">
    <div class="row">
      <!-- col end  -->
      <div class="col-lg-10">
        <div class="from " >
        <form  action="{{url('dashboard/website/manage/OurSocial/update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- start  -->
        <div class="form-group">
        <input type="hidden" class="form-control"   name="id" value = "{{$data->HEvent_id}}">
        <input type="hidden" class="form-control"   name="slug" value = "{{$data->slug}}">
          <label id="label_content" for="exampleInputEmail1">facebook  <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="facebook" value = "{{$data->facebook}}">
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">twitter  <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="twitter" value = "{{$data->twitter}}">
        </div> 
        <!--group  end here -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">linkedin  <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="linkedin" value = "{{$data->linkedin}}">
        </div> 
         <!--  group  end here  -->
          <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">instagram   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="instaagram" value = "{{$data->instagram}}">
        </div> 

        <!--group  end here -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1"> information   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="youtube" value = "{{$data->youtube}}">
        </div> 
        </div>

        <!--  group  end here  -->
        <button type="submit" class="btn btn-success p-2">Upload yor Information</button>
      </form>
        </div>
      </div>
      <!-- col end  -->
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>
@endsection