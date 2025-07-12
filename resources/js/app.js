import './bootstrap.js';
import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger.js';

// Initialize AOS
AOS.init({
    duration: 1000, // values from 0 to 3000, with step 50ms
    once: true,     // whether animation should happen only once - while scrolling down
});

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Example GSAP animation (will be expanded later)
gsap.from(".hero-text", { duration: 1, y: 100, opacity: 0, ease: "power3.out" });

// Smooth scroll to section
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
