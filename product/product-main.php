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

    <div class="mt-6">
        <div class="overflow-hidden">
            <div class="grid grid-cols-4 gap-4 px-2 transition-transform duration-500" id="productGrid">
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
            </div>
        </div>
        
        
        <div class="mt-4 flex justify-center gap-2" id="pagination">
            <button class="w-3 h-3 rounded-full bg-[#D2D2D2]"></button>
            <button class="w-3 h-3 rounded-full bg-[#D2D2D2]"></button>
            <button class="w-3 h-3 rounded-full bg-[#D2D2D2]"></button>
        </div>
    </div>
        
    <script>
        const productGrid = document.getElementById('productGrid');
        const pagination = document.getElementById('pagination').children;
        let currentPage = 0;
        
        const productsPerPage = 4;
        const totalPages = 3; 
        
        function slideTo(pageIndex) {
            const totalProducts = document.querySelectorAll('#productGrid > div').length;
            const totalWidth = productGrid.offsetWidth;
            const offset = -(pageIndex * totalWidth);
        
            productGrid.style.transform = `translateX(${offset}px)`;
        
            Array.from(pagination).forEach((bullet, i) => {
                if (i === pageIndex) {
                    bullet.classList.add('bg-blue-500');
                } else {
                    bullet.classList.remove('bg-blue-500');
                }
            });
        }
    
        Array.from(pagination).forEach((bullet, index) => {
            bullet.addEventListener('click', () => slideTo(index));
        });
    
        slideTo(0);
    </script>









</body>
</html>