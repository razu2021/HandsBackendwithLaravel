@extends('layouts.admin')
@section('content')
@if(Session::has('success_soft'))
  <script>
    swal({ title: "Success!", text: "Successful", icon: "success", timer:5000});
  </script>
@endif
@if(Session::has('error_soft'))
  <script>
    swal({ title: "Opps!", text: "Banner information delete failed!", icon: "warning", timer:5000});
  </script>
@endif

<div class="static-table-area  mg-t-15">
            <div class="container-fluid">
                <div class="row ">
                  <div class="col-lg-10">
                    <h1 class="text-capitalize fw-bold text-white  p-4 " id="table_title" > Table Information </h1>
                  </div>
                  <div class="col-lg-2 justify-content-right float-right">
                    <div class="button " id="add_catagory">
                      <button><a  href="{{url('dashboard/website/BecomeVolunteer/BcomeVolunteer')}}">all information </a></button>
                    </div>
                  </div>
                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="bg-white shadow-2-strong rounded-4" style="background:#fff;padding-top:10px ;padding-bottom:10px; border: radius 30px; ">
                            <div class="sparkline8-hd ">
                                <div class="main-sparkline8-hd">
                                    
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list ">
                                    <table class="table bg-white  table-striped  ">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone</th>
                                                <th>Email </th>
                                                <th>gender </th>
                                                <th>address </th>
                                                <th>Manages</th>
                                            </tr>
                                        </thead>
                                        <tbody class="p-2">
                                          @foreach($all as $data)
                                                <tr>
                                                <th>{{$data->fname}}</th>
                                                <th>{{$data->lname}}</th>
                                                <td>{{$data->phone}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->gender}}</td>
                                                <td>{!!Str::words($data->address,10)!!}</td>
                                                <td>
                                                @if($data->image!='')
                                                  <img height="30px" width="80px" src="{{asset('uploads/'.$data->image)}}"/>
                                                @else
                                                  <img height="30px" width="80px"  src="{{asset('uploads/avatar.jpg')}}"/>
                                                @endif
                                                </td>
                                                <td>
                                                <div class="dropdown">
                                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Dropdown button <span> <i class="bi bi-caret-down-fill"></i></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">                       
                                                  <ul>
                                                    <li class="nav-item" style="font-size:16px;text-transform:capitalize;padding:10px 8px;border-bottom:1px solid #000;">
                                                        <a class="nav-link" onclick="return confirm('Are Your Restore  this Information Right Now ! ')" href="{{url('dashboard/website/BecomeVolunteer/BcomeVolunteer/restore/'.$data->HEvent_id)}}" >restore</a>
                                                  </li>
                                                    <li class="nav-item" style="font-size:16px;text-transform:capitalize;padding:10px 8px;border-bottom:1px solid #000;">
                                                        <a class="nav-link" onclick="return confirm('Are Your Delete  this Information Right Now ! ')" href="{{url('dashboard/website/BecomeVolunteer/BcomeVolunteer/delete/'.$data->HEvent_id)}}" >Delete</a>
                                                  </li>
                                                  </ul>
                                                </div>
                                              </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
@endsection
