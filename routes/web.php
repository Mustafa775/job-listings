<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' );
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
            'title' => 'Teacher',
            'salary' => '$80,000'
        ],
        [
            'id' => '2',
            'title' => 'Programmer',
            'salary' => '$100,000'
        ]
            ]
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
            [
                'id' => '1',
                'title' => 'Teacher',
                'salary' => '$80,000'
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '$100,000'
            ],[
                'id' => '3',
            'title' => 'Doctor',
            'salary' => '$123,000'
        ]
    ];
        return view('jobs');
});
Route::get('/contact', function () {
    return view('contact');
});
