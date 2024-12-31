<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
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
<body class="py-6 bg-[#F2F2F2">

    <div class="bg-gradient-to-tr from-[#171717] via-[#2a2a35] to-[#171717] px-4 py-2 relative rounded-[30px] backdrop-blur-sm bg-opacity-40">
        <div class="flex justify-between items-center">
            <div>
                <button id="menuButton" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                    <i class="fas fa-bars text-lg text-[#171717]"></i>
                </button>
            </div>
            <div class="flex-1 text-center">
                <img src="assets/logo-white.png" alt="Explore the World Together" class="w-1/2 mx-auto sm:w-1/3 md:w-1/4 lg:w-1/6">
            </div>
            <div>
                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                    <i class="fas fa-shopping-cart text-lg text-[#171717]"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="menu" class="hidden px-4 fixed top-0 left-0 w-full h-full bg-[#171717] bg-opacity-95 backdrop-blur-md z-[999] overflow-y-auto">
        <div class="flex justify-between items-center mt-8 px-4">
            <div>
                <button id="closeMenu" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                    <i class="fa-solid fa-chevron-left text-lg text-[#171717]"></i>
                </button>
            </div>
            <div class="flex-1 text-center mr-10">
                <img src="assets/logo-white.png" alt="Explore the World Together" class="w-1/2 mx-auto sm:w-1/3 md:w-1/4 lg:w-1/6">
            </div>
        </div>

        <hr class="border-t-2 border-white mt-4">

        <div class="mt-10 px-10 space-y-10">
            <div class="flex items-center mb-6 hover:bg-white hover:bg-opacity-30 hover:backdrop-blur-sm hover:rounded-xl p-2 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                    <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/>
                </svg>
                <p class="ml-4 text-white text-xl">Home</p>
            </div>
            <div class="flex items-center mb-6 hover:bg-white hover:bg-opacity-30 hover:backdrop-blur-sm hover:rounded-xl p-2 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                    <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/>
                </svg>
                <p class="ml-4 text-white text-xl">Profile</p>
            </div>
            <div class="flex items-center mb-6 hover:bg-white hover:bg-opacity-30 hover:backdrop-blur-sm hover:rounded-xl p-2 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                    <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z"/>
                </svg>
                <p class="ml-4 text-white text-xl">Saved Product</p>
            </div>
            <div class="flex items-center mb-6 hover:bg-white hover:bg-opacity-30 hover:backdrop-blur-sm hover:rounded-xl p-2 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                    <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Z"/>
                </svg>
                <p class="ml-4 text-white text-xl">Events</p>
            </div>
            <div class="flex items-center mb-6 hover:bg-white hover:bg-opacity-30 hover:backdrop-blur-sm hover:rounded-xl p-2 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                    <path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z"/>
                </svg>
                <p class="ml-4 text-white text-xl">Setting</p>
            </div>
            <div class="flex items-center mb-6 hover:bg-white hover:bg-opacity-30 hover:backdrop-blur-sm hover:rounded-xl p-2 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                    <path d="M440-120v-80h320v-284q0-117-81.5-198.5T480-764q-117 0-198.5 81.5T200-484v244h-40q-33 0-56.5-23.5T80-320v-80q0-21 10.5-39.5T120-469l3-53q8-68 39.5-126t79-101q47.5-43 109-67T480-840q68 0 129 24t109 66.5Q766-707 797-649t40 126l3 52q19 9 29.5 27t10.5 38v92q0 20-10.5 38T840-249v49q0 33-23.5 56.5T760-120H440Zm-80-280q-17 0-28.5-11.5T320-440q0-17 11.5-28.5T360-480q17 0 28.5 11.5T400-440q0 17-11.5 28.5T360-400Zm240 0q-17 0-28.5-11.5T560-440q0-17 11.5-28.5T600-480q17 0 28.5 11.5T640-440q0 17-11.5 28.5T600-400Zm-359-62q-7-106 64-182t177-76q89 0 156.5 56.5T720-519q-91-1-167.5-49T435-698q-16 80-67.5 142.5T241-462Z"/>
                </svg>
                <p class="ml-4 text-white text-xl">Support Center</p>
            </div>
            <div class="flex items-center mb-6 hover:bg-white hover:bg-opacity-30 hover:backdrop-blur-sm hover:rounded-xl p-2 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF">
                    <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/>
                </svg>
                <p class="ml-4 text-white text-xl">Logout</p>
            </div>
        </div>

        <hr class="border-t-2 border-white mt-10">

        <div class="mt-10 px-10 mb-20">
            <h2 class="text-white text-xl mb-4">Follow Us</h2>
            <div class="flex justify-start items-center space-x-6">
                <a href="#" class="text-white text-2xl"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white text-2xl"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#" class="text-white text-2xl"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white text-2xl"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <script>
        const menuButton = document.getElementById('menuButton');
        const menu = document.getElementById('menu');
        const closeMenuButton = document.getElementById('closeMenu');
        const body = document.body; 

        menuButton.addEventListener('click', () => {
            menu.classList.remove('hidden');
            body.classList.add('overflow-hidden'); 
        }); 

        closeMenuButton.addEventListener('click', () => {
            menu.classList.add('hidden');
            body.classList.remove('overflow-hidden'); 
        });
    </script>

</body>
</html>
