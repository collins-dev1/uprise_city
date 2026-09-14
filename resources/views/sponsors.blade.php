<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sponsors | Global Wealth Conference — Uprise City</title>
<meta name="description" content="Meet the sponsors and partners powering the Uprise City Global Wealth Conference. Enquire about sponsorship packages.">
<link rel="stylesheet" href="{{ asset('uprise-city/css/style.css') }}" />
    <link rel="icon" href="{{ asset('uprise-city/img/uprise.jpg') }}">
</head>
<body>

<header class="site-header">
        <div class="nav-wrap">
            <a href="{{ url('/') }}" class="brand">
                <span style="width: 80px; height: 80px">
                    <img src="{{ asset('uprise-city/img/uprise.jpg') }}" width="100%" height="100%"
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
    <p class="breadcrumb"><a href="{{url('/')}}">Home</a> / <span>Sponsors</span></p>
    <h1>Global Wealth Conference Sponsors</h1>
    <p style="max-width:60ch; color:rgba(247,244,236,.7);">We proudly partner with forward-thinking organisations that share our vision for innovation and growth. Their generous support makes this event possible and helps us create meaningful experiences for every attendee.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <span class="kicker">Our Partners</span>
    <h2 style="margin-bottom:40px;">Sponsors of the Global Wealth Conference</h2>

    <div class="sponsor-grid">
      <div class="sponsor-tile">
        <img src="{{asset('uprise-city/sponsor_img/bsi_logo1.jpg')}}" width="100%" height="100%" alt="">
      </div>
      <div class="sponsor-tile">
        <img src="{{asset('uprise-city/sponsor_img/chillisfood.jpg')}}" width="100%" height="100%" alt="">
      </div>
      <div class="sponsor-tile">
        <img src="{{asset('uprise-city/sponsor_img/perfecthome.jpg')}}" width="100%" height="100%" alt="">
      </div>
      <div class="sponsor-tile">
        <img src="{{asset('uprise-city/sponsor_img/sponsor1.jpeg')}}" width="100%" height="100%" alt="">
      </div>
    </div>
    <p class="form-note center mx-auto" style="margin-top:20px;">Sponsor logos shown are placeholders — swap in your partners' artwork when the assets are ready.</p>
  </div>
</section>

<section class="section section--dark">
  <div class="container">
    <div class="grid-2" style="align-items:center;">
      <div>
        <span class="kicker">Partner With Us</span>
        <h2>Put your brand in front of Nigeria's rising leaders.</h2>
        <p class="lede">Sponsorship at the Global Wealth Conference connects your organisation with entrepreneurs, executives and changemakers from across the country — through exhibition space, stage visibility, and direct networking access.</p>
        <div style="display:flex; gap:16px; flex-wrap:wrap; margin-top:20px;">
          <a href="mailto:uprisecitynig@gmail.com" class="btn btn-brass">Become a Sponsor</a>
          <a href="contact.html" class="btn btn-outline">Contact the Team</a>
        </div>
      </div>
      <div class="grid-2" style="gap:1px; background:var(--line-dark); border:1px solid var(--line-dark);">
        <div style="background:var(--ink-2); padding:28px;">
          <h4 style="color:var(--paper); margin-bottom:8px;">Exhibition Hall</h4>
          <p style="color:rgba(247,244,236,.6); font-size:.88rem; margin:0;">Showcase your products and services directly to attendees.</p>
        </div>
        <div style="background:var(--ink-2); padding:28px;">
          <h4 style="color:var(--paper); margin-bottom:8px;">Stage Visibility</h4>
          <p style="color:rgba(247,244,236,.6); font-size:.88rem; margin:0;">Brand placement across the main hall and programme materials.</p>
        </div>
        <div style="background:var(--ink-2); padding:28px;">
          <h4 style="color:var(--paper); margin-bottom:8px;">Networking Access</h4>
          <p style="color:rgba(247,244,236,.6); font-size:.88rem; margin:0;">Direct introductions to entrepreneurs and executive attendees.</p>
        </div>
        <div style="background:var(--ink-2); padding:28px;">
          <h4 style="color:var(--paper); margin-bottom:8px;">Digital Reach</h4>
          <p style="color:rgba(247,244,236,.6); font-size:.88rem; margin:0;">Featured across our website, socials and event app.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="{{ url('/') }}" class="brand">
                        <span style="width: 80px; height: 80px">
                            <img src="{{ asset('uprise-city/img/uprise.jpg') }}" width="100%"
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

<script src="{{asset('uprise-city/js/main.js')}}"></script>
</body>
</html>
