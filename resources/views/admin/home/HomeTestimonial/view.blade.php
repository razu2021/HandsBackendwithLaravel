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
        <h1 class="text-capitalize fw-bold text-white  p-4 " id="table_title" > View  All  Information </h1>
      </div>
      <div class="col-lg-3 justify-content-right float-right">
        <div class="button " id="add_catagory">
          <button><a  href="{{url('dashboard/website/home/HomeTestimonial')}}">all  information </a></button>
        </div>
      </div>
     <div class="col-lg-1"></div>
  </div>
  </div>
</section>
<br>
<section>
  <div class="container " style="background:#fff;padding:20px  0px">
    <div class="row">
      <!-- col end  -->
      <div class="col-lg-10 ">
            <table class="table table-border custom_view_table ">
      
        <tbody>
          <tr>
            <td>Heading  </td>
            <td>:</td>
            <td>{{$data->heading}} </td>
          </tr>
          <tr>
            <td> Title </td>
            <td>:</td>
            <td>{{$data->title}} </td>
          </tr>
          <tr>
            <td>Caption  </td>
            <td>:</td>
            <td>{!! $data->caption !!}</td>
          </tr>

          <tr>
            <td>Sub Title   </td>
            <td>:</td>
            <td>{!! $data->subtitle !!}</td>
          </tr>
          <tr>
            <td>Information   </td>
            <td>:</td>
            <td>{!! $data->info !!}</td>
          </tr>

          <tr>
            <td> Button </td>
            <td>:</td>
            <td> {{$data->button}}</td>
          </tr>

          <tr>
            <td>Button url  </td>
            <td>:</td>
            <td>{{$data->button_url}}  </td>
          </tr>
         
          <tr>
            <td> image  </td>
            <td>:</td>
            <td>
            @if($data->image!='')
              <img height="200px" width="auto" src="{{asset('uploads/'.$data->image)}}"/>
            @else
              <img height="80px" width="auto"  src="{{asset('uploads/avatar.jpg')}}"/>
            @endif
          </td>
          </tr>

          <tr>
            <td> BG image  </td>
            <td>:</td>
            <td>
            @if($data->bgimage!='')
              <img height="200px" width="auto" src="{{asset('uploads/'.$data->bgimage)}}"/>
            @else
              <img height="80px" width="auto"  src="{{asset('uploads/avatar.jpg')}}"/>
            @endif
          </td>
          </tr>

          <tr>
            <td>banner creator  </td>
            <td>:</td>
            <td>  {{$data->creatorinfo->name}} </td>
          </tr>
          <tr>
            <td>banner editor </td>
            <td>:</td>
            <td>             
               @if($data->editorInfo !="") 
               {{$data->editorInfo->name}}
               @endif 
            </td>
          </tr>

          <tr>
            <td>updated at  </td>
            <td>:</td>
            <td>{{$data->created_at->format('d-m-y | h:i:s A')}} </td>
          </tr>

        </tbody>
      </table>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>

@endsection
