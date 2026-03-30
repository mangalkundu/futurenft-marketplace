<nav class="navbar">
    <div class="nav-left">
        <a href="" class="logo">
            <span class="logo-f">F</span>uture <b>NFT</b>
        </a>
    </div>
    <div class="nav-right">
@php
    // Calculate tier and total invested
    $totalInvested = auth()->user()->invests->sum('amount');
    $tier = 'bronze';
    if ($totalInvested >= 9999) $tier = 'fire';
    elseif ($totalInvested >= 4999) $tier = 'ruby';
    elseif ($totalInvested >= 1999) $tier = 'emerald';
    elseif ($totalInvested >= 999) $tier = 'diamond';
    elseif ($totalInvested >= 599) $tier = 'platinum';
    elseif ($totalInvested >= 299) $tier = 'gold';
    elseif ($totalInvested >= 99) $tier = 'silver';
    elseif ($totalInvested > 0) $tier = 'bronze';

    // Calculate next tier requirements
    $nextTier = 'max';
    $nextTierAmount = 99999;
    $currentTierAmount = 0;
    
    if ($tier == 'bronze') { 
        $nextTier = 'silver'; 
        $nextTierAmount = 99; 
        $currentTierAmount = 0;
    }
    elseif ($tier == 'silver') { 
        $nextTier = 'gold'; 
        $nextTierAmount = 299; 
        $currentTierAmount = 99;
    }
    elseif ($tier == 'gold') { 
        $nextTier = 'platinum'; 
        $nextTierAmount = 599; 
        $currentTierAmount = 299;
    }
    elseif ($tier == 'platinum') { 
        $nextTier = 'diamond'; 
        $nextTierAmount = 999; 
        $currentTierAmount = 599;
    }
    elseif ($tier == 'diamond') { 
        $nextTier = 'emerald'; 
        $nextTierAmount = 1999; 
        $currentTierAmount = 999;
    }
    elseif ($tier == 'emerald') { 
        $nextTier = 'ruby'; 
        $nextTierAmount = 4999; 
        $currentTierAmount = 1999;
    }
    elseif ($tier == 'ruby') { 
        $nextTier = 'fire'; 
        $nextTierAmount = 9999; 
        $currentTierAmount = 4999;
    }
    
    // Calculate progress percentage
    $progressPercentage = 100;
    if ($nextTier != 'max') {
        $range = $nextTierAmount - $currentTierAmount;
        $progressInRange = $totalInvested - $currentTierAmount;
        $progressPercentage = min(100, ($progressInRange / $range) * 100);
    }
@endphp
    
<div class="profile-photo-wrapper" style="display: inline-block;">
    @if($tier != 'none')
        <i class="fas fa-crown crown-badge {{ $tier }}-crown" style="font-size: 14px; top: -8px;"></i>
    @endif
    <div class="profile-photo-frame {{ $tier }}-frame shine-effect" style="width: 30px; height: 30px; padding: 2px;">
        <a class="rgb-btn-link">
            @if(auth()->user()->photo)
                <img src="{{ auth()->user()->photo }}" alt="avatar" class="profile-photo-preview" style="width: 100%; height: 100%; border: 1px solid var(--card-bg);" oncontextmenu="return false;">
            @else
                <img src="/assets/logo/avatar-logo.gif" alt="avatar" class="profile-photo-preview" style="width: 100%; height: 100%; border: 1px solid var(--card-bg);" oncontextmenu="return false;">
            @endif
        </a>
    </div>
</div>
        <label class="hamburger">
            <input type="checkbox" id="hamburgerCheckbox">
            <svg viewBox="0 0 32 32">
                <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                <path class="line" d="M7 16 27 16"></path>
            </svg>
        </label>
    </div>
    
    <!-- Dropdown Menu -->
    <div class="dropdown-menu" id="dropdownMenu">
        <div class="menu-items">
            <a href="/user/profile-setting" class="menu-link">
                <i class="fas fa-user-edit menu-icon"></i>
                <span class="menu-text">Profile</span>
            </a>
            <a href="/user/twofactor" class="menu-link">
                <i class="fas fa-fingerprint menu-icon"></i>
                <span class="menu-text">2FA</span>
            </a>
            <a href="/user/change-password" class="menu-link">
                <i class="fas fa-key menu-icon"></i>
                <span class="menu-text">Passkey</span>
            </a>
            <a href="/ticket" class="menu-link">
                <i class="fas fa-headset menu-icon"></i>
                <span class="menu-text">Support</span>
            </a>
            
            <div class="menu-link" id="dropdownThemeToggle">
                <div class="sun-moon-container">
                    <div class="sun"><i class="fas fa-sun"></i></div>
                    <div class="moon"><i class="fas fa-moon"></i></div>
                </div>
                <span class="menu-text theme-mode-text">
                    <span class="light-text">Light Mode</span>
                    <span class="dark-text">Dark Mode</span>
                </span>
            </div>
            
            <a href="{{ route('user.logout') }}" class="menu-link">
                <i class="fas fa-sign-out-alt menu-icon"></i>
                <span class="menu-text">Logout</span>
            </a>
        </div>
    </div>
</nav>

<!-- Profile Card -->   
<div class="profile-card-popup" id="profileCardPopup" style="display: none;">
    <div class="profile-card-content">
        <div class="profile-card-header">
            @if($tier != 'none')
                <i class="fas fa-crown crown-badge {{ $tier }}-crown" style="font-size: 24px; top: 15px;"></i>
                <i class="fas fa-crown crown-for-screenshot {{ $tier }}-crown-solid"></i>
            @endif
            <div class="profile-photo-frame {{ $tier }}-frame shine-effect">
                @if(auth()->user()->photo)
                    <img src="{{ auth()->user()->photo }}" alt="avatar" class="profile-photo-preview">
                @else
                    <img src="/assets/logo/avatar-logo.gif" alt="avatar" class="profile-photo-preview">
                @endif
            </div>
        </div>
        <div class="profile-card-body">
            <h4>{{ auth()->user()->full_name ?? 'User' }}</h4>
            <p>{{ '@' . auth()->user()->username ?? 'username' }}</p>
            
            <div class="tier-progress-container">
                <div class="tier-progress-bar {{ $tier }}-progress">
                    <div class="tier-progress-fill {{ $tier }}-fill" style="width: {{ $progressPercentage }}%">
                        <div class="shine-effect"></div>
                    </div>
                </div>
                <div class="tier-progress-text">
                    @if($nextTier != 'max')
                        {{ ($totalInvested) }} {{ gs('cur_text') }} / {{ ($nextTierAmount) }} {{ gs('cur_text') }} to {{ ucfirst($nextTier) }}
                    @else
                        Max Tier Achieved
                    @endif
                </div>
            </div>            
            
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">
                        @php
                            try {
                                $count = auth()->user()->invests()->where('status', 1)->count();
                                echo $count > 0 ? "$count" : '0';
                            } catch (Exception $e) {
                                echo '0';
                            }
                        @endphp
                    </div>
                    <div class="stat-label">Active Plan</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"> 
                        @php
                            try {
                                $count = auth()->user()->activeReferrals()->count();
                                echo $count > 0 ? $count : '0';
                            } catch (Exception $e) {
                                echo '0';
                            }
                        @endphp 
                    </div>
                    <div class="stat-label">Friends</div>
                </div>
            </div>
            
            <!-- Social Sharing Buttons -->
            <div class="social-sharing">
                <div class="social-buttons">
                    <button type="button" class="btn-close" id="cancel">
                        Cancel
                    </button>
                    <button class="social-button" id="shareProfileBtn">
                        <i class="fas fa-share" style="margin-right: 8px;"></i>Share
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>   

<!--<canvas id="profileCanvas" style="display:none;"></canvas>-->
<div class="menu-overlay" id="menuOverlay"></div>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">


<style>
/* Navbar Styles */
.navbar {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 65px;
    padding: 0px 15px;
    background-color: var(--navbar-bg);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    position: sticky;
    top: 0px;
    z-index: 100;
    border-bottom: 2px solid var(--border);
}

.nav-left {
    display: flex;
    align-items: center;
    gap: 12px;
}

.logo {
    text-align: center;
    margin-top: 0px;
    margin-bottom: 0px;
    font-size: 26px;
    color: var(--text);
    font-weight: 750;
    text-decoration: none; line-height: 65px; height: 100%;
}

.logo-f {
    font-family: "Damion", cursive;
    font-size: 40px;
    font-weight: 400;
}


.logo b {
    font-size: 26px;
    margin-bottom: 60px;
    text-align: center;
    font-weight: 750;
    color: transparent;
    background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    -webkit-background-clip: text;
    background-clip: text;
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

.nav-right {
    display: flex;
    align-items: center;
    gap: 10px;
}

.avatar {
    width: 30px;
    height: 30px;
    margin-left: 0px;
    vertical-align: middle;
    
    margin-right: -2px;
    border-radius: 20px;
}

/* profile photo avatar */
.profile-photo-wrapper {
    position: relative;
    width: fit-content;
    margin: 0 auto;
    display: inline-block;
}

.profile-photo-frame {
    position: relative;
    width: 85px;
    height: 85px;
    border-radius: 50%;
    padding: 3px;
    background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    overflow: hidden; /* This is important for the shine effect */
}

.profile-photo-preview {
    width: 100%;
    height: 100%%;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--card-bg);
    position: relative;
    z-index: 1;
}


.crown-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 24px;
    z-index: 3;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
}


/* BRONZE - Warmer Bronze */
.bronze-crown, .bronze-frame {
    background: linear-gradient(135deg,
        #cd7f32, #e8b87a, #d4a373, #cd7f32);
    background-size: 400% 400%;
    
}
.bronze-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 5px rgba(205, 127, 50, 0.2),
        0 0 10px rgba(232, 184, 122, 0.1);
}

/* SILVER - Brighter Mirror */
.silver-crown, .silver-frame {
    background: linear-gradient(135deg,
        #f8f8f8, #e8e8e8, #d8d8d8, #f8f8f8);
    background-size: 400% 400%;
    
}
.silver-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 8px rgba(255, 255, 255, 0.2),
        0 0 16px rgba(200, 200, 200, 0.1);
}

/* GOLD - Richer Gold */
.gold-crown, .gold-frame {
    background: linear-gradient(135deg,
        #ffd700, #ffea80, #ffcc00, #ffd700);
    background-size: 400% 400%;
    
}
.gold-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 8px rgba(255, 215, 0, 0.3),
        0 0 16px rgba(255, 234, 128, 0.2),
        0 0 24px rgba(255, 204, 0, 0.1);
}

/* PLATINUM - Cooler Platinum */
.platinum-crown, .platinum-frame {
    background: linear-gradient(135deg,
       #e6f2ff, #d9e6ff, #c2d6ff, #e6f2ff);
    background-size: 400% 400%;
    
}
.platinum-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 8px rgba(230, 242, 255, 0.3),
        0 0 16px rgba(194, 214, 255, 0.2),
        0 0 24px rgba(102, 153, 255, 0.1);
}

/* DIAMOND - Icy Blue */
.diamond-crown, .diamond-frame {
    background: linear-gradient(135deg,
        #7fffd4, #b9f2ff, #00bfff, #7fffd4);
    background-size: 400% 400%;
    
}
.diamond-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 10px rgba(185, 242, 255, 0.3),
        0 0 20px rgba(0, 191, 255, 0.2),
        0 0 30px rgba(127, 255, 212, 0.1);
}

/* EMERALD - Vibrant Green */
.emerald-crown, .emerald-frame {
    background: linear-gradient(135deg,
        #00ff7f, #50c878, #00aa55, #00ff7f);
    background-size: 400% 400%;
    
}
.emerald-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 10px rgba(80, 200, 120, 0.3),
        0 0 20px rgba(0, 255, 127, 0.2),
        0 0 30px rgba(0, 170, 85, 0.1);
}

/* RUBY - Deep Red */
.ruby-crown, .ruby-frame {
    background: linear-gradient(135deg,
        #ff355e, #e0115f, #cc0000, #ff355e);
    background-size: 400% 400%;
    
}
.ruby-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 10px rgba(224, 17, 95, 0.3),
        0 0 20px rgba(255, 53, 94, 0.2),
        0 0 30px rgba(204, 0, 0, 0.1);
}

/* FIRE - Burning Gradient */
.fire-crown, .fire-frame {
    background: linear-gradient(135deg,
        #ff4500, #ff8c00, #ff0000, #ff4500);
    background-size: 400% 400%;
    
}
.fire-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 12px rgba(255, 69, 0, 0.3),
        0 0 24px rgba(255, 140, 0, 0.2),
        0 0 36px rgba(255, 0, 0, 0.1);
}


/* Updated shine effect */
.shine-effect::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.2),
        transparent
    );
    z-index: 2;
    transition: 0.5s;
    animation: shine 3s infinite;
}

@keyframes shine {
    0% { left: -100%; }
    20% { left: 100%; }
    100% { left: 100%; }
}  



.rgb-btn {
    margin-right: -0px;
    width: 100%;
    padding: 10px 10px;
    color: white;
    border: none;
    border-radius: 20px;
    font-size: 14px;
    width: 30px;
    height: 30px;
    cursor: pointer;
    margin-top: 0px;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    text-decoration: none !important;
    background: linear-gradient(
        90deg,
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
    );
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s;
}
.rgb-btn-link {
    text-decoration: none;
    display: inline-block;
}
.rgb-btn i {
    text-decoration: none;
    display: inline-block;
}

.rgb-btn:hover:not(:disabled) {
    transform: translateY(0px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}
.rgb-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}
.rgb-btn:active {
    transform: translateY(0);
}
.rgb-btn::before {
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
.rgb-btn:hover::before {
    opacity: 1;
}


/* Hamburger menu */
.hamburger {
    cursor: pointer; 
}

.hamburger input {
    display: none;
}

.hamburger svg {
    margin-top: 5px;
    height: 2.1em;
    transition: transform 600ms cubic-bezier(0.4, 0, 0.2, 1);
}

.line {
    fill: none;
    stroke: var(--text);
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-width: 3;
    transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
                stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
}

.line-top-bottom {
    stroke-dasharray: 12 63;
}

.hamburger input:checked + svg {
    transform: rotate(-45deg);
}

.hamburger input:checked + svg .line-top-bottom {
    stroke-dasharray: 20 300;
    stroke-dashoffset: -32.42;
}

/* Dropdown Menu */
.dropdown-menu {
    position: absolute;
    top: 100%;
    right: 0px;
    width: 200px;
    background-color:var(--navbar-bg);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 0 0 20px 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    z-index: 100;
    max-height: 0;
    overflow: hidden;
    transition: max-height 1s cubic-bezier(0.175, 0.885, 0.32, 1.1);
    transform-origin: top;
    border: 1px solid var(--border);
    margin-top: 0px;
}

.dropdown-menu.active {
    max-height: 500px;
    overflow-y: auto;
}

.menu-items {
    display: flex;
    flex-direction: column;
    padding: 15px 5px;
    gap: 5px;
}

.menu-link {
    color: var(--text);
    text-decoration: none;
    font-size: 15px;
    font-weight: 0;
    padding: 13px 15px;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    margin: 0 10px;
    border-radius: 100px;
    background-color:var(--secondary)
}

.menu-link:hover {
    transform: translateX(-2px);
}

.menu-link.active .menu-icon,
.menu-link.active .menu-text {
    color: transparent;
    background: linear-gradient(
        90deg,
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
    );
    -webkit-background-clip: text;
    background-clip: text;
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

.dropdown-menu .menu-icon {
    font-size: 14px !important;
    width: 18px !important;
    height: 20px !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.menu-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.menu-overlay.active {
    opacity: 1;
    visibility: visible;
}

/* Theme Toggle Styles */
#dropdownThemeToggle {
    cursor: pointer;
}

#dropdownThemeToggle .sun-moon-container {
    position: relative;
    width: 18px;
    height: 18px;
}

#dropdownThemeToggle .sun, 
#dropdownThemeToggle .moon {
    position: absolute;
    width: 100%;
    height: 100%;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
}

#dropdownThemeToggle .sun {
    opacity: 1;
    transform: translateY(0) rotate(0deg);
    color: #ff8a65;
}

#dropdownThemeToggle .moon {
    opacity: 0;
    transform: translateY(20px) rotate(90deg);
    color: #f5f5f5;
}

.dark-mode #dropdownThemeToggle .sun {
    opacity: 0;
    transform: translateY(-20px) rotate(180deg);
}

.dark-mode #dropdownThemeToggle .moon {
    opacity: 1;
    transform: translateY(0) rotate(0deg);
}

.theme-mode-text .light-text {
    display: inline;
}
.theme-mode-text .dark-text {
    display: none;
}
.dark-mode .theme-mode-text .light-text {
    display: none;
}
.dark-mode .theme-mode-text .dark-text {
    display: inline;
}

/* Animation */
@keyframes rgbFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Profile Card Popup Styles */
.profile-card-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: none; /* Changed from flex to none */
    align-items: center;
    justify-content: center;
    z-index: 90;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.profile-card-popup.active {
    opacity: 1;
    visibility: visible;
    display: flex; /* Ensure it's flex when active */
}

.profile-card-content {
    background-color: var(--card-bg);
    border-radius: 20px;
    padding: 20px;
    padding-top: 30px;
    width: 90%;
    max-width: 500px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    border: 1px solid var(--border);
    position: relative;
}

.profile-card-header {
    margin-bottom: 15px;
    display: flex;
    justify-content: center;
}

.profile-card-body h4 {
    margin: 10px 0 5px;
    font-size: 18px;
    color: var(--text);
}

.profile-card-body p {
    margin: 0 0 20px;
    color: var(--text-light);
    font-size: 14px;
}

.stats-container {
    display: flex;
    justify-content: space-around;
    margin: 20px 0;
    padding: 15px 0;
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 18px;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 5px;
}

.stat-label {
    font-size: 13px;
    color: var(--text-light);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}



.tier-progress-container {
    width: 100%;
    margin: 15px 0;
}

.tier-progress-bar {
    height: 6px;
    background-color: var(--border);
    border-radius: 10px;
    overflow: hidden;
    position: relative;
}

.tier-progress-fill {
    height: 100%;
    border-radius: 10px;
    position: relative;
    transition: width 0.5s ease;
}

.tier-progress-text {
    font-size: 13px;
    color: var(--text-muted);
    text-align: center;
    margin-top: 8px;
}

/* Tier Progress Colors - Match the crown colors */
.bronze-progress .tier-progress-fill {
    background: linear-gradient(135deg, #cd7f32, #e8b87a, #d4a373, #cd7f32);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

.silver-progress .tier-progress-fill {
    background: linear-gradient(135deg, #f8f8f8, #e8e8e8, #d8d8d8, #f8f8f8);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

.gold-progress .tier-progress-fill {
    background: linear-gradient(135deg, #ffd700, #ffea80, #ffcc00, #ffd700);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

.platinum-progress .tier-progress-fill {
    background: linear-gradient(135deg, #e6f2ff, #d9e6ff, #c2d6ff, #e6f2ff);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

.diamond-progress .tier-progress-fill {
    background: linear-gradient(135deg, #7fffd4, #b9f2ff, #00bfff, #7fffd4);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

.emerald-progress .tier-progress-fill {
    background: linear-gradient(135deg, #00ff7f, #50c878, #00aa55, #00ff7f);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

.ruby-progress .tier-progress-fill {
    background: linear-gradient(135deg, #ff355e, #e0115f, #cc0000, #ff355e);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

.fire-progress .tier-progress-fill {
    background: linear-gradient(135deg, #ff4500, #ff8c00, #ff0000, #ff4500);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
}

/* Shine effect for progress bar */
.tier-progress-fill .shine-effect {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.3),
        transparent
    );
    animation: shine 3s infinite;
}

@keyframes shine {
    0% { left: -100%; }
    20% { left: 100%; }
    100% { left: 100%; }
}


/* Social Sharing Styles */
.social-sharing {
    margin-top: 30px;
    text-align: center;
    margin-bottom: 5px;
}


.social-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.social-button {

    padding: 13px 15px;
    border-radius: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 13px;
    font-weight: 700;
    transition: all 0.3s ease;
    text-decoration: none;
    cursor: pointer;
    border: none;
    outline: none;
    background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
        background-size: 400% 400%;
        animation: rgbFlow 6s ease infinite;
        color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

    .btn-close {

    padding: 13px 15px;
    border-radius: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 13px;
    font-weight: 700;
    transition: all 0.3s ease;
    text-decoration: none;
   
    cursor: pointer;
    border: none;
    outline: none;
        background-color: var(--secondary);
        color: var(--text);
        border: 1px solid var(--border); box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }


/* Temporary crown for screenshot - hidden by default */
.crown-for-screenshot {
    display: none;
    position: absolute;
    font-size: 24px;
    top: 15px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
    color: var(--crown-solid-color);
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
}

/* Solid color definitions */
.bronze-crown-solid { --crown-solid-color: #cd7f32; }
.silver-crown-solid { --crown-solid-color: #f8f8f8; }
.gold-crown-solid { --crown-solid-color: #ffd700; }
.platinum-crown-solid { --crown-solid-color: #e6f2ff; }
.diamond-crown-solid { --crown-solid-color: #7fffd4; }
.emerald-crown-solid { --crown-solid-color: #00ff7f; }
.ruby-crown-solid { --crown-solid-color: #ff355e; }
.fire-crown-solid { --crown-solid-color: #ff4500; }

</style>

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Navbar dropdown functionality
    const hamburgerCheckbox = document.getElementById('hamburgerCheckbox');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const menuOverlay = document.getElementById('menuOverlay');
    const menuLinks = document.querySelectorAll('.menu-link');
    const hamburger = document.querySelector('.hamburger');

    // Toggle menu when hamburger is clicked
    if (hamburgerCheckbox) {
        hamburgerCheckbox.addEventListener('click', function(e) {
            e.stopPropagation();
            const isChecked = this.checked;
            toggleMenu(isChecked);
        });
    }

    // Close menu when clicking overlay
    if (menuOverlay) {
        menuOverlay.addEventListener('click', () => {
            if (hamburgerCheckbox) hamburgerCheckbox.checked = false;
            toggleMenu(false);
        });
    }

    // Close menu when clicking anywhere outside
    document.addEventListener('click', (e) => {
        if (dropdownMenu && !dropdownMenu.contains(e.target) && e.target !== hamburgerCheckbox && hamburger && !hamburger.contains(e.target)) {
            if (hamburgerCheckbox) hamburgerCheckbox.checked = false;
            toggleMenu(false);
        }
    });

    // Function to handle menu toggling
    function toggleMenu(shouldOpen) {
        if (dropdownMenu && menuOverlay) {
            if (shouldOpen) {
                dropdownMenu.classList.add('active');
                menuOverlay.classList.add('active');
            } else {
                dropdownMenu.classList.remove('active');
                menuOverlay.classList.remove('active');
            }
        }
    }

    // Menu item click handling
    if (menuLinks) {
        menuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Close the menu
                if (hamburgerCheckbox) hamburgerCheckbox.checked = false;
                toggleMenu(false);
                
                // Remove active class from all items
                menuLinks.forEach(item => item.classList.remove('active'));
                
                // Add active class to clicked item
                this.classList.add('active');
            });
        });
    }

    // Theme toggle functionality
    const dropdownThemeToggle = document.getElementById('dropdownThemeToggle');
    const body = document.body;
    
    // Initialize theme from localStorage
    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark-mode');
    }
    
    // Handle dropdown theme toggle click
    if (dropdownThemeToggle) {
        dropdownThemeToggle.addEventListener('click', function(e) {
            e.preventDefault();
            body.classList.toggle('dark-mode');
            localStorage.setItem('theme', body.classList.contains('dark-mode') ? 'dark' : 'light');
            
            // Close the dropdown menu
            if (hamburgerCheckbox) {
                hamburgerCheckbox.checked = false;
                toggleMenu(false);
            }
        });
    }
    
// Profile card popup functionality
const profilePhotoWrapper = document.querySelector('.profile-photo-wrapper');
const profileCardPopup = document.getElementById('profileCardPopup');

if (profilePhotoWrapper && profileCardPopup) {
    // Make all parts of the profile photo clickable
    const clickableElements = [
        profilePhotoWrapper,
        ...profilePhotoWrapper.querySelectorAll('*')
    ];
    
    clickableElements.forEach(el => {
        el?.addEventListener('click', function(e) {
            e.stopPropagation();
            // Toggle the popup instead of just opening it
            if (profileCardPopup.classList.contains('active')) {
                profileCardPopup.classList.remove('active');
                setTimeout(() => {
                    profileCardPopup.style.display = 'none';
                }, 300);
            } else {
                profileCardPopup.style.display = 'flex';
                setTimeout(() => {
                    profileCardPopup.classList.add('active');
                }, 10);
            }
        });
    });
    
    // Close when clicking outside
    profileCardPopup.addEventListener('click', function(e) {
        if (e.target === profileCardPopup) {
            profileCardPopup.classList.remove('active');
            setTimeout(() => {
                profileCardPopup.style.display = 'none';
            }, 300);
        }
    });
    
    // Close with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && profileCardPopup.classList.contains('active')) {
            profileCardPopup.classList.remove('active');
            setTimeout(() => {
                profileCardPopup.style.display = 'none';
            }, 300);
        }
    });
    
    // Cancel button handler
    document.getElementById('cancel')?.addEventListener('click', function(e) {
        e.preventDefault();
        profileCardPopup.classList.remove('active');
        setTimeout(() => {
            profileCardPopup.style.display = 'none';
        }, 300);
    });
}
    
    // Share functionality
document.getElementById('shareProfileBtn')?.addEventListener('click', async function() {
    const shareBtn = this;
    const originalContent = shareBtn.innerHTML;
    
    // Set loading state
    shareBtn.innerHTML = '<i class="fas fa-spinner fa-spin" style="margin-right: 4px;"></i> Sharing...';
    shareBtn.disabled = true;
    
    try {
        // Show screenshot crowns and hide originals
        const originalCrowns = document.querySelectorAll('.crown-badge');
        const screenshotCrowns = document.querySelectorAll('.crown-for-screenshot');
        
        originalCrowns.forEach(crown => crown.style.display = 'none');
        screenshotCrowns.forEach(crown => crown.style.display = 'block');
        
        const profileCard = document.querySelector('.profile-card-content');
        const canvas = await html2canvas(profileCard, {
            scale: 2,
            logging: false,
            useCORS: true,
            allowTaint: true,
            backgroundColor: null
        });
        
        // Restore original display
        originalCrowns.forEach(crown => crown.style.display = 'block');
        screenshotCrowns.forEach(crown => crown.style.display = 'none');
        
        const image = canvas.toDataURL('image/png');
        const profileLink = `{{ route('home') }}?reference={{ auth()->user()->username }}`;
        const shareText = `Check out my profile on Future NFT! ${profileLink}`;
        
        if (navigator.share) {
            try {
                const blob = await (await fetch(image)).blob();
                const file = new File([blob], 'profile.png', { type: blob.type });
                
                await navigator.share({
                    title: 'My Future NFT Profile',
                    text: shareText,
                    files: [file],
                    url: profileLink
                });
            } catch (err) {
                fallbackShare(image, shareText);
            }
        } else {
            fallbackShare(image, shareText);
        }
    } catch (error) {
        console.error('Error sharing profile:', error);
        alert('Failed to share profile. Please try again.');
    } finally {
        // Reset button state
        shareBtn.innerHTML = originalContent;
        shareBtn.disabled = false;
        
        // Ensure crowns are reset even if error occurred
        document.querySelectorAll('.crown-badge').forEach(crown => crown.style.display = 'block');
        document.querySelectorAll('.crown-for-screenshot').forEach(crown => crown.style.display = 'none');
    }
});
    
    function fallbackShare(imageData, text) {
        const downloadLink = document.createElement('a');
        downloadLink.href = imageData;
        downloadLink.download = 'my-profile.png';
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
        
        navigator.clipboard.writeText(text).then(() => {
            alert('Profile image downloaded and link copied to clipboard!');
        }).catch(() => {
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
            alert('Profile image downloaded and link copied to clipboard!');
        });
    }
});
</script>
