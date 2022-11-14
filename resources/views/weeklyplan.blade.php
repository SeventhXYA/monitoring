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
                                    <h2>WEEKLY PLAN</h2>
                                    <p>
                                        Monthly Target yang dibagi menjadi 4 bagian perencanaan agar Monthly Target dapat
                                        tercapai untuk 4 minggu
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
                    <div class="row mx-2">
                        {{-- <ul class="list-group -mx-5 my-4 "> --}}
                        {{-- <li class="list-group-item my-2 -mx-5 border-1"> --}}
                        <h1 class="absolute mt-2 justify-center">SELF-DEVELOPMENT</h1>
                        {{-- <div class="py-4">
                                    <h2 class="mb-2">
                                        Monthly Target:
                                    </h2>
                                    @foreach ($monthlytargetsd as $mtsd)
                                        <input type="text" class="form-control" id="selfdevelopment"
                                            placeholder="Tujuan bulan ini dari database"
                                            disabled>{{ $mtsd->target_sd }}</input>
                                    @endforeach
                                </div> --}}
                        <h2 class="mb-2">
                            Weekly Plan:
                        </h2>
                        <div class="mb-3">
                            <label for="selfdevelopment" class="form-label">
                                Minggu ke-1:
                            </label>
                            <input type="text" class="form-control" id="selfdevelopment" name="plan_week_1_sd"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="selfdevelopment" rows="3" name="desc_week_1_sd"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="selfdevelopment" class="form-label">
                                Minggu ke-2:
                            </label>
                            <input type="text" class="form-control" id="selfdevelopment" name="plan_week_2_sd"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="selfdevelopment" rows="3" name="desc_week_2_sd"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="selfdevelopment" class="form-label">
                                Minggu ke-3:
                            </label>
                            <input type="text" class="form-control" id="selfdevelopment" name="plan_week_3_sd"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="selfdevelopment" rows="3" name="desc_week_3_sd"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="selfdevelopment" class="form-label">
                                Minggu ke-4:
                            </label>
                            <input type="text" class="form-control" id="selfdevelopment" name="plan_week_4_sd"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="selfdevelopment" rows="3" name="desc_week_4_sd"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>

                        {{-- </li> --}}
                        {{-- <li class="list-group-item my-2 -mx-5 border-1"> --}}
                        <h1 class="absolute mt-2 justify-center">BISNIS/PROFIT</h1>
                        {{-- <div class="py-4">
                                    <h2 class="mb-2">
                                        Monthly Target:
                                    </h2>
                                    @foreach ($monthlytargetbp as $mtbp)
                                        <input type="text" class="form-control" id="selfdevelopment"
                                            placeholder="Tujuan bulan ini dari database"
                                            disabled>{{ $mtbp->target_bp }}</input>
                                    @endforeach

                                </div> --}}
                        <h2 class="mb-2">
                            Weekly Plan:
                        </h2>
                        <div class="mb-3">
                            <label for="bisnisprofit" class="form-label">
                                Minggu ke-1:
                            </label>
                            <input type="text" class="form-control" id="bisnisprofit" name="plan_week_1_bp"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="bisnisprofit" rows="3" name="desc_week_1_bp"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="bisnisprofit" class="form-label">
                                Minggu ke-2:
                            </label>
                            <input type="text" class="form-control" id="bisnisprofit" name="plan_week_2_bp"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="bisnisprofit" rows="3" name="desc_week_2_bp"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="bisnisprofit" class="form-label">
                                Minggu ke-3:
                            </label>
                            <input type="text" class="form-control" id="bisnisprofit" name="plan_week_3_bp"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="bisnisprofit" rows="3" name="desc_week_3_bp"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="bisnisprofit" class="form-label">
                                Minggu ke-4:
                            </label>
                            <input type="text" class="form-control" id="bisnisprofit" name="plan_week_4_bp"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="bisnisprofit" rows="3" name="desc_week_4_bp"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>

                        {{-- </li>
                        <li class="list-group-item my-2 -mx-5 border-1"> --}}
                        <h1 class="absolute mt-2 justify-center">KELEMBAGAAN</h1>
                        {{-- <div class="py-4">
                                    <h2 class="mb-2">
                                        Monthly Target:
                                    </h2>
                                    @foreach ($monthlytargetkl as $mtkl)
                                        <input type="text" class="form-control" id="selfdevelopment"
                                            placeholder="Tujuan bulan ini dari database"
                                            disabled>{{ $mtkl->target_kl }}</input>
                                    @endforeach
                                </div> --}}
                        <h2 class="mb-2">
                            Weekly Plan:
                        </h2>
                        <div class="mb-3">
                            <label for="kelembagaan" class="form-label">
                                Minggu ke-1:
                            </label>
                            <input type="text" class="form-control" id="kelembagaan" name="plan_week_1_kl"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="kelembagaan" rows="3" name="desc_week_1_kl"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kelembagaan" class="form-label">
                                Minggu ke-2:
                            </label>
                            <input type="text" class="form-control" id="kelembagaan" name="plan_week_2_kl"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="kelembagaan" rows="3" name="desc_week_2_kl"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kelembagaan" class="form-label">
                                Minggu ke-3:
                            </label>
                            <input type="text" class="form-control" id="kelembagaan" name="plan_week_3_kl"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="kelembagaan" rows="3" name="desc_week_3_kl"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kelembagaan" class="form-label">
                                Minggu ke-4:
                            </label>
                            <input type="text" class="form-control" id="kelembagaan" name="plan_week_4_kl"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="kelembagaan" rows="3" name="desc_week_4_kl"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>

                        {{-- </li>
                        <li class="list-group-item my-2 -mx-5 border-1"> --}}
                        <h1 class="absolute mt-2 justify-center">INOVASI/CREATIVITY</h1>
                        {{-- <div class="py-4">
                                    <h2 class="mb-2">
                                        Monthly Target:
                                    </h2>
                                    @foreach ($monthlytargetic as $mtic)
                                        <input type="text" class="form-control" id="selfdevelopment"
                                            placeholder="Tujuan bulan ini dari database"
                                            disabled>{{ $mtic->target_ic }}</input>
                                    @endforeach
                                </div> --}}
                        <h2 class="mb-2">
                            Weekly Plan:
                        </h2>
                        <div class="mb-3">
                            <label for="inovasicreativity" class="form-label">
                                Minggu ke-1:
                            </label>
                            <input type="text" class="form-control" id="inovasicreativity" name="plan_week_1_ic"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="inovasicreativity" rows="3" name="desc_week_1_ic"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inovasicreativity" class="form-label">
                                Minggu ke-2:
                            </label>
                            <input type="text" class="form-control" id="inovasicreativity" name="plan_week_2_ic"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="inovasicreativity" rows="3" name="desc_week_2_ic"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inovasicreativity" class="form-label">
                                Minggu ke-3:
                            </label>
                            <input type="text" class="form-control" id="inovasicreativity" name="plan_week_3_ic"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="inovasicreativity" rows="3" name="desc_week_3_ic"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inovasicreativity" class="form-label">
                                Minggu ke-4:
                            </label>
                            <input type="text" class="form-control" id="inovasicreativity" name="plan_week_4_ic"
                                placeholder="judul rencana" />
                            <textarea class="form-control" id="inovasicreativity" rows="3" name="desc_week_4_ic"
                                placeholder="deskripsikan dengan jelas rencana yang akan dilakukan"></textarea>
                        </div>

                        {{-- </li>
                        </ul> --}}
                        <button type="button" class="btn btn-primary mb-4">
                            Simpan
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
