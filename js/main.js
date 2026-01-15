/* JavaScript pro portfolio */

document.addEventListener('DOMContentLoaded', function() {
    setActiveNav();
    console.log('Portfolio načteno - tmavý design');
});

function setActiveNav() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        link.classList.remove('active');
        if (href === currentPage) {
            link.classList.add('active');
        }
    });
}


/* JavaScript pro portfolio */

// Nastavení aktivní navigace
document.addEventListener('DOMContentLoaded', function() {
    setActiveNav();
    console.log('Portfolio načteno - tmavý design');
    
    // Spusť animaci fotek
    initStackedImagesAnimation();
});

// Funkce pro aktivní navigační položku
function setActiveNav() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        link.classList.remove('active');
        if (href === currentPage) {
            link.classList.add('active');
        }
    });
}
/* JavaScript pro portfolio */

// Nastavení aktivní navigace
document.addEventListener('DOMContentLoaded', function() {
    setActiveNav();
    console.log('Portfolio načteno - tmavý design');
    
    // Spusť animaci fotek
    initStackedImagesAnimation();
});

// Funkce pro aktivní navigační položku
function setActiveNav() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        link.classList.remove('active');
        if (href === currentPage) {
            link.classList.add('active');
        }
    });
}

// Funkce pro animaci překrývajících se fotek
function initStackedImagesAnimation() {
    const stackedImages = document.querySelectorAll('.stacked-image');
    
    if (stackedImages.length === 0) {
        return; // Pokud nejsou fotky, nesnaž se animovat
    }
    
    let currentZIndexes = [3, 2, 1];
    
    function rotateImages() {
        // Najdi index fotky s nejvyšším z-index
        const topImageIndex = currentZIndexes.indexOf(Math.max(...currentZIndexes));
        
        // Fade out
        stackedImages[topImageIndex].classList.add('fade-out');
        setTimeout(() => {
            currentZIndexes.unshift(currentZIndexes.pop());
            stackedImages.forEach((img, index) => {
                img.style.zIndex = currentZIndexes[index];
            });
            
            // Fade in
            stackedImages[topImageIndex].classList.remove('fade-out');
        }, 500);
    }
    
    // Spusť každé 2 sekundy
    setInterval(rotateImages, 3500);
}
