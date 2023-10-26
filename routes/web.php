<?php
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

Route::get('/', function () {
    return [
        "link" => \route('bloge.show',['slug'=>'article','id'=> 13]),
    ];
})->name('blog.index');
// Route::get('/bloge',function(Request $Request){

//     return [
//         "name" => $Request -> path(),
//         "article"=> "Article 1"
//     ];
// });
// use Illuminate\Http\Request;

Route::get('/blog/{id}-{slug}', function (string $slug, string $id ) {
        return [
            "slug" => $slug,
            "id" => $id,
           "name" => "Tanger",
    ];
})->name('blog.show');