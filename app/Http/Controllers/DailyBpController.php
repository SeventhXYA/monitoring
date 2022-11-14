<?php

namespace App\Http\Controllers;

use App\Models\Dailybp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailyBpController extends Controller
{
    public function create()
    {
        $user = User::all();
        return view('bp.dailybp', [
            "title" => "Daily Report Bisnis/Profit",
            "sesi" => "BISNIS/PROFIT"
        ], compact('user'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progres' => 'required|numeric'
        ]);
        $dailybp = new Dailybp;
        $dailybp->plan = $validated_data['plan'];
        $dailybp->actual = $validated_data['actual'];
        $dailybp->progres = $validated_data['progres'];

        Auth::user()->dailybp()->save($dailybp);
        return redirect('/');
    }
    public function history()
    {
        $dailybp = Dailybp::where('user_id', Auth::user()->id)->get();
        return view('bp.historybp', [
            "title" => "History Report Bisnis/Profit",
            "sesi" => "BISNIS/PROFIT"
        ], compact('dailybp'));
    }
    public function admview()
    {
        $dailybp = Dailybp::all();
        return view('bp.viewbpadm', [
            "title" => "Daily Report Bisnis/Profit",
            "sesi" => "BISNIS/PROFIT"
        ], compact('dailybp'));
    }
}
