@props([
    'type' => 'info', // success, info, warning, error, notification
    'message' => '',
    'autoClose' => true,
    'closeable' => true,
])

<style>
    /* Alert Message Styles */
    .alert-toast {
        position: fixed;
        top: 75px;
        right: 15px;
        left:15px;
        min-width: 300px;
        max-width: 400px;
        padding: 12px 15px;
        border-radius: 25px;
        font-size: 14px;
        font-weight: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
        border: 1px solid transparent;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 9999;
        transform: translateX(150%);
        animation: slideIn 0.5s forwards, fadeOut 0.5s forwards 6.5s;
        overflow: hidden;
    }

    @keyframes slideIn {
        to { transform: translateX(0); }
    }

    @keyframes fadeOut {
        from { opacity: 1; }
        to { opacity: 0; }
    }

    /* Success style (green) */
    .alert-toast.success {
        background-color: rgba(53, 199, 127, 0.9);
        border-color: rgba(53, 199, 127, 0.2);
        color: white;
    }

    /* Info style (blue) */
    .alert-toast.info {
        background-color: rgba(32, 129, 226, 0.9);
        border-color: rgba(32, 129, 226, 0.2);
        color: white;
    }

    /* Warning style (orange) */
    .alert-toast.warning {
        background-color: rgba(249, 203, 40, 0.9);
        border-color: rgba(249, 203, 40, 0.2);
        color: #333;
    }

    /* Error style (red) */
    .alert-toast.error {
        background-color: rgba(255, 77, 77, 0.9);
        border-color: rgba(255, 77, 77, 0.2);
        color: white;
    }

    /* Notification style (purple) */
    .alert-toast.notification {
        background-color: rgba(255, 77, 255, 0.9);
        border-color: rgba(255, 77, 255, 0.2);
        color: white;
    }
    
    .alert-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
    }
    
    .alert-text {
        flex: 1;
    }

    .alert-close {
        background: none;
        border: none;
        color: inherit;
        font-size: 14px;
        cursor: pointer;
        opacity: 1;
        transition: opacity 0.2s;
        padding: 0;
        margin-left: 10px;
    }

    .alert-close:hover {
        opacity: 1;
    }
    
    .alert-content i {
        font-size: 16px;
    }
    
    .alert-timer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0; 
        height: 3px;
        width: 100%;
        transform-origin: left center;
        background-color: rgba(255,255,255,0.5);
        transform-origin: left;
        transform: scaleX(1);
        animation: timer 7s linear forwards;
    }
    
    @keyframes timer {
        from {
            transform: scaleX(1);
        }
        to {
            transform: scaleX(0);
        }
    }
</style>

<div class="alert-toast {{ $type }}" data-alert>
    <div class="alert-content">
        <div style="display: flex; align-items: center; gap: 8px;">
            @if($type === 'success')
                <i class="fas fa-check-circle"></i>
            @elseif($type === 'info')
                <i class="fas fa-info-circle"></i>
            @elseif($type === 'warning')
                <i class="fas fa-exclamation-triangle"></i>
            @elseif($type === 'error')
                <i class="fas fa-times-circle"></i>
            @else
                <i class="fas fa-bell"></i>
            @endif
            <span class="alert-text">{{ $message }}</span>
        </div>
        @if($closeable)
            <button class="alert-close"><i class="fas fa-times"></i></button>
        @endif
    </div>
    @if($autoClose)
        <div class="alert-timer"></div>
    @endif
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const alert = document.querySelector('.alert-toast[data-alert]');
    
    if (alert) {
        const closeBtn = alert.querySelector('.alert-close');
        
        // Close button click handler
        if (closeBtn) {
            closeBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                closeAlert(alert);
            });
        }
        
        // Prevent closing when clicking on alert content
        alert.addEventListener('click', (e) => {
            e.stopPropagation();
        });
        
        // Auto-remove if enabled
        @if($autoClose)
            setTimeout(() => {
                closeAlert(alert);
            }, 7000);
        @endif
    }
    
    // Function to handle alert closing
    function closeAlert(alertElement) {
        alertElement.style.animation = 'fadeOut 0.3s forwards';
        setTimeout(() => {
            alertElement.remove();
        }, 300);
    }
});
</script>
