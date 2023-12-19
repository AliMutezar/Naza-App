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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="col-sm-6 col-md-12 d-flex justify-content-between">
                    <h4 class="fw-bold">{{ __($title) }}</h4>
                    <a href="{{ route('services.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-square-fill me-2 fs-5"></i> 
                        <span>Add Services</span>
                    </a>
                    
                </div>
            </div>
            <div class="card-body mt-3t">
                <table class="table display nowrap table-hover" style="width: 100%" id="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $service->name }}</td>

                            <td class="text-center">
                                <div class="d-flex">
                                    <a href="{{ route('services.edit', ['id' => $service->id]) }}" 
                                        class="btn ms-2 btn-outline-secondary text-decoration-none fs-edit"> Edit
                                    </a>

                                    {{-- <form action="#" method="POST"
                                        id="deleteForm{{$service->id}}">
                                        @csrf
                                        @method('DELETE')

                                        <button href="#" class="btn btn-link text-danger"
                                            onclick="confirmDelete(event, '{{$service->id}}')"><i class="bi bi-x"
                                                style="font-size: 1.2rem;"></i></button>
                                    </form> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>


@include('backoffice_includes.footer')
@endsection