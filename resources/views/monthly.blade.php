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
                                    <h2>MONTHLY TARGET</h2>
                                    <p>
                                        Isikan tujuan yang ingin kamu capai untuk bulan ini.
                                        Setelah tujuan kamu di validasi oleh admin, tujuan kamu
                                        tidak bisa diganti kecuali kamu melakukan konsultasi
                                        terlebih dahulu dan menjelaskan apa masalahmu
                                    </p>
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
                                <div class="col-md-3 col-sm-3 mb-3">
                                    <h3>Target Bulan</h3>
                                    <p>November</p>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <h3>Status</h3>
                                    <p>Rencana belum dikirimkan</p>
                                </div>
                            </div>
                        </div>
                        <form action="/monthly/store" method="POST">
                            @csrf
                            <ul class="list-group -mx-n5 my-4">
                                <li class="list-group-item border-1">
                                    <h2 class="my-2">SELF-DEVELOPMENT</h2>
                                    <div class="mb-3">
                                        <label for="selfdevelopment" class="form-label">
                                            Judul kegiatan:
                                        </label>
                                        <input type="text" class="form-control" id="selfdevelopment"
                                            placeholder="Tujuan bulan ini" name="target_sd" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="sddesc" class="form-label">
                                            Deskripsikan secara lengkap dan jelas:
                                        </label>
                                        <textarea class="form-control" id="sddesc" rows="3" name="deskripsi_sd"></textarea>
                                    </div>
                                </li>
                                <li class="list-group-item my-2 border-1">
                                    <h2 class="my-2">BISNIS/PROFIT</h2>
                                    <div class="mb-3">
                                        <label for="bisnisprofit" class="form-label">
                                            Judul kegiatan:
                                        </label>
                                        <input type="text" class="form-control" id="bisnisprofit"
                                            placeholder="Tujuan bulan ini" name="target_bp" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="bpdesc" class="form-label">
                                            Deskripsikan secara lengkap dan jelas:
                                        </label>
                                        <textarea class="form-control" id="bpdesc" rows="3" name="deskripsi_bp"></textarea>
                                    </div>
                                </li>
                                <li class="list-group-item my-2 border-1">
                                    <h2 class="my-2">KELEMBAGAAN</h2>
                                    <div class="mb-3">
                                        <label for="kelembagaan" class="form-label">
                                            Judul kegiatan:
                                        </label>
                                        <input type="text" class="form-control" id="kelembagaan"
                                            placeholder="Tujuan bulan ini" name="target_kl" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="kldesc" class="form-label">
                                            Deskripsikan secara lengkap dan jelas:
                                        </label>
                                        <textarea class="form-control" id="kldesc" rows="3" name="deskripsi_kl"></textarea>
                                    </div>
                                </li>
                                <li class="list-group-item my-2 border-1">
                                    <h2 class="my-2">INOVASI/CREATIVITY</h2>
                                    <div class="mb-3">
                                        <label for="inovasicreativity" class="form-label">
                                            Judul kegiatan:
                                        </label>
                                        <input type="text" class="form-control" id="inovasicreativity"
                                            placeholder="Tujuan bulan ini" name="target_ic" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="icdesc" class="form-label">
                                            Deskripsikan secara lengkap dan jelas:
                                        </label>
                                        <textarea class="form-control" id="icdesc" rows="3" name="deskripsi_ic"></textarea>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-end mt-2 pt-4">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                            {{-- <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mt-2" href="/monthlyapp">
                                    Kirim
                                </button>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
