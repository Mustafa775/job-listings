<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function getJobs() : array {
        return [
            [
                'id' => 1,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$100,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$200,000'
            ]
        ];
    }
    public static function findJob(int $id) : array      {
        //return Arr::first(Job::getJobs(), fn($job) => $job['id'] == $id );
        // we changed "Job::all()" to "static:all()" cuz' we're already within the same class

        $job = Arr::first(static::getJobs(), fn($job) => $job['id'] == $id );

        if ( ! $job ){
            abort(404, 'Job not found buddy');
        }

       return $job;
    }
}
