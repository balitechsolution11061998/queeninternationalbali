<!-- Include Animate.css and Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<style>
    /* Base Styles */
.header-carousel h1,
.header-carousel h5,
.header-carousel p,
.header-carousel small {
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.7); /* Ensure text is readable on images */
}

.header-carousel .custom-font {
    font-family: 'Montserrat', sans-serif;
}

.header-carousel .animate__animated {
    animation-duration: 1.5s;
}

/* Responsive Styles */
@media (max-width: 1200px) {
    .header-carousel h1 {
        font-size: 4rem; /* Adjust as needed */
    }
    .header-carousel h5 {
        font-size: 1.5rem; /* Adjust as needed */
    }
    .header-carousel p {
        font-size: 1.2rem; /* Adjust as needed */
    }
    .header-carousel small {
        font-size: 1rem; /* Adjust as needed */
    }
}

@media (max-width: 992px) {
    .header-carousel h1 {
        font-size: 3rem; /* Adjust as needed */
    }
    .header-carousel h5 {
        font-size: 1.25rem; /* Adjust as needed */
    }
    .header-carousel p {
        font-size: 1rem; /* Adjust as needed */
    }
    .header-carousel small {
        font-size: 0.9rem; /* Adjust as needed */
    }
}

@media (max-width: 768px) {
    .header-carousel h1 {
        font-size: 2.5rem; /* Adjust as needed for mobile devices */
    }
    .header-carousel h5 {
        font-size: 1rem; /* Adjust as needed for mobile devices */
    }
    .header-carousel p {
        font-size: 0.9rem; /* Adjust as needed for mobile devices */
    }
    .header-carousel small {
        font-size: 0.8rem; /* Adjust as needed for mobile devices */
    }
}

@media (max-width: 576px) {
    .header-carousel h1 {
        font-size: 2rem; /* Smaller font size for mobile devices */
    }
    .header-carousel h5 {
        font-size: 0.9rem; /* Smaller font size for mobile devices */
    }
    .header-carousel p {
        font-size: 0.8rem; /* Smaller font size for mobile devices */
    }
    .header-carousel small {
        font-size: 0.7rem; /* Smaller font size for mobile devices */
    }
}

/* Hide icon on mobile screens */
@media (max-width: 768px) {
    .carousel-control-icon {
        display: none;
    }
}

/* Style for carousel items */
.header-carousel .owl-carousel-item {
    position: relative;
}

.header-carousel .owl-carousel-item img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

/* Position and overlay styling */
.header-carousel .position-absolute {
    background: linear-gradient(180deg, rgba(24, 29, 56, 0.5) 0%, rgba(24, 29, 56, 0.7) 100%);
    padding: 50px 20px;
}

/* Text color */
.header-carousel h1,
.header-carousel h5,
.header-carousel p,
.header-carousel small {
    color: #ffffff; /* White text color */
}

.carousel-control-icon {
    font-size: 2rem;
    color: #ffffff; /* White icon color */
}
</style>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative slide-1">
            <img class="img-fluid" src="{{ asset('jurusan/wallpaper1.jpg') }}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-gold text-uppercase mb-3 text-maroon custom-font">Queen International Bali</h5>
                            <h1 class="display-3 text-white custom-font h1-slide">Premier Hospitality and Cruise Ship Management Education</h1>
                            <small>Located in the heart of Denpasar, Queen International Bali offers top-notch programs in hospitality and cruise ship management. With state-of-the-art facilities and a dedicated faculty, we prepare our students for global careers in the hospitality industry.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative slide-2">
            <img class="img-fluid" src="{{ asset('jurusan/R6II6888.jpg') }}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-gold text-uppercase mb-3 text-maroon custom-font">Queen International Bali</h5>
                            <h1 class="display-3 text-white custom-font h1-slide">TWO WAYS LEARNING EDUCATION</h1>
                            <small style="color:white;font-weight:bold;">Queen international menjabarkan to do, to be, to tell dalam proses perkuliahan dan pendidikannnya karena semua dosennya menjadi panutan yang hebat (Role Model) sehingga perkuliahan 2 arah atau 2 way direction memberikan ruang dan kesempatan nyata buat student untuk berani tampil percaya diri, kreatif dan inovatif menyampaikan ide-ide dan gagasannya sebagai satu langkah awal yang hebat untuk mempersiapkan hari esok yang lebih cerah dan gemilang.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more carousel items here as needed -->
    </div>
    <div class="carousel-control-icon position-absolute end-0 top-50">
        <i class="bi bi-chevron-right"></i>
    </div>
</div>
<!-- Carousel End -->

<!-- Include jQuery and Owl Carousel JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            onTranslate: function(event) {
                // Remove animation classes
                $('.h1-slide').removeClass('slide-animation-down');
            },
            onTranslated: function(event) {
                // Add animation class to active slide
                $('.h1-slide').addClass('slide-animation-down');
            }
        });
    });
</script>
