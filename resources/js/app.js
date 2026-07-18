import './landing/countdown.js';

document.addEventListener('DOMContentLoaded', function () {

    // Header scroll effect
    const header = document.getElementById('site-header');
    const headerBg = document.getElementById('header-bg');

    function handleScroll() {
        const scrollY = window.scrollY;
        if (scrollY > 50) {
            headerBg.classList.remove('bg-ngemi-dark/0', 'backdrop-blur-none');
            headerBg.classList.add('bg-ngemi-dark/90', 'backdrop-blur-xl');
            header.classList.add('shadow-lg', 'shadow-black/20');
        } else {
            headerBg.classList.remove('bg-ngemi-dark/90', 'backdrop-blur-xl');
            headerBg.classList.add('bg-ngemi-dark/0', 'backdrop-blur-none');
            header.classList.remove('shadow-lg', 'shadow-black/20');
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    // Mobile menu
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const bar1 = document.getElementById('bar-1');
    const bar2 = document.getElementById('bar-2');
    const bar3 = document.getElementById('bar-3');
    let menuOpen = false;

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function () {
            menuOpen = !menuOpen;

            if (menuOpen) {
                mobileMenu.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
                mobileMenu.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');
                bar1.classList.add('rotate-45', 'translate-y-1.5');
                bar2.classList.add('opacity-0');
                bar3.classList.add('-rotate-45', '-translate-y-1.5');
                bar3.classList.remove('w-4', 'ml-auto');
                bar3.classList.add('w-6');
                document.body.classList.add('overflow-hidden');
            } else {
                mobileMenu.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
                mobileMenu.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
                bar1.classList.remove('rotate-45', 'translate-y-1.5');
                bar2.classList.remove('opacity-0');
                bar3.classList.remove('-rotate-45', '-translate-y-1.5');
                bar3.classList.add('w-4', 'ml-auto');
                bar3.classList.remove('w-6');
                document.body.classList.remove('overflow-hidden');
            }
        });

        document.querySelectorAll('.mobile-menu-link').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenuBtn.click();
            });
        });
    }

    // Scroll reveal animations
    function revealOnScroll() {
        const reveals = document.querySelectorAll('.reveal');
        const windowHeight = window.innerHeight;

        reveals.forEach(function (el) {
            const elementTop = el.getBoundingClientRect().top;
            const elementVisible = 120;

            if (elementTop < windowHeight - elementVisible) {
                el.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll, { passive: true });
    revealOnScroll();

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const headerHeight = 80;
                const targetPosition = target.getBoundingClientRect().top + window.scrollY - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Active nav link highlight
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    function highlightNav() {
        const scrollY = window.scrollY + 200;

        sections.forEach(function (section) {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                navLinks.forEach(function (link) {
                    link.classList.remove('text-ngemi-orange');
                    link.classList.add('text-ngemi-cream/70');

                    if (link.getAttribute('href') === '#' + sectionId) {
                        link.classList.add('text-ngemi-orange');
                        link.classList.remove('text-ngemi-cream/70');
                    }
                });
            }
        });
    }

    window.addEventListener('scroll', highlightNav, { passive: true });

});
