    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Future NFT - Dashboard</title>
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
        
            

/* From Uiverse.io by vinodjangid07 */ 
    .balance-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        padding: 15px;
        justify-content: space-between;
    }

.card {
  width: 100%;
  padding: 20px ;
  border-radius:20px;

  
background: var(--card-bg) ; 
/* background: -webkit-linear-gradient(135deg, #000000 10%, #434343 100%);  
background: linear-gradient(135deg, #a7a6ba 10%, #909eae 100%); */
 
 
/*  background: 
        linear-gradient(135deg, rgba(10,10,10,0.5) 0%, rgba(26,26,26,0.9) 100%),
        url('/assets/logo/bg3.jpg') center/cover; */

  box-shadow:
    0px 2px 10px rgba(0, 0, 0, 0.1);
  position: relative;
  overflow: hidden;
  color:  var(--text);
  margin-top: 0px;
  border: 1px solid var(--border);
 
}

.crypto-icons {
    position: absolute;
    top: 15px;
    right: 15px;
    display: flex;
    gap: 10px;
    font-size: 18px;
    opacity: 0.3;
}

.crypto-icons i {
    animation: float 6s infinite ease-in-out;
}

.crypto-icons i:nth-child(1) { animation-delay: 0s; color: #f7931a; }
.crypto-icons i:nth-child(2) { animation-delay: 1s; color: #627eea; }
.crypto-icons i:nth-child(3) { animation-delay: 2s; color: #f0b90b; }

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.crypto-orb {
    position: absolute;
    top: -50px;
    right: -50px;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background: radial-gradient(circle at center, 
        rgba(0, 150, 255, 0.15) 0%, 
        rgba(0, 150, 255, 0) 70%);
    z-index: -1;
}

.card-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px; 
    gap: 5px;
}

.card-title {
    font-size: 20px;
    font-weight: 600;
    color: var(--text);
    letter-spacing: 0.5px;
}



.balance-display {
    margin-bottom: 15px;
}

.total-balance-label {
    display: block;
    font-size: 14px;
    color: var(--text);
    margin-bottom: 5px;
    margin-top: -5px;
}

.total-balance {
    font-size: 28px;
    font-weight: 700;
    color: var(--text);
}

.currency {
    font-size: 16px;
    color:  var(--text);
}


.wallet-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    margin-bottom: 15px;
}

.wallet-cell {
    background: var(--secondary);
    border-radius: 15px;
    padding: 13px;
    border: 1px solid var(--border);
}

.wallet-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: ;
    color: var(--text-light);
    margin-bottom: 8px;
}

.wallet-label i {
    font-size: 13px;
}

.wallet-amount {
    font-size: 16px;
    font-weight: 500;
    color: var(--text);
    font-weight: bold;
    display: flex;
    align-items: center;
}

.usdt-logo {
    width: 16px;
    height: 16px;
    margin-right: 6px;
}


.buttons {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
  
}

.button {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px;
  border-radius: 50px;
  font-size: 15px;
  font-weight: 700;
  text-decoration: none;
  transition:
  transform 0.3s,
  box-shadow 0.3s;
}


.button-transfer {
    gap: 8px;
    padding: 13px 15px;
    border-radius: 25px;
    font-size: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    z-index: 1;
    background-color: transparent;
    color:  var(--text);
    border: none;
    transition: all 0.3s ease;
    text-decoration: none;
    font-weight:700;
    margin-right: 16px;
    flex: 1;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.button-transfer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 50px;
    padding: 2px;
    background: linear-gradient(90deg, #ff4d4d, #ff4dff, #f9cb28, #4dff4d, #4da6ff);
    background-size: 400% 400%;
    -webkit-mask: 
        linear-gradient(#fff 0 0) content-box, 
        linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    animation: rgbFlow 4s linear infinite;
    z-index: -1;
}




.button-save {
    gap: 8px;
    flex: 1;
    padding: 13px 15px;
    color: white;
    border: none;
    border-radius: 25px;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    text-decoration: none;
    background: linear-gradient(
        90deg,
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
    );
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s;
}



/* Transfer and Add Funds Button Loading Spinners */
.button-transfer,
.button-save {
    position: relative;
    min-width: 110px; /* Maintain consistent width */
}

.button-transfer .button-content,
.button-save .button-content {
    display: flex;
    align-items: center;
    gap: 8px;
    transition: opacity 0.2s ease;
}

.button-transfer .loading-spinner,
.button-save .loading-spinner {
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

.button-transfer.loading .button-content,
.button-save.loading .button-content {
    opacity: 0;
}

.button-transfer.loading .loading-spinner,
.button-save.loading .loading-spinner {
    opacity: 1;
    display: flex !important;
}

/* Specific styles for each button */
.button-transfer.loading .loading-spinner {
    color: var(--text); /* Match the gradient border color */
}

.button-save.loading .loading-spinner {
    color: white; /* Match the button text color */
}


/* Account Info Section Updates */
.account-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--secondary);
    padding: 10px 15px;
    border-radius: 15px;
    margin-bottom: 20px;
    border: 1px solid var(--border);
}

.account-actions {
    display: flex;
    gap: 10px;
}

.copy-toggle, .eye-toggle {
    background: none;
    border: none;
    color: var(--text-light);
    cursor: pointer;
    padding: 0;
    font-size: 14px;
    transition: all 0.3s ease;
    width: 25px;
    height: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%; margin-right: -5px;
}

.copy-toggle:hover, .eye-toggle:hover {
    background-color: rgba(0, 0, 0, 0.05);
    color: var(--text);
}

.copy-toggle:active {
    transform: scale(1.2);
}



.user-id {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;  color: var(--text-light);
}

.username-label {
    font-size: 13px;
   font-weight: ;
    margin-right: 5px;
    color: var(--text-light);
    
}



.account-text {
    margin-right: 8px;
    font-size: 15px;  
    color: var(--text);
    font-weight: 700;
}



/* CSS for the new action buttons section */
.action-buttons {
    padding: 15px;
    margin-top: -5px;
}

.action-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    
}

.action-card {
    background-color: var(--card-bg);
    border-radius: 15px;
    padding: 12px 8px;
    text-align: center;
    text-decoration: none;
    border: 1px solid var(--border);
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: relative;
}

.action-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border: 1px solid transparent;
    background-origin: border-box;
    background-clip: padding-box, border-box;
    background-image: linear-gradient(var(--card-bg), var(--card-bg)), 
                      linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    background-size: 100% 100%, 400% 400%;
    animation: rgbFlow 6s ease infinite;
}


.action-icon {
    width: 30px;
    height: 30px;
    margin: 0 auto 8px;
    background-color: var(--border);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text);
    font-size: 14px;
    transition: all 0.3s ease;
}

.action-card:hover .action-icon {
   
    background: linear-gradient(
        90deg,
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
    );
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    transform: scale(1.1);
}

.action-text {
    font-size: 14px;
    color: var(--text);
    font-weight: 500;
    transition: color 0.3s ease;
}

.action-card:hover .action-text {
    background: linear-gradient(
        90deg,
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
    );
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

/* Dark mode adjustments */
.dark-mode .action-card {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.dark-mode .action-card:hover {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Responsive adjustments */
@media (max-width: 387px) {
    .action-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }
    
    .action-card {
        padding: 12px 8px;
    }
    
    .action-icon {
        width: 30px;
        height: 30px;
        font-size: 14px;
    }
    
    .action-text {
        font-size: 11px;
    }
}


            
            /* Responsive adjustments */
            @media (max-width: 200px) {
                .dashboard-stats {
                    flex-direction: column;
                }
                
                .stat-item {
                    margin-bottom: 10px;
                }

            }
            



/* Dashboard Plans Section -------------------------------------------------------------------*/

.dashboard-plans-container {
    scrollbar-width: none; /* For Firefox */
    -ms-overflow-style: none; /* For IE and Edge */
    margin-bottom: 15px;
}

.dashboard-plans-container::-webkit-scrollbar {
    display: none; /* For Chrome, Safari and Opera */
}

/* Card Hover Effects */
.card-inner:hover {
    transform: rotateY(10deg) rotateX(10deg) translateZ(10px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
}



.card-inner:hover .card__image {
    transform: translateY(-8px) scale(1.05);
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


.card-inner:hover .card__description {
    opacity: 1;
    transform: translateX(3px);
}




/* Hover Effect for Invest Button */
.card-inner:hover .card__button:not(.sold-out) {
    transform: scale(1) !important;
    box-shadow: 0 0 0 5px rgba(255, 255, 255, 0.2) !important;
}


/* Liquid Background Effect */
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
                opacity 0.4s ease-in-out;
    opacity: 0;
}

.card-inner:hover .card__liquid {
    transform: translateZ(-50px) translateY(30px) translateX(-20px) rotate(-20deg) scale(1.2);
    opacity: 0.7;
}

/* Shine Effect */
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

@keyframes shine-effect {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(200%); }
}

/* Sold Out Button Effect */
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

.view-all {
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
        
.card__badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #f9a825;
    color: white;
    padding: 0.3em 0.6em;
    border-radius: 999px;
    font-size: 0.8em;
    font-weight: 600;
    transform: scale(0.7);
    opacity: 0;
    transition: all 0.5s ease 0.2s;
    z-index: 3;
}

.card-inner:hover .card__badge {
    transform: scale(1);
    opacity: 1;
    z-index: 3;
}  

@keyframes pulse-button {
    0% { transform: scale(1); }
    50% { transform: scale(1.15); }
    100% { transform: scale(1); }
}

.card-inner:hover .card__title,
.card-inner:hover .card__price {
    color: #ff8a65 !important; /* Same accent color as plan blade */
    transform: translateX(3px);
}


/* Smooth transition for all card elements */
.card__title,
.card__description,
.card__price,
.card__button {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
}


        .usdt-logo1 {
        width: 16px;
        height: 16px;
         margin-left: 5px;
        vertical-align: middle;
        
        margin-right: 1px;
        display: inline-block; /* Add this */
        position: relative; /* Add this */
        top: -1px; /* Fine-tune vertical position */
        }
        
        

/*------------------------------------------------------------------------------------------------------------------------------*/     

            
</style>
    </head>
    <body oncontextmenu="return false" onselectstart="return false">
        
<x-loading-screen />
<x-navbar />

        <div class="body2">

  <!-- From Uiverse.io by vinodjangid07 --> 
<div class="balance-cards">
<div class="card">
    
    <div class="crypto-icons">
            <i class="fab fa-bitcoin"></i>
            <i class="fab fa-ethereum"></i>
            <i class="fas fa-coins"></i>
    </div>
    
        <div class="crypto-orb"></div>
        <div class="card-header">
            <span class="card-title" id="timeGreeting"></span>
            <span class="card-title"> {{ auth()->user()->firstname}}</span>
           
        </div>
        
        <div class="balance-display">
            <span class="total-balance-label">Account Balance</span>
            <span class="total-balance">
                {{ showAmount(auth()->user()->deposit_wallet + auth()->user()->interest_wallet, currencyFormat:false) }}
                <span class="currency">{{ gs('cur_text') }}</span>
            </span>
        </div>
        <div class="wallet-grid">
            <div class="wallet-cell">
                <div class="wallet-label">
                    <i class="fas fa-wallet"></i>
                    <span>Deposit Wallet</span>
                </div>
                <div class="wallet-amount">
                    <img src="/assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                    {{ showAmount(auth()->user()->deposit_wallet, currencyFormat:false) }}
                </div>
            </div>
            
            <div class="wallet-cell">
                <div class="wallet-label">
                    <i class="fas fa-percentage"></i>
                    <span>Interest Wallet</span>
                </div>
                <div class="wallet-amount">
                    <img src="/assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                    {{ showAmount(auth()->user()->interest_wallet, currencyFormat:false) }}
                </div>
            </div>
        </div>
        
       
       
<div class="account-info">
    <div class="user-id">
        <i class="fas fa-user-tag"></i> <span class="username-label">Username</span>
        <span class="account-text">
            <span id="hiddenText">XXXXXX</span>
            <span id="visibleText" style="display:none;">{{ auth()->user()->username }}</span>
        </span>
    </div>
    <div class="account-actions">
        <button id="copyUsername" class="copy-toggle" title="Copy Username" style="display:none;">
            <i class="fas fa-copy"></i>
        </button>
        <button id="toggleVisibility" class="eye-toggle" title="Show/Hide">
            <i class="fas fa-eye"></i>
        </button>
    </div>
</div>
   <div class="buttons">
    <a href="transfer-balance" class="button-transfer" id="transferButton">
    <span class="button-content">
        <i class="fas fa-exchange-alt"></i>
        <span>Transfer</span>
    </span>
    <span class="loading-spinner" style="display: none;">
        <i class="fas fa-spinner fa-spin"></i>
    </span>
    </a>

    <a href="deposit" class="button-save" id="addFundsButton">
    <span class="button-content">
        <i class="fas fa-usd"></i>
        <span>Add Funds</span>
    </span>
    <span class="loading-spinner" style="display: none;">
        <i class="fas fa-spinner fa-spin"></i>
    </span>
    </a>
  </div>
</div> </div>

<!-- HTML for the new action buttons section -->
<div class="action-buttons">
    <div class="action-grid">
        <a href="{{ route('user.transactions') }}" class="action-card">
            <div class="action-icon">
                <i class="fas fa-history"></i>
            </div>
            <div class="action-text">History</div>
        </a>
        
        <a href="staking" class="action-card">
            <div class="action-icon">
                <i class="fas fa-coins"></i>
            </div>
            <div class="action-text">Staking</div>
        </a>
        
        <a href="referrals" class="action-card">
            <div class="action-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="action-text">Friends</div>
        </a>
        
        <a href="{{ route('user.withdraw') }}" class="action-card">
            <div class="action-icon">
                <i class="fas fa-hand-holding-usd"></i>
            </div>
            <div class="action-text">Withdraw</div>
        </a>
        
    </div>
</div>





<!-- Featured Plans Section -->
<div class="plans-section" style="padding: 15px;">
    <div class="section-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h3 style="font-size: 20px; font-weight: 600; color: var(--text);">Trending NFTs</h3>
        <a href="{{ route('plan') }}" class="view-all"><i class="fas fa-server" aria-hidden="true"></i>View All</a>
    </div>
    
    <div class="dashboard-plans-container" style="display: flex; gap: 25px; overflow-x: auto; padding-bottom: 15%;  scrollbar-width: none; border-radius: 0px;">
        @foreach($plans as $plan)
        <div class="card-effect" style="width: 100%; display: flex; justify-content: center; perspective: 1000px;">
            <div class="card-inner" style=" --card-accent: #ff8a65; --card-text: var(--text); --card-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); width: 250px; height: 320px; background: var(--card-bg); border-radius: 20px; position: relative; overflow: hidden; transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 0.6s cubic-bezier(0.23, 1, 0.32, 1); box-shadow: var(--card-shadow); border: 1px solid var(--border);">
                <div class="card__liquid"></div>
                <div class="card__shine"></div>
                <div class="card__glow"></div>
                <div class="card__content" style="padding: 1.4em; height: 100%; display: flex; flex-direction: column; gap: 0.8em; position: relative; z-index: 2;">
                    @if($plan->featured)
                        <div class="card__badge" style="background: linear-gradient(90deg, #ff4d4d, #f9cb28);">TRENDING</div>
                        @else
                            <div class="card__badge" style="background: linear-gradient(90deg,  #11998e, #38ef7d); ">FEATURED</div>
                        @endif
                    
                    <div class="card__image" style="width: 100%; height: 160px; background: #4a90e2; border-radius: 15px; transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1); position: relative; overflow: hidden; box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15); margin-bottom: 10px;">
                        @if($plan->image)
                            <img src="{{ asset('core/public/assets/images/plan/'.$plan->image) }}" alt="Plan Image" style="width:100%; height:100%; object-fit:cover;" oncontextmenu="return false;">
                        @else
                            <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; color:white; font-size:2rem;">
                                <i class="fas fa-coins"></i>
                            </div>
                        @endif
                    </div>
                    
                    <div class="card__text" style=" display: flex; flex-direction: column; gap: 0.5em;">
                        <p class="card__title" style="color: var(--card-text); font-size: 18px; margin: 0; font-weight: 700; transition: color 0.4s ease-in-out, transform 0.4s ease-in-out;">{{ __($plan->name) }}</p>
                        <p class="card__description" style="color: var(--card-text); font-size: 13px; margin: 0; opacity: 0.8; transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;">
                            @lang('EARN') {{ $plan->interest_type != 1 ? gs('cur_sym') : '' }}{{ showAmount($plan->interest, currencyFormat:false) }}{{ $plan->interest_type == 1 ? '%' : '' }} 
                            @lang('FOR') @if ($plan->lifetime == 0)
                                {{ __($plan->repeat_time) }} {{ __($plan->timeSetting->name) }}S
                            @else
                                @lang('Lifetime')
                            @endif
                        </p>
                    </div>
                    
                    <div class="card__footer" style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
                        <div class="card__price" style="color: var(--card-text); font-weight: ; font-size: 16PX; transition: color 0.4s ease-in-out, transform 0.4s ease-in-out;">
                            <img src="/assets/logo/tether-1.svg" alt="USDT" class="usdt-logo1" oncontextmenu="return false;" style="width: 16px; height: 16px; margin-left: 5px; vertical-align: middle; margin-right: 1px;">
                            @if ($plan->fixed_amount == 0)
                                {{ number_format($plan->minimum, 2) }} - {{ number_format($plan->maximum, 2) }}
                            @else
                                {{ number_format($plan->fixed_amount, 2) }}
                            @endif
                        </div>
                        
                        @if($plan->capital_back == 1)
                    <button class="card__button sold-out" disabled style="width: 70px; height: 35px; font-size: 14px; border: none; border-radius: 25px; display: flex; align-items: center; justify-content: center; color: white; cursor: not-allowed; transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out; transform: scale(0.85); background: #cccccc !important; position: relative; overflow: hidden;">
                        Expired
                    </button>
                        @else
                    <button class="card__button" onclick="window.location.href='{{ route('plan') }}'" style="width: 70px; height: 35px; font-size: 14px; border: none; border-radius: 25px; display: flex; align-items: center; justify-content: center; color: white; cursor: pointer; transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out; transform: scale(0.85); background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff); background-size: 400% 400%; animation: rgbFlow 6s ease infinite; position: relative; overflow: hidden; z-index: 1;">
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
          
<x-mobile-menu />           

<script>

// Toggle username visibility and copy functionality
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('toggleVisibility');
    const hiddenText = document.getElementById('hiddenText');
    const visibleText = document.getElementById('visibleText');
    const copyBtn = document.getElementById('copyUsername');
    
    if (toggleBtn && hiddenText && visibleText && copyBtn) {
        // Create feedback element
        const feedback = document.createElement('span');
        
        // Toggle visibility
        toggleBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            if (hiddenText.style.display === 'none') {
                // Hide the username
                hiddenText.style.display = 'inline';
                visibleText.style.display = 'none';
                toggleBtn.innerHTML = '<i class="fas fa-eye"></i>';
                copyBtn.style.display = 'none';
            } else {
                // Show the username
                hiddenText.style.display = 'none';
                visibleText.style.display = 'inline';
                toggleBtn.innerHTML = '<i class="fas fa-eye-slash"></i>';
                copyBtn.style.display = 'flex';
            }
        });
        
        // Copy username
        copyBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Copy to clipboard
            navigator.clipboard.writeText(visibleText.textContent).then(() => {
                // Show feedback
                feedback.classList.add('show');
                setTimeout(() => {
                    feedback.classList.remove('show');
                }, 2000);
                
                // Button animation
                copyBtn.innerHTML = '<i class="fas fa-check"></i>';
                setTimeout(() => {
                    copyBtn.innerHTML = '<i class="fas fa-copy"></i>';
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        });
    }
});    


    // Infinite carousel for plan cards
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.dashboard-plans-container');
    const cards = document.querySelectorAll('.card-effect');
    const cardWidth = 250; // Match your existing card width
    const gap = 25; // Match your existing gap
    let currentPosition = 0;
    let isPaused = false;
    let scrollInterval;
    let scrollSpeed = 5000; // 3 seconds between scrolls
    
    // Clone first few cards and append to end for seamless looping
    const firstCard = cards[0].cloneNode(true);
    const secondCard = cards[1].cloneNode(true);
    container.appendChild(firstCard);
    container.appendChild(secondCard);
    
    function scrollToNext() {
        if (isPaused) return;
        
        currentPosition += cardWidth + gap;
        const maxScroll = container.scrollWidth - container.clientWidth;
        
        // Smooth scroll to next position
        container.scrollTo({
            left: currentPosition,
            behavior: 'smooth'
        });
        
        // When we reach the end, instantly reset to start (without animation)
        if (currentPosition >= maxScroll - (cardWidth + gap)) {
            setTimeout(() => {
                currentPosition = 0;
                container.scrollTo({
                    left: 0,
                    behavior: 'auto'
                });
            }, 1000); // Wait for smooth scroll to complete
        }
    }
    
    // Start auto-scrolling
    scrollInterval = setInterval(scrollToNext, scrollSpeed);
    
    // Pause on hover
    container.addEventListener('mouseenter', () => {
        isPaused = true;
    });
    
    container.addEventListener('mouseleave', () => {
        isPaused = false;
    });
    
    // Clean up on page unload
    window.addEventListener('beforeunload', function() {
        clearInterval(scrollInterval);
    });
});
    
    
    
     



//wish message 
function updateGreeting() {
    const hour = new Date().getHours();
    const greeting = document.getElementById('timeGreeting');
    
    if (hour >= 6 && hour < 12) greeting.textContent = 'Good Morning, ';
    else if (hour >= 12 && hour < 18) greeting.textContent = 'Good Afternoon, ';
    else greeting.textContent = 'Good Evening, ';
}
updateGreeting(); 
 
 
// Transfer and Add Funds buttons loading spinners
document.addEventListener('DOMContentLoaded', function() {
    // Function to reset button states
    function resetButtons() {
        const transferBtn = document.getElementById('transferButton');
        const addFundsBtn = document.getElementById('addFundsButton');
        
        if (transferBtn) {
            transferBtn.classList.remove('loading');
            transferBtn.style.pointerEvents = 'auto';
        }
        
        if (addFundsBtn) {
            addFundsBtn.classList.remove('loading');
            addFundsBtn.style.pointerEvents = 'auto';
        }
    }

    // Reset buttons on page load and when navigating back
    resetButtons();
    window.addEventListener('pageshow', resetButtons);

    // Transfer button click handler
    const transferBtn = document.getElementById('transferButton');
    if (transferBtn) {
        transferBtn.addEventListener('click', function() {
            this.classList.add('loading');
            this.style.pointerEvents = 'none';
        });
    }

    // Add Funds button click handler
    const addFundsBtn = document.getElementById('addFundsButton');
    if (addFundsBtn) {
        addFundsBtn.addEventListener('click', function() {
            this.classList.add('loading');
            this.style.pointerEvents = 'none';
        });
    }
}); 


     
</script>

       
</body>
</html>