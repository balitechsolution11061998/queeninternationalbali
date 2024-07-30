@extends('template.index')

@section('content')
@include('template.navbar')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row g-4">
            <!-- Contact Info Section -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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

            <!-- Map Section -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.911376408627!2d115.23669991539064!3d-8.620485493597104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23fdf322c840d%3A0xc2b2f05e659d3dd9!2sJl.%20Gatot%20Subroto%20Tim.%20No.760%2C%20Kesiman%20Kertalangu%2C%20East%20Denpasar%2C%20Denpasar%20City%2C%20Bali%2080237!5e0!3m2!1sen!2sid!4v1687566579786!5m2!1sen!2sid"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>


            <!-- Contact Form Section -->
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
