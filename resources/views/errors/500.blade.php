<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 | Server Error</title>
    <style>
        @import url(https://db.onlinewebfonts.com/c/a473f32ddaf0ac9ecbafb5cb7c0ba67e?family=Posterama+Text+W07+Regular);
        
        body {
            margin: 0;
            padding: 0;
            background-color: #fff;
            font-family: "Posterama Text W07 Regular", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            overflow: hidden;
            color: #e0e0e0;
        }
        
        .error-container {
            text-align: center;
            position: relative;
        }
        
        .lamp-container {
            width: 100px;
            height: 200px;
            margin: 0 auto 30px;
            position: relative;
            transform-origin: top center;
            animation: swing 3s infinite ease-in-out;
        }
        
        .lamp-cord {
            width: 2px;
            height: 100px;
            background-color: #aaa;
            margin: 0 auto;
            position: relative;
        }
        
        .lamp-shade {
            width: 60px;
            height: 30px;
            background-color: #aaa;
            border: 2px solid #aaa;
            border-radius: 50% 50% 0 0;
            margin: 0 auto;
            position: relative;
            top: -2px;
            box-shadow: 0 10px 30px rgba(100,100,100,0.3);
        }
        
        .light-beam {
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(ellipse at top, 
                                      rgba(255,255,150,0.4) 0%, 
                                      rgba(255,215,0,0.3) 30%, 
                                      rgba(255,165,0,0.2) 60%, 
                                      rgba(18,18,18,0) 90%);
            top: 60px;
            left: 50%;
            transform: translateX(-50%);
            z-index: -1;
            clip-path: polygon(40% 20%, 60% 20%, 80% 110%, 20% 110%);
            filter: blur(8px);
        }
        
        .error-code {
            font-size: 80px;
            font-weight: bold;
            color: #666;
            margin-top: 20px;
            position: relative;
            text-shadow: 0 0 15px rgba(255,255,255,0.4);
        }
        
        .error-message {
            font-size: 18px;
            color: #666;
            margin: 10px 0 30px;
            position: relative;
            text-shadow: 0 0 10px rgba(255,255,255,0.3);
        }
        
        .home-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 16px;
            transition: background-color 0.3s;
            font-family: "Posterama Text W07 Regular", sans-serif;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
            -webkit-tap-highlight-color: transparent;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;    
        }
        
        .home-btn:hover {
            background-color: #666;
        }
        
        @keyframes swing {
            0% { transform: rotate(5deg); }
            50% { transform: rotate(-5deg); }
            100% { transform: rotate(5deg); }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="lamp-container">
            <div class="lamp-cord"></div>
            <div class="lamp-shade"></div>
            <div class="light-beam"></div>
        </div>
        
        <div class="error-code">500</div>
        <div class="error-message">Internal Server Error</div>
        <a href="{{ route('home') }}" class="home-btn">Return Home</a>
    </div>
</body>
</html>