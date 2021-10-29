<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;

class WelcomeController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('welcome', [
     		'title' => 'Our Jobs',
		    'jobs' => $jobs
        ]);
    }

}
