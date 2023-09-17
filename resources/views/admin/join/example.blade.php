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
        <h1>Retrieving All Rows From A Table</h1>
                <div class="col-lg-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">name</th>
                        <th scope="col">Father name</th>
                        <th scope="col">Mother Name </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($stu as $data)
                        <tr>
                        <th scope="row">{{$data->Student_id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->father_name}}</td>
                        <td>{{$data->mother_name}}</td>
                        </tr>
                     @endforeach
                    </tbody>
                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->

        <h1>Retrieving A Single Row / Column From A Table</h1>
                <div class="col-lg-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">name</th>
                        <th scope="col">Father name</th>
                        <th scope="col">Mother Name </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($users)
                        <tr>
                        <td>{{$users->Student_id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->father_name}}</td>
                        <td> {{$users->mother_name}}</td>
                        </tr>
                     @endif
                  
                    
                    </tbody>
                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->

        <p>If you don't need an entire row, you may extract a single value from a record using the value method. This method will return the value of the column directly:</p>
                <h6>show a single value form a row </h6>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($singlevalue)
                        <tr>
                        <td>{{$singlevalue}}</td>
                        </tr>
                    @endif
                    </tbody>
                    </table>
                </div>
<!-- =========================       col end here  ========================================================--> 
    <h6>To retrieve a single row by its id column value, use the find method: and get method also here </h6>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">name</th>
                        <th scope="col">Father name</th>
                        <th scope="col">Mother Name </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($all)
                        <tr>
                        <td>{{$all->id}}</td>
                        <td>{{$all->name}}</td>
                        <td>{{$all->email}}</td>
                        <td>{{$all->password}}</td>
                        </tr>
                     @endif
                    </tbody><br>
                    <tbody>
                    @foreach($studentdata as $data)
                        <tr>
                        <td>{{$data->Student_id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->father_name}}</td>
                        <td>{{$data->mother_name}}</td>
                        </tr>
                     @endforeach
                    </tbody>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
    <h2>Retrieving A List Of Column Values ||  how to show specific all clumn data form a table  <span class="text-danger"> use plcak method</span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pluckuse as $name)
                        <tr>
                        <td>{{$name}}</td>
                        </tr>
                    @endforeach
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
    <h2>Aggregates  <span class="text-danger"> Aggregates || MAX Value or Price </span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($usercount)
                        <tr>
                        <td>{{$usercount}}</td>
                        </tr>
                    @endif
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
<h2>Aggregates  <span class="text-danger"> Aggregates || MAX Value or Price </span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">Max Price </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($max)
                        <tr>
                        <td>{{$max}}</td>
                        </tr>
                    @endif
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
<h2>Aggregates  <span class="text-danger"> Aggregates || MIN Value or Price </span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">Max Price </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($max)
                        <tr>
                        <td>{{$min}}</td>
                        </tr>
                    @endif
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
<h2>Select method   <span class="text-danger"> Seletct || use select method</span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">name  </th>
                        <th scope="col">father name   </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($selectusers as $data)
                        <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->father}}</td>
                        </tr>
                    @endforeach
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
<h2>Select method   <span class="text-danger"> distinct || use distinct method</span> </h2>
<p>Distinct method holo table er duplicate value gulo remove kore onno value gulo fetch korbe </p>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">name  </th>
                        <th scope="col"> email   </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($distancusers as $data)
                        <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        </tr>
                    @endforeach
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
<h2>Select method   <span class="text-danger"> addSelect || use addSelect method</span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">name  </th>
                        <th scope="col"> email   </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($addselect as $data)
                        <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        </tr>
                    @endforeach
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
<br>
<br>
<br>
<hr>
<hr><hr>
<!-- =========================       col end here  ========================================================-->
<h2>Joion <span class="text-danger"> addSelect || Database query builders INNER JOIN </span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">user Id   </th>
                        <th scope="col">User name</th>
                        <th scope="col"> User Email</th>
                        <th scope="col"> Product name </th>
                        <th scope="col"> Product prices </th>
                        <th scope="col"> Contact Numbers</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($userproduct as $data)
                        <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->product_name}}</td>
                        <td>{{$data->product_price}}</td>
                        <td>{{$data->contact_number}}</td>
                        </tr>
                    @endforeach
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
<h2>Joion <span class="text-danger"> Left Join  || Database query builders Left join JOIN </span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">user Id   </th>
                        <th scope="col">User name</th>
                        <th scope="col"> User Email</th>
                        <th scope="col"> Product name </th>
                        <th scope="col"> Product prices </th>
                        <th scope="col"> Contact Numbers</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($lefjoin as $data)
                        <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->product_name}}</td>
                        <td>{{$data->product_price}}</td>
                        <td>{{$data->contact_number}}</td>
                        </tr>
                    @endforeach
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
<h2>Joion <span class="text-danger"> right Join  || Database query builders right join JOIN </span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">user Id   </th>
                        <th scope="col">User name</th>
                        <th scope="col"> User Email</th>
                        <th scope="col"> Product name </th>
                        <th scope="col"> Product prices </th>
                        <th scope="col"> Contact Numbers</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($rightjoin as $data)
                        <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->product_name}}</td>
                        <td>{{$data->product_price}}</td>
                        <td>{{$data->contact_number}}</td>
                        </tr>
                    @endforeach
                    </tbody><br>

                    </table>
                </div>
                <hr>
                <hr>
                <hr>
<!-- =========================       col end here  ========================================================-->
<h2>where <span class="text-danger"> Basic Where Class || Database query builders Wherer class use  </span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">user Id   </th>
                        <th scope="col">User name</th>
                        <th scope="col"> User Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($where as $data)
                        <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        </tr>
                    @endforeach
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->
<h2>orwhere <span class="text-danger"> Basic Where Class || Database query builders Wherer class and orWherer class use  </span> </h2>
        <div class="col-lg-12">
                <table class="table table-dark table-striped">
                <thead>
                        <tr>
                        <th scope="col">user Id   </th>
                        <th scope="col">User name</th>
                        <th scope="col"> User Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($orwhere as $data)
                        <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        </tr>
                    @endforeach
                    </tbody><br>

                    </table>
                </div>
<!-- =========================       col end here  ========================================================-->






            </div>
        </div>
    </section> 
    






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  </body>
</html>





