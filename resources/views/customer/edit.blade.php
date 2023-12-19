@extends('backoffice_layouts.app-mazer')
@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="page-title">
        <div class="row mb-3">
            <div class="col-12 col-md-6 order-md-1 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('customer.data') }}">List Potencial Customer</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1">
                                <h4 class="card-title">{{ $title }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
        
                        <div class="card-body">
                            @if (isset($record))
                            <?php $button_name = 'Update'; ?>
                            <form class="form" action="{{ route('customer.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                            @endif
                                <div class="row">
                                    <div class="col-md-6 col-12 mt-3">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Name of Customer</label>
                                            <input type="text" @disabled(true)
                                                class="form-control form-control-lg @error('name') is-invalid @enderror" name="customer_id" value="{{ $record->customer->name ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mt-3">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Name of Service</label>
                                            <input type="text" @disabled(true)
                                                class="form-control form-control-lg @error('name') is-invalid @enderror" name="service_id" value="{{ $record->service->name ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mt-3">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Customer Phone</label>
                                            <input type="text" @disabled(true)
                                                class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" value="{{ $record->customer->phone ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mt-3">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Customer Mail</label>
                                            <input type="text" @disabled(true)
                                                class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $record->customer->email ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Customer Message</label>
                                            <textarea name="message" @disabled(true) class="form-control" cols="30" rows="10">{{ $record->customer->message ?? '' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mt-3">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Customer Status</label>
                                            <select name="status" class="form-select">
                                                <option value="" selected></option>
                                                @foreach($statusOptions as $key => $value)
                                                    <option value="{{ $key }}" {{ old('status', $record->customer->status) == $key ? 'selected' : '' }}>
                                                        {{ $value }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <!-- Debugging output -->
                                            {{-- @php
                                            dd($record->status, $statusOptions);
                                            @endphp --}}
                                            
                                            @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 d-grid gap-2 mt-3 d-md-block">
                                        <button type="submit" class="btn btn-primary me-1">{{ $button_name }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@include('backoffice_includes.footer')
@endsection