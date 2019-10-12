<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        $tasks = [
            'complete task one',
            'complete task two',
            'complete task three'
        ];
        return view('welcome',[
            'tasks'=>$tasks
        ]);
        //REPLACE ABOVE WITH BELOW
        // return view('welcome')->withTasks($tasks);
    }

    public function contact(){
        return view('contact');
    }

    public function aboutUs(){
        return view('about');
    }
}
