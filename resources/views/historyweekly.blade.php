@extends('layouts.main')

@section('container')
    <div class="container dashboard">
        <div class="row">
            <div class="card" id="info-header">
                <div class="row" id="content">
                    <div class="col col-12">
                        <div class="row">
                            @if (auth()->user()->level == 'admin')
                                <h2>Selamat Datang, <b style="text-transform: uppercase">Admin</b>!</h2>
                            @endif

                            @if (auth()->user()->level == 'user')
                                <h2>WEEKLY TARGET HISTORY</h2>
                                {{-- <p>Kamu memiliki 3 rencana yang belum terpenuhi bulan ini. Silahkan cek <b>disini</b> untuk
                                    lebih lanjut</p> --}}
                                <h2>Nama: {{ auth()->user()->nama }}</h2>
                                <h2>Divisi: {{ auth()->user()->divisi->divisi }}</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($weekly as $wk)
        <div class="container dashboard mt-3">
            <div class="row">
                <div class="card" id="info-header">
                    <div class="row mx-2">

                        <h4 class="mt-3">Periode: {{ $wk->target_start }} s/d {{ $wk->target_end }}</h4>
                        <div class="my-3">
                            <h2>SELF-DEVELOPMENT</h2>
                            <h3>Target Minggu Ini: </h3>
                            <p> {{ $wk->weeklysd }} </p>
                            <h3>Detail Target: </h3>
                            <p> {{ $wk->descweeklysd }} </p>
                        </div>
                        <div class="mb-3">
                            <h2>BISNIS/PROFIT</h2>
                            <h3>Target Minggu Ini: </h3>
                            <p> {{ $wk->weeklybp }} </p>
                            <h3>Detail Target: </h3>
                            <p> {{ $wk->descweeklybp }} </p>
                        </div>
                        <div>
                            <h2>KELEMBAGAAN</h2>
                            <h3>Target Minggu Ini: </h3>
                            <p>{{ $wk->weeklykl }}</p>
                            <h3>Detail Target: </h3>
                            <p>{{ $wk->descweeklykl }}</p>
                        </div>
                        <div class="my-3">
                            <h2>INOVASI/CREATIVITY</h2>
                            <h3>Target Minggu Ini: </h3>
                            <p>{{ $wk->weeklyic }} </p>
                            <h3>Detail Target: </h3>
                            <p> {{ $wk->descweeklyic }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
