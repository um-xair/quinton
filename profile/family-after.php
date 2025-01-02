<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family</title>
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
<body class="font-[Poppins] bg-[#F2F2F2] h-screen fade-in">

    <div class="w-full bg-[#171717] h-40 rounded-b-[90px] py-4 z-50">
        <div class="flex items-center justify-between px-6 h-full">
            <a href="profile.php" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-[#171717]"></i>
            </a>
            <h1 class="text-white text-2xl font-extrabold sm:text-xl md:text-2xl lg:text-3xl">Family</h1>
            <div class="w-10 h-10"></div>
        </div>
    </div>

    <div class="mt-10 px-6">
        <div class="grid grid-cols-2 gap-2">
            <div class="text-center">
                <a href="family-edit.php" class="block">
                    <div class="bg-white rounded-[30px] p-4 relative">
                        <div class="relative w-24 h-24 mx-auto">
                            <img src="https://i.pinimg.com/736x/4a/e4/25/4ae425d4f7b2e8c3d22c939972c6782d.jpg" alt="profile-pic-1" class="w-full h-full object-cover rounded-full">
                            <div class="absolute bottom-0 right-0 bg-[#F12666] w-8 h-8 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-auto" viewBox="0 0 24 24" fill="#FFFFFF">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="mt-4 text-md text-[#171717] font-semibold">Baim</p>
                        <p class="text-sm text-[#171717]">+65 1234 5678</p>
                        <p class="text-sm text-[#171717]">01 Jan 1990</p>
                    </div>
                </a>
            </div>

            <div class="text-center">
                <a href="#" class="block">
                    <div class="bg-white rounded-[30px] p-4 relative">
                        <div class="relative w-24 h-24 mx-auto">
                            <img src="https://i.pinimg.com/736x/2f/51/fd/2f51fdc7f6a0b75e6d87f61fa3854b5d.jpg" alt="profile-pic-2" class="w-full h-full object-cover rounded-full">
                            <div class="absolute bottom-0 right-0 bg-[#266FF1] w-8 h-8 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" class="w-5 h-5 text-[#171717] mx-auto" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                                    <path d="m480-840 440 330-48 64-72-54v380H160v-380l-72 54-48-64 440-330ZM294-478q0 53 57 113t129 125q72-65 129-125t57-113q0-44-30-73t-72-29q-26 0-47.5 10.5T480-542q-15-17-37.5-27.5T396-580q-42 0-72 29t-30 73Zm426 278v-360L480-740 240-560v360h480Zm0 0H240h480Z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="mt-4 text-md text-[#171717] font-semibold">Baim</p>
                        <p class="text-sm text-[#171717]">+65 1234 5678</p>
                        <p class="text-sm text-[#171717]">01 Jan 1990</p>
                    </div>
                </a>
            </div>

            <div class="text-center">
                <a href="#" class="block">
                    <div class="bg-white rounded-[30px] p-4 relative">
                        <div class="relative w-24 h-24 mx-auto">
                            <img src="https://i.pinimg.com/736x/c0/1d/24/c01d244f31d2d5a459e829ac3049da01.jpg" alt="profile-pic-1" class="w-full h-full object-cover rounded-full">
                            <div class="absolute bottom-0 right-0 bg-[#F6643C] w-8 h-8 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#171717] mx-auto" viewBox="0 -960 960 960" fill="#FFFFFF">
                                    <path d="M580-490q-21 0-35.5-14.5T530-540q0-21 14.5-35.5T580-590q21 0 35.5 14.5T630-540q0 21-14.5 35.5T580-490Zm-200 0q-21 0-35.5-14.5T330-540q0-21 14.5-35.5T380-590q21 0 35.5 14.5T430-540q0 21-14.5 35.5T380-490Zm100 210q-60 0-108.5-33T300-400h360q-23 54-71.5 87T480-280Zm0 160q-75 0-140.5-28.5t-114-77q-48.5-48.5-77-114T120-480q0-75 28.5-140.5t77-114q48.5-48.5 114-77T480-840q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480q0 75-28.5 140.5t-77 114q-48.5 48.5-114 77T480-120Zm0-80q116 0 198-82t82-198q0-116-82-198t-198-82h-12q-6 0-12 2-6 6-8 13t-2 15q0 21 14.5 35.5T496-680q9 0 16.5-3t15.5-3q12 0 20 9t8 21q0 23-21.5 29.5T496-620q-45 0-77.5-32.5T386-730v-6q0-3 1-8-83 30-135 101t-52 163q0 116 82 198t198 82Zm0-280Z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="mt-4 text-md text-[#171717] font-semibold">Baim</p>
                        <p class="text-sm text-[#171717]">+65 1234 5678</p>
                        <p class="text-sm text-[#171717]">01 Jan 1990</p>
                    </div>
                </a>
            </div>

            <div class="text-center">
                <a href="#" class="block">
                    <div class="bg-white rounded-[30px] p-4 relative">
                        <div class="relative w-24 h-24 mx-auto">
                            <img src="https://i.pinimg.com/736x/43/18/6f/43186f5140735143d188369e530e4849.jpg" alt="profile-pic-1" class="w-full h-full object-cover rounded-full">
                            <div class="absolute bottom-0 right-0 bg-[#684CF0] w-8 h-8 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-auto" viewBox="0 -960 960 960" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="50">
                                    <path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm180-160q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm240 0q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm180 160q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="mt-4 text-md text-[#171717] font-semibold">Baim</p>
                        <p class="text-sm text-[#171717]">+65 1234 5678</p>
                        <p class="text-sm text-[#171717]">01 Jan 1990</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
        
    <div class="fixed bottom-10 left-0 w-full px-6 z-[999]">
        <a href="family-form.php" class="w-full inline-block bg-[#232323] py-6 rounded-full text-white text-lg font-bold text-center sm:text-base md:text-lg lg:text-xl">
            Add Family
        </a>
    </div>

</body>
</html>