<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home' );
});
Route::get('/jobs', function ()  {
    return view('jobs', ['jobs' => Job::getJobs()]);
});
Route::get('/jobs/{id}', function ($id)  {

     return view('job', ['job' => Job::findJob($id)]);
});
Route::get('/contact', function () {
    return view('contact');
});
