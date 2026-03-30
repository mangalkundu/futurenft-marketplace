<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Investment Plans</title>
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
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }
        
        body {
            background-color: var(--bg);
            color: var(--text);
            max-width: 100vw;
            overflow-x: hidden;
            transition: background-color 0.3s ease, color 0.3s ease;
            min-height: 100vh;
        }
        
        .body2 {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        
        /* Plan Section */
        .plan-section {
            width: 100%;
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .plan-header {
            text-align: left;
            margin-bottom: 20px;
            width: 100%;
        }

        .plan-header h1 {
            font-size: 20px;
            margin-bottom: 0px;
            background-clip: text;
            color: var(--text);
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }

        .plan-header p {
            color: var(--text-light);
            font-size: 15px;
            margin-top:5px; margin-bottom: 3px;
        }
        
        
.plan-filter {
    margin-left: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    border-radius: 25px;
}

.plan-filter select {
    background-color: var(--secondary);
    color: var(--text);
    border: 1px solid var(--border);
    font-size: 13px;
    transition: all 0.3s ease;
    
}

.plan-filter select:focus { 
    outline: none;
    border: 1px solid transparent;
    background-origin: border-box;
    background-clip: padding-box, border-box;
    background-image:  linear-gradient(var(--card-bg), var(--card-bg)),
              linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    background-size: 100% 100%, 400% 400%;
    animation: rgbFlow 6s ease infinite;
}




        .plan-cards-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
            padding: 0px; padding-bottom: 5px;
        }

        .plan-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            width: 100%;
            max-width: 600px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .plan-cards.animated {
            opacity: 1;
            transform: translateY(0px);
        }

        .card-effect {
            width: 100%;
            display: flex;
            justify-content: center;
            perspective: 1000px;
            opacity: 0;
            transform: translateY(20px) scale(1);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .card-effect.animated {
            opacity: 1;
            transform: translateY(0px) scale(1);
        }

        /* Card Styles */
        .card-inner {
            --card-bg: #ffffff;
            --card-accent: #ff8a65;
            --card-text: #263238;
            --card-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            height: 250px;
            background: var(--card-bg);
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1), 
                        box-shadow 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: var(--card-shadow);
            border: 1px solid ;
            border-color:var(--border);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            transform-style: preserve-3d;
        }

        .card-inner:hover {
            
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .card__liquid {
            position: absolute;
            top: -80px;
            left: 0;
            width: 300px;
            height: 200px;
            background: #4a90e2;
            border-radius: 50%;
            transform: translateZ(-80px);
            filter: blur(80px);
            transition: transform 0.7s cubic-bezier(0.36, 0, 0.66, -0.56), 
                        opacity 0.3s ease-in-out;
            opacity: 0;
        }

        .card-inner:hover .card__liquid {
            transform: translateZ(-50px) translateY(30px) translateX(-20px) rotate(-20deg) scale(1.2);
            opacity: 0.7;
        }

        .card__shine {
            position: absolute;
            inset: 0;
            background: linear-gradient(
                135deg,
                rgba(255, 255, 255, 0.1) 30%,
                rgba(255, 255, 255, 0.6) 50%,
                rgba(255, 255, 255, 0.1) 70%
            );
            opacity: 0;
            transition: opacity 0.4s ease-in-out;
        }

        .card-inner:hover .card__shine {
            opacity: 1;
            animation: shine-effect 2s infinite linear;
        }

        .card__glow {
            position: absolute;
            inset: -15px;
        }

        .card-inner:hover .card__glow {
            opacity: 1;
        }

        .card__content {
            padding: 12px;
            height: 100%;
            display: flex;
            flex-direction: column;
            gap: 0.8em;
            position: relative;
            z-index: 2;
        }
        
.card__badge {
    position: absolute;
    top: 10px;
    right: 5px;
    background: #f9a825;
    color: white;
    padding: 4px 8px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 700;
    transform: scale(0.7);
    opacity: 0;
    transition: all 0.4s ease 0.2s;
    z-index: 3;
}

.card-inner:hover .card__badge {
    transform: scale(1);
    opacity: 1;
    z-index: 3;
}

        .card__image {
            width: 100%;
            height: 100%;
            background: var(--bg-color);
            border-radius: 15px;
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            overflow: hidden;
            
            margin-bottom: 2px;
        }

        .card-inner:hover .card__image {
            transform: translateY(-2px) scale(1.05);
        }

        .card__image::after {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(
                circle at 20% 80%,
                rgba(255, 255, 255, 0.15) 0%,
                transparent 40%
            ),
            repeating-linear-gradient(
                -45deg,
                rgba(255, 255, 255, 0.05) 0px,
                rgba(255, 255, 255, 0.05) 3px,
                transparent 3px,
                transparent 6px
            );
            opacity: 0.6;
        }

        .card__text {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .card__title {
            color: var(--card-text);
            font-size: 16px;
            margin: 0;
            font-weight: 700;
            transition: color 0.4s ease-in-out, transform 0.4s ease-in-out;
        }

        .card-inner:hover .card__title {
            color: var(--card-accent);
            transform: translateX(2px);
        }

        .card__description {
            
            color: var(--text-light);
            font-size: 13px;
            margin: 0;
            opacity: ;
            transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
        }

        .card-inner:hover .card__description {
            opacity: 1;
            transform: translateX(2px);
            color: black;
        }

        .card__footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2px;
        }

        .card__price {
            color: var(--card-text);
            font-weight: ;
            font-size: 16PX;
            transition: color 0.4s ease-in-out, transform 0.4s ease-in-out;
        }

        .card-inner:hover .card__price {
            color: var(--card-accent);
            transform: translateX(2px);
        }

        .card__button {
            padding: 5px 10px;
            font-size: 14px;
            font-weight: 700;
            border: none;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
            transform: scale(0.85);
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            position: relative;
            overflow: hidden;
            z-index: 1; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card__button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                90deg,
                rgba(255, 255, 255, 0.1),
                rgba(255, 255, 255, 0.3),
                rgba(255, 255, 255, 0.1)
            );
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card__button:hover::before {
            opacity: 1;
            
        }

        .card-inner:hover .card__button:not(.sold-out) {
            transform: scale(0.95);
            box-shadow: 0 0 0 5px rgba(255, 255, 255, 0.2);
        }

        .card-inner:hover .card__button svg {
            animation: pulse-button 1.5s infinite; 
        }

        /* Add this to your existing CSS */
        .card__button.sold-out {
            background: #cccccc !important;
            color: white;
            cursor: not-allowed;
            animation: none !important;
            position: relative;
            overflow: hidden;
        }

        .card__button.sold-out::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 50%;
            height: 200%;
            background: rgba(255,255,255,0.13);
            background: linear-gradient(
                to right,
                rgba(255,255,255,0.13) 0%,
                rgba(255,255,255,0.13) 77%,
                rgba(255,255,255,0.5) 92%,
                rgba(255,255,255,0.0) 100%
            );
            transform: rotate(30deg);
            animation: shine 5s infinite;
        }

        @keyframes shine {
            0% { left: -60%; }
            20% { left: 100%; }
            100% { left: 100%; }
        }
        
        @keyframes shine-effect {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(200%); }
        }


        /* Smooth transition for all card elements */
        .card__title,
        .card__description,
        .card__price,
        .card__button {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
        }

        /* Responsive adjustments */
        @media (max-width: 375px) {
            .plan-cards {
                grid-template-columns: 1fr;
            }
        }

        .usdt-logo {
            width: 16px;
            height: 16px;
            margin-left: 5px;
            vertical-align: middle;
            margin-right: 1px;
            display: inline-block;
            position: relative;
            top: -1px;
        }        
        

        
        /* Investment Form Card */
        .invest-form-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            
            background-color: rgba(0,0,0,0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .invest-form-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .invest-form-card {
            
            background-color:var(--card-bg);
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            padding: 20px !important;
            box-shadow:  0 10px 25px rgba(0,0,0,0.2);
            transform: translateY(0px);
            transition: transform 0.3s ease;
            position: relative; 
        }
        
        .invest-form-overlay.active .invest-form-card {
            transform: translateY(0);
        }
        
        .close-invest-form {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            font-size: 20px;
            color: var(--text);
            cursor: pointer;
        }
        
        .invest-form-title {
            font-size: 18px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .invest-form-t2 {
            margin-bottom: 25px;
            color: var(--text-light);
            font-size: 14px !important;
           
        }
        
        
/* Investment Form Image Styles */
.invest-image-container {
    width: 170px;
    height: 130px;
    border-radius: 15px;
    overflow: hidden;
    margin: 0 auto 15px auto;
    position: relative;
}

.invest-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.invest-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    font-size: 2rem;
}

/* Gradient Overlay Effect */
.invest-image-container::after {
    content: "";
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(
            circle at 20% 80%,
            rgba(255, 255, 255, 0.15) 0%,
            transparent 40%
        ),
        repeating-linear-gradient(
            -45deg,
            rgba(255, 255, 255, 0.05) 0px,
            rgba(255, 255, 255, 0.05) 3px,
            transparent 3px,
            transparent 6px
        );
    opacity: 0.6;
    pointer-events: none;
    border-radius: 15px;
}


/* Features List Styles */
        .card__features {
            margin: 10px 0;
            padding: 0;
            list-style: none;
        }

        .card__feature {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 13px;
            color: var(--card-text);
        }

        .card__feature i {
            margin-right: 8px;
            color: #ff8a65;
            font-size: 12px;
        }

        
        /* RGB Gradient Text */
.rgb-text {
    background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
    
    margin-top: 0px;
    padding: 2px 0;
}

/* Ensure the animation is defined */
@keyframes rgbFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}


.form-divider {
    display: flex;
    align-items: center;
    margin: 20px 0;
}

.divider-line {
    flex-grow: 1;
    height: 1px;
    background-color: var(--text-light);
}

.divider-icon {
    margin: 0 10px;
    color: var(--text-light);
    font-size: 12px;
}
        
        
        .invest-form-group {
            margin-bottom: 20px;
            
           
        }
        
    
        
        .invest-form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            
        }
        
        .invest-form-input {
            width: 100%;
            padding: 13px 15px;
            border-radius: 25px;
            border: 1px solid var(--border);
            background-color: var(--secondary);
            color: var(--text);
            font-size: 14px;
        }
        
        .invest-form-input:focus {
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
        
        .invest-form-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            margin-bottom: 5px;
            
        }
        
        .invest-form-btn {
            font-size:13px;
            padding: 13px 15px;
            border-radius: 25px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
           
        }
        
        .invest-form-btn-cancel {
            background-color: var(--secondary);
            color: var(--text);
            border: 1px solid var(--border);  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .invest-form-btn-submit {
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            color: white;
             box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .body2 {
                padding-bottom: 70px;
            }
            
            .invest-form-card {
                width: 90%;
                padding: 20px 15px;
            }
        }
        
    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false">
    
    <x-loading-screen />  
    <x-navbar />

    <div class="menu-overlay" id="menuOverlay"></div>
    <div class="body2">

    <!-- Plan Cards Section -->
    <div class="plan-section">
<div class="plan-header" style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        <p>Investment</p>
        <h1>Investment Plans</h1>
    </div>
    <div class="plan-filter">
        <select id="planSort" class="invest-form-input" style="width: auto; padding: 10px 15px; border-radius: 25px; cursor: pointer;">
            <option value="">Sort By</option>
            <option value="low-high">Price: Low to High</option>
            <option value="high-low">Price: High to Low</option>
            <option value="trending">Trending</option>
            <option value="featured">Featured</option>
        </select>
    </div>
</div>
        
@if($errors->any())
    <x-alert type="error" :message="$errors->first()" />
@endif

@if(session()->has('notify'))
    @foreach(session('notify') as $message)
        <x-alert :type="$message[0]" :message="$message[1]" />
    @endforeach
@endif
       
        
        <div class="plan-cards-container">
            <div class="plan-cards">
                @foreach ($plans as $plan)
                <div class="card-effect">
                    <div class="card-inner">
                        <div class="card__liquid"></div>
                        <div class="card__shine"></div>
                        <div class="card__glow"></div>
                        <div class="card__content">
                            <!-- TRENDING Badge -->
                        @if($plan->featured)
                        <div class="card__badge" style="background: linear-gradient(90deg, #ff4d4d, #f9cb28);">TRENDING</div>
                        @else
                            <div class="card__badge" style="background: linear-gradient(90deg,  #11998e, #38ef7d); ">FEATURED</div>
                        @endif
                    
                            <div class="card__image" style="--bg-color: #4a90e2">
                                @if($plan->image)
                                    <img src="{{ asset('core/public/assets/images/plan/'.$plan->image) }}" alt="@lang('Plan Image')" style="width:100%; height:100%; object-fit:cover;" oncontextmenu="return false;">
                                @else
                                    <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; color:white; font-size:2rem;">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                @endif
                            </div>
                            
                            <div class="card__text">
                                <p class="card__title">{{ __($plan->name) }}</p>
                            
                                <p class="card__description">
                                  {{ $plan->interest_type != 1 ? gs('cur_sym') : '' }}{{ showAmount($plan->interest, currencyFormat:false) }}{{ $plan->interest_type == 1 ? '%' : '' }} 
                                  
                                  @lang('FOR') @if ($plan->lifetime == 0)
                                {{ __($plan->repeat_time) }} {{ __($plan->timeSetting->name) }}S
                            @else
                                @lang('Lifetime')
                            @endif
                                </p>
                            </div>
                            
                            <div class="card__footer">
                                <div class="card__price"> <img src="/assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                                    @if ($plan->fixed_amount == 0)
                                        {{ number_format($plan->minimum, 2) }} -
                                        {{ number_format($plan->maximum, 2) }}
                                    @else
                                        {{ number_format($plan->fixed_amount, 2) }}
                                    @endif
                                </div>
                                
                                @if($plan->capital_back == 1)
                                <button class="card__button sold-out" disabled>Expired</button>
                                @else
                                <button class="card__button show-invest-form" data-plan="{{ json_encode($plan) }}" type="button">
                                     Invest
                                </button>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <x-mobile-menu /> 

    <!-- Investment Form Overlay -->

    
    <div class="invest-form-overlay" id="investFormOverlay">
        <div class="invest-form-card">
            <button class="close-invest-form" id="closeInvestForm">
            <!--   <i class="fas fa-times"></i> -->
            </button>
            
        <div class="invest-image-container">
            <img src="{{ asset('core/public/assets/images/plan/'.$plan->image) }}" alt="Plan Image" class="invest-image" id="investPlanImage" oncontextmenu="return false;">
            
            <div class="invest-image-placeholder" id="investImagePlaceholder">
                <i class="fas fa-coins"></i>
            </div>
        </div>
            
            <h3 class="invest-form-title">
    @if (auth()->check())
        @lang('') <span id="investPlanName"></span>
        <p class="invest-form-subtitle" style="margin-top: 5px; font-size: 13px; color: var(--text-light); font-weight: normal;">
            @lang('EARN') <span id="investPlanReturn"></span> @lang('RETURN')
        </p>
    @else
        @lang('At first sign in your account')
    @endif
            </h3>
            <form action="{{ route('user.invest.submit') }}" method="post">
                @csrf
            
                <input type="hidden" name="plan_id" id="investPlanId">
                @if (auth()->check())
                
<div class="invest-form-t2">
    <ul class="card__features">
        <li class="card__feature">
            <i class="fas fa-calendar-alt"></i>
            <span id="planDuration">
                @if ($plan->lifetime == 0)
                    {{ __($plan->repeat_time) }} {{ __($plan->timeSetting->name) }}S
                @else
                    @lang('Lifetime Earnings')
                @endif
            </span>
        </li>
        <li class="card__feature">
            <i class="fas fa-clock"></i>
            <span>Every {{ $plan->timeSetting->time }} Hours</span>
        </li>
        <li class="card__feature">
            <i class="fas fa-wallet"></i>
            <span id="investmentType">
                @if ($plan->fixed_amount == 0)
                    Flexible Investment
                @else
                    Fixed Amount
                @endif
            </span>
        </li>
    </ul>
    
  <!--  <p class="text-center rgb-text" id="maximumEarn" style="margin-top: 15px;"></p> -->
</div>
    
                    
                    <div class="form-divider">
                        <div class="divider-line"></div>
                        <i class="fas fa-arrow-down divider-icon"></i>
                        <div class="divider-line"></div>
                    </div>

                    <div class="invest-form-group">
                        <label class="invest-form-label">@lang('Pay Via')</label>
                        <select class="invest-form-input" name="wallet_type" required>
                            <option value="">@lang('Select Payment Method')</option>
                            @if (auth()->user()->deposit_wallet > 0)
                                <option value="deposit_wallet">Deposit Wallet - {{ number_format(auth()->user()->deposit_wallet, 2) }} {{ gs('cur_text') }}</option>
                            @endif
                            @if (auth()->user()->interest_wallet > 0)
                                <option value="interest_wallet">Interest Wallet - {{ number_format(auth()->user()->interest_wallet, 2) }} {{ gs('cur_text') }}</option>
                            @endif
                        </select>
                    </div>

                    <div class="invest-form-group">
                        <label class="invest-form-label">@lang('Invest Amount')</label>
                        <div style="display: flex;">
                            <input type="number" step="any" min="0" class="invest-form-input" name="amount" required style="flex: 1; border-radius: 25px 0 0 25px;">
                            <span class="invest-form-input" style="width: auto; border-radius: 0 25px 25px 0; border-left: none;">{{ gs('cur_text') }}</span>
                        </div>
                        
                    </div>
                    
<!--                    <div class="invest-form-group compoundInterest">
                        <label class="invest-form-label">@lang('Compound Interest') (@lang('optional'))</label>
                        <div style="display: flex;">
                            <input type="number" min="0" class="invest-form-input" name="compound_interest" style="flex: 1; border-radius: 8px 0 0 8px;">
                            <span class="invest-form-input" style="width: auto; border-radius: 0 8px 8px 0; border-left: none;">@lang('Times')</span>
                        </div>
                        <small><i class="fas fa-info-circle"></i> @lang('Your interest will add to the investment capital amount for a specific time that you\'re entering.')</small>
                    </div>

                    @if (gs('schedule_invest'))
                        <div class="invest-form-group investTime">
                            <label class="invest-form-label">@lang('Auto Schedule Invest')</label>
                            <select class="invest-form-input" name="invest_time" required>
                                <option value="invest_now">@lang('Invest Now')</option>
                                <option value="schedule">@lang('Schedule')</option>
                            </select>
                            <small><i class="fas fa-info-circle"></i> @lang('You can set your investment as a scheduler or invest instant.')</small>
                        </div>
                    @endif

                    @if (gs('schedule_invest'))
                        <div class="row schedule" style="display: none; margin-top: 15px;">
                            <div class="invest-form-group" style="width: 48%; float: left;">
                                <label class="invest-form-label required">@lang('Schedule For')</label>
                                <div style="display: flex;">
                                    <input type="number" min="0" class="invest-form-input" name="schedule_times" style="flex: 1; border-radius: 8px 0 0 8px;">
                                    <span class="invest-form-input" style="width: auto; border-radius: 0 8px 8px 0; border-left: none;">@lang('Times')</span>
                                </div>
                            </div>
                            <div class="invest-form-group" style="width: 48%; float: right;">
                                <label class="invest-form-label required">@lang('After')</label>
                                <div style="display: flex;">
                                    <input type="number" min="0" class="invest-form-input" name="hours" style="flex: 1; border-radius: 8px 0 0 8px;">
                                    <span class="invest-form-input" style="width: auto; border-radius: 0 8px 8px 0; border-left: none;">@lang('Hours')</span>
                                </div>
                            </div>
                        </div>
                    @endif
-->
                    <div class="invest-form-footer">
                    <button type="button" class="invest-form-btn invest-form-btn-cancel" id="cancelInvestForm">@lang('Cancel')</button>
                        <button type="submit" class="invest-form-btn invest-form-btn-submit">@lang('Confirm')</button>
                    </div>
                @else
                    <div class="invest-form-footer">
                        <a href="{{ route('user.login') }}" class="invest-form-btn invest-form-btn-submit" style="width: 100%; text-align: center; text-decoration: none;">
                            @lang('Sign In to Invest')
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>


    // Investment Form Functionality
    const investFormOverlay = document.getElementById('investFormOverlay');
    const closeInvestForm = document.getElementById('closeInvestForm');
    const cancelInvestForm = document.getElementById('cancelInvestForm');
    
    let currentPlan = null;
    const symbol = '{{ gs('cur_sym') }}';
    const currency = '{{ gs('cur_text') }}';    

    
    // Show investment form with proper plan image
    $(document).on('click', '.show-invest-form', function() {
        try {
            currentPlan = JSON.parse($(this).attr('data-plan'));
            
            // Set plan data in form
            $('#investPlanId').val(currentPlan.id);
            $('#investPlanName').text(currentPlan.name);
            
            // Set return text
            let returnText;
            if (currentPlan.interest_type == '1') {
                returnText = parseFloat(currentPlan.interest).toFixed(2) + '%';
            } else {
                returnText = symbol + parseFloat(currentPlan.interest).toFixed(2);
                }
            $('#investPlanReturn').text(returnText);
            
            // Handle the image
        const imageContainer = $('.invest-image-container');
        const imageElement = $('#investPlanImage');
        const placeholder = $('#investImagePlaceholder');
        
        if (currentPlan.image) {
            const imageUrl = "{{ asset('core/public/assets/images/plan/') }}/" + currentPlan.image;
            imageElement.attr('src', imageUrl).show();
            placeholder.hide();
        } else {
            imageElement.hide();
            placeholder.show();
        }
            
            // Update feature list
        $('#planDuration').html(
            currentPlan.lifetime == '0' ? 
            `${currentPlan.repeat_time} ${currentPlan.time_setting.name}S` : 
            'Lifetime Earnings'
        );
        
        $('#investmentType').html(
            currentPlan.fixed_amount == '0' ? 
            'Flexible Investment' : 
            'Fixed Amount'
        );
    
        let fixedAmount = parseFloat(currentPlan.fixed_amount).toFixed(2);
        let minimumAmount = parseFloat(currentPlan.minimum).toFixed(2);
        let maximumAmount = parseFloat(currentPlan.maximum).toFixed(2);
        let interestAmount = parseFloat(currentPlan.interest);
        let repeatTimes = parseInt(currentPlan.repeat_time);

        if (currentPlan.fixed_amount > 0) {
            $('#investAmountRange').html(`<strong>Invest:</strong> ${fixedAmount} ${currency}`);
            $('[name="amount"]').val(parseFloat(currentPlan.fixed_amount).toFixed(2));
            $('[name="amount"]').prop('readonly', true);
            
            // Calculate maximum earn for fixed amount plans
            let maxEarn;
            if (currentPlan.interest_type == '1') { // Percentage based
                maxEarn = (currentPlan.fixed_amount * interestAmount / 100) * repeatTimes;
            } else { // Fixed amount
                maxEarn = interestAmount * repeatTimes;
            }
            $('#maximumEarn').html(`<strong>Maximum Earn:</strong> ${maxEarn.toFixed(2)} ${currency}`);
        } else {
            $('#investAmountRange').html(`<strong>Invest:</strong> ${minimumAmount} - ${maximumAmount} ${currency}`);
            $('[name="amount"]').val('');
            $('[name="amount"]').prop('readonly', false);
            
            // Calculate maximum earn for variable amount plans
            let maxEarn;
            if (currentPlan.interest_type == '1') { // Percentage based
                maxEarn = (currentPlan.maximum * interestAmount / 100) * repeatTimes;
            } else { // Fixed amount
                maxEarn = interestAmount * repeatTimes;
            }
            $('#maximumEarn').html(`<strong>Maximum Earn:</strong> ${maxEarn.toFixed(2)} ${currency}`);
        }

        if (currentPlan.interest_type == '1') {
            $('#interestDetails').html(`<strong>Interest:</strong> ${interestAmount}% for ${repeatTimes} days`);
        } else {
            $('#interestDetails').html(`<strong>Interest:</strong> ${interestAmount} ${currency} for ${repeatTimes} days`);
        }

        if (currentPlan.lifetime == '0') {
            $('#interestValidity').text(`Every ${currentPlan.time_setting.time} hours for ${repeatTimes} times`);
        } else {
            $('#interestValidity').text(`Every ${currentPlan.time_setting.time} hours for lifetime`);
            // For lifetime plans, we'll show potential earnings for 10 cycles as an example
            let lifetimeEarn;
            if (currentPlan.interest_type == '1') {
                lifetimeEarn = (currentPlan.fixed_amount > 0 ? currentPlan.fixed_amount : currentPlan.maximum) * interestAmount / 100 * 10;
            } else {
                lifetimeEarn = interestAmount * 10;
            }
            $('#maximumEarn').html(`<strong>Potential Earn (10 cycles):</strong> ${lifetimeEarn.toFixed(2)} ${currency}`);
        }
        
            // Show the form
            $('#investFormOverlay').addClass('active');
        } catch (e) {
            console.error('Error showing invest form:', e);
        }
    });
    
    // Close investment form
    function closeInvestFormHandler() {
        $('#investFormOverlay').removeClass('active');
    }
    
    // Keep the existing outside-click handler
    $('#investFormOverlay').on('click', function(e) {
        if (e.target === this) {
            $(this).removeClass('active');
        }
    });
    
    closeInvestForm.addEventListener('click', closeInvestFormHandler);
    cancelInvestForm.addEventListener('click', closeInvestFormHandler);
    
    // Calculate interest when amount changes
    $('[name="amount"]').on('input', function() {
        calculateInterest();
    });
    
    // Wallet type change
    $('[name="wallet_type"]').on('change', function() {
        const amount = $('[name="amount"]').val();
        if (this.value && this.value != 'deposit_wallet' && this.value != 'interest_wallet' && amount) {
            const resource = $(this.options[this.selectedIndex]).data('gateway');
            if (resource) {
                const gatewayData = resource;
                const fixed_charge = parseFloat(gatewayData.fixed_charge);
                const percent_charge = parseFloat(gatewayData.percent_charge);
                const charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                
                $('.charge').text(charge);
                $('.gateway-rate').text(parseFloat(gatewayData.rate));
                $('.method_currency').text(gatewayData.currency);
                $('.total').text(parseFloat(charge) + parseFloat(amount));
                
                $('.gateway-info').removeClass('d-none');
                
                if (gatewayData.currency == '{{ gs('cur_text') }}') {
                    $('.rate-info').addClass('d-none');
                } else {
                    $('.rate-info').removeClass('d-none');
                }
            }
        } else {
            $('.gateway-info').addClass('d-none');
        }
    });
    
    // Calculate interest function
    function calculateInterest() {
        if (!currentPlan) return;
        
        const interest = parseFloat(currentPlan.interest);
        const interestType = currentPlan.interest_type;
        const repeatTime = currentPlan.repeat_time;
        const capitalBack = currentPlan.capital_back;
        const investAmount = $('[name="amount"]').val() * 1;
        const compoundInterest = $('[name="compound_interest"]').val() ?? 0;
        
        if (repeatTime == 0 || investAmount == 0) {
            $('#calculatedInterest').hide();
            return false;
        } else {
            $('#calculatedInterest').show();
        }

        let totalInterest = interest * repeatTime;

        if (interestType == '1') {
            if (compoundInterest > 0) {
                const remainingRepeatTime = repeatTime - compoundInterest;
                const interestRatio = 1 + interest / 100;
                const compoundCapital = investAmount * Math.pow(interestRatio, compoundInterest);
                totalInterest = (compoundCapital * interest / 100) * remainingRepeatTime;
            } else {
                totalInterest = interest * investAmount / 100 * repeatTime;
            }
        }

        totalInterest = capitalBack ? totalInterest : totalInterest - investAmount;
        $('#calculatedInterest').text(`Total Profit: ${symbol}${totalInterest.toFixed(2)}`);
    }

    // Animation on page load
    setTimeout(function() {
        $('.plan-cards').addClass('animated');
        
        $('.card-effect').each(function(index) {
            $(this).delay(index * 200).queue(function() {
                $(this).addClass('animated').dequeue();
            });
        });
    }, 300);

    // Form submission handler
    $('form').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        const submitBtn = form.find('button[type="submit"]');
        submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Processing...');
        setTimeout(() => {
            form.unbind('submit').submit();
        }, 3000);
    });



// Plan sorting - Updated Animation
$('#planSort').on('change', function() {
    const sortValue = $(this).val();
    const $container = $('.plan-cards');
    const $allCards = $('.card-effect');
    
    // Add sorting class to container
    $container.addClass('sorting-active');
    
    // First animate all cards out with a fade and slight scale down
    $allCards.css({
        'opacity': '0',
        'transform': 'translateY(20px) scale(1)',
        'transition': 'all 0.4s '
    });
    
    setTimeout(() => {
        // Show all cards first
        $allCards.show();
        
        if (sortValue === 'trending') {
            // Hide non-trending cards
            $allCards.each(function() {
                const $badge = $(this).find('.card__badge');
                if (!$badge.length || !$badge.text().includes('TRENDING')) {
                    $(this).hide();
                }
            });
        } 
        else if (sortValue === 'featured') {
            // Hide non-featured cards
            $allCards.each(function() {
                const $badge = $(this).find('.card__badge');
                if (!$badge.length || !$badge.text().includes('FEATURED')) {
                    $(this).hide();
                }
            });
        }
        else if (sortValue === 'low-high' || sortValue === 'high-low') {
            // Sort all cards by price (even hidden ones for consistency)
            $allCards.sort(function(a, b) {
                const aPriceText = $(a).find('.card__price').text().replace(/[^0-9.-]/g, '');
                const bPriceText = $(b).find('.card__price').text().replace(/[^0-9.-]/g, '');
                const aPrice = parseFloat(aPriceText) || 0;
                const bPrice = parseFloat(bPriceText) || 0;
                
                return sortValue === 'low-high' ? aPrice - bPrice : bPrice - aPrice;
            }).appendTo($container);
        }
        
        // Animate in remaining visible cards with a cascading effect
        $allCards.filter(':visible').each(function(index) {
            $(this).css({
                'opacity': '0',
                'transform': 'translateY(0) scale(1)',
                'transition': 'all 0.6s ' + (index * 0.2) + 's'
            });
            
            // Force reflow to ensure animation starts from initial state
            void this.offsetHeight;
            
            $(this).css({
                'opacity': '1',
                'transform': 'translateY(0px) scale(1)'
            });
        });
        
        // Remove sorting class after animation completes
        setTimeout(() => {
            $container.removeClass('sorting-active');
        }, 800);
        
    }, 400); // Wait for fade-out animation to complete
});

    </script>
</body>
</html>
