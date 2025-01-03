<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Locator</title>
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
        <a href="store-list.php">
            <button class="w-10 h-10 rounded-full bg-[#171717] flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </button>
        </a>
    </div>

    <div class="mt-2 px-6 text-[#171717] slide-up-fade-in">
        <h2 class="font-extrabold text-[#171717] text-4xl mb-4">Retails Partner</h2>
    </div>

    <div class="mt-6 px-6 text-[#171717] text-justify slide-up-fade-in">
        <div class="w-full mt-2 grid grid-cols-[auto_1fr] items-center bg-white p-4 rounded-[30px] gap-3 bg-opacity-50 backdrop-blur-md">
            <img src="https://i.pinimg.com/736x/a4/a8/bf/a4a8bfc9980fafd43516cd7f8fb0df2d.jpg" 
                 alt="Shop Image" 
                 class="w-24 h-24 rounded-[10px] object-cover">
            <div class="flex flex-col justify-center">
                <h2 class="text-[#171717] text-md font-bold">
                    Baby Shop Segamat
                </h2>
                <p class="text-[#171717] text-xs">
                    Pusat Komersil Yayasan, 85000 Segamat, Johor, Malaysia
                </p>
                <a href="https://www.google.com/maps/dir/?api=1&destination=123+Example+Street,+City,+Country" 
                   target="_blank" 
                   class="bg-[#232323] mt-2 text-white text-sm py-2 px-4 rounded-[10px]">
                    Get Directions
                </a>
            </div>
        </div>
    </div>
    
</body>
</html>