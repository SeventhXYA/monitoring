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
                                <th scope="col" style="min-width: 450px;">Target</th>
                                <th scope="col">Progres</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($monthlytargetsd as $tsd)
                                <tr>
                                    <td>{{ $tsd->tanggal }}</td>
                                    <td>{{ $tsd->plan }}</td>
                                    <td>{{ $tsd->progres }}</td>
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
