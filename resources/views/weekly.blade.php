@extends('layouts.main')
@section('container')
    <div class="monthly place-content-center ">
        <div class="container dashboard">
            <div class="row">
                <div class="card" id="info-header">

                    <span align="justify">
                        <h1>WEEKLY TARGET</h1>
                        <p>
                            {{-- Monthly Target yang dibagi menjadi 4 bagian perencanaan agar Monthly Target dapat
                                        tercapai untuk 4 minggu --}}
                        </p>
                    </span>

                </div>
            </div>
        </div>
        <div class="container dashboard mt-3">
            <div class="row">
                <div class="card" id="info-header">
                    <div class="row mx-2">
                        <form action="weekly/store" method="POST">
                            @csrf

                            <div>
                                <label for="targetperiode" class="form-label">Periode</label>
                                <input type="date" class="form-control" id="targetperiode" name="target_start">
                                s/d
                                <input type="date" class="form-control" id="targetperiode" name="target_end">
                            </div>
                            <div>
                                <h1 class="absolute mt-2 justify-center">SELF-DEVELOPMENT</h1>
                                <div class="mb-3">
                                    <label for="weeklysd" class="form-label">Judul Rencana</label>
                                    <input type="text" class="form-control" id="weeklysd"
                                        placeholder="--Judul Rencana--" name="weeklysd">
                                </div>
                                <div class="mb-3">
                                    <label for="descweeklysd" class="form-label">Detail Rencana</label>
                                    <textarea class="form-control" id="descweeklysd" rows="4" name="descweeklysd"></textarea>
                                </div>
                            </div>
                            <div>
                                <h1 class="absolute mt-2 justify-center">BISNIS/PROFIT</h1>
                                <div class="mb-3">
                                    <label for="weeklybp" class="form-label">Judul Rencana</label>
                                    <input type="text" class="form-control" id="weeklybp"
                                        placeholder="--Judul Rencana--" name="weeklybp">
                                </div>
                                <div class="mb-3">
                                    <label for="descweeklybp" class="form-label">Detail Rencana</label>
                                    <textarea class="form-control" id="descweeklybp" rows="4" name="descweeklybp"></textarea>
                                </div>
                            </div>
                            <div>
                                <h1 class="absolute mt-2 justify-center">KELEMBAGAAN</h1>
                                <div class="mb-3">
                                    <label for="weeklykl" class="form-label">Judul Rencana</label>
                                    <input type="text" class="form-control" id="weeklykl"
                                        placeholder="--Judul Rencana--" name="weeklykl">
                                </div>
                                <div class="mb-3">
                                    <label for="descweeklykl" class="form-label">Detail Rencana</label>
                                    <textarea class="form-control" id="descweeklykl" rows="4" name="descweeklykl"></textarea>
                                </div>
                            </div>
                            <div>
                                <h1 class="absolute mt-2 justify-center">INOVASI/CREATIVITY</h1>
                                <div class="mb-3">
                                    <label for="weeklyic" class="form-label">Judul Rencana</label>
                                    <input type="text" class="form-control" id="weeklyic"
                                        placeholder="--Judul Rencana--" name="weeklyic">
                                </div>
                                <div class="mb-3">
                                    <label for="descweeklyic" class="form-label">Detail Rencana</label>
                                    <textarea class="form-control" id="descweeklyic" rows="4" name="descweeklyic"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mb-4">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
