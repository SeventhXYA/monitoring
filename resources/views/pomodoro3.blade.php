@extends('layouts.main')
@section('container')
    <div class="container dashboard mt-3">
        <div class="row">
            <div class="card" id="info-header">
                <div class="row" id="content">
                    <div class="col col-12" id="left">
                        <div class="row my-3 mx-2">
                            <div class="container pomodoro">
                                <div class="painel">
                                    <p id="work">work</p>
                                    <p id="break">break</p>
                                </div>

                                <div class="timer">
                                    <div class="circle">
                                        <div class="time">
                                            <p id="minutes"></p>
                                            <p>:</p>
                                            <p id="seconds"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="controls">
                                    <button id="start" onclick="start()"><i class="fa-solid fa-play"></i></button>
                                    <a id="reset" href="/pomodoro"><i class="fa-solid fa-arrow-rotate-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
