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

<div style="margin-top: 10px"></div>
	<section id="uofficials" class="d-flex align-items-center">
		 <div class="container">
      		  <h1 style="margin-bottom: 20px"><center>Barangay Officials</center></h1>
            <hr class="w3-border-grey" style="margin:auto;width:40%;margin-bottom: 80px">
<center>
<div class="row">
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->secretary?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->secretary?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->secname?></p><h4>Secretary</h4>
              </div>
            </a>
          </div>
  </div>
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->captain?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->captain?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->captainname?></p><h4>Brgy. Captain</h4>
              </div>
            </a>
          </div>
  </div>
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->treasurer?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->treasurer?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->treasname?></p><h4>Treasurer</h4>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->coun1?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->coun1?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->name1?></p><h4>Kagawad</h4>
              </div>
            </a>
          </div>
        </div>
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->coun2?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->coun2?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->name2?></p><h4>Kagawad</h4>
              </div>
            </a>
          </div>
  </div>
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->coun3?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->coun3?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->name3?></p><h4>Kagawad</h4>
              </div>
            </a>
          </div>
  </div>
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->coun4?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->coun4?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->name4?></p><h4>Kagawad</h4>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->coun5?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->coun5?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->name5?></p><h4>Kagawad</h4>
              </div>
            </a>
          </div>
        </div>
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->coun6?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->coun6?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->name6?></p><h4>Kagawad</h4>
              </div>
            </a>
          </div>
  </div>
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->coun7?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->coun7?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black;"><?php echo $table[0]->name7?></p><h4>Kagawad</h4>
              </div>
            </a>
          </div>
  </div>
  <div class="col">
    <div class="thumbnail">
            <a href="img/officials/<?php echo $table[0]->sk?>" style="text-decoration: none">
              <img src="img/officials/<?php echo $table[0]->sk?>" alt="Lights" style="width:50%;box-shadow: -10px 10px 5px 0px  #CFFF47;border-radius: 15px">
              <div class="caption">
                <p style="margin-top: 10px;font-size: 24px;color: black"><?php echo $table[0]->skname?></p><h4>SK Chairman</h4>
              </div>
            </a>
          </div>
        </div>

</div>
  
</center>
      <div class="data" style="margin-top: 50px">
     	 </div>
	</section>


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