@extends('layouts.guest-naza')
@section('content')
<div class="card-body shadow p-3 bg-body-tertiary rounded">

    <div class="mb-4 text-secondary">
        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form method="post" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required autofocus autocomplete="username">
            
            <div class="mt-2">
                @error('email')
                   <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <x-primary-button>
                {{ __('Email Password Link') }}
            </x-primary-button>
        </div>
    </form>
</div>
@endsection