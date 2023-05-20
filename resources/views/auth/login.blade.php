@extends('layouts.master')

@section('title')
    Login
@endsection


@section('content')
    <h2>Student Login</h2>

    @if (session('message'))
        <div class=" alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('auth.check') }}" method="post">

        @csrf

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
             
            class=" form-control @error('password') is-invalid @enderror" name="password">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class=" mb-3">
            <button class="btn btn-primary">Login</button>
        </div>

    </form>
@endsection
