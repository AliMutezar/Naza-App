@extends('layouts.guest-naza')
@section('content')
    <div class="card-body shadow p-3 bg-body-tertiary rounded">
        <div class="mb-4 text-secondary">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>
    
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-success">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
    
        <div class="mt-4 d-flex align-items-center justify-content-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
    
                <div>
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </div>
            </form>
    
            <form method="POST" action="{{ route('logout') }}">
                @csrf
    
                <button type="submit" class="btn btn-light">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
    @endsection