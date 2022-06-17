<!DOCTYPE html>
<html>
<head>
<title>Salcedo CMS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
   background-image:   linear-gradient(
      rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url(salcedo/img/salcedo.gif);
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body >
  <div style="text-align: right;"> <button type="button" class="btn btn-light btn-lg" data-toggle="modal" data-target="#addmodal">&nbsp&nbsp <b>Contact Us</b> &nbsp&nbsp</button>
</div>
          <!-- Modal -->
          <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #CFFF47">
                  <h5 class="modal-title" id="exampleModalLongTitle">CONTACT US</h5>
                    
                </div>
                <div class="modal-body">

                 <form >
                  @csrf
              
                    <div class="mb-3">
                      <label for="fname" class="form-label"  style="margin-right: 300px;font-weight: bold;">Full Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Type Here..." id="fname" required>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label"  style="margin-right: 300px;font-weight: bold;">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Type Here..." id="pop" required>
                    </div>
                    <div class="mb-3">
                      <label for="vote" class="form-label" style="margin-right: 330px;font-weight: bold;">Subject</label>
                      <textarea type="text" class="form-control" id="vote" name="subject" placeholder="Type Here..." required></textarea>
                    </div>
                   
                    
                 
                </div>
                <div class="modal-footer">

                  <button type="submit" class="btn btn-dark"><a href="contactsalcedo" style="text-decoration: none;color: white">Send</a></button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  
                </div></form>
              </div>
            </div>
          </div>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    
  </div>
  <div class="w3-display-middle">
  <h1 class="w3-jumbo w3-animate-top"><a href="home" style="text-decoration: none;color: white"><center>Browse Here </i>
  <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center"><img src="http://tarlacfirst.com/wp-content/uploads/san-manuel.png" height="70px" width="70px"> Salcedo Content Management System</p> 
      
     </center></a> </h1>
  </div>
 
</div>

</body>
</html>
