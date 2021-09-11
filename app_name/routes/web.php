<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;


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
    return redirect('/articles');
});

//×Route::get('/articles','app/Http/Controllers/ArticleController.php@index')->name('article.list');
//×Route::get('/articles/{id}','app/Http/Controllers/ArticleController.php@show')->name('article.show');
// 参考 https://readouble.com/laravel/8.x/ja/views.html
//〇Route::get('/articles', [ArticleController::class, 'index']);


    Route::get('/articles', function () {
        $message = 'Welcome to BBS';
        $articles = Article::all();
        return view('index', compact('message','articles'));
    });

Route::get('/articles/new', [ArticleController::class, 'create']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

