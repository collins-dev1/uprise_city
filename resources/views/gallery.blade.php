<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Uprise City</title>
    <meta name="description"
        content="Browse photos from Uprise City events — Young Entrepreneurs Conference, Eruption Conference, and the Global Wealth Conference through the years.">
    <link rel="stylesheet" href="{{ asset('uprise-city/css/style.css') }}" />
    <link rel="icon" href="{{ asset('uprise-city/img/uprise.jpg') }}">
</head>

<body>

    <header class="site-header">
        <div class="nav-wrap">
            <a href="{{ url('/') }}" class="brand">
                <span style="width: 80px; height: 80px">
                    <img src="{{ asset('uprise-city/img/uprise-removebg-preview.png') }}" width="100%" height="100%"
                        alt="" />
                </span>
            </a>

            <nav aria-label="Primary">
                <ul class="nav-main">
                    <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li class="has-dropdown">
                        <a href="{{ route('about') }}" class="nav-link">About Us <span class="caret"></span></a>
                        <div class="dropdown">
                            <a href="{{ route('about') }}#history">History</a>
                            <a href="{{ route('about') }}#mission">Mission</a>
                            <a href="{{ route('about') }}#vision">Vision</a>
                            <a href="{{ route('about') }}#values">Core Values</a>
                        </div>
                    </li>
                    <li><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
                    <li><a href="{{ route('officials') }}" class="nav-link">Officials</a></li>
                    <li><a href="{{ route('programmes') }}" class="nav-link">Courses</a></li>
                    <li class="has-dropdown">
                        <a href="{{ route('speakers') }}" class="nav-link">Global Wealth Conference <span
                                class="caret"></span></a>
                        <div class="dropdown">
                            <a href="{{ route('speakers') }}">Speakers</a>
                            <a href="{{ route('tickets') }}">Tickets</a>
                            <a href="{{ route('sponsors') }}">Sponsors</a>
                        </div>
                    </li>
                    <li><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                </ul>
            </nav>

            <div class="nav-cta">
                <a href="{{ route('tickets') }}" class="btn btn-brass btn-sm">Get Tickets</a>
                <button class="nav-toggle" type="button" aria-label="Toggle menu" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <section class="page-hero">
        <div class="container">
            <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> / <span>Gallery</span></p>
            <h1>Photo Gallery</h1>
            <p style="max-width:60ch; color:rgba(247,244,236,.7);">A look back at over a decade of summits, conferences
                and community — from the first Young Entrepreneurs Conference to the latest Global Wealth Conference.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="filter-bar">
                <button class="filter-btn is-active" data-filter="all">All Years</button>
                <button class="filter-btn" data-filter="yec">Young Entrepreneurs Conference</button>
                <button class="filter-btn" data-filter="gwc">Global Wealth Conference</button>
                <button class="filter-btn" data-filter="ec">Eruption Conference</button>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item" data-cat="yec">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062119_504.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="yec">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062219_513.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="yec">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062226_598.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062240_901.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062310_392.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062346_965.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062347_016.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="ec">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062347_019.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062347_147.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062347_228.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062347_291.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062347_373.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062347_378.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
                <div class="gallery-item" data-cat="gwc">
                    <img src="{{ asset('uprise-city/gallery_img/IMG_20241004_062347_439.jpg') }}" width="100%"
                        height="100%" alt="">
                </div>
            </div>
            <p class="form-note center mx-auto" style="margin-top:24px;">Gallery tiles are placeholders — drop in your
                event photography for each year to bring this page to life.</p>
        </div>
    </section>

    <section class="section--tight section--dark center">
        <div class="container">
            <h2 style="max-width:24ch; margin:0 auto 12px;">Be part of the next chapter — Global Wealth Conference
                2026.</h2>
            <a href="https://forms.gle/jDSWcwRPrVbEDwoE7" target="_blank" rel="noopener"
                class="btn btn-brass">Register Now</a>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="{{ url('/') }}" class="brand">
                        <span style="width: 80px; height: 80px">
                            <img src="{{ asset('uprise-city/img/uprise-removebg-preview.png') }}" width="100%"
                                height="100%" alt="" />
                        </span>
                    </a>
                    <p>
                        An economic and social empowerment initiative based in Eastern
                        Nigeria, equipping individuals and businesses to build structures,
                        create wealth and lead lasting change.
                    </p>
                    <div class="social-row">
                        <a href="https://www.facebook.com/share/1AbEHatmqQ/" target="_blank" rel="noopener"
                            aria-label="Facebook">f</a>
                        <a href="https://www.instagram.com/_uprisecity?igsh=OWZmMGdwMjU0ZHV2" target="_blank"
                            rel="noopener" aria-label="Instagram">ig</a>
                        <a href="https://wa.me/message/P3NAECJRAZJNA1" target="_blank" rel="noopener"
                            aria-label="WhatsApp">wa</a>
                        <a href="mailto:uprisecitynig@gmail.com" aria-label="Email">@</a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('officials') }}">Officials</a></li>
                        <li><a href="{{ route('programmes') }}">Courses</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Global Wealth Conference</h4>
                    <ul>
                        <li><a href="{{ route('speakers') }}">Speakers</a></li>
                        <li><a href="{{ route('tickets') }}">Tickets</a></li>
                        <li><a href="{{ route('sponsors') }}">Sponsors</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get in touch</h4>
                    <ul>
                        <li>Onitsha, Anambra State, Nigeria</li>
                        <li><a href="tel:+2348085233053">+234 808 523 3053</a></li>
                        <li>
                            <a href="mailto:uprisecitynig@gmail.com">uprisecitynig@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; <span data-year></span> Uprise City. All rights
                    reserved.</span>
                <span>Global Wealth Conference &middot; 31 October 2026 &middot;
                    Onitsha</span>
            </div>
        </div>
    </footer>

    <script src="{{ asset('uprise-city/js/main.js') }}"></script>
</body>

</html>
