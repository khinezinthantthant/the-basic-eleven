@extends('layouts.master')

@section('title')
    Dashboard Home
@endsection


@section('content')
    <h2>I'm Dashboard Home</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eveniet accusantium dolores deserunt ad dignissimos numquam nostrum, reiciendis laboriosam aut.</p>

    <div class=" alert alert-info">
        {{ session('auth')->name }}
    </div>

    <form action="{{ route('auth.logout') }}" method="post">
        @csrf
        <button class="btn btn-primary">Logout</button>
    </form>
@endsection
