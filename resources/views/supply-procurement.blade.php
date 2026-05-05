@extends('layouts.app')

@section('title', 'Supply & Procurement | SA Business Solutions Group')
@section('page_title', 'Supply & Procurement')
@section('page_subtitle', 'Agile Supply Chain & Sourcing')

@section('content')
    @include('partials.page_header')

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('img/home-office.png') }}" class="img-fluid rounded" alt="Supply Chain">
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Efficiency in Every Link</h2>
                        <p>Our procurement solutions are designed for agility, ensuring that your organization has access to the resources it needs, exactly when it needs them.</p>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="ti-check-box text-warning mr-2"></i> Strategic Sourcing</li>
                        <li class="mb-3"><i class="ti-check-box text-warning mr-2"></i> Vendor Management</li>
                        <li class="mb-3"><i class="ti-check-box text-warning mr-2"></i> Logistics Optimization</li>
                        <li class="mb-3"><i class="ti-check-box text-warning mr-2"></i> Public Sector Procurement Compliance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact')
@endsection
