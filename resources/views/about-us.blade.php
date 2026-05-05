@extends('layouts.app')

@section('title', 'About Us | SA Business Solutions Group')
@section('page_title', 'About Us')
@section('page_subtitle', 'Our Story, Mission & Differentiators')

@section('content')
    @include('partials.page_header')

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Company Overview</h2>
                        <p>SA Business Solutions Group LLC is a premier provider of strategic infrastructure, workforce, and supply solutions.</p>
                    </div>
                    <p>With extensive experience in both the public and private sectors, including significant exposure to various public sector organizations, we bring a wealth of expertise to every engagement. Our team is dedicated to providing government-ready solutions with the agility of a niche provider.</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h4>Our Mission</h4>
                            <p>To empower organizations by providing the critical infrastructure and talent needed to solve complex challenges and achieve sustainable growth.</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Our Values</h4>
                            <p>Integrity, Agility, and Excellence. we believe in building long-term partnerships through transparent and reliable service delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="p-5" style="background: rgba(255,174,0,0.05); border: 2px dashed #FFAE00; border-radius: 30px;">
                        <h3 class="mb-4">Why SA Business Solutions Group?</h3>
                        <div class="diff-item mb-4">
                            <h5 style="color: #FFAE00;">MWBE-Certified</h5>
                            <p class="mb-0">A minority and women-owned business enterprise committed to diversity.</p>
                        </div>
                        <div class="diff-item mb-4">
                            <h5 style="color: #FFAE00;">Government-Ready</h5>
                            <p class="mb-0">SAM.gov registered with experience in complex public sector procurement.</p>
                        </div>
                        <div class="diff-item">
                            <h5 style="color: #FFAE00;">Agile Delivery</h5>
                            <p class="mb-0">Fast delivery combined with niche talent sourcing for maximum impact.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact')
@endsection
