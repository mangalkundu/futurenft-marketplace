<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Transactions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
            --danger: #ff4d4d;
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
            --danger: #ff4d4d;
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
            padding-bottom: 70px;
        }
        
        
        /* Transfer Section */
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
        
        /* Transactions Card */
        .transactions-card {
            width: 100%;
            background-color: var(--card-bg);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--border);
            margin-bottom: 0px;
        }
        
        .transaction-item {
            display: flex;
            flex-direction: column;
            padding: 15px 5px 15px 0px;
            border-bottom: 1px solid var(--border);
            cursor: pointer;
        }
        
        .transaction-item:last-child {
            border-bottom: none;
        }
        
        .transaction-main {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .transaction-info {
            display: flex;
            align-items: center;
            gap: 12px;
            flex: 1;
        }
        
        .transaction-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }
        
        .transaction-icon.plus {
            background-color: rgba(53, 199, 127, 0.1);
            color: var(--success);
        }
        
        .transaction-icon.minus {
            background-color: rgba(255, 77, 77, 0.1);
            color: #ff4d4d;
        }
        
        .transaction-content {
            flex: 1;
        }
        
        .transaction-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 5px;
        }
        
        .transaction-details {
            font-size: 13px;
            color: var(--text-light);
        }
        
        .transaction-amount {
            text-align: right;
        }
        
        .transaction-amount .amount {
            font-size: 14px;
            font-weight: 700;
            color: var(--text); margin-bottom: 5px;
        }
        
        .transaction-amount .balance {
            font-size: 13px;
            color: var(--text-light);
        }
        
        .text-success {
            color: var(--success) !important; 
        }

        .text-danger {
            color: var(--danger)  !important;
        }
        
        .transaction-more {
            margin-top: 15px;
            padding: 15px;
            background-color: var(--secondary);
            border-radius: 15px;
            display: none;
            
        }
        
        .transaction-more.show {
            display: block;
        }
        
        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px dashed var(--border);
        }
        
        .detail-row:last-child {
            border-bottom: none;
        }
        
        .detail-label {
            color: var(--text-light);
            font-size: 14px;
        }
        
        .detail-value {
            color: var(--text-light);
            font-size: 14px;
        }
        
        .empty-message {
            text-align: center;
            padding: 30px;
            color: var(--text-light);
            font-size: 15px;
            
        }
        
        .empty-message i {
            font-size: 25px;
            margin-bottom: 10px;
        }
        
.copy-btn {
    background: none;
    border: none;
    color: var(--text-light);
    cursor: pointer;
    padding: 0;
    font-size: 14px;
    transition: all 0.3s ease;
    width: 25px;
    height: 25px;
    border-radius: 50%; 
}

.copy-btn:hover {
    color: var(--text);
    background-color: rgba(0, 0, 0, 0.05);
}

.copy-btn:active {
    transform: scale(1.2);
}


        
        
        /* Filter Card */
        .filter-card {
            width: 100%;
            background-color: var(--card-bg);
            border-radius: 20px;
            padding: 20px 20px 10px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--border);
            margin-bottom: 20px;
            
        }
        
        .filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .filter-group {
            flex: 1;
            min-width: 0;
        }
        
        .filter-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: var(--text);
        }
        
        .filter-input {
            width: 100%;
            padding: 12px 15px;
            border-radius: 25px;
            border: 1px solid var(--border);
            background-color: var(--secondary);
            color: var(--text);
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .filter-input:focus {
            outline: none;
            border: 1px solid transparent;
            background-origin: border-box;
            background-clip: padding-box, border-box;
            background-image: linear-gradient(var(--card-bg), var(--card-bg)), 
                      linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 100% 100%, 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
        
        .search-box {
            position: relative;
        }
        
        .search-button {
            position: absolute;
            right: 10px;
            top: 37px;
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
            font-size: 14px;
        }
        
        
        /* Responsive adjustments */
        @media (max-width: 350px) {
            .body2 {
                padding-bottom: 70px;
            }
            
            .filter-row {
                flex-direction: column;
            }
            
            .filter-group {
                min-width: 100%;
            }
            
            .transaction-main {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .transaction-amount {
                text-align: left;
                width: 100%;
                padding-left: 52px; /* icon width + gap */
            }
        }
    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false">

    <x-loading-screen />  
    <x-navbar />

    <div class="menu-overlay" id="menuOverlay"></div>
    <div class="body2">

        <!-- Transactions Section -->
        <div class="transfer-section">
            <div class="transfer-header">
                <p>Account</p>
                <h1>Transactions History</h1>
                <p>View all your transaction history including deposits, withdrawals, transfers, and more.</p>
            </div>
            
            <!-- Filter Card -->
    <div class="filter-card">
        <form id="filterForm" action="{{ url()->current() }}" method="GET">
            <!-- Search and Wallet row -->
            <div class="filter-row">
                <div class="filter-group search-box" style="flex: 1;">
                    <label class="filter-label">Transaction Number</label>
                    <input type="text" name="search" value="{{ request()->search}}" class="filter-input" placeholder="Search by transaction number">
                    <button type="submit" class="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>    
            <div class="filter-row">
                <div class="filter-group" style="flex: 1;">
                    <label class="filter-label">Wallet</label>
                    <select name="wallet_type" class="filter-input">
                        <option value="">All Wallets</option>
                        <option value="deposit_wallet" @selected(request()->wallet_type == 'deposit_wallet')>Deposit Wallet</option>
                        <option value="interest_wallet" @selected(request()->wallet_type == 'interest_wallet')>Interest Wallet</option>
                    </select>
                </div>
            </div>
            
            <!-- Type and Remark in same row -->
            <div class="filter-row">
                <div class="filter-group" style="flex: 1;">
                    <label class="filter-label">Type</label>
                    <select name="trx_type" class="filter-input">
                        <option value="">All Types</option>
                        <option value="-" @selected(request()->trx_type == '-')>Debits</option>
                        <option value="+" @selected(request()->trx_type == '+')>Credits</option>
                        
                    </select>
                </div>
                
                <div class="filter-group" style="flex: 1;">
                    <label class="filter-label">Remark</label>
                    <select name="remark" class="filter-input">
                        <option value="">Any Remark</option>
                        @foreach ($remarks as $remark)
                            <option value="{{ $remark->remark }}" @selected(request()->remark == $remark->remark)>{{ __(keyToTitle($remark->remark)) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
    </div>
            
            <!-- Transactions Card -->
            <div class="transactions-card">
                @forelse($transactions as $transaction)
                    <div class="transaction-item" onclick="toggleTransactionDetails(this)">
                        <div class="transaction-main">
                            <div class="transaction-info">
                                <div class="transaction-icon @if($transaction->trx_type == '+') plus @else minus @endif">
                                    <i class="fas @if($transaction->trx_type == '+') fa-plus @else fa-minus @endif"></i>
                                </div>
                                <div class="transaction-content">
                                    <div class="transaction-title">{{ __(keyToTitle($transaction->remark)) }}</div>
                                    <div class="transaction-details">
                                        {{ showDateTime($transaction->created_at, 'M d Y @g:i A') }}
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="transaction-amount">
                                <div class="amount @if($transaction->trx_type == '+') text-success @else text-danger @endif">
                                    {{ $transaction->trx_type }}{{ showAmount($transaction->amount, currencyFormat:false) }} {{ gs('cur_text') }}
                                    </div>
                                <div class="balance">Balance: {{ showAmount($transaction->post_balance, currencyFormat:false) }} {{ gs('cur_text') }}</div>
                            </div>
                        </div>
                        
                        <div class="transaction-more">
                            <div class="detail-row">
                                <span class="detail-label">Wallet:</span>
                                <span class="detail-value">{{ __(keyToTitle($transaction->wallet_type)) }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Charge:</span>
                                <span class="detail-value">{{ showAmount($transaction->charge, currencyFormat:false) }} {{ gs('cur_text') }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Trx. ID:</span>
                                <span class="detail-value">{{ $transaction->trx }}
                                    <button class="copy-btn" data-text="{{ $transaction->trx }}" title="Copy to clipboard">
                                        <i class="fas fa-copy"></i> <!-- Line Awesome copy icon -->
                                    </button>
                                </span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Details:</span>
                                <span class="detail-value" style="text-align: right;">{{ __($transaction->details) }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="empty-message">
                        <i class="far fa-frown"></i>
                        <p>{{ __($emptyMessage) }}</p>
                    </div>
                @endforelse
            </div>
        </div>
                @if ($transactions->hasPages())
                    <div class="mt-5">
                        {{ $transactions->links('components.custom-pagination') }}
                    </div>
                @endif
    </div>

    <x-mobile-menu /> 
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            
            // Auto-submit form when any filter changes
            $('.filter-input').on('change', function() {
                $('#filterForm').submit();
            });

            // Handle search button click
            $('.search-button').on('click', function(e) {
                e.preventDefault();
                $('#filterForm').submit();
            });

            // Handle pressing Enter in search field
            $('input[name="search"]').on('keypress', function(e) {
                if (e.which === 13) {
                    $('#filterForm').submit();
                }
            });
            
            
        });
        


        // Toggle transaction details
        function toggleTransactionDetails(element) {
            const details = element.querySelector('.transaction-more');
            details.classList.toggle('show');
            
            // Close other open details
            document.querySelectorAll('.transaction-more').forEach(item => {
                if (item !== details && item.classList.contains('show')) {
                    item.classList.remove('show');
                }
            });
        }
        
        // Handle pagination links to maintain filter parameters
        document.querySelectorAll('.pagination a').forEach(link => {
            const url = new URL(link.href);
            const params = new URLSearchParams(window.location.search);
            
            // Add existing filter parameters to pagination links
            ['search', 'wallet_type', 'trx_type', 'remark'].forEach(param => {
                if (params.has(param) && !url.searchParams.has(param)) {
                    url.searchParams.set(param, params.get(param));
                }
            });
            
            link.href = url.toString();
        });
        
// Exact copy functionality from dashboard
document.querySelectorAll('.copy-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.stopPropagation();
        const textToCopy = this.getAttribute('data-text');
        
        navigator.clipboard.writeText(textToCopy).then(() => {
            // Animation matches dashboard exactly
            this.innerHTML = '<i class="fas fa-check"></i>';
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-copy"></i>';
            }, 2000);
        });
    });
});


    </script>
</body>
</html>