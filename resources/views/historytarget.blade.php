@extends('layouts.main')
@section('container')
    <div class="monthly place-content-center ">
        <div class="container dashboard">
            <div class="row">
                <div class="card" id="info-header">
                    <div class="row" id="content">
                        <div class="col col-12 main-content">
                            <div class="row pb-4">
                                <span align="justify">
                                    <h2>History Target</h2>
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
                    <div class="row my-3 mx-2">
                        <div class="container">
                            <div class="-mx-6 my-4">
                                <div class="row align-items-center">
                                    <div class="col-md-3 col-sm-3 mb-3">
                                        <h3>Nama</h3>
                                        <p>{{ auth()->user()->nama }}</p>
                                    </div>
                                    <div class="col-md-3 col-sm-3 mb-3">
                                        <h3>Divisi</h3>
                                        <p>{{ auth()->user()->divisi->divisi }}</p>
                                    </div>
                                    {{-- <div class="col-md-3 col-sm-3 mb-3">
                                            <h3>Target Bulan</h3>
                                            <p>November</p>
                                        </div>
                                        <div class="col-md-3 col-sm-3 mb-3">
                                            <h3>Status</h3>
                                            <p>Rencana telah di-<i>approve</i></p>
                                        </div> --}}
                                </div>

                            </div>
                            <div class="border-1">
                                <div class="col-md-3 col-sm-3 -mt-2 mb-3">
                                    <h3>Periode</h3>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option value="1">November</option>
                                        <option value="2">Oktober</option>
                                        <option value="3">September</option>
                                    </select>
                                </div>
                                <div class="table-responsive border-1">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                {{-- <th scope="col">Tanggal</th> --}}
                                                <th scope="col">Sesi</th>
                                                <th scope="col">Judul Kegiatan</th>
                                                <th scope="col">Weekly Plan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($monthlytargetsd as $mtsd)
                                                    <th scope="row" rowspan="4">1</th>
                                                    {{-- <td rowspan="4">{{ $mtsd->tanggal }}</td> --}}
                                                    <td rowspan="4">Self-Development</td>
                                                    <td rowspan="4">{{ $mtsd->target_sd }}
                                                    </td>
                                                @endforeach
                                                <td>Weekly Plan 1</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 2</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 3</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 4</td>
                                            </tr>
                                            <tr>
                                                @foreach ($monthlytargetbp as $mtbp)
                                                    <th scope="row" rowspan="4">2</th>
                                                    {{-- <td rowspan="4">{{ $mtbp->tanggal }}</td> --}}
                                                    <td rowspan="4">Bisnis/Profit</td>
                                                    <td rowspan="4">{{ $mtbp->target_bp }}
                                                    </td>
                                                @endforeach
                                                <td>Weekly Plan 1</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 2</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 3</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 4</td>
                                            </tr>
                                            <tr>
                                                @foreach ($monthlytargetkl as $mtkl)
                                                    <th scope="row" rowspan="4">3</th>
                                                    {{-- <td rowspan="4">{{ $mtkl->tanggal }}</td> --}}
                                                    <td rowspan="4">Kelembagaan</td>
                                                    <td rowspan="4">{{ $mtkl->target_kl }}
                                                    </td>
                                                @endforeach
                                                <td>Weekly Plan 1</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 2</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 3</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 4</td>
                                            </tr>
                                            <tr>
                                                @foreach ($monthlytargetic as $mtic)
                                                    <th scope="row" rowspan="4">4</th>
                                                    {{-- <td rowspan="4">{{ $mtic->tanggal }}</td> --}}
                                                    <td rowspan="4">Inovasi/Creativity</td>
                                                    <td rowspan="4">{{ $mtic->target_ic }}
                                                    </td>
                                                @endforeach
                                                <td>Weekly Plan 1</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 2</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 3</td>
                                            </tr>
                                            <tr>
                                                <td>Weekly Plan 4</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <button type="button" class="btn btn-primary mt-2">
                                    Kirim
                                </button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
