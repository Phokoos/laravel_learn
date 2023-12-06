<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Country;
use App\Models\Photo;

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

Route::get('/', function () {
    return view('welcome');
});

//
//Route::get('/test/{id}/{name}', function ($id, $name){
//    return "hello ". $id. " ". $name;
//});

//Route::get('admin/posts', array('as'=>'admin.home', function() {
//    $url = route('admin.home');
//    return $url;
//}));


/*
 * ==============
 * Work with Databases TINKER
 * ==============
 */




/*
 * ==============
 * Work with Databases RELATIONSHIPS
 * ==============
 */

//! ONE to ONE
//Route::get('/user/{id}/post', function ($id){
//    return User::find($id)->post;
//});
//Route::get('/post/{id}/user', function ($id){
//    return Post::find($id)->user;
//});

//! ONE to MANY
//Route::get('/posts', function (){
//    $user = User::find(1);
//
//    foreach ($user->posts as $post){
//        echo  "<h1> $post->title </h1>";
//    }
//});

//! MANY to MANY
//Route::get('/user/{id}/role', function ($id){
//    $user = User::find($id)->roles()->orderBy('id')->get();
//    return $user;
//
//    $user = User::find($id);
//    foreach ($user->roles as $role){
//        return $role;
//    }
//});

//! Accessing the intermediate table / pivot
//Route::get('/user/pivot', function (){
//    $user = User::find(1);
//
//    foreach ($user->roles as $role) {
//        dump($role);
//    }
//});
//
//Route::get('/user/country/{id}', function ($id){
//    $country = Country::find($id);
//
//    foreach ($country->posts as $post){
//        echo $post->title;
//    }
//});

// Polymorphic Relations

//Route::get('/user/photos', function (){
//    $user = User::find(2);
//
//    foreach ($user->photos as $photo){
//        echo  $photo;
//    }
//});

//Route::get('/post/photos', function (){
//    $post = Post::find(2);
//
//    foreach ($post->photos as $photo){
//        echo  $photo;
//    }
//});

//Route::get('/photo/{id}/post', function ($id) {
//    $photo = Photo::findOrFail($id);
//
//    echo $photo->imageable;
//});


//Route::get('/post/tag', function (){
//    $post = Post::find(1);
//
//    foreach ($post->tags as $tag){
//        echo $tag;
//    }
//    return $post;
//});

//Route::get('/tag/post', function (){
//    $tag = Tag::find(2);
//
//    foreach ($tag->posts as $post){
//        echo $post;
//    }
//});

/*
 * ==============
 * Work with Databases ELOQUENT
 * ==============
 */

//Route::get('/find', function (){
//    $posts = Post::all();
//
//    return $posts;
//});

//Route::get('/findOne', function (){
//    $post = Post::find(3);
//
//    return $post;
//});

//Route::get('/findWhere', function (){
//    $posts = Post::where('is_admin', 0)->get();
//
//    return $posts;
//});

//Route::get('/basicInsert', function (){
//    $post = new Post();
//
//    $post->title = 'New eloquent title insert';
//    $post->content = 'New eloquent content insert';
//
//    $post->save();
//});

//Route::get('/basicInsertUpdate', function (){
//    $post = Post::find(5);
//
//    $post->title = 'New eloquent title insert update';
//    $post->content = 'New eloquent content insert update';
//
//    $post->save();
//
//    return $post;
//});

//Route::get('/createWithVars/{lan}', function ($lan){
//    Post::createWithVars(['user_id'=> 1,'title'=>`$lan. is cool`, 'content' => `$lan. is working`]);
//    Post::create(['title'=>`PHP is cool`, 'content' => `PHP is working`]);
//});

//Route::get('/update', function (){
//    Post::where('id', 6)->update(['title'=>'Updated new title']);
//});

//Route::get('/delete', function (){
//    $deletedPost = Post::where('id', 6)->delete();
//
//    return $deletedPost;
//});

//Route::get('/delete2', function (){
//    Post::destroy([4,5]);
//});

//Route::get('/softDelete', function (){
//    Post::find(2)->delete();
//});

//Route::get('/readSoftDelete', function (){
//    $post = Post::find(1);
//    $post = Post::withTrashed()->where('id', 1)->get();
//    $post = Post::onlyTrashed()->get();
//    $post = Post::onlyTrashed()->where('id', 2)->get();
//
//    return $post;
//});

//Route::get('/restoreSoftDeleted', function (){
//    $post = Post::withTrashed()->where('id', 1)->restore();
//    return $post;
//});

//Route::get('/forceDelete', function (){
//    $post = Post::onlyTrashed()->where('id', 6)->forceDelete();
//    return $post;
//});


/*
 * ==============
 * Work with Databases
 * ==============
 */

//Route::get('/insert', function (){
//   DB::insert('insert into posts(title, content) values(?, ?)', ['PHP is cool', 'PHP Laravel lorem lorem lorem ']);
//});

//Route::get('/read', function (){
//    $results = DB::select('select * from posts where id = ?', [1]);
//
//    foreach ($results as $result){
//        return $result;
//    };
//});
//
//Route::get('/update', function (){
//    $updated = DB::update('update posts set title = "Updated title PHP" where id =?', [1]);
//});

//Route::get('/delete', function (){
//    $deleted = DB::delete('delete from posts where id = ?', [7]);
//
//    return $deleted;
//});

/*
 * ==============
 * PART WITH VIEW
 * ==============
 */
//Route::get('/contact', [PostsController::class, 'contact']);
//Route::get('/post/{id}', [PostsController::class, 'show_post']);
