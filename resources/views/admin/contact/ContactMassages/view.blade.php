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
          <button><a  href="{{url('dashboard/website/contact/ContactMassage')}}">all  information </a></button>
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
            <td>first Name  </td>
            <td>:</td>
            <td>{{$data->name}} </td>
          </tr>

          <tr>
            <td>Phone Number  </td>
            <td>:</td>
            <td>{{$data->phone}}</td>
          </tr>

          <tr>
            <td>Email    </td>
            <td>:</td>
            <td>{{$data->email}}</td>
          </tr>

            <td> Massages :</td>
            <td>:</td>
            <td>{{$data->massage}}  </td>
          </tr>

        </tbody>
      </table>
      <div class="col-lg-1"></div>
    </div>
  </div>
</section>

@endsection

