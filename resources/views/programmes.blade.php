<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | Uprise City</title>
    <meta name="description"
        content="Explore Uprise City's certificate programmes — Personal Mastermind, Biz Encyclopedia, and Life Planning & Career Advancement.">
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
            <p class="breadcrumb"><a href="{{url('/')}}">Home</a> / <span>Courses</span></p>
            <h1>Certificate Programmes</h1>
            <p style="max-width:60ch; color:rgba(247,244,236,.7);">A series of impactful sessions designed to educate,
                inspire and empower. From keynote addresses to interactive workshops, our programmes are curated to
                deliver value, spark conversation and drive actionable insight.</p>
            <a href="https://forms.gle/jDSWcwRPrVbEDwoE7" target="_blank" rel="noopener" class="btn btn-brass"
                style="margin-top:20px;">Register Now</a>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <span class="kicker">Our Certificate Programmes</span>
            <h2 style="margin-bottom:40px;">Choose the path that fits where you are.</h2>

            <div class="grid-3">
                <div class="course-card">
                    <span class="tag">Personal Development</span>
                    <h3>Personal Mastermind Programme</h3>
                    <p style="color:var(--ash-soft); font-size:.92rem;">Sharpen your mindset and your voice — for anyone
                        ready to lead themselves before leading others.</p>
                    <ul>
                        <li>Mental upgrade</li>
                        <li>Personal mastery</li>
                        <li>Effective communication skills</li>
                        <li>Time management skills</li>
                        <li>Event and project management</li>
                        <li>Networking and team management skills</li>
                        <li>Public speaking</li>
                    </ul>
                    <a href="https://wa.me/message/P3NAECJRAZJNA1" target="_blank" rel="noopener"
                        class="btn btn-ink btn-block">Book Course</a>
                </div>

                <div class="course-card">
                    <span class="tag">Business</span>
                    <h3>Biz Encyclopedia</h3>
                    <p style="color:var(--ash-soft); font-size:.92rem;">A complete grounding in what it takes to start,
                        run and grow a sustainable business.</p>
                    <ul>
                        <li>Start-ups</li>
                        <li>Strategic leadership</li>
                        <li>Strategic marketing</li>
                        <li>Legal framework</li>
                        <li>Business ethics and values</li>
                        <li>Customer management system</li>
                        <li>Financial management system</li>
                        <li>Branding and packaging</li>
                        <li>Executive &amp; emotional intelligence</li>
                    </ul>
                    <a href="https://wa.me/message/P3NAECJRAZJNA1" target="_blank" rel="noopener"
                        class="btn btn-ink btn-block">Book Course</a>
                </div>

                <div class="course-card">
                    <span class="tag">Career</span>
                    <h3>Life Planning &amp; Career Advancement Programme</h3>
                    <p style="color:var(--ash-soft); font-size:.92rem;">For students, graduates and young professionals
                        navigating career decisions and workplace readiness.</p>
                    <ul>
                        <li>Career awareness and decision-making</li>
                        <li>Soft-skills and personal development strategy</li>
                        <li>Understanding the dynamics of the marketplace</li>
                        <li>Workplace readiness</li>
                        <li>Critical skills for workplace success</li>
                        <li>Basic financial management strategies</li>
                    </ul>
                    <a href="https://wa.me/message/P3NAECJRAZJNA1" target="_blank" rel="noopener"
                        class="btn btn-ink btn-block">Book Course</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--dark">
        <div class="container">
            <div class="grid-2" style="align-items:center;">
                <div>
                    <span class="kicker">Why train with us</span>
                    <h2>Built by practitioners, not theorists.</h2>
                    <p class="lede">Every programme is facilitated by people who have built businesses, led teams and
                        mentored hundreds of entrepreneurs — the same officials and speakers behind the Global Wealth
                        Conference.</p>
                    <a href="{{route('officials')}}" class="btn btn-outline">Meet the Facilitators</a>
                </div>
                <div class="grid-2" style="gap:1px; background:var(--line-dark); border:1px solid var(--line-dark);">
                    <div style="background:var(--ink-2); padding:28px;">
                        <strong
                            style="font-family:var(--font-display); font-size:1.8rem; color:var(--brass-light); display:block;">3</strong>
                        <span style="font-size:.8rem; color:rgba(247,244,236,.6);">Certificate programmes</span>
                    </div>
                    <div style="background:var(--ink-2); padding:28px;">
                        <strong
                            style="font-family:var(--font-display); font-size:1.8rem; color:var(--brass-light); display:block;">1-on-1</strong>
                        <span style="font-size:.8rem; color:rgba(247,244,236,.6);">Booking via WhatsApp</span>
                    </div>
                    <div style="background:var(--ink-2); padding:28px;">
                        <strong
                            style="font-family:var(--font-display); font-size:1.8rem; color:var(--brass-light); display:block;">10+</strong>
                        <span style="font-size:.8rem; color:rgba(247,244,236,.6);">Years of facilitation
                            experience</span>
                    </div>
                    <div style="background:var(--ink-2); padding:28px;">
                        <strong
                            style="font-family:var(--font-display); font-size:1.8rem; color:var(--brass-light); display:block;">Onitsha</strong>
                        <span style="font-size:.8rem; color:rgba(247,244,236,.6);">Home base, Nigeria-wide reach</span>
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

    <script src="{{ asset('uprise-city/js/main.js') }}"></script>
</body>

</html>
