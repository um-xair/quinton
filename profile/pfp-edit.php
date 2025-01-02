<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes slideUpFadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-up-fade-in {
            animation: slideUpFadeIn 0.5s ease-out;
        }
    </style>
</head>
<body class="bg-[#F2F2F2] overflow-auto mb-[50px]">

    <div class="flex items-center px-6 py-2 h-40">
        <a href="personal-info.php">
            <button class="w-10 h-10 rounded-full bg-[#171717] flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </button>
        </a>
    </div>

    <div class="w-full p-6 relative slide-up-fade-in">
        <div class="w-40 h-40 mx-auto mb-4 bg-gray-200 rounded-full overflow-hidden">
            <img id="profile-image" src="https://i.pinimg.com/736x/77/67/26/7767263d0002e31bbf715dcaef60af09.jpg" alt="Profile Picture" class="w-full h-full object-cover">
        </div>

        <h2 class="text-2xl font-bold text-[#181C14] mb-2 text-center">Change Shop Photo</h2>
        <p class="text-sm text-[#181C14] mb-6 text-center">Click to upload a new shop photo</p>

        <label for="file-input" class="mt-10 w-full h-32 border-2 border-dashed border-[#181C14] p-4 rounded-[20px] flex flex-col items-center justify-center mb-4 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#181C14">
                <path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z"/>
            </svg>
            <span class="text-[#181C14] text-sm">Upload New Image Here</span>
            <input type="file" id="file-input" class="hidden">
        </label>
    </div>

    <div class="fixed bottom-10 left-0 w-full px-6 z-[999] slide-up-fade-in">
        <a href="personal-info.php" class="w-full inline-block bg-[#232323] py-6 rounded-full text-white text-lg font-bold text-center sm:text-base md:text-lg lg:text-xl">
            Save
        </a>
    </div>


    <script>
        const fileInput = document.getElementById('file-input');
        const profileImage = document.getElementById('profile-image');

        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    profileImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    
</body>
</html>