<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"])->middleware('auth','verified');
// Route::get("/user",[HomeController::class,"customer"]);
Route::get("/colddrinks",[HomeController::class,"colddrinks"]);
Route::get("/fastfood",[HomeController::class,"fastfood"]);
Route::get("/special",[HomeController::class,"special"]);

//for the customer message or contact us//
Route::any("/message",[AdminController::class,"message"]);

//for displaying customer message in  admin panel//
Route::get("/report",[AdminController::class,"reportmsg"]);

//for deleting message from admin panel//
Route::get("/deletemessage/{id}",[AdminController::class,"deletemessage"]);









Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// for the admin dashboard//
Route::get("/users",[AdminController::class,"user"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

//for food menu//
Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
Route::post("/uploadfood",[AdminController::class,"upload"]);
Route::get("/deletefood/{id}",[AdminController::class,"deletefood"]);
Route::get("/updateview/{id}",[AdminController::class,"updateview"]);
Route::post("/update/{id}",[AdminController::class,"update"]);



//for adding food to the cart//

Route::post("/addcart/{id}",[HomeController::class,"addcart"]);
Route::get("/showcart/{id}",[HomeController::class,"showcart"]);
//for removing user food from cart//

Route::get("/remove/{id}",[HomeController::class,"remove"]);


//for final ordering the food//

Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);

//for showing orderdata from database of customer//

Route::get("/order",[AdminController::class,"order"]);
// for searching food order from admin panel//

Route::get("/search",[AdminController::class,"search"]);

//for contact us blade//
Route::get("/contactus",[HomeController::class,"contactus"]);

//for deleting order from admin panel//
Route::get("/deleteorder/{id}",[AdminController::class,"deleteorder"]);





