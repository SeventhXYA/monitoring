<?php

namespace App\Http\Controllers;

use App\Models\Dailysd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailySdController extends Controller
{
    public function create()
    {
        $user = User::all();
        return view('sd.dailysd', [
            "title" => "History Report Self-Development",
            "sesi" => "SELF-DEVELOPMENT"
        ], compact('user'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progres' => 'required|numeric'
        ]);
        $dailysd = new Dailysd;
        $dailysd->plan = $validated_data['plan'];
        $dailysd->actual = $validated_data['actual'];
        $dailysd->progres = $validated_data['progres'];

        Auth::user()->dailysd()->save($dailysd);
        // Dailysd::create($request->except(['_token', 'submit']));
        return redirect('/');
    }
    public function history()
    {
        $dailysd = Dailysd::where('user_id', Auth::user()->id)->get();
        return view('sd.historysd', [
            "title" => "History Report Self-Development",
            "sesi" => "SELF-DEVELOPMENT"
        ], compact('dailysd'));
    }
    public function admview()
    {
        $dailysd = Dailysd::all();
        return view('sd.viewsdadm', [
            "title" => "Daily Report Self-Development",
            "sesi" => "SELF-DEVELOPMENT"
        ], compact('dailysd'));
    }
}
