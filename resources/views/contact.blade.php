@extends('layouts.app')

@section('title', 'Connect With Us | SA Business Solutions Group')
@section('page_title', 'Connect With Us')
@section('page_subtitle', 'Let\'s Start a Conversation')

@section('content')
    @include('partials.page_header')

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="p-5" style="background: rgba(255,255,255,0.02); border-radius: 20px;">
                        <h4>Contact Information</h4>
                        <p>Reach out to us to learn more about our services or to request a capability brief.</p>
                        
                        <div class="mt-4">
                            <p><strong>Address:</strong><br> SA Business Solutions Group LLC</p>
                            <p><strong>Email:</strong><br> <a href="mailto:info@sabsgroup.com" style="color: #FFAE00;">info@sabsgroup.com</a></p>
                            <p><strong>Phone:</strong><br> +1 (000) 000-0000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    @include('partials.contact')
                </div>
            </div>
        </div>
    </section>
@endsection
