<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body >

    <nav class="navbar navbar-expand-lg navbar-light " style="box-shadow: 0px 3px 4px 0px gray">
  <a class="navbar-brand" href="#"> <h3 style="font-weight: bold;padding: 3px;margin-left: 20px"> <img src="salcedo/img/logo.png" style="width:60px;height:60px;"> Barangay Salcedo Content Management System</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 22%">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home"><h4>Home</h4></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="uleader"> <h4>Leaders</h4> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="uofficials"> <h4>Officials</h4> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="unews"> <h4>News</h4> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ustat"> <h4>Statistics</h4> </a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="adminSalcedo"> <h4>| LOGIN</h4> </a>
      </li>
    </ul>
  </div>
</nav><br>

<div class="container">
  <center>
  <div class="float-child" >
    <div class="left"><h3 style="margin-top: 150px;font-size: 75px;font-weight: bold;margin-right: 150px">STATISTICS</h3></div>
    <img src="img/statsbg.png" height="200vh" style="margin-right: 180px">
  </div>
  
  <div class="float-child">
    <div class="right">
      <h3>Population</h3>
      <div  style="height: 50px;width: 300px;background-color:#CFFF47;color: black;border-radius: 25px;font-size: 24px;font-weight: bold;box-shadow: -8px 8px 5px 0px gray"><CENTER><?php echo $table[0]->population; ?></CENTER></div><br><br>
      <h3>Households</h3>
       <div  style="height: 50px;;box-shadow: -8px 8px 5px 0px gray;width: 300px;background-color:#CFFF47;color: black;border-radius: 25px;font-size: 24px;font-weight: bold;"><CENTER><?php echo $table[0]->household; ?></CENTER></div><br><br>
       <h3>Voters</h3>
        <div  style="height: 50px;;box-shadow: -8px 8px 5px 0px gray;width: 300px;background-color:#CFFF47;color: black;border-radius: 25px;font-size: 24px;font-weight: bold;"><CENTER><?php echo $table[0]->voter; ?></CENTER></div><br><br>
         <h3>Vaccinated</h3>
        <div  style="height: 50px;;box-shadow: -8px 8px 5px 0px gray;width: 300px;background-color:#CFFF47;color: black;border-radius: 25px;font-size: 24px;font-weight: bold;"><CENTER><?php echo $table[0]->vaccinated; ?></CENTER></div><br><br>
        </div>
  </div>
  
</center>
</div><div style="margin-bottom: 150px"></div>
<footer style="background-color:#CFFF47;opacity: 0.9"class="fixed-bottom">
    <div class="container">
        <div class="text-center p-2" >
          <img src="http://tarlacfirst.com/wp-content/uploads/san-manuel.png" height="50px"><h4 style="font-size: 13px;font-weight: bold;">© 2022 Copyright Barangay Salcedo</h4>
        </div>
    </div>
</footer>
</body>


</html>
<style type="text/css">
  a:hover.nav-link{
  background-color: #CFFF47;
  border-radius: 10px;
}

.float-child {
    width: 50%;
    float: left;
    padding: 10px;
}  
</style>