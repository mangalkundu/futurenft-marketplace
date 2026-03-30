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

        .ticket-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .ticket-date {
            font-size: 13px;
            color: var(--text-light);
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

        /* Status Badges */
        .badge--warning {
            background-color: rgba(249, 203, 40, 0.1);
            color: #f9cb28;
        }

        .badge--success {
            background-color: var(--primary-light);
            color: var(--primary);
        }

        .badge--primary {
            background-color: rgba(53, 199, 127, 0.1);
            color: #35c77f;
        }

        .badge--dark {
            background-color: var(--primary-light);
            color: var(--text-light);
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

        .message-container {
            margin-top: 20px;
        }

        .message {
            background-color: var(--card-bg);
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid var(--border);
        }

        .message:first-child {
            display: block;
        }

        .message.hidden {
            display: none;
        }

        .message-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .message-sender {
            font-weight: bold;
            color: var(--text);
        }

        .message-date {
            color: var(--text-light);
            font-size: 13px;
        }

        .message-content {
            margin-bottom: 10px;
            font-size: 16px;
            color: var(--text-light);
        }

        .message-attachments a {
            color: var(--primary);
            text-decoration: none;
            font-size: 13px;
            margin-right: 10px;
        }

        .show-more-container {
            text-align: center;
            margin: 15px 0;
        }

        .show-more-btn {
            background-color: var(--secondary);
            color: var(--text);
            border: 1px solid var(--border);
            border-radius: 25px;
            padding: 10px 15px;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        .show-more-btn:focus {
                outline: none;
            border: 1px solid transparent;
            background-origin: border-box;
            background-clip: padding-box, border-box;
            background-image: linear-gradient(var(--card-bg), var(--card-bg)), 
                      linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 100% 100%, 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }


        .show-more-btn i {
            transition: transform 0.3s ease;
        }

        .show-more-btn.expanded i {
            transform: rotate(180deg);
        }

        .reply-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form--control {
            width: 100%;
            padding: 12px 15px;
            border-radius: 25px;
            border: 1px solid var(--border);
            background-color: var(--secondary);
            color: var(--text);
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form--control:focus {
            outline: none;
            border: 1px solid transparent;
            background-origin: border-box;
            background-clip: padding-box, border-box;
            background-image: linear-gradient(var(--card-bg), var(--card-bg)), 
                      linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 100% 100%, 400% 400%;
            animation: rgbFlow 6s ease infinite;
        }

        .btn--base {
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
            margin-bottom: 10px;
        }


        .btn--danger {
            background-color: rgba(255, 77, 77, 0.1);
            color: #ff4d4d;
            border-radius: 25px;
            padding: 10px 15px;
            font-size: 13px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            
        }

        .upload-container {
            border: 2px dashed var(--border);
            border-radius: 15px;
            padding: 15px;
            background-color: var(--secondary);
            transition: all 0.3s ease; 
        }

        .upload-area {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 15px;
            cursor: pointer;
        }

        .upload-area i {
            font-size: 24px;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .upload-area p {
            color: var(--text-light);
            margin-bottom: 10px;
            font-size: 15px;
        }
        
        .upload-area:hover, .upload-container.dragover {
            border-color: var(--primary);
            background-color: var(--primary-light);
            border-radius: 10px;
        }

        .select-files {
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 15px !important;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            margin-top: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .select-files:hover {
            background-color: var(--text2);
            color: var(--primary);
        }

        .hidden-input {
            display: none;
        }

        .upload-info {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
            color: var(--text-light);
        }

        .upload-info i {
            margin-right: 2px;
        }

        .file-previews {
            margin-top: 20px;
        }

        .file-preview {
            display: flex;
            align-items: center;
            background: var(--card-bg);
            border-radius: 10px;
            padding: 10px 15px;
            margin-bottom: 10px;
            border: 1px solid var(--border);
            overflow: hidden; 
        }

        .file-preview i {
            margin-right: 10px;
            color: var(--primary);
        }

        .file-info {
            flex: 1;
        }

        .file-name {
            font-size: 14px;
            margin-bottom: 3px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px; 
        }

        .file-size {
            font-size: 12px;
            color: var(--text-light);
        }

        .remove-file {
            color: #ff4d4d;
            cursor: pointer;
            background: none;
            border: none;
            font-size: 16px;
        }

        /* Confirmation Modal Styles */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background-color:var(--card-bg);
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            padding: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            transform: translateY(20px);
            transition: transform 0.3s ease;
            position: relative; 
        }

        .modal-header {
            margin-bottom: 10px;
        }

        .modal-header h4 {
            font-size: 18px;
            color: var(--text);
        }

        .modal-body {
            margin-bottom: 25px;
        }

        .modal-body .question {
            color: var(--text);
            font-size: 14px;
            line-height: 1.5;
        }

        .modal-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            margin-bottom: 5px;
        }
        
        .form-btn {
            font-size:13px;
            padding: 13px 15px;
            border-radius: 25px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            
        }
        
        .form-btn-cancel {
            background-color: var(--secondary);
            color: var(--text);
            border: 1px solid var(--border); box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .form-btn-submit {
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }        
        

        @keyframes rgbFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Responsive adjustments */
        @media (max-width: 350px) {
            .body2 {
                padding-bottom: 70px;
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
                <h1>Ticket Details</h1>
            </div>

            @if($errors->any())
                <x-alert type="error" :message="$errors->first()" />
            @endif

            @if(session()->has('notify'))
                @foreach(session('notify') as $message)
                    <x-alert :type="$message[0]" :message="$message[1]" />
                @endforeach
            @endif

            <!-- Ticket Card -->
            <div class="ticket-card">
                <div class="ticket-header2">
                    <span class="ticket-id">Ticket ID - {{ $myTicket->ticket }}
                        <button class="copy-btn" data-text="{{ $myTicket->ticket }}" title="Copy to clipboard">
                            <i class="fas fa-copy"></i>
                        </button>
                    </span>
                    @if ($myTicket->status != 3 && $myTicket->user)
                        <button class="btn--danger confirmationBtn" type="button"
                            data-question="@lang('Are you sure to close this ticket?')"
                            data-action="{{ route('ticket.close', $myTicket->id) }}">
                            <i class="fas fa-times"></i> Close
                        </button>
                    @endif
                </div>

                <h3 class="ticket-subject">
                    {{ $myTicket->subject }}
                </h3>
                
                <div class="ticket-footer">
                    <span class="ticket-status">
                        @php echo $myTicket->statusBadge; @endphp
                    </span>
                    <span class="ticket-date">{{ diffForHumans($myTicket->created_at) }}</span>
                </div>

                <!-- Messages -->
                <div class="message-container">
                    @foreach ($messages->reverse() as $index => $message)
                        <div class="message {{ $index > 0 ? 'hidden' : '' }}" data-index="{{ $index }}">
                            <div class="message-header">
                                <span class="message-sender">
                                    @if ($message->admin_id == 0)
                                        {{ $message->ticket->fullname }}
                                    @else
                                        {{ $message->admin->name }} (Agent)
                                    @endif
                                </span>
                                <span class="message-date">{{ $message->created_at->format('M d, Y @H:i A') }}</span>
                            </div>
                            <div class="message-content">
                                {{ $message->message }}
                            </div>
                            @if ($message->attachments->count() > 0)
                                <div class="message-attachments">
                                    @foreach ($message->attachments as $k => $image)
                                        <a href="{{ route('ticket.download', encrypt($image->id)) }}">
                                            <i class="fas fa-paperclip"></i> Attachment {{ ++$k }}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach

                    @if ($messages->count() > 1)
                        <div class="show-more-container">
                            <button class="show-more-btn" id="showMoreBtn">
                                <span>Show Older Messages</span><i class="fas fa-chevron-down" style="margin-left:6px;"></i>
                            </button>
                        </div>
                    @endif
                </div>

                <!-- Reply Form -->
                @if ($myTicket->status != 4)
                    <form method="post" action="{{ route('ticket.reply', $myTicket->id) }}" enctype="multipart/form-data" class="reply-form">
                        @csrf
                        <div class="form-group">
                            <textarea name="message" id="message" rows="5" class="form-control form--control" placeholder="Type your reply here..." maxlength="200" oninput="checkMaxLength(this, 200)" required>{{ old('message') }}</textarea>
                        <small class="char-counter" style="color: var(--text-light); font-size: 12px; display: block; text-align: right;">
                            <span id="messageCounter">{{ old('message') ? strlen(old('message')) : 0 }}</span>/200
                        </small>
                        </div>
                        <div class="form-group">
                            <div class="upload-container">
                                <div class="upload-area" id="dropZone">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <p>Drag & drop files here or</p>
                                    <button type="button" class="select-files">
                                        Select Files
                                    </button>
                                    <input type="file" name="attachments[]" id="fileInput" class="hidden-input" 
                                           accept=".jpeg,.jpg,.png,.pdf,.doc,.docx" multiple>
                                </div>
                                <div class="upload-info">
                                    <p><i class="fas fa-info-circle"></i> Max 2 files (15MB each) • JPG, PNG, PDF, DOC</p>
                                </div>
                                <div class="file-previews" id="filePreviews"></div>
                            </div>
                        </div>
                        <button class="btn--base w-100" type="submitreply">
                            <i class="fas fa-reply" style="margin-right: 8px;"></i>Reply
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>

    <x-mobile-menu />  
    
    <!-- Confirmation Modal -->
    <div class="modal" id="confirmationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Confirmation</h4>
            </div>
            <div class="modal-body">
                <p class="question"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="form-btn form-btn-cancel" data-dismiss="modal">Cancel</button>
                <form method="POST" action="">
                    @csrf
                    <button type="submit" class="form-btn form-btn-submit">Confirm</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        (function ($) {
            "use strict";
            
            // File upload functionality
            const dropZone = $('#dropZone');
            const fileInput = $('#fileInput');
            const filePreviews = $('#filePreviews');
            const maxFiles = 2;
            const maxSize = 15 * 1024 * 1024; // 15MB in bytes
            let files = [];

            // Click handler for select files button
            $('.select-files').click(function() {
                fileInput.click();
            });

            // File input change handler
            fileInput.on('change', function(e) {
                handleFiles(e.target.files);
            });

            // Drag and drop handlers
            dropZone.on('dragover', function(e) {
                e.preventDefault();
                $(this).closest('.upload-container').addClass('dragover');
            });

            dropZone.on('dragleave', function() {
                $(this).closest('.upload-container').removeClass('dragover');
            });

            dropZone.on('drop', function(e) {
                e.preventDefault();
                $(this).closest('.upload-container').removeClass('dragover');
                if (e.originalEvent.dataTransfer.files.length) {
                    handleFiles(e.originalEvent.dataTransfer.files);
                }
            });

            // Handle selected files
            function handleFiles(newFiles) {
                for (let i = 0; i < newFiles.length; i++) {
                    if (files.length >= maxFiles) {
                        alert(`Maximum ${maxFiles} files allowed.`);
                        break;
                    }

                    if (newFiles[i].size > maxSize) {
                        alert(`File "${newFiles[i].name}" exceeds ${convertToReadableSize(maxSize)} limit.`);
                        continue;
                    }

                    files.push(newFiles[i]);
                    renderFilePreview(newFiles[i], files.length - 1);
                }

                // Update file input (for form submission)
                const dataTransfer = new DataTransfer();
                files.forEach(file => dataTransfer.items.add(file));
                fileInput[0].files = dataTransfer.files;
            }

            // Render file preview
            function renderFilePreview(file, index) {
                const fileExt = file.name.split('.').pop().toLowerCase();
                let iconClass = 'fa-file';

                if (['jpg', 'jpeg', 'png'].includes(fileExt)) {
                    iconClass = 'fa-file-image';
                } else if (fileExt === 'pdf') {
                    iconClass = 'fa-file-pdf';
                } else if (['doc', 'docx'].includes(fileExt)) {
                    iconClass = 'fa-file-word';
                }

                const fileSize = (file.size / (1024 * 1024)).toFixed(2) + 'MB';

                filePreviews.append(`
                    <div class="file-preview" data-index="${index}">
                        <i class="fas ${iconClass}"></i>
                        <div class="file-info">
                            <div class="file-name">${file.name}</div>
                            <div class="file-size">${fileSize}</div>
                        </div>
                        <button type="button" class="remove-file">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `);
            }

            // Remove file handler
            filePreviews.on('click', '.remove-file', function() {
                const index = $(this).closest('.file-preview').data('index');
                files.splice(index, 1);
                
                // Update file input
                const dataTransfer = new DataTransfer();
                files.forEach(file => dataTransfer.items.add(file));
                fileInput[0].files = dataTransfer.files;
                
                // Refresh previews
                filePreviews.empty();
                files.forEach((file, idx) => renderFilePreview(file, idx));
            });

            // Copy button functionality
            document.querySelectorAll('.copy-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const textToCopy = this.getAttribute('data-text');
                    
                    navigator.clipboard.writeText(textToCopy).then(() => {
                        this.innerHTML = '<i class="fas fa-check"></i>';
                        setTimeout(() => {
                            this.innerHTML = '<i class="fas fa-copy"></i>';
                        }, 2000);
                    });
                });
            });


            // Show more messages functionality
            $('#showMoreBtn').on('click', function() {
                const btn = $(this);
                const isExpanded = btn.hasClass('expanded');
                
                if (isExpanded) {
                    // Hide all except first message
                    $('.message.hidden').slideUp();
                } else {
                    // Show all messages
                    $('.message.hidden').slideDown();
                }
                
                btn.toggleClass('expanded');
                btn.find('span').text(isExpanded ? 'Show Older Messages' : 'Hide Older Messages');
            });

            // Helper function to convert bytes to readable size
            function convertToReadableSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }

// Confirmation modal handling
$(document).on('click', '.confirmationBtn', function() {
    const modal = $('#confirmationModal');
    modal.find('.question').text($(this).data('question'));
    modal.find('form').attr('action', $(this).data('action'));
    modal.addClass('show');
});

// This is the crucial fix - direct handler for the cancel button
$('#confirmationModal .form-btn-cancel').on('click', function(e) {
    e.preventDefault();
    $('#confirmationModal').removeClass('show');
});

// Keep the existing outside-click handler
$('#confirmationModal').on('click', function(e) {
    if (e.target === this) {
        $(this).removeClass('show');
    }
});

// Keep the existing propagation stopper
$('.modal-content').on('click', function(e) {
    e.stopPropagation();
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
    
    // Form submission handler
    $('form').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        const submitBtn = form.find('button[type="submitreply"]');
        submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Replying...');
        setTimeout(() => {
            form.unbind('submit').submit();
        }, 3000);
    });
    
        })(jQuery);
        
        
// Character limit for message
function checkMaxLength(input, maxLength) {
    const counter = document.getElementById('messageCounter');
    counter.textContent = input.value.length;
    
    // Enforce hard limit (though maxlength should handle this)
    if (input.value.length > maxLength) {
        input.value = input.value.substring(0, maxLength);
        counter.textContent = maxLength;
    }
}
// Initialize counter on page load
$(document).ready(function() {
    // Message counter
    const messageInput = document.getElementById('message');
    const messageCounter = document.getElementById('messageCounter');
    if (messageInput && messageCounter) {
        messageCounter.textContent = messageInput.value.length;
    }
});

    </script>
</body>
</html>