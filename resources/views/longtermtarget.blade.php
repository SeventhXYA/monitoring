@extends('layouts.main')
@section('container')
    <div class="monthly place-content-center ">
        <div class="container dashboard">
            <div class="row">
                <div class="card" id="info-header">
                    <div class="row" id="content">
                        <div class="col col-12 main-content">
                            <div class="row">
                                <span align="justify">
                                    <h2>LONG TERM TARGET</h2>
                                    <p>
                                        Isikan tujuan yang ingin kamu capai untuk jangka panjang.
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
                    <div class="row" id="content">
                        <div class="col col-12 main-content">
                            <div class="row align-items-center">
                                <div class="col-md-3 col-sm-3 mb-3">
                                    <h3>Nama</h3>
                                    <p>{{ auth()->user()->nama }}</p>
                                </div>
                                <div class="col-md-3 col-sm-3 mb-3">
                                    <h3>Divisi</h3>
                                    <p>{{ auth()->user()->divisi->divisi }}</p>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <h3>Status</h3>
                                    <p>Rencana belum dikirimkan</p>
                                </div>
                            </div>
                        </div>
                        <form action="/monthly/store" method="POST">
                            @csrf
                            {{-- <h2 class="my-2">SELF-DEVELOPMENT</h2> --}}
                            <div class="mb-3">
                                <label for="selfdevelopment" class="form-label">
                                    Sesi:
                                </label>
                                <select class="form-select" name="sesi">
                                    <option selected hidden>-</option>
                                    <option value="SD">SD - Self-Development</option>
                                    <option value="BP">BP - Bisnis/Profit</option>
                                    <option value="KL">KL - Kelembagaan</option>
                                    <option value="IC">IC - Inovasi/Creativity</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="longtermtarget" class="form-label">
                                    Judul Target:
                                </label>
                                <input type="text" class="form-control" id="longtermtarget"
                                    placeholder="target yang ingin dicapai" name="target" />
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">
                                    Deskripsikan secara lengkap dan jelas:
                                </label>
                                <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="benefit" class="form-label">
                                    Manfaat:
                                </label>
                                <textarea class="form-control" id="benefit" rows="3" name="benefit"></textarea>
                            </div>
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
