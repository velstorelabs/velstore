document.addEventListener('DOMContentLoaded', function () {
    const bannerArea = document.querySelector('.banner-area');

    // Variables to hold target and current positions
    let targetX = 0,
        targetY = 0,
        currentX = 0,
        currentY = 0;
    const ease = 0.1; // Smoothing factor

    bannerArea.addEventListener('mousemove', (e) => {
        // Find the currently active slide
        const activeSlide = bannerArea.querySelector('.slick-active');
        if (!activeSlide) return;

        // Find the container holding the shoe image inside the active slide
        const container = activeSlide.querySelector('.rightimg-banner1 img, .rightimg-banner2 img');
        if (!container) return;

        // Get container dimensions and position
        const rect = container.getBoundingClientRect();

        // Calculate mouse position relative to the container
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        // Calculate center of container
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        // Adjust movement sensitivity (tweak moveFactor as needed)
        const moveFactor = 0.05;

        // Update target translation values based on mouse position
        targetX = (x - centerX) * moveFactor;
        targetY = (y - centerY) * moveFactor;
    });

    function animate() {
        // Smoothly interpolate current position toward target position
        currentX += (targetX - currentX) * ease;
        currentY += (targetY - currentY) * ease;

        // Apply transform to the shoe image in the active slide
        const activeSlide = bannerArea.querySelector('.slick-active');
        if (activeSlide) {
            const shoeImage = activeSlide.querySelector('.rightimg-banner img');
            if (shoeImage) {
                shoeImage.style.transform = `translate(${currentX}px, ${currentY}px)`;
            }
        }
        requestAnimationFrame(animate);
    }
    animate();
});

$(document).ready(function () {
    var currentIndex = 0;
    var slides = $(".blog-img");
    var titles = $(".blog-title");
    var totalSlides = slides.length;

    function updateSlide() {
        // Stop any current animations and fade out all slides
        slides.stop(true, true).fadeOut(300);
        // Fade in the current slide and mark it as active
        slides.removeClass("active").addClass("deactive");
        slides.eq(currentIndex).stop(true, true).fadeIn(300).removeClass("deactive").addClass("active");

        // Update Titles: remove "active" from all and add "deactive"
        titles.removeClass("active").addClass("deactive");
        // Mark the current title as active and remove "deactive"
        titles.eq(currentIndex).removeClass("deactive").addClass("active");
    }

    $(".nnext").click(function () {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlide();
    });

    $(".pprev").click(function () {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlide();
    });

    // Clicking a title moves to that slide
    titles.click(function () {
        currentIndex = titles.index($(this));
        updateSlide();
    });

    updateSlide(); // Initialize the first slide correctly
});

$(document).ready(function () {
    $('.client-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        responsive: [
            {
                breakpoint: 992, // Tablet
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 576, // Mobile
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.animate-on-scroll');

    const observerOptions = {
        threshold: 0.5 // Trigger when 50% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add animate.css classes to trigger animation
                entry.target.classList.add('animate__animated', 'animate__fadeIn');
                // Unobserve so it doesn't animate again
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    elements.forEach(el => observer.observe(el));
});
