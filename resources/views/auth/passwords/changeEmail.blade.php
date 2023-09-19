@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-8">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change Email with Current Email</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('change.email') }}">
                        @csrf

                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach

                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Current Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="current_email" value="{{auth()->user()->email}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">New Email</label>

                            <div class="col-md-6">
                                <input id="new_email" type="email" class="form-control" name="new_email" value="{{old('new_email')}}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">New Confirm Email</label>

                            <div class="col-md-6">
                                <input id="new_confirm_email" type="email" class="form-control" name="new_confirm_email" value="{{old('new_confirm_email')}}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary bg-primary">
                                    Update Email
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
