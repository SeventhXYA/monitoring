<nav class="navbar" id="header">
    <div class="container">
        <div class="left">
            <div class="button-helper">
                <button class="header-menu-mobile" data-bs-toggle="modal" data-bs-target="#sidebar-menu">
                    <i class="fa-sharp fa-solid fa-bars" style="color: #ffffff;"></i>
                </button>
            </div>
            <div class="img-helper">
                <img src="{{ asset('/') }}img/arutmin.png" alt="" />
            </div>
            <div id="title">
                <h1>KOPERASI BINA USAHA PERMATA</h1>
                {{-- <h4>Monitoring Tim Unit Bisnis</h4> --}}
            </div>
        </div>
        <div id="header-mainmenu">
            <div class="dropdown dim" id="notif">
                <div class="modal fade" id="menu-notif" tabindex="-1" aria-hidden="true">
                    <div id="notif-dialog" class="modal-dialog">
                        <div id="notif-content" class="modal-content">
                            <button type="button" class="btn closebtn" data-bs-dismiss="modal">
                                {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/header/close.svg"
                                    alt=""> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown dim" id="menu">
                <div class="modal fade" id="menu-menu" tabindex="-1" aria-hidden="true">
                    <div id="menu-dialog" class="modal-dialog">
                        <div id="menu-content" class="modal-content">
                            <button type="button" class="btn closebtn" data-bs-dismiss="modal">
                                {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/header/close.svg"
                                    alt=""> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown dim" id="profile">
                <button class="dropdown-toggle" id="toggle-profile" role="button" data-bs-toggle="modal"
                    data-bs-target="#menu-profile">
                    <div class="profile-img no-photo">
                        <div class="helper" style="background-color:#4a3e44">
                            <img src="{{ asset('/') }}img/user.png" alt="">
                        </div>
                    </div>
                </button>
                <div class="modal fade" id="menu-profile" tabindex="-1" aria-hidden="true">
                    <div id="profile-dialog" class="modal-dialog">
                        <div id="profile-content" class="modal-content"><button type="button" class="btn closebtn"
                                data-bs-dismiss="modal">
                                <i class="fa-sharp fa-solid fa-xmark navcls"></i>
                            </button>
                            <div class="scroll-wrapper">
                                <div class="header">
                                    <div class="profile">
                                        <div class="profile-img no-photo">
                                            <div class="helper" style="background-color:#4a3e44">
                                                <img src="{{ asset('/') }}img/user.png" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <h4 style="text-transform: uppercase">{{ auth()->user()->nama }}</h4>
                                            <a href="#" target="_blank">Lihat Profil
                                                <i class="fa-solid fa-arrow-right" style="color: #010f87;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @if (auth()->user()->level == 'user')
                                    <ul class="menu-group">
                                        <li class="menu-item"><a href="/dailyrecord">Rekap Harian</a></li>
                                        <li class="menu-item"><a href="/weekly/history">Rekap Mingguan</a></li>
                                        <li class="menu-item"><a href="#">Rekap Bulanan</a></li>
                                    </ul>
                                @endif
                                <div class="footer">
                                    <div class="menu-footer">
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="logout" id="logout">
                                                <i class="fa-solid fa-right-from-bracket"
                                                    style="color: rgb(182, 0, 0);"></i>
                                                Keluar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-xl" id="menu">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/siakad/home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/siakad/home">Monthly Target</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Weekly
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown-menu" onmouseleave="noThirdLevel(this)">
                        <div class="wrapper">
                            <h5 class="sub-menu">DI ISI SETIAP HARI JUM'AT</h5>
                            <ul class="item-wrapper">
                                <li class="three-level">
                                    <a class="dropdown-item" href="/siakad/set_krsmhs"
                                        onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/pengisian_krs.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Weekly Plan</h4>
                                            <h5>Tentukan rencana minggu depan</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="three-level">
                                    <a class="dropdown-item" href="/siakad/set_krs"
                                        onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/kartu_rencana_studi.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Weekly Report</h4>
                                            <h5>Laporkan kegiatan anda minggu ini</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="three-level">
                                    <a class="dropdown-item" href="/siakad/list_mengulang"
                                        onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/mengulang.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Weekly Evaluate</h4>
                                            <h5>Evaluasi kegiatan anda minggu ini</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="third-level-container"></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/siakad/home">Daily Plan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Self-Development
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown-menu" onmouseleave="noThirdLevel(this)">
                        <div class="wrapper">
                            <h5 class="sub-menu">DI ISI SETIAP HARI</h5>
                            <ul class="item-wrapper">
                                <li class="three-level">
                                    <a class="dropdown-item" href="/dailysd" onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/kartu_rencana_studi.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Daily Report</h4>
                                            <h5>Laporkan kegiatan anda hari ini</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="three-level">
                                    <a class="dropdown-item" href="/siakad/list_mengulang"
                                        onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/mengulang.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Daily Evaluate</h4>
                                            <h5>Evaluasi kegiatan anda hari ini</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="third-level-container"></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Bisnis / Profit
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown-menu" onmouseleave="noThirdLevel(this)">
                        <div class="wrapper">
                            <h5 class="sub-menu">DI ISI SETIAP HARI</h5>
                            <ul class="item-wrapper">
                                <li class="three-level">
                                    <a class="dropdown-item" href="/dailybp" onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/kartu_rencana_studi.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Daily Report</h4>
                                            <h5>Laporkan kegiatan anda hari ini</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="three-level">
                                    <a class="dropdown-item" href="/siakad/list_mengulang"
                                        onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/mengulang.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Daily Evaluate</h4>
                                            <h5>Evaluasi kegiatan anda hari ini</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="third-level-container"></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Kelembagaan
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown-menu" onmouseleave="noThirdLevel(this)">
                        <div class="wrapper">
                            <h5 class="sub-menu">DI ISI SETIAP HARI</h5>
                            <ul class="item-wrapper">
                                <li class="three-level">
                                    <a class="dropdown-item" href="/dailykl" onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/kartu_rencana_studi.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Daily Report</h4>
                                            <h5>Laporkan kegiatan anda hari ini</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="three-level">
                                    <a class="dropdown-item" href="/siakad/list_mengulang"
                                        onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/mengulang.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Daily Evaluate</h4>
                                            <h5>Evaluasi kegiatan anda hari ini</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="third-level-container"></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Inovasi / Creativity
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown-menu" onmouseleave="noThirdLevel(this)">
                        <div class="wrapper">
                            <h5 class="sub-menu">DI ISI SETIAP HARI</h5>
                            <ul class="item-wrapper">
                                <li class="three-level">
                                    <a class="dropdown-item" href="/dailyic" onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/kartu_rencana_studi.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Daily Report</h4>
                                            <h5>Laporkan kegiatan anda hari ini</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="three-level">
                                    <a class="dropdown-item" href="/siakad/list_mengulang"
                                        onmouseenter="noThirdLevel(this)">
                                        <div class="icon-menu">
                                            {{-- <img src="https://assets.siakadcloud.com/assets/v1/v2/icon/menu/mengulang.svg"
                                                alt=""> --}}
                                        </div>
                                        <div class="text-menu">
                                            <h4>Daily Evaluate</h4>
                                            <h5>Evaluasi kegiatan anda hari ini</h5>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="third-level-container"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
