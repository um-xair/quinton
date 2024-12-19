<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out forwards;
        }
    </style>
</head>
<body class="px-4 py-6 bg-[#F2F2F2]">

    <div class="fade-in bg-gradient-to-r from-[#151515] via-[#272829] to-[#151515] px-4 py-2 relative rounded-[20px] backdrop-blur-sm bg-opacity-40">
        <div class="flex justify-between items-center">
            <div>
                <button class="w-10 h-10 rounded-[20px] bg-white flex items-center justify-center">
                    <i class="fas fa-bars text-lg text-[#272829]"></i>
                </button>
            </div>

            <div class="flex-1 text-center">
                <img src="assets/logo-white.png" alt="Explore the World Together" class="w-1/2 mx-auto">
            </div>

            <div>
                <button class="w-10 h-10 rounded-[20px] bg-white flex items-center justify-center">
                    <i class="fas fa-shopping-cart text-lg text-[#272829]"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="fade-in mt-6 bg-gradient-to-r from-[#151515] via-[#272829] to-[#151515] p-10 relative rounded-[20px] backdrop-blur-sm bg-opacity-40">
        <div>
            <h1 class="text-5xl font-bold text-white">Find the Best Baby Gear</h1>
            <p class="text-sm text-white mt-2">Stroller, car seat, high chair, playmat, and more</p>
        </div>
        <div class="mt-6 relative">
            <input 
                type="text" 
                placeholder="Search for products..." 
                class="w-full p-3 pl-4 pr-10 rounded-full focus:outline-none" 
            />
            <i class="fas fa-search absolute right-4 top-1/2 transform -translate-y-1/2 text-[#272829]"></i>
        </div>
    </div>

    <div class="mt-10 px-4">
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div class="text-center">
                <img src="assets/stroller.png" alt="Category Image 1" class="w-full h-auto object-cover bg-white rounded-[20px]">
                <p class="mt-2 text-xs text-[#151515]">Stroller</p>
            </div>
            <div class="text-center">
                <img src="assets/car-seat.webp" alt="Category Image 2" class="w-full h-auto object-cover bg-white rounded-[20px]">
                <p class="mt-2 text-xs text-[#151515]">Car Seat</p>
            </div>
            <div class="text-center">
                <img src="assets/highchair.png" alt="Category Image 3" class="w-full h-auto object-cover bg-white rounded-[20px]">
                <p class="mt-2 text-xs text-[#151515]">High Chair</p>
            </div>
        </div>
    </div>


</body>
</html>
