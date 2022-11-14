<?php

namespace App\Http\Controllers;

use App\Models\Dailykl;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DailyKlController extends Controller
{
    public function create()
    {
        $user = User::all();
        return view('kl.dailykl', [
            "title" => "Daily Report Kelembagaan",
            "sesi" => "KELEMBAGAAN"
        ], compact('user'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan' => 'required',
            'actual' => 'required',
            'progres' => 'required|numeric'
        ]);
        $dailykl = new Dailykl;
        $dailykl->plan = $validated_data['plan'];
        $dailykl->actual = $validated_data['actual'];
        $dailykl->progres = $validated_data['progres'];

        Auth::user()->dailykl()->save($dailykl);
        return redirect('/');
    }
    public function history()
    {
        $dailykl = Dailykl::where('user_id', Auth::user()->id)->get();
        return view('kl.historykl', [
            "title" => "History Report Kelembagaan",
            "sesi" => "KELEMBAGAAN"
        ], compact('dailykl'));
    }
    public function admview()
    {
        $dailykl = Dailykl::all();
        return view('kl.viewkladm', [
            "title" => "Daily Report Kelembagaan",
            "sesi" => "KELEMBAGAAN"
        ], compact('dailykl'));
    }
}
