<?php

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

use Illuminate\Support\Facades\Request;

Route::get('/', function () {

    $posts = \App\Post::orderBy('id', 'desc')
        ->take(4)
        ->get();

    return view('welcome', [
        'posts' =>$posts,
    ]);

});

Route::get('/aboutus', function () {

    return view('about-us');


});

Route::get('/blog', function () {



    $posts = \App\Post::orderBy('id', 'desc')
        ->get();

    return view('blog', [
        'title' =>'BLOGS',
        'posts' =>$posts,
    ]);
});

Route::post('/blog/create', function () {

    $title = Request::post('title', null);
    $body = Request::post('body', null);

    $post = new \App\Post;
    $post->title = $title;
    $post->body = $body;

    $post->save();

    return redirect('/blog');

});

Route::get('/blog/create', function () {

    return view('blog-form');

});

Route::get('/contacts', function () {

    return view('contacts');

});

Route::get('/blog/{id}', function ($id) {
    /*
        $posts = Post;
    */

    $post = \App\Post::find($id);
    // $posts = \App\Post::get();


    return view('blog-item', [
        'title' =>'Blog Post',
        'post' =>$post,
    ]);

});
