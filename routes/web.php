<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view("front.index");
//});

//Route::get("/home", function (){
//    return view("index");
//});

Route::get('/',"Homecontroller@index")->name("home");

Route::get("/about", "Homecontroller@about")->name("about");

Route::get("/contact", "Contactcontroller@showForm")->name("contact");

Route::post("/contact", "Contactcontroller@contact");

//Route::post("/user/{id}/{name?}", "Contactcontroller@user")
//            ->name("user")
//            ->where(["id" => "[0-9]+"], "name" ["[a-z]+"]);

Route::resource("article", "Articlecontroller");


//Route::apiResource("/api/article", "Api/Articlecontroller");


Route::get("/users/{name}", "Usercontroller@showName")
    ->name("showName")
    ->whereAlphaNumeric("name");

Route::get("/user/{role}", "Usercontroller@roleCheck")
    ->name("user.roleCheck")
    ->whereIn('role', ['admin', "user"]);

Route::prefix("admin")->group(function (){
    Route::get("/create-article", "Articlecontroller@create")->name("admin.create");
    Route::get("/edit-article", "Articlecontroller@edit")->name("admin.articleEdit");
    Route::post("/article/{id}/delete", "Articlecontroller@destroy")->name("admin.articleDestroy");

});

Route::controller(\App\Http\Controllers\Usercontroller::class)->prefix("Fame")->group(function (){
    Route::get("/get-user", "getUser");
    Route::get("delete-user","deleteUser");
});


Route::match(['get',"post"], "/support-form", "SupportFormcontroller@support")->name("support-form.support");

Route::patch("users/{id}/update", "Usercontroller@update")->name("user.update");
Route::put("users/{id}/updateAll","Usercontroller@updateAll")->name("user.updateAll");

//Route::get('/', [HomeController::class, 'index']);

//Route::get('/', 'App\Http\Controllers\HomeController@index');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//require __DIR__.'/auth.php';
