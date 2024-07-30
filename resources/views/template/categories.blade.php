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
/* Modal content styling */
.modal-content {
    border-radius: 10px;
    overflow: hidden;
    position: relative;
}

.modal-body {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

#courseDetails {
    text-align: left;
}

#courseDetails img {
    max-width: 100%;
    max-height: 500px;
    height: auto;
    margin-bottom: 15px;
    object-fit: cover;
}

#loading {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.modal-footer {
    display: flex;
    justify-content: space-between;
    padding: 15px;
}

.arrow-controls {
    display: flex;
    justify-content: space-between;
    width: 100%;
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
                        <a class="position-relative d-block overflow-hidden course-link" href="#" data-course="F&B PRODUCT">
                            <img class="img-fluid" src="{{ asset('jurusan/F& PRODUCT.jpg') }}" alt="">
                            <div class="bg-white position-absolute bottom-0 end-0 py-2 px-3">
                                <h5 class="m-0">F & B PRODUCT</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn equal-height" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden course-link" href="#" data-course="F&B SERVICE">
                            <img class="img-fluid" src="{{ asset('jurusan/F7B SERVICE.jpg') }}" alt="">
                            <div class="bg-white position-absolute bottom-0 end-0 py-2 px-3">
                                <h5 class="m-0">F&B SERVICE</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn equal-height" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden course-link" href="#" data-course="FRONT OFFICE">
                            <img class="img-fluid" src="{{ asset('jurusan/FRONT OFFICE.jpg') }}" alt="">
                            <div class="bg-white position-absolute bottom-0 end-0 py-2 px-3">
                                <h5 class="m-0">FRONT OFFICE</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden course-link" href="#" data-course="HOUSE KEEPING">
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
<!-- Modal Structure -->
<!-- Modal Structure -->
<!-- Modal Structure -->
<div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseModalLabel">Course Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loading" class="text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div id="courseDetails" style="display: none;">
                    <img src="" alt="Course Image" id="courseImage">
                    <h3 id="courseTitle"></h3>
                    <p id="courseDescription"></p>
                </div>
            </div>
            <div class="modal-footer">
                <div class="arrow-controls">
                    <button type="button" class="btn btn-secondary" id="prevCourse">← Previous</button>
                    <button type="button" class="btn btn-secondary" id="nextCourse">Next →</button>
                </div>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to handle modal content -->
<script>
$(document).ready(function() {
    // Define course descriptions and images
    var courseDescriptions = {
        'F&B PRODUCT': {
            description: 'The F&B Product department is in charge of the preparation and presentation of food and beverages. This includes creating menus, cooking meals, ensuring food quality, and maintaining kitchen hygiene. The staff in this department work closely with chefs and kitchen staff to deliver high-quality culinary experiences.',
            image: '{{ asset('jurusan/F& PRODUCT.jpg') }}'
        },
        'F&B SERVICE': {
            description: 'The F&B Service department focuses on serving food and beverages to guests in a hotel or restaurant setting. This includes taking orders, serving meals and drinks, and ensuring customer satisfaction. Staff in this department must have excellent communication skills and a keen attention to detail to provide outstanding service.',
            image: '{{ asset('jurusan/F7B SERVICE.jpg') }}'
        },
        'FRONT OFFICE': {
            description: 'The Front Office department is responsible for managing guest interactions from check-in to check-out. This includes handling reservations, providing information about the hotel and its services, and addressing any guest inquiries or issues. It serves as the primary point of contact between the guests and the hotel.',
            image: '{{ asset('jurusan/FRONT OFFICE.jpg') }}'
        },
        'HOUSE KEEPING': {
            description: 'The Housekeeping department is responsible for maintaining cleanliness and orderliness within the hotel. This includes cleaning guest rooms, public areas, and back-of-house areas, as well as handling laundry and managing linen supplies. Housekeeping ensures that all areas of the hotel meet the highest standards of cleanliness and comfort for guests.',
            image: '{{ asset('jurusan/HOUSEKEEPING.jpg') }}'
        }
    };

    var courseList = Object.keys(courseDescriptions);
    var currentIndex = 0;

    function updateModal(courseName) {
        $('#loading').show();
        $('#courseDetails').hide();

        // Populate modal with course details
        var course = courseDescriptions[courseName];
        $('#courseTitle').text(courseName);
        $('#courseDescription').text(course.description);
        $('#courseImage').attr('src', course.image);

        // Simulate loading delay (remove setTimeout in production)
        setTimeout(function() {
            $('#loading').hide();
            $('#courseDetails').show();
        }, 500); // Adjust delay as needed
    }

    $('.course-link').click(function(e) {
        e.preventDefault();
        var courseName = $(this).data('course');
        currentIndex = courseList.indexOf(courseName); // Update currentIndex
        updateModal(courseName);
        $('#courseModal').modal('show');
    });

    $('#prevCourse').click(function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateModal(courseList[currentIndex]);
        }
    });

    $('#nextCourse').click(function() {
        if (currentIndex < courseList.length - 1) {
            currentIndex++;
            updateModal(courseList[currentIndex]);
        }
    });
});
</script>
