<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Barangay Salcedo System</title>
    <!-- JavaScript Bundle with Popper -->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn2473KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 <link href="css/app.css" rel="stylesheet">
</head>
<body>
<div>
  <nav class="navbar navbar-expand-lg navbar-light " style="box-shadow: 0px 3px 4px 0px gray">
  <a class="navbar-brand" href="#"> <h3 style="font-weight: bold;padding: 3px;margin-left: 20px"> <img src="img/logo.png" style="width:60px;height:60px;"> Barangay Salcedo Content Management System</h3></a>
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
</div>
<div style="margin-top: 100px"></div>
<!--Section Start-->

	<section id="uhome" class="d-flex align-items-center">
      <div class="container" style="background-color:#CFFF47;border-radius: 50px;box-shadow: -10px 10px 5px 0px gray;">
        <h1 style="padding: 15px;margin-top: 10px"><?php echo $table[0]->headhome; ?> </h1>
          <div class="descrip" style="justify-content:center;margin-right: 20px">
             <img src="salcedo/img/<?php echo $table[0]->logo; ?>" align="right" style="size: 36px">
          <p style="font-size: 24px;padding: 40px; text-align: justify;text-justify: inter-word;margin-right: 250px">&nbsp&nbsp&nbsp <?php echo $table[0]->descriptionhome; ?></p>
          <div class="text-left" style="margin-left: 24px;padding: 10px;">
             <button type="button" class="btn btn-dark" style="width: 200px" > <a href="aboutSalcedo" style="color: white;text-decoration: none">Learn More</a> </button><br><br>
        </div>
        </div>
     	 </div>
	</section>
<div style="margin-top: 150px"></div>

<br><br>
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