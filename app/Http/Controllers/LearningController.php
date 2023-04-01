<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function viewForm(){
        return view('rest_api_test');
    }

    public function viewRecords(){
        return view('view_records');
    }
}
