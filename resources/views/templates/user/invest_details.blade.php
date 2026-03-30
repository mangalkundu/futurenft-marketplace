<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Investment Details</title>
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
        }
        
        
        /* Content styles */
        .dashboard-inner {
            padding: 15px;
            padding-bottom: 75px; /* Space for mobile menu */
        }
        
        .custom--card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);  
            padding: 20px;  
        }
        
        .dark-mode .custom--card {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            padding: 13px 15px;
            background: linear-gradient(135deg, var(--secondary), transparent);
            border: 1px solid var(--border);
            border-radius: 50px;
        }
        
        .card-header .title {
            font-size: 18px;
            font-weight: 700;
            margin: 0;
            color: var(--text);
        }
        
        .card-body {
            padding: 15px;
            font-size: 14px; 
            
        }
        
        .list-group {
            list-style: none;
            padding: 0;
            margin: 0;  margin-bottom: -20px;
        }
        
        .list-group-item {
            padding: 12px 0;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid var(--border);
            color: var(--text-light);
            
        }
        
        .list-group-item:last-child {
            border-bottom: none;
        }
        
        .badge {
            padding: 5px 10px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 0;
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
        
        .btn--base {
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn--base:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn--smd {
            padding: 8px 16px;
            font-size: 14px;
        }
        
        .modal-content {
            background-color: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 15px;
        }
        
        .modal-header {
            border-bottom: 1px solid var(--border);
        }
        
        .modal-title {
            color: var(--text);
        }
        
        .close {
            color: var(--text);
            opacity: 0.8;
        }
        
        .form--control {
            background-color: var(--secondary);
            border: 1px solid var(--border);
            color: var(--text);
            border-radius: 10px;
            padding: 10px 15px;
        }
        
        .form--control:focus {
            background-color: var(--secondary);
            color: var(--text);
            border-color: var(--primary);
        }
        
        .accordion-item {
            background-color: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 10px;
            margin-bottom: 10px;
        }
        
        .accordion-button {
            background-color: var(--card-bg);
            color: var(--text);
        }
        
        .accordion-button:not(.collapsed) {
            background-color: var(--secondary);
            color: var(--text);
        }
        
        .accordion-body {
            background-color: var(--secondary);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        
        @keyframes rgbFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        
/* Add these styles to your existing CSS */
.table {
    width: 100%;
    border-collapse: collapse;
    
}

.table th {
    padding: 12px 15px;
    text-align: left;
    background-color: var(--secondary);
    border-bottom: 2px solid var(--border);
    font-weight: 600;
    color: var(--text); font-size: 14px;
}

.table td {
    padding: 12px 15px;
    border-bottom: 1px solid var(--border);
    vertical-align: middle; 
    color: var(--text-light); font-size: 14px;
}

.table tr:last-child td {
    border-bottom: none;
}

.text-success {
    color: var(--success);
}

.text-danger {
    color: #f44336;
}

.table--responsive--md {
    overflow: hidden;
}

@media (max-width: 500px) {
    .table--responsive--md {
        display: block;
        width: 100%;
        overflow-x: auto;
    }
    
    .table--responsive--md th,
    .table--responsive--md td {
        white-space: nowrap;
    }
}

.empty-thumb {
            text-align: center;
            padding: 30px;
            color: var(--text-light);
            font-size: 15px;
}

.empty-thumb i {
            font-size: 25px;
            margin-bottom: 10px;
}


/* ===== Transaction Styles ===== */
.transaction-item {
    padding: 15px 5px 15px 0px;
    border-bottom: 1px solid var(--border);
    cursor: pointer;
    transition: background 0.2s;
}
.transaction-item:last-child {
            border-bottom: none;
        }
.transaction-item:first-child {
        margin-top: 15px;
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
.transaction-details small {
    display: block;
    margin-top: 3px;
}
.transaction-amount {
    text-align: right;
}
.transaction-amount .amount {
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 5px;
}
.transaction-amount .balance {
    font-size: 13px;
    color: var(--text-light);
}
.transaction-more {
    display: none;
    margin-top: 15px;
    padding: 15px;
    background-color: var(--secondary);
    border-radius: 15px;
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

    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false">

    <x-loading-screen />  
    <x-navbar />

    <div class="menu-overlay" id="menuOverlay"></div>
    <div class="body2">

        <!-- Main Content -->
        <div class="dashboard-inner">
            <div>
                <p style="color: var(--text-light); margin-top:10px;  margin-bottom: 3px; font-size:15px;">Investment</p>
                <div class="d-flex flex-wrap justify-content-between mb-4">
                    <h3 style="color: var(--text);  margin-bottom: 20px; font-size:20px;">Investment Details</h3>
                    @if ($invest->eligibleCapitalBack())
                    <button class="capital-button manageCapital" data-id="{{ $invest->id }}">
                        <i class="fas fa-hand-holding-usd"></i>
                        Manage Capital
                    </button>
                    @endif
                </div>
            </div>
            <div class="row gy-3">
                <div class="col-xl-4">
                    <div class="custom--card">
                        <div class="card-header">
                            <h5 class="title">Plan Information</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @php
                                    $plan = $invest->plan;
                                @endphp
                                <li class="list-group-item d-flex justify-content-between">
                                    Plan Name
                                    <span>{{ __($plan->name) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Investable Amount
                                    <span>
                                        @if ($plan->fixed_amount > 0)
                                            {{ showAmount($plan->fixed_amount, currencyFormat:false) }} {{ gs('cur_text') }}
                                        @else
                                            {{ showAmount($plan->minimum, currencyFormat:false) }} {{ gs('cur_text') }} - {{ showAmount($plan->maximum, currencyFormat:false) }} {{ gs('cur_text') }}
                                        @endif
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Interest
                                    <span>{{ showAmount($plan->interest, currencyFormat: false) }}{{ $plan->interest_type == 1 ? '%' : " gs('cur_text')" }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Compound Interest
                                    <span>
                                        @if ($plan->compound_interest)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Hold Capital
                                    <span>
                                        @if ($plan->hold_capital)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Repeat Time
                                    <span>
                                        @if ($plan->repeat_time)
                                            {{ $plan->repeat_time }} times
                                        @else
                                            Lifetime
                                        @endif
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Status
                                    <span>
                                        @if ($plan->status)
                                            <span class="badge badge--success">Enable</span>
                                        @else
                                            <span class="badge badge--warning">Disable</span>
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="custom--card">
                        <div class="card-header">
                            <h5 class="title">Basic Information</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    Initial Invest
                                    <span>{{ showAmount($invest->initial_amount, currencyFormat:false) }} {{ gs('cur_text') }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Current Invest
                                    <span>{{ showAmount($invest->amount, currencyFormat:false) }} {{ gs('cur_text') }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Invested
                                    <span>{{ showDateTime($invest->created_at) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Initial Interest
                                    <span>{{ showAmount($invest->initial_interest, currencyFormat:false) }} {{ gs('cur_text') }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Current Interest
                                    <span>{{ showAmount($invest->interest, currencyFormat:false) }} {{ gs('cur_text') }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Interest Interval
                                    <span>Every {{ $invest->time_name }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Status
                                    <span>
                                        @if ($invest->status == 1)
                                            <span class="badge badge--success">Running</span>
                                        @elseif($invest->status == 2)
                                            <span class="badge badge--danger">Canceled</span>
                                        @else
                                            <span class="badge badge--info">Completed</span>
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="custom--card">
                        <div class="card-header">
                            <h5 class="title">Other Information</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    Total Payable
                                    <span>
                                        @if ($invest->period != -1)
                                            {{ $invest->period }} times
                                        @else
                                            Lifetime
                                        @endif
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Total Paid
                                    <span>{{ $invest->return_rec_time }} times</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Total Paid Amount
                                    <span>{{ showAmount($invest->paid, currencyFormat:false) }} {{ gs('cur_text') }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Should Pay
                                    <span>
                                        @if ($invest->should_pay != -1)
                                            {{ showAmount($invest->should_pay, currencyFormat:false) }} {{ gs('cur_text') }}
                                        @else
                                            **
                                        @endif
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Last Paid Time
                                    <span>{{ showDateTime($invest->last_time) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Next Pay Time
                                    <span>{{ showDateTime($invest->next_time) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    Net Interest
                                    <span>{{ showAmount($invest->net_interest, currencyFormat:false) }} {{ gs('cur_text') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>




<div class="custom--card">
    <div class="card-header">
        <h5 class="title">Interest History</h5>
    </div>
    <div class="p-0">
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
                        <div class="balance">
                            Balance: {{ showAmount($transaction->post_balance, currencyFormat:false) }} {{ gs('cur_text') }}
                        </div>
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
                        <span class="detail-label">Trx ID:</span>
                        <span class="detail-value">
                            {{ $transaction->trx }}
                            <button class="copy-btn" data-text="{{ $transaction->trx }}" title="Copy to clipboard">
                                <i class="fas fa-copy"></i>
                            </button>
                        </span>
                    </div>
                   
                </div>
            </div>
        @empty
            <div class="empty-thumb">
                <i class="far fa-frown"></i>
                <p>{{ __($emptyMessage) }}</p>
            </div>
        @endforelse
    </div>
</div>

@if ($transactions->hasPages())
    <div class="mt-5" style="margin-top: 20px;">
        {{ $transactions->links('components.custom-pagination') }}
    </div>
@endif

</div>

        <!-- Capital Modal -->
<!--        <div class="modal fade" id="capitalModal">
            <div class="modal-dialog modal-dialog-centered modal-content-bg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Manage Invest Capital</h5>
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="las la-times"></i>
                        </button>
                    </div>
                    <form action="{{ route('user.invest.capital.manage') }}" method="post">
                        @csrf
                        <input type="hidden" name="invest_id" value="{{ $invest->id }}">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Investment Capital</label>
                                <select name="capital" class="form-control form--control form-select select2" data-minimum-results-for-search="-1">
                                    <option value="reinvest">Reinvest</option>
                                    <option value="capital_back">Capital Back</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn--base w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>   -->
    </div>
    
    <x-mobile-menu /> 

    <script>
        
    // Toggle transaction details with auto-close
    function toggleTransactionDetails(element) {
        const details = element.querySelector('.transaction-more');
        
        // Close previously opened transaction
        if (currentlyOpenTransaction && currentlyOpenTransaction !== details) {
            currentlyOpenTransaction.style.display = 'none';
        }
        
        // Toggle current transaction
        if (details.style.display === 'block') {
            details.style.display = 'none';
            currentlyOpenTransaction = null;
        } else {
            details.style.display = 'block';
            currentlyOpenTransaction = details;
        }
    }
        // Track currently open transaction
    let currentlyOpenTransaction = null;

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