<style>
.category {
    background-color: #f9f9f9;
    padding: 60px 0;
}

.category .section-title {
    border-radius: 20px;
    padding: 10px 20px;
    background-color: #fff;
    font-weight: bold;
}

.category h1 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 30px;
}

.category .row .col-md-12,
.category .row .col-lg-6 {
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    transition: transform 0.3s ease-in-out;
}

.category .row .col-md-12:hover,
.category .row .col-lg-6:hover {
    transform: scale(1.05);
}

.category img {
    border-radius: 10px;
    transition: transform 0.3s ease-in-out;
}

.category img:hover {
    transform: scale(1.1);
}
.category .bg-white {
    border-radius: 10px;
}


</style>
<!-- Categories Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
            <h1 class="mb-5">Courses Categories</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                            <img class="img-fluid" src="{{ asset('jurusan/F& PRODUCT.jpg') }}" alt="">
                            <div class="bg-white position-absolute bottom-0 end-0 py-2 px-3">
                                <h5 class="m-0">F & B PRODUCT</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn equal-height" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                            <img class="img-fluid" src="{{ asset('jurusan/F7B SERVICE.jpg') }}" alt="">
                            <div class="bg-white position-absolute bottom-0 end-0 py-2 px-3">
                                <h5 class="m-0">F&B SERVICE</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn equal-height" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                            <img class="img-fluid" src="{{ asset('jurusan/FRONT OFFICE.jpg') }}" alt="">
                            <div class="bg-white position-absolute bottom-0 end-0 py-2 px-3">
                                <h5 class="m-0">FRONT OFFICE</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="#">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('jurusan/HOUSEKEEPING.jpg') }}" alt="" style="object-fit: cover;">
                    <div class="bg-white position-absolute bottom-0 end-0 py-2 px-3">
                        <h5 class="m-0">HOUSE KEEPING</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Categories End -->
