<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Weeklysd;
use App\Models\Weeklybp;
use App\Models\Weeklykl;
use App\Models\Weeklyic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WeeklyController extends Controller
{
    public function create()
    {
        $user = User::all();
        return view('weeklyplan', [
            "title" => "Weekly Plan"
        ], compact('user'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'plan_week_1_sd' => 'required',
            'desc_week_1_sd' => 'required',
            'plan_week_2_sd' => 'required',
            'desc_week_2_sd' => 'required',
            'plan_week_3_sd' => 'required',
            'desc_week_3_sd' => 'required',
            'plan_week_4_sd' => 'required',
            'desc_week_4_sd' => 'required',
            'plan_week_1_bp' => 'required',
            'desc_week_1_bp' => 'required',
            'plan_week_2_bp' => 'required',
            'desc_week_2_bp' => 'required',
            'plan_week_3_bp' => 'required',
            'desc_week_3_bp' => 'required',
            'plan_week_4_bp' => 'required',
            'desc_week_4_bp' => 'required',
            'plan_week_1_kl' => 'required',
            'desc_week_1_kl' => 'required',
            'plan_week_2_kl' => 'required',
            'desc_week_2_kl' => 'required',
            'plan_week_3_kl' => 'required',
            'desc_week_3_kl' => 'required',
            'plan_week_4_kl' => 'required',
            'desc_week_4_kl' => 'required',
            'plan_week_1_ic' => 'required',
            'desc_week_1_ic' => 'required',
            'plan_week_2_ic' => 'required',
            'desc_week_2_ic' => 'required',
            'plan_week_3_ic' => 'required',
            'desc_week_3_ic' => 'required',
            'plan_week_4_ic' => 'required',
            'desc_week_4_ic' => 'required',
        ]);
        $weeklysd = new Weeklysd();
        $weeklysd->plan_week_1_sd = $validated_data['plan_week_1_sd'];
        $weeklysd->desc_week_1_sd = $validated_data['desc_week_1_sd'];
        $weeklysd->plan_week_2_sd = $validated_data['plan_week_2_sd'];
        $weeklysd->desc_week_2_sd = $validated_data['desc_week_2_sd'];
        $weeklysd->plan_week_3_sd = $validated_data['plan_week_3_sd'];
        $weeklysd->desc_week_3_sd = $validated_data['desc_week_3_sd'];
        $weeklysd->plan_week_4_sd = $validated_data['plan_week_4_sd'];
        $weeklysd->desc_week_4_sd = $validated_data['desc_week_4_sd'];

        $weeklybp = new Weeklybp();
        $weeklybp->plan_week_1_bp = $validated_data['plan_week_1_bp'];
        $weeklybp->desc_week_1_bp = $validated_data['desc_week_1_bp'];
        $weeklybp->plan_week_2_bp = $validated_data['plan_week_2_bp'];
        $weeklybp->desc_week_2_bp = $validated_data['desc_week_2_bp'];
        $weeklybp->plan_week_3_bp = $validated_data['plan_week_3_bp'];
        $weeklybp->desc_week_3_bp = $validated_data['desc_week_3_bp'];
        $weeklybp->plan_week_4_bp = $validated_data['plan_week_4_bp'];
        $weeklybp->desc_week_4_bp = $validated_data['desc_week_4_bp'];

        $weeklykl = new Weeklykl();
        $weeklykl->plan_week_1_kl = $validated_data['plan_week_1_kl'];
        $weeklykl->desc_week_1_kl = $validated_data['desc_week_1_kl'];
        $weeklykl->plan_week_2_kl = $validated_data['plan_week_2_kl'];
        $weeklykl->desc_week_2_kl = $validated_data['desc_week_2_kl'];
        $weeklykl->plan_week_3_kl = $validated_data['plan_week_3_kl'];
        $weeklykl->desc_week_3_kl = $validated_data['desc_week_3_kl'];
        $weeklykl->plan_week_4_kl = $validated_data['plan_week_4_kl'];
        $weeklykl->desc_week_4_kl = $validated_data['desc_week_4_kl'];

        $weeklyic = new Weeklyic();
        $weeklyic->plan_week_1_ic = $validated_data['plan_week_1_ic'];
        $weeklyic->desc_week_1_ic = $validated_data['desc_week_1_ic'];
        $weeklyic->plan_week_2_ic = $validated_data['plan_week_2_ic'];
        $weeklyic->desc_week_2_ic = $validated_data['desc_week_2_ic'];
        $weeklyic->plan_week_3_ic = $validated_data['plan_week_3_ic'];
        $weeklyic->desc_week_3_ic = $validated_data['desc_week_3_ic'];
        $weeklyic->plan_week_4_ic = $validated_data['plan_week_4_ic'];
        $weeklyic->desc_week_4_ic = $validated_data['desc_week_4_ic'];

        Auth::user()->weeklysd()->save($weeklysd);
        Auth::user()->weeklybp()->save($weeklybp);
        Auth::user()->weeklykl()->save($weeklykl);
        Auth::user()->weeklyic()->save($weeklyic);


        return redirect('/');
    }
    public function history()
    {
        $weeklysd = Weeklysd::where('user_id', Auth::user()->id)->whereBetween('create_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $weeklybp = Weeklybp::where('user_id', Auth::user()->id)->whereBetween('create_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $weeklykl = Weeklykl::where('user_id', Auth::user()->id)->whereBetween('create_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $weeklyic = Weeklyic::where('user_id', Auth::user()->id)->whereBetween('create_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();

        return view('historyweekly', [
            "title" => "History Weekly Plan",
        ], compact('weeklysd', 'weeklybp', 'weeklykl', 'weeklyic'));
    }
}
