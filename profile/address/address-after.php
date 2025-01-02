<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
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
<body class="font-[Poppins] bg-[#F2F2F2] h-auto fade-in">

<div class="w-full bg-[#171717] h-40 rounded-b-[90px] py-4 z-50">
        <div class="flex items-center justify-between px-6 h-full">
            <a href="../profile.php" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-[#171717]"></i>
            </a>
            <h1 class="text-white text-2xl font-extrabold sm:text-xl md:text-2xl lg:text-3xl">Address</h1>
            <div class="w-10 h-10"></div>
        </div>
    </div>

    <div class="mt-10 px-6">
        <div class="bg-white p-6 rounded-[30px] mb-4">
            <a href="address-edit.php" class="block">
                <div class="flex items-center space-x-4">
                    <div class="bg-[#266FF1] p-4 rounded-[20px] text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" class="w-8 h-8 mx-auto" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/>
                        </svg>
                    </div>
                    <div class="text-2xl font-bold">Home Address</div>
                </div>
                <hr class="my-4">
                <div class="text-sm">
                    <p class="font-semibold text-lg">John Doe</p>
                    <p class="mb-4">+1234567890</p>
                    <p>1234 Elm Street, Springfield, IL, 62704</p>
                </div>
            </a>
        </div>

        <div class="bg-white p-6 rounded-[30px] mb-4">
            <a href="#" class="block">
                <div class="flex items-center space-x-4">
                    <div class="bg-[#684CF0] p-4 rounded-[20px] text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" class="w-8 h-8 mx-auto" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="M400-106v-228l56-160q5-11 14.5-18.5T494-520h292q14 0 24 7.5t14 18.5l56 160v228q0 11-7.5 18.5T854-80h-28q-11 0-18.5-7.5T800-106v-34H480v34q0 11-7.5 18.5T454-80h-28q-11 0-18.5-7.5T400-106Zm80-274h320l-28-80H508l-28 80Zm-20 60v120-120Zm60 100q17 0 28.5-11.5T560-260q0-17-11.5-28.5T520-300q-17 0-28.5 11.5T480-260q0 17 11.5 28.5T520-220Zm240 0q17 0 28.5-11.5T800-260q0-17-11.5-28.5T760-300q-17 0-28.5 11.5T720-260q0 17 11.5 28.5T760-220ZM240-400v-80h80v80h-80Zm200-240v-80h80v80h-80ZM240-240v-80h80v80h-80Zm0 160v-80h80v80h-80ZM80-80v-560h200v-240h400v280h-80v-200H360v240H160v480H80Zm380-120h360v-120H460v120Z"/>
                        </svg>
                    </div>
                    <div class="text-2xl font-bold">Work Address</div>
                </div>
                <hr class="my-4">
                <div class="text-sm">
                    <p class="font-semibold text-lg">John Doe</p>
                    <p class="mb-4">+1234567890</p>
                    <p>1234 Elm Street, Springfield, IL, 62704</p>
                </div>
            </a>
        </div>

        <div class="bg-white p-6 rounded-[30px] mb-4">
            <a href="#" class="block">
                <div class="flex items-center space-x-4">
                    <div class="bg-[#F12666] p-4 rounded-[20px] text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" class="w-8 h-8 mx-auto" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="m480-120-58-52q-101-91-167-157T150-447.5Q111-500 95.5-544T80-634q0-94 63-157t157-63q52 0 99 22t81 62q34-40 81-62t99-22q94 0 157 63t63 157q0 46-15.5 90T810-447.5Q771-395 705-329T538-172l-58 52Zm0-108q96-86 158-147.5t98-107q36-45.5 50-81t14-70.5q0-60-40-100t-100-40q-47 0-87 26.5T518-680h-76q-15-41-55-67.5T300-774q-60 0-100 40t-40 100q0 35 14 70.5t50 81q36 45.5 98 107T480-228Zm0-273Z"/>
                        </svg>
                    </div>
                    <div class="text-2xl font-bold">Likes Address</div>
                </div>
                <hr class="my-4">
                <div class="text-sm">
                    <p class="font-semibold text-lg">John Doe</p>
                    <p class="mb-4">+1234567890</p>
                    <p>1234 Elm Street, Springfield, IL, 62704</p>
                </div>
            </a>
        </div>

        <div class="bg-white p-6 rounded-[30px] mb-4">
            <a href="#" class="block">
                <div class="flex items-center space-x-4">
                    <div class="bg-[#F6643C] p-4 rounded-[20px] text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" class="w-8 h-8 mx-auto" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
                            <path d="m260-520 220-360 220 360H260ZM700-80q-75 0-127.5-52.5T520-260q0-75 52.5-127.5T700-440q75 0 127.5 52.5T880-260q0 75-52.5 127.5T700-80Zm-580-20v-320h320v320H120Zm580-60q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-500-20h160v-160H200v160Zm202-420h156l-78-126-78 126Zm78 0ZM360-340Zm340 80Z"/>
                        </svg>
                    </div>
                    <div class="text-2xl font-bold">Others Address</div>
                </div>
                <hr class="my-4">
                <div class="text-sm">
                    <p class="font-semibold text-lg">John Doe</p>
                    <p class="mb-4">+1234567890</p>
                    <p>1234 Elm Street, Springfield, IL, 62704</p>
                </div>
            </a>
        </div>
    </div>

    <div class="mt-10 w-full px-6 mb-6">
        <a href="address-form.php" class="w-full inline-block bg-[#232323] py-6 rounded-full text-white text-lg font-bold text-center sm:text-base md:text-lg lg:text-xl">
            Add Address
        </a>
    </div>

</body>
</html>