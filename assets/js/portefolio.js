import AOS from 'aos';
import 'aos/dist/aos.css';
import Parallax from 'parallax-js';

document.addEventListener('DOMContentLoaded', function () {
    // Initialize AOS
    AOS.init({
        duration: 1200, // Durée de l'animation en ms
    });

    // Initialize Parallax
    const scene = document.getElementById('scene');
    if (scene) {
        const parallaxInstance = new Parallax(scene);
    }
});
