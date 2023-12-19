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
                        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
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
                    {{ __($title) }}
                </div>
            </div>

            <div class="card-body">
                <table class="table w-100 table-hover" id="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Service</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            @foreach ($customer->customer_services as $customerService)
                                    <td>{{ $customerService->service->name }}</td>
                                    <td>{{ $customerService->customer->name }}</td>
                                    <td>
                                        <span class="p1 badge text-{{ $customer->getCustomerStatus() }}">
                                            {{ $customer->status }}
                                        </span> 
                                    </td>
        
                                    <td class="text-center">
                                        <div class="d-flex">
                                            <a href="{{ route('customer.edit', ['id' => $customerService->id]) }}" 
                                                class="btn btn-outline-secondary text-decoration-none fs-edit">Edit
                                            </a>
        
                                            {{-- <form action="#" method="POST"
                                                id="deleteForm{{$customer->id}}">z
                                                @csrf
                                                @method('DELETE')
        
                                                <button href="#" class="btn btn-link text-danger"
                                                    onclick="confirmDelete(event, '{{$customer->id}}')"><i class="bi bi-x"
                                                        style="font-size: 1.2rem;"></i></button>
                                            </form> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>


@include('backoffice_includes.footer')
@endsection