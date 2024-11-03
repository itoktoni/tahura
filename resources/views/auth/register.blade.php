@extends('layouts.auth')

@section('content')

<form class="form-detail login" method="POST" action="{{ route('register') }}">
    @csrf

    <h2 class="logo">
        <img class="logo"
        src="{{ env('APP_LOGO') ? url('storage/' . env('APP_LOGO')) : url('assets/media/image/logo.png') }}">
    </h2>

    <h3>{{ __('Register Form') }}</h3>

    <div class="form-full">
        <div class="form-wrapper">
            <label for="">{{ __('Your Full Name') }} *</label>
            <input type="text" class="form-control" value="{{ old('name') }}"  name="name" placeholder="input your name">
            @error('name')
            <span class="error error-top">* {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-full">
        <div class="form-wrapper">
            <label for="">{{ __('Email Address') }} *</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Input your email">
            @error('email')
            <span class="error error-top">* {{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="form-row">
        <div class="form-wrapper">
            <label for="">{{ __('Password') }} *</label>
            <input type="password" class="form-control" name="password" placeholder="input your password">
        </div>

        <div class="form-wrapper">
            <label for="">{{ __('Confirm Password') }} *</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="confirmation password">
            @error('password')
            <span class="error">* {{ $message }}</span>
            @enderror
        </div>
    </div>


    <div class="form-row form-button">
        <div class="form-wrapper">
        </div>

        <div class="form-wrapper">
            <button class="button" type="submit" data-text="Submit">
                <span>{{ __('Register') }}</span>
            </button>
        </div>

    </div>

</form>

@endsection