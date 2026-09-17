<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speakers | Global Wealth Conference — Uprise City</title>
    <meta name="description" content="Meet the speakers and panelists of the Uprise City Global Wealth Conference 2026.">
    <link rel="stylesheet" href="{{ asset('uprise-city/css/style.css') }}" />
    <link rel="icon" href="{{ asset('uprise-city/img/uprise.jpg') }}">
</head>

<body>

    <header class="site-header">
        <div class="nav-wrap">
            <a href="{{ url('/') }}" class="brand">
                <span style="width: 80px; height: 80px">
                    <img src="{{ asset('uprise-city/img/uprise.jpg') }}" width="100%" height="100%" alt="" />
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
            <p class="breadcrumb"><a href="{{ url('/') }}">Home</a> / <span>Speakers</span></p>
            <h1>Global Wealth Conference Speakers</h1>
            <p style="max-width:60ch; color:rgba(247,244,236,.7);">Our lineup features visionary leaders, industry
                experts and changemakers from Nigeria and beyond. Tap any card to read a full profile.</p>
            <a href="https://forms.gle/jDSWcwRPrVbEDwoE7" target="_blank" rel="noopener" class="btn btn-brass"
                style="margin-top:20px;">Register Now</a>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <span class="kicker">Featured Speakers</span>
            <h2 style="margin-bottom:40px;">Our Speakers</h2>

            <div class="people-grid">

                <div class="person-card" data-bio-trigger="sp-bsi">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/bsi2.jpg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Rev Bs'I Molokwu</h3>
                        <span class="person-role">Founder &amp; Host</span>
                        <p>Kingdom leadership coach and brand strategist speaking on wealth creation, leadership and
                            business development.</p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-peter">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/spekaer1.jpg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Dr Jamie Pajoel</h3>
                        <span class="person-role">Founder and Global President</span>
                        <p>Founder and Global President Jamie Pajoel International (Canada)</p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-elisha">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/guo2.jpg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Chief Dr Sir Godwin U. Okeke</h3>
                        <span class="person-role">Grand Patron</span>
                        <p>Businessman and philanthropist based in Lagos, guided by the motto "Integrity, Hardwork and
                            the Grace of God."</p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-charles">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/speaker2.jpg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Hon Dr Tony Somtochukwu Udeze</h3>
                        <span class="person-role">Honoroable speaker, Anambra State.</span>
                        <p>Hon Dr Tony Somtochukwu Udeze (Honorable Speaker, Anambra State House of Assembly) (Special
                            Guest of Honor)
                        </p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-ceo">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/speaker3.png') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>PASTOR DR. AKACHI NWOKE</h3>
                        <span class="person-role">LEAD PASTOR, THE AFTERNOON CHURCH</span>
                        <p>ENTREPRENEUR | BUSINESS LEADER | LEADERSHIP MENTOR | HUMANITARIAN
                        </p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-prof">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/speaker4.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Pastor Sam Obiorah</h3>
                        <span class="person-role">Academic</span>
                        <p>Career academic with extensive industrial and entrepreneurial research experience.</p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-mike">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/speaker5.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Hon Ifeoma Mimi Azikiwe</h3>
                        <span class="person-role">Clergy</span>
                        <p>Vicar and radio/tele-evangelist recognised for impactful ministry across the Diocese on the
                            Niger.</p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-val">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/speaker6.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Sir Chinedu Nwonu</h3>
                        <span class="person-role">Author &amp; Life Coach</span>
                        <p>Serial entrepreneur and CEO of Montage Hub Africa, coaching people to lead with purpose.</p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-ifeoma">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/speaker7.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Pastor Mrs Ifeoma Abayol</h3>
                        <span class="person-role">Hospitality Entrepreneur</span>
                        <p>Co-founder of Chillis Foods Ltd, now operating 12 branches across Nigeria.</p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-okoye">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/speaker8.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Pastor Uzor Jonathan</h3>
                        <span class="person-role">Founder and Senior Pastor of LoveCity Gospel Center</span>
                        <p>A growing minister with multiple Expressions across Nigeria.</p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

                <div class="person-card" data-bio-trigger="sp-uche">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/speaker9.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Pastor Francis Udeh</h3>
                        <span class="person-role">STEM Education Advocate</span>
                        <p>Founder of Edufun Technik, bringing STEM education to underserved communities in Eastern
                            Nigeria.</p>
                        <span class="read-more">Read full profile</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section section--panel">
        <div class="container">
            <span class="kicker">Panel Discussion</span>
            <h2 style="margin-bottom:40px;">Our Panelists and Officials</h2>
            <div class="people-grid" style="grid-template-columns:repeat(2,1fr); max-width:1500px;">
                <div class="person-card" data-bio-trigger="sp-nkem">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/official_img/precious.jpg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>⁠Precious Ngozika-Oli Ochudo</h3>
                        <span class="person-role">Panelist</span>
                        <p>Joining the Global Wealth Conference panel discussion.</p>
                    </div>
                </div>
                <div class="person-card" data-bio-trigger="sp-linda">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/pane1.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>IzzySax</h3>
                        <span class="person-role">(Comic and Music Break)</span>
                        <p>Joining the Global Wealth Conference panel discussion.</p>
                    </div>
                </div>
                <div class="person-card" data-bio-trigger="sp-somto2">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/pane2.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>⁠Gwacham Chidiogo</h3>
                        <span class="person-role">(Red Carpet Host)</span>
                        <p>Joining the Global Wealth Conference panel discussion.</p>
                    </div>
                </div>
                <div class="person-card" data-bio-trigger="sp-somto2">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/pane3.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Ogechukwu Ufoeze Odogwu</h3>
                        <span class="person-role">(Compàre)</span>
                        <p>Joining the Global Wealth Conference panel discussion.</p>
                    </div>
                </div>
                <div class="person-card" data-bio-trigger="sp-somto2">
                    <div class="avatar">
                        <img src="{{ asset('uprise-city/eventspeaker_img/pane5.jpeg') }}" alt="">
                    </div>
                    <div class="person-body">
                        <h3>Rev Nonso Anene</h3>
                        <span class="person-role">(Moderator)</span>
                        <p>Joining the Global Wealth Conference panel discussion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section--tight section--dark center">
        <div class="container">
            <h2 style="max-width:26ch; margin:0 auto 12px;">Ready to learn from this lineup in person?</h2>
            <p class="lede mx-auto" style="margin-bottom:20px;">Access to all sessions is included with every ticket
                tier.</p>
            <a href="{{ route('tickets') }}" class="btn btn-brass">View Tickets</a>
        </div>
    </section>

    <!-- ===== Bio source content ===== -->
    <div style="display:none;">

        <div id="sp-bsi">
            <div class="modal-head">
                <div class="avatar"><span>BM</span></div>
                <div>
                    <h3 class="mb-0">Rev Bs'I Molokwu</h3><span class="modal-role">Founder &amp; Host</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Bs'I is a kingdom leadership coach, brand strategist, entrepreneur, national transformation
                    strategist, youth pastor and priest. He mentors, coaches, writes and speaks on kingdom matters,
                    wealth creation, leadership, management, personal development and branding.</p>
                <p>With over a decade of experience in entrepreneurship, business planning, branding and leadership,
                    Bs'I brings deep insight and emotional intelligence to help individuals, organisations and
                    businesses become distinctively outstanding — gaining local dominance and global relevance.</p>
            </div>
        </div>

        <div id="sp-peter">
            <div class="modal-head">
                <div class="avatar"><span>PO</span></div>
                <div>
                    <h3 class="mb-0">DR. JAMIE PAJOEL</h3><span class="modal-role">Founder and Global
                        President</span>
                </div>
            </div>
            <div class="modal-body">
                <p>According to Favikon report, Dr. Jamie Pajoel was ranked among the “Top 20 Leadership Influencers in
                    Canada (2025) for his growing influence on leadership pracOce in Canada and across the globe.</p>
                <p>The recogniOon highlights Dr. Pajoel’s results-driven leadership philosophy: Leadership is proven in
                    small, repeatable behaviors—not slogans.</p>
                <p>Dr. Jamie Pajoel is a global leadership consultant, speaker and trainer, known for converOng
                    leadership theory into on-the-job behaviors. He teaches pracOcal rouOnes that help leaders deliver
                    results and translates complex leadership theory into a compact set of high-leverage habits for
                    Monday-morning use—simple, transferable, and pracOcal.</p>
                <p>Dr Jamie Pajoel has over 25 years of leadership and management consulOng experience, in designing,
                    implemenOng, and addressing the growing leadership competency skill gap among professionals(a
                    criOcal challenge impacOng Canadian workforce efficiency and economic development). Hence, his
                    approach offers innovaOve methods to leadership and includes an in- depth knowledge on leading
                    organizaOons and change.</p>
                <p>Dr. Pajoel’s career highlights include 1,000+ speeches delivered globally and training more than
                    100,000 professionals across the globe.</p>
                <p>Dr. Jamie Pajoel is founder, Workplace Leadership InsOtute, Canada- A leadership organizaOon aimed at
                    equipping C-suite ExecuOves, Mid-level Managers, and emerging leaders, with the relevant leadership
                    skills needed to navigate workplace challenges, enhance performance, develop leadership
                    competencies, and drive organizaOonal growth.</p>
                <p>Dr. Jamie’s global influence extends beyond borders, as he has been instrumental in bridging
                    workplace leadership gap in Canada and across the globe. His work has been recognized with the State
                    of Michigan Leadership Award and an African Union honor (2014). In 2018, he was invited to President
                    Bill Clinton’s program, in acknowledgment of his contribuOon to leadership
                    and enterprise development. He also holds an honorary doctorate from Myles Leadership University.
                </p>
                <p>He is the host, Workplace Leadership Conference, Canada- A global event plaborm for high-level
                    knowledge-sharing, networking and global recogniOon for corporate execuOves and workplace
                    professionals from diverse industries. He is also the author of ExecuOng with Excellence, Becer
                    Managers for Becer Workplace, Leading OrganizaOons and Change, and Leadership Guidelines for
                    Emerging Leaders.</p>
            </div>
        </div>

        <div id="sp-elisha">
            <div class="modal-head">
                <div class="avatar"><span>EM</span></div>
                <div>
                    <h3 class="mb-0">Pastor Elisha Mamman</h3><span class="modal-role">Speaker &amp; Trainer</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Elisha Mamman is a John C. Maxwell-certified speaker and trainer with a core emphasis on leadership,
                    mindset, kingdom finance and goal setting — recognised as one of Nigeria's most sought-after
                    inspirational speakers.</p>
                <p>He is the founder of Elisha Mamman International and convener of The Winning Mindset, a fast-growing
                    motivational platform in Nigeria that has reached thousands across seven states. He is married to
                    Chinonso Mamman, CEO of Noneli Crafty Cakes, and together they have two children.</p>
            </div>
        </div>

        <div id="sp-charles">
            <div class="modal-head">
                <div class="avatar"><span>CA</span></div>
                <div>
                    <h3 class="mb-0">Dr Charles Apoki</h3><span class="modal-role">Clergy &amp; Conference
                        Speaker</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Dr Charles Apoki is a 1984 graduate of the College of Medicine, University of Ibadan, and holds a
                    Master's degree in Public Administration. He is an ordained clergyman and international conference
                    speaker across several denominations, and a resource person to companies and organisations across
                    Africa and Europe.</p>
                <p>He organises the "Word and Wisdom Conference," a capacity-building event that draws pastors, church
                    leaders and business people, and is proprietor of Petra Christian Academy in Nigeria. He is also an
                    experienced marriage counsellor.</p>
            </div>
        </div>

        <div id="sp-ceo">
            <div class="modal-head">
                <div class="avatar"><span>CE</span></div>
                <div>
                    <h3 class="mb-0">PASTOR DR. AKACHI NWOKE</h3><span class="modal-role">LEAD PASTOR, THE AFTERNOON
                        CHURCH</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Pastor Dr. Akachi Nwoke is a dynamic preacher, visionary leader, accomplished entrepreneur,
                    leadership mentor, and humanitarian whose influence spans ministry, business, innovation, education,
                    and social transformation. He is widely recognized for raising purpose-driven leaders while
                    demonstrating that faith, excellence, and enterprise can work together to transform lives,
                    communities, and nations.</p>
                <p>Born on March 22, 1990, in Aba, Abia State, Pastor Dr. Akachi Nwoke hails from Amaocha Afara in
                    Mbaitolu Local Government Area of Imo State. He earned a Bachelor of Science degree in Agriculture
                    from the Federal University of Technology, Owerri, and later obtained a Doctorate in Theology from
                    Teamwork Bible College in 2019, reflecting both academic excellence and a deep commitment to
                    spiritual leadership.</p>
                <p>As the Lead Pastor of The Afternoon Church, he leads a thriving ministry devoted to biblical
                    teaching, discipleship, leadership development, and societal transformation. Since founding the
                    ministry in 2019, Pastor Akachi has inspired thousands to pursue purpose, lead with integrity, and
                    become agents of change in every sphere of influence.</p>
                <p>Beyond the pulpit, Pastor Akachi is a respected entrepreneur and business leader with interests
                    spanning technology, real estate, financial technology, education, travel, and social enterprise. He
                    is the visionary behind K-Mobile, a fast-growing African technology brand producing affordable
                    smartphones, tablets, smart devices, and consumer electronics designed to meet the needs of emerging
                    markets. His entrepreneurial journey reflects his passion for innovation, value creation, and
                    building globally competitive African brands.</p>
                <p>His commitment to nation-building extends far beyond business. Through initiatives such as The Free
                    School, The Free Hospital, The Free Restaurant, The Rehab Project, Digitize Africa, The
                    Undergraduate Scholarship Project, Emerald Institute, Afrikaan Homes, and Trans Emerald Travels, he
                    has empowered thousands through education, healthcare, entrepreneurship, digital skills, housing,
                    and humanitarian support. His vision is to raise a generation of transformed African leaders
                    equipped spiritually, intellectually, and economically.</p>
                <p>Pastor Akachi is also the convener of the African Youth Conference, a movement that has impacted
                    thousands of young people through spiritual revival, leadership development, entrepreneurship, and
                    practical empowerment. His passion for youth development continues to shape lives across Nigeria and
                    beyond.</p>
                <p>Recognized internationally for his contributions to peace, leadership, and human development, Pastor
                    Dr. Akachi Nwoke serves as a United Nations Peace Ambassador and ECOWAS Youth Ambassador, earning
                    numerous local and international recognitions for his outstanding service.</p>
                <p>At the Global Wealth Conference 2026, Pastor Dr. Akachi Nwoke brings a unique blend of spiritual
                    wisdom, entrepreneurial excellence, humanitarian leadership, and practical insight. His message
                    challenges participants to build lives, businesses, and institutions that create lasting value while
                    advancing God's purpose and transforming society.</p>
            </div>
        </div>

        <div id="sp-prof">
            <div class="modal-head">
                <div class="avatar"><span>SS</span></div>
                <div>
                    <h3 class="mb-0">Prof. Sogbesan Olusegun Oludapo</h3><span class="modal-role">Academic</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Professor Sogbesan Olusegun Oludapo was born in Lagos State and hails from Ago-Iwoye, Ijebu, Ogun
                    State, though he has lived much of his adult life in Anambra State. He is an academic with years of
                    industrial and entrepreneurial experience shaping his research and publications.</p>
                <p>His academic path spans the University of Ibadan, University of Lagos, Nnamdi Azikiwe University, the
                    Federal University of Technology, and international study at Rome Business School (Italy) and
                    European Global School University (Paris).</p>
            </div>
        </div>

        <div id="sp-mike">
            <div class="modal-head">
                <div class="avatar"><span>MO</span></div>
                <div>
                    <h3 class="mb-0">Ven. Mike Okoh</h3><span class="modal-role">Clergy</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Venerable Michael Okoh is a seasoned minister of the gospel from Afikpo, Ebonyi State — a priest in
                    the Diocese on the Niger, Church of Nigeria (Anglican Communion), and Vicar of the Church of the
                    Transfiguration of Our Lord, Onitsha.</p>
                <p>Ordained a Deacon in 2010 and a Priest in 2011, he was collated Canon in 2018 and preferred Venerable
                    in 2021. He is widely recognised for his radio and tele-evangelism ministry, and holds an M.A. in
                    New Testament Studies alongside degrees in Theology and Religion and Philosophy.</p>
            </div>
        </div>

        <div id="sp-val">
            <div class="modal-head">
                <div class="avatar"><span>AV</span></div>
                <div>
                    <h3 class="mb-0">Akpoveta Valentine</h3><span class="modal-role">Author &amp; Life Coach</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Akpoveta Valentine is a renowned author, life coach and serial entrepreneur with over two decades of
                    experience empowering individuals and organisations to unlock their full potential.</p>
                <p>CEO of Montage Hub Africa and Senior Partner at On This Rock Marketing LLC (USA), Valentine combines
                    heightened awareness, communication and actionable strategy to drive transformative success. His
                    books and coaching programmes have inspired people to lead with purpose and communicate effectively.
                </p>
            </div>
        </div>

        <div id="sp-okoye">
            <div class="modal-head">
                <div class="avatar"><span>OO</span></div>
                <div>
                    <h3 class="mb-0">Prof. Obiekwe Okoye</h3><span class="modal-role">Ophthalmologist &amp;
                        Educator</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Professor Obiekwe Okoye is a renowned ophthalmologist, researcher and educator whose impact on eye
                    care and medical education in Nigeria is profound. He is a Professor of Ophthalmology at the
                    University of Nigeria, Enugu Campus, and an Honorary Consultant at the University of Nigeria
                    Teaching Hospital (UNTH).</p>
                <p>Born in 1971, he earned his MBBS from Nnamdi Azikiwe University in 1996 and completed his
                    ophthalmology fellowships through the National Postgraduate Medical College of Nigeria between 2003
                    and 2007.</p>
                <h4>Community impact</h4>
                <p>He has led outreach programmes delivering free eye care, cataract surgeries and preventive screenings
                    across Anambra, Enugu and Abia States, and coordinates the WACS/OSN SESS Annual Neuro-Ophthalmology
                    Course for young ophthalmologists.</p>
                <h4>Recognition</h4>
                <ul>
                    <li>Award of Excellence, Christian Medical and Dental Association of Nigeria</li>
                    <li>Excellent Leadership Award, Full Gospel Businessmen Fellowship, Enugu</li>
                    <li>Diamond ICON Award, Diamond Flavour</li>
                </ul>
            </div>
        </div>

        <div id="sp-ifeoma">
            <div class="modal-head">
                <div class="avatar"><span>IA</span></div>
                <div>
                    <h3 class="mb-0">Pastor Mrs Ifeoma Abayol</h3><span class="modal-role">Hospitality
                        Entrepreneur</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Pastor Mrs Ifeoma Abayol is Managing Director of Chillis Foods Ltd, which she co-founded with her
                    husband. A graduate of Economics from Enugu State University of Science and Technology, she was
                    inspired to change the food-service industry by creating warm, welcoming spaces for people to relax
                    and enjoy themselves.</p>
                <p>Chillis Foods Ltd now has 12 branches across several Nigerian states. Beyond business, she has helped
                    several women discover and develop their potential, and is blessed with four children.</p>
            </div>
        </div>

        <div id="sp-uche">
            <div class="modal-head">
                <div class="avatar"><span>UO</span></div>
                <div>
                    <h3 class="mb-0">Pastor Francis Udeh</h3><span class="modal-role">Founder and Senior Pastor of
                        LoveCity Gospel Center.</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Pastor Francis Udeh is the founder and Senior Pastor of LoveCity Gospel Center, a growing ministry
                    with multiple Expressions across Nigeria. A medical laboratory scientist by profession. He is also
                    the Principal Consultant at Church Growth Consult, where he helps churches and ministries build
                    healthy leadership, sustainable growth, and organizational excellence.</p>
                <p>A respected leadership strategist, Bible teacher, and conference speaker, Pastor Francis is known for
                    communicating timeless biblical truths with depth, clarity, and practical relevance. His ministry
                    has equipped pastors and leaders to build thriving churches, develop transformational leaders, and
                    maximize Kingdom impact.</p>
                <p>Driven by a passion to see the local church flourish, Pastor Francis continues to raise market place
                    leaders who influence generations with excellence, and lasting significance.</p>
                <p>He is Happily married to Pastor Ify Udeh and they are Blessed with three beautiful Daughters.</p>
            </div>
        </div>

        <div id="sp-nkem">
            <div class="modal-head">
                <div class="avatar"><span>NO</span></div>
                <div>
                    <h3 class="mb-0">Dr Nkem Okeke</h3><span class="modal-role">Panelist</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Dr Nkem Okeke joins the Global Wealth Conference panel discussion, bringing expert perspective to the
                    conversation.</p>
            </div>
        </div>

        <div id="sp-linda">
            <div class="modal-head">
                <div class="avatar"><span>LN</span></div>
                <div>
                    <h3 class="mb-0">Mrs Linda Nnodiogu</h3><span class="modal-role">Writer &amp; Child
                        Advocate</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Mrs Linda Nnodiogu is a writer, child advocate and entrepreneur — Creative Director of Mbari Media
                    Africa and founder of the Preserved Childhood Foundation.</p>
                <p>She has authored 15 books, including children's literature approved for secondary schools in three
                    states, and has written over 60 original screenplays for ROK, Africa Magic and major YouTube
                    channels and production studios. In 2020, she was named among Leading Ladies Africa's 100 Most
                    Influential Women for her child-advocacy work.</p>
            </div>
        </div>

        <div id="sp-somto2">
            <div class="modal-head">
                <div class="avatar"><span>SO</span></div>
                <div>
                    <h3 class="mb-0">Somtochukwu Okafor Vincent</h3><span class="modal-role">Business
                        Administrator</span>
                </div>
            </div>
            <div class="modal-body">
                <p>Somtochukwu Okafor Vincent, ESV, is an Estate Surveyor and CEO of Perfect Home Services, a
                    multidimensional real estate and interior design firm. He has trained numerous individuals in
                    interior design through Perfect Home School and holds qualifications in Estate Management from the
                    Federal Polytechnic and the University of Nigeria, Enugu Campus.</p>
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
                    <a href="{{ url('/') }}" class="brand">
                        <span style="width: 80px; height: 80px">
                            <img src="{{ asset('uprise-city/img/uprise.jpg') }}" width="100%" height="100%"
                                alt="" />
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
