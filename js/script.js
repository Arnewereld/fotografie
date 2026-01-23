// Mobile Menu Toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
    });
});

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Active Navigation Link on Scroll
const sections = document.querySelectorAll('section[id]');

function scrollActive() {
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 100;
        const sectionId = current.getAttribute('id');

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            document.querySelector('.nav-link[href*=' + sectionId + ']')?.classList.add('active');
        } else {
            document.querySelector('.nav-link[href*=' + sectionId + ']')?.classList.remove('active');
        }
    });
}

window.addEventListener('scroll', scrollActive);

// Gallery Filter
const filterButtons = document.querySelectorAll('.filter-btn');
const galleryItems = document.querySelectorAll('.gallery-item');

filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
        button.classList.add('active');

        const filter = button.getAttribute('data-filter');

        galleryItems.forEach(item => {
            if (filter === 'all' || item.getAttribute('data-category') === filter) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                }, 10);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.8)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });
    });
});

// Lightbox functionality
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxCaption = document.querySelector('.lightbox-caption');
const closeBtn = document.querySelector('.lightbox-close');
const prevBtn = document.querySelector('.lightbox-prev');
const nextBtn = document.querySelector('.lightbox-next');

let currentImageIndex = 0;
let visibleImages = [];

function updateVisibleImages() {
    visibleImages = Array.from(document.querySelectorAll('.gallery-item'))
        .filter(item => item.style.display !== 'none');
}

function openLightbox(index) {
    updateVisibleImages();
    currentImageIndex = index;
    const item = visibleImages[currentImageIndex];
    const img = item.querySelector('img');
    const title = item.querySelector('.gallery-overlay-content h3')?.textContent || '';

    lightboxImg.src = img.src;
    lightboxCaption.textContent = title;
    lightbox.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    lightbox.style.display = 'none';
    document.body.style.overflow = 'auto';
}

function showNextImage() {
    currentImageIndex = (currentImageIndex + 1) % visibleImages.length;
    const item = visibleImages[currentImageIndex];
    const img = item.querySelector('img');
    const title = item.querySelector('.gallery-overlay-content h3')?.textContent || '';

    lightboxImg.src = img.src;
    lightboxCaption.textContent = title;
}

function showPrevImage() {
    currentImageIndex = (currentImageIndex - 1 + visibleImages.length) % visibleImages.length;
    const item = visibleImages[currentImageIndex];
    const img = item.querySelector('img');
    const title = item.querySelector('.gallery-overlay-content h3')?.textContent || '';

    lightboxImg.src = img.src;
    lightboxCaption.textContent = title;
}

// Add click events to gallery items
galleryItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        const visibleIndex = Array.from(document.querySelectorAll('.gallery-item'))
            .filter(i => i.style.display !== 'none')
            .indexOf(item);
        openLightbox(visibleIndex);
    });
});

// Lightbox controls
closeBtn.addEventListener('click', closeLightbox);
nextBtn.addEventListener('click', showNextImage);
prevBtn.addEventListener('click', showPrevImage);

// Close lightbox when clicking outside the image
lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
        closeLightbox();
    }
});

// Keyboard navigation for lightbox
document.addEventListener('keydown', (e) => {
    if (lightbox.style.display === 'block') {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowRight') {
            showNextImage();
        } else if (e.key === 'ArrowLeft') {
            showPrevImage();
        }
    }
});

// Scroll reveal animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe gallery items
galleryItems.forEach(item => {
    item.style.opacity = '0';
    item.style.transform = 'translateY(20px)';
    item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(item);
});

// Form submission handler
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(contactForm);
        
        // Send form data via fetch
        fetch('contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Message sent successfully!');
                contactForm.reset();
            } else {
                alert('Error sending message. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error sending message. Please try again.');
        });
    });
}

// Navbar background on scroll
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.background = '#000000';
    } else {
        navbar.style.background = '#000000';
    }
});
