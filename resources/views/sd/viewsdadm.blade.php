@extends('layouts.formdaily')
@section('form')
    <div class="monthly place-content-center ">
        <div class="container dashboard">
            <div class="row">
                <div class="row pb-4">
                    <span align="justify">
                        <h2>History Target</h2>
                    </span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="mb-3 -mx-5 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="min-width: 180px;">Tanggal</th>
                                <th scope="col" style="min-width: 180px;">Nama</th>
                                <th scope="col" style="min-width: 150px;">Divisi</th>
                                <th scope="col" style="min-width: 450px;">Plan</th>
                                <th scope="col">Progres</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dailysd as $sd)
                                <tr>
                                    <td>{{ $sd->tanggal }}</td>
                                    <td>{{ $sd->user->nama }}</td>
                                    <td>{{ $sd->user->divisi->divisi }}</td>
                                    <td>{{ $sd->plan }}</td>
                                    <td>{{ $sd->progres }}</td />
                                    <td>Lihat</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
