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
                      <a href="{{url('dashboard/website/home/HomeDonar/recycle')}}" style="color:red; font-size:25px;background:#fff;padding:2px;border-radius:8px"><span><i class="bi bi-trash3"></i></span></a>
                      <button><a  href="{{url('dashboard/website/home/HomeDonar/add')}}">Add Information</a></button>
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
                                                <th>Heading</th>
                                                <th>Title</th>
                                                <th>Caption</th>
                                                <th>Sub Title  </th>
                                                <th>Information </th>
                                                <th>button </th>
                                                <th>Creator</th>
                                                <th>image</th>
                                                <th>BG image</th>
                                                <th>Manages</th>
                                            </tr>
                                        </thead>
                                        <tbody class="p-2">
                                          @foreach($all as $data)
                                            <tr>
                                                <th>{{$data->HEvent_id}}</th>
                                                <th>{{$data->heading}}</th>
                                                <td>{{$data->title}}</td>
                                                <td>{!!Str::words($data->caption,10)!!}</td>
                                                <td>{{$data->subtitle}}</td>
                                                <td>{!!Str::words($data->info,10)!!}</td>
                                                <td>{{$data->button}}</td>
                                                <td>{{$data->creatorinfo->id}}</td>
                                                <td>
                                                @if($data->image!='')
                                                  <img height="30px" width="80px" src="{{asset('uploads/'.$data->image)}}"/>
                                                @else
                                                  <img height="30px" width="80px"  src="{{asset('uploads/avatar.jpg')}}"/>
                                                @endif
                                                </td>
                                                <!-- bg image  -->
                                                <td>
                                                @if($data->bgimage!='')
                                                  <img height="30px" width="80px" src="{{asset('uploads/'.$data->bgimage)}}"/>
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
                                                      <a class="nav-link " href="{{url('dashboard/website/home/HomeDonar/view/'.$data->slug)}}">view</a>
                                                  </li>
                                                    <li class="nav-item" style="font-size:16px;text-transform:capitalize;padding:10px 8px;border-bottom:1px solid #000;">
                                                      <a class="nav-link" href="{{url('dashboard/website/home/HomeDonar/edit/'.$data->slug)}}" >Edit</a>
                                                  </li>
                                                    <li class="nav-item" style="font-size:16px;text-transform:capitalize;padding:10px 8px;border-bottom:1px solid #000;">
                                                        <a class="nav-link" onclick="return confirm('Are Your Deleted this Information')" href="{{url('dashboard/website/home/HomeDonar/softdelete/'.$data->HEvent_id)}}" >Delete</a>
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
