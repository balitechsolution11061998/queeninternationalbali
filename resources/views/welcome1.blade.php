<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Queen International</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/templatemo-edu-meeting.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style2.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <style>

    </style>
    <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

    <!-- Sub Header -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('frontend/img/logo_panjang.png') }}" alt="Logo"
                                class="responsive-logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li><a href="meetings.html">Aktivitas Kampus</a></li>
                            {{-- <li class="scroll-to-section"><a href="#apply">Reset & Inovasi</a></li> --}}
                            {{-- <li class="has-sub">
                                <a href="javascript:void(0)">Tentang Kami</a>
                                <ul class="sub-menu">
                                    <li><a href="meetings.html">Upcoming Meetings</a></li>
                                    <li><a href="meeting-details.html">Meeting Details</a></li>
                                </ul>
                            </li> --}}
                            <li class="scroll-to-section"><a href="#courses">Jurusan</a></li>
                            <li class="scroll-to-section"><a id="googleFormLink" href="#">Daftar Sekarang</a></li>
                            {{-- <li class="scroll-to-section"><a href="https://docs.google.com/forms/d/e/1FAIpQLSd-b9d-G-xqZfJEZnx_9KDrzahe24fhUbA2EnZw2XCcPjLqDw/viewform" target="_blank" rel="noopener noreferrer">Daftar Sekarang</a></li> --}}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1" style="background-color:white;">

        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('video/background.mp4') }}" type="video/mp4" />
        </video>


        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>Hello Students</h6>
                            <h2>Welcome to Queen International</h2>
                            <p>Hospitality Management Campus
                                {{-- <a rel="nofollow" href="https://templatemo.com/page/1"
                                    target="_blank">TemplateMo website</a>. This is a Bootstrap v5.1.3 layout. The video
                                background is taken from Pexels website, a group of young people by <a rel="nofollow"
                                    href="https://www.pexels.com/@pressmaster" target="_blank">Pressmaster</a>. --}}
                            </p>
                            <div class="main-button-red">
                                {{-- <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div> --}}
                                <div class="scroll-to-section"><a id="googleFormLink" href="#">Join Us Now!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
    <section class="our-courses" id="courses" style="background-image: url('{{ asset('jurusan/wallpaper1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up">
                    <div class="section-heading">
                        <h2>A Variety of Educational Options</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">

                        <div class="item" data-aos="fade-up">
                            <img src="{{ asset('jurusan/F& PRODUCT.jpg') }}" alt="Course One" class="img-responsive">
                            <div class="down-content">
                                <h4>F & B Product</h4>
                                <div class="info">
                                    <p class="description"></p>
                                    <div id="read-more-fb-product" class="collapse">
                                        <p class="full-description">
                                            The F&B Product department is in charge of the preparation and presentation
                                            of food and beverages. This includes creating menus, cooking meals, ensuring
                                            food quality, and maintaining kitchen hygiene. The staff in this department
                                            work closely with chefs and kitchen staff to deliver high-quality culinary
                                            experiences.
                                        </p>
                                    </div>
                                    <button class="btn btn-primary read-more-btn btn-sm rounded-pill" data-bs-toggle="collapse"
                                        data-bs-target="#read-more-fb-product" id="read-more-button">
                                        <i class="fas fa-eye"></i> Read More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item" data-aos="fade-up">
                            <img src="{{ asset('jurusan/F7B SERVICE.jpg') }}" alt="Course One" class="img-responsive">
                            <div class="down-content">
                                <h4>F & B Service</h4>
                                <div class="info">
                                    <p class="description"></p>
                                    <div id="read-more-fb-product" class="collapse">
                                        <p class="full-description">
                                            The F&B Service department focuses on serving food and beverages to guests
                                            in a hotel or restaurant setting. This includes taking orders, serving meals
                                            and drinks, and ensuring customer satisfaction. Staff in this department
                                            must have excellent communication skills and a keen attention to detail to
                                            provide outstanding service.
                                        </p>
                                    </div>
                                    <button class="btn btn-primary read-more-btn btn-sm rounded-pill" data-bs-toggle="collapse"
                                        data-bs-target="#read-more-fb-product" id="read-more-button">
                                        <i class="fas fa-eye"></i> Read More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item" data-aos="fade-up">
                            <img src="{{ asset('jurusan/FRONT OFFICE.jpg') }}" alt="Course One"
                            class="img-responsive">
                                <div class="down-content">
                                <h4>Front Office</h4>
                                <div class="info">
                                    <p class="description"></p>
                                    <div id="read-more-fb-product" class="collapse">
                                        <p class="full-description">
                                            The Front Office department is responsible for managing guest interactions
                                            from check-in to check-out. This includes handling reservations, providing
                                            information about the hotel and its services, and addressing any guest
                                            inquiries or issues. It serves as the primary point of contact between the
                                            guests and the hotel.
                                        </p>
                                    </div>
                                    <button class="btn btn-primary read-more-btn btn-sm rounded-pill" data-bs-toggle="collapse"
                                        data-bs-target="#read-more-fb-product" id="read-more-button">
                                        <i class="fas fa-eye"></i> Read More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item jurusan" data-aos="fade-up">
                            <img src="{{ asset('jurusan/HOUSEKEEPING.jpg') }}" alt="Course One"
                                class="img-responsive">
                            <div class="down-content">
                                <h4>House Keeping</h4>
                                <div class="info">
                                    <p class="description"></p>
                                    <div id="read-more-fb-product" class="collapse">
                                        <p class="full-description">
                                            The Housekeeping department is responsible for maintaining cleanliness and
                                            orderliness within the hotel. This includes cleaning guest rooms, public
                                            areas, and back-of-house areas, as well as handling laundry and managing
                                            linen supplies. Housekeeping ensures that all areas of the hotel meet the
                                            highest standards of cleanliness and comfort for guests.
                                        </p>
                                    </div>
                                    <button class="btn btn-primary read-more-btn btn-sm rounded-pill" data-bs-toggle="collapse"
                                        data-bs-target="#read-more-fb-product" id="read-more-button">
                                        <i class="fas fa-eye"></i> Read More
                                    </button>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-courses1" id="courses1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Best Education</h4>
                                    <p class="card-text">"Welcome to Queen International Educational Campus, where
                                        excellence in hospitality
                                        education begins. Our innovative programs and state-of-the-art facilities
                                        prepare
                                        you for a successful career in the global hospitality industry. Discover the
                                        Queen
                                        International difference today."</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Best Teachers</h4>
                                    <p class="card-text">Queen International School has the best teachers dedicated to
                                        creating a dynamic and
                                        engaging learning environment. Our experienced and passionate educators ensure
                                        every
                                        student receives top-notch education. Experience the difference today.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Best Campus</h4>
                                    <p class="card-text">Queen International School boasts a state-of-the-art campus
                                        designed to inspire and
                                        support students in their educational journey. Our facilities are equipped with
                                        modern classrooms, cutting-edge technology, and comfortable study spaces. The
                                        campus
                                        environment promotes learning, collaboration, and personal growth, making it the
                                        ideal place for students to thrive.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- <section class="upcoming-meetings" id="meetings" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Upcoming Meetings</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories">
                        <h4>Meeting Catgories</h4>
                        <ul>
                            <li><a href="#">Sed tempus enim leo</a></li>
                            <li><a href="#">Aenean molestie quis</a></li>
                            <li><a href="#">Cras et metus vestibulum</a></li>
                            <li><a href="#">Nam et condimentum</a></li>
                            <li><a href="#">Phasellus nec sapien</a></li>
                        </ul>
                        <div class="main-button-red">
                            <a href="meetings.html">All Upcoming Meetings</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$22.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img
                                            src="{{ asset('frontend/assets/images/meeting-01.jpg') }}"
                                            alt="New Lecturer Meeting"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>10</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>New Lecturers Meeting</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$36.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img
                                            src="{{ asset('frontend/assets/images/meeting-02.jpg') }}"
                                            alt="Online Teaching"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>24</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Online Teaching Techniques</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$14.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img
                                            src="{{ asset('frontend/assets/images/meeting-03.jpg') }}"
                                            alt="Higher Education"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>26</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Higher Education Conference</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$48.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img
                                            src="{{ asset('frontend/assets/images/meeting-04.jpg') }}"
                                            alt="Student Training"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>30</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Student Training Meetup</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>APPLY FOR BACHELOR DEGREE</h3>
                                <p>You are allowed to use this edu meeting CSS template for your school or university or
                                    business. You can feel free to modify or edit this layout.</p>
                                <div class="main-button-red">
                                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>APPLY FOR BACHELOR DEGREE</h3>
                                <p>You are not allowed to redistribute the template ZIP file on any other template
                                    website. Please contact us for more information.</p>
                                <div class="main-button-yellow">
                                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>About Edu Meeting HTML Template</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>If you want to get the latest collection of HTML CSS templates for your websites,
                                        you may visit <a rel="nofollow" href="https://www.toocss.com/"
                                            target="_blank">Too CSS website</a>. If you need a working contact form
                                        script, please visit <a href="https://templatemo.com/contact"
                                            target="_parent">our contact page</a> for more info.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>HTML CSS Bootstrap Layout</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna,
                                        maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed
                                        vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                                        Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget
                                        nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio
                                        tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus
                                        sollicitudin tincidunt.</p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Please tell your friends</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit,
                                        at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur
                                        velit.<br><br>
                                        Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor
                                        sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="accordion last-accordion">
                            <div class="accordion-head">
                                <span>Share this to your colleagues</span>
                                <span class="icon">
                                    <i class="icon fa fa-chevron-right"></i>
                                </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et
                                        malesuada fames ac ante ipsum primis in faucibus.<br><br>
                                        Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla
                                        pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi
                                        quis, convallis nisi.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12" data-aos="fade-up">
                            <h2>A Few Facts About Our University</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12" data-aos="fade-right">
                                    <div class="count-area-content percentage">
                                        <div class="count-digit">99%</div>
                                        <div class="count-title">Succesed Students</div>
                                    </div>
                                </div>
                                <div class="col-12" data-aos="fade-right" data-aos-delay="100">
                                    <div class="count-area-content">
                                        <div class="count-digit">10</div>
                                        <div class="count-title">Teacher</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12" data-aos="fade-left">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">250</div>
                                        <div class="count-title">New Students</div>
                                    </div>
                                </div>
                                <div class="col-12" data-aos="fade-left" data-aos-delay="100">
                                    <div class="count-area-content">
                                        <div class="count-digit">20</div>
                                        <div class="count-title">Awards</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video" style="background-image: url('{{ asset('jurusan/wallpaper1.jpg') }}');" data-aos="zoom-in">
                        <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="#" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name"
                                                placeholder="YOURNAME...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email"
                                                pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject"
                                                placeholder="SUBJECT...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..."
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                                NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-info">
                        <ul class="contact-list">
                            <li class="contact-item">
                                <h6>Phone Number</h6>
                                <span>
                                    <a href="https://wa.me/085142910416" target="_blank">
                                        0851-4291-0416
                                    </a>
                                </span>
                            </li>
                            <li class="contact-item">
                                <h6>Email Address</h6>
                                <a href="mailto:queeninternational16@gmail.com">queeninternational16@gmail.com</a>
                            </li>
                            <li class="contact-item">
                                <h6>Street Address</h6>
                                <a href="https://maps.app.goo.gl/CV3XdYukxwF9ajGh8?g_st=iw">Jalan Gatot Subroto Timur
                                    No. 10 Denpasar, Bali, Indonesia 80237</a>
                            </li>
                            <li class="contact-item">
                                <h6>Website URL</h6>
                                <a href="https://queeninternationalbali.com/"
                                    class="d-block">https://queeninternationalbali.com/</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2024 BaliTech Solution

            </p>
        </div>
    </section>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/tabs.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/video.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="{{ asset('js/welcome.js') }}">

    </script>
</body>

</body>

</html>
