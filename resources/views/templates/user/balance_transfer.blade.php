<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Balance Transfer</title>
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
        
        
        /* Transfer Form Styles */
        .transfer-section {
            width: 100%;
            padding: 20px 15px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        
        .transfer-header {
            text-align: left;
            margin-bottom: 20px;
            width: 100%; 
        }
        
        .transfer-header h1 {
            font-size: 20px;
            margin-bottom: 10px;
            background-clip: text;
            color: var(--text);
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite; 
        }
        
        .transfer-header p {
            color: var(--text-light);
            font-size: 15px;
            margin-top:5px; 
            margin-bottom: 3px;
            text-align: justify;
            
        }
        
        .transfer-card {
            width: 100%;
            
            background-color: var(--card-bg);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--border);

        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
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
            border: 1px solid transparent;
            background-origin: border-box;
            background-clip: padding-box, border-box;
            background-image: linear-gradient(var(--card-bg), var(--card-bg)), 
                      linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 100% 100%, 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
        
        .input-group {
            display: flex;
            align-items: center;
        }
        
        .input-group .form-control {
            border-radius: 25px 0 0 25px;
            flex: 1;
        }
        
        .input-group-text {
            padding: 12px 15px;
            background-color: var(--secondary);
            border: 1px solid var(--border);
            border-left: none;
            border-radius: 0 25px 25px 0;
            color: var(--text);
            font-size: 14px;
        }
        
        .btn-submit {
            width: 100%;
            padding: 13px 15px;
            border-radius: 25px;
            border: none;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            color: white;
            margin-top: 5px;
            margin-bottom: -10px;
        }
        
        .error-message {
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
        .error-message i.fas {
            margin-right: 2px;
        }
        
        .calculation {
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
        .calculation i.fas {
            margin-right: 2px;
        }

    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false">

    <x-loading-screen />  
    <x-navbar />

    <div class="menu-overlay" id="menuOverlay"></div>
    <div class="body2">
        
        <!-- Transfer Section -->
        <div class="transfer-section">
            <div class="transfer-header">
                <p>Account</p>
                <h1>Balance Transfer</h1>
                <p>You can transfer the balance to another user from your deposit wallet. The transferred amount will be added to the deposit wallet of the targeted user.</p>
            </div>
            
@if($errors->any())
    <x-alert type="error" :message="$errors->first()" />
@endif

@if(session()->has('notify'))
    @foreach(session('notify') as $message)
        <x-alert :type="$message[0]" :message="$message[1]" />
    @endforeach
@endif
            
            
            <div class="transfer-card">
                <form method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group"> 
                        <label class="form-label">Wallet</label>
                        <select class="form-control" name="wallet" required>
                            <option value="">Select Payment Wallet</option>
                            <option value="deposit_wallet">Deposit Wallet - {{ showAmount(auth()->user()->deposit_wallet, currencyFormat:false) }} {{ gs('cur_text') }}</option>
                            <option value="interest_wallet" disabled>Interest Wallet - {{ showAmount(auth()->user()->interest_wallet, currencyFormat:false) }} {{ gs('cur_text') }}</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control findUser" required>
                        <code class="error-message"></code>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Amount <small style="color: var(--success); font-size:13px; margin-left: 2px;">(Charge: {{ showAmount(gs('f_charge'), currencyFormat:false) }} {{ gs('cur_text') }} + {{ getAmount(gs('p_charge')) }}%)</small></label>
                        <div class="input-group">
                            <input type="number" step="any" autocomplete="off" name="amount" class="form-control" required>
                            <span class="input-group-text">{{ gs('cur_text') }}</span>
                        </div>
                        <code class="calculation"></code>
                    </div>

                    @if (auth()->user()->ts)
                        <div class="form-group">
                            <label class="form-label">Google Authenticator Code</label>
                            <input type="text" name="authenticator_code" class="form-control" required>
                        </div>
                    @endif

                    <div class="form-group mt-3">
                        <button type="submit" class="btn-submit">Transfer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-mobile-menu /> 
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

                // Amount calculation
                $('input[name=amount]').on('input', function() {
                    var amo = parseFloat($(this).val());
                    var calculation = amo + (parseFloat({{ gs('f_charge') }}) + (amo * parseFloat({{ gs('p_charge') }})) / 100);
                    if (calculation) {
                        $('.calculation').html('<i class="fas fa-exclamation-circle"></i> ' + calculation + ' {{ gs('cur_text') }} will be debited from your wallet.');
                    } else {
                        $('.calculation').html('');
                    }
                });
            
            // Find user functionality
            $('.findUser').on('focusout', function(e) {
                var url = '{{ route('user.findUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';

                var data = {
                    username: value,
                    _token: token
                }
                $.post(url, data, function(response) {
                    const errorElement = $('.error-message');
                    if (response.message) {
                        errorElement.html(`<i class="fas fa-exclamation-circle"></i> ${response.message}`)
                                .css('display', 'block')
                                .addClass('show');
                    } else {
                        errorElement.removeClass('show');
                        setTimeout(() => errorElement.css('display', 'none'), 300);
                    }
                });
            });
            
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
            
        });
            
    </script>
</body>
</html>