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
        <h1 class="text-capitalize fw-bold text-white  p-4 " id="table_title" > View  Banner  Information </h1>
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
  <div class="container " style="background:#fff;padding:20px  0px">
    <div class="row">
      <!-- col end  -->
      <div class="col-lg-10 ">
            <table class="table table-border custom_view_table ">
      
        <tbody>
          <tr>
            <td>banner title </td>
            <td>:</td>
            <td>{{$data->ban_title}} </td>
          </tr>
          <tr>
            <td>banner Subtitle </td>
            <td>:</td>
            <td>{{$data->ban_subtitle}} </td>
          </tr>
          <tr>
            <td>banner information  </td>
            <td>:</td>
            <td>{!! $data->ban_information !!}</td>
          </tr>

          <tr>
            <td>banner Button </td>
            <td>:</td>
            <td> {{$data->ban_button}}</td>
          </tr>

          <tr>
            <td>Button url  </td>
            <td>:</td>
            <td>{{$data->ban_url}}  </td>
          </tr>
         
          <tr>
            <td>banner image  </td>
            <td>:</td>
            <td>
            @if($data->ban_image!='')
              <img height="200px" width="auto" src="{{asset('uploads/'.$data->ban_image)}}"/>
            @else
              <img height="80px" width="auto"  src="{{asset('uploads/avatar.jpg')}}"/>
            @endif
          </td>
          </tr>

          <tr>
            <td>banner creator  </td>
            <td>:</td>
            <td>Banner crator   </td>
          </tr>
          <tr>
            <td>banner editor </td>
            <td>:</td>
            <td>Banner editor  </td>
          </tr>

          <tr>
            <td>updated at  </td>
            <td>:</td>
            <td>10-12-2023 | 12:00 PM </td>
          </tr>

        </tbody>
      </table>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>

@endsection
