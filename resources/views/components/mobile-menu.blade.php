<div class="mobile-menu-component">
    <!-- Mobile Bottom Menu -->
    <div class="mobile-menu">
        <a href="/" class="menu-item">
            <i class="fas fa-home menu-icon"></i>
            <span class="menu-text">Home</span>
        </a>
        <a href="/user/invest/statistics" class="menu-item">
            <i class="fas fa-chart-line menu-icon"></i>
            <span class="menu-text">Invest</span>
        </a>
        <a href="/user/pool" class="menu-item">
            <i class="fas fa-trophy menu-icon"></i>
            <span class="menu-text">Pool</span>
        </a>
        <a href="/user/dashboard" class="menu-item">
            <i class="fas fa-user menu-icon"></i>
            <span class="menu-text">Account</span>
        </a>
    </div>

    <style>
        /* Mobile menu styles */
        .mobile-menu {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: var(--navbar-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            display: flex;
            justify-content: space-around;
            padding: 14px 0;
            border-top: 2px solid var(--border);
            z-index: 100;
        }
        
        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--text-light);
            text-decoration: none;
            font-size: 14px;
            gap: 5px;
            transition: all 0.3s ease;
        }
        
        .menu-icon {
            font-size: 14px;
            color: var(--text);
            transition: all 0.3s ease;
        }
        
        .menu-text {
            color: var(--text);
            transition: all 0.3s ease;
        }
        
        .menu-item:hover .menu-icon {
            transform: translateY(-2px);
        }
        
        .menu-item.active .menu-icon,
        .menu-item.active .menu-text {
            color: transparent;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.mobile-menu .menu-item');
            
            // Function to set active menu item
            function setActiveMenuItem() {
                const currentPath = window.location.pathname;
                
                menuItems.forEach(item => {
                    // Get the path from href attribute
                    const itemPath = new URL(item.href).pathname;
                    
                    // Remove active class from all items first
                    item.classList.remove('active');
                    
                    // Add active class only to the matching item
                    if (itemPath === currentPath) {
                        item.classList.add('active');
                    }
                });
            }
            
            // Set active menu item on initial load
            setActiveMenuItem();
            
            // Handle click events
            menuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    // Remove active class from all items
                    menuItems.forEach(i => i.classList.remove('active'));
                    
                    // Add active class to clicked item
                    this.classList.add('active');
                    
                    // Store the active item in sessionStorage
                    sessionStorage.setItem('activeMobileMenuItem', this.href);
                });
            });
            
            // Update active menu item when navigating back/forward
            window.addEventListener('popstate', function() {
                // Small timeout to ensure URL has updated
                setTimeout(setActiveMenuItem, 50);
            });
        });
    </script>
</div>
