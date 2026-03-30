<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @include('components.font')
        
    <style>

      
        :root {
            --primary: #2081e2;
            --primary-light: #e8f4fd;
            --secondary: #f7f7f7;
            --text: #04111d;
            --text-light: #707a83;
            --border: #e7e7e7;
            --success: #35c77f;
            --bg: #fafafa;
            --navbar-bg: rgba(255, 255, 255, 0.8);
            --card-bg: white;
        }
        
        * {
            -webkit-tap-highlight-color: transparent;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
           
        }
        
        .dark-mode {
            --primary: #3a9bff;
            --primary-light: #1a2a3a;
            --secondary: #2d2d2d;
            --text: #f5f5f5;
            --text-light: #a0a0a0;
            --border: #2d2d2d;
            --success: #35c77f;
            --bg: #121212;
            --navbar-bg: rgba(18, 18, 18, 0.8);
            --card-bg: #1e1e1e;
        }
        
        body {
            background-color: var(--bg);
            color: var(--text);
            max-width: 100vw;
            overflow-x: hidden;
            transition: background-color 0.3s ease, color 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 60vh;
        }
        
        .body2 {
            width: 100%;
            max-width: 500px;
        }
        
        /* Navbar */
        .navbar {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 15px;
            background-color: var(--navbar-bg);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0px;
            z-index: 100;
            border-bottom: 2px solid var(--border);
        }
        
        .logo {
            text-align: center;
            margin-top: 0px;
            margin-bottom: 0px;
            font-size: 26px;
            color: var(--text);
            font-weight: 750;
            text-decoration: none;
        }
        
        .logo b {
            font-size: 26px;
            margin-bottom: 60px;
            text-align: center;
            color: transparent;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
        
        .theme-toggle {
            width: 30px;
            height: 30px;
            background: none;
            border: none;
            font-size: 14px;
            color: var(--text);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid var(--border);
            background-color: var(--border);
        }
        
        .theme-toggle:hover {
            background-color: var(--secondary);
        }
        
        /* Login Container */
        .login-container {
            width: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-out;
        }
        
        .login-header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            margin-top: 20px;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
        
        .login-header p {
            color: var(--text-light);
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .login-form {
            width: 100%;
            max-width: 400px;
            background-color: var(--card-bg);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--border);
            animation: slideUp 0.8s ease-out;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: var(--text);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 25px;
            border: 1px solid var(--border);
            background-color: var(--secondary);
            color: var(--text);
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
         /*   border-color: var(--primary); */
            border: 1px solid transparent;
            background-origin: border-box;
            background-clip: padding-box, border-box;
            background-image: linear-gradient(var(--card-bg), var(--card-bg)), 
                      linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 100% 100%, 400% 400%;
            animation: rgbFlow 6s ease infinite;
            
            
        }
        
        .password-toggle {
            position: absolute;
            right: 14px;
            top: 46px;
            font-size: 14px;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
        }

        .password-toggle:hover {
            color: var(--text);
        } 
 
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            
        }
        
        .remember-me input {
            accent-color: var(--text-light); 
        }
        
        .forgot-password {
            color: transparent;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
/* Login Button Base Styles */
.login-btn {
    width: 100%;
    padding: 13px;
    margin-top: 10px;
    border-radius: 25px;
    background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    background-size: 400% 400%;
    color: white;
    border: none;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    animation: rgbFlow 6s ease infinite;
    margin-bottom: 20px;
    position: relative;
    overflow: hidden;
    min-width: 110px; /* Maintain consistent width */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}


/* Button Content (Text) */
.login-btn .button-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: opacity 0.2s ease;
}

/* Loading Spinner */
.login-btn .loading-spinner {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    display: none; /* Hidden by default */
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.2s ease;
    color: white;
}

/* Loading State */
.login-btn.loading {
    pointer-events: none; /* Disable clicks during loading */
}

.login-btn.loading .button-content {
    opacity: 0;
}

.login-btn.loading .loading-spinner {
    opacity: 1;
    display: flex !important;
}

/* RGB Flow Animation (reuse from existing) */
@keyframes rgbFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
        

        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: var(--text-light);
            font-size: 12px;
        }
        
        .divider::before, .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background-color: var(--border);
            margin: 0 10px;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--border);
            color: var(--text);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .social-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: var(--text);
            padding-bottom: 100%;
            
        }
        
        .register-link a {
            margin-left: 10px;
            color: transparent;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            text-decoration: none;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
        
        /* Animations */
        @keyframes rgbFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: var(--navbar-bg);
            backdrop-filter: blur(10px);
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
            gap: 4px;
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


        
/* Hide browser's default password reveal eye in Chrome, Edge, Safari */
input[type="password"]::-webkit-reveal,
input[type="password"]::-webkit-caps-lock-indicator,
input[type="password"]::-webkit-credentials-auto-fill-button {
    display: none !important;
    visibility: hidden;
    opacity: 0;
    position: absolute;
    right: 0;
    width: 0;
    height: 0;
    margin: 0;
    padding: 0;
    pointer-events: none;
}

/* Firefox (if needed) */
input[type="password"]::-ms-reveal,
input[type="password"]::-ms-clear {
    display: none !important;
    width: 0;
    height: 0;
}

/*loading*/
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
    transition: opacity 0.5s ease, visibility 0.5s ease;
     opacity: 1;
    visibility: visible;
}

.logo-loading {
    text-align: center;
    font-size: 26px;
    color: var(--text);
    font-weight: 750;
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

.loading-overlay.hide {
    opacity: 0;
    visibility: hidden;
}


    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false">
    <div class="loading-overlay" id="loadingOverlay">
    <div class="logo-loading">Future <b>NFT</b>
        </div> 
</div>
    <div class="body2">
        <!-- Navbar -->
       <nav class="navbar">
    <div class="nav-left">
        <a href="" class="logo">Future <b>NFT</b></a>
    </div>
</nav>


@if($errors->any())
    <x-alert type="error" :message="$errors->first()" />
@endif

@if(session()->has('notify'))
    @foreach(session('notify') as $message)
        <x-alert :type="$message[0]" :message="$message[1]" />
    @endforeach
@endif


        <!-- Login Container -->
        <div class="login-container">
            <div class="login-header">
                <h1>Welcome Back</h1>
                <p>Sign in to access your Future NFT account</p>
            </div>
            
            <form class="login-form" action="{{ route('user.login') }}" method="POST">
            @csrf
            
                <div class="form-group">
                    <label for="email">Email or Username</label>
                    <input type="email" id="username" name="username" class="form-control" placeholder="Enter your email or username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                    <button type="button" class="password-toggle" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

                <div class="remember-forgot">
                    <div class="remember-me" >
                        <input type="checkbox" id="remember" name="remember" >
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="/user/password/reset" class="forgot-password">Forgot Password?</a>
                </div>

<button type="submit" class="login-btn" id="loginButton">
    <span class="button-content">
        Login Account
    </span>
    <span class="loading-spinner" style="display: none;">
        <i class="fas fa-spinner fa-spin"></i>
    </span>
</button>
            

                <div class="divider">or continue with</div>

        <!--        <div class="social-login">
                    <button type="button" class="social-btn"> 
                        <i class="fab fa-google"></i> 
                    </button> 
                    <button type="button" class="social-btn"> 
                        <i class="fab fa-twitter"></i> 
                    </button> 
                    <button type="button" class="social-btn"> 
                        <i class="fab fa-discord"></i> 
                    </button> 
                    <button type="button" class="social-btn"> 
                        <i class="fab fa-metamask"></i> 
                    </button> 
                </div>    -->

                <div class="register-link"> 
                    Don't have an account? <a href="/user/register"> Create Account</a>
                </div>
            </form>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <a href="/" class="menu-item">
                <i class="fas fa-home menu-icon"></i>
                <span class="menu-text">Home</span>
            </a>
            <a href="" class="menu-item active">
                <i class="fas fa-sign-in-alt menu-icon"></i>
                <span class="menu-text">Login</span>
            </a>
            <a href="/user/register" class="menu-item">
                <i class="fas fa-user-plus menu-icon"></i>
                <span class="menu-text">Register</span>
            </a>
            
        </div>
    </div>




<script>
    // Set dark/light mode based on system preference and localStorage
    document.addEventListener('DOMContentLoaded', function() {
        const body = document.body;
        
        // Check for saved preference or use system preference
        const savedTheme = localStorage.getItem('theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        // Apply theme
        if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
            body.classList.add('dark-mode');
        } else {
            body.classList.remove('dark-mode');
        }

        // Watch for system preference changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('theme')) { // Only auto-update if no manual preference set
                if (e.matches) {
                    body.classList.add('dark-mode');
                } else {
                    body.classList.remove('dark-mode');
                }
            }
        });

        // Password toggle functionality
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        if (togglePassword && password) {
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.innerHTML = type === 'password' 
                    ? '<i class="fas fa-eye"></i>' 
                    : '<i class="fas fa-eye-slash"></i>';
            });
        }
        // Auto-check the checkbox
        document.getElementById("remember").checked = true;
        
        // Mobile menu item click handling
        const menuItems = document.querySelectorAll('.mobile-menu .menu-item');
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                menuItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
        

    });

// Login button loading spinner
document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.getElementById('loginButton');
    const loginForm = document.querySelector('.login-form');
    
    if (loginBtn && loginForm) {
        loginForm.addEventListener('submit', function() {
            loginBtn.classList.add('loading');
            loginBtn.style.pointerEvents = 'none';
        });
        
        // Reset button state if form submission fails
        window.addEventListener('pageshow', function() {
            loginBtn.classList.remove('loading');
            loginBtn.style.pointerEvents = 'auto';
        });
    }
}); 
 
    
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
</body>
</html>