@extends('layouts.app')

@section('title', 'Workforce Solutions | SABS Group')
@section('page_title', 'Workforce Solutions')
@section('page_subtitle', 'Expert Talent Acquisition & Staffing')

@section('content')
    @include('partials.page_header')

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Driving Growth Through Human Capital</h2>
                        <p>Workforce solutions is our strongest revenue driver, built on a foundation of deep industry knowledge and a relentless pursuit of the right fit.</p>
                    </div>
                    <p>We provide comprehensive staffing and recruitment services across multiple domains, ensuring that your organization has the talent it needs to thrive in a competitive landscape.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('img/team-image.jpg') }}" class="img-fluid rounded" alt="Workforce">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box p-5" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; height: 100%;">
                        <i class="ti-desktop mb-3" style="font-size: 2.5rem; color: #FFAE00;"></i>
                        <h4>IT Staffing</h4>
                        <p>Contract, C2H, and FTE roles. From developers to system architects, we find the technical talent you need.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box p-5" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; height: 100%;">
                        <i class="ti-user mb-3" style="font-size: 2.5rem; color: #FFAE00;"></i>
                        <h4>Executive Search</h4>
                        <p>Leadership hiring for Director, VP, and C-level roles. We identify visionaries for your organization.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box p-5" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; height: 100%;">
                        <i class="ti-shield mb-3" style="font-size: 2.5rem; color: #FFAE00;"></i>
                        <h4>Government Staffing</h4>
                        <p>Dedicated support for State, County, and Federal agencies with compliant and vetted talent.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box p-5" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; height: 100%;">
                        <i class="ti-layers mb-3" style="font-size: 2.5rem; color: #FFAE00;"></i>
                        <h4>High-Volume Hiring</h4>
                        <p>Scaling your workforce rapidly with program-based hiring solutions for large-scale projects.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-box p-5" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; height: 100%;">
                        <i class="ti-search mb-3" style="font-size: 2.5rem; color: #FFAE00;"></i>
                        <h4>Talent Sourcing</h4>
                        <p>Finding the unfindable. Our expert sourcers target hard-to-fill roles with precision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact')
@endsection
