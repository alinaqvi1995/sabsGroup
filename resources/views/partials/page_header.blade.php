<!-- PAGE HEADER -->
<section class="page_header section-padding" style="background-image: url({{ asset('img/bg/home-bg.jpg') }}); background-size: cover; background-position: center; padding-top: 150px; padding-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 style="font-size: 3.5rem; font-weight: 800; color: #fff;">@yield('page_title')</h1>
                <p style="font-size: 1.2rem; color: #FFAE00; font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">@yield('page_subtitle')</p>
            </div>
        </div>
    </div>
</section>
<div class="breadcrumb_area" style="background: #111; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul style="display: flex; gap: 10px; list-style: none; margin: 0; padding: 0; font-size: 0.9rem;">
                    <li><a href="{{ route('home') }}" style="color: rgba(255,255,255,0.5);">Home</a></li>
                    <li style="color: rgba(255,255,255,0.2);">/</li>
                    <li style="color: #FFAE00;">@yield('page_title')</li>
                </ul>
            </div>
        </div>
    </div>
</div>
