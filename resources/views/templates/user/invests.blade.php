<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - My Investments</title>
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
        
        
        /* Content styles */
        .dashboard-inner {
            padding: 15px;
            padding-bottom: 70px; /* Space for mobile menu */
        }
        
        .custom--card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .dark-mode .custom--card {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        /* Investment table styles */
        .invest-history {
            width: 100%;
            border-collapse: collapse;
        }
        
        .invest-history th, 
        .invest-history td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid var(--border);
            color: var(--text);
        }
        
        .invest-history th {
            font-weight: 600;
            background-color: var(--secondary);
        }
        
        .invest-history tr:hover {
            background-color: var(--secondary);
        }
        
        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .badge--success {
            background: rgba(53, 199, 127, 0.1);
            color: var(--success);
        }
        
        .badge--warning {
            background: rgba(255, 193, 7, 0.1);
            color: #ffc107;
        }
        
        .badge--danger {
            background: rgba(244, 67, 54, 0.1);
            color: #f44336;
        }
        
        .badge--info {
            background: rgba(33, 150, 243, 0.1);
            color: #2196f3;
        }
        

    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false">
    
    <x-loading-screen />  
    <x-navbar />

    <div class="menu-overlay" id="menuOverlay"></div>
    <div class="body2">

        <!-- Main Content -->
        <div class="dashboard-inner">
            <div class="mb-4">
                <p style="color: var(--text-light); margin-top:10px;  margin-bottom: 3px; font-size:15px;">Investment</p>
                <h3 style="color: var(--text);  margin-bottom: 0px; font-size:20px;">My Investment History</h3>
                
            </div>

            <div class="mt-4">
                @include($activeTemplate . 'partials.invest_history', ['invests' => $invests])

                @if ($invests->hasPages())
                    <div class="mt-5" style="margin-top: 20px;">
                        {{ $invests->links('components.custom-pagination') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    <x-mobile-menu />     

    <script>
    
    </script>
</body>
</html>