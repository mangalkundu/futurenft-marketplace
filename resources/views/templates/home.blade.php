<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT</title>
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
  -webkit-tap-highlight-color: transparent; /* Removes mobile blue tap highlight */
}

        
        .dark-mode {
            --primary: #3a9bff;
            --primary-light: #1a2a3a;
            --secondary: #1e1e1e;
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
            min-height: 80vh;

        }
       
        .body2 {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }       
       
        
        /* Improved Top Navigation Bar */
        
        .navbar {
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 15px;
        background-color: var(--navbar-bg);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px); /* For Safari */
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
             text-decoration: none;
        }
        .logo b {
            font-size: 26px;
            margin-bottom: 60px;
            text-align: center;
            color: #222;
            font-weight: 750;
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
        
        .nav-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }
 


        
        .account-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 10px;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
            
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            
        }
        .rgb-btn-link {
            text-decoration: none;
            display: inline-block; /* Ensures proper button alignment */
        }
        .rgb-btn i {
            text-decoration: none;
            display: inline-block; /* Ensures icon doesn't inherit text styles */
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
        @keyframes rgbFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }        

        /* Main Content */
        .container {
            padding: 15px;
            padding-bottom: 80px; /* Space for mobile menu */
        }        
        
/* Theme Toggle Menu Item */
#dropdownThemeToggle {
    cursor: pointer;
}

/* Sun/Moon Container */
#dropdownThemeToggle .sun-moon-container {
    position: relative;
    width: 18px;
    height: 18px;
}

/* Icons */
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
    color: #ff8a65; /* Orange color for sun */
}

#dropdownThemeToggle .moon {
    opacity: 0;
    transform: translateY(20px) rotate(90deg);
    color: #f5f5f5; /* Light color for moon */
}

/* Dark mode adjustments */
.dark-mode #dropdownThemeToggle .sun {
    opacity: 0;
    transform: translateY(-20px) rotate(180deg);
}

.dark-mode #dropdownThemeToggle .moon {
    opacity: 1;
    transform: translateY(0) rotate(0deg);
}

/* Text Visibility */
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
    

        
/* Hero Section Styles */
        .hero {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 20px;
            margin-top: 0px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 15px;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 28px;
            margin-bottom: 8px;
            font-weight: 800;
            text-transform: uppercase;
             white-space: nowrap; /* Ensures text stays in one line */
            letter-spacing: 2px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: ;
           /* color:  var(--text); */
            animation: popIn 1s ease-out forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4s forwards;
            transform: scale(0);
            opacity: 0;
            
            color: transparent; background: linear-gradient(105.9deg, rgb(15, 209, 165) 3.8%, rgb(15, 157, 209) 20.8%, rgb(133, 13, 230) 51.9%, rgb(230, 13, 202) 73.1%, rgb(242, 180, 107) 94.1%); -webkit-background-clip: text; background-clip: text;
        }
        .hero p {
            font-size: 14px;
            margin-top: 4px;
            opacity: 0;
            margin-bottom: 15px;
            color:  var(--text);
            max-width: 100%;
            animation: fadeIn 1s ease-out 0.5s forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4s forwards;
            transform: translateY(20px);
        }


        .hero-btn {
            padding: 13px 15px;
            border-radius: 25px;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 8px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            background-color: transparent;
            color:  var(--text);
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            font-weight: 700;
            opacity: 0;
            transform: scale(0.5);
            animation: btnPopIn 1s ease-out 1s forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4s forwards;
            box-shadow:0 5px 10px rgba(0,0,0,0.1);
        }

        .hero-btn::before {
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


        @keyframes popIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            80% {
                transform: scale(1.1);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 0.9;
                transform: translateY(0);
            }
        }

        @keyframes btnPopIn {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }
            70% {
                transform: scale(1.1);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes rgbFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes vanish {
            0% {
                opacity: 1;
                transform: scale(1) translateY(0);
                filter: blur(0);
            }
            100% {
                opacity: 0;
                transform: scale(0.8) translateY(-20px);
                filter: blur(4px);
            }
        }
        

        /* NFT Slider Section - Centered with RGB Effects */
        .nft-slider-section {
            width: 100%;
            max-width: 500px;
            margin: 2 auto;
            padding: 15px;
        }
        
        .slider-header {
           margin-bottom: 10px;
            text-align: center;
        }
        
        .slider-header h2 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .nft-slider-container {
            position: relative;
            width: 100%;
            height: 265px;
            perspective: 1000px;
            overflow: visible;
           
        }
        
        .nft-carousel {
            position: relative;
            width: 100%;
            height: 100%;  
        }
        
        .nft-slide {
            position: absolute;
            width: 230px;
            height: 230px;
            left: 50%;
            top: 10px;
            margin-left: -115px;
     /*     background-color: #1e1e1e;  */
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            z-index: 1;
            
        }
        
        .nft-slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 20px;
            padding: 0px;
            background: linear-gradient(
                90deg,
                #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
            );
            background-size: 400% 400%;
            -webkit-mask: 
                linear-gradient(#fff 0 0) content-box, 
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            animation: rgbFlow 5s linear infinite;
            z-index: -1;
        }
        
        .nft-slide.active {
            transform: translateX(0) scale(1);
            z-index: 5;
            box-shadow:  0 5px 15px rgba(255, 255, 255, 0.2);
        }
        
        .nft-slide.prev {
            transform: translateX(-40px) scale(0.9);
            opacity: 0.85;
            z-index: 4;
        }
        
        .nft-slide.next {
            transform: translateX(40px) scale(0.9);
            opacity: 0.85;
            z-index: 4;
        }
        
        .nft-slide.far-prev {
            transform: translateX(-80px) scale(0.8);
            opacity: 0.6;
            z-index: 3;
        }
        
        .nft-slide.far-next {
            transform: translateX(80px) scale(0.8);
            opacity: 0.6;
            z-index: 3;
        }
        
        .nft-slide.hidden {
            opacity: 0;
            z-index: 1;
        }
        
        .nft-slide-image {
            width: 100%;
            height: 170px;
            background-size: cover;
            background-position: center;
            position: relative;
            
        }
        
        .nft-slide-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 60px;
            background: linear-gradient(to top, rgba(30, 30, 30, 0.9), transparent); 
        }
        
        .nft-slide-info {
            padding: 10px;
            text-align: center;
            background-color: rgba(30, 30, 30, 0.7);

            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }
        
        .current-bid {
            font-size: 13px;
            color: var(--text-light);
            margin-bottom: 1px;
        }
        
        .bid-amount {
            font-size: 16px;
            
            display: flex;
             color: white;
            align-items: center;
            justify-content: center;
            margin-bottom: 4px;
            gap: 5px;
        }
        
        .usdt-icon {
            color: #26a17b;
            font-size: 14px;
        }
        
        .usdt-logo {
        width: 16px;
        height: 16px;
        vertical-align: middle;
        margin-right: 2px;
        }
        
        @keyframes rgbFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }





        
        
        /* Featured Section */
        .featured-container {
        background-color: var(--bg);
        border-radius: 0px;
        padding: 0px;
        position: relative;
        overflow: hidden;
        margin-top: 15px auto;
       
    }
    
    .dotted-bg {
        position: absolute;
        top: 0;
        left: 0;
        margin-left: 0px;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(var(--text) 1px, transparent 2px);
        background-size: 15px 15px;
        opacity: 0.1;
        z-index: 0;
    }
    
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            margin-top: 15px;
        }
        
        .section-header h2 {
            font-size: 20px;
            font-weight: 600;
      
           
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
        
        
                /* Swipeable tabs */
.tabs {
    display: flex;
    overflow-x: auto;
    gap: 15px;
    padding-bottom: 12px;
    padding-top: 2px;
    margin-bottom: 10px;
    justify-content: center;
    -webkit-overflow-scrolling: touch;
}

.tabs::-webkit-scrollbar {
    display: none;
}

.tab {
    padding: 10px 10px;
    border-radius: 25px;
    font-size: 14px;
    white-space: nowrap;
    position: relative;
    overflow: hidden;
    z-index: 1;
    border: none;
    background: var(--border);
    color: var(--text);
    cursor: pointer;
    border: 1px solid var(--border);
    transition: all 0.3s ease;  
}

.tab::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
        90deg,
        #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff
    );
    background-size: 400% 400%;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.tab.active {
    color: white;
}

.tab.active::before {
    opacity: 1;
    animation: rgbFlow 4s linear infinite;
}

.tab:hover {
    transform: translateY(-2px);
    box-shadow:0 5px 10px rgba(0,0,0,0.1);
}



@keyframes rgbFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
        
        
        
        /* NFT Cards */
         
        .tab-content {
             margin-bottom: 20px;
             
            }

        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
        }
           
    
        .nft-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            
        }
        
        .nft-card {
            width: 100%;
            height: 235px;
            
            background-color: var(--card-bg)  !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--border);
            opacity: 0;
           
        }
        
        
        .nft-image-container {
            position: relative;
            width: 100%;
            padding: 12px;
            height: 130px;
            aspect-ratio: 1/1;
            border-radius: 15px 15px 15px 15px;
            
        }
        
.nft-image {
    width: 100%;
    height: 120px;
    object-fit: cover;
    background-size: cover;
    background-position: center;
    border-radius: 15px;
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.05);
    position: relative; /* Add this to make ::after positioning work */
}

.nft-image::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
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
    border-radius: 15px; /* Match the parent's border-radius */
}
        
        .like-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            width: 30px;
            height: 30px;
            background-color: rgba(0,0,0,0.5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        .nft-info {
            padding: 12px;

        }
        

        .nft-name {
            font-weight: 600;
            margin-bottom: 4px;
            font-size: 16px;
            margin-top: 5px;
        }
        
        .nft-collection {
            color: var(--text-light);
            font-size: 13px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        
        .verified {
            color: var(--primary);
            font-size: 40px;
            width: 14px;
            height: 14px;
            
        }
        
        .nft-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            justify-content: left;
            gap: 5px; font-size: 16px;
        }
        
        
        
    /*    .time-left {
             color: var(--text-light);
             font-size: 12px;
             margin-left: 10px ;
         }  */

        @keyframes cardSlideUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-card {
            animation: cardSlideUp 0.6s ease-out forwards;
        }
        
        
        
/* Add these styles to your existing CSS in home.blade.php */       

.nft-card {
    position: relative;
    overflow: hidden;
    transform-style: preserve-3d;
    transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1), 
                box-shadow 0.6s cubic-bezier(0.23, 1, 0.32, 1);
}

.nft-card:hover {
    transform: rotateY(10deg) rotateX(10deg) translateZ(10px);
   /* box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2) !important; */
}

/* Liquid background effect */
.nft-card::before {
    content: '';
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
    z-index: 0;
}

.nft-card:hover::before {
    transform: translateZ(-50px) translateY(30px) translateX(-20px) rotate(-20deg) scale(1.2);
    opacity: 0.7;
}

/* Shine effect */
.nft-card::after {
    content: '';
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
    z-index: 1;
}

.nft-card:hover::after {
    opacity: 1;
    animation: shine-effect 2s infinite linear;
}

/* Glow effect */
.nft-card .card__glow {
    position: absolute;
    inset: -15px;
    background: radial-gradient(
        circle at 50% 0%,
        rgba(255, 138, 101, 0.4) 0%,
        rgba(255, 138, 101, 0) 60%
    );
    opacity: 0;
    transition: opacity 0.6s ease-in-out;
    z-index: 0;
}

.nft-card:hover .card__glow {
    opacity: 0.5;
}

/* Image hover effect */
.nft-image-container {
    transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    position: relative;
    z-index: 2;
}

.nft-card:hover .nft-image-container {
    transform: translateY(-0px) scale(1.02);
}



/* Text hover effects */
.nft-name {
    transition: color 0.4s ease-in-out, transform 0.4s ease-in-out;
    position: relative;
    z-index: 2;
}

.nft-card:hover .nft-name {
    color: #ff8a65;
    transform: translateX(3px);
}

.nft-collection {
    transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
    position: relative;
    z-index: 2;
}

.nft-card:hover .nft-collection {
    opacity: 1;
    transform: translateX(3px);
}

/* Price hover effect */
.nft-price {
    transition: color 0.4s ease-in-out, transform 0.4s ease-in-out;
    position: relative;
    z-index: 2;
}

.nft-card:hover .nft-price {
    color: #ff8a65;
    transform: translateX(3px);
}

/* Like button hover effect */
.like-btn {
    transition: all 0.4s ease-in-out;
    z-index: 3;
}

.nft-card:hover .like-btn {
    transform: scale(1.1);
    background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff) !important;
    background-size: 400% 400% !important;
    animation: rgbFlow 4s ease infinite !important;
}

/* Keyframes for animations (add if not already present) */
@keyframes shine-effect {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(200%); }
}

@keyframes rgbFlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}



/* Add to your existing CSS */
.nft-price-container {
    display: flex;
    align-items: center;
    gap: 5px;
}
.countdown-timer {
    display: flex;
    align-items: center;
    gap: 1px;
    margin-left: 10px;
    font-size: 10px;
    color: var(--text-light);
}

.countdown-digit {
    background-color:var(--border);
    color: var(--primary);
    padding: 2px 2px;
    border-radius: 3px;
    font-family: monospace;
    font-weight: bold;
    min-width: 10px;
    text-align: center;
}

.countdown-separator {
    margin: 0 1px;
}

/* Add animation when timer resets */
@keyframes pulseReset {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); background-color: var(--success); color: white; }
    100% { transform: scale(1); }
}

.resetting {
    animation: pulseReset 0.5s ease;
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
            
/* Transparent Dropdown Menu with Glass Effect */
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
    font-size: 14px !important; /* Adjust this value for size */
    width: 18px !important;     /* Adjust for container width */
    height: 20px !important;    /* Adjust for container height */
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
    z-index: 99; /* Just below the dropdown menu */
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.menu-overlay.active {
    opacity: 1;
    visibility: visible;
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
    animation: popIn 0.6s ease-out forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4.5s forwards;

}

.logo-loading b {
    font-size: 26px;
    color: transparent;
    background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    -webkit-background-clip: text;
    background-clip: text;
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite,  popIn 0.6s ease-out forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4.5s forwards;  
}
        @keyframes popIn {
            0% {
                transform: scale(0.7);
                opacity: 0;
            }
            80% {
                transform: scale(1.1);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

.tagline {
    font-size: 14px;
    margin-top: 10px;
    color: var(--text-light);
    text-align: center;
    font-weight: normal;
    height: 20px;
    overflow: hidden;
    position: relative; 
}

.tagline-words {
    display: inline-block;
     white-space: nowrap;
}

.word {
    display: inline-block;
    opacity: 0;
    transform: translateY(20px);
    position: relative;
    margin: 0 1px;
    transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.word:nth-child(1) { transition-delay: 0.1s; }
.word:nth-child(2) { transition-delay: 0.2s; }
.word:nth-child(3) { transition-delay: 0.3s; }
.word:nth-child(4) { transition-delay: 0.4s; }
.word:nth-child(5) { transition-delay: 0.5s; }

.tagline.show .word {
    opacity: 1;
    transform: translateY(0);
}

/* Hide when done */
.loading-overlay.hide {
    opacity: 0;
    visibility: hidden;
}
</style> 
</head>

<body oncontextmenu="return false" onselectstart="return false">
    
<div class="loading-overlay" id="loadingOverlay">
    <div class="logo-loading">Future <b>NFT</b>
    <div class="tagline" id="loadingTagline">
            <span class="tagline-words">
                <span class="word">The</span>
                <span class="word">Future</span>
                <span class="word">of</span>
                <span class="word">Digital</span>
                <span class="word">Assets</span>
            </span>
        </div>
    </div> 
</div>   

<div class="menu-overlay" id="menuOverlay"></div>
    
<div class="body2">
<!-- Updated Navbar with transparent dropdown -->
<nav class="navbar">
    <div class="nav-left">
        <a href="" class="logo">Future <b>NFT</b></a>
    </div>
    <div class="nav-right">
        <a href="/user/login" class="rgb-btn-link">
        <button class="rgb-btn">
            <i class="fas fa-paper-plane"></i>
        </button>
        </a>
        
        
        <!-- From Uiverse.io by JulanDeAlb --> 
        <label class="hamburger">
        <input type="checkbox" id="hamburgerCheckbox">
        <svg viewBox="0 0 32 32">
            <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
            <path class="line" d="M7 16 27 16"></path>
        </svg>
        </label>
        
    </div>
    
    <!-- Transparent Dropdown Menu -->
    <div class="dropdown-menu" id="dropdownMenu">
        <div class="menu-items">
            <a href="/" class="menu-link">
                <i class="fas fa-home menu-icon"></i>
                <span class="menu-text">Home</span>
            </a>
            <a href="contact" class="menu-link">
                <i class="fas fa-question-circle menu-icon"></i>
                <span class="menu-text">Help</span>
            </a>
            <div href="" class="menu-link">
                <i class="fas fa-language menu-icon"></i>
                <span class="menu-text">English</span>
            </div>
            
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
        
        </div>
    </div>
</nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Metaverse Hero Section -->
        <div class="hero">
            
        <h1>UP TO 40% MONTHLY</h1>
        
        <p>The World's Largest NFT Marketplace</p>
        <button type="button" onclick="window.location.href='/user/login'" class="hero-btn">
            <i class="fas fa-rocket"></i>Explore Now
        </button>
    </div>

    <!-- NFT Slider Section -->
    <div class="nft-slider-section">
        <div class="slider-header">
            <h2>Trending NFTs</h2>
        </div>
        <div class="nft-slider-container">
            <div class="nft-carousel" id="nftCarousel">
                <div class="nft-slide active">
                    <div class="nft-slide-image" style="background-image: url('assets/nft/n2.avif')"></div>
                    <div class="nft-slide-info">
                        <div class="current-bid">Current Bid</div>
                        <div class="bid-amount">
                            <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                            106.63
                        </div>
                    </div>
                </div>
                <div class="nft-slide">
                    <div class="nft-slide-image" style="background-image: url('https://i.seadn.io/gae/7B0qai02OdHA8P_EOVK672qUliyjQdQDGNrACxs7WnTgZAkJa_wWURnIFKeOh5VTf8cfTqW3wQpozGedaC9mteKphEOtZls8RzEW?auto=format&w=384')"></div>
                    <div class="nft-slide-info">
                        <div class="current-bid">Current Bid</div>
                        <div class="bid-amount">
                            <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                            2,345.12
                        </div>
                    </div>
                </div>
                <div class="nft-slide">
                    <div class="nft-slide-image" style="background-image: url('https://i.seadn.io/gae/7B0qai02OdHA8P_EOVK672qUliyjQdQDGNrACxs7WnTgZAkJa_wWURnIFKeOh5VTf8cfTqW3wQpozGedaC9mteKphEOtZls8RzEW?auto=format&w=384')"></div>
                    <div class="nft-slide-info">
                        <div class="current-bid">Current Bid</div>
                        <div class="bid-amount">
                            <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                            3,789.45
                        </div>
                    </div>
                </div>
                <div class="nft-slide">
                    <div class="nft-slide-image" style="background-image: url('https://i.seadn.io/gae/Ju9CkWtV-1Okvf45wo8UctR-M9He2PjRIPwGSaVJgwZim5GNZzbc1gbpLI7FeY6z_PqLD7Q3RkZdk3WAE15X0WwX15WQQiUX-jz5Y?auto=format&w=384')"></div>
                    <div class="nft-slide-info">
                        <div class="current-bid">Current Bid</div>
                        <div class="bid-amount">
                            <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                            4,567.89
                        </div>
                    </div>
                </div>
                <div class="nft-slide">
                    <div class="nft-slide-image" style="background-image: url('https://i.seadn.io/gae/7B0qai02OdHA8P_EOVK672qUliyjQdQDGNrACxs7WnTgZAkJa_wWURnIFKeOh5VTf8cfTqW3wQpozGedaC9mteKphEOtZls8RzEW?auto=format&w=384')"></div>
                    <div class="nft-slide-info">
                        <div class="current-bid">Current Bid</div>
                        <div class="bid-amount">
                            <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                            5,432.10
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Featured Section -->
<div class="featured-container">
    <div class="dotted-bg"></div>
            <div class="section-header">
    <h2>Featured Collection</h2>
    <a href="/user/login" class="view-all">
        <i class="fas fa-server" aria-hidden="true"></i>  View All
    </a>
    </div>
        
<!-- Swipeable tabs -->
<div class="tabs">
    <div class="tab active" data-tab="stake">
        Stake
    </div>
    <div class="tab" data-tab="gaming">
        Gaming
    </div>
    <div class="tab" data-tab="art">
        Art
    </div>
    <div class="tab" data-tab="collectible">
        Collectible
    </div>
</div>

<!-- Tab Content -->
    <div class="tab-content">
                <!-- Stake Tab -->
                <div class="tab-pane active" id="stake">
                    <div class="nft-grid">
                        <!-- NFT Cards (8 total, 2 per row) -->
                        <div class="nft-card" data-nft-id="nft-1">
                            <div class="nft-image-container">
                                <div class="nft-image" style="background-image: url('assets/nft/n2.avif')"></div>
                                
                            </div>
                            
                            <div class="nft-info">
                                <div class="nft-name">Stake NFT #000104</div> 
                                <div class="nft-collection">
                                    Stake Collection
                                     <img src="assets/logo/Verified_Badge_Gray.svg.png"  class="verified" oncontextmenu="return false;">
                                </div>
                                <div class="nft-price">
                                        <div class="nft-price-container">
                                            <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                                            <div class="price">482.00</div>
                                            <div class="countdown-timer" data-initial-seconds="7200">
                                                <span class="countdown-digit hours">02</span>
                                                <span class="countdown-separator">:</span>
                                                <span class="countdown-digit minutes">00</span>
                                                <span class="countdown-separator">:</span>
                                                <span class="countdown-digit seconds">00</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="nft-card" data-nft-id="nft-2">
                            <div class="nft-image-container">
                                <div class="nft-image" style="background-image: url('assets/nft/n2.avif')"></div>
                               
                            </div>
                            <div class="nft-info">
                                <div class="nft-name">Stake NFT #000104</div>
                                <div class="nft-collection">
                                    Stake Collection
                                    <img src="assets/logo/Verified_Badge_Gray.svg.png"  class="verified" oncontextmenu="return false;">
                                </div>
                                <div class="nft-price">
                                        <div class="nft-price-container">
                                            <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                                            <div class="price">482.00</div>
                                            <div class="countdown-timer" data-initial-seconds="7200">
                                                <span class="countdown-digit hours">02</span>
                                                <span class="countdown-separator">:</span>
                                                <span class="countdown-digit minutes">00</span>
                                                <span class="countdown-separator">:</span>
                                                <span class="countdown-digit seconds">00</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="nft-card">
                            <div class="nft-image-container">
                                <div class="nft-image" style="background-image: url('assets/nft/n2.avif')"></div>
                               
                            </div>
                            <div class="nft-info">
                                <div class="nft-name">Stake NFT #000104</div>
                                <div class="nft-collection">
                                    Stake Collection
                                    <img src="assets/logo/Verified_Badge_Gray.svg.png"  class="verified" oncontextmenu="return false;">
                                </div>
                                <div class="nft-price">
                                    <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                                    <div class="price">482 USDT</div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="nft-card">
                            <div class="nft-image-container">
                                <div class="nft-image" style="background-image: url('assets/nft/n2.avif')"></div>
                                
                            </div>
                            <div class="nft-info">
                                <div class="nft-name">Stake NFT #000104</div>
                                <div class="nft-collection">
                                    Stake Collection
                                    <img src="assets/logo/Verified_Badge_Gray.svg.png"  class="verified" oncontextmenu="return false;">
                                </div>
                                <div class="nft-price">
                                    <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo " oncontextmenu="return false;">
                                    <div class="price">482 USDT</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="nft-card">
                            <div class="nft-image-container">
                                <div class="nft-image" style="background-image: url('assets/nft/n2.avif')"></div>
                                
                            </div>
                            <div class="nft-info">
                                <div class="nft-name">Stake NFT #000104</div>
                                <div class="nft-collection">
                                    Stake Collection
                                    <img src="assets/logo/Verified_Badge_Gray.svg.png"  class="verified" oncontextmenu="return false;">
                                </div>
                                <div class="nft-price">
                                    <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                                    <div class="price">482 USDT</div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="nft-card">
                            <div class="nft-image-container">
                                <div class="nft-image" style="background-image: url('assets/nft/n2.avif')"></div>
                                
                            </div>
                            <div class="nft-info">
                                <div class="nft-name">Stake NFT #000104</div>
                                <div class="nft-collection">
                                    Stake Collection
                                    <img src="assets/logo/Verified_Badge_Gray.svg.png"  class="verified" oncontextmenu="return false;">
                                </div>
                                <div class="nft-price">
                                    <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                                    <div class="price">482 USDT</div>
                                   
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>


                <!-- Other tabs (empty for now) -->
                <div class="tab-pane" id="gaming">
                  <div class="nft-grid">
                        <!-- NFT Cards (8 total, 2 per row) -->
                        <div class="nft-card">
                            <div class="nft-image-container">
                                <div class="nft-image" style="background-image: url('assets/nft/n2.avif')"></div>
                               
                            </div>
                            <div class="nft-info">
                                <div class="nft-name">Stake NFT #000104</div>
                                <div class="nft-collection">
                                    Stake Collection
                                    <img src="assets/logo/Verified_Badge_Gray.svg.png"  class="verified" oncontextmenu="return false;">
                                </div>
                                <div class="nft-price">
                                    <img src="assets/logo/tether-1.svg" alt="USDT" class="usdt-logo" oncontextmenu="return false;">
                                    <div class="price">482 USDT</div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="tab-pane" id="art"></div>
            <div class="tab-pane" id="collectible"></div>
    </div>
</div>        

    </div>
</div>

<x-mobile-menu /> 

    <script>
        // Dropdown menu functionality
const hamburgerCheckbox = document.getElementById('hamburgerCheckbox');
const dropdownMenu = document.getElementById('dropdownMenu');
const menuOverlay = document.getElementById('menuOverlay');
const menuLinks = document.querySelectorAll('.menu-link');
const hamburger = document.querySelector('.hamburger');

// Toggle menu when hamburger is clicked
hamburgerCheckbox.addEventListener('click', function(e) {
    e.stopPropagation();
    const isChecked = this.checked;
    toggleMenu(isChecked);
});

// Close menu when clicking overlay
menuOverlay.addEventListener('click', () => {
    hamburgerCheckbox.checked = false;
    toggleMenu(false);
});

// Close menu when clicking anywhere outside
document.addEventListener('click', (e) => {
    if (!dropdownMenu.contains(e.target) && e.target !== hamburgerCheckbox && !hamburger.contains(e.target)) {
        hamburgerCheckbox.checked = false;
        toggleMenu(false);
    }
});

// Function to handle menu toggling
function toggleMenu(shouldOpen) {
    if (shouldOpen) {
        dropdownMenu.classList.add('active');
        menuOverlay.classList.add('active');
    } else {
        dropdownMenu.classList.remove('active');
        menuOverlay.classList.remove('active');
    }
}

// Menu item click handling - modified to allow navigation
menuLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        // Close the menu
        hamburgerCheckbox.checked = false;
        toggleMenu(false);
        
        // Remove active class from all items
        menuLinks.forEach(item => item.classList.remove('active'));
        
        // Add active class to clicked item
        this.classList.add('active');
        
        // Allow the default link behavior to proceed
        // No need for preventDefault() since we want the links to work
    });
});
    



    
        
        // Mobile menu item click handling
const menuItems = document.querySelectorAll('.mobile-menu .menu-item');
menuItems.forEach(item => {
    item.addEventListener('click', function(e) {
        // Remove active class from all items
        menuItems.forEach(i => i.classList.remove('active'));
        
        // Add active class to clicked item
        this.classList.add('active');
    });
});
        

        
// Replace the existing theme toggle code with this:
document.addEventListener('DOMContentLoaded', function() {
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
            document.getElementById('hamburgerCheckbox').checked = false;
            toggleMenu(false);
        });
    }
});
        
        
// Reset animations every 5 seconds
        setInterval(function() {
            const elements = document.querySelectorAll('.hero h1, .hero p, .hero-btn');
            
            elements.forEach(el => {
                // Remove animations
                el.style.animation = 'none';
                
                // Trigger reflow
                void el.offsetWidth;
                
                // Re-add animations
                if(el.classList.contains('hero-btn')) {
                    el.style.animation = 'btnPopIn 1s ease-out 1s forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4s forwards';
                } else if(el.tagName === 'H1') {
                    el.style.animation = 'popIn 1s ease-out forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4s forwards';
                } else if(el.tagName === 'P') {
                    el.style.animation = 'fadeIn 1s ease-out 0.5s forwards, vanish 0.8s cubic-bezier(0.5, 0, 0.75, 0) 4s forwards';
                }
            });
        }, 5000);
    

        // NFT Slider Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('nftCarousel');
            const slides = Array.from(document.querySelectorAll('.nft-slide'));
            let currentIndex = 0;
            
            // Initialize slider
            function updateSlider() {
                slides.forEach((slide, index) => {
                    slide.classList.remove('active', 'prev', 'next', 'far-prev', 'far-next', 'hidden');
                    
                    const diff = (index - currentIndex + slides.length) % slides.length;
                    
                    if (index === currentIndex) {
                        slide.classList.add('active');
                    } 
                    else if (diff === 1 || diff === -(slides.length - 1)) {
                        slide.classList.add('next');
                    }
                    else if (diff === 2 || diff === -(slides.length - 2)) {
                        slide.classList.add('far-next');
                    }
                    else if (diff === slides.length - 1 || diff === -1) {
                        slide.classList.add('prev');
                    }
                    else if (diff === slides.length - 2 || diff === -2) {
                        slide.classList.add('far-prev');
                    }
                    else {
                        slide.classList.add('hidden');
                    }
                });
            }
            
            // Touch/swipe functionality
            let touchStartX = 0;
            let touchEndX = 0;
            let isDragging = false;
            
            carousel.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                isDragging = true;
            }, {passive: true});
            
            carousel.addEventListener('touchmove', (e) => {
                if (isDragging) {
                    touchEndX = e.changedTouches[0].screenX;
                    const difference = touchStartX - touchEndX;
                    const activeSlide = slides[currentIndex];
                    
                    // Temporary transform during drag
                    activeSlide.style.transform = `translateX(${-difference/5}px) scale(${1 - Math.abs(difference)/1000})`;
                    
                    // Adjust adjacent slides
                    const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
                    const nextIndex = (currentIndex + 1) % slides.length;
                    
                    if (difference > 0) {
                        slides[nextIndex].style.transform = `translateX(${80 - difference/10}px) scale(${0.9 + Math.abs(difference)/2000})`;
                    } else {
                        slides[prevIndex].style.transform = `translateX(${-80 - difference/10}px) scale(${0.9 + Math.abs(difference)/2000})`;
                    }
                }
            }, {passive: true});
            
            carousel.addEventListener('touchend', (e) => {
                if (isDragging) {
                    touchEndX = e.changedTouches[0].screenX;
                    handleSwipe();
                    isDragging = false;
                    
                    // Reset temporary transforms
                    slides.forEach(slide => {
                        slide.style.transform = '';
                    });
                }
            }, {passive: true});
            
            function handleSwipe() {
                const difference = touchStartX - touchEndX;
                const threshold = 100;
                
                if (difference > threshold) {
                    // Swipe left - next slide
                    currentIndex = (currentIndex + 1) % slides.length;
                } else if (difference < -threshold) {
                    // Swipe right - previous slide
                    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                }
                updateSlider();
            }
            
            // Mouse drag for desktop
            carousel.addEventListener('mousedown', (e) => {
                touchStartX = e.clientX;
                isDragging = true;
            });
            
            carousel.addEventListener('mousemove', (e) => {
                if (isDragging) {
                    touchEndX = e.clientX;
                    const difference = touchStartX - touchEndX;
                    const activeSlide = slides[currentIndex];
                    
                    activeSlide.style.transform = `translateX(${-difference/5}px) scale(${1 - Math.abs(difference)/1000})`;
                    
                    const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
                    const nextIndex = (currentIndex + 1) % slides.length;
                    
                    if (difference > 0) {
                        slides[nextIndex].style.transform = `translateX(${80 - difference/10}px) scale(${0.9 + Math.abs(difference)/2000})`;
                    } else {
                        slides[prevIndex].style.transform = `translateX(${-80 - difference/10}px) scale(${0.9 + Math.abs(difference)/2000})`;
                    }
                }
            });
            
            carousel.addEventListener('mouseup', () => {
                if (isDragging) {
                    handleSwipe();
                    isDragging = false;
                    
                    slides.forEach(slide => {
                        slide.style.transform = '';
                    });
                }
            });
            
            carousel.addEventListener('mouseleave', () => {
                if (isDragging) {
                    isDragging = false;
                    slides.forEach(slide => {
                        slide.style.transform = '';
                    });
                }
            });
            
            // Auto-rotate slides (optional)
            let slideInterval = setInterval(() => {
                if (!isDragging) {
                    currentIndex = (currentIndex + 1) % slides.length;
                    updateSlider();
                }
            }, 4000);
            
            // Initialize
            updateSlider();
        });



    


// Tab functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Hide all tab panes
            tabPanes.forEach(pane => pane.classList.remove('active'));
            
            // Show the corresponding tab pane
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
});    
    
    

    
    
    
// Scroll animation for NFT cards
document.addEventListener('DOMContentLoaded', function() {
    const nftCards = document.querySelectorAll('.nft-card');
    
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.75 &&
            rect.bottom >= 0
        );
    }
    
    // Function to handle scroll events
    function handleScroll() {
        nftCards.forEach(card => {
            if (isInViewport(card) && !card.classList.contains('animate-card')) {
                card.classList.add('animate-card');
            }
        });
    }
    
    // Initial check on page load
    handleScroll();
    
    // Check on scroll
    window.addEventListener('scroll', handleScroll);
    
    // Reset animations on refresh
    window.addEventListener('beforeunload', function() {
        nftCards.forEach(card => {
            card.classList.remove('animate-card');
        });
    });
});    


// Simple loading animation with refresh effect
const loadingOverlay = document.getElementById('loadingOverlay');
const loadingTagline = document.getElementById('loadingTagline');
const MIN_DISPLAY_TIME = 5000; // 2 seconds minimum

// Check if we've shown the loading in this session
if (!sessionStorage.getItem('loadingShown')) {
    // First time in this session
    sessionStorage.setItem('loadingShown', 'true');
    
    // Show tagline after 2 seconds with word-by-word animation
    setTimeout(() => {
        loadingTagline.classList.add('show');
        
        // Optional: Add a subtle floating animation
        const words = document.querySelectorAll('.word');
        words.forEach((word, index) => {
            word.style.setProperty('--y-offset', `${Math.sin(index * 0.5) * 5}px`);
            word.addEventListener('mouseover', () => {
                word.style.transform = `translateY(var(--y-offset)) scale(1.1)`;
            });
            word.addEventListener('mouseout', () => {
                word.style.transform = 'translateY(0)';
            });
        });
    }, 1200);

    function hideLoader() {
        // Animate out each word before hiding
        const words = document.querySelectorAll('.word');
        words.forEach((word, index) => {
            word.style.transition = `all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1) ${index * 0.05}s`;
            word.style.opacity = '0';
            word.style.transform = 'translateY(-20px)';
        });
        
        setTimeout(() => {
            loadingOverlay.classList.add('hide');
            setTimeout(() => {
                loadingOverlay.style.display = 'none';
            }, 500);
        }, 600); // Wait for word animations to complete
    }

    // Start hiding when everything is loaded
    window.addEventListener('load', function() {
        const elapsed = Date.now() - performance.timing.navigationStart;
        const remainingTime = Math.max(0, MIN_DISPLAY_TIME - elapsed);
        setTimeout(hideLoader, remainingTime);
    });

    // Fallback in case load event doesn't fire
    setTimeout(hideLoader, MIN_DISPLAY_TIME + 1000);
} else {
    // Already shown in this session - hide immediately
    loadingOverlay.style.display = 'none';
}


//----------------------------------------------------------------------------------------

// Function to generate random time between 30 min and 2 hours (in seconds)
function getRandomTime() {
    return Math.floor(Math.random() * (7200 - 1800 + 1)) + 1800; // 1800s=30min, 7200s=2hr
}

// Initialize all countdown timers
function initializeCountdownTimers() {
    const nftCards = document.querySelectorAll('.nft-card');
    
    nftCards.forEach((card, index) => {
        const timer = card.querySelector('.countdown-timer');
        if (!timer) return;
        const nftId = card.getAttribute('data-nft-id') || `nft-${index}`;
        card.setAttribute('data-nft-id', nftId);
        
        // Get or create initial time
        const storageKey = `nftTimer_${nftId}`;
        const now = Math.floor(Date.now() / 1000);
        
        let initialSeconds = parseInt(timer.getAttribute('data-initial-seconds')) || 7200;
        let endTime;
        
        // Check if we have a saved timer
        const savedTimer = localStorage.getItem(storageKey);
        
        if (savedTimer) {
            const { initial, end } = JSON.parse(savedTimer);
            initialSeconds = initial;
            endTime = end;
            
            // If timer should have already ended
            if (now >= endTime) {
                const timePassed = now - endTime;
                const cyclesPassed = Math.floor(timePassed / initialSeconds) + 1;
                endTime = endTime + (cyclesPassed * initialSeconds);
                localStorage.setItem(storageKey, JSON.stringify({ initial: initialSeconds, end: endTime }));
            }
        } else {
            // First time - set random time
            initialSeconds = getRandomTime();
            endTime = now + initialSeconds;
            localStorage.setItem(storageKey, JSON.stringify({ 
                initial: initialSeconds, 
                end: endTime 
            }));
        }
        
        timer.setAttribute('data-initial-seconds', initialSeconds);
        startCountdown(timer, nftId, initialSeconds, endTime);
    });
}

function startCountdown(timer, nftId, initialSeconds, endTime) {
    const storageKey = `nftTimer_${nftId}`;
    
    function updateTimer() {
        const now = Math.floor(Date.now() / 1000);
        let remaining = endTime - now;
        
        // Handle timer completion
        if (remaining <= 0) {
            remaining = 0;
            resetTimer(timer, nftId, initialSeconds);
            return;
        }
        
        // Calculate time units
        const hours = Math.floor(remaining / 3600).toString().padStart(2, '0');
        const minutes = Math.floor((remaining % 3600) / 60).toString().padStart(2, '0');
        const seconds = (remaining % 60).toString().padStart(2, '0');
        
        // Update display
        timer.querySelector('.hours').textContent = hours;
        timer.querySelector('.minutes').textContent = minutes;
        timer.querySelector('.seconds').textContent = seconds;
    }
    
    function resetTimer() {
        // Calculate new end time
        const now = Math.floor(Date.now() / 1000);
        const newEndTime = now + initialSeconds;
        
        // Update storage
        localStorage.setItem(storageKey, JSON.stringify({ 
            initial: initialSeconds, 
            end: newEndTime 
        }));
        
        // Add visual feedback
        const digits = timer.querySelectorAll('.countdown-digit');
        digits.forEach(digit => {
            digit.classList.add('resetting');
            setTimeout(() => digit.classList.remove('resetting'), 500);
        });
        
        // Restart countdown with new end time
        setTimeout(() => {
            startCountdown(timer, nftId, initialSeconds, newEndTime);
        }, 500);
    }
    
    // Update immediately and every second
    updateTimer();
    timer.countdownInterval = setInterval(updateTimer, 1000);
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initializeCountdownTimers);   

//----------------------------------------------------------------------------------------------------------   



    </script>
</body>
</html>