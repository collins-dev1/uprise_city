<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Officials | Uprise City</title>
<meta name="description" content="Meet the officials leading Uprise City and the Global Wealth Conference.">
 <link rel="stylesheet" href="{{asset('uprise-city/css/style.css')}}" />
    <link rel="icon" href="{{asset('uprise-city/img/uprise.jpg')}}">
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
    <p class="breadcrumb"><a href="index.html">Home</a> / <span>Officials</span></p>
    <h1>Our Officials</h1>
    <p style="max-width:60ch; color:rgba(247,244,236,.7);">Our dedicated team of officials is committed to the success of the conference. With a wealth of experience and a shared passion for excellence, they oversee planning, coordination and execution — guaranteeing a seamless, impactful event for every participant. Tap any card to read a full profile.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="people-grid">

      <div class="person-card" data-bio-trigger="bio-bsi">
        <div class="avatar">
          <img src="{{asset('uprise-city/official_img/bsi2.jpg')}}" alt="">
        </div>
        <div class="person-body">
          <h3>Rev Bs'I Molokwu</h3>
          <span class="person-role">President</span>
          <p>Kingdom leadership coach, brand strategist, national transformation strategist and founder of Uprise City.</p>
          <span class="read-more">Read full profile</span>
        </div>
      </div>

      <div class="person-card" data-bio-trigger="bio-guo">
        <div class="avatar">
          <img src="{{asset('uprise-city/official_img/guo2.jpg')}}" alt="">
        </div>
        <div class="person-body">
          <h3>Chief Sir Godwin U. Okeke</h3>
          <span class="person-role">Grand Patron (OON)</span>
          <p>Businessman and philanthropist based in Lagos, guided by the motto "Integrity, Hardwork and the Grace of God."</p>
          <span class="read-more">Read full profile</span>
        </div>
      </div>

      <div class="person-card" data-bio-trigger="bio-chinedu">
        <div class="avatar">
          <img src="{{asset('uprise-city/official_img/chinedu.jpg')}}" alt="">
        </div>
        <div class="person-body">
          <h3>Chinedu Okwuosa</h3>
          <span class="person-role">Executive Representative</span>
          <p>Author of three personal-development books and a co-founder who helped launch Uprise City in Onitsha.</p>
          <span class="read-more">Read full profile</span>
        </div>
      </div>

      <div class="person-card" data-bio-trigger="bio-precious">
        <div class="avatar">
          <img src="{{asset('uprise-city/official_img/precious.jpg')}}" alt="">
        </div>
        <div class="person-body">
          <h3>Precious Ngozika-Oli Ochudo</h3>
          <span class="person-role">Strategic &amp; Organisational Manager</span>
          <p>Digital marketing educator, public speaking coach and Chief Growth Marketing Officer at Coachivate.</p>
          <span class="read-more">Read full profile</span>
        </div>
      </div>

      <div class="person-card" data-bio-trigger="bio-somto">
        <div class="avatar">
          <img src="{{asset('uprise-city/official_img/somto.jpg')}}" alt="">
        </div>
        <div class="person-body">
          <h3>Somtochukwu Okafor Vincent</h3>
          <span class="person-role">Business Administrator</span>
          <p>Estate Surveyor and CEO of Perfect Home Services, with extensive experience in real estate and interior design.</p>
          <span class="read-more">Read full profile</span>
        </div>
      </div>

      <div class="person-card" data-bio-trigger="bio-amara">
        <div class="avatar">
          <img src="{{asset('uprise-city/official_img/amara.jpg')}}" alt="">
        </div>
        <div class="person-body">
          <h3>Amara Molokwu</h3>
          <span class="person-role">Analyst</span>
          <p>School administrator helping entrepreneurs and organisations simplify their work and strengthen their systems.</p>
          <span class="read-more">Read full profile</span>
        </div>
      </div>

      <div class="person-card" data-bio-trigger="bio-livinus">
        <div class="avatar">
          <img src="{{asset('uprise-city/official_img/livinus.jpg')}}" alt="">
        </div>
        <div class="person-body">
          <h3>Livinus Chinonso</h3>
          <span class="person-role">Director of Operations</span>
          <p>Accountant, brand strategist, business coach and professional musician — President of LIVIC WORLD.</p>
          <span class="read-more">Read full profile</span>
        </div>
      </div>

      <div class="person-card" data-bio-trigger="bio-collins">
        <div class="avatar">
          <img src="{{asset('uprise-city/official_img/mypicture.jpg')}}" alt="">
        </div>
        <div class="person-body">
          <h3>Oguno Collins</h3>
          <span class="person-role">Developer &amp; Programmer and Car Dealer</span>
          <p>Full-stack software and web developer, and a tutor mentoring the next generation of tech talent.</p>
          <span class="read-more">Read full profile</span>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section--tight section--dark center">
  <div class="container">
    <h2 style="max-width:24ch; margin:0 auto 18px;">Ready to be part of the Global Wealth Conference?</h2>
    <a href="https://forms.gle/jDSWcwRPrVbEDwoE7" target="_blank" rel="noopener" class="btn btn-brass">Register Now</a>
  </div>
</section>

<!-- ===== Bio source content (hidden, injected into modal on click) ===== -->
<div style="display:none;">

  <div id="bio-bsi">
    <div class="modal-head"><div class="avatar"><img src="{{asset('uprise-city/official_img/bsi2.jpg')}}" alt=""></div><div><h3 class="mb-0">Rev Bs'I Molokwu</h3><span class="modal-role">President</span></div></div>
    <div class="modal-body">
      <p>Bs'I is a kingdom leadership coach, brand strategist, entrepreneur, national transformation strategist, youth pastor and priest. He mentors, coaches, writes and speaks on kingdom matters, wealth creation, leadership, management, and personal and business development.</p>
      <h4>Areas of expertise</h4>
      <ul>
        <li>Strategic and innovation leadership</li>
        <li>Capacity and team building</li>
        <li>Wealth creation and idea execution</li>
        <li>Brand and development strategy</li>
        <li>Business growth and development coaching</li>
        <li>Structure establishment and systems building</li>
        <li>Spiritual growth and kingdom teaching</li>
      </ul>
      <h4>Portfolio &amp; experience</h4>
      <ul>
        <li>Founder, Uprise City Integrated Resources Ltd</li>
        <li>Former Business Development Officer, Fineworld Digital, Abuja</li>
        <li>Former Brand Consultant, Otada Solutions Group of Companies</li>
        <li>Resident Priest, St Mary the Virgin Church</li>
        <li>Vice President, Senior Friends Forum, DONYAC</li>
        <li>Host, Global Wealth Conference</li>
      </ul>
      <p>With over a decade of experience in entrepreneurship, management, business planning and branding, Bs'I brings both the technical know-how and the spiritual and emotional intelligence to help individuals, organisations and businesses become distinctively outstanding.</p>
    </div>
  </div>

  <div id="bio-guo">
    <div class="modal-head"><div class="avatar"><img src="{{asset('uprise-city/official_img/guo2.jpg')}}" alt=""></div><div><h3 class="mb-0">Chief Sir Godwin U. Okeke</h3><span class="modal-role">Grand Patron (OON)</span></div></div>
    <div class="modal-body">
      <p>Sir (Dr.) Godwin Ubaka Okeke, popularly known as GUO, was born on Monday, 6 June 1949 at Iyi-Enu Hospital, Ogidi, Onitsha — the sixth of eight children. His father was a textile merchant and community leader in Onitsha; his mother was a wholesale foodstuff merchant and women's group leader.</p>
      <h4>Education</h4>
      <p>GUO began his education in 1955 at Central School, Onitsha, and completed secondary school at Community Grammar School, Nnobi, in 1963. He later underwent "Man O' War" leadership training in preparation for national service — a course that helped prepare him for the Nigerian Civil War and for navigating the turbulent waters of business.</p>
      <h4>Family</h4>
      <p>In 1976, GUO married Lady (Dr.) Patricia Obiageli Okeke, a retired civil servant and Proprietress of Supreme Knowledge Schools, Nkpor, Onitsha.</p>
      <h4>Business &amp; philanthropy</h4>
      <ul>
        <li>Runs a transport company with around 55 bus terminals across Nigeria</li>
        <li>Patron, Anambra Blind Students Association</li>
        <li>Patron, Central School for the Deaf and Dumb</li>
        <li>Provides financial support and mentoring for start-up businesses</li>
      </ul>
      <p>His guiding motto: <em>"Integrity, Hardwork and the Grace of God."</em></p>
    </div>
  </div>

  <div id="bio-chinedu">
    <div class="modal-head"><div class="avatar"><img src="{{asset('uprise-city/official_img/chinedu.jpg')}}" alt=""></div><div><h3 class="mb-0">Chinedu Okwuosa</h3><span class="modal-role">Executive Representative</span></div></div>
    <div class="modal-body">
      <p>Chinedu C. Okwuosa ("Prince") is a highly self-motivated leader who has spent most of his life inspiring and building leadership in others. After graduating with honours from university, he spent five years exploring his passions — authoring three personal and career-development books and speaking at youth conferences across Nigeria.</p>
      <p>Ahead of releasing his first book, <em>Finding Your Career Path</em> (2016), he led a career-awareness campaign that took him to over 20 high schools and colleges in Eastern Nigeria, providing career guidance to students and undergraduates through customised development tools.</p>
      <p>He co-founded Uprise City with his friend Bs'I Molokwu and served as its executive director for several years, co-hosting and facilitating major conferences including the Global Wealth Conference. In 2019, he hosted "Brand 360," a personal and career brand-building event that mobilised around 100 young talents in Onitsha, alongside the launch of his book <em>Becoming an Irresistible Brand</em>.</p>
      <p>Chinedu currently resides in the US, where he holds a teaching and graduate-assistant contract with a state university. His vision remains constant: to inspire, influence and impact the next generation of global leaders and executives.</p>
    </div>
  </div>

  <div id="bio-precious">
    <div class="modal-head"><div class="avatar"><img src="{{asset('uprise-city/official_img/precious.jpg')}}" alt=""></div><div><h3 class="mb-0">Precious Ngozika-Oli Ochudo</h3><span class="modal-role">Strategic &amp; Organisational Manager</span></div></div>
    <div class="modal-body">
      <p>Precious Ngozika Ibeazor is a dynamic digital marketing educator, public speaking coach and exceptional master of ceremonies, driven by a mission to help professionals and entrepreneurs amplify their voices, sell with clarity, and build bold, bankable brands.</p>
      <p>She serves as Chief Growth Marketing Officer at Coachivate, a global coaching and capacity-development platform founded by Coach FAA, a Gallup Certified Strengths Coach and Global HR Leader — playing a pivotal role in brand positioning and campaign strategy for high-impact programmes such as EPIC Mandate.</p>
      <p>As founder of The Social Media Marketing Academy, she has trained over 250 business owners, freelancers and social media professionals in content marketing and digital sales, serving stay-at-home parents, career changers, and growing business owners alike.</p>
      <p>Precious holds a B.A. in Linguistics from Nnamdi Azikiwe University, Awka, and is an alumna of Adullam Theological Seminary. She is also an author and minister of the gospel, and a proud member of DSI by NaijaBrandChick.</p>
    </div>
  </div>

  <div id="bio-somto">
    <div class="modal-head"><div class="avatar"><img src="{{asset('uprise-city/official_img/somto.jpg')}}" alt=""></div><div><h3 class="mb-0">Somtochukwu Okafor Vincent</h3><span class="modal-role">Business Administrator</span></div></div>
    <div class="modal-body">
      <p>Somtochukwu Okafor Vincent, ESV, is an Estate Surveyor and CEO of Perfect Home Services — a highly accomplished and visionary leader with extensive experience in real estate, interior design, and community development.</p>
      <h4>Expertise</h4>
      <ul>
        <li>Real estate development</li>
        <li>Estate surveying and valuation</li>
        <li>Interior design and decoration</li>
        <li>Leadership, management and community development</li>
      </ul>
      <h4>Notable achievements</h4>
      <ul>
        <li>Founded Perfect Home Services, a multidimensional real estate and interior design firm</li>
        <li>Trained numerous individuals in interior design through Perfect Home School</li>
        <li>Recipient of multiple business, leadership and faith-based awards</li>
      </ul>
      <h4>Education</h4>
      <ul>
        <li>Estate Management, Federal Polytechnic</li>
        <li>Estate Management, University of Nigeria, Enugu Campus</li>
      </ul>
    </div>
  </div>

  <div id="bio-amara">
    <div class="modal-head"><div class="avatar"><img src="{{asset('uprise-city/official_img/amara.jpg')}}" alt=""></div><div><h3 class="mb-0">Amara Molokwu</h3><span class="modal-role">Analyst</span></div></div>
    <div class="modal-body">
      <p>Obianuju Amara Molokwu is a passionate woman driven by purpose, structure and spiritual clarity. She helps individuals, entrepreneurs and business owners simplify their work and strengthen their systems.</p>
      <p>She holds a degree in English and Literary Studies from the Federal University of Wukari, Taraba State, and currently works as a school administrator overseeing operations and records.</p>
      <p>She teaches and empowers entrepreneurs, administrators and business owners to automate repetitive tasks and build digital systems that work for them. Beyond systems, she is passionate about women's development, mentoring women to grow spiritually, emotionally and professionally, and serves as a minister of the gospel speaking on faith, identity and intentional living.</p>
    </div>
  </div>

  <div id="bio-livinus">
    <div class="modal-head"><div class="avatar"><img src="{{asset('uprise-city/official_img/livinus.jpg')}}" alt=""></div><div><h3 class="mb-0">Livinus Chinonso</h3><span class="modal-role">Director of Operations</span></div></div>
    <div class="modal-body">
      <p>Livinus Chinonso is an accountant by profession, a brand strategist, business coach and a professional musician.</p>
      <h4>Areas of expertise</h4>
      <ul>
        <li>Business development</li>
        <li>Branding services</li>
        <li>Music services</li>
        <li>Business coaching</li>
      </ul>
      <h4>Portfolio &amp; experience</h4>
      <ul>
        <li>President, LIVIC WORLD</li>
        <li>Former Business Analyst at Uprise City</li>
        <li>President, Uprise City, Enugu State Chapter</li>
        <li>Lead Facilitator, LIVIC Business School</li>
        <li>Founder, LIVIC Foundation</li>
      </ul>
      <h4>Academic qualifications</h4>
      <ul>
        <li>HND Accounting</li>
        <li>Diploma in Computer</li>
      </ul>
    </div>
  </div>

  <div id="bio-collins">
    <div class="modal-head"><div class="avatar"><img src="{{asset('uprise-city/official_img/mypicture.jpg')}}" alt=""></div><div><h3 class="mb-0">Oguno Collins</h3><span class="modal-role">Developer &amp; Programmer and Car Dealer</span></div></div>
    <div class="modal-body">
      <p>Oguno Collins is a passionate software and web developer with strong expertise in building dynamic, user-focused web applications. His journey began at Kodex Africa, where he honed his skills in full-stack development — mastering front-end technologies like HTML, CSS, Bootstrap, JavaScript and React, and expanding into back-end development with Laravel and Python.</p>
      <p>Beyond development, he has a strong passion for teaching and mentoring — starting as a Web Development Tutor at Digital Dreams Limited, and continuing that work today at Solotech.ai Limited, helping students build strong foundations in modern web technologies.</p>
      <p>With experience spanning UI/UX design in Figma, responsive web development, and mentoring future developers, Oguno is dedicated to creating impactful digital solutions and empowering the next generation of tech talent. Learn more at <a href="https://ogcollins.com" target="_blank" rel="noopener" style="color:var(--brass); font-weight:700;">ogcollins.com</a>.</p>
    </div>
  </div>

</div>

<div class="modal-overlay" data-modal-overlay>
  <div class="modal"></div>
</div>

<footer class="site-footer">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
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
              <li><a href="{{route('about')}}">About Us</a></li>
              <li><a href="{{route('officials')}}">Officials</a></li>
              <li><a href="{{route('programmes')}}">Courses</a></li>
              <li><a href="{{route('gallery')}}">Gallery</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Global Wealth Conference</h4>
            <ul>
              <li><a href="{{route('speakers')}}">Speakers</a></li>
              <li><a href="{{route('tickets')}}">Tickets</a></li>
              <li><a href="{{route('sponsors')}}">Sponsors</a></li>
              <li><a href="{{route('contact')}}">Contact Us</a></li>
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

<script src="{{asset('uprise-city/js/main.js')}}"></script>
</body>
</html>
