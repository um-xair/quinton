<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        .floating-animation {
            animation: float 2s ease-in-out infinite;
        }
        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="px-4 py-6 bg-[#F2F2F2] fade-in mb-[200px]">

    <?php include('header.php'); ?>

    <div class="mt-4 bg-gradient-to-r from-[#171717] via-[#171717] to-[#171717] p-10 relative rounded-[30px] backdrop-blur-sm bg-opacity-40">
        <div>
            <h1 class="text-5xl font-bold text-white">Find the Best Baby Gear</h1>
            <p class="text-md text-white mt-2">Stroller, car seat, high chair, playmat, and more</p>
        </div>
        <div class="mt-6 relative">
            <input 
                type="text" 
                placeholder="Search for products..." 
                class="w-full p-3 pl-4 pr-10 rounded-full focus:outline-none" 
            />
            <i class="fas fa-search absolute right-4 top-1/2 transform -translate-y-1/2 text-[#171717]"></i>
        </div>
    </div>

    <div class="mt-10 px-2">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-extrabold text-[#171717]">Categories</h2>
            <button class="w-10 h-10 bg-[#171717] rounded-full flex items-center justify-center">
                <i class="fas fa-chevron-right text-white"></i>
            </button>
        </div>

        <div class="grid grid-cols-3 gap-2">
            <div class="text-center">
                <div class="bg-white rounded-[20px] p-2">
                    <img src="assets/stroller.png" alt="Category Image 1" class="w-full h-auto object-cover rounded-[20px]">
                </div>
                <p class="mt-2 text-sm md:text-base text-[#171717] text-center">Stroller</p>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-[20px] p-2">
                    <img src="assets/car-seat.webp" alt="Category Image 2" class="w-full h-auto object-cover rounded-[20px]">
                </div>
                <p class="mt-2 text-sm md:text-base text-[#171717] text-center">Car Seat</p>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-[20px] p-2">
                    <img src="assets/highchair.png" alt="Category Image 3" class="w-full h-auto object-cover rounded-[20px]">
                </div>
                <p class="mt-2 text-sm md:text-base text-[#171717] text-center">High Chair</p>
            </div>
        </div>
    </div>

    <div class="mt-10 bg-[#266FF1] p-4 relative rounded-[30px]">
        <div class="grid grid-cols-6">
            <div class="text-center col-span-2">
                <img src="assets/streak.png" alt="streak" class="w-full h-auto object-cover">
            </div>
            <div class="flex flex-col justify-center text-left col-span-4">
                <h1 class="text-4xl font-bold text-white">5 DAYS</h1>
                <p class="text-sm text-white mt-2">Join Quinton for a 10-day adventure and unlock exciting new features!</p>
            </div>
        </div>
    </div>

    <div class="mt-10 px-2">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-extrabold text-[#171717]">Special Offer</h2>
            <button class="w-10 h-10 bg-[#171717] rounded-full flex items-center justify-center">
                <i class="fas fa-chevron-right text-white"></i>
            </button>
        </div>

        <div>
            <img src="assets/banner.png" alt="special-offer" class="w-full h-auto object-cover">
        </div>
    </div>

    <div class="mt-10 px-2">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-extrabold text-[#171717]">Explore Quinton</h2>
            <button class="w-10 h-10 bg-[#171717] rounded-full flex items-center justify-center">
                <i class="fas fa-chevron-right text-white"></i>
            </button>
        </div>

        <div class="overflow-x-auto flex space-x-4">
            <video class="w-full h-96 object-cover" controls>
                <source src="assets/tiktok.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video class="w-full h-96 object-cover" controls>
                <source src="assets/tiktok2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video class="w-full h-96 object-cover" controls>
                <source src="assets/tiktok3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="mt-10 px-2">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-extrabold text-[#171717]">Upcoming Events</h2>
            <button class="w-10 h-10 bg-[#171717] rounded-full flex items-center justify-center">
                <i class="fas fa-chevron-right text-white"></i>
            </button>
        </div>

        <div>
            <img src="https://babyfairsg.com/wp-content/uploads/2023/01/TCE-Baby-Fair-Mid-Valley-KL-2-5-Mar-2023.jpg" alt="Upcoming-Events" class="w-full h-auto object-cover">
        </div>
    </div>

    <div class="mt-10 px-2">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-extrabold text-[#171717]">Best Choices</h2>
            <button class="w-10 h-10 bg-[#171717] rounded-full flex items-center justify-center">
                <i class="fas fa-chevron-right text-white"></i>
            </button>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="text-left">
                <div class="bg-white rounded-[20px] p-2 relative">
                    <img src="assets/stroller.png" alt="product-img-1" class="w-full h-auto object-cover">
                    <i class="fas fa-heart text-lg text-[#F12666] absolute top-3 right-4 cursor-pointer" id="heart-1" onclick="toggleHeart('heart-1')"></i>
                </div>
                <p class="mt-2 text-sm md:text-base text-[#171717]">On The Go</p>
                <p class="text-md text-[#171717] font-bold">RM 999.00</p>
            </div>
            <div class="text-left">
                <div class="bg-white rounded-[20px] p-2 relative">
                    <img src="assets/car-seat.webp" alt="product-img-2" class="w-full h-auto object-cover">
                    <i class="fas fa-heart text-lg text-[#F12666] absolute top-3 right-4 cursor-pointer" id="heart-2" onclick="toggleHeart('heart-2')"></i>
                </div>
                <p class="mt-2 text-sm md:text-base text-[#171717]">Maple 360</p>
                <p class="text-md text-[#171717] font-bold">RM 1699.00</p>
            </div>
        </div>
    </div>

    <script>
        function toggleHeart(id) {
            const heartIcon = document.getElementById(id);
            if (heartIcon.classList.contains('fas')) {
                heartIcon.classList.remove('fas');
                heartIcon.classList.add('far');
            } else {
                heartIcon.classList.remove('far');
                heartIcon.classList.add('fas');
            }
        }
    </script>

    <div class="bg-gradient-to-tr from-[#171717] via-[#2a2a35] to-[#171717] p-4 fixed bottom-0 left-0 w-full h-24 z-[888]">
        <div class="flex justify-between items-center text-center">
            <a href="warranty/warranty-before.php" class="flex flex-col items-center text-white">
                <i class="fas fa-file-alt text-2xl"></i>
                <p class="text-xs mt-1">Warranty</p>
            </a>
            <a href="#find-us" class="flex flex-col items-center text-white">
                <i class="fas fa-map-marker-alt text-2xl"></i>
                <p class="text-xs mt-1">Find Us</p>
            </a>

            <div class="bg-gradient-to-tr from-[#171717] via-[#2a2a35] to-[#171717] rounded-full w-20 h-20 flex items-center justify-center -mt-10 floating-animation">
                <img src="assets/q.png" alt="Logo" class="w-10 h-10">
            </div>

            <a href="#search" class="flex flex-col items-center text-white">
                <i class="fas fa-search text-2xl"></i>
                <p class="text-xs mt-1">Search</p>
            </a>

            <a href="#profile" class="flex flex-col items-center text-white">
                <i class="fas fa-user-circle text-2xl"></i>
                <p class="text-xs mt-1">Profile</p>
            </a>
        </div>
    </div>


</body>
</html>