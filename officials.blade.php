<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Officials</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script>
      $(document).ready(function () {
    $('#tablegg').DataTable({
        scrollX: '300px',
          
    });
});

    </script>
</head>
<body>
<div >
   <nav class="navbar navbar-expand-lg navbar-light " style="box-shadow: 0px 3px 4px 0px gray">
  <a class="navbar-brand" href="#"> <h3 style="font-weight: bold;padding: 3px;margin-left: 20px"> <img src="salcedo/img/logo.png" style="width:60px;height:60px;"> Barangay Salcedo Content Management System</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 22%">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="adminH"><h5>Home</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="leaders"> <h5>Leaders</h5> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="officials"> <h5>Officials</h5> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news"> <h5>News</h5> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="stat"> <h5>Statistics</h5> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutAdminSalcedo"> <h5>About</h5> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logoutSalcedo"> <h5>Log Out</h5> </a>
      </li>
    </ul>
  </div>
</nav><br>
</div>

 <h2  style="font-size: 40px;margin-left: 20px">
           
          Welcome Admin</h2>

        <div class="text-center" style="margin-left: 1150px">       
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#addmodal">&nbsp&nbsp Add + &nbsp&nbsp</button>

          <!-- Modal -->
          <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">ADD OFFICIALS INFORMATION</h5>
                    
                </div>
                <div class="modal-body">

                 <form action="officialadd" method="post" enctype="multipart/form-data">
                  @csrf 
                  <div class="mb-3">
                      <label for="2" style="margin-right: 350px;font-weight: bold;"> Captain </label>
                      <input type="file" class="form-control-file" id="2" Name="captain" required>
                    </div>
                    <div class="mb-3">
                      <label for="2n" style="margin-right: 350px;font-weight: bold;"> Councilor Name </label>
                      <input type="text" class="form-control" id="2n" Name="captainname" required>
                    </div>
                   <div class="mb-3">
                      <label for="2" style="margin-right: 350px;font-weight: bold;"> Councilor1 </label>
                      <input type="file" class="form-control-file" id="2" Name="coun1" required>
                    </div>
                    <div class="mb-3">
                      <label for="2n" style="margin-right: 350px;font-weight: bold;"> Councilor Name </label>
                      <input type="text" class="form-control" id="2n" Name="name1" required>
                    </div>
                    <div class="mb-3">
                      <label for="2" style="margin-right: 350px;font-weight: bold;"> Councilor2 </label>
                      <input type="file" class="form-control-file" id="2" Name="coun2" required>
                    </div>
                    <div class="mb-3">
                      <label for="2n" style="margin-right: 350px;font-weight: bold;"> Councilor Name </label>
                      <input type="text" class="form-control" id="2n" Name="name2" required>
                    </div>
                    <div class="mb-3">
                      <label for="3" style="margin-right: 350px;font-weight: bold;"> Councilor3 </label>
                      <input type="file" class="form-control-file" id="3" Name="coun3" required>
                    </div>
                    <div class="mb-3n">
                      <label for="3" style="margin-right: 350px;font-weight: bold;"> Councilor3 Name</label>
                      <input type="text" class="form-control" id="3n" Name="name3" required>
                    </div>
                    <div class="mb-3">
                      <label for="4" style="margin-right: 350px;font-weight: bold;"> Councilor4 </label>
                      <input type="file" class="form-control-file" id="4" Name="coun4" required>
                    </div>
                    <div class="mb-3">
                      <label for="4n" style="margin-right: 350px;font-weight: bold;"> Councilor4 Name</label>
                      <input type="text" class="form-control" id="4n" Name="name4" required>
                    </div>
                    <div class="mb-3">
                      <label for="5" style="margin-right: 350px;font-weight: bold;"> Councilor5</label>
                      <input type="file" class="form-control-file" id="5" Name="coun5" required>
                    </div>
                     <div class="mb-3">
                      <label for="5n" style="margin-right: 350px;font-weight: bold;"> Councilor5 Name</label>
                      <input type="text" class="form-control" id="5n" Name="name5" required>
                    </div>
                    <div class="mb-3">
                      <label for="6" style="margin-right: 350px;font-weight: bold;"> Councilor6</label>
                      <input type="file" class="form-control-file" id="6" Name="coun6" required>
                    </div>
                    <div class="mb-3">
                      <label for="6n" style="margin-right: 350px;font-weight: bold;"> Councilor6 Name</label>
                      <input type="text" class="form-control" id="6n" Name="name6" required>
                    </div>
                    <div class="mb-3">
                      <label for="7" style="margin-right: 350px;font-weight: bold;"> Councilor7</label>
                      <input type="file" class="form-control-file" id="7" Name="coun7" required>
                    </div> <div class="mb-3">
                      <label for="7n" style="margin-right: 350px;font-weight: bold;"> Councilor7 Name</label>
                      <input type="text" class="form-control" id="7n" Name="name7" required>
                    </div>
                    <div class="mb-3">
                      <label for="sk" style="margin-right: 350px;font-weight: bold;">SK CHAIRMAN </label>
                      <input type="file" class="form-control-file" id="sk" Name="sk" required>
                    </div>
                    <div class="mb-3">
                      <label for="skn" style="margin-right: 350px;font-weight: bold;">SK CHAIRMAN Name</label>
                      <input type="text" class="form-control" id="skn" Name="skname" required>
                    </div>
                    <div class="mb-3">
                      <label for="tres" style="margin-right: 350px;font-weight: bold;">TREASURER </label>
                      <input type="file" class="form-control-file" id="tres" Name="treasurer" required>
                    </div>
                    <div class="mb-3">
                      <label for="tn" style="margin-right: 350px;font-weight: bold;">TREASURER Name</label>
                      <input type="text" class="form-control" id="tn" Name="treasname" required>
                    </div>
                    <div class="mb-3">
                      <label for="sec" style="margin-right: 350px;font-weight: bold;">SECRETARY</label>
                      <input type="file" class="form-control-file" id="sec" Name="secretary" required>
                    </div>
                    <div class="mb-3">
                      <label for="secn" style="margin-right: 350px;font-weight: bold;">SECRETARY Name</label>
                      <input type="text" class="form-control" id="secn" Name="secname" required>
                    </div>

                   
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-dark">Save</button>
                </div></form>
              </div>
            </div>
          </div>
        </div>  
<div class="container" style="margin-top: 20px"> 

    <div class="row" >
        <table id="tablegg" class="display" style="background-color:#CFFF47;">
            <thead>
            <tr>
              
                 <th class="text-center">Brgy Captain Name</th>
                <th class="text-center">1. Brgy  Councilor</th>
                <th class="text-center">2. Brgy  Councilor</th>
                 <th class="text-center">3. Brgy  Councilor</th>
                <th class="text-center">4. Brgy  Councilor</th>
                <th class="text-center">5. Brgy  Councilor</th>
                 <th class="text-center">6. Brgy  Councilor</th>
                <th class="text-center">7. Brgy  Councilor</th>
                <th class="text-center">SK Chairman </th>
                <th class="text-center">Treasurer </th>
                <th class="text-center">Secretary </th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
                 @foreach ($table as $table)
                    <tr>
                        
                        <td><center>{{$table->captainname}} </center><br> <img src="./salcedo/img/officials/{{$table->captain}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->name1}}</center><br> <img src="./salcedo/img/officials/{{$table->coun1}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->name2}}</center><br> <img src="./salcedo/img/officials/{{$table->coun2}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->name3}}</center><br> <img src="./salcedo/img/officials/{{$table->coun3}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->name4}}</center><br> <img src="./salcedo/img/officials/{{$table->coun4}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->name5}}</center><br> <img src="./salcedo/img/officials/{{$table->coun5}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->name6}}</center><br> <img src="./salcedo/img/officials/{{$table->coun6}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->name7}}</center><br> <img src="./salcedo/img/officials/{{$table->coun7}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->skname}}</center><br> <img src="./salcedo/img/officials/{{$table->sk}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->treasname}}</center><br> <img src="./salcedo/img/officials/{{$table->treasurer}}" width="200px" height="200px" /></td>
                        <td><center>{{$table->secname}}</center><br> <img src="./salcedo/img/officials/{{$table->secretary}}" width="200px" height="200px" /></td>
                          <td > <a href="delofficial/{{ $table->id}}"><i class="bi bi-trash3 bi-lg" aria-hidden="true" style="color: red"></i></a></td>
                        @endforeach
                    </tr>
            </tbody>
        </table>
    </div>

    
  </div>   
<div style="margin-top: 120px"></div>
</body>
<footer style="background-color:#CFFF47;"class="fixed-bottom">
    <div class="container">
        <div class="text-center p-2" >
          <img src="http://tarlacfirst.com/wp-content/uploads/san-manuel.png" height="50px"><h4 style="font-size: 13px;font-weight: bold;">© 2022 Copyright Barangay Salcedo</h4>
        </div>
    </div>
</footer>
</html>
<style type="text/css">
  a:hover.nav-link{
  background-color: #CFFF47;
  border-radius: 10px;
}
</style>