@extends('layouts.master')

@section('title')
    Register
@endsection


@section('content')
    <h2>Register Page</h2>
    <hr>

    <form action="{{ route('auth.store') }}" method="post">

        @csrf
        <div class="form-group mb-3">
            <label class=" form-label">Your Name</label>
            <input type="text"
             value="{{ old('name') }}"
            class=" form-control @error('name') is-invalid @enderror" name="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class=" form-label">Email</label>
            <input type="email"
             value="{{ old('email') }}"
            class=" form-control @error('email') is-invalid @enderror" name="email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class=" form-label">Password</label>
            <input type="password"
             value="{{ old('password') }}"
            class=" form-control @error('password') is-invalid @enderror" name="password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class=" form-label">Password</label>
            <input type="password"
             value="{{ old('password_confirmation') }}"
            class=" form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class=" mb-3">
            <button class="btn btn-primary">Register</button>
        </div>

    </form>
@endsection
