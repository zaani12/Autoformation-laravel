<?php
use App\Http\Controllers\testController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::prefix('/blog')->name('blog.')->group(function () {

    Route::get('/', [testController::class,'index'])->name('index');  // get all the data 
    // Route::get('/{test}-{id}',[testController::class,'show'])->name('index'); // get specific data useing url 'name-id'
Route::get('/blog/{slug}-{post}','testController@show')->where([
    'post'=> '[0-9]+',
    'slug'=> '[a-z0-9\-]+'
])->name('show');

});


Route::get("/", function () {
    return ("welcome");
});

