<?php

use App\Http\Controllers\AboutBlogDetailsController;
use App\Http\Controllers\AboutFifthController;
use App\Http\Controllers\AboutFirstController;
use App\Http\Controllers\AboutFourthController;
use App\Http\Controllers\AboutsecondController;
use App\Http\Controllers\AboutThirdController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\GenarelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeProjectController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SliderDetailController;
use App\Http\Controllers\StoryBlogController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\TeamController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/about/details/{id}', [HomeController::class, 'aboutBlogDetails'])->name('about_blog_details');
Route::get('/our-team', [HomeController::class, 'team'])->name('ourteam');
Route::get('/our-projects', [HomeController::class, 'ourProjects'])->name('our_projects');
Route::get('/our-story', [HomeController::class, 'ourStory'])->name('our_story');
Route::get('/story/details/{id}', [HomeController::class, 'StoryBlogDetails'])->name('story_blog_details');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact_us');
Route::get('/test', [HomeController::class, 'test'])->name('test');
Route::get('/slider/details/{id}', [HomeController::class, 'sliderDetails'])->name('sliderDetails');
Route::get('/service', [HomeController::class, 'service'])->name('fontend-service');
Route::resource('contact', ContactController::class);
Route::middleware('client')->group(function(){
    Route::get('profile',[HomeController::class, 'profile'])->name('profile');
} );

// backend Route Start here
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/users', [DashboardController::class, 'users'])->name('users');
Route::get('/user/details/{id}', [DashboardController::class, 'userDetails'])->name('user_details');
Route::resource('team', TeamController::class);
Route::resource('slider', SliderController::class);
Route::resource('faq', FaqController::class);
Route::resource('project', ProjectController::class);
Route::post('/personal/info', [InformationController::class, 'your_info'])->name('your_info');
Route::post('/father/info', [InformationController::class, 'father_info'])->name('father_info');
Route::post('/about/info', [InformationController::class, 'mother_info'])->name('mother_info');
Route::get('/info/create', [InformationController::class, 'create'])->name('info.create');
// home page
Route::get('/home/sencond/left/edit', [FontendController::class, 'editHomeSecondLeft'])->name('home_second_left.edit');
Route::put('/home/sencond/left/update/{id}', [FontendController::class, 'updateHomeSecondLeft'])->name('home_second_left.update');
Route::get('/home/sencond/right/edit', [FontendController::class, 'editHomeSecondRight'])->name('home_second_right.edit');
Route::get('/home/sencond/right/add', [FontendController::class, 'addHomeSecondRight'])->name('home_second_right.add');
Route::post('/home/sencond/right/store', [FontendController::class, 'storeHomeSecondRight'])->name('home_second_right.store');
Route::get('/home/sencond/right/edit/{id}', [FontendController::class, 'editHomeSecondRight'])->name('home_second_right.edit');
Route::put('/home/sencond/right/update/{id}', [FontendController::class, 'updateHomeSecondRight'])->name('home_second_right.update');
Route::delete('/home/sencond/right/delete/{id}', [FontendController::class, 'deleteHomeSecondRight'])->name('home_second_right.delete');
Route::get('/after/ccd/edit', [FontendController::class, 'editAfterCcd'])->name('after_ccd.edit');
Route::put('/after/ccd/update/{id}', [FontendController::class, 'updateAfterCcd'])->name('after_ccd.update');
Route::get('next/after/ccd/edit', [FontendController::class, 'nextEditAfterCcd'])->name('next_after_ccd.edit');
Route::put('next/after/ccd/update/{id}', [FontendController::class, 'nextUpdateAfterCcd'])->name('next_after_ccd.update');
// home project
Route::resource('projects', HomeProjectController::class);
Route::resource('slider-details', SliderDetailController::class, [ 'except' => [ 'index','show','create' ] ]);
Route::get('slider-details/create/{slider_id}', [SliderDetailController::class,'create'])->name('slider-details.create');
// About Page
Route::resource('about-first', AboutFirstController::class, [ 'except' => ['show' ]]);
Route::resource('about-blog-details', AboutBlogDetailsController::class, [ 'except' => ['show','index','create' ]]);
Route::get('about-blog-details/create/{blog_id}', [AboutBlogDetailsController::class,'create'])->name('about-blog-details.create');
Route::get('about-second', [AboutsecondController::class,'edit'])->name('about-second.edit');
Route::put('about-second/update', [AboutsecondController::class,'update'])->name('about-second.update');
Route::resource('about-third', AboutThirdController::class, [ 'except' => ['show' ]]);
Route::get('about-fourth', [AboutFourthController::class,'edit'])->name('about-fourth.edit');
Route::put('about-fourth/update', [AboutFourthController::class,'update'])->name('about-fourth.update');
Route::resource('about-fifth', AboutFifthController::class, [ 'except' => ['show' ]]);
// Service
Route::get('service-first', [ServiceController::class,'firstEdit'])->name('service-first.edit');
Route::put('service-first/update', [ServiceController::class,'firstUpdate'])->name('service-first.update');
Route::get('service-second', [ServiceController::class,'SecondIndex'])->name('service-second.index');
Route::get('service-second/create', [ServiceController::class,'SecondCreate'])->name('service-second.create');
Route::post('service-second/store', [ServiceController::class,'SecondStore'])->name('service-second.store');
Route::get('service-second/edit/{id}', [ServiceController::class,'SecondEdit'])->name('service-second.edit');
Route::put('service-second/update/{id}', [ServiceController::class,'SecondUpdate'])->name('service-second.update');
Route::delete('service-second/destroy/{id}', [ServiceController::class,'SecondDestroy'])->name('service-second.destroy');
// story
Route::get('story', [StoryController::class,'firstIndex'])->name('story-first.index');
Route::get('story/edit/{id}', [StoryController::class,'firstEdit'])->name('story-first.edit');
Route::put('story-first/update//{id}', [storyController::class,'firstUpdate'])->name('story-first.update');
Route::get('story-second', [storyController::class,'SecondIndex'])->name('story-second.index');
Route::get('story-second/create', [storyController::class,'SecondCreate'])->name('story-second.create');
Route::post('story-second/store', [storyController::class,'SecondStore'])->name('story-second.store');
Route::get('story-second/edit/{id}', [storyController::class,'SecondEdit'])->name('story-second.edit');
Route::put('story-second/update/{id}', [storyController::class,'SecondUpdate'])->name('story-second.update');
Route::delete('story-second/destroy/{id}', [storyController::class,'SecondDestroy'])->name('story-second.destroy');
Route::resource('story-blog-details', StoryBlogController::class, [ 'except' => ['show','index','create' ]]);
Route::get('story-blog-details/create/{blog_id}', [StoryBlogController::class,'create'])->name('story-blog-details.create');
// Genarel Settings
Route::get('information', [GenarelController::class,'index'])->name('genarel_info.index');
Route::get('information/edit/{id}', [GenarelController::class,'edit'])->name('genarel_info.edit');
Route::put('information/update/{id}', [GenarelController::class,'update'])->name('genarel_info.update');
