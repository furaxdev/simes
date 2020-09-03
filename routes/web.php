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

use App\Batch;
use App\Faculty;
use App\Subject;
use App\Semester;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['register' => false, 'request' => false, 'reset' => false]);
Route::get('/home', 'HomeController@index')->name('home');













Route::get('/getlogindetails', function () {
    return view('auth.logindetail')->with('batches', Batch::all())->with('faculties',Faculty::all());
});


Route::get('/blog', 'BlogController@index')->name('blog');


Route::get('/blog/{post}', 'BlogController@show')->name('blog.show');





Route::post('logindetails', 'LogindetailsController@getdetails')->name('getlogindetails');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('posts', 'PostsController');

    Route::get('/studymaterials', function () {
        return view('subjects.studymaterials')->with('subjects', Subject::all())->with('semesters', Semester::all());
    });


    Route::resource('alumni', 'AlumniController');


    Route::get('/adduser', function () {
        return view('users.createusers');
    });
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::resource('batch', 'BatchController');
    Route::resource('semester', 'SemesterController');
    Route::resource('subject', 'SubjectController');
    Route::resource('channels', 'ChannelsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('publishescategories', 'PublishesCategoriesController');
    Route::resource('tags', 'TagsController');
    Route::resource('faculty', 'FacultyController');
});
Route::resource('users', 'UsersController');
Route::resource('publishes', 'PublishesController');
Route::resource('committee', 'CommitteeController');






















Route::get('threads', 'ThreadsController@index')->name('threads');
Route::get('threads/create', 'ThreadsController@create');
Route::get('threads/search', 'SearchController@show');
Route::get('threads/{channel}/{thread}', 'ThreadsController@show');
Route::patch('threads/{channel}/{thread}', 'ThreadsController@update');
Route::delete('threads/{channel}/{thread}', 'ThreadsController@destroy');
Route::post('threads', 'ThreadsController@store')->middleware('must-be-confirmed');
Route::get('threads/{channel}', 'ThreadsController@index');

Route::post('locked-threads/{thread}', 'LockedThreadsController@store')->name('locked-threads.store')->middleware('admin');
Route::delete('locked-threads/{thread}', 'LockedThreadsController@destroy')->name('locked-threads.destroy')->middleware('admin');

Route::get('/threads/{channel}/{thread}/replies', 'RepliesController@index');
Route::post('/threads/{channel}/{thread}/replies', 'RepliesController@store');
Route::patch('/replies/{reply}', 'RepliesController@update');
Route::delete('/replies/{reply}', 'RepliesController@destroy')->name('replies.destroy');

Route::post('/replies/{reply}/best', 'BestRepliesController@store')->name('best-replies.store');

Route::post('/threads/{channel}/{thread}/subscriptions', 'ThreadSubscriptionsController@store')->middleware('auth');
Route::delete('/threads/{channel}/{thread}/subscriptions', 'ThreadSubscriptionsController@destroy')->middleware('auth');

Route::post('/replies/{reply}/favorites', 'FavoritesController@store');
Route::delete('/replies/{reply}/favorites', 'FavoritesController@destroy');

Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');
Route::get('/profiles/{user}/notifications', 'UserNotificationsController@index');
Route::delete('/profiles/{user}/notifications/{notification}', 'UserNotificationsController@destroy');


Route::get('/api/users', 'Api\UsersController@index');
Route::post('api/users/{user}/avatar', 'Api\UserAvatarController@store')->middleware('auth')->name('avatar');

Route::get('/createsym', function () {
    $output = new \Symfony\Component\Console\Output\BufferedOutput;
    Artisan::call('storage:link');
    dd($output->fetch());
});