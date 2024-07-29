<!-- Include Animate.css and Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<style>
    .header-carousel .owl-carousel-item {
        position: relative;
    }
    .header-carousel .owl-carousel-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    .header-carousel .position-absolute {
        background: linear-gradient(180deg, rgba(24, 29, 56, .7) 0%, rgba(24, 29, 56, .7) 100%);
        padding: 50px 20px;
    }
    .header-carousel .text-gold {
        color: #FFD700;
    }
    .header-carousel h1, .header-carousel h5, .header-carousel p {
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
    }
    .header-carousel .custom-font {
        font-family: 'Montserrat', sans-serif;
    }
    .header-carousel .animate__animated {
        animation-duration: 1.5s;
    }
    @media (max-width: 768px) {
        .header-carousel .position-absolute {
            padding: 30px 10px;
        }
        .header-carousel h1 {
            font-size: 2rem;
        }
        .header-carousel h5 {
            font-size: 1rem;
        }
        .header-carousel p {
            font-size: 0.9rem;
        }
    }
    /* Custom keyframes for slide animations */
    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-100%);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100%);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    .slide-1-animation {
        animation: slideInLeft 1.5s;
    }
    .slide-2-animation {
        animation: slideInRight 1.5s;
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
                            <h1 class="display-3 text-white custom-font">Premier Hospitality and Cruise Ship Management Education</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Located in the heart of Denpasar, Queen International Bali offers top-notch programs in hospitality and cruise ship management. With state-of-the-art facilities and a dedicated faculty, we prepare our students for global careers in the hospitality industry.</p>
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
                            <h1 class="display-3 text-white custom-font">TWO WAYS LEARNING EDUCATION</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Queen international menjabarkan to do, to be, to tell dalam proses perkuliahan dan pendidikannnya karena semua dosennya menjadi panutan yang hebat (Role Model) sehingga perkuliahan 2 arah atau 2 way direction memberikan ruang dan kesempatan nyata buat student untuk berani tampil percaya diri, kreatif dan inovatif menyampaikan ide-ide dan gagasannya sebagai satu langkah awal yang hebat untuk mempersiapkan hari esok yang lebih cerah dan gemilang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more carousel items here as needed -->
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
                $('.slide-1 h5, .slide-1 h1, .slide-1 p').removeClass('slide-1-animation');
                $('.slide-2 h5, .slide-2 h1, .slide-2 p').removeClass('slide-2-animation');
            },
            onTranslated: function(event) {
                var item = event.item.index;
                if ($(event.target).find(".owl-item").eq(item).find(".slide-1").length) {
                    $('.slide-1 h5, .slide-1 h1, .slide-1 p').addClass('slide-1-animation');
                } else if ($(event.target).find(".owl-item").eq(item).find(".slide-2").length) {
                    $('.slide-2 h5, .slide-2 h1, .slide-2 p').addClass('slide-2-animation');
                }
            }
        });
    });
</script>
