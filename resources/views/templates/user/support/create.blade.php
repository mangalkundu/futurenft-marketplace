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
            padding-bottom: 5px;
        }
        
        .ticket-section {
            width: 100%;
            padding: 20px 15px;
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
        }
        
        .create-ticket-card {
            width: 100%;
            background-color: var(--card-bg);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--border);
            margin-bottom: 70px;
           
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
    display: inline-flex;          /* Changed to flex for better centering */
    margin-top: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .select-files:hover {
        background-color: var(--text2);
        color: var(--primary); 
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
    white-space: nowrap;       /* Prevent text from wrapping */
    overflow: hidden;          /* Hide overflow */
    text-overflow: ellipsis;   /* Add ellipsis for truncated text */
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
       
        .btn--base {
            background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
            background-size: 400% 400%;
            animation: rgbFlow 6s ease infinite;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 13px 15px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin-bottom: -10px;
            margin-top: 5px;
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
                <h1>Create New Ticket</h1>
            </div>
            
@if($errors->any())
    <x-alert type="error" :message="$errors->first()" />
@endif

@if(session()->has('notify'))
    @foreach(session('notify') as $message)
        <x-alert :type="$message[0]" :message="$message[1]" />
    @endforeach
@endif
            
            <!-- Create Ticket Form -->
            <div class="create-ticket-card">
                <form action="{{ route('ticket.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Subject (max 25 characters)</label>
                        <input type="text" name="subject" value="{{ old('subject') }}"
                                class="form-control form--control" maxlength="25" oninput="checkMaxLength(this, 25)" required>
                        <small class="char-counter" style="color: var(--text-light); font-size: 12px; display: block; text-align: right;">
                            <span id="subjectCounter">0</span>/25
                        </small>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Priority</label>
                        <select name="priority" class="form-control form--control" required>
                            <option value="1">Low</option>
                            <option value="2">Medium</option>
                            <option value="3">High</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Message (max 200 characters)</label>
                        <textarea name="message" id="inputMessage" rows="5" class="form-control form--control" maxlength="200" oninput="checkMaxLength(this, 200)" required>{{ old('message') }}</textarea>
                        <small class="char-counter" style="color: var(--text-light); font-size: 12px; display: block; text-align: right;">
                            <span id="messageCounter">{{ old('message') ? strlen(old('message')) : 0 }}</span>/200
                        </small>
                    </div>

<div class="form-group">
    <label class="form-label">Attachments</label>
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
                    <div class="form-group">
                        <button class="btn--base w-100 my-2" type="submit">
                            Create Ticket
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-mobile-menu />  
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
            
    // Add attachment functionality
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
    
            // Helper function to convert bytes to readable size
            function convertToReadableSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }    

    // Form submission handler
    $('form').on('submit', function(e) {
    e.preventDefault();
    const form = $(this);
    const submitBtn = form.find('button[type="submit"]');
    const originalBtnText = submitBtn.html();
    
    // Set loading state
    submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Creating...');
    
    // Submit form after short delay
    setTimeout(() => {
        form.off('submit').submit();
    }, 3000);
    
    // Reset button if user navigates back
    $(window).on('pageshow', function() {
        submitBtn.prop('disabled', false).html(originalBtnText);
    });
    });
            
});  



// Character limit for both subject and message
function checkMaxLength(input, maxLength) {
    const counterId = input.name === 'subject' ? 'subjectCounter' : 'messageCounter';
    const counter = document.getElementById(counterId);
    counter.textContent = input.value.length;
    
    // Enforce hard limit (though maxlength should handle this)
    if (input.value.length > maxLength) {
        input.value = input.value.substring(0, maxLength);
        counter.textContent = maxLength;
    }
}
// Initialize counters on page load
$(document).ready(function() {
    // Subject counter
    const subjectInput = $('input[name="subject"]');
    $('#subjectCounter').text(subjectInput.val().length);
    
    // Message counter
    const messageInput = $('#inputMessage');
    $('#messageCounter').text(messageInput.val().length);
    
});
            
    </script>
</body>
</html>