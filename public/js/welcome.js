    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
        e.preventDefault();
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
    document.getElementById('googleFormLink').addEventListener('click', function(event) {
        event.preventDefault();

        // Dapatkan nama pengguna yang telah login di aplikasi Laravel (contoh: $namaPengguna)

        // Buat URL Google Form dengan menyertakan nama pengguna dalam parameter
        var googleFormURL =
            "https://docs.google.com/forms/d/e/1FAIpQLSd-b9d-G-xqZfJEZnx_9KDrzahe24fhUbA2EnZw2XCcPjLqDw/viewform";

        // Buka halaman Google Form
        window.open(googleFormURL, '_blank');
    });
    document.addEventListener("DOMContentLoaded", function() {
        AOS.init({
            duration: 1200, // Animation duration
        });
        var fullDescription = document.querySelector('#read-more-fb-product .full-description').textContent
            .trim();
        var descriptionElement = document.querySelector('#read-more-fb-product .description');
        var readMoreButton = document.getElementById('read-more-button');

        // Limit to first 5 words
        var words = fullDescription.split(' ');
        var truncatedDescription = words.slice(0, 5).join(' ');

        // Display truncated description
        descriptionElement.textContent = truncatedDescription + '...';

        // Handle click event on "Read More" button
        readMoreButton.addEventListener('click', function() {
            var buttonText = readMoreButton.querySelector('i');
            var collapseElement = new bootstrap.Collapse(document.getElementById(
                'read-more-fb-product'), {
                    toggle: true
                });

            if (collapseElement._isShown) {
                descriptionElement.textContent = truncatedDescription + '...';
                buttonText.classList.remove('fa-eye-slash');
                buttonText.classList.add('fa-eye');
            } else {
                descriptionElement.textContent = fullDescription;
                buttonText.classList.remove('fa-eye');
                buttonText.classList.add('fa-eye-slash');
            }
        });

    });

    document.getElementById('read-more-button').addEventListener('click', function() {
        var button = this;
        var spinner = button.querySelector('.spinner-border');
        var buttonText = button.querySelector('.button-text');

        // Show loading state
        spinner.style.display = 'inline-block';
        buttonText.textContent = 'Loading...';

        // Remove loading state after collapse action is complete
        document.getElementById('read-more-fb-product').addEventListener('shown.bs.collapse', function() {
            spinner.style.display = 'none';
            buttonText.textContent = 'Read More';
        });

        document.getElementById('read-more-fb-product').addEventListener('hidden.bs.collapse', function() {
            spinner.style.display = 'none';
            buttonText.textContent = 'Read More';
        });
    });
