<?php

use App\Models\Topic;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostIndexController;
use App\Http\Controllers\PostStoreController;
use App\Http\Controllers\PostDestroyController;

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


Route::get('/courses/{course}/topics', function (Course $course, Request $request){

    return view('courses.topics', [

        'topics' => Topic::get(),
        'course' => $course
    ]);
    
});


