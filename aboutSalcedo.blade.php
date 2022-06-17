<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Salcedo</title>
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
    <script>
        $(document).ready(function() {
            $('#tablegg').DataTable();
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
</nav>
</div>
  <div style="height: 500px; background-image:   linear-gradient(
      rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url(salcedo/img/about/<?php echo $table[0]->picture?>);background-size: cover;background-position: center; background-repeat: no-repeat;"><br>
      <center >
        <div style="margin-top: 100px;"></div>
          <h1 style="color: whitesmoke;font-weight: bolder;font-size: 70px; text-shadow: -2px 2px #CFFF47;"><?php echo $table[0]->head?></h1>
          <hr class="w3-border-grey" style="margin:auto;width:40%">
          <p style="color:white;font-weight: bold; padding:50px;font-size: 24px;width:1500px;text-align: justify;text-justify: inter-word;"><?php echo $table[0]->body?></p>
      </center>
  </div>
      <div class="container" style="margin-top:100px;">
       <center>
             <div class="row align-items-center">
            <div class="col" style="margin-right: 100px;box-shadow: -10px 10px 5px 5px #CFFF47;border-radius: 15px">
              <h2 style="text-shadow: -2px 2px #CFFF47;"><b><?php echo $table[0]->t1?></b></h2><br><br>
              <p style=" text-align: justify;text-justify: inter-word;"><?php echo $table[0]->d1?> </p>
            </div>
            <div class="col"  style="margin-right: 100px;box-shadow: -0px 10px 0px 0px #CFFF47;border-radius: 0px">
                <h2 style="text-shadow: -2px 2px #CFFF47;"><b><?php echo $table[0]->t2?></b></h2><br><br>
              <p style=" text-align: justify;text-justify: inter-word;"><?php echo $table[0]->d2?></p>
            </div>
            <div class="col" style="box-shadow: 10px 10px 5px 5px #CFFF47;border-radius: 15px">
                <h2 style="text-shadow: -2px 2px #CFFF47;"><b><?php echo $table[0]->t3?></b></h2><br><br>
              <p style=" text-align: justify;text-justify: inter-word;"><?php echo $table[0]->d3?></p>
            </div>
          </div>
       </center>
      </div>
      <br><br><br>
</body>
  <footer class="foot">
            <div class="container">
                <div class="row">
                    <div class="foot-col">
                        <h4>Contact Us</h4>
                        <ul>
                            <li class="mail"><a href=""> Brgy. Salcedo, San Manuel, Tarlac </a></li>
                            <li class="mail"><a href=""> salcedosanmanuel@gmail.com </a></li>
                            <li><a href="">+63910-356-7876 | +63945-678-5675</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cr">&copy 2022 Barangay Salcedo | All Rights Reserved</div>
        </footer>
</html>
<style type="text/css">
  a:hover.nav-link{
  background-color: #CFFF47;
  border-radius: 10px;
}

.foot {
    background-color: #CFFF47;
    font-family: 'Montserrat', sans-serif;
    font-weight: lighter;
    color: black;
    padding: 50px 0;
    display: block;
    text-align: center;
}
.foot ul{
    list-style: none;
}
.foot-col h4{
    font-size: 25px;
    color: black;
    text-transform: capitalize;
    margin-bottom: 10px;
    position: relative;
}
.foot-col ul li a{
    font-size: 15px;
    text-transform: capitalize;
    text-decoration: none;
    color: gray;
    font-family: sans-serif;
    letter-spacing: 1px;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
    transition: all 0.3s ease;
}
.foot-col ul li a:hover{
    color: black;
    padding-left: 10px;
}
.foot .cr{
    text-align: center;
    padding: 2vh 0 0;
    color: black;
    font-family: sans-serif;
}
</style>
