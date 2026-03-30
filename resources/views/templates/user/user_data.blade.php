
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Complete Profile</title>
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
        
        /* Form Container */
        .form-container {
            width: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-out;
        }
        
        .form-header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            margin-top: 20px;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
        
        .form-header p {
            color: var(--text-light);
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .account-form {
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
        
        .form--control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 25px;
            border: 1px solid var(--border);
            background-color: var(--secondary);
            color: var(--text);
            font-size: 14px;
            transition: all 0.3s ease;
            
        }
        
        .form-control:focus, .form--control:focus {
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

/* Submit Button Base Styles */       
.btn--base {
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
.btn--base .button-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: opacity 0.2s ease;
}

/* Loading Spinner */
.btn--base .loading-spinner {
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
.btn--base.loading {
    pointer-events: none;
}

.btn--base.loading .button-content {
    opacity: 0;
}

.btn--base.loading .loading-spinner {
    opacity: 1;
    display: flex !important;
}

/* RGB Flow Animation */
@keyframes rgbFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

        
        .input-group {
            display: flex;
            align-items: center;
            width: 100%; 
        }
        
        .input-group-text {
            padding: 12px 15px;
            border-radius: 25px 0 0 25px;
            background-color: var(--secondary);
            border: 1px solid var(--border);
            color: var(--text);
            font-size: 14px;
            min-width: 60px;
            text-align: center; 
        }
        
        .input-group .form--control {
            border-radius: 0 25px 25px 0;
            border-left: none;
        }
        
        .input-group:focus-within .input-group-text{
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
        
        .logout-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: var(--text);
            padding-bottom: 100%;
            
        }
        
        .logout-link a {
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
        
        .logout-link a:hover {
            text-decoration: underline;
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
        
        .alert-message {
            color: transparent;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28);
            -webkit-background-clip: text;
            background-clip: text;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: center;
            background-size: 200% 200%;
            animation: rgbFlow 3s ease infinite;
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
    /*    .is-invalid {
             border-color: #ff4d4d !important;
        }  */
        
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

        <!-- Form Container -->
        <div class="form-container">
            <div class="form-header">
                <h1>Complete Your Profile</h1>
                <p>Please provide your details to continue</p>
            </div>

            <form class="account-form" action="{{ route('user.data.submit') }}" method="POST">
                @csrf
                <div class="row">
                    @if (!$user->email)
                        <div class="form-group col-sm-6">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" class="form-control form--control" value="{{ old('firstname') }}" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" class="form-control form--control" value="{{ old('lastname') }}" required>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="email">E-Mail Address</label>
                            <input type="email" id="email" name="email" class="form-control form--control checkUser" value="{{ old('email') }}" required>
                            <small class="text-danger emailExist"></small>
                        </div>
                    @endif
                    
                    <div class="form-group col-sm-12">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control form--control checkUser" value="{{ old('username') }}" placeholder="Create 6 digits username" required>
                        <small class="text-danger usernameExist"></small>
                    </div>
                    
                     <div class="form-group col-md-6">
            <label for="country">Country</label>
            <select name="country" id="country" class="form--control form-select">
                @foreach ($countries as $key => $country)
                    <option data-mobile_code="{{ $country->dial_code }}" value="{{ $country->country }}" data-code="{{ $key }}" 
                        {{ (old('country_code') == $key || $country->country == 'India') ? 'selected' : '' }}>
                        {{ __($country->country) }}
                    </option>
                @endforeach
            </select>
        </div>
                    
        <div class="form-group col-md-6">
            <label for="mobile">Mobile Number</label>
            <div class="input-group">
                <span class="input-group-text mobile-code">+91</span>
                <input type="hidden" name="mobile_code" value="91">
                <input type="hidden" name="country_code" value="IN">
                <input type="number" id="mobile" name="mobile" value="{{ old('mobile') }}" 
                    class="form-control form--control checkUser" 
                    pattern="[0-9]{10}" 
                    title="Please enter exactly 10 digits" 
                    maxlength="10" 
                    minlength="10" 
                    required>
            </div>
            <small class="text-danger mobileExist"></small>
            <small class="text-danger mobileValidation" style="display:none;"><i class="fas fa-exclamation-circle"></i> Mobile number must be exactly 10 digits.</small>
        </div>
<!--
                    <div class="form-group col-sm-6">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="form-control form--control" value="{{ old('address') }}">
                    </div>
                    
                    <div class="form-group col-sm-6">
                        <label for="state">State</label>
                        <input type="text" id="state" name="state" class="form-control form--control" value="{{ old('state') }}">
                    </div>
                    
                    <div class="form-group col-sm-6">
                        <label for="zip">Zip Code</label>
                        <input type="text" id="zip" name="zip" class="form-control form--control" value="{{ old('zip') }}">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" class="form-control form--control" value="{{ old('city') }}">
                    </div>   -->
                    
                    <div class="col-12">
<button type="submit" class="btn--base" id="submitButton">
    <span class="button-content">
        Submit
    </span>
    <span class="loading-spinner" style="display: none;">
        <i class="fas fa-spinner fa-spin"></i>
    </span>
</button>
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="divider">or continue with</div>
                    <div class="logout-link">
                        <a href="{{ route('user.logout') }}">@lang('Logout Account')</a>
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
            <a href="/user/register" class="menu-item active">
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

            // Mobile menu item click handling
            const menuItems = document.querySelectorAll('.mobile-menu .menu-item');
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    menuItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });

        // Initialize country code functionality
        $(document).ready(function() {
            // Set India as default country
            function setIndiaAsDefault() {
                const indiaOption = $('#country option[value="India"]');
                if (indiaOption.length) {
                    const mobileCode = indiaOption.data('mobile_code');
                    const countryCode = indiaOption.data('code');
                    
                    $('input[name=mobile_code]').val(mobileCode);
                    $('input[name=country_code]').val(countryCode);
                    $('.mobile-code').text('+' + mobileCode);
                }
            }

            // Initialize with India as default
            setIndiaAsDefault();

            // Handle country change
            $('#country').on('change', function() {
                const selectedOption = $(this).find('option:selected');
                const mobileCode = selectedOption.data('mobile_code');
                const countryCode = selectedOption.data('code');
                
                $('input[name=mobile_code]').val(mobileCode);
                $('input[name=country_code]').val(countryCode);
                $('.mobile-code').text('+' + mobileCode);
                
                // Validate mobile number length based on country
                validateMobileNumber();
            });

            // Mobile number validation
            $('#mobile').on('input', function() {
                validateMobileNumber();
            });

            function validateMobileNumber() {
                const mobileInput = $('#mobile');
                const mobileValue = mobileInput.val();
                const country = $('#country').val();
                const validationError = $('.mobileValidation');
                
                // For India, require exactly 10 digits
                if (country === 'India') {
                    if (mobileValue.length !== 10 && mobileValue.length > 0) {
                        mobileInput.addClass('is-invalid');
                        validationError.show();
                        return false;
                    } else {
                        mobileInput.removeClass('is-invalid');
                        validationError.hide();
                        return true;
                    }
                }
                
                // For other countries, just make sure it's not empty
                if (mobileValue.length === 0) {
                    mobileInput.addClass('is-invalid');
                    return false;
                } else {
                    mobileInput.removeClass('is-invalid');
                    return true;
                }
            }

            // Modify checkUser to include validation
            function checkUser(value, name) {
                if (name === 'mobile' && !validateMobileNumber()) {
                    return;
                }
                
                const url = `{{ route('user.checkUser') }}`;
                const token = '{{ csrf_token() }}';
                let data = { _token: token };

                if (name === 'mobile') {
                    data = {
                        mobile: value,
                        mobile_code: $('input[name=mobile_code]').val(),
                        _token: token
                    };
                } else if (name === 'email') {
                    data = {
                        email: value,
                        _token: token
                    };
                } else if (name === 'username') {
                    data = {
                        username: value,
                        _token: token
                    };
                }
                
                $.post(url, data, function(response) {
                    if (response.data !== false && response.type) {
                        $(`.${response.type}Exist`).text(`${response.field} already exists`);
                    } else {
                        $(`.${response.type}Exist`).text('');
                    }
                }).fail(function(xhr, status, error) {
                    console.error('Error checking user:', error);
                });
            }
        });
        

// Submit button loading spinner with mobile validation
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.account-form');
    const submitBtn = document.querySelector('.btn--base'); // Changed to class selector
    
    if (form) {
        form.addEventListener('submit', function(e) {
            // 1. Validate mobile number (India specific)
            const mobileInput = document.getElementById('mobile');
            if (mobileInput && mobileInput.value.length !== 10) {
                e.preventDefault();
                document.querySelector('.mobileValidation').style.display = 'block';
                mobileInput.focus();
                return;
            }
            
            // 2. Validate required fields
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                if (!document.querySelector('.alert-message')) {
                    const alert = document.createElement('div');
                    alert.className = 'alert-message';
                    alert.textContent = 'Please fill all required fields';
                    form.prepend(alert);
                }
                return;
            }
            
            // 3. Only show loading if validation passed
            if (submitBtn) {
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
            }
        });
    }
    
    // Reset button if page reloads
    window.addEventListener('pageshow', function() {
        if (submitBtn) {
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;
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
