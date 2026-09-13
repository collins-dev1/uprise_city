<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | Uprise City</title>
    <meta
      name="description"
      content="Get in touch with the Uprise City team — questions about the Global Wealth Conference, sponsorship, tickets or courses."
    />
    <link rel="stylesheet" href="{{asset('uprise-city/css/style.css')}}" />
    <link rel="icon" href="{{asset('uprise-city/img/uprise.jpg')}}">
  </head>
  <body>
    <header class="site-header">
      <div class="nav-wrap">
        <a href="{{url('/')}}" class="brand">
          <span style="width: 80px; height: 80px">
            <img
              src="{{asset('uprise-city/img/uprise-removebg-preview.png')}}"
              width="100%"
              height="100%"
              alt=""
            />
          </span>
        </a>
        <nav aria-label="Primary">
          <ul class="nav-main">
            <li><a href="{{url('/')}}" class="nav-link">Home</a></li>
            <li class="has-dropdown">
              <a href="{{route('about')}}" class="nav-link"
                >About Us <span class="caret"></span
              ></a>
              <div class="dropdown">
                <a href="{{route('about')}}#history">History</a>
                <a href="{{route('about')}}#mission">Mission</a>
                <a href="{{route('about')}}#vision">Vision</a>
                <a href="{{route('about')}}#values">Core Values</a>
              </div>
            </li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact Us</a></li>
            <li><a href="officials.html" class="nav-link">Officials</a></li>
            <li><a href="courses.html" class="nav-link">Courses</a></li>
            <li class="has-dropdown">
              <a href="speakers.html" class="nav-link"
                >Global Wealth Conference <span class="caret"></span
              ></a>
              <div class="dropdown">
                <a href="speakers.html">Speakers</a>
                <a href="tickets.html">Tickets</a>
                <a href="sponsors.html">Sponsors</a>
              </div>
            </li>
            <li><a href="gallery.html" class="nav-link">Gallery</a></li>
          </ul>
        </nav>
        <div class="nav-cta">
          <a href="tickets.html" class="btn btn-brass btn-sm">Get Tickets</a>
          <button
            class="nav-toggle"
            type="button"
            aria-label="Toggle menu"
            aria-expanded="false"
          >
            <span></span><span></span><span></span>
          </button>
        </div>
      </div>
    </header>

    <section class="page-hero">
      <div class="container">
        <p class="breadcrumb">
          <a href="index.html">Home</a> / <span>Contact Us</span>
        </p>
        <h1>Do you have questions? We'd love to hear from you.</h1>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="contact-grid">
          <div>
            <span class="kicker">Reach Us</span>
            <h2>Get in touch directly</h2>
            <p class="lede">
              Whether it's about registration, sponsorship, courses or press —
              our team responds as quickly as possible.
            </p>

            <div style="margin-top: 32px">
              <div class="contact-info-item">
                <div class="ic">@</div>
                <div>
                  <h4>Email</h4>
                  <p>
                    <a href="mailto:uprisecitynig@gmail.com"
                      >uprisecitynig@gmail.com</a
                    >
                  </p>
                </div>
              </div>
              <div class="contact-info-item">
                <div class="ic">☎</div>
                <div>
                  <h4>Phone</h4>
                  <p><a href="tel:+2348085233053">+234 808 523 3053</a></p>
                </div>
              </div>
              <div class="contact-info-item">
                <div class="ic">◎</div>
                <div>
                  <h4>WhatsApp</h4>
                  <p>
                    <a
                      href="https://wa.me/message/P3NAECJRAZJNA1"
                      target="_blank"
                      rel="noopener"
                      >Chat with our team</a
                    >
                  </p>
                </div>
              </div>
              <div class="contact-info-item">
                <div class="ic">⌖</div>
                <div>
                  <h4>Location</h4>
                  <p>Onitsha, Anambra State, Nigeria</p>
                </div>
              </div>
            </div>

            <div class="social-row" style="margin-top: 30px">
              <a
                href="https://www.facebook.com/share/1AbEHatmqQ/"
                target="_blank"
                rel="noopener"
                aria-label="Facebook"
                style="border-color: var(--line); color: var(--ink)"
                >f</a
              >
              <a
                href="https://www.instagram.com/_uprisecity?igsh=OWZmMGdwMjU0ZHV2"
                target="_blank"
                rel="noopener"
                aria-label="Instagram"
                style="border-color: var(--line); color: var(--ink)"
                >ig</a
              >
            </div>
          </div>

          <div>
            <div class="card">
              <h3 style="margin-bottom: 6px">Send us a message</h3>
              <p
                style="
                  color: var(--ash-soft);
                  font-size: 0.92rem;
                  margin-bottom: 24px;
                "
              >
                Fill in the form and we'll get back to you within 1–2 business
                days.
              </p>

              <form data-ajax-form novalidate>
                <div class="form-row">
                  <div class="field">
                    <label for="name">Full name</label>
                    <input
                      type="text"
                      id="name"
                      name="name"
                      placeholder="e.g. Chinedu Okafor"
                      required
                    />
                  </div>
                  <div class="field">
                    <label for="email">Email address</label>
                    <input
                      type="email"
                      id="email"
                      name="email"
                      placeholder="you@example.com"
                      required
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="field">
                    <label for="phone">Phone number</label>
                    <input
                      type="tel"
                      id="phone"
                      name="phone"
                      placeholder="+234"
                    />
                  </div>
                  <div class="field">
                    <label for="topic">What is this about?</label>
                    <select id="topic" name="topic">
                      <option>General enquiry</option>
                      <option>Ticket / registration</option>
                      <option>Sponsorship</option>
                      <option>Courses &amp; programmes</option>
                      <option>Press &amp; media</option>
                    </select>
                  </div>
                </div>
                <div class="field">
                  <label for="message">Message</label>
                  <textarea
                    id="message"
                    name="message"
                    placeholder="Tell us how we can help..."
                    required
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-brass btn-block">
                  Send Message
                </button>
              </form>
              <div class="form-success">
                Thank you — your message has been received. Our team will reach
                out to you shortly.
              </div>
              <p class="form-note">
                Prefer WhatsApp?
                <a
                  href="https://wa.me/message/P3NAECJRAZJNA1"
                  target="_blank"
                  rel="noopener"
                  style="color: var(--brass); font-weight: 700"
                  >Message us directly</a
                >.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section--tight section--panel">
      <div class="container">
        <span class="kicker">Event Location</span>
        <h2>Get to the map location during the event day</h2>
        <div
          style="
            border: 1px solid var(--line);
            border-radius: var(--radius-md);
            aspect-ratio: 21/7;
            overflow: hidden;
          "
        >
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.779492304485!2d6.781505874626958!3d6.160280193826911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104393003ded20df%3A0x25177fb4f6d51618!2sVegas%20Astoria%20Hotel%20%26%20Suites!5e0!3m2!1sen!2sng!4v1789323651303!5m2!1sen!2sng"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"
          ></iframe>
        </div>
      </div>
    </section>

    <footer class="site-footer">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
            <a href="index.html" class="brand">
              <span style="width: 80px; height: 80px">
                <img
                  src="/img/uprise-removebg-preview.png"
                  width="100%"
                  height="100%"
                  alt=""
                />
              </span>
            </a>
            <p>
              An economic and social empowerment initiative based in Eastern
              Nigeria, equipping individuals and businesses to build structures,
              create wealth and lead lasting change.
            </p>
            <div class="social-row">
              <a
                href="https://www.facebook.com/share/1AbEHatmqQ/"
                target="_blank"
                rel="noopener"
                aria-label="Facebook"
                >f</a
              >
              <a
                href="https://www.instagram.com/_uprisecity?igsh=OWZmMGdwMjU0ZHV2"
                target="_blank"
                rel="noopener"
                aria-label="Instagram"
                >ig</a
              >
              <a
                href="https://wa.me/message/P3NAECJRAZJNA1"
                target="_blank"
                rel="noopener"
                aria-label="WhatsApp"
                >wa</a
              >
              <a href="mailto:uprisecitynig@gmail.com" aria-label="Email">@</a>
            </div>
          </div>
          <div class="footer-col">
            <h4>Explore</h4>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="officials.html">Officials</a></li>
              <li><a href="courses.html">Courses</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Global Wealth Conference</h4>
            <ul>
              <li><a href="speakers.html">Speakers</a></li>
              <li><a href="tickets.html">Tickets</a></li>
              <li><a href="sponsors.html">Sponsors</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Get in touch</h4>
            <ul>
              <li>Onitsha, Anambra State, Nigeria</li>
              <li><a href="tel:+2348085233053">+234 808 523 3053</a></li>
              <li>
                <a href="mailto:uprisecitynig@gmail.com"
                  >uprisecitynig@gmail.com</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom">
          <span
            >&copy; <span data-year></span> Uprise City. All rights
            reserved.</span
          >
          <span
            >Global Wealth Conference &middot; 31 October 2026 &middot;
            Onitsha</span
          >
        </div>
      </div>
    </footer>

    <script src="js/main.js"></script>
  </body>
</html>
