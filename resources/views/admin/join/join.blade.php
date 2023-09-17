<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
   
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
        </div>
    </div>
</div>

<section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center pt-5">
                    <div class="hed">
                    @if(!$student->isEmpty())
                        <h1>Student Information Table</h1>
                    @else
                        <h1 class="text-danger">Student Data is not Available in this time!</h1>
                    @endif
                    </div>
                </div>
            <hr>
            
            @if(!$student->isEmpty())
                <div class="col-lg-12">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Mother Name</th>
                                <th scope="col">Class Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student as $data)
                                <tr>
                                    <th scope="row">{{$data->student_id}}</th>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->father_name}}</td>
                                    <td>{{$data->mother_name}}</td>
                                    <td>{{$data->class}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

                <!--  col end  -->

              @if(!$student->isEmpty())
                <div class="col-lg-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Subject Name </th>
                        <th scope="col"> Subjects code</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($student as $data)
                        <tr>
                        <td>{{$data->Subject_id}}</td>
                        <td>{{$data->subject_name}}</td>
                        <td>{{$data->subject_code}}</td>
                        
                        
                        </tr>
                       
                        @endforeach
                    
                    
                    </tbody>
                    </table>

                </div>
                @endif
                <!--  col end  -->
                @if(!$student->isEmpty())
                <div class="col-lg-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">role </th>
                        <th scope="col"> registration</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($student as $data)
                        <tr>
                        <td>{{$data->Role_id}}</td>
                        <td>{{$data->role}}</td>
                        <td>{{$data->registration}}</td>
                        
                        
                        </tr>
                       
                        @endforeach
                    
                    
                    </tbody>
                    </table>

                </div>
                @endif
                <!--  col end  -->



            </div>
        </div>
    </section> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  </body>
</html>





