<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uprise City | Global Wealth Conference 2026</title>
    <meta name="description"
        content="Uprise City is an economic and social empowerment initiative based in Eastern Nigeria. Join the Global Wealth Conference, 31 October 2026, Onitsha." />
    <link rel="stylesheet" href="{{ asset('uprise-city/css/style.css') }}" />
    <link rel="icon" href="{{ asset('uprise-city/img/uprise.jpg') }}">
</head>

<body style="overflow-x: hidden">
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

    <!-- ============ HERO ============ -->
    <section class="hero">
        <div class="hero-grid">
            <div>
                <span class="hero-eyebrow"><span class="dot"></span> Vegas Astoria Hotels GRA Onitsha,
                    Nigeria</span>
                <h1>
                    Rise into your <em>next level</em> of wealth, leadership &amp;
                    influence.
                </h1>
                <p class="lede">
                    Uprise City is an economic and social empowerment initiative helping
                    individuals, small businesses and organisations across Africa build
                    structures, grow profit and lead lasting change. Our flagship
                    gathering, the Global Wealth Conference, returns to Onitsha this
                    October.
                </p>

                <div class="hero-meta">
                    <div>
                        <span>DATE</span>
                        <strong>31 October 2026</strong>
                    </div>
                    <div>
                        <span>VENUE</span>
                        <strong>Vegas Astoria Hotels GRA Onitsha, Nigeria</strong>
                    </div>
                    <div>
                        <span>EDITION</span>
                        <strong>Global Wealth Conference</strong>
                    </div>
                </div>

                <div class="hero-actions">
                    <a href="https://forms.gle/jDSWcwRPrVbEDwoE7" target="_blank" rel="noopener"
                        class="btn btn-brass">Register Now</a>
                    <a href="{{route('tickets')}}" class="btn btn-outline">View Ticket Tiers</a>
                </div>

                <div class="countdown" data-countdown="2026-10-31T09:00:00" aria-label="Countdown to the conference">
                    <div><strong data-c-days>00</strong><span>DAYS</span></div>
                    <div><strong data-c-hours>00</strong><span>HOURS</span></div>
                    <div><strong data-c-mins>00</strong><span>MINUTES</span></div>
                    <div><strong data-c-secs>00</strong><span>SECONDS</span></div>
                </div>
            </div>

            <div class="hero-art">
                <img src="{{ asset('uprise-city/img/heading2.jpg') }}" width="100%" height="100%" alt="" />
            </div>
        </div>
    </section>

    <!-- ============ VALUE PROPS ============ -->
    <div class="grid-4">
        <div class="feature-tile">
            <span class="num">01</span>
            <h3>Connection</h3>
            <p>
                Meet and build relationships with people doing extraordinary things
                across business, ministry and public life.
            </p>
        </div>
        <div class="feature-tile">
            <span class="num">02</span>
            <h3>Growth</h3>
            <p>
                Step into a space where personal and business growth is not only
                supported but actively encouraged.
            </p>
        </div>
        <div class="feature-tile">
            <span class="num">03</span>
            <h3>Community</h3>
            <p>
                Join a community where business owners find support, understanding and
                a shared vision for a better world.
            </p>
        </div>
        <div class="feature-tile">
            <span class="num">04</span>
            <h3>Experience</h3>
            <p>
                An exciting gathering where growth meets comfort — a memorable,
                well-run experience from start to finish.
            </p>
        </div>
    </div>

    <!-- ============ ABOUT SNAPSHOT ============ -->
    <section class="section">
        <div class="container">
            <div class="split">
                <div class="split-media">
                    <video src="{{ asset('uprise-city/video/UPRISE CITY AD.mp4') }}" controls width="100%"
                        height="100%" poster="{{ asset('uprise-city/img/uprise.jpg') }}"></video>
                </div>
                <div>
                    <span class="kicker">Who we are</span>
                    <h2>Building people, business and legacy since 2014.</h2>
                    <p>
                        Uprise City is an economic and social empowerment initiative based
                        in Eastern Nigeria and duly registered with the Corporate Affairs
                        Commission. We provide personal, career and business development
                        services, help small and micro-businesses rise in profit and
                        expand, and invest in human capital development across the region.
                    </p>
                    <p>
                        What began in 2014 with the First Onitsha City Economic Summit has
                        grown into a movement — the Economic Summits, the Young
                        Entrepreneurs Conference, the Eruption Conference, and now the
                        Global Wealth Conference — all built to lead socioeconomic change
                        across Africa.
                    </p>
                    <a href="{{route('about')}}" class="btn btn-ghost">Read Our Story</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ GLOBAL WEALTH CONFERENCE ============ -->
    <section class="section section--dark">
        <div class="container">
            <span class="kicker">The Flagship Event</span>
            <div class="lede-holder">
                <div>
                    <h2 style="max-width: 20ch">
                        The Global Wealth Conference is more than a conference.
                    </h2>
                    <p class="lede">
                        Our focus this year is on creating an environment where every
                        person in the room is empowered as a leader, and experiences the
                        expansion that comes from mentoring — and being mentored.
                    </p>
                </div>
                <div style="height: 400px;">
                    <img src="{{ asset('uprise-city/img/jamie&rev_flyer.jpeg') }}" width="100%" height="100%"
                        alt="" />
                </div>
            </div>

            <div class="rule-rise"></div>

            <div class="grid-3">
                <div>
                    <div class="bars"><i></i><i></i><i></i><i></i></div>
                    <h3 style="margin-top: 18px">Learn &amp; Mastermind</h3>
                    <p style="color: rgba(247, 244, 236, 0.68)">
                        Learn from world-class speakers, mastermind new strategies, and
                        develop systems built for your success.
                    </p>
                </div>
                <div>
                    <div class="bars"><i></i><i></i><i></i><i></i></div>
                    <h3 style="margin-top: 18px">Network &amp; Connect</h3>
                    <p style="color: rgba(247, 244, 236, 0.68)">
                        Make new connections that outlast the conference — the
                        relationships built here become long-term partnerships.
                    </p>
                </div>
                <div>
                    <div class="bars"><i></i><i></i><i></i><i></i></div>
                    <h3 style="margin-top: 18px">Celebrate &amp; Remember</h3>
                    <p style="color: rgba(247, 244, 236, 0.68)">
                        Celebrate at the Limitless People Awards Luncheon and walk away
                        with memories that last well beyond the event.
                    </p>
                </div>
            </div>

            <div style="margin-top: 52px; display: flex; gap: 16px; flex-wrap: wrap">
                <a href="https://forms.gle/jDSWcwRPrVbEDwoE7" target="_blank" rel="noopener"
                    class="btn btn-brass">Register Now</a>
                <a href="{{route('speakers')}}" class="btn btn-outline">Meet the Speakers</a>
            </div>
        </div>
    </section>

    <div class="stats-band" style="background: var(--ink)">
        <div class="stat"><strong>2014</strong><span>YEAR FOUNDED</span></div>
        <div class="stat">
            <strong>10+</strong><span>SIGNATURE CONFERENCES HOSTED</span>
        </div>
        <div class="stat">
            <strong>1,000+</strong><span>LEADERS &amp; ENTREPRENEURS REACHED</span>
        </div>
        <div class="stat">
            <strong>31 OCT</strong><span>GWC 2026 CONFERENCE DATE</span>
        </div>
    </div>

    <!-- ============ FAQ ============ -->
    <section class="section section--dark">
        <div class="container">
            <div class="grid-2" style="align-items: flex-start">
                <div>
                    <span class="kicker">Good to know</span>
                    <h2>Frequently asked<br />questions.</h2>
                    <p class="lede">
                        Everything you need to know before you register and travel in for
                        the conference.
                    </p>
                    <div>
                        <img src="{{ asset('uprise-city/img/UPRISE CITY ACADEMY.jpg') }}" alt="">
                    </div>
                </div>
                <div>
                    <div class="faq-item is-open">
                        <button class="faq-q">
                            <span>What do I need to bring?</span><span class="plus"></span>
                        </button>
                        <div class="faq-a">
                            <p>
                                Bring your laptop. This year we'll be working on some content
                                creation and we'd love you to get that done in real time while
                                we are together.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q">
                            <span>What is the dress code?</span><span class="plus"></span>
                        </button>
                        <div class="faq-a">
                            <p>
                                Wear what's professional and suits a conference — whatever
                                makes you feel confident around other driven entrepreneurs. We
                                keep the room cool, so bring a layer.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q">
                            <span>What will I walk away with?</span><span class="plus"></span>
                        </button>
                        <div class="faq-a">
                            <p>
                                A chance to disconnect from daily life and reconnect to your
                                mission, surrounded by a nurturing community of business
                                owners and speakers who'll help you reach your fullest
                                potential faster.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q">
                            <span>Are you selling virtual tickets?</span><span class="plus"></span>
                        </button>
                        <div class="faq-a">
                            <p>
                                No — there are no virtual tickets. This is strictly an
                                in-person experience.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q">
                            <span>Will meals be provided?</span><span class="plus"></span>
                        </button>
                        <div class="faq-a">
                            <p>
                                We have vendors on-site for meals, sold at affordable rates
                                throughout the event.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-q">
                            <span>Can I transfer or refund my ticket?</span><span class="plus"></span>
                        </button>
                        <div class="faq-a">
                            <p>
                                Tickets can be transferred with the management's approval —
                                please contact us first. Refunds are handled case-by-case;
                                reach out to the management to discuss.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ CTA STRIP ============ -->
    <section class="section--tight" style="background: var(--paper-2)">
        <div class="container center">
            <span class="kicker mx-auto" style="justify-content: center">Get in touch</span>
            <h2>Have more questions about the conference?</h2>
            <p class="lede mx-auto">
                Reach us directly — we're happy to help you plan your trip to Onitsha.
            </p>
            <div
                style="
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 24px;
          ">
                <a href="mailto:uprisecitynig@gmail.com" class="btn btn-ink">Email Us</a>
                <a href="{{route('contact')}}" class="btn btn-ghost">Contact Page</a>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="{{url('/')}}" class="brand">
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
