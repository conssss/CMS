<!DOCTYPE html>
<html>
<head>
  <title>ADMIN LOGIN</title>
</head>
<body style="margin-top: 50px">
  <a class="navbar-brand" href="#" style="text-decoration: none "><h3 style="font-weight: bold;color:white;font-size: 4.5vh;margin-left: 20px"><center>
   
  </center></h3></a>
<div class="login-box">
  <center>
    <h5 style="color: white"> Barangay Salcedo Content Management System</h5>
      <img src="http://tarlacfirst.com/wp-content/uploads/san-manuel.png" height="80px"> <h2>Login Admin</h2>
  </center>
 
  <form action="adminH">

    <div class="user-box">
      <input type="text" name="username" value=""  required>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="code" required>
      <label>Code</label>
    </div>
     <a href="">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
     <button type="submit" class="btn btn-dark"> Login</button>
    </a>
  </form>
</div>
</body>
</html>

<style type="text/css">
  html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background:  linear-gradient(
      rgba( 0,0,0,0), rgba( 0,0,0,0) ), url(img/facilities/hall.jpg);background-size: cover;background-position: center; background-repeat: no-repeat;
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 500px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba( 0,0,0,0.8);
  box-sizing: border-box;
  box-shadow: 0 15px 15px #CFFF47;
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #CFFF47;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #CFFF47;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #CFFF47;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #CFFF47,
              0 0 25px #CFFF47,
              0 0 50px #CFFF47,
              0 0 100px #CFFF47;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #CFFF47);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #CFFF47);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #CFFF47);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #CFFF47);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
</style>