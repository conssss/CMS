<?php 
session_start();
$page = "adminSalcedo";
$sec = "2";
echo '  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
          <style type="text/css">
            .wrapper{
                width: 750px;
                margin: 0 auto;
            }
          </style>';
echo '<div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>You Have Been Logged Out</h1>
                        </div>
                        <div class="alert alert-danger fade in">
                            <p>Redirecting to Login Page...</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div><br/>';
header("Refresh: $sec; url=$page");
session_unset();
session_destroy();
?>

