<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Leaders</title>
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
        scrollY: '300px',
        scrollCollapse: true,
          
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
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">LEADERS INFORMATION</h5>
                    
                </div>
                <div class="modal-body">

                 <form action="leaderadd" method="post" enctype="multipart/form-data">
                  @csrf
                   <div class="mb-3">
                      <label for="pic" style="margin-right: 350px;font-weight: bold;">Insert Picture </label>
                      <input type="file" class="form-control-file" id="pic" name="picture"   required>
                    </div>
                    <div class="mb-3">
                      <label for="head" class="form-label"  style="margin-right: 380px;font-weight: bold;">Header</label>
                      <input type="text" class="form-control" name="header" placeholder="Input Header Here..." id="head" required>
                    </div>
                    <div class="mb-3">
                      <label for="title" class="form-label" style="margin-right: 320px;font-weight: bold;">Description Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Type Here..." required>
                    </div>
                    <div class="mb-3">
                      <label for="des" class="form-label" style="margin-right: 350px;font-weight: bold;">Description</label>
                      <input type="text" class="form-control" id="des" name="description" placeholder="Type Here..." required>
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
        <table id="tablegg" class="display" style="width:50%; background-color:#CFFF47;">
            <thead>
            <tr>
                <th class="text-center">Picture of the Official</th>
                <th class="text-center">Name</th>
                <th class="text-center">Title</th>
                <th class="text-center">Description</th>
                <th class="text-center">Action/s</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($table as $table)
                    <tr>
                        <td><img src="./salcedo/img/leader/{{$table->pictureleader}}" width="100px" height="100px" /></td>
                        <td>{{$table->headerleader}}</td>
                        <td>{{$table->titleleader}}</td>
                        <td>{{$table->descriptiontitle}}</td>
                          <td ><a href="" data-toggle="modal" data-target="#editleader{{$table->id}}"><i class="bi bi-pencil-square bi-lg" aria-hidden="true" style="color: green"></i></a> / <a href="delleader/{{ $table->id}}"><i class="bi bi-trash3 bi-lg" aria-hidden="true" style="color: red"></i></a></td>
                        @endforeach
                    </tr>
                   @include('editleaders')
            </tbody>
        </table>
    </div></div><br>

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