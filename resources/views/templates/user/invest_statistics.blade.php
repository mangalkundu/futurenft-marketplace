<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Investment Statistics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @include('components.font')
    
    <style>
        /* ===== Base Styles ===== */
        
        
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
            --card-gradient-1: #0c0a0a;
            --card-gradient-2: #2f312f;
            --card-gradient-3: #3f4549;
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
            --card-gradient-1: #121212;
            --card-gradient-2: #1a1a1a;
            --card-gradient-3: #2d2d2d;
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
 
        /* ===== Layout Styles ===== */
        .body-container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto; 
            
            
        }
        
        .dashboard-inner {
            padding: 15px;
            padding-bottom: 85px; /* Space for mobile menu */
        }
        
        .flex-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .d-flex {
            display: flex;
        }
        
        .flex-wrap {
            flex-wrap: wrap;
        }
        
        .justify-content-between {
            justify-content: space-between;
        }
        
        .align-items-center {
            align-items: center;
        }
        
        .flex-shrink-0 {
            flex-shrink: 0;
        }
        
        /* ===== Spacing Utilities ===== */
        .mt-2 { margin-top: 10px; }
        .mt-3 { margin-top: 15px; }
        .mt-4 { margin-top: 20px; }
        .mb-2 { margin-bottom: 10px; }
        .mb-3 { margin-bottom: 15px; }
        .mb-4 { margin-bottom: 20px; }
        .gap-2 { gap: 10px; }


    /* ===== Investment Card Styles ===== */
    .invest-card {
        background: var(--card-bg);
        border-radius: 20px;
        border: 1px solid var(--border);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        margin-bottom: 0px;
        
    }
    

    
    .invest-card__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background: linear-gradient(135deg, var(--secondary), transparent);
        border-bottom: 1px solid var(--border);
    }
    
    .invest-card__title {
        font-size: 18px;
        font-weight: 600;
        color: var(--text);
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
    }
    
    .invest-card__title i {
        color: var(--text);
        
    }
    

    .invest-card__badge {
        background: var(--primary-light);
        color: var(--primary) !important;
        padding: 5px 10px;
        border-radius: 25px;
        font-size: 13px;
        font-weight: ;
        
    }    
    
    .invest-card__body {
        padding: 20px;
    }
    
    .invest-metrics {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .metric-group {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }
    
    .metric-item {
        background: var(--secondary);
        border-radius: 15px;
        padding: 15px;
        border: 1px solid var(--border);
    }
    
    .metric-label {
        font-size: 13px;
        color: var(--text-light);
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .metric-label i {
        font-size: 14px;
    }
    
    .metric-value {
        font-size: 16px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .amount {
        color: var(--text);
    }
    
    .rate {
        color: var(--success);
    }
    
    .debug-tag {
        font-size: 10px;
        background: orange;
        color: white;
        padding: 2px 6px;
        border-radius: 10px;
        margin-left: 8px;
    }
    
    .invest-cta {
        margin-top: 20px;
    }
    
    .invest-button {
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(
        90deg,
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
    );
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
     box-shadow:0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s;
        color: white;
        padding: 13px 15px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 700;
        font-size: 15px;
        
    }
    

/* Boost Investments Button Loading Spinner */
.invest-button {
    position: relative;
    min-width: 180px; /* Ensure consistent width during transition */
}

.invest-button .button-content {
    display: flex;
    align-items: center;
    gap: 8px;
    transition: opacity 0.2s ease;
}

.invest-button .loading-spinner {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.2s ease;
    color: white;
}

.invest-button.loading .button-content {
    opacity: 0;
}

.invest-button.loading .loading-spinner {
    opacity: 1;
    display: flex !important;
}    

    .invest-button i:first-child {
        margin-right: 0px;
    }
    
    .invest-button i:last-child {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }
    
    .invest-button:hover i:last-child {
        transform: translateX(2px);
    }
    
    .invest-card__footer {
        padding: 0 20px 20px;
    }
    
    .performance-indicator {
        height: 6px;
        background: var(--border);
        border-radius: 5px;
        overflow: hidden;
        margin-bottom: 8px;
    }
    
    .performance-bar {
        height: 100%;
        background: linear-gradient(
        90deg,
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
    );
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
        border-radius: 3px;
        transition: width 1s ease;
    }
    
    .performance-label {
        font-size: 13px;
        color: var(--text-light);
        text-align: right; 
        margin-bottom: 5px;
    }
    
    .usdt-logo {
        width: 16px;
        height: 16px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 200px) {
        .metric-group {
            grid-template-columns: 1fr;
        }
        
        .invest-card__header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        
        .invest-card__badge {
            align-self: flex-end;
        }
    }  
        
        /* ===== Typography Styles ===== */
        .title {
            font-size: 20px;
            font-weight: 600;
            color: var(--text);
        }
        
        .text--base {
            color: var(--text);
            font-weight: 400;
        }
        
        .count {
            color: transparent;
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
        
        .link-color {
            z-index: 1; /* Ensures link is above other elements */
            color: var(--text);
            font-size: 14px;
            
            text-decoration: none;
            color: transparent;
            background: linear-gradient(
        90deg,
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
    );
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            display: inline-flex; /* Add this */
            align-items: center; /* Add this */
            gap: 8px; /* Add this - adjust the value as needed */
        }
        
        
        /* ===== USDT Logo Styles ===== */
        .usdt-logo {
            width: 16px;
            height: 16px;
            
            vertical-align: middle;
            margin-right: 1px;
            display: inline-block;
            position: relative;
            top: 0px;
        }
        
        /* ===== Animations ===== */
        @keyframes rgbFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* ===== Responsive Adjustments ===== */
        @media (max-width: 200px) {
            .logo {
                font-size: 22px;
            }
            
            .logo b {
                font-size: 22px;
            }
            
            .card, .card3 {
                padding: 15px;
            }
            
            .stat-value {
                font-size: 16px;
            }
            
            .stat-label {
                font-size: 10px;
            }
        }
 
    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false">

    <x-loading-screen />  
    <x-navbar />

    
    <div class="menu-overlay" id="menuOverlay"></div>
    <div class="body-container">
    <div class="dashboard-inner">
            <div class="flex-container">

                
<!-- New Card3 Design -->
<div class="invest-card">
    <div class="invest-card__header">
        <h3 class="invest-card__title">
            <i class="fas fa-chart-pie"></i>
            Investment Portfolio
        </h3>
        <div class="invest-card__badge">
            <span class="active-plans">{{ $activePlan }} Active</span>
        </div> 
    </div>
    
    <div class="invest-card__body">
        <div class="invest-metrics">
            <div class="metric-group">
                <div class="metric-item">
                    <div class="metric-label">
                        <i class="fas fa-arrow-up"></i>
                        Total Invested
                    </div>
                    <div class="metric-value">
                        <img src="/assets/logo/tether-1.svg" alt="USDT" class="usdt-logo">
                        <span class="amount">{{ showAmount(auth()->user()->invests->sum('amount'), currencyFormat:false) }}</span>
                    </div>
                </div>
                
                <div class="metric-item">
                    <div class="metric-label">
                        <i class="fas fa-coins"></i>
                        Total Profit
                    </div>
                    <div class="metric-value">
                        <img src="/assets/logo/tether-1.svg" alt="USDT" class="usdt-logo">
                        <span class="amount">{{ showAmount(auth()->user()->transactions()->where('remark','interest')->sum('amount'), currencyFormat:false) }}</span>
                    </div>
                </div>
            </div>
            
            <div class="metric-group">
                <div class="metric-item">
                    <div class="metric-label">
                        <i class="fas fa-calendar-day"></i>
                        Today's Profit
                    </div>
                    <div class="metric-value">
                        <img src="/assets/logo/tether-1.svg" alt="USDT" class="usdt-logo">
                        <span class="amount">{{ showAmount($todayProfit ?? 0, currencyFormat:false) }}</span>
                        @if(env('APP_DEBUG') && ($todayProfit ?? 0) == 0)
                        <span class="debug-tag">Debug</span>
                        @endif
                    </div>
                </div>
                
                <div class="metric-item">
                    <div class="metric-label">
                        <i class="fas fa-percentage"></i>
                        Daily Rate
                    </div>
                    <div class="metric-value">
                        <span class="rate">{{ number_format(($todayProfit / max(1, auth()->user()->invests->sum('amount'))) * 100, 2) }}%</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="invest-cta">
            <a href="{{ route('plan') }}" class="invest-button" id="boostInvestButton">
    <span class="button-content"> 
        <span>Boost Investments</span>
       
    </span>
    <span class="loading-spinner" style="display: none;">
        <i class="fas fa-spinner fa-spin"></i>
    </span>
            </a>
        </div>
    </div>
    
    <div class="invest-card__footer">
        <div class="performance-indicator">
            <div class="performance-bar" style="width: {{ min(100, ($todayProfit / max(1, auth()->user()->transactions()->where('remark','interest')->sum('amount')) * 100)) }}%"></div>
        </div>
        <div class="performance-label">Daily Performance</div>
    </div>
</div>
                


            <div class="mt-3">
                <div class="section-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                    <h5 class="title">
                        @lang('Active Investments') 
                        
                    </h5>
                    <a href="/user/invest/log" class="link-color">
                        <i class="fas fa-server" aria-hidden="true"></i>View All
                    </a>
                </div>
                @include($activeTemplate.'partials.invest_history',['invests'=>$invests])
                
            </div>
        </div>
    </div>
</div>

    <x-mobile-menu /> 
    
    <script src="{{ asset('assets/global/js/chart.js.2.8.0.js') }}"></script>

    <script>

// button loading
document.addEventListener('DOMContentLoaded', function() {
    const boostInvestButton = document.getElementById('boostInvestButton');
    
    function resetBoostButton() {
        if (boostInvestButton) {
            boostInvestButton.classList.remove('loading');
            boostInvestButton.style.pointerEvents = 'auto';
        }
    }
    
    // Reset on initial load
    resetBoostButton();
    
    // Reset when navigating back
    window.addEventListener('pageshow', resetBoostButton);
    
    // Add click handler
    if (boostInvestButton) {
        boostInvestButton.addEventListener('click', function() {
            this.classList.add('loading');
            this.style.pointerEvents = 'none';
        });
    }
});


    </script>
</body>
</html>