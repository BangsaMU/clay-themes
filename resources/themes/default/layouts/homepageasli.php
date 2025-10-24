<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PT. Meitech Eka Bintan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="PT. Meitech Eka Bintan" name="keywords" />
    <meta content="Engineering and Constructions" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('themes/cms_meb/assets/favicon/favicon.ico" rel="icon') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('themes/cms_meb/assets/favicon/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('themes/cms_meb/assets/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('themes/cms_meb/assets/favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('themes/cms_meb/assets/favicon/site.webmanifest') }}" />
    <link rel="icon" href="{{ asset('themes/cms_meb/assets/img/favicon.png') }}" type="image/png"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('themes/cms_meb/assets/lib/flaticon/font/flaticon.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/cms_meb/assets/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/cms_meb/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/cms_meb/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/cms_meb/assets/lib/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('themes/cms_meb/assets/lib/slick/slick-theme.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('themes/cms_meb/assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
         <div class="banner-wraper">
          <!-- Top Bar Start -->
          <div class="top-bar">
            <div class="container-fluid">
              <div class="row">
                <!-- <div class="col-lg-1 col-md-1"></div> -->
                <div class="col-lg-3 col-md-3">
                  <div class="logo">
                    <a href="index.html">
                      <img class="animated fadeInUp" src="{{ asset('themes/cms_meb/assets/img/meitech-logo.png') }}" alt="Logo" />
                      <p class="animated fadeInUp">Integrated Steel Fabricator</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Top Bar End -->

          <!-- Nav Bar Start -->
          <div class="nav-bar">
            <div class="container-fluid">
              <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav mr-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about/company-overview.html" class="nav-item nav-link">About Us</a>
                    <a href="service.html" class="nav-item nav-link">Capabilities</a>
                    <a href="facilities.html" class="nav-item nav-link" >Facilities</a>
                    <a href="portfolio.html" class="nav-item nav-link">Project</a>
                    <a href="blog.html" class="nav-item nav-link">Media Center</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                  </div>
                  <div class="ml-auto">
                    <a class="btn" href="career/job-openings.html">Join Us</a>
                  </div>
                </div>
              </nav>
            </div>
          </div>
          <!-- Nav Bar End -->

          <!-- Carousel Start -->
          <div id="carousel" class="carousel slide carousel-home" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
              <li data-target="#carousel" data-slide-to="3"></li>
              <li data-target="#carousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('themes/cms_meb/assets/img/carousel/slide-0.jpg') }}" alt="Carousel Image" />
                <div class="carousel-caption">
                  <p class="animated fadeInRight">
                    One Stop Solution
                  </p>
                  <h1 class="animated fadeInLeft">
                    Integrated Steel Fabricator and Installation
                  </h1>
                </div>
              </div>

              <div class="carousel-item">
                <img src="{{ asset('themes/cms_meb/assets/img/carousel/slide-1.jpg') }}" alt="Carousel Image" />
                <div class="carousel-caption">
                  <p class="animated fadeInRight">
                    Precision Fabrication
                  </p>
                  <h1 class="animated fadeInLeft">
                    For a Sustainable Future
                  </h1>
                </div>
              </div>

              <div class="carousel-item">
                <img src="{{ asset('themes/cms_meb/assets/img/carousel/slide-2.jpg') }}" alt="Carousel Image" />
                <div class="carousel-caption">
                  <p class="animated fadeInRight">
                    Accentuate Quality and Safe Operations
                  </p>
                  <h1 class="animated fadeInLeft">
                    PT. Meitech Eka Bintan
                  </h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('themes/cms_meb/assets/img/carousel/slide-3.jpg') }}" alt="Carousel Image" />
                <div class="carousel-caption">
                  <p class="animated fadeInRight">
                    Crafting Quality Fabrications
                  </p>
                  <h1 class="animated fadeInLeft">
                    With Pride and Precision
                  </h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('themes/cms_meb/assets/img/carousel/slide-4.jpg') }}" alt="Carousel Image" />
                <div class="carousel-caption">
                  <p class="animated fadeInRight">
                    Creating Engineering Solutions
                  </p>
                  <h1 class="animated fadeInLeft">
                    For a Better Tomorrow
                  </h1>
                </div>
              </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- Carousel End -->
         </div>

        <!-- Feature Start-->
        <div class="feature wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('themes/cms_meb/assets/img/svg/oil-platform-svgrepo-com.svg') }}" alt="icon" class="svg-icon" />
                            </div>
                            <div class="feature-text">
                                <h3 class="counter-up" data-toggle="counter-up">
                                    40000
                                </h3>
                                <h3>Tons Annual Throughout</h3>
                                <p>
                                    Impressive up to 40,000 tons annual capacity,demonstrating our ability to efficiently and effectively.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <!-- <i class="flaticon-building"></i> -->
                                <img class="svg-icon" src="{{ asset('themes/cms_meb/assets/img/svg/analysis-svgrepo-com.svg') }}" />
                            </div>
                            <div class="feature-text">
                                <h3 class="counter-up" data-toggle="counter-up">46</h3>
                                <h3>Hectares Total Fabrication Area</h3>
                                <p>
                                    Designed in few zones to maximize the flow of production between lay down, warehouses, fabrication shops, and erection
                                    activities
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('themes/cms_meb/assets/img/svg/dock-svgrepo-com.svg') }}" alt="" class="svg-icon" />
                            </div>
                            <div class="feature-text">
                                <h3 class="counter-up" data-toggle="counter-up">200</h3>
                                <h3>Meters Jetty of 10.000 DWT</h3>
                                <p>
                                    With a water depth of 8-12 m and protected by an island located in front of it, it allows the jetty to operate all year
                                    round without any restrictions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->

        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{ asset('themes/cms_meb/assets/img/about.jpg') }}" alt="Image" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Welcome to PT. Meitech Eka Bintan</p>
                            <h2>
                                Leading Integrated Steel and Module fabricator for Oil and Gas, Energy and Petrochemical Industry.
                            </h2>
                        </div>
                        <div class="about-text">
                            <p>
                                As a subsidiary of PT. MEINDO ELANG INDAH, which has more than 30 years experiences in Oil and Gas, Energy and
                                Petrochemical Industry, we are collectively committed to deliver each project safely, in accordance with the project's
                                highest quality standards, within the projects’s budget and schedule.
                            </p>
                            <a class="btn" href="about/company-overview.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Fact Start -->
        <div class="fact">
            <div class="container-fluid">
                <div class="row counters">
                    <div class="col-md-6 fact-left wow slideInLeft">
                        <div class="row">
                            <div class="col-6">
                                <div class="fact-icon">
                                    <img src="{{ asset('themes/cms_meb/assets/img/svg/warehouse-stock-svgrepo-com.svg') }}" alt="" class="svg-icon" />
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">12</h2>
                                    <p>Fabrication Workshop</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-address"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">3</h2>
                                    <p>Office Builidng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 fact-right wow slideInRight">
                        <div class="row">
                            <div class="col-6">
                                <div class="fact-icon">
                                    <img src="{{ asset('themes/cms_meb/assets/img/svg/package-box-svgrepo-com.svg') }}" alt="" class="svg-icon" />
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">3</h2>
                                    <p>Standards ISO</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fact-icon">
                                    <img src="{{ asset('themes/cms_meb/assets/img/svg/trophy-svgrepo-com.svg') }}" alt="" class="svg-icon" />
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">12</h2>
                                    <p>Milions Safe Hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->

        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Core Business</p>
                    <h2>Our Capabilities</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('themes/cms_meb/assets/img/projects/CSTS/slide-03.jpg') }}" alt="Image" />
                                <div class="service-overlay"
                                    onclick="document.location.href = '#'">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima modi vero, adipisci labore necessitatibus incidunt eos cum corporis. Voluptates, quisquam? Beatae cupiditate quaerat vero nisi accusantium consequuntur ab. Porro!.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>MODULES</h3>
                                <a class="btn" href="img/projects/CSTS/slide-03.jpg"
                                    data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('themes/cms_meb/assets/img/projects/PETRONAS/slide-04.jpg') }}" alt="Image" />
                                <div class="service-overlay"
                                    onclick="document.location.href = '#'">
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, sequi totam ea sint quae ad consequatur velit? Illo cum nemo dignissimos tempora a temporibus rem accusamus delectus? Labore, quaerat perferendis..
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>JACKET</h3>
                                <a class="btn" href="img/projects/PETRONAS/slide-04.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('themes/cms_meb/assets/img/projects/PETRONAS/slide-03.jpg') }}" alt="Image" />
                                <div class="service-overlay"
                                    onclick="document.location.href = '#'">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime veritatis quis autem quae, ipsam vitae? Suscipit, itaque accusantium soluta facere consequuntur molestiae sunt, eum eos id iusto magnam dolor..
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>TOP SIDE</h3>
                                <a class="btn" href="img/projects/PETRONAS/slide-03.jpg"
                                    data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Video Start -->
        <div class="video wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <button type="button" class="btn-play" data-toggle="modal"
                    data-src="img/videos/profile-meitech-2022-48.mp4" data-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video End -->

        <!-- Service Start -->
        <div class="service">
          <div class="container">
            <div class="section-header text-center">
              <p>Facilities</p>
              <h2>Supporting Facilities</h2>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                  <div class="service-img">
                    <img src="{{ asset('themes/cms_meb/assets/img/capabilities/OFFICE/Thumbnail.jpg') }}" alt="Image" />
                    <div class="service-overlay" onclick="document.location.href = 'capabilities/office-building.html'">
                      <p>
                        Our modern office building offers a
                        comfortable and professional
                        environment with spacious offices,
                        meeting rooms, and a welcoming
                        reception area.
                      </p>
                    </div>
                  </div>
                  <div class="service-text">
                    <h3>OPERATION SUPPORTS</h3>
                    <a class="btn" href="img/capabilities/EQUIPMENT/thumbnail.jpg" data-lightbox="service">+</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                  <div class="service-img">
                    <img src="{{ asset('themes/cms_meb/assets/img/capabilities/WS/Thumbnail.jpg') }}" alt="Image" />
                    <div class="service-overlay" onclick="document.location.href = 'capabilities/workshop-fabrication.html'">
                      <p>
                        Our workshop fabrication services
                        where we offer customized solutions
                        such as welding, cutting, bending,
                        and assembly. Our state-of-the-art
                        workshop is equipped with the latest
                        technology and staffed with
                        experienced professionals who
                        prioritize safety and quality in all
                        our processes.
                      </p>
                    </div>
                  </div>
                  <div class="service-text">
                    <h3>FABRICATION SHOP AND WAREHOUSES</h3>
                    <a class="btn" href="img/capabilities/WS/Thumbnail.jpg" data-lightbox="service">+</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                  <div class="service-img">
                    <img src="{{ asset('themes/cms_meb/assets/img/fab-install/Fab-Install-01.JPG') }}" alt="Image" />
                    <div class="service-overlay" onclick="document.location.href = 'capabilities/heavy-equipment.html'">
                      <p>
                        Our heavy equipment is designed to
                        handle tough conditions and heavy
                        loads. Each piece is well-maintained
                        and our experienced professionals
                        can help you select the right
                        equipment for your project.
                      </p>
                    </div>
                  </div>
                  <div class="service-text">
                    <h3>FABRICATION AND INSTALLATION EQUIPMENTS</h3>
                    <a class="btn" href="img/fab-install/Fab-Install-02.jpg" data-lightbox="service">+</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service End -->

        <!-- Testimonial Start -->
        <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider-nav">
                            <div class="slider-nav">
                                <img src="{{ asset('themes/cms_meb/assets/img/clients/testimonial/CSTS.jpg') }}" alt="Testimonial" />
                            </div>
                            <div class="slider-nav">
                                <img src="{{ asset('themes/cms_meb/assets/img/clients/testimonial/HCML.jpg') }}" alt="Testimonial" />
                            </div>
                            <div class="slider-nav">
                                <img src="{{ asset('themes/cms_meb/assets/img/clients/testimonial/jawa-satu-power.jpg') }}" alt="Testimonial" />
                            </div>
                            <div class="slider-nav">
                                <img src="{{ asset('themes/cms_meb/assets/img/clients/medco energi.jpg') }}" alt="Testimonial" />
                            </div>
                            <div class="slider-nav">
                                <img src="{{ asset('themes/cms_meb/assets/img/clients/testimonial/pertamina-hulu-energi.jpg') }}" alt="Testimonial" />
                            </div>
                            <div class="slider-nav">
                                <img src="{{ asset('themes/cms_meb/assets/img/clients/pertamina hulu mahakam.jpg') }}" alt="Testimonial" />
                            </div>
                            <div class="slider-nav">
                                <img src="{{ asset('themes/cms_meb/assets/img/clients/testimonial/petronas.jpg') }}" alt="Testimonial" />
                            </div>
                            <div class="slider-nav">
                                <img src="{{ asset('themes/cms_meb/assets/img/clients/testimonial/meindo.jpg') }}" alt="Testimonial" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider">
                            <div class="slider-item">
                                <h3>
                                    CSTS (CHIYODA, SAIPEM, TRIPATRA AND SAE)
                                    JOINT OPERATION
                                </h3>
                                <h4>BP TANGGUH ONSHORE</h4>
                                <p>
                                  BP Berau Tangguh LNG Train 3 is an LNG plant converting natural gas into liquid natural gas and send to Indonesia and
                                  overseas. Pipe installation and support pipe racks is one key suppoting for the project. Construction pipe racks
                                  modularization divided into total 75 modules, 26 modules are for middle route area and 49 modules for jetty area.
                                </p>
                            </div>
                            <div class="slider-item">
                                <h3>HCML Husky-CNOOC Madura Limited</h3>
                                <h4>MAC WHP</h4>
                                <p>
                                    MAC WHP will be a minimum facilities 3-legs unmanned wellhead platform with 5 well slots (3 slots for present, 2 slots
                                    for spare). Gas lines from each well are routed directly by using flexible jumper lines to MOPU.
                                </p>
                            </div>
                            <div class="slider-item">
                                <h3>JAWA SATU POWER</h3>
                                <h4>
                                    JAWA SATU GAS INFRASTRUCTURE AND MARINE
                                    WORKS
                                </h4>
                                <p>
                                    PT Pertamina (Persero) have formed a Consortium with Marubeni Corporation and Sojitz (“Owner”) for the development of
                                    LNG Floating Storage and Regasification Facilities including mooring system and gas transmission line i.e. offshore &
                                    onshore gas pipeline and Onshore Receiving Facility (ORF) facilities at the receiving point at Cilamaya site in North
                                    Java “Facilities”.
                                </p>
                            </div>
                            <div class="slider-item">
                                <h3>MEDCO E&P NATUNA LTD.</h3>
                                <h4>FOREL BRONANG</h4>
                                <p>
                                    The Forel and Bronang fields are an offshore prospects located in Block B of the Natuna Sea. Forel field is located in
                                    24 km of Northwest Belanak, while Bronang field is located 40 km of Northwest Belanak and has 300 feet water depth in
                                    average.
                                </p>
                            </div>
                            <div class="slider-item">
                                <h3>
                                    PT PERTAMINA HULU ENERGI WEST MADURA
                                    OFFSHORE
                                </h3>
                                <h4>YY Field Development Optimization</h4>
                                <p>
                                    Refurbish YYA Platform, Deck Extension, New Equipment (Power System, Sea Water Transportation Systems)
                                    Build a 12 inch 3-phase subsea pipeline along ± 1 km from the new location. New Offshore Platform “up to tie-in to the existing YYA KLB pipeline (rigid connection and abandon +1.7 km of existing pipeline remaining from the existing YYA P/F tie-in location)
                                    Brownfield modification in KLB and KLA (instrumentation and monitoring system).
                                </p>
                            </div>
                            <div class="slider-item">
                                <h3>PERTAMINA HULU MAHAKAM</h3>
                                <h4>JUMELAI SISI NUBI</h4>
                                <p>
                                    Pertamina Hulu Mahakam is a subsidiary
                                    of Pertamina, the state-owned oil and
                                    gas company of Indonesia. The company is
                                    engaged in the exploration and
                                    production of oil and gas in the Mahakam
                                    block, located in East Kalimantan,
                                    Indonesia. Pertamina Hulu Mahakam took
                                    over the operations of the Mahakam block
                                    from Total E&P Indonesie in 2018. The
                                    Mahakam block is one of the largest
                                    natural gas producing blocks in
                                    Indonesia, and Pertamina Hulu Mahakam is
                                    committed to maximizing its potential
                                    through sustainable and
                                    responsible operations.
                                </p>
                            </div>
                            <div class="slider-item">
                                <h3>PETRONAS</h3>
                                <h4>BUKIT TUA PHASE 2B</h4>
                                <p>
                                  The Bukit Tua phase-2B project is an expansion of the Bukit Tua oil field, which has been producing since 2015.
                                  Apart from the Ketapang block, Petronas operates the North Madura II production sharing contract (PSC) offshore East
                                  Java.
                                </p>
                            </div>
                            <div class="slider-item">
                                <h3>PT MEINDO ELANG INDAH</h3>
                                <p>
                                    Meindo is an Indonesian construction and
                                    engineering company that was established
                                    in 2004. The company provides a range of
                                    services, including civil and building
                                    construction, mechanical and electrical
                                    engineering, project management, and
                                    procurement. Meindo has worked on
                                    various infrastructure projects in
                                    Indonesia, such as power plants,
                                    airports, and ports. The company is
                                    committed to providing high-quality
                                    services and delivering projects on time
                                    and within budget while prioritizing
                                    safety and environmental sustainability.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Latest Events</p>
                    <h2>Latest From Our Events</h2>
                </div>
                <div class="row blog-page">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('themes/cms_meb/assets/img/projects/YYA/Blog.jpg') }}" alt="Image" />
                                <div class="blog-overlay"
                                    onclick="document.location.href ='media-center/yya-loadout-bintan.html'"></div>
                            </div>
                            <div class="blog-title">
                                <h3>YYA LOADOUT BINTAN</h3>
                                <a class="btn" href="media-center/yya-loadout-bintan.html">+</a>
                            </div>
                            <div class="blog-meta"></div>
                            <div class="blog-text">
                                <p>
                                    KBRN, Bandung; Sejumlah tahapan teknis
                                    mencakup fabrikasi dan sertifikasi
                                    anjungan serta serangkaian FAT (Factory
                                    Acceptance Test) oleh Kontraktor EPCI,
                                    PT Meindo Elang Indah telah dilakukan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('themes/cms_meb/assets/img/projects/PHM/Blog.jpg') }}" alt="Image" />
                                <div class="blog-overlay"
                                    onclick="document.location.href ='media-center/phm-starts-jsn-project-sail-away-jacket-process.html'">
                                </div>
                            </div>
                            <div class="blog-title">
                                <h3>
                                    PHM STARTS JSN PROJECT SAIL AWAY JACKET
                                    PROCESS
                                </h3>
                                <a class="btn"
                                    href="media-center/phm-starts-jsn-project-sail-away-jacket-process.html">+</a>
                            </div>
                            <div class="blog-meta"></div>
                            <div class="blog-text">
                                <p>
                                    PT Pertamina Hulu Mahakam (PHM) as the
                                    operator in the Mahakam Working Area
                                    (WK), with the support of SKK Migas and
                                    PT Pertamina Hulu Indonesia (PHI) as the
                                    holding company, announced that on March
                                    30, 2021, it had carried out the first
                                    stage of the jacket sail away process
                                    for the offshore platform for Jumelai,
                                    North Sisi, North Nubi (JSN) project.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                   <div class="col-md-1"></div>
                  <div class="col-md-6 col-lg-3">
                    <div class="footer-contact">
                      <div class="logo">
                        <a href="index.html">
                          <img src="{{ asset('themes/cms_meb/assets/img/meitech-logo.png') }}" alt="Logo" />
                          <p>Integrated Steel Fabricator</p>
                        </a>
                      </div>
                      <p>
                        <i class="fa fa-map-marker-alt"></i>Jalan
                        Korindo Kp. Melayu, Gunung Kijang, Bintan,
                        Kepulauan Riau, 29151
                      </p>
                      <p>
                        <i class="fa fa-phone-alt"></i>+62-771-4610559, +62-771-4610557
                      </p>
                      <p>
                        <i class="fa fa-envelope"></i><a href="mailto:meb@meitech-ekabintan.com"><img src="{{asset('img/mail.png')}}"></a>
                      </p>
                      <div class="footer-social">
                        Follow us <a href=""><i class="fab fa-linkedin-in"></i></a>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link">
                            <h2>About Us</h2>
                            <a href="about/company-overview.html">Company Overview</a>
                            <a href="about/vision-and-mission.html">Vision & Mission</a>
                            <a href="about/core-strength.html">Core Strength</a>
                            <a href="about/our-clients.html">Our Clients</a>
                            <a href="about/word-from-management.html">Word Form Management</a>
                            <a href="about/our-people.html">Our People</a>
                            <a href="about/quality-management-system.html">Quality Management System</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Useful Pages</h2>
                            <a href="about/company-overview.html">About Us</a>
                            <a href="service.html">Capabilities</a>
                            <a href="facilities.html">Facilities</a>
                            <a href="portfolio.html">Projects</a>
                            <a href="blog.html">Media Center</a>
                            <a href="contact.html">Contact Us</a>
                            <a href="career/job-openings.html">Career</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <p>
                      Copyright &copy; 2023 PT. Meitech Eka Bintan. All rights reserved.
                    </p>
                  </div>
                  <div class="col-md-6 copyright-logo">
                    <p>
                      <img src="{{ asset('themes/cms_meb/assets/img/meitech-logo-white.png') }}" alt="Logo" />
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('themes/cms_meb/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('themes/cms_meb/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('themes/cms_meb/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('themes/cms_meb/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('themes/cms_meb/assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('themes/cms_meb/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('themes/cms_meb/assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('themes/cms_meb/assets/lib/slick/slick.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('themes/cms_meb/assets/js/main.js') }}"></script>
</body>

</html>
