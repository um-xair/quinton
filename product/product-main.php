<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
            animation: fadeIn 0.3s ease-in-out forwards;
        }
    </style>
</head>
<body class="px-4 py-6 bg-[#F2F2F2] fade-in mb-[200px]">

    <?php include('../header.php'); ?>

    <div class="mt-4 p-4 bg-[#171717] relative rounded-[30px]">
        <div class="relative">
            <input 
                type="text" 
                placeholder="Search for products..." 
                class="w-full p-3 pl-4 pr-10 rounded-full focus:outline-none bg-white text-black" 
            />
            <i class="fas fa-search absolute right-4 top-1/2 transform -translate-y-1/2 text-black"></i>
        </div>
    </div>

    <div class="mt-6 px-2">
        <div class="overflow-x-auto">
            <div class="flex gap-2">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center overflow-hidden p-2">
                        <img src="../assets/stroller.png" alt="Image 1" class="w-full h-full object-cover" />
                    </div>
                    <p class="mt-2 text-center text-[#171717] text-xs">stroller</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center overflow-hidden p-2">
                        <img src="../assets/highchair.png" alt="Image 2" class="w-full h-full object-cover" />
                    </div>
                    <p class="mt-2 text-center text-[#171717] text-xs">high chair</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center overflow-hidden p-2">
                        <img src="../assets/crib.png" alt="Image 3" class="w-full h-full object-cover" />
                    </div>
                    <p class="mt-2 text-center text-[#171717] text-xs">baby crib</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center overflow-hidden p-2">
                        <img src="../assets/coxy.png" alt="Image 4" class="w-full h-full object-cover" />
                    </div>
                    <p class="mt-2 text-center text-[#171717] text-xs">car seat</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center overflow-hidden p-2">
                        <img src="../assets/stroller.png" alt="Image 5" class="w-full h-full object-cover" />
                    </div>
                    <p class="mt-2 text-center text-[#171717] text-xs">stroller 2</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center overflow-hidden p-2">
                        <img src="../assets/highchair.png" alt="Image 6" class="w-full h-full object-cover" />
                    </div>
                    <p class="mt-2 text-center text-[#171717] text-xs">high chair 2</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 px-2">
        <div class="grid grid-cols-2 gap-2">
            <div class="flex flex-col">
                <div class="bg-white rounded-[30px] p-2 relative">
                    <img src="../assets/stroller.png" alt="product-img-1" class="w-full h-auto object-cover">
                </div>
                <div class="ml-2 mt-2">
                    <p class="text-sm md:text-base text-[#171717]">On The Go</p>
                    <p class="text-md text-[#171717] font-bold">RM 999.00</p>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="bg-white rounded-[30px] p-2 relative">
                    <img src="../assets/car-seat.webp" alt="product-img-2" class="w-full h-auto object-cover">
                </div>
                <div class="ml-2 mt-2">
                    <p class="text-sm md:text-base text-[#171717]">Maple 360</p>
                    <p class="text-md text-[#171717] font-bold">RM 1699.00</p>
                </div>
            </div>
        </div>
    </div>

















</body>
</html>