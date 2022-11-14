@extends('layouts.formdaily')
@section('form')
    <div class="mb-3 -mx-5">
        <form action="/dailyic/store" method="POST">
            @csrf
            <label for="plan" class="form-label">Plan: </label>
            <input class="form-control" type="text" name="plan" required>
            <label for="actual" class="form-label">Actual: </label>
            <textarea class="form-control" id="actual" rows="7" name="actual" required></textarea>
            <label for="progress" class="form-label mt-3">Progress: </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="progres" id="zero" value="0" required>
                <label class="form-check-label" for="zero">
                    Tidak Terselesaikan
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="progres" id="finish" value="100" required>
                <label class="form-check-label" for="finish">
                    Terselesaikan
                </label>
            </div>

            <label for="formFile" class="form-label mt-3">Upload Dokumentasi: </label>
            <input class="form-control" type="file" id="formFile">
            <div class="d-flex justify-content-end mt-2 pt-4">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
