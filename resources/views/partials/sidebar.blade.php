<div id="sidebar-menu" class="sidebar modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn closebtn" data-bs-dismiss="modal">
                <i class="fa-sharp fa-solid fa-xmark"></i>
            </button>
            @if (auth()->user()->level == 'user')
                <div class="accordion accordion-flush mt-4" id="accordion-sidebar">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda" href="/">
                                <p>Beranda</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-mtarget">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-mtarget" aria-expanded="false"
                                aria-controls="collapse-mtarget">
                                <p>Monthly</p>
                                <i class="fa-solid fa-caret-down sidemonth"></i>
                            </button>
                        </h2>
                        <div id="collapse-mtarget" class="accordion-collapse collapse" aria-labelledby="heading-mtarget"
                            data-bs-parent="#accordion-sidebar">
                            <div class="accordion-body ">
                                <a class="child-menu" href="/monthly">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Monthly Target</h4>
                                        <h5>Tentukan target yang ingin anda capai</h5>
                                    </div>
                                </a>
                                <a class="child-menu" href="/ltt">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Long Term Target</h4>
                                        <h5>Tentukan target yang ingin anda capai</h5>
                                    </div>
                                </a>
                                <a class="child-menu" href="/monthly/history">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>History Target</h4>
                                        <h5>Riwayat target yang telah diapprove</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-weekly">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-weekly" aria-expanded="false" aria-controls="collapse-weekly">
                                <p>Weekly</p>
                                <i class="fa-solid fa-caret-down sideweek"></i>
                            </button>
                        </h2>
                        <div id="collapse-weekly" class="accordion-collapse collapse" aria-labelledby="heading-weekly"
                            data-bs-parent="#accordion-sidebar">
                            <div class="accordion-body">
                                <a class="child-menu" href="/weekly">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Weekly Plan</h4>
                                        <h5>Tentukan rencana minggu depan</h5>
                                    </div>
                                </a>
                                <a class="child-menu" href="/weekly2">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Weekly Plan 2</h4>
                                        <h5>Tentukan rencana minggu depan</h5>
                                    </div>
                                </a>
                                <a class="child-menu" href="/weeklyreport">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Weekly Report & Evaluate</h4>
                                        <h5>Laporkan kegiatan anda minggu ini</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-dplan">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-dplan" aria-expanded="false" aria-controls="collapse-dplan">
                                <p>Daily</p>
                                <i class="fa-solid fa-caret-down sideday"></i>
                            </button>
                        </h2>
                        <div id="collapse-dplan" class="accordion-collapse collapse" aria-labelledby="heading-dplan"
                            data-bs-parent="#accordion-sidebar">
                            <div class="accordion-body">
                                <a class="child-menu" href="/dailydplan">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Daily Plan</h4>
                                        <h5>Tentukan kegiatan untuk hari ini</h5>
                                    </div>
                                </a>
                                <a class="child-menu" href="/pomodoro">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Pomodoro Timer</h4>
                                        <h5>Pomodoro timer untuk mengatur waktu kerja</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-sd">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-sd" aria-expanded="false" aria-controls="collapse-sd">
                                <p>Self-Development</p>
                                <i class="fa-solid fa-caret-down sidesd"></i>
                            </button>
                        </h2>
                        <div id="collapse-sd" class="accordion-collapse collapse" aria-labelledby="heading-sd"
                            data-bs-parent="#accordion-sidebar">
                            <div class="accordion-body">
                                <a class="child-menu" href="/dailysd">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Report & Evaluate</h4>
                                        <h5>Laporkan kegiatan yang telah dilakukan</h5>
                                    </div>
                                </a>
                                <a class="child-menu" href="/dailysd/history">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>History</h4>
                                        <h5>Data history report yang pernah dibuat</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-bp">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-bp" aria-expanded="false" aria-controls="collapse-bp">
                                <p>Bisnis/Profit</p>
                                <i class="fa-solid fa-caret-down sidebp"></i>
                            </button>
                        </h2>
                        <div id="collapse-bp" class="accordion-collapse collapse" aria-labelledby="heading-bp"
                            data-bs-parent="#accordion-sidebar">
                            <div class="accordion-body">
                                <a class="child-menu" href="/dailybp">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Report & Evaluate</h4>
                                        <h5>Laporkan kegiatan yang telah dilakukan</h5>
                                    </div>
                                </a>
                                <a class="child-menu" href="/dailybp/history">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>History</h4>
                                        <h5>Data history report yang pernah dibuat</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-kl">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-kl" aria-expanded="false" aria-controls="collapse-kl">
                                <p>Kelembagaan</p>
                                <i class="fa-solid fa-caret-down sidekl"></i>
                            </button>
                        </h2>
                        <div id="collapse-kl" class="accordion-collapse collapse" aria-labelledby="heading-kl"
                            data-bs-parent="#accordion-sidebar">
                            <div class="accordion-body">
                                <a class="child-menu" href="/dailykl">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Report & Evaluate</h4>
                                        <h5>Laporkan kegiatan yang telah dilakukan</h5>
                                    </div>
                                </a>
                                <a class="child-menu" href="/dailykl/history">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>History</h4>
                                        <h5>Data history report yang pernah dibuat</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-ic">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-ic" aria-expanded="false" aria-controls="collapse-ic">
                                <p>Inovasi/Creativity</p>
                                <i class="fa-solid fa-caret-down sideic"></i>
                            </button>
                        </h2>
                        <div id="collapse-ic" class="accordion-collapse collapse" aria-labelledby="heading-ic"
                            data-bs-parent="#accordion-sidebar">
                            <div class="accordion-body">
                                <a class="child-menu" href="/dailyic">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Report & Evaluate</h4>
                                        <h5>Laporkan kegiatan yang telah dilakukan</h5>
                                    </div>
                                </a>
                                <a class="child-menu" href="/dailyic/history">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>History</h4>
                                        <h5>Data history report yang pernah dibuat</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (auth()->user()->level == 'admin')
                <div class="accordion accordion-flush mt-4" id="accordion-sidebar">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda" href="/">
                                <p>Beranda</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda" href="/">
                                <p>Monthly Target</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-weekly">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-weekly" aria-expanded="false"
                                aria-controls="collapse-weekly">
                                <p>Weekly</p>
                                <i class="fa-solid fa-caret-down sideweek"></i>
                            </button>
                        </h2>
                        <div id="collapse-weekly" class="accordion-collapse collapse"
                            aria-labelledby="heading-weekly" data-bs-parent="#accordion-sidebar">
                            <div class="accordion-body">
                                <a class="child-menu" href="/weeklyplan">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Weekly Plan</h4>
                                        {{-- <h5>Tentukan rencana minggu depan</h5> --}}
                                    </div>
                                </a>

                                <a class="child-menu" href="/">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Weekly Evaluate</h4>
                                        {{-- <h5>Evaluasi kegiatan anda minggu ini</h5> --}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-daily">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-daily" aria-expanded="false"
                                aria-controls="collapse-daily">
                                <p class="pe-auto">Daily</p>
                                <i class="fa-solid fa-caret-down sideday"></i>
                            </button>
                        </h2>
                        <div id="collapse-daily" class="accordion-collapse collapse" aria-labelledby="heading-daily"
                            data-bs-parent="#accordion-sidebar">
                            <div class="accordion-body">
                                <a class="child-menu" href="/dailysd/viewadmin">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Self-Development</h4>
                                        {{-- <h5>Tentukan rencana minggu depan</h5> --}}
                                    </div>
                                </a>
                                <a class="child-menu" href="/dailybp/viewadmin">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Bisnis/Profit</h4>
                                        {{-- <h5>Tentukan rencana minggu depan</h5> --}}
                                    </div>
                                </a>
                                <a class="child-menu" href="/dailykl/viewadmin">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Kelembagaan</h4>
                                        {{-- <h5>Tentukan rencana minggu depan</h5> --}}
                                    </div>
                                </a>
                                <a class="child-menu" href="/dailyic/viewadmin">
                                    <div class="icon-menu">
                                    </div>
                                    <div class="text-menu">
                                        <h4>Inovasi/Creativity</h4>
                                        {{-- <h5>Tentukan rencana minggu depan</h5> --}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            @endif
        </div>
    </div>
</div>
