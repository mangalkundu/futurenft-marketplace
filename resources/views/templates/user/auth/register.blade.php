<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        
        /* Register Container */
        .register-container {
            width: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .register-header {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-out;
        }
        
        .register-header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            margin-top: 20px;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
        
        .register-header p {
            color: var(--text-light);
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .register-form {
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
        
/* Register Button Base Styles */
.register-btn {
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
.register-btn .button-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: opacity 0.2s ease;
}

/* Loading Spinner */
.register-btn .loading-spinner {
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
.register-btn.loading {
    pointer-events: none;
}

.register-btn.loading .button-content {
    opacity: 0;
}

.register-btn.loading .loading-spinner {
    opacity: 1;
    display: flex !important;
}

/* RGB Flow Animation (shared with other elements) */
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
        
        .login-link {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: var(--text);
            padding-bottom: 100%;
        }
        
        .login-link a {
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
        
        
        .custom--checkbox {
            display:flex ;
            align-items: center;
            margin-bottom: 15px;
            font-size: 14px;
            
        }
        
        .custom--checkbox input {
            margin-right: 8px;
            accent-color: var(--text-light);
        }


        
        /* Referral Section */
        .referral-section {
            margin-bottom: 15px;
            
        }
        
        .referral-toggle {
            color: transparent;
            cursor: pointer;
            font-size: 15px;
            margin-bottom: 10px;
            display: inline-block;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        
            
        }
        
        .referral-toggle:hover {
            text-decoration: underline;
        }
        
        .referral-input {
            display: none;
            margin-top: 15px;
            margin-bottom: 20px;
            
        }
        
        .referred-by {
            color: transparent;
            cursor: pointer;
            font-size: 15px;
            margin-bottom: 10px;
            display: inline-block;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            font-weight: bold;
            font-style: ;
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

        <!-- Register Container -->
        <div class="register-container">
            <div class="register-header">
                <h1>Create Account</h1>
                <p>Join us to start your NFT journey</p>
            </div>

            <form class="register-form" action="{{ route('user.register') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Referral Section -->
                    <div class="form-group col-12 referral-section">
                       @if (session()->get('reference'))
                            <p>You're referred by <span class="referred-by">{{ session()->get('reference') }}</span></p>
                        @else
                            <div id="referralToggle" class="referral-toggle">Have a referral code? Click here</div>
                            <div id="referralInput" class="referral-input">
                                <label for="ref_by">Referral Code (Optional)</label>
                                <input type="text" id="ref_by" name="ref_by" class="form-control" placeholder="Enter referral username" value="{{ old('ref_by') }}">
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group col-sm-6">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" value="{{ old('firstname') }}" placeholder="Enter your first name" required>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" value="{{ old('lastname') }}" placeholder="Enter your last name" required>
                    </div>
                    

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control checkUser" value="{{ old('email') }}" placeholder="Enter your email address" required>
                         
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password"  name="password" class="form-control @if (gs('secure_password')) secure-password @endif" placeholder="Enter a strong password" required>
                        <button type="button"  class="password-toggle" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password"  name="password_confirmation" class="form-control" placeholder="Enter password again" required>
                    </div>

                    @if (gs('agree'))
                        @php
                            $policyPages = getContent('policy_pages.element', false, null, true);
                        @endphp
                        <div class="form-group">
                            <x-captcha />
                        </div>
                        
                        <div class="form-group">
                            <div class="custom--checkbox">
                                <input type="checkbox" id="agree" @checked(old('agree')) name="agree" required>
                                <label for="agree"></label>
                                <span>I agree 
                                    @foreach ($policyPages as $policy)
                                        <a href="{{ route('policy.pages', $policy->slug) }}" style="color: var(--text);" target="_blank">{{ __($policy->data_values->title) }}</a>
                                        @if (!$loop->last)
                                            &
                                        @endif
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    @endif

<button type="submit" class="register-btn" id="registerButton">
    <span class="button-content">
        Create Account
    </span>
    <span class="loading-spinner" style="display: none;">
        <i class="fas fa-spinner fa-spin"></i>
    </span>
</button>

                     <div class="divider">or continue with</div>
                    <div class="login-link">
                        Already have an account? <a href="{{ route('user.login') }}">Login Account</a>
                    </div>
                </div>
            </form>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <a href="/" class="menu-item">
                <i class="fas fa-home menu-icon"></i>
                <span class="menu-text">Home</span>
            </a>
            <a href="/user/login" class="menu-item">
                <i class="fas fa-sign-in-alt menu-icon"></i>
                <span class="menu-text">Login</span>
            </a>
            <a href="" class="menu-item active">
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


// Referral code toggle functionality
            const referralToggle = document.getElementById('referralToggle');
            const referralInput = document.getElementById('referralInput');
            
            if (referralToggle && referralInput) {
                referralToggle.addEventListener('click', function() {
                    referralInput.style.display = referralInput.style.display === 'block' ? 'none' : 'block';
                    this.textContent = referralInput.style.display === 'block' 
                        ? 'Hide referral code field' 
                        : 'Have a referral code? Click here';
                });
            }


            // Mobile menu item click handling
            const menuItems = document.querySelectorAll('.mobile-menu .menu-item');
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    menuItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });

        // Check if user exists
        (function($) {
            $('.checkUser').on('focusout', function(e) {
                var url = '{{ route('user.checkUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';

                var data = {
                    email: value,
                    _token: token
                }

                $.post(url, data, function(response) {
                    if (response.data != false) {
                        alert('You already have an account. Please login instead.');
                    }
                });
            });
        })(jQuery);
        
// Register button loading spinner
document.addEventListener('DOMContentLoaded', function() {
    const registerBtn = document.getElementById('registerButton');
    const registerForm = document.querySelector('.register-form');
    
    if (registerBtn && registerForm) {
        registerForm.addEventListener('submit', function() {
            registerBtn.classList.add('loading');
            registerBtn.style.pointerEvents = 'none';
        });
        
        // Reset button state if form submission fails
        window.addEventListener('pageshow', function() {
            registerBtn.classList.remove('loading');
            registerBtn.style.pointerEvents = 'auto';
        });
    }
});

        
</script>

    @if (gs('secure_password'))
        @push('script-lib')
            <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
        @endpush
    @endif
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
</body>
</html>
