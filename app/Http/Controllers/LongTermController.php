<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Monthlytargetsd;
use App\Models\Monthlytargetbp;
use App\Models\Monthlytargetkl;
use App\Models\Monthlytargetic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LongTermController extends Controller
{
    public function create()
    {
        $user = User::all();
        return view('longtermtarget', [
            "title" => "Long Term Target"
        ], compact('user'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'target_sd' => 'required',
            'deskripsi_sd' => 'required',
            'target_bp' => 'required',
            'deskripsi_bp' => 'required',
            'target_kl' => 'required',
            'deskripsi_kl' => 'required',
            'target_ic' => 'required',
            'deskripsi_ic' => 'required'
        ]);
        $monthlytargetsd = new Monthlytargetsd();
        $monthlytargetsd->target_sd = $validated_data['target_sd'];
        $monthlytargetsd->deskripsi_sd = $validated_data['deskripsi_sd'];

        $monthlytargetbp = new Monthlytargetbp();
        $monthlytargetbp->target_bp = $validated_data['target_bp'];
        $monthlytargetbp->deskripsi_bp = $validated_data['deskripsi_bp'];

        $monthlytargetkl = new Monthlytargetkl();
        $monthlytargetkl->target_kl = $validated_data['target_kl'];
        $monthlytargetkl->deskripsi_kl = $validated_data['deskripsi_kl'];

        $monthlytargetic = new Monthlytargetic();
        $monthlytargetic->target_ic = $validated_data['target_ic'];
        $monthlytargetic->deskripsi_ic = $validated_data['deskripsi_ic'];


        Auth::user()->monthlytargetsd()->save($monthlytargetsd);
        Auth::user()->monthlytargetbp()->save($monthlytargetbp);
        Auth::user()->monthlytargetkl()->save($monthlytargetkl);
        Auth::user()->monthlytargetic()->save($monthlytargetic);


        return redirect('/');
    }
    public function history()
    {
        $monthlytargetsd = Monthlytargetsd::where('user_id', Auth::user()->id)->whereBetween('tanggal', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $monthlytargetbp = Monthlytargetbp::where('user_id', Auth::user()->id)->whereBetween('tanggal', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $monthlytargetkl = Monthlytargetkl::where('user_id', Auth::user()->id)->whereBetween('tanggal', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();
        $monthlytargetic = Monthlytargetic::where('user_id', Auth::user()->id)->whereBetween('tanggal', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->get();

        return view('historytarget', [
            "title" => "History Target",
        ], compact('monthlytargetsd', 'monthlytargetbp', 'monthlytargetkl', 'monthlytargetic'));
    }
}
