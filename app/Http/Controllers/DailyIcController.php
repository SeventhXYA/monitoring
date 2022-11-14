<?php

namespace App\Http\Controllers;

use App\Models\Dailyic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailyIcController extends Controller
{
    public function create()
    {
        $user = User::all();
        return view('ic.dailyic', [
            "title" => "Daily Report Inovasi/Creativity",
            "sesi" => "INOVASI/CREATIVITY"
        ], compact('user'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progres' => 'required|numeric'
        ]);
        $dailyic = new Dailyic;
        $dailyic->plan = $validated_data['plan'];
        $dailyic->actual = $validated_data['actual'];
        $dailyic->progres = $validated_data['progres'];

        Auth::user()->dailyic()->save($dailyic);
        return redirect('/');
    }
    public function history()
    {
        $dailyic = Dailyic::where('user_id', Auth::user()->id)->get();
        return view('ic.historyic', [
            "title" => "History Report Inovasi/Creativity",
            "sesi" => "INOVASI/CREATIVITY"
        ], compact('dailyic'));
    }
    public function admview()
    {
        $dailyic = Dailyic::all();
        return view('ic.viewicadm', [
            "title" => "Daily Report Inovasi/Creativity",
            "sesi" => "INOVASI/CREATIVITY"
        ], compact('dailyic'));
    }
}
