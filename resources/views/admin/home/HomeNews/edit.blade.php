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
          <button><a  href="{{url('dashboard/website/home/HomeNews')}}">All   information </a></button>
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
        <form  action="{{url('dashboard/website/home/HomeNews/update')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- start  -->
        <div class="form-group">
        <input type="hidden" class="form-control"   name="id" value = "{{$data->HEvent_id}}">
        <input type="hidden" class="form-control"   name="slug" value = "{{$data->slug}}">
          <label id="label_content" for="exampleInputEmail1">Heading  <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="heading" value = "{{$data->heading}}">
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Title  <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="title" value = "{{$data->title}}">
        </div> 
        <!--group  end here -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Caption  <span class="text-danger"> * </span></label>
          <textarea  class="form-control"  id="editor" col="10" row="50" name="caption" value="{{$data->caption}}">{{$data->caption}}</textarea>
        </div> 
         <!--  group  end here  -->
          <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Sub Title   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="subtitle" value = "{{$data->subtitle}}">
        </div> 

        <!--group  end here -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1"> information   <span class="text-danger">  * </span></label>
          <textarea  class="form-control"  id="editor2" col="10" row="50" name="info" value="{{$data->info}}">{{$data->info}}</textarea>
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1"> Button   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="button" value = "{{$data->button}}" >
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">button url   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="button_url" value = "{{$data->button_url}}" >
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">upload file or image <span class="text-danger"> * </span></label>
          <div class="float-right rounded-4">
          @if($data->image!='')
            <img height="150px" width="auto" src="{{asset('uploads/'.$data->image)}}"/>
          @else
            <img height="30px" width="80px"  src="{{asset('uploads/avatar.jpg')}}"/>
          @endif
          <input type="file" class="form-control"   name="pic" value = "">
         </div> 

        </div>

        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">upload file or BG image <span class="text-danger"> * </span></label>
          <div class="float-right rounded-4">
          @if($data->bgimage!='')
            <img height="150px" width="auto" src="{{asset('uploads/'.$data->bgimage)}}"/>
          @else
            <img height="30px" width="80px"  src="{{asset('uploads/avatar.jpg')}}"/>
          @endif
          <input type="file" class="form-control"   name="bgimage" value = "">
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