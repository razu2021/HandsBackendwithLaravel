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
            <h1>student join table </h1>
                <div class="col-lg-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">name</th>
                        <th scope="col">Father name</th>
                        <th scope="col">Mother Name </th>
                        <th scope="col">Manage </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $data)
                        <tr>
                        <th scope="row">{{$data->Student_id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->father_name}}</td>
                        <td>{{$data->mother_name}}</td>
                        <td><a href="{{url('join/profile/manage/view/'.$data->Student_id)}}">view</a></td>

                        </tr>
                       
                        @endforeach
                    
                    
                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section> 






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  </body>
</html>





