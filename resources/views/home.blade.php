@extends('layouts.main')
@section('container')
    <div class="container dashboard">
        <div class="row">
            <div class="card" id="info-header">
                <div class="row" id="content">
                    <div class="col col-12">
                        <div class="row pb-4">
                            @if (auth()->user()->level == 'admin')
                                <h2>Selamat Datang, <b style="text-transform: uppercase">Admin</b>!</h2>
                            @endif

                            @if (auth()->user()->level == 'user')
                                <h2>Selamat Datang, <b style="text-transform: uppercase"> {{ auth()->user()->nama }}! </b>
                                </h2>
                                <p>Kamu memiliki 3 rencana yang belum terpenuhi bulan ini. Silahkan cek <b>disini</b> untuk
                                    lebih lanjut</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
