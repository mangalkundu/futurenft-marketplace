<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future NFT - Profile Settings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Add Cropper.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
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
            min-height: 80vh;
        }
        
        .body2 {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            padding-bottom: 20px;
        }
            
        /* Profile Section */
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

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--text);
            font-size: 14px;
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
            margin-bottom: -10px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .col-sm-8 {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 10px;
        }
        
        .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 10px;
        }

        .col-sm-4 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
            padding: 0 10px;
        }

    /* Cropper Modal Styles */
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.7);
        z-index: 9999;
        display: none;
        overflow: auto;
        padding: 20px;
        transition: all 0.3s ease;

    }

    .modal-content {
        position: relative;
        background-color: var(--card-bg);
        margin: auto;
        padding: 20px;
        border-radius: 20px;
        width: 100%;
        box-shadow:  0 10px 25px rgba(0,0,0,0.2);
        max-width: 500px;
        max-height: 90vh;
        display: flex;
        flex-direction: column;
        /* Center the modal vertically and horizontally */
        margin: auto;
        margin-top: 50px;
    }
    
    .modal-header {
        margin-bottom: 15px;
    }

    .modal-header h4 {
        color: var(--text);
        font-size: 18px;
    }

    .modal-body {
        position: relative;
        width: 100%;
        min-height: 300px;
        max-height: 60vh;
        margin-bottom: 20px;
    }

    #cropper-image {
        max-width: 100%;
        max-height: 100%;
        display: block;
    }

    .modal-footer {
        display: flex;
        justify-content: space-between;
        padding-top: 0px;
        margin-bottom: 5px;
        margin-top: 10px;
    }
    

    .btn {
        padding: 13px 15px;
        border-radius: 25px;
        cursor: pointer;
        border: none;
        font-size: 13px;
        font-weight: 700;
        transition: all 0.3s ease;
        
    }

    .btn-primary {
        background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
        background-size: 400% 400%;
        animation: rgbFlow 6s ease infinite;
        color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .btn-secondary {
        background-color: var(--secondary);
        color: var(--text);
        border: 1px solid var(--border); box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
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
            .col-sm-6, .col-sm-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        
        
        
        /* Profile Photo Styles */
        .profile-photo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            margin-top: 10px;
        }

        .profile-photo-upload {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-photo-input {
            display: none;
        }

        .profile-photo-label {
            padding: 10px 15px;
            background-color: var(--primary);
            color: white;
            border-radius: 25px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 700;
            transition: all 0.3s ease;
            text-align: center; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-top: 15px;
        }

        .profile-photo-label:hover {
            background-color: var(--primary-light);
            color: var(--primary);
        }


/* Add this to the style section of both files */
.profile-photo-wrapper {
    position: relative;
    width: fit-content;
    margin: 0 auto;
    display: inline-block;
}

.profile-photo-frame {
    position: relative;
    width: 85px;
    height: 85px;
    border-radius: 50%;
    padding: 3px;
    background: linear-gradient(90deg, #ff4d4d, #f9cb28, #4dff4d, #4da6ff, #ff4dff);
    background-size: 400% 400%;
    animation: rgbFlow 6s ease infinite;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    overflow: hidden; /* This is important for the shine effect */
}

.profile-photo-preview {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--card-bg);
    position: relative;
    z-index: 1;
}


.crown-badge {
    position: absolute;
    top: -13px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 24px;
    z-index: 3;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
}

/* BRONZE - Warmer Bronze */
.bronze-crown, .bronze-frame {
    background: linear-gradient(135deg,
        #cd7f32, #e8b87a, #d4a373, #cd7f32);
    background-size: 400% 400%;
    
}
.bronze-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 5px rgba(205, 127, 50, 0.2),
        0 0 10px rgba(232, 184, 122, 0.1);
}

/* SILVER - Brighter Mirror */
.silver-crown, .silver-frame {
    background: linear-gradient(135deg,
        #f8f8f8, #e8e8e8, #d8d8d8, #f8f8f8);
    background-size: 400% 400%;
    
}
.silver-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 8px rgba(255, 255, 255, 0.2),
        0 0 16px rgba(200, 200, 200, 0.1);
}

/* GOLD - Richer Gold */
.gold-crown, .gold-frame {
    background: linear-gradient(135deg,
        #ffd700, #ffea80, #ffcc00, #ffd700);
    background-size: 400% 400%;
    
}
.gold-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 8px rgba(255, 215, 0, 0.3),
        0 0 16px rgba(255, 234, 128, 0.2),
        0 0 24px rgba(255, 204, 0, 0.1);
}

/* PLATINUM - Cooler Platinum */
.platinum-crown, .platinum-frame {
    background: linear-gradient(135deg,
       #e6f2ff, #d9e6ff, #c2d6ff, #e6f2ff);
    background-size: 400% 400%;
    
}
.platinum-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 8px rgba(230, 242, 255, 0.3),
        0 0 16px rgba(194, 214, 255, 0.2),
        0 0 24px rgba(102, 153, 255, 0.1);
}

/* DIAMOND - Icy Blue */
.diamond-crown, .diamond-frame {
    background: linear-gradient(135deg,
        #7fffd4, #b9f2ff, #00bfff, #7fffd4);
    background-size: 400% 400%;
    
}
.diamond-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 10px rgba(185, 242, 255, 0.3),
        0 0 20px rgba(0, 191, 255, 0.2),
        0 0 30px rgba(127, 255, 212, 0.1);
}

/* EMERALD - Vibrant Green */
.emerald-crown, .emerald-frame {
    background: linear-gradient(135deg,
        #00ff7f, #50c878, #00aa55, #00ff7f);
    background-size: 400% 400%;
    
}
.emerald-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 10px rgba(80, 200, 120, 0.3),
        0 0 20px rgba(0, 255, 127, 0.2),
        0 0 30px rgba(0, 170, 85, 0.1);
}

/* RUBY - Deep Red */
.ruby-crown, .ruby-frame {
    background: linear-gradient(135deg,
        #ff355e, #e0115f, #cc0000, #ff355e);
    background-size: 400% 400%;
    
}
.ruby-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 10px rgba(224, 17, 95, 0.3),
        0 0 20px rgba(255, 53, 94, 0.2),
        0 0 30px rgba(204, 0, 0, 0.1);
}

/* FIRE - Burning Gradient */
.fire-crown, .fire-frame {
    background: linear-gradient(135deg,
        #ff4500, #ff8c00, #ff0000, #ff4500);
    background-size: 400% 400%;
    
}
.fire-crown {
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 
        0 0 12px rgba(255, 69, 0, 0.3),
        0 0 24px rgba(255, 140, 0, 0.2),
        0 0 36px rgba(255, 0, 0, 0.1);
}


/* Updated shine effect */
.shine-effect::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.2),
        transparent
    );
    z-index: 2;
    transition: 0.5s;
    animation: shine 3s infinite;
}

@keyframes shine {
    0% { left: -100%; }
    20% { left: 100%; }
    100% { left: 100%; }
}      
        
    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false">

    <x-loading-screen />  
    <x-navbar />

    <div class="body2">
        <!-- Profile Section -->
        <div class="ticket-section">
            <div class="ticket-header">
                <p>Account</p>
                <h1>Profile Settings</h1>
            </div>

            @if($errors->any())
                <x-alert type="error" :message="$errors->first()" />
            @endif

            @if(session()->has('notify'))
                @foreach(session('notify') as $message)
                    <x-alert :type="$message[0]" :message="$message[1]" />
                @endforeach
            @endif

            <div class="ticket-card">
                <form class="register" method="post" action="" enctype="multipart/form-data" id="profile-form">
                    @csrf
                    <input type="hidden" name="cropped_image" id="cropped-image-input">
                    
<div class="profile-photo-container">
    @php
        $totalInvested = auth()->user()->invests->sum('amount');
        $tier = 'bronze';
        if ($totalInvested >= 9999) $tier = 'fire';
        elseif ($totalInvested >= 4999) $tier = 'ruby';
        elseif ($totalInvested >= 1999) $tier = 'emerald';
        elseif ($totalInvested >= 999) $tier = 'diamond';
        elseif ($totalInvested >= 599) $tier = 'platinum';
        elseif ($totalInvested >= 299) $tier = 'gold';
        elseif ($totalInvested >= 99) $tier = 'silver';
        elseif ($totalInvested > 0) $tier = 'bronze';
    @endphp
    
    <div class="profile-photo-wrapper">
        @if($tier != 'none')
            <i class="fas fa-crown crown-badge {{ $tier }}-crown"></i>
        @endif
        <div class="profile-photo-frame {{ $tier }}-frame shine-effect">
            @if($user->photo)
                <img id="profile-photo-preview" class="profile-photo-preview" 
                    src="{{ $user->photo }}" alt="Profile Photo">
            @else
                <img id="profile-photo-preview" class="profile-photo-preview" 
                    src="{{ asset('/assets/logo/avatar-logo.gif') }}" alt="Default Profile Photo">
            @endif
        </div>
    </div>
    
    <div class="profile-photo-upload">
        <input type="file" id="profile-photo-input" class="profile-photo-input" name="photo" accept="image/*">
        <label for="profile-photo-input" class="profile-photo-label">
            <i class="fas fa-camera" style="margin-right: 8px;"></i>Change Photo
        </label>
    </div>
</div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="form-label">@lang('First Name')</label>
                            <input type="text" class="form-control form--control" name="firstname" value="{{ $user->firstname }}" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="form-label">@lang('Last Name')</label>
                            <input type="text" class="form-control form--control" name="lastname" value="{{ $user->lastname }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label class="form-label">@lang('Mobile Number')</label>
                            <input class="form-control form--control" value="{{ $user->mobile }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label class="form-label">@lang('E-mail Address')</label>
                            <input class="form-control form--control" value="{{ $user->email }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label class="form-label">@lang('Address')</label>
                            <input type="text" class="form-control form--control" name="address" value="{{ $user->address }}">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="form-label">@lang('State')</label>
                            <input type="text" class="form-control form--control" name="state" value="{{ $user->state }}">
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="form-label">@lang('Zip Code')</label>
                            <input type="text" class="form-control form--control" name="zip" value="{{ $user->zip }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="form-label">@lang('City')</label>
                            <input type="text" class="form-control form--control" name="city" value="{{ $user->city }}">
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="form-label">@lang('Country')</label>
                            <input class="form-control form--control" value="{{ $user->country_name }}" readonly>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn--base">@lang('Submit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Cropper Modal -->
    <div id="cropper-modal" class="modal">
        <div class="modal-content">
            <div class="modal-body">
                <img id="cropper-image" src="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="cancel-crop">Cancel</button>
                <button type="button" class="btn btn-primary" id="apply-crop">Crop & Apply</button>
            </div>
        </div>
    </div>

    <x-mobile-menu />  

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Add Cropper.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

<script>
(function ($) {
    "use strict";
    
    let cropper;
    const modal = document.getElementById('cropper-modal');
    const cropperImage = document.getElementById('cropper-image');
    const profilePhotoInput = document.getElementById('profile-photo-input');
    const croppedImageInput = document.getElementById('cropped-image-input');
    const profilePhotoPreview = document.getElementById('profile-photo-preview');
    const profileForm = document.getElementById('profile-form');
    
    // Initialize cropper when image is loaded
    function initCropper(imageSrc) {
        modal.style.display = 'block';
        cropperImage.src = imageSrc;
        
        // Destroy previous cropper instance if exists
        if (cropper) {
            cropper.destroy();
        }
        
        cropper = new Cropper(cropperImage, {
            aspectRatio: 1,
            viewMode: 1,
            autoCropArea: 0.8,
            responsive: true,
            movable: true,
            zoomable: true,
            rotatable: false,
            scalable: false,
            ready: function() {
                // Auto-center the crop box
                const containerData = this.cropper.getContainerData();
                const cropBoxWidth = Math.min(containerData.width, containerData.height);
                this.cropper.setCropBoxData({
                    width: cropBoxWidth,
                    height: cropBoxWidth
                });
            }
        });
    }

    // Profile photo input change handler
    profilePhotoInput.addEventListener('change', function(e) {
        if (this.files && this.files[0]) {
            const file = this.files[0];
            const maxSize = 15 * 1024 * 1024; // 15MB in bytes
            
            if (file.size > maxSize) {
                alert(`File "${file.name}" exceeds 15MB limit.`);
                $(this).val('');
                return;
            }
            
            if (!file.type.match('image.*')) {
                alert('Please select an image file (JPG, PNG, JPEG)');
                $(this).val('');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(event) {
                initCropper(event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

// Apply crop button handler
document.getElementById('apply-crop').addEventListener('click', function() {
    if (cropper) {
        const applyBtn = this;
        const originalText = applyBtn.innerHTML;
        
        // Add spinner exactly like submit button
        applyBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Applying...';
        applyBtn.disabled = true;
        
        // Add 3-second delay before processing
        setTimeout(() => {
            // Get the cropped canvas
            const canvas = cropper.getCroppedCanvas({
                width: 500,
                height: 500,
                minWidth: 256,
                minHeight: 256,
                maxWidth: 2000,
                maxHeight: 2000,
                fillColor: '#fff',
                imageSmoothingEnabled: true,
                imageSmoothingQuality: 'high',
            });
            
            if (canvas) {
                // Convert canvas to blob
                canvas.toBlob(function(blob) {
                    // Create a new file from the blob
                    const file = new File([blob], 'profile-photo.jpg', {
                        type: 'image/jpeg',
                        lastModified: Date.now()
                    });
                    
                    // Create a new DataTransfer object to replace the file input
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    
                    // Replace the file input's files with our cropped version
                    profilePhotoInput.files = dataTransfer.files;
                    
                    // Update the preview
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profilePhotoPreview.src = e.target.result;
                        croppedImageInput.value = e.target.result;
                        
                        // Close the modal
                        modal.style.display = 'none';
                        
                        // Destroy cropper
                        cropper.destroy();
                        cropper = null;
                        
                        // Reset button state
                        applyBtn.innerHTML = originalText;
                        applyBtn.disabled = false;
                    };
                    reader.readAsDataURL(blob);
                    
                }, 'image/jpeg', 0.9);
            } else {
                // Reset button state if no canvas
                applyBtn.innerHTML = originalText;
                applyBtn.disabled = false;
            }
        }, 1000); // 1000ms = 1 seconds delay
    }
});

    // Cancel crop button handler
    document.getElementById('cancel-crop').addEventListener('click', function() {
        modal.style.display = 'none';
        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
        profilePhotoInput.value = '';
    });

    // Close modal when clicking outside
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            profilePhotoInput.value = '';
        }
    });

    // Form submission handler
    $('#profile-form').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        const submitBtn = form.find('button[type="submit"]');
        submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Processing...');
        
        // Submit the form after a short delay to show processing state
        setTimeout(() => {
            form.unbind('submit').submit();
        }, 3000);
    });
})(jQuery);
</script>
</body>
</html>