<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Reset Password</title>
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
        
        /* Verification Container */
        .verification-container {
            width: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .verification-header {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-out;
        }
        
        .verification-header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            margin-top: 20px;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
        
        .verification-header p {
            color: var(--text-light);
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .verification-form {
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
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: var(--text);
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border);
            border-radius: 25px;
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
            right: 15px;
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
        
/* Submit Button Base Styles */
.submit-btn {
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
    min-width: 110px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Button Content (Text) */
.submit-btn .button-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: opacity 0.2s ease;
}

/* Loading Spinner */
.submit-btn .loading-spinner {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    display: none;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.2s ease;
    color: white;
}

/* Loading State */
.submit-btn.loading {
    pointer-events: none;
}

.submit-btn.loading .button-content {
    opacity: 0;
}

.submit-btn.loading .loading-spinner {
    opacity: 1;
    display: flex !important;
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
        
        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: var(--text);
            padding-bottom: 100%;
            
        }
        
        .login-link a {
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
        
        .login-link a:hover {
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

        .text-danger {
            color: transparent;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28);
            -webkit-background-clip: text;
            background-clip: text;
            font-size: 13px;
            margin-top: 15px;
            display: block;
            background-size: 200% 200%;
            animation: rgbFlow 3s ease infinite;
        }
        .text-danger i.fas {
            margin-right: 2px;
        }
        
        .password-validation {
            display: none;
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
    
    
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    
    
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

        <!-- Verification Container -->
        <div class="verification-container">
            <div class="verification-header">
                <h1>Reset Password</h1>
                <p>Please enter a 6-digit password and don't share it with anyone</p>
            </div>

            <form class="verification-form" action="{{ route('user.password.update') }}" method="POST">
                @csrf
                
          <!--      @if(session()->has('notify'))
                    @foreach(session('notify') as $message)
                        <div class="alert-message">
                             {{ $message[1] }}
                        </div>
                    @endforeach
                @endif   -->
                
                <input type="hidden" name="email" value="{{ $email ?? '' }}">
                <input type="hidden" name="token" value="{{ $token ?? '' }}">

<div class="form-group">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter a strong password" required>
    <button type="button" class="password-toggle" id="togglePassword">
        <i class="fas fa-eye"></i>
    </button>
    @error('password')
        <small class="text-danger"><i class="fas fa-exclamation-circle"></i> {{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter password again" required>
    @error('password_confirmation')
        <small class="text-danger"><i class="fas fa-exclamation-circle"></i> {{ $message }}</small>
    @enderror
</div>

<button type="submit" class="submit-btn" id="submitButton">
    <span class="button-content">
        Reset Password
    </span>
    <span class="loading-spinner" style="display: none;">
        <i class="fas fa-spinner fa-spin"></i>
    </span>
</button>

                <div class="form-group text-center">
                    <div class="divider">or continue with</div>
                    <div class="login-link">
                        <a href="{{ route('user.login') }}">@lang('Login Account')</a>
                    </div>
                </div>
            </form>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <a href="{{ route('home') }}" class="menu-item">
                <i class="fas fa-home menu-icon"></i>
                <span class="menu-text">Home</span>
            </a>
            <a href="{{ route('user.login') }}" class="menu-item">
                <i class="fas fa-sign-in-alt menu-icon"></i>
                <span class="menu-text">Login</span>
            </a>
            <a href="{{ route('user.register') }}" class="menu-item">
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
            if (!localStorage.getItem('theme')) {
                if (e.matches) {
                    body.classList.add('dark-mode');
                } else {
                    body.classList.remove('dark-mode');
                }
            }
        });
        
        // Password toggle functionality
        const togglePassword = document.getElementById('togglePassword');
        const password = document.querySelector('input[name="password"]');
        const passwordConfirmation = document.querySelector('input[name="password_confirmation"]');

        if (togglePassword && password) {
            togglePassword.addEventListener('click', function() {
                // Toggle both password fields
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                passwordConfirmation.setAttribute('type', type);
                
                this.innerHTML = type === 'password' 
                    ? '<i class="fas fa-eye"></i>' 
                    : '<i class="fas fa-eye-slash"></i>';
            });
        }
        
        // Form validation and submission handling
        const form = document.querySelector('.verification-form');
        const submitBtn = document.getElementById('submitButton');
        
        if (form && submitBtn) {
            form.addEventListener('submit', function(e) {
                // Validate passwords match
                const password = document.querySelector('input[name="password"]');
                const passwordConfirmation = document.querySelector('input[name="password_confirmation"]');
                
                // Clear previous errors
                const existingErrors = form.querySelectorAll('.text-danger');
                existingErrors.forEach(error => error.remove());
                
                // Create error element
                const createError = (message) => {
                    const errorElement = document.createElement('small');
                    errorElement.className = 'text-danger';
                    errorElement.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
                    return errorElement;
                };
                
                // Check password length
                if (password.value.length < 6) {
                    e.preventDefault();
                    const errorElement = createError('Password must be at least 6 characters.');
                    password.parentNode.appendChild(errorElement);
                    return;
                }
                
                // Check passwords match
                if (password.value !== passwordConfirmation.value) {
                    e.preventDefault();
                    const errorElement = createError('Passwords do not match.');
                    passwordConfirmation.parentNode.appendChild(errorElement);
                    return;
                }
                
                // If validation passes, show loading spinner
                submitBtn.classList.add('loading');
            });
        }
        
        // Reset button state if form submission fails
        window.addEventListener('pageshow', function() {
            if (submitBtn) {
                submitBtn.classList.remove('loading');
            }
        });
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