<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index(){

        // Prepare the view for the list of questions
        return $view = view('questions/index');
    }

    public function show(){
        return 'This is a detail of a question';
    }

}

    