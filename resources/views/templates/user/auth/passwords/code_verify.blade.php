
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Email Verification</title>
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
        
        .verification-text {
            color: var(--text);
            font-size: 14px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .code-input-container {
            position: relative;
            margin: 25px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .code-input {
            padding: 15px !important;
            width: 250px;
            text-align: center;
            font-size: 24px;
            letter-spacing: 15px;
            font-weight: bold;
            border: 1px solid var(--border);
            border-radius: 15px;
            background-color: var(--primary-light);
            color: var(--primary);
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .code-input:focus {
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
        
        .code-input::placeholder {
            color: var(--text-light);
            opacity: 0.5;
            letter-spacing: normal;
        }
        
        .code-input.filled {
            border-color: var(--success);
            animation: pulse 0.5s ease;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }
        
        /* Loading state */
        .submit-btn .submit-loader {
            display: none;
            margin-left: 8px;
        }
        
        .submit-btn.verifying .submit-text {
            display: none;
        }
        
        .submit-btn.verifying .submit-loader {
            display: inline-block;
        }
        

        
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        

        
        .countdown-wrapper {
            color: var(--text);
            font-size: 14px;
            
        }

        /* Countdown styles */
#countdown {
    font-family: 'Courier New', monospace;
    font-size: 1.1em;
    font-weight: bold;
    letter-spacing: ;
    color: var(--text);
    transition: color 0.3s ease;
}

.blink {
    animation: blink-animation 1s steps(2, start) infinite;
}

@keyframes blink-animation {
    to { visibility: hidden; }
}





        
        .try-again-link {
            color: transparent;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            margin-left: 5px;
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
        
        .try-again-link {
            pointer-events: none;
            opacity: 0.5;
        }

        .try-again-link.active {
            pointer-events: auto;
            opacity: 1;
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

        <!-- Verification Container -->
        <div class="verification-container">
            <div class="verification-header">
                <h1>Verify Email Address</h1>
                <p>Enter the verification code sent to your email</p>
            </div>

            <form class="verification-form" action="{{ route('user.password.verify.code') }}" method="POST">
                @csrf
                
                <input type="hidden" name="email" value="{{ $email }}">
                <p class="verification-text">Sent to: <strong>{{ showEmailAddress($email) }}</strong></p>

                <div class="code-input-container">
                    <input type="text" 
                           name="code" 
                           id="verificationCode" 
                           class="code-input" 
                           maxlength="6" 
                           required 
                           placeholder="_   _   _   _   _   _" 
                           inputmode="numeric"
                           pattern="\d*"
                           autocomplete="one-time-code">
                </div>

                <button type="submit" class="submit-btn">
                    <span class="submit-text">Verify Email</span>
                    <i class="fas fa-spinner fa-spin submit-loader"></i>
                </button>

                <div class="form-group text-center">
                    <p>
                        <center>
                            <span class="countdown-wrapper">
                                Try again in <span id="countdown" class="fw-bold">05:00</span>
                            </span>
                        <a href="{{ route('user.password.request') }}" class="try-again-link d-none">Try again</a></center>
                    </p>
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
            if (!localStorage.getItem('theme')) { // Only auto-update if no manual preference set
                if (e.matches) {
                    body.classList.add('dark-mode');
                } else {
                    body.classList.remove('dark-mode');
                }
            }
        });
        
        const codeInput = document.getElementById('verificationCode');
        const form = document.querySelector('.verification-form');
        const submitBtn = form.querySelector('.submit-btn');
        const countdownElement = document.getElementById('countdown');
        
        // Auto-focus on load
        codeInput.focus();
        
        // Input formatting and validation
        codeInput.addEventListener('input', function() {
            // Only allow numbers
            this.value = this.value.replace(/\D/g, '');
            
            // Visual feedback when complete
            if (this.value.length === 6) {
                this.classList.add('filled');
            } else {
                this.classList.remove('filled');
            }
        });
        
        // Handle paste
        codeInput.addEventListener('paste', function(e) {
            e.preventDefault();
            const pasteData = e.clipboardData.getData('text').trim();
            if (/^\d+$/.test(pasteData)) {
                this.value = pasteData.substring(0, 6);
                if (this.value.length === 6) {
                    this.classList.add('filled');
                }
            }
        });
        
        // Form submission handler
        form.addEventListener('submit', function() {
            // Show loading state
            submitBtn.classList.add('verifying');
            submitBtn.disabled = true;
        });
        
        // Enhanced Countdown Timer with MM:SS format
        @if(isset($codeExpiresAt))
            var expiresAt = new Date("{{ $codeExpiresAt->toIso8601String() }}").getTime();
            var timerSound = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3');
            var soundPlayed = false;
            
            function updateCountdown() {
                var now = new Date().getTime();
                var distance = expiresAt - now;
                
                // Calculate minutes and seconds
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                // Display with leading zeros
                var displayText = 
                    (minutes < 10 ? "0" + minutes : minutes) + ":" + 
                    (seconds < 10 ? "0" + seconds : seconds);
                
                countdownElement.innerHTML = displayText;
                
                // Visual feedback based on time remaining
                if (minutes < 1) { // Last minute
                    countdownElement.style.color = "#ff6b6b";
                    
                    // Play warning sound at 30 seconds (only once)
                    if (seconds <= 30 && !soundPlayed) {
                        timerSound.play();
                        soundPlayed = true;
                    }
                    
                    // Blink when under 10 seconds
                    if (seconds <= 10) {
                        countdownElement.classList.add('blink');
                    }
                }
                
                if (distance <= 0) {
                    clearInterval(x);
                    countdownElement.innerHTML = "00:00";
                    countdownElement.style.color = "#ff3b3b";
                    countdownElement.classList.remove('blink');
                    document.querySelector('.countdown-wrapper').classList.add('d-none');
                    document.querySelector('.try-again-link').classList.remove('d-none');
                    document.querySelector('.try-again-link').classList.add('active');
                }
            }
            
            // Initial call to avoid delay
            updateCountdown();
            
            // Update every second
            var x = setInterval(updateCountdown, 1000);
        @endif
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

