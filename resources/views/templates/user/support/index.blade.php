<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Support Tickets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @include('components.font')
    
    <style>
       
        
        :root {
            --primary: #2081e2;
            --primary-light: #e8f4fd;
            --secondary: #f7f7f7;
            --text: #04111d;
            --text2: #f5f5f5;
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
            --text2: #04111d;
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
            padding-bottom: 20px;
        }
            
        
        /* Ticket Styles */
        .ticket-section {
            width: 100%;
            padding: 20px 15px;
            margin-bottom: 55px;
        }
        
        .ticket-header {
            text-align: left;
            margin-bottom: 20px;
        }
        
        .ticket-header h1 {
            font-size: 20px;
            margin-bottom: 10px;
            background-clip: text;
            color: var(--text);
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }
        
        .ticket-header p {
            color: var(--text-light);
            font-size: 15px;
            margin-top: 5px;  
            margin-bottom: 3px;
            text-align: justify;
        }
        
        .ticket-card {
            width: 100%;
            background-color: var(--card-bg);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--border);
            padding-bottom: 30px;
        }
        
.btn--base {
            background: transparent;
            animation: rgbFlow 6s ease infinite;
            color: var(--text);
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            border-radius: 25px;
            padding: 13px 15px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.btn--base::before {
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

/* Add this to your CSS */
.btn--base {
    position: relative;
    min-width: 110px;
}

.btn--base .button-content {
    display: flex;
    align-items: center;
    gap: 8px;
    transition: opacity 0.2s ease;
}

.btn--base .loading-spinner {
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
    color: var(--text);
}

.btn--base.loading .button-content {
    opacity: 0;
}

.btn--base.loading .loading-spinner {
    opacity: 1;
    display: flex !important;
}
        
        
    .ticket-list-container {
        width: 100%;
        
    }

    .ticket-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .ticket-item {
        background-color: var(--card-bg);
        border-radius: 15px;
        padding: 18px;
        border: 1px solid var(--border);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        
    }


    .ticket-header2 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
    }

    .ticket-id {
        font-size: 14px;
        color: var(--text-light);
        font-weight: 600;
    }

    .ticket-subject {
        font-size: 16px;
        margin: 0 0 15px 0;
        color: var(--text);
    }

    .ticket-subject a {
        color: inherit;
        text-decoration: none;
    }

    .ticket-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        
    }

    .ticket-date {
        font-size: 13px;
        color: var(--text-light);
    }

    .ticket-action {
        color: var(--primary);
        font-size: 14px;
        text-decoration: none;
    }

    .empty-state {
        text-align: center;
        padding: 30px;
        color: var(--text-light);
        font-size: 15px;
    }

    .empty-state i {
        font-size: 25px;
        margin-bottom: 10px;
    }

    .empty-state h4 {
        margin: 0;
        font-weight: normal;
    }
    
        .badge {
            padding: 5px 10px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 0;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

/* Priority Badges */
.badge--low {
    background-color: var(--primary-light); /* Light background for low priority */
    color: var(--text-light); /* Text color for low priority */
}

.badge--medium {
    background-color: rgba(249, 203, 40, 0.1); /* Light yellow background */
    color: #f9cb28; /* Yellow text for medium priority */
}

.badge--high {
    background-color: rgba(255, 77, 77, 0.1); /* Light red background */
    color: #ff4d4d; /* Red text for high priority */
}  


/* Status Badges */
.badge--warning {
    background-color: rgba(249, 203, 40, 0.1); /* Light yellow background */
    color: #f9cb28; /* Yellow text for pending status */
}

.badge--success {
    background-color: var(--primary-light); /* Light blue background */
    color: var(--primary); /* Blue text for open status */
}

.badge--primary {
    background-color: rgba(53, 199, 127, 0.1); /* Light green background */
    color: #35c77f; /* Green text for answered status */
}

.badge--dark {
    background-color: var(--primary-light); /* Light red background */
    color: var(--text-light); /* Red text for closed status */
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
    

        /* Responsive adjustments */
        @media (max-width: 350px) {
            .body2 {
                padding-bottom: 70px;
            }
            
            th, td {
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false">

    <x-loading-screen />  

    <x-navbar />

    <div class="body2">
      
        <!-- Ticket Section -->
        <div class="ticket-section">
            <div class="ticket-header">
                    <p>Support</p>
                    <h1>Your Tickets</h1>
                    <p>Manage your ticket progress, respond to updates, add details, or check resolution status anytime.</p>
            </div>
            <div style="text-align: right; margin-bottom: 20px;">
                <a href="{{ route('ticket.open') }}" class="btn--base" id="createTicketBtn">
                    <span class="button-content">
                        <i class='fas fa-share'></i>
                        <span>Create New Ticket</span>
                    </span>
                    <span class="loading-spinner" style="display: none;">
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                </a>
            </div>
@if($errors->any())
    <x-alert type="error" :message="$errors->first()" />
@endif

@if(session()->has('notify'))
    @foreach(session('notify') as $message)
        <x-alert :type="$message[0]" :message="$message[1]" />
    @endforeach
@endif
       
            <!-- Existing Tickets List -->
            <div class="ticket-card">
                
    <div class="ticket-list-container">
        @if (!blank($supports))
            <div class="ticket-grid">
                @foreach ($supports as $support)
                    <div class="ticket-item">
                        <div class="ticket-header2">
                            <span class="ticket-id">Ticket ID - {{ $support->ticket }}
                                <button class="copy-btn" data-text="{{ $support->ticket }}" title="Copy to clipboard">
                                    <i class="fas fa-copy"></i> <!-- Line Awesome copy icon -->
                                </button>
                            </span>
                            <span class="ticket-priority">
                                @if ($support->priority == 1)
                                    <span class="badge badge--low">Low</span>
                                @elseif($support->priority == 2)
                                    <span class="badge badge--medium">Medium</span>
                                @elseif($support->priority == 3)
                                    <span class="badge badge--high">High</span>
                                @endif
                            </span>
                        </div>
                        <h3 class="ticket-subject">
                            <a href="{{ route('ticket.view', $support->ticket) }}">{{ __($support->subject) }}</a>
                        </h3>
                        <div class="ticket-footer">
                            <span class="ticket-status">
                                @php echo $support->statusBadge; @endphp
                            </span>
                            <span class="ticket-date">{{ diffForHumans($support->last_reply) }}</span>
                            <a href="{{ route('ticket.view', $support->ticket) }}" class="ticket-action">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <i class="far fa-frown"></i>
                <h4>{{ __($emptyMessage) }}</h4>
            </div>
        @endif
    </div>
    
            </div>
                @if ($supports->hasPages())
                    <div class="mt-5" style="margin-top:20px; margin-bottom: -20px;">
                        {{ $supports->links('components.custom-pagination') }}
                    </div>
                @endif
        </div>
    </div>

    <x-mobile-menu />  
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Create New Ticket button click handler
    const createTicketBtn = document.getElementById('createTicketBtn');
    if (createTicketBtn) {
        createTicketBtn.addEventListener('click', function() {
            this.classList.add('loading');
            this.style.pointerEvents = 'none';
        });
    }

    // Reset button state when navigating back
    window.addEventListener('pageshow', function() {
        if (createTicketBtn) {
            createTicketBtn.classList.remove('loading');
            createTicketBtn.style.pointerEvents = 'auto';
        }
    });
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