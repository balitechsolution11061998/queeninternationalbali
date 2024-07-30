<style>
    .position-relative {
    position: relative;
    width: 100%;
    height: 100%;
}

.img-fluid {
    max-width: 100%;
    height: auto;
    object-fit: cover; /* Ensures the image covers the container without distortion */
}

.container-xxl {
    padding-right: 15px;
    padding-left: 15px;
}

.container {
    max-width: 1140px;
    margin-right: auto;
    margin-left: auto;
}

.wow {
    visibility: hidden;
}

.fadeInUp {
    animation: fadeInUp 0.5s forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.position-relative {
    position: relative;
    width: 100%;
    height: auto; /* Adjust if needed */
}

.img-fluid {
    width: 100%; /* Make image use full width of container */
    height: auto; /* Maintain aspect ratio */
    object-fit: cover; /* Ensure the image covers the container */
    border-radius: 15px; /* Rounded corners */
}

.container-xxl {
    padding-right: 15px;
    padding-left: 15px;
}

.container {
    max-width: 1140px;
    margin-right: auto;
    margin-left: auto;
}

.wow {
    visibility: hidden;
}

.fadeInUp {
    animation: fadeInUp 0.5s forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative">
                    <img class="img-fluid"
                        src="{{ asset('/jurusan/DSCF2049.png') }}" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">Welcome to Queen International School Bali</h1>
                <p class="mb-4">At Queen International School Bali, we are dedicated to providing exceptional education in hospitality and cruise ship management. Located in the heart of Bali, we combine the island's rich cultural heritage with world-class training and education to prepare our students for successful careers in the global hospitality industry.</p>
                <p class="mb-4">Our curriculum is designed to offer a blend of theoretical knowledge and practical experience, ensuring that our students are well-equipped to meet the demands of the industry. We collaborate with renowned companies to offer real-world projects and internships, providing our students with invaluable hands-on experience.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Collaborate</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Curriculum</p>
                    </div>
                </div>
                {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
            </div>
        </div>
    </div>
</div>
<!-- About End -->

