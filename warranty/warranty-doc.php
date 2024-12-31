<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty</title>
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
<body class="bg-[#F2F2F2] overflow-auto">

    <div class="flex items-center px-6 py-2 h-40">
        <a href="warranty-details.php">
            <button class="w-10 h-10 rounded-full bg-[#171717] flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </button>
        </a>
    </div>

    <div class="mt-2 px-6 text-[#171717]">
        <h2 class="font-extrabold text-[#171717] text-4xl mb-4 slide-up-fade-in">Document & Practices</h2>
    </div>

    <div class="mt-6 px-6 text-[#171717] text-justify slide-up-fade-in">
        <div class="grid grid-cols-2 gap-4">
            <div class="text-left">
                <div class="bg-white rounded-[20px] p-2 relative">
                    <img src="../assets/logo.png" alt="product-img-1" class="w-3/4 h-auto object-cover">
                    <img src="../assets/google-docs.png" alt="product-img-1" class="w-2/4 h-auto object-cover mt-2">
                    <p class="ml-2 mt-4 mb-6 text-sm md:text-base text-[#171717]">how to fold nior stroller ?</p>
                </div>
            </div>
            <div class="text-left">
                <div class="bg-white rounded-[20px] p-2 relative">
                    <img src="../assets/logo.png" alt="product-img-1" class="w-3/4 h-auto object-cover">
                    <img src="../assets/google-docs.png" alt="product-img-1" class="w-2/4 h-auto object-cover mt-2">
                    <p class="ml-2 mt-4 mb-6 text-sm md:text-base text-[#171717]">how to fold nior stroller ?</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>