<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// This is saying when the route reaches '/' (the homepage), run this function.
// The function is returning the view called 'home' which will display the homepage.
// The view folder can be found in the resources folder.
Route::get('/', function () {
    return view('home', [
        'greeting' => 'Wow look at this cool website',
        'name' => 'Hello Kitty',
    ]);
});

// You can also return a string
Route::get('/string', function () {
    return 'About Page';
});

// Also an array
Route::get('/array', function () {
    return ['cat' => 'bean'];
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    // dd($id);
    // dd is saying dump and kill the execution once we get the value

    // This is a shorthand of getting the jobs and ids in the jobs, without having to include 'use'
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

