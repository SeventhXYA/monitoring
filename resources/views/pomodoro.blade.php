@extends('layouts.main')
@section('container')
    <div class="container dashboard mt-3">
        <div class="row">
            <div class="card" id="info-header">
                <div class="row" id="content">
                    <div class="col col-12">
                        <div class="row my-3 mx-2">
                            <div class="pomodoro my-5">
                                <figure class="clock">
                                    <div class="mins">00</div>
                                    <div>:</div>
                                    <div class="secs">00</div>
                                    <audio src="sound/service-bell_daniel_simion.mp3"></audio>
                                    <svg class="progress-ring" height="120" width="120">
                                        <circle class="progress-ring__circle" stroke-width="8" fill="transparent"
                                            r="50" cx="60" cy="60" />
                                    </svg>
                                </figure>

                                <div class="btn-group">
                                    <button class="start">Start Focus</button>
                                    <button class="reset">Reset</button>
                                    <button class="pause">Pause</button>
                                </div>

                                <form action="/pomodoro/setTimer" method="POST">
                                    @csrf
                                    <label for="focusTime">Focus Time</label>
                                    <input type="number" placeholder="25" id="focusTime" />
                                    <label for="breakTime">Break Time</label>
                                    <input type="number" placeholder="5" id="breakTime" />
                                    <button type="submit" name="submit" value="Save Setting">Save settings</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/settings.js"></script>
    <script src="js/timer.js"></script>
    <script src="js/progress.js"></script>
@endsection
