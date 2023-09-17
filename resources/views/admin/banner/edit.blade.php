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
        <h1 class="text-capitalize fw-bold text-white  p-4 " id="table_title" > Edit  Banner  Information </h1>
      </div>
      <div class="col-lg-3 justify-content-right float-right">
        <div class="button " id="add_catagory">
          <button><a  href="{{url('dashboard/banner')}}">all banner information </a></button>
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
        <form  action="{{url('dashboard/banner/update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- start  -->
        <div class="form-group">
        <input type="hidden" class="form-control"   name="id" value = "{{$data->ban_id}}">
        <input type="hidden" class="form-control"   name="slug" value = "{{$data->ban_slug}}">
          <label id="label_content" for="exampleInputEmail1">Banner Title  <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="banner_title" value = "{{$data->ban_title}}">
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Banner SubTitle  <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="banner_subtitle" value = "{{$data->ban_subtitle}}">
        </div> 
        <!--group  end here -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Banner Information  <span class="text-danger"> * </span></label>
          <textarea  class="form-control"  id="editor" col="10" row="50" name="banner_information" value="{{$data->ban_information}}">{{$data->ban_information}}</textarea>
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Banner Button   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="banner_button" value = "{{$data->ban_button}}" >
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">button url   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="button_url " value = "{{$data->ban_url}}" >
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">upload file or image <span class="text-danger"> * </span></label>
          <div class="float-right rounded-4">
          @if($data->ban_image!='')
            <img height="150px" width="auto" src="{{asset('uploads/'.$data->ban_image)}}"/>
          @else
            <img height="30px" width="80px"  src="{{asset('uploads/avatar.jpg')}}"/>
          @endif
          <input type="file" class="form-control"   name="pic" value = "">
        </div> 
          </div>
        <!--  group  end here  -->
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
        </div>
      </div>
      <!-- col end  -->
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>



@endsection