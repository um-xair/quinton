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
    </style>
</head>
<body class="px-4 py-6 bg-[#F2F2F2]">

    <div class="bg-gradient-to-r from-[#151515] via-[#272829] to-[#151515] p-10 relative rounded-[20px] backdrop-blur-sm bg-opacity-40">
        <div>
            <h1 class="text-5xl font-bold text-white">Find the Best Baby Gear</h1>
            <p class="text-sm text-white mt-2">Stroller, car seat, high chair, playmat, and more</p>
        </div>
        <div class="absolute top-6 right-6">
            <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center shadow-md">
                <i class="fas fa-shopping-cart text-lg text-[#272829]"></i>
            </button>
            <span class="absolute -top-1 -right-1 bg-yellow-500 text-[#272829] text-xs rounded-full px-1">3</span>
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

    <div class="grid grid-cols-3 gap-4 mt-6">
    <div class="bg-white p-4 rounded-[20px] text-center w-full flex flex-col justify-between h-40">
        <img src="assets/stroller.png" alt="Image 1" class="w-full h-24 object-cover">
        <p class="text-xs font-semibold text-[#272829]">Stroller</p>
    </div>

    <div class="bg-white p-4 rounded-[20px] text-center w-full flex flex-col justify-between h-40">
        <img src="assets/car-seat.webp" alt="Image 2" class="w-full h-24 object-cover">
        <p class="text-xs font-semibold text-[#272829]">Car Seat</p>
    </div>

    <div class="bg-white p-4 rounded-[20px] text-center w-full flex flex-col justify-between h-40">
        <img src="assets/highchair.png" alt="Image 3" class="w-full h-24 object-cover">
        <p class="text-xs font-semibold text-[#272829]">High Chair</p>
    </div>
</div>






</body>
</html>
