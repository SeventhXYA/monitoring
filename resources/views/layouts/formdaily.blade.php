@extends('layouts.main')
@section('container')
    <div class="container dashboard">
        <div class="row">
            <div class="card" id="info-header">
                <div id="content">
                    <div class="col col-12 col-lg-6 main-content">
                        <div class="row">
                            {{-- <h2>Selamat Datang, Satria!</h2> --}}
                            <span align="justify">
                                <h2>{{ $sesi }}</h2>
                                {{-- <p>Isikan laporan kegiatanmu pada hari ini untuk sesi <b>{{ $sesi }}</b></p> --}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container dashboard mt-3">
        <div class="row">
            <div class="card" id="info-header">
                <div class="row" id="content">
                    @yield('form')
                </div>
            </div>
        </div>
    </div>
@endsection
