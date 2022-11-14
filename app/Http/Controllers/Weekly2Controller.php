<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Weekly;
// use App\Models\Periodeweekly;
// use App\Models\Weeklysd;
// use App\Models\Weeklybp;
// use App\Models\Weeklykl;
// use App\Models\Weeklyic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Weekly2Controller extends Controller
{
    public function create()
    {
        $user = User::all();
        return view('weekly', [
            "title" => "Weekly Plan"
        ], compact('user'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'target_start' => 'required',
            'target_end' => 'required',
            'weeklysd' => 'required',
            'descweeklysd' => 'required',
            'weeklybp' => 'required',
            'descweeklybp' => 'required',
            'weeklykl' => 'required',
            'descweeklykl' => 'required',
            'weeklyic' => 'required',
            'descweeklyic' => 'required',
        ]);

        $weekly = new Weekly();
        $weekly->target_start = $validated_data['target_start'];
        $weekly->target_end = $validated_data['target_end'];
        $weekly->weeklysd = $validated_data['weeklysd'];
        $weekly->descweeklysd = $validated_data['descweeklysd'];
        $weekly->weeklybp = $validated_data['weeklybp'];
        $weekly->descweeklybp = $validated_data['descweeklybp'];
        $weekly->weeklykl = $validated_data['weeklykl'];
        $weekly->descweeklykl = $validated_data['descweeklykl'];
        $weekly->weeklyic = $validated_data['weeklyic'];
        $weekly->descweeklyic = $validated_data['descweeklyic'];

        Auth::user()->weekly()->save($weekly);

        return redirect('/');
    }
    public function history()
    {
        $weekly = Weekly::where('user_id', Auth::user()->id)->whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        // $weeklysd = Weeklysd::where('user_id', Auth::user()->id)->whereBetween('create_at', [
        //     Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        // ])->get();
        // $weeklybp = Weeklybp::where('user_id', Auth::user()->id)->whereBetween('create_at', [
        //     Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        // ])->get();
        // $weeklykl = Weeklykl::where('user_id', Auth::user()->id)->whereBetween('create_at', [
        //     Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        // ])->get();
        // $weeklyic = Weeklyic::where('user_id', Auth::user()->id)->whereBetween('create_at', [
        //     Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        // ])->get();

        return view('historyweekly', [
            "title" => "History Weekly Plan",
        ], compact('weekly'));
    }
}
