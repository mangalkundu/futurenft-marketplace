<div class="loading-overlay" id="loadingOverlay">
    <div class="logo-loading">Future <b>NFT</b></div> 
</div>

<style>
.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: var(--bg);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    opacity: 1;
    visibility: visible;
}

.logo-loading {
    text-align: center;
    font-size: 26px;
    color: var(--text);
    font-weight: 700;
}

.logo-loading b {
    font-size: 26px;
    color: transparent;
    background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    -webkit-background-clip: text;
    background-clip: text;
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

/* Hide when done */
.loading-overlay.hide {
    opacity: 0;
    visibility: hidden;
}

@keyframes rgbFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
</style>

<script>
// Loading screen management
document.addEventListener('DOMContentLoaded', function() {
    const loadingOverlay = document.getElementById('loadingOverlay');
    
    // Only show loading if it's the first page load of the session
    if (!sessionStorage.getItem('initialLoadComplete')) {
        // Show loading screen
        loadingOverlay.style.display = 'flex';
        
        // Set minimum display time (adjust as needed)
        const MIN_LOADING_TIME = 800;
        
        // Hide after minimum time or when page fully loads (whichever is later)
        const hideTime = Math.max(
            MIN_LOADING_TIME,
            performance.timing.domContentLoadedEventEnd - performance.timing.navigationStart
        );
        
        setTimeout(() => {
            loadingOverlay.classList.add('hide');
            sessionStorage.setItem('initialLoadComplete', 'true');
            
            // Remove after animation completes
            setTimeout(() => {
                loadingOverlay.style.display = 'none';
            }, 500);
        }, hideTime);
    } else {
        // For subsequent pages, hide immediately but with a quick fade
        loadingOverlay.style.opacity = '0';
        loadingOverlay.style.transition = 'opacity 0.3s ease';
        setTimeout(() => {
            loadingOverlay.style.display = 'none';
        }, 300);
    }
});
</script>