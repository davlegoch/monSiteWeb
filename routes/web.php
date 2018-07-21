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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

/*********************************************************************************/
// Routing gestion des utilisateurs
Route::get('user', ['as' => 'getUserInfos', 'uses' => 'UserController@getInfos']);
Route::post('user', ['as' => 'postUserInfos', 'uses' => 'UserController@postInfos']);

/*********************************************************************************/
// Routing test et bidon
Route::get('contact', ['as' => 'contact', 'uses' => 'contactController@get']);
Route::post('contact', ['as' => 'contact', 'uses' => 'contactController@post']);
//test

/*********************************************************************************/
// Routing section blog
Route::get('blog/{category}/post-{idPost}', ['uses' => 'blogController@zoomPost', 'as' => 'zoomOnPost'])
    ->where('category', '[a-z]+')->where('idPost', '[0-9]+');
Route::get('blog/{category}', ['uses' => 'blogController@listPost', 'as' => 'listAllPost'])
    ->where('category', '[a-z]+');

// Avec vue :
/*
$route = Route::get('blog/{category}/post-{idPost}', ['as' => 'blog', function ($category, $idPost) {
    return Response::make(
        //view('blog', ['category' => $category, 'post' => $idPost])
        //view('blog')->with('category', $category)->with('post', $idPost)
        view('blog')->withCategory($category)->withPost($idPost)
    , 200);
}])->where('category', '[a-z]+')->where('idPost', '[0-9]+');
*/

/*********************************************************************************/
// Routing section projets
Route::get('projects/{category}/{idProject}', ['as' => 'projects', function ($category, $idProject) {
    return Response::make(
        view('project', ['category' => $category, 'project' => $idProject])->withRedirection(route('bidon'))
    , 200);
}])->where('category', '[a-z]+')->where('idProject', '[0-9]+');

// Avec facades :
/*
$route = Route::get('blog/{category}/post-{idPost}', ['as' => 'blog', function ($category, $idPost) {
    return Response::make('Blog ' . $category . ' : ' . $idPost, 200);
}])->where('category', '[a-z]+')->where('idPost', '[0-9]+');
*/

// Sans facade :
/*
app('router')->get('blog/{category}/post-{idPost}', ['as' => 'blog', function ($category, $idPost) {
    return response('Blog ' . $category . ' : ' . $idPost, 200);
}])->where('category', '[a-z]+')->where('idPost', '[0-9]+');
*/

//dd($route);