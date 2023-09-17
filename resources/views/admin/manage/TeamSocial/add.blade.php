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
        <h1 class="text-capitalize fw-bold text-white  p-4 " id="table_title" > Add   Information </h1>
      </div>
      <div class="col-lg-3 justify-content-right float-right">
        <div class="button " id="add_catagory">
          <button><a  href="{{url('dashboard/website/manage/TeamSocial')}}">all  information </a></button>
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
        <form action="{{url('dashboard/website/manage/TeamSocial/submit')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- start  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Add facebook   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"   name="facebook" value = "">
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Add twitter   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="twitter" value = "">
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Add linkedin   <span class="text-danger"> * </span></label>
          <textarea  class="form-control" id="editor" col="10" row="50" name="linkedin" ></textarea>
        </div> 
        <!--  group  end here  -->
        <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Add instagram   <span class="text-danger"> * </span></label>
          <input type="text" class="form-control"  name="instagram" value = "" placeholder="Donner name ">
        </div> 
        <!--  group  end here  -->
          <div class="form-group">
          <label id="label_content" for="exampleInputEmail1">Add youtube   <span class="text-danger"> * </span></label>
          <textarea  class="form-control" id="editor2" col="10" row="50" name="youtube" ></textarea>
        </div> 
        <!--  group  end here  -->
        <button style="padding:15px 15px" type="submit" class="btn btn-success">Upload your Information </button>
      </form>
        </div>
      </div>
      <!-- col end  -->
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>




@endsection
