<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;

class WelcomeController extends Controller
{
    public function index()
    {
    return view('welcome');
    }


}
