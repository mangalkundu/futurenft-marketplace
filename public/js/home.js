// Dropdown menu functionality
const hamburgerCheckbox = document.getElementById('hamburgerCheckbox');
const dropdownMenu = document.getElementById('dropdownMenu');
const menuOverlay = document.getElementById('menuOverlay');
const menuLinks = document.querySelectorAll('.menu-link');
const hamburger = document.querySelector('.hamburger');

// Toggle menu when hamburger is clicked
hamburgerCheckbox.addEventListener('click', function(e) {
    e.stopPropagation();
    const isChecked = this.checked;
    toggleMenu(isChecked);
});

// Close menu when clicking overlay
menuOverlay.addEventListener('click', () => {
    hamburgerCheckbox.checked = false;
    toggleMenu(false);
});

// Close menu when clicking anywhere outside
document.addEventListener('click', (e) => {
    if (!dropdownMenu.contains(e.target) && e.target !== hamburgerCheckbox && !hamburger.contains(e.target)) {
        hamburgerCheckbox.checked = false;
        toggleMenu(false);
    }
});

// Function to handle menu toggling
function toggleMenu(shouldOpen) {
    if (shouldOpen) {
        dropdownMenu.classList.add('active');
        menuOverlay.classList.add('active');
    } else {
        dropdownMenu.classList.remove('active');
        menuOverlay.classList.remove('active');
    }
}

// Menu item click handling - modified to allow navigation
menuLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        // Close the menu
        hamburgerCheckbox.checked = false;
        toggleMenu(false);
        
        // Remove active class from all items
        menuLinks.forEach(item => item.classList.remove('active'));
        
        // Add active class to clicked item
        this.classList.add('active');
        
        // Allow the default link behavior to proceed
        // No need for preventDefault() since we want the links to work
    });
});
    



    
        
        // Mobile menu item click handling
const menuItems = document.querySelectorAll('.mobile-menu .menu-item');
menuItems.forEach(item => {
    item.addEventListener('click', function(e) {
        // Remove active class from all items
        menuItems.forEach(i => i.classList.remove('active'));
        
        // Add active class to clicked item
        this.classList.add('active');
    });
});
        

        
// Dark/Light mode toggle
const themeToggle = document.getElementById('themeToggle');
const body = document.body;

// Check for saved theme preference or use preferred color scheme
const savedTheme = localStorage.getItem('theme');
const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
    body.classList.add('dark-mode');
    localStorage.setItem('theme', 'dark');
} else {
    localStorage.setItem('theme', 'light');
}

themeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
});
        
        
// Reset animations every 5 seconds
        setInterval(function() {
            const elements = document.querySelectorAll('.hero h1, .hero p, .hero-btn');
            
            elements.forEach(el => {
                // Remove animations
                el.style.animation = 'none';
                
                // Trigger reflow
                void el.offsetWidth;
                
                // Re-add animations
                if(el.classList.contains('hero-btn')) {
                    el.style.animation = 'btnPopIn 1s ease-out 1s forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4s forwards';
                } else if(el.tagName === 'H1') {
                    el.style.animation = 'popIn 1s ease-out forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4s forwards';
                } else if(el.tagName === 'P') {
                    el.style.animation = 'fadeIn 1s ease-out 0.5s forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4s forwards';
                }
            });
        }, 5000);
    

        // NFT Slider Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('nftCarousel');
            const slides = Array.from(document.querySelectorAll('.nft-slide'));
            let currentIndex = 0;
            
            // Initialize slider
            function updateSlider() {
                slides.forEach((slide, index) => {
                    slide.classList.remove('active', 'prev', 'next', 'far-prev', 'far-next', 'hidden');
                    
                    const diff = (index - currentIndex + slides.length) % slides.length;
                    
                    if (index === currentIndex) {
                        slide.classList.add('active');
                    } 
                    else if (diff === 1 || diff === -(slides.length - 1)) {
                        slide.classList.add('next');
                    }
                    else if (diff === 2 || diff === -(slides.length - 2)) {
                        slide.classList.add('far-next');
                    }
                    else if (diff === slides.length - 1 || diff === -1) {
                        slide.classList.add('prev');
                    }
                    else if (diff === slides.length - 2 || diff === -2) {
                        slide.classList.add('far-prev');
                    }
                    else {
                        slide.classList.add('hidden');
                    }
                });
            }
            
            // Touch/swipe functionality
            let touchStartX = 0;
            let touchEndX = 0;
            let isDragging = false;
            
            carousel.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                isDragging = true;
            }, {passive: true});
            
            carousel.addEventListener('touchmove', (e) => {
                if (isDragging) {
                    touchEndX = e.changedTouches[0].screenX;
                    const difference = touchStartX - touchEndX;
                    const activeSlide = slides[currentIndex];
                    
                    // Temporary transform during drag
                    activeSlide.style.transform = `translateX(${-difference/5}px) scale(${1 - Math.abs(difference)/1000})`;
                    
                    // Adjust adjacent slides
                    const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
                    const nextIndex = (currentIndex + 1) % slides.length;
                    
                    if (difference > 0) {
                        slides[nextIndex].style.transform = `translateX(${80 - difference/10}px) scale(${0.9 + Math.abs(difference)/2000})`;
                    } else {
                        slides[prevIndex].style.transform = `translateX(${-80 - difference/10}px) scale(${0.9 + Math.abs(difference)/2000})`;
                    }
                }
            }, {passive: true});
            
            carousel.addEventListener('touchend', (e) => {
                if (isDragging) {
                    touchEndX = e.changedTouches[0].screenX;
                    handleSwipe();
                    isDragging = false;
                    
                    // Reset temporary transforms
                    slides.forEach(slide => {
                        slide.style.transform = '';
                    });
                }
            }, {passive: true});
            
            function handleSwipe() {
                const difference = touchStartX - touchEndX;
                const threshold = 100;
                
                if (difference > threshold) {
                    // Swipe left - next slide
                    currentIndex = (currentIndex + 1) % slides.length;
                } else if (difference < -threshold) {
                    // Swipe right - previous slide
                    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                }
                updateSlider();
            }
            
            // Mouse drag for desktop
            carousel.addEventListener('mousedown', (e) => {
                touchStartX = e.clientX;
                isDragging = true;
            });
            
            carousel.addEventListener('mousemove', (e) => {
                if (isDragging) {
                    touchEndX = e.clientX;
                    const difference = touchStartX - touchEndX;
                    const activeSlide = slides[currentIndex];
                    
                    activeSlide.style.transform = `translateX(${-difference/5}px) scale(${1 - Math.abs(difference)/1000})`;
                    
                    const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
                    const nextIndex = (currentIndex + 1) % slides.length;
                    
                    if (difference > 0) {
                        slides[nextIndex].style.transform = `translateX(${80 - difference/10}px) scale(${0.9 + Math.abs(difference)/2000})`;
                    } else {
                        slides[prevIndex].style.transform = `translateX(${-80 - difference/10}px) scale(${0.9 + Math.abs(difference)/2000})`;
                    }
                }
            });
            
            carousel.addEventListener('mouseup', () => {
                if (isDragging) {
                    handleSwipe();
                    isDragging = false;
                    
                    slides.forEach(slide => {
                        slide.style.transform = '';
                    });
                }
            });
            
            carousel.addEventListener('mouseleave', () => {
                if (isDragging) {
                    isDragging = false;
                    slides.forEach(slide => {
                        slide.style.transform = '';
                    });
                }
            });
            
            // Auto-rotate slides (optional)
            let slideInterval = setInterval(() => {
                if (!isDragging) {
                    currentIndex = (currentIndex + 1) % slides.length;
                    updateSlider();
                }
            }, 4000);
            
            // Initialize
            updateSlider();
        });



    


// Tab functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all tab panes
            tabPanes.forEach(pane => pane.classList.remove('active'));
            
            // Show the corresponding tab pane
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
});    
    
    

    
    
    
// Scroll animation for NFT cards
document.addEventListener('DOMContentLoaded', function() {
    const nftCards = document.querySelectorAll('.nft-card');
    
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.75 &&
            rect.bottom >= 0
        );
    }
    
    // Function to handle scroll events
    function handleScroll() {
        nftCards.forEach(card => {
            if (isInViewport(card) && !card.classList.contains('animate-card')) {
                card.classList.add('animate-card');
            }
        });
    }
    
    // Initial check on page load
    handleScroll();
    
    // Check on scroll
    window.addEventListener('scroll', handleScroll);
    
    // Reset animations on refresh
    window.addEventListener('beforeunload', function() {
        nftCards.forEach(card => {
            card.classList.remove('animate-card');
        });
    });
});    


// Simple loading animation with refresh effect
const loadingOverlay = document.getElementById('loadingOverlay');
const loadingTagline = document.getElementById('loadingTagline');
const MIN_DISPLAY_TIME = 5000; // 2 seconds minimum

// Check if we've shown the loading in this session
if (!sessionStorage.getItem('loadingShown')) {
    // First time in this session
    sessionStorage.setItem('loadingShown', 'true');
    
    // Show tagline after 2 seconds with word-by-word animation
    setTimeout(() => {
        loadingTagline.classList.add('show');
        
        // Optional: Add a subtle floating animation
        const words = document.querySelectorAll('.word');
        words.forEach((word, index) => {
            word.style.setProperty('--y-offset', `${Math.sin(index * 0.5) * 5}px`);
            word.addEventListener('mouseover', () => {
                word.style.transform = `translateY(var(--y-offset)) scale(1.1)`;
            });
            word.addEventListener('mouseout', () => {
                word.style.transform = 'translateY(0)';
            });
        });
    }, 1200);

    function hideLoader() {
        // Animate out each word before hiding
        const words = document.querySelectorAll('.word');
        words.forEach((word, index) => {
            word.style.transition = `all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1) ${index * 0.05}s`;
            word.style.opacity = '0';
            word.style.transform = 'translateY(-20px)';
        });
        
        setTimeout(() => {
            loadingOverlay.classList.add('hide');
            setTimeout(() => {
                loadingOverlay.style.display = 'none';
            }, 500);
        }, 600); // Wait for word animations to complete
    }

    // Start hiding when everything is loaded
    window.addEventListener('load', function() {
        const elapsed = Date.now() - performance.timing.navigationStart;
        const remainingTime = Math.max(0, MIN_DISPLAY_TIME - elapsed);
        setTimeout(hideLoader, remainingTime);
    });

    // Fallback in case load event doesn't fire
    setTimeout(hideLoader, MIN_DISPLAY_TIME + 1000);
} else {
    // Already shown in this session - hide immediately
    loadingOverlay.style.display = 'none';
}


//----------------------------------------------------------------------------------------

// Function to generate random time between 30 min and 2 hours (in seconds)
function getRandomTime() {
    return Math.floor(Math.random() * (7200 - 1800 + 1)) + 1800; // 1800s=30min, 7200s=2hr
}

// Initialize all countdown timers
function initializeCountdownTimers() {
    const nftCards = document.querySelectorAll('.nft-card');
    
    nftCards.forEach((card, index) => {
        const timer = card.querySelector('.countdown-timer');
        if (!timer) return;
        const nftId = card.getAttribute('data-nft-id') || `nft-${index}`;
        card.setAttribute('data-nft-id', nftId);
        
        // Get or create initial time
        const storageKey = `nftTimer_${nftId}`;
        const now = Math.floor(Date.now() / 1000);
        
        let initialSeconds = parseInt(timer.getAttribute('data-initial-seconds')) || 7200;
        let endTime;
        
        // Check if we have a saved timer
        const savedTimer = localStorage.getItem(storageKey);
        
        if (savedTimer) {
            const { initial, end } = JSON.parse(savedTimer);
            initialSeconds = initial;
            endTime = end;
            
            // If timer should have already ended
            if (now >= endTime) {
                const timePassed = now - endTime;
                const cyclesPassed = Math.floor(timePassed / initialSeconds) + 1;
                endTime = endTime + (cyclesPassed * initialSeconds);
                localStorage.setItem(storageKey, JSON.stringify({ initial: initialSeconds, end: endTime }));
            }
        } else {
            // First time - set random time
            initialSeconds = getRandomTime();
            endTime = now + initialSeconds;
            localStorage.setItem(storageKey, JSON.stringify({ 
                initial: initialSeconds, 
                end: endTime 
            }));
        }
        
        timer.setAttribute('data-initial-seconds', initialSeconds);
        startCountdown(timer, nftId, initialSeconds, endTime);
    });
}

function startCountdown(timer, nftId, initialSeconds, endTime) {
    const storageKey = `nftTimer_${nftId}`;
    
    function updateTimer() {
        const now = Math.floor(Date.now() / 1000);
        let remaining = endTime - now;
        
        // Handle timer completion
        if (remaining <= 0) {
            remaining = 0;
            resetTimer(timer, nftId, initialSeconds);
            return;
        }
        
        // Calculate time units
        const hours = Math.floor(remaining / 3600).toString().padStart(2, '0');
        const minutes = Math.floor((remaining % 3600) / 60).toString().padStart(2, '0');
        const seconds = (remaining % 60).toString().padStart(2, '0');
        
        // Update display
        timer.querySelector('.hours').textContent = hours;
        timer.querySelector('.minutes').textContent = minutes;
        timer.querySelector('.seconds').textContent = seconds;
    }
    
    function resetTimer() {
        // Calculate new end time
        const now = Math.floor(Date.now() / 1000);
        const newEndTime = now + initialSeconds;
        
        // Update storage
        localStorage.setItem(storageKey, JSON.stringify({ 
            initial: initialSeconds, 
            end: newEndTime 
        }));
        
        // Add visual feedback
        const digits = timer.querySelectorAll('.countdown-digit');
        digits.forEach(digit => {
            digit.classList.add('resetting');
            setTimeout(() => digit.classList.remove('resetting'), 500);
        });
        
        // Restart countdown with new end time
        setTimeout(() => {
            startCountdown(timer, nftId, initialSeconds, newEndTime);
        }, 500);
    }
    
    // Update immediately and every second
    updateTimer();
    timer.countdownInterval = setInterval(updateTimer, 1000);
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initializeCountdownTimers);   

//----------------------------------------------------------------------------------------------------------   


