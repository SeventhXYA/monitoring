<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PomodoroController extends Controller
{
    public function pomodoro(){
        return view('pomodoro',[
            "title" => "Pomodoro"
        ]);
    }

    public function setTimer(Request $request){

        dd($request->except(['_token','submit']));
        // Pomodoro::pomodoro($request->except(['_token','submit']));
    }


}
