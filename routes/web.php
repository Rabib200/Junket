<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TourGroupController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\TourPlanController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SearchController;

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
/*-----common_routes------*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/blogs',[BlogController::class, 'index']);
Route::post('/search', [SearchController::class, 'search']);
Route::get('/feed',[FeedController::class, 'index']);
Route::get('blog/details/{id}',[BlogController::class, 'details']);
Route::get('tour/plans',[TourController::class, 'index']);
Route::get('upcomming/tour/plans',[TourController::class, 'upcomming']);
Route::get('feed/details/{id}',[FeedController::class, 'details']);
Route::get('tour/groups',[TourController::class, 'groups']);
Route::get('tours/details/{id}',[TourController::class, 'runningPlanDetails']);
Route::get('upcomming/tours/details/{id}',[TourController::class, 'upcommingPlanDetails']);

/*-----common_routes ends------*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::post('running/tour/comment/create',[CommentController::class,'runningCommentCreate'])->middleware(['auth']);
Route::post('upcomming/tour/comment/create',[CommentController::class,'upcommingCommentCreate'])->middleware(['auth']);
Route::get('book/plan/{id}',[BookingController::class,'checkout'])->middleware(['auth']);
Route::post('booking/confirm',[BookingController::class,'booking'])->middleware(['auth']);
Route::get('download/invoice/{id}',[BookingController::class,'invoice'])->middleware(['auth']);

/*----------Admin_routes_start----------*/
Route::prefix('admin')->group(function(){

    Route::get('/login',[AdminController::class, 'index']);
    Route::get('/register',[AdminController::class, 'register']);
    Route::post('/register/create',[AdminController::class, 'registerCreate']);
    Route::post('/login/owner',[AdminController::class, 'login']);
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->middleware('admin');
    Route::get('/logout',[AdminController::class, 'logout'])->middleware('admin');

    Route::get('/blog_list',[AdminController::class, 'get_blog_list'])->middleware('admin');
    Route::get('/blogEdit/{id}',[BlogController::class, 'blogEdit'])->middleware('admin');
    Route::post('/blog/update/{id}',[BlogController::class, 'blogUpdate'])->middleware('admin');
    Route::get('/blog/delete/{id}',[BlogController::class, 'blogDelete'])->middleware('admin');
    Route::get('/blog/status/{id}',[BlogController::class, 'blogStatus'])->middleware('admin');
    Route::get('/blog/search',[BlogController::class, 'blogSearch'])->middleware('admin');

    Route::get('/feed_list',[AdminController::class, 'get_feed_list'])->middleware('admin');
    Route::get('/feedEdit/{id}',[FeedController::class, 'feedEdit'])->middleware('admin');
    Route::post('/feed/update/{id}',[FeedController::class, 'feedUpdate'])->middleware('admin');
    Route::get('/feed/delete/{id}',[FeedController::class, 'feedDelete'])->middleware('admin');
    Route::get('/feed/status/{id}',[FeedController::class, 'feedStatus'])->middleware('admin');
    Route::get('/feed/search',[FeedController::class, 'feedSearch'])->middleware('admin');

    Route::get('/running_list',[AdminController::class, 'get_running_list'])->middleware('admin');
    Route::get('/runningPlanEdit/{id}',[AdminController::class, 'runningPlanEdit'])->middleware('admin');
    Route::post('/runningPlan/update/{id}',[AdminController::class, 'runningPlanUpdate'])->middleware('admin');
    Route::get('/runningPlan/delete/{id}',[AdminController::class, 'runningPlanDelete'])->middleware('admin');
    Route::get('/runningPlan/status/{id}',[AdminController::class, 'runningPlanStatus'])->middleware('admin');
    Route::get('/runningPlan/search',[AdminController::class, 'runningPlanSearch'])->middleware('admin');

    Route::get('/upcoming_list',[AdminController::class, 'get_upcoming_list'])->middleware('admin');
    Route::get('/upcomingPlanEdit/{id}',[AdminController::class, 'upcomingPlanEdit'])->middleware('admin');
    Route::post('/upcomingPlan/update/{id}',[AdminController::class, 'upcomingPlanUpdate'])->middleware('admin');
    Route::get('/upcomingPlan/delete/{id}',[AdminController::class, 'upcomingPlanDelete'])->middleware('admin');
    Route::get('/upcomingPlan/status/{id}',[AdminController::class, 'upcomingPlanStatus'])->middleware('admin');
    Route::get('/upcomingPlan/search',[AdminController::class, 'upcomingPlanSearch'])->middleware('admin');




});

/*----------Admin_routes_end----------*/

/*----------TourGroup_routes_start----------*/
Route::prefix('group')->group(function(){
    Route::get('/login',[TourGroupController::class, 'index']);
    Route::get('/register',[TourGroupController::class, 'register']);
    Route::post('/register/create',[TourGroupController::class, 'registerCreate']);
    Route::post('/login/owner',[TourGroupController::class, 'login']);
    Route::get('/dashboard',[TourGroupController::class, 'dashboard'])->middleware('group');
    Route::get('/logout',[TourGroupController::class, 'logout'])->middleware('group');
    Route::get('/blog/add',[BlogController::class, 'add'])->middleware('group');
    Route::post('/blog/create',[BlogController::class, 'create'])->middleware('group');
    Route::get('/feed/add',[FeedController::class, 'add'])->middleware('group');
    Route::post('/feed/create',[FeedController::class, 'create'])->middleware('group');
    Route::get('/running/plan/add',[TourPlanController::class, 'addRunningPlan'])->middleware('group');
    Route::post('/running/plan/create',[TourPlanController::class, 'RunningPlanCreate'])->middleware('group');
    Route::get('/upcomming/plan/add',[TourPlanController::class, 'addUpcommingPlan'])->middleware('group');
    Route::post('/upcomming/plan/create',[TourPlanController::class, 'UpcommingPlanCreate'])->middleware('group');
    Route::get('/feed/list/{group_name}',[TourGroupController::class, 'feedDetails'])->middleware('group');
    Route::get('/feedEdit/{id}',[TourGroupController::class, 'feedEdit'])->middleware('group');
    Route::post('/feed/update/{id}',[TourGroupController::class, 'feedUpdate'])->middleware('group');
    Route::get('/feed/delete/{id}',[TourGroupController::class, 'feedDelete'])->middleware('group');
    Route::get('/feed/search',[FeedController::class, 'feedSearch']);
    Route::get('/blog/list/{group_name}',[TourGroupController::class, 'blogDetails'])->middleware('group');
    Route::get('/blogEdit/{id}',[TourGroupController::class, 'blogEdit'])->middleware('group');
    Route::post('/blog/update/{id}',[TourGroupController::class, 'blogUpdate'])->middleware('group');
    Route::get('/blog/delete/{id}',[TourGroupController::class, 'blogDelete'])->middleware('group');
    Route::get('/blog/search',[TourGroupController::class, 'blogSearch'])->middleware('group');
    Route::get('/feed/search',[TourGroupController::class, 'feedSearch'])->middleware('group');


    Route::get('/running/plan/add',[TourPlanController::class, 'addRunningPlan'])->middleware('group');
    Route::post('/running/plan/create',[TourPlanController::class, 'RunningPlanCreate'])->middleware('group');
    Route::get('/upcomming/plan/add',[TourPlanController::class, 'addUpcommingPlan'])->middleware('group');
    Route::post('/upcomming/plan/create',[TourPlanController::class, 'UpcommingPlanCreate'])->middleware('group');


    Route::get('/running_list',[TourGroupController::class, 'get_running_list'])->middleware('group');
    Route::get('/runningPlanEdit/{id}',[TourGroupController::class, 'runningPlanEdit'])->middleware('group');
    Route::post('/runningPlan/update/{id}',[TourGroupController::class, 'runningPlanUpdate'])->middleware('group');
    Route::get('/runningPlan/delete/{id}',[TourGroupController::class, 'runningPlanDelete'])->middleware('group');
    Route::get('/runningPlan/status/{id}',[TourGroupController::class, 'runningPlanStatus'])->middleware('group');
    Route::get('/runningPlan/search',[TourGroupController::class, 'runningPlanSearch'])->middleware('group');


    Route::get('/upcoming_list',[TourGroupController::class, 'get_upcoming_list'])->middleware('group');
    Route::get('/upcomingPlanEdit/{id}',[TourGroupController::class, 'upcomingPlanEdit'])->middleware('group');
    Route::post('/upcomingPlan/update/{id}',[TourGroupController::class, 'upcomingPlanUpdate'])->middleware('group');
    Route::get('/upcomingPlan/delete/{id}',[TourGroupController::class, 'upcomingPlanDelete'])->middleware('group');
    Route::get('/upcomingPlan/status/{id}',[TourGroupController::class, 'upcomingPlanStatus'])->middleware('group');
    Route::get('/upcomingPlan/search',[TourGroupController::class, 'upcomingPlanSearch'])->middleware('group');

});

/*----------TourGroup_routes_end----------*/

require __DIR__.'/auth.php';