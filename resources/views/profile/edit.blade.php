@extends('backoffice_layouts.app-mazer')
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}
@section('content')
<div class="py-12">
    <div class="container">
        <div class="row row-cols-1 g-4">
            <div class="col">
                @if (session('status') === 'profile-updated')
                    <div class="alert alert-success alert-dismissible show fade">
                        Your Profile Information Has Been Updated
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-1 g-4">
            <div class="col">
                <div class="p-4 bg-white shadow rounded">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>                  
            </div>
            <div class="col">
                @if (session('status') === 'password-updated')
                    <div class="alert alert-success alert-dismissible show fade">
                        Your Password Has Been Updated
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="col">
                <div class="p-4 bg-white shadow rounded">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="p-4 bg-white shadow rounded">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
