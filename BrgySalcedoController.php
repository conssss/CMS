<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BrgySalcedoController extends Controller
{

	//home
    public function addhome(Request $request){
    	 

        $logo = $_FILES["logo"]["name"];
        $tempname = $_FILES["logo"]["tmp_name"];
        $folder = "./salcedo/img/home/" . $logo;
        $move = move_uploaded_file($tempname, $folder);

          $head = $request -> input('headhome');
          $description = $request -> input('descriptionhome');

            DB::insert("INSERT INTO `home`(`id`, `logo`, `headhome`, `descriptionhome`) VALUES (NULL, '$logo','$head','$description')");
          echo '
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                            <h1>Successfully Inserted</h1>
                        </div>
                        <div class="alert alert-success fade in">
                            <p>Record Inserted</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div><br/>';
        header("Refresh:2; url=adminH");
    }
    
	    public function displayhome(){

	    	$table = DB::select("SELECT * FROM `home`");
	                  return view('adminH',['table'=> $table]);

	    }
	    public function deletehome($id){
                               DB::delete("DELETE FROM `home` WHERE id='$id'");
                                          
                                            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record deleted successfully</h1>
                                                            </div>
                                                            <div class="alert alert-danger fade in">
                                                                <p><a href = "/adminH">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }

                           
                        function edithome(Request $request, $id){
                            	  
                                $logo = $_FILES["logo"]["name"];
                                $tempname = $_FILES["logo"]["tmp_name"];
                                $folder = "./salcedo/img/home/" . $logo;
                                $move = move_uploaded_file($tempname, $folder);

                                  $head = $request -> input('headhome');
                                  $description = $request -> input('descriptionhome');

                                    DB::insert("UPDATE `home` SET `id`='$id',`logo`='$logo',`headhome`='$head',`descriptionhome`='$description' WHERE id='$id'");

								         echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record updated successfully</h1>
                                                            </div>
                                                            <div class="alert alert-success fade in">
                                                                <p><a href = "/adminH">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }

        //leaders

       public function addleader(Request $request){
    	  
        $picture = $_FILES["picture"]["name"];
        $tempname = $_FILES["picture"]["tmp_name"];
        $folder = "./salcedo/img/leader/" . $picture;
        $move = move_uploaded_file($tempname, $folder);
          $header = $request -> input('header');
          $title = $request -> input('title');
          $description = $request -> input('description');

            DB::insert("INSERT INTO `leader`(`id`, `pictureleader`, `headerleader`, `titleleader`, `descriptiontitle`) VALUES (NULL, '$picture', '$header','$title','$description')");
          echo '
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                            <h1>Successfully Inserted</h1>
                        </div>
                        <div class="alert alert-success fade in">
                            <p>Record Inserted</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div><br/>';
        header("Refresh:2; url=leaders");
    }
    
	    public function displayleader(){

	    	$table = DB::select("SELECT * FROM `leader`");
	                  return view('leaders',['table'=> $table]);

	    }
	    public function deleteleader($id){
                               DB::delete("DELETE FROM `leader` WHERE id='$id'");
                                          
                                            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record deleted successfully</h1>
                                                            </div>
                                                            <div class="alert alert-danger fade in">
                                                                <p><a href = "/leaders">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }

                    function editleader(Request $request, $id){
                                  
                                 $picture = $_FILES["picture"]["name"];
                                $tempname = $_FILES["picture"]["tmp_name"];
                                $folder = "./salcedo/img/leader/" . $picture;
                                $move = move_uploaded_file($tempname, $folder);
                                  $header = $request -> input('header');
                                  $title = $request -> input('title');
                                  $description = $request -> input('description');

                                    DB::insert("UPDATE `leader` SET `id`='$id',`pictureleader`='$picture',`headerleader`='$header',`titleleader`='$title',`descriptiontitle`='$description' WHERE id='$id'");
                                         echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record updated successfully</h1>
                                                            </div>
                                                            <div class="alert alert-success fade in">
                                                                <p><a href = "/adminH">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }

        //news
          public function addnews(Request $request){
    	  
        $picture = $_FILES["picture"]["name"];
        $tempname = $_FILES["picture"]["tmp_name"];
        $folder = "./salcedo/img/news/" . $picture;
        $move = move_uploaded_file($tempname, $folder);
          $header = $request -> input('header');
          $title = $request -> input('title');
          $description = $request -> input('description');

            DB::insert("INSERT INTO `news`(`id`, `picture`, `header`,`title`, `description`) VALUES (NULL, '$picture', '$header','$title','$description')");
          echo '
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                            <h1>Successfully Inserted</h1>
                        </div>
                        <div class="alert alert-success fade in">
                            <p>Record Inserted</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div><br/>';
        header("Refresh:2; url=news");
    }
    
	    public function displaynews(){

	    	$table = DB::select("SELECT * FROM `news`");
	                  return view('news',['table'=> $table]);

	    }
	    public function deletenews($id){
                               DB::delete("DELETE FROM `news` WHERE id='$id'");
                                          
                                            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record deleted successfully</h1>
                                                            </div>
                                                            <div class="alert alert-danger fade in">
                                                                <p><a href = "/news">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }
                             function editnews(Request $request, $id){
                                  
                                 $picture = $_FILES["picture"]["name"];
                                $tempname = $_FILES["picture"]["tmp_name"];
                                $folder = "./salcedo/img/news/" . $picture;
                                $move = move_uploaded_file($tempname, $folder);
                                  $header = $request -> input('header');
                                  $title = $request -> input('title');
                                  $description = $request -> input('description');

            DB::insert("UPDATE `news` SET `id`='$id',`picture`='$picture',`header`='$header',`title`='$title',`description`='$description' WHERE id='$id'");
                                         echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record updated successfully</h1>
                                                            </div>
                                                            <div class="alert alert-success fade in">
                                                                <p><a href = "/adminH">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }


//stat
          public function addstat(Request $request){
    	  
          $household = $request -> input('household');
          $population = $request -> input('population');
          $voter = $request -> input('voter');
          $vaccinated = $request -> input('vaccinated');

            DB::insert("INSERT INTO `stat`(`id`, `household`, `population`,`voter`, `vaccinated`) VALUES (NULL, '$household', '$population','$voter','$vaccinated')");
          echo '
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                            <h1>Successfully Inserted</h1>
                        </div>
                        <div class="alert alert-success fade in">
                            <p>Record Inserted</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div><br/>';
        header("Refresh:2; url=stat");
    }
    
	    public function displaystat(){

	    	$table = DB::select("SELECT * FROM `stat`");
	                  return view('stat',['table'=> $table]);

	    }
	    public function deletestat($id){
                               DB::delete("DELETE FROM `stat` WHERE id='$id'");
                                          
                                            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record deleted successfully</h1>
                                                            </div>
                                                            <div class="alert alert-danger fade in">
                                                                <p><a href = "/stat">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }
                             function editstat(Request $request, $id){
                                          
                              $household = $request -> input('household');
                              $population = $request -> input('population');
                              $voter = $request -> input('voter');
                              $vaccinated = $request -> input('vaccinated');

                    DB::insert("UPDATE `stat` SET `id`='$id',`household`='$household',`population`='$population',`voter`='$voter',`vaccinated`='$vaccinated'  WHERE id='$id'");
                                         echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record updated successfully</h1>
                                                            </div>
                                                            <div class="alert alert-success fade in">
                                                                <p><a href = "/adminH">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }
//officials
          public function addofficial(Request $request){
    	  
       $captain = $_FILES["captain"]["name"];
        $tempname = $_FILES["captain"]["tmp_name"];
        $folder = "./salcedo/img/officials/" . $captain;
        $move = move_uploaded_file($tempname, $folder);
            $coun1 = $_FILES["coun1"]["name"];
            $tempname = $_FILES["coun1"]["tmp_name"];
            $folder = "./salcedo/img/officials/" . $coun1;
            $move = move_uploaded_file($tempname, $folder);
              $coun2 = $_FILES["coun2"]["name"];
              $tempname = $_FILES["coun2"]["tmp_name"];
              $folder = "./salcedo/img/officials/" . $coun2;
              $move = move_uploaded_file($tempname, $folder);
                $coun3 = $_FILES["coun3"]["name"];
                $tempname = $_FILES["coun3"]["tmp_name"];
                $folder = "./salcedo/img/officials/" . $coun3;
                $move = move_uploaded_file($tempname, $folder);
                  $coun4 = $_FILES["coun4"]["name"];
                  $tempname = $_FILES["coun4"]["tmp_name"];
                  $folder = "./salcedo/img/officials/" . $coun4;
                  $move = move_uploaded_file($tempname, $folder);
                    $coun5 = $_FILES["coun5"]["name"];
                    $tempname = $_FILES["coun5"]["tmp_name"];
                    $folder = "./salcedo/img/officials/" . $coun5;
                    $move = move_uploaded_file($tempname, $folder);
                      $coun6 = $_FILES["coun6"]["name"];
                      $tempname = $_FILES["coun6"]["tmp_name"];
                      $folder = "./salcedo/img/officials/" . $coun6;
                      $move = move_uploaded_file($tempname, $folder);
                        $coun7 = $_FILES["coun7"]["name"];
                        $tempname = $_FILES["coun7"]["tmp_name"];
                        $folder = "./salcedo/img/officials/" . $coun7;
                        $move = move_uploaded_file($tempname, $folder);
                          $sk = $_FILES["sk"]["name"];
                          $tempname = $_FILES["sk"]["tmp_name"];
                          $folder = "./salcedo/img/officials/" . $sk;
                          $move = move_uploaded_file($tempname, $folder);
                            $treasurer = $_FILES["treasurer"]["name"];
                            $tempname = $_FILES["treasurer"]["tmp_name"];
                            $folder = "./salcedo/img/officials/" . $treasurer;
                            $move = move_uploaded_file($tempname, $folder);
                              $secretary = $_FILES["secretary"]["name"];
                              $tempname = $_FILES["secretary"]["tmp_name"];
                              $folder = "./salcedo/img/officials/" . $secretary;
                              $move = move_uploaded_file($tempname, $folder);
          $captainname = $request -> input('captainname');
           $name1 = $request -> input('name1');
            $name2 = $request -> input('name2');
             $name3 = $request -> input('name3');
              $name4 = $request -> input('name4');
               $name5 = $request -> input('name5');
                $name6 = $request -> input('name6');
                 $name7 = $request -> input('name7');
                  $skname = $request -> input('skname');
                   $treasname = $request -> input('treasname');
                    $secname = $request -> input('secname');

            DB::insert("INSERT INTO `official`(`id`, `captain`, `coun1`, `coun2`, `coun3`, `coun4`, `coun5`, `coun6`, `coun7`, `sk`, `treasurer`, `secretary`, `captainname`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `skname`, `treasname`, `secname`) VALUES (NULL,'$captain','$coun1','$coun2','$coun3','$coun4','$coun5','$coun6','$coun7','$sk','$treasurer','$secretary','$captainname','$name1','$name2','$name3','$name4','$name5','$name6','$name7','$skname','$treasname','$secname')");
          echo '
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                            <h1>Successfully Inserted</h1>
                        </div>
                        <div class="alert alert-success fade in">
                            <p>Record Inserted</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div><br/>';
        header("Refresh:2; url=officials");
    }
    
	    public function displayofficial(){

	    	$table = DB::select("SELECT * FROM `official`");
	                  return view('officials',['table'=> $table]);

	    }
	    public function deleteofficial($id){
                               DB::delete("DELETE FROM `official` WHERE id='$id'");
                                          
                                            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record deleted successfully</h1>
                                                            </div>
                                                            <div class="alert alert-danger fade in">
                                                                <p><a href = "/officials">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }

    //about
          public function addabout(Request $request){
        
        $picture = $_FILES["picture"]["name"];
        $tempname = $_FILES["picture"]["tmp_name"];
        $folder = "./salcedo/img/about/" . $picture;
        $move = move_uploaded_file($tempname, $folder);
          $header = $request -> input('head');
          $body = $request -> input('body');
          $t1 = $request -> input('t1');
          $d1 = $request -> input('d1');
          $t2 = $request -> input('t2');
          $d2 = $request -> input('d2');
          $t3 = $request -> input('t3');
          $d3 = $request -> input('d3');

            DB::insert("INSERT INTO `about`(`id`, `picture`, `head`, `body`, `t1`, `d1`, `t2`, `d2`, `t3`, `d3`) VALUES (null, '$picture','$header','$body','$t1','$d1','$t2','$d2','$t3','$d3')");
          echo '
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                            <h1>Successfully Inserted</h1>
                        </div>
                        <div class="alert alert-success fade in">
                            <p>Record Inserted</p>
                        </div>
                    </div>
                </div>        
            </div>
        </div><br/>';
        header("Refresh:2; url=aboutAdminSalcedo");
    }
    
      public function displayabout(){

        $table = DB::select("SELECT * FROM `about`");
                    return view('aboutAdminSalcedo',['table'=> $table]);

      }
      public function deleteabout($id){
                               DB::delete("DELETE FROM `about` WHERE id='$id'");
                                          
                                            echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record deleted successfully</h1>
                                                            </div>
                                                            <div class="alert alert-danger fade in">
                                                                <p><a href = "/aboutAdminSalcedo">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }
                     function editabout(Request $request, $id){
                                          
                                          
                            $picture = $_FILES["picture"]["name"];
                            $tempname = $_FILES["picture"]["tmp_name"];
                            $folder = "./salcedo/img/about/" . $picture;
                            $move = move_uploaded_file($tempname, $folder);
                              $header = $request -> input('head');
                              $body = $request -> input('body');
                              $t1 = $request -> input('t1');
                              $d1 = $request -> input('d1');
                              $t2 = $request -> input('t2');
                              $d2 = $request -> input('d2');
                              $t3 = $request -> input('t3');
                              $d3 = $request -> input('d3');

                    DB::insert("UPDATE `about` SET `id`='$id',`picture`='$picture',`head`='$header',`body`='$body',`t1`='$t1',`d1`='$d1',`t2`='$t2',`d2`='$d2',`t3`='$t3',`d3`='$d3' WHERE id='$id'");
                                         echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                                                                <h1>Record updated successfully</h1>
                                                            </div>
                                                            <div class="alert alert-success fade in">
                                                                <p><a href = "/adminH">Click Here</a> to go back.</p>
                                                            </div>
                                                        </div>
                                                    </div>        
                                                </div>
                                            </div><br/>';
                            }

//admincredentials

              public function admincredential(){

              $table = DB::select("SELECT * FROM `admincredential`");
                return view('adminSalcedo',['table'=> $table]);
            }

             //display all 
          public function displaya(){

                  $table = DB::select("SELECT * FROM `home`");
                              return view('home',['table'=> $table]);
                       
    }


        
                public function displayn(){

                  $table = DB::select("SELECT * FROM `news`");
                              return view('unews',['table'=> $table]);


                }

                public function displays(){

                  $table = DB::select("SELECT * FROM `stat`");
                              return view('ustat',['table'=> $table]);


                }
                public function displayl(){

                  $table = DB::select("SELECT * FROM `leader`");
                              return view('uleader',['table'=> $table]);


                }
                public function displayo(){

                  $table = DB::select("SELECT * FROM `official`");
                              return view('uofficials',['table'=> $table]);


                }
                 public function displayab(){

                  $table = DB::select("SELECT * FROM `about`");
                              return view('aboutSalcedo',['table'=> $table]);


                }
               
       
                 
}

