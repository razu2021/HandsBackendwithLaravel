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
        <h1 class="text-capitalize fw-bold text-white  p-4 " id="table_title" > Add Banner Table Information </h1>
      </div>
      <div class="col-lg-3 justify-content-right float-right">
        <div class="button " id="add_catagory">
          <button><a  href="{{url('dashboard/website/home/banner')}}">all banner information </a></button>
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
        <div class="froms">
        <form action="{{url('dashboard/website/home/banner/submit')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- start  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Banner Title  <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="banner_title" value = "">
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Banner SubTitle  <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="banner_subtitle" value = "">
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Banner Information  <span class="text-danger"> * </span></label>
          <textarea  class="form-control" id="editor" col="10" row="50" name="banner_information" ></textarea>
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Banner Button   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="banner_button" value = "" >
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">button url   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="button_url" value = "" >
        </div> 
        <!--  group  end here  -->

        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">upload file or image    <span class="text-danger"> * </span></label>
          <input type="file" class="form-control"   name="pic" value = "" >
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
