<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PostsController;
use App\http\Controllers\StudentController;
use App\http\Controllers\appointmentController;

use App\http\Controllers\BrgySalcedoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', function () {
    return view('home');
});
Route::get('/adminH', function () {
    return view('adminH');
});
Route::get('/leaders', function () {
    return view('leaders');
});
Route::get('/officials', function () {
    return view('officials');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/stat', function () {
    return view('stat');
});
Route::get('/ustat', function () {
    return view('ustat');
});
Route::get('/aboutSalcedo', function () {
    return view('aboutSalcedo');
});
Route::get('/aboutAdminSalcedo', function () {
    return view('aboutAdminSalcedo');
});
Route::get('/unews', function () {
    return view('unews');
});
Route::get('/adminSalcedo', function () {
    return view('adminSalcedo');
});
Route::get('/updatehome/{id}', function () {
    return view('updatehome{id}');
});
Route::get('/salcedomain', function () {
    return view('salcedomain');
});
Route::get('/logoutSalcedo', function () {
    return view('logoutSalcedo');
});
Route::get('/edithome', function () {
    return view('edithome');
});
Route::get('/editnews', function () {
    return view('editnews');
});
Route::get('/editabout', function () {
    return view('editabout');
});
Route::get('/editstat', function () {
    return view('editstat');
});
Route::get('/uleader', function () {
    return view('uleader');
});
Route::get('/uofficials', function () {
    return view('uofficials');
});
Route::get('/contactsalcedo', function () {
    return view('contactsalcedo');
});
//dbsalcedo
//home
Route::post('homeadd', [BrgySalcedoController::class,'addhome']);
Route::get('adminH', [BrgySalcedoController::class,'displayhome']);
Route::get('delhome/{id}', [BrgySalcedoController::class,'deletehome']);
Route::post('homeupdate/{id}', [BrgySalcedoController::class,'edithome']);
//leaders
Route::post('leaderadd', [BrgySalcedoController::class,'addleader']);
Route::get('leaders', [BrgySalcedoController::class,'displayleader']);
Route::get('delleader/{id}', [BrgySalcedoController::class,'deleteleader']);
Route::post('leaderupdate/{id}', [BrgySalcedoController::class,'editleader']);


//news
Route::post('newsadd', [BrgySalcedoController::class,'addnews']);
Route::get('news', [BrgySalcedoController::class,'displaynews']);
Route::get('delnews/{id}', [BrgySalcedoController::class,'deletenews']);
Route::post('newupdate/{id}', [BrgySalcedoController::class,'editnews']);


//stat
Route::post('statadd', [BrgySalcedoController::class,'addstat']);
Route::get('stat', [BrgySalcedoController::class,'displaystat']);
Route::get('delstat/{id}', [BrgySalcedoController::class,'deletestat']);
Route::post('statupdate/{id}', [BrgySalcedoController::class,'editstat']);

//officials
Route::post('officialadd', [BrgySalcedoController::class,'addofficial']);
Route::get('officials', [BrgySalcedoController::class,'displayofficial']);
Route::get('delofficial/{id}', [BrgySalcedoController::class,'deleteofficial']);

//about
Route::post('aboutadd', [BrgySalcedoController::class,'addabout']);
Route::get('aboutAdminSalcedo', [BrgySalcedoController::class,'displayabout']);
Route::get('delabout/{id}', [BrgySalcedoController::class,'deleteabout']);
Route::post('aboutupdate/{id}', [BrgySalcedoController::class,'editabout']);

//admin
Route::get('adminSalcedo', [BrgySalcedoController::class,'admincredential']);
Route::get('home', [BrgySalcedoController::class,'displaya']);
Route::get('unews', [BrgySalcedoController::class,'displayn']);
Route::get('ustat', [BrgySalcedoController::class,'displays']);
Route::get('uleader', [BrgySalcedoController::class,'displayl']);
Route::get('uofficials', [BrgySalcedoController::class,'displayo']);
Route::get('aboutSalcedo', [BrgySalcedoController::class,'displayab']);




//appointment
Route::get('/appointUser', function () {
    return view('appointUser');
});
Route::get('/registerUser', function () {
    return view('registerUser');
});
Route::get('/logoutAppoint', function () {
    return view('logoutAppoint');
});
Route::get('/adminappoint', function () {
    return view('adminappoint');
});
Route::get('/aalogin', function () {
    return view('aalogin');
});
Route::get('/logadminappoint', function () {
    return view('logadminappoint');
});
Route::get('/delappoint', function () {
    return view('delappoint');
});
Route::get('/editappoint', function () {
    return view('editappoint');
});




Route::post('appoint', [appointmentController::class,'signin']);
Route::post('registerUser', [appointmentController::class,'register']);
Route::post('appointUser', [appointmentController::class,'indata']);
Route::get('adminapoint', [appointmentController::class,'adminin']);
Route::get('more', [appointmentController::class,'table']);
Route::get('adminappoint', [appointmentController::class,'admintable']);
Route::get('delappoint/{id}', [appointmentController::class,'destroy']);
Route::get('editappoint/{id}', [appointmentController::class,'edit']);
Route::get('statApprove/{id}', [appointmentController::class,'statApprove']);


/*Route::get('/', function () {
/*Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/log', function () {
    return view('log');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/contact', function () {
    return view('contact');
});*/

Route::get('student/details',function(){
    $url = route('student.details');
    return $url;
})->name('student.details');

//Route::view('/orderd','orderd');

Route::get('/orderd/{transNo}/{orderNo}/{itemId}/{name}/{price}/{quantity}/{reciept?}', function ($transNo , $orderNo, $itemId, $name, $price, $quantity, $reciept=null) {
    return view('orderd');
});

//Route::view('/order','order');

Route::get('/order/{customerID}/{name}/{orderNo}/{date}', function ($customerID , $name, $orderNo, $date){
    return view('order');
});
//Route::view('/customer','customer');

Route::get('/customer/{id}/{name}/{address}/{age?}', function ($id , $name, $address, $age=null) {
    return view('customer');
});
//Route::view('/item','item');

Route::get('/item/{itemNo}/{name}/{price}', function ($itemNo , $name, $price) {
    return view('item');
});

//Route::get('/post',[PostsController::class,'index']);

Route::get('/post','App\http\Controllers\PostsController@index');

//new lesson 28/04/2022

Route::get('contact1',function(){
    return view('contact1', ['name'=>'John']);
});

Route::get('/about1',[PostsController::class,'display']);

Route::get('/details',[PostsController::class,'displayNest']);

Route::get('/student1',[StudentController::class,'display']);


 Route::get('/student2/{id}',[StudentController::class,'display2']);

Route::get('/control1/{id}',function(){
    return view('control1')->with('id','1');
});





 