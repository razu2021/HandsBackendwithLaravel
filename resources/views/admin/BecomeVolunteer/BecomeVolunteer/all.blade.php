@extends('layouts.admin')
@section('content')
@if(Session::has('success_soft'))
  <script>
    swal({ title: "Success!", text: "Successfully delete banner information!", icon: "success", timer:5000});
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
                    <h1 class="text-capitalize fw-bold text-white  p-4 " id="table_title" > Table  Information </h1>
                  </div>
                  <div class="col-lg-2 justify-content-right float-right">
                    
                    <div class="button " id="add_catagory">
                      <a href="{{url('dashboard/website/BecomeVolunteer/BcomeVolunteer/recycle')}}" style="color:red; font-size:25px;background:#fff;padding:2px;border-radius:8px"><span><i class="bi bi-trash3"></i></span></a>
                      <button><a  href="#">Add Information</a></button>
                    </div>
                  </div>

                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="bg-white shadow-2-strong rounded-4" style="background:#fff;padding-top:10px ;padding-bottom:10px; border: radius 30px;">
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
                                                <th> First Name</th>
                                                <th>Last Name </th>
                                                <th>Phone</th>
                                                <th>Email   </th>
                                                <th>Nid </th>
                                                <th>Riligion </th>
                                                <th>image</th>
                                                <th>Manages</th>
                                            </tr>
                                        </thead>
                                        <tbody class="p-2">
                                          @foreach($all as $data)
                                            <tr>
                                                <th>{{$data->HEvent_id}}</th>
                                                <th>{{$data->fname}}</th>
                                                <td>{{$data->lname}}</td>
                                                <td>{{$data->phone}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->nid}}</td>
                                                <td>{{$data->riligion}}</td>
                                                
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
                                                      <a class="nav-link " href="{{url('dashboard/website/BecomeVolunteer/BcomeVolunteer/view/'.$data->slug)}}">view</a>
                                                  </li>
                                              
                                                    <li class="nav-item" style="font-size:16px;text-transform:capitalize;padding:10px 8px;border-bottom:1px solid #000;">
                                                        <a class="nav-link" onclick="return confirm('Are Your Deleted this Information')" href="{{url('dashboard/website/BecomeVolunteer/BcomeVolunteer/softdelete/'.$data->HEvent_id)}}" >Delete</a>
                                                  </li>
                                                  </ul>
                                                </div>
                                              </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <!-- tr end here  -->
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
