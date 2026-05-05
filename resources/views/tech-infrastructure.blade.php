@extends('layouts.app')

@section('title', 'Technology & Infrastructure | SABS Group')
@section('page_title', 'Technology & Infrastructure')
@section('page_subtitle', 'Strategic Tech & Foundation Solutions')

@section('content')
    @include('partials.page_header')

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Building Tomorrow's Foundation</h2>
                        <p>We provide the technical backbone for modern enterprises, from infrastructure management to strategic consulting.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6 mb-4">
                    <div class="p-5" style="background: rgba(255,255,255,0.02); border-left: 5px solid #FFAE00; border-radius: 0 20px 20px 0;">
                        <h4>Infrastructure Management</h4>
                        <p>End-to-end management of your technical infrastructure, ensuring uptime, security, and scalability.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="p-5" style="background: rgba(255,255,255,0.02); border-left: 5px solid #FFAE00; border-radius: 0 20px 20px 0;">
                        <h4>Technical Consulting</h4>
                        <p>Expert guidance on digital transformation, system migrations, and technology adoption strategies.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="p-5" style="background: rgba(255,255,255,0.02); border-left: 5px solid #FFAE00; border-radius: 0 20px 20px 0;">
                        <h4>Public Sector Tech Support</h4>
                        <p>Specialized infrastructure solutions for government agencies, meeting all regulatory and security requirements.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="p-5" style="background: rgba(255,255,255,0.02); border-left: 5px solid #FFAE00; border-radius: 0 20px 20px 0;">
                        <h4>Cloud & Data Solutions</h4>
                        <p>Leveraging modern cloud environments to optimize your data storage, processing, and accessibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact')
@endsection
