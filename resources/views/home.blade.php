
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::check() ? 'Dashboard' : 'Welcome' }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @auth
                        <div class="alert alert-success">
                            <h4 class="alert-heading">Welcome, {{ Auth::user()->name }}!</h4>
                            <p>You are successfully logged in to the system.</p>
                            @if(Auth::user()->role === 'admin')
                                <p class="mb-0">You are logged in as Administrator</p>
                            @elseif(Auth::user()->role === 'petugas')
                                <p class="mb-0">You are logged in as Petugas</p>
                            @else
                                <p class="mb-0">You are logged in as User</p>
                            @endif
                        </div>

                        <div class="text-center mt-3">
                            <p>Last login: {{ Auth::user()->updated_at->diffForHumans() }}</p>
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </div>
                    @else
                        <div class="alert alert-warning">
                            <h4 class="alert-heading">You are not logged in!</h4>
                            <p>Please login or register to access the system.</p>
                        </div>

                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection