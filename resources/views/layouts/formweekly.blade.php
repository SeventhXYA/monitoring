@extends('layouts.main')
@section('container')
    <div class="container dashboard">
        <div class="row">
            <div class="card" id="info-header">
                <div class="row" id="content">
                    <div class="col col-12 col-lg-6 main-content">
                        <div class="row pb-4">
                            {{-- <h2>Selamat Datang, Satria!</h2> --}}
                            <span align="justify">
                                <h2>WEEKLY REPORT</h2>
                                <p>Laporkan hasil kerja kamu selama 1 minggu ini</p>
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
                    <div class="col col-12 col-lg-6 main-content" id="left">
                        <div class="row my-3 mx-2">
                            <div class="container">
                                <div class="table-responsive">
                                    @yield('formweekly')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
