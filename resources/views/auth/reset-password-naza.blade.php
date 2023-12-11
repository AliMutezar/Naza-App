@extends('layouts.guest-naza')
@section('content')
<div class="card-body shadow p-3 bg-body-tertiary rounded">
    <x-auth-session-status class="mb-4" :status="session('status')" />
     <form method="post" action="{{ route('password.store') }}">
         @csrf

         {{-- Password Reset Token --}}
         <input type="hidden" name="token" value="{{ $request->route('token') }}">

         <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
         </div>

         <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
         </div>

         <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        
        <div class="d-flex justify-content-end mt-4">
            <x-primary-button>
                {{ __('Email Password Link') }}
            </x-primary-button>
        </div>
 </div>
@endsection