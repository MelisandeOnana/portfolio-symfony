import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

document.addEventListener('DOMContentLoaded', function() {
    // Scroll uniquement si un filtre est actif
    var hasType = document.body.getAttribute('data-current-type');
    var hasTech = document.body.getAttribute('data-current-technology');
    if (hasType === 'true' || hasTech === 'true') {
        var section = document.getElementById('projets-section');
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }

    // Modal contact footer
    var openModalBtn = document.getElementById('openContactModal');
    var closeModalBtn = document.getElementById('closeContactModal');
    var contactModal = document.getElementById('contactModal');

    if (openModalBtn && contactModal) {
        openModalBtn.addEventListener('click', function(e) {
            e.preventDefault();
            contactModal.classList.remove('hidden');
        });
    }
    if (closeModalBtn && contactModal) {
        closeModalBtn.addEventListener('click', function() {
            contactModal.classList.add('hidden');
        });
    }
    // Fermer le modal si on clique en dehors du contenu
    if (contactModal) {
        contactModal.addEventListener('click', function(e) {
            if (e.target === contactModal) {
                contactModal.classList.add('hidden');
            }
        });
    }

    // Barre de progression de scroll
    var progressBar = document.getElementById('scroll-progress-bar');
    if (progressBar) {
        window.addEventListener('scroll', function() {
            var scrollTop = window.scrollY;
            var docHeight = document.documentElement.scrollHeight - window.innerHeight;
            var scrolled = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
            progressBar.style.width = scrolled + '%';
        });
    }
});
