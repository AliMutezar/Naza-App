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
                        <li class="breadcrumb-item"><a href="{{ route('services.data') }}">List Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Service</li>
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
                                <h4 class="card-title">Add New Service</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
        
                        <div class="card-body">
                            @if (isset($record))
                            <?php $button_name = 'Update'; ?>
                            <form class="form" action="{{ route('services.update', $record->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                            @else
                            <?php $button_name = 'Create'; ?>
                            <form class="form" action="{{ route('services.store') }}" method="POST">
                                @csrf
                            @endif
                                <div class="row">
                                    <div class="col-md-6 col-12 mt-3">
                                        <div class="form-group">
                                            <label for="name" class="mb-2">Name of Services</label>
                                            <input type="text"
                                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                placeholder="Write your service name here" name="name" value="{{ old('name') ?? $record->name ?? '' }}">

                                            @error('name')
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