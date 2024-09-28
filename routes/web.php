<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

$jobs = [
    [
        'id' => '1',
        'title' => 'Director',
        'salary' => '$50,000'
    ],
    [
        'id' => '2',
        'title' => 'Programmer',
        'salary' => '$10,000'
    ],
    [
        'id' => '3',
        'title' => 'Teacher',
        'salary' => '$40,000'
    ]
];

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Larry'
    ]);
});


Route::get('/about', function () {
    return view('about');
});


//Route::get('/jobs', function () use ($jobs) {
//    return view('jobs', [
//        'jobs' => $jobs
//    ]);
//});

Route::get('/jobs', function ()  {
//    $jobs = Job::with("employer")->cursorPaginate(3);
    $jobs = Job::with("employer")->simplePaginate(5);
//    $jobs = Job::with("employer")->paginate(3);
//    $jobs = Job::with("employer")->get();
    return view('jobs', [
        'jobs' => $jobs
    ]);
});
//Route::get('/jobs/{id}', function ($id) {
//    dd($id);
//    return view('contact');
//});

Route::get('/jobs/{id}', function ($id) use ($jobs) {

    $job = Job::find($id);
//    return view('job', ['job' => $job]);
//    dd($job);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {

//    $jobs = Job::all();
//    dd($jobs[2]);
//    dd($jobs[2]->title);
    return view('contact');
});
