<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
<body class="px-4 py-6 bg-[#F2F2F2] fade-in mb-[50px]">

    <div class="mt-2 bg-gradient-to-tr from-[#171717] via-[#2a2a35] to-[#171717] p-10 relative rounded-[30px] h-64">
        <a href="../home.php" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
            <i class="fa-solid fa-chevron-left text-[#171717]"></i>
        </a>
        <div class="mt-8">
            <h1 class="text-6xl font-bold text-white">Profile</h1>
        </div>
        <div class="mt-4 absolute bottom-50 left-6">
            <img src="https://i.pinimg.com/736x/c4/be/01/c4be019342074aba27dbe03dfe597c04.jpg" alt="Profile Picture" 
                 class="w-40 h-40 rounded-full object-cover">
            <p class="text-md text-[#171717] mt-2 text-center">AlyssaTheGreatDev</p>
        </div>
    </div>

    <div class="mt-40 bg-[#266FF1] p-4 relative rounded-[30px]">
        <a href="../streak.php" class="block">
            <div class="grid grid-cols-6">
                <div class="text-center col-span-2">
                    <img src="../assets/streak.png" alt="streak" class="w-full h-auto object-cover">
                </div>
                <div class="flex flex-col justify-center text-left col-span-4">
                    <h1 class="text-4xl font-bold text-white">5 DAYS</h1>
                    <p class="text-sm text-white mt-2">Join Quinton for a 10-day adventure and unlock exciting new features!</p>
                </div>
            </div>
        </a>
    </div>

    <div class="mt-4">
            <div class="bg-[#171717] rounded-[30px] p-4">
                <div class="grid grid-cols-4 gap-4 text-center">
                    <a href="#" class="flex flex-col items-center">
                        <div class="bg-[#FFFFFF] w-12 h-12 mx-auto flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#171717">
                                <path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/>
                            </svg>
                        </div>
                        <p class="mt-2 text-xs text-[#FFFFFF]">to pay</p>
                    </a>
                    <a href=".#" class="flex flex-col items-center">
                        <div class="bg-[#FFFFFF] w-12 h-12 mx-auto flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#171717">
                                <path d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-80 92L160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11Zm200-528 77-44-237-137-78 45 238 136Zm-160 93 78-45-237-137-78 45 237 137Z"/>
                            </svg>
                        </div>
                        <p class="mt-2 text-xs text-[#FFFFFF]">to ship</p>
                    </a>
                    <a href="#" class="flex flex-col items-center">
                        <div class="bg-[#FFFFFF] w-12 h-12 mx-auto flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#171717">
                                <path d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"/>
                            </svg>
                        </div>
                        <p class="mt-2 text-xs text-[#FFFFFF]">to receive</p>
                    </a>
                    <a href="#" class="flex flex-col items-center">
                        <div class="bg-[#FFFFFF] w-12 h-12 mx-auto flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#171717">
                                <path d="m480-320 56-56-63-64h167v-80H473l63-64-56-56-160 160 160 160ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm280-590q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z"/>
                            </svg>
                        </div>
                        <p class="mt-2 text-xs text-[#FFFFFF]">to cancel</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="bg-white p-6 rounded-[30px]">
            <div class="flex items-center w-full">
                <div class="w-1/3">
                    <img src="../assets/review.png" alt="Image" class="w-full h-auto object-cover">
                </div>
                <div class="w-2/3 pl-4">
                    <span class="text-4xl font-extrabold text-[#171717]">Review & Redeem</span>
                </div>
            </div>
            <div class="mt-4 text-xs text-[#171717]">
                <p>Review & Redeem: Share your Quinton product review on social media, screenshot it, and upload it to the Quinton app to receive a premium gift. Terms and conditions apply.</p>
            </div>
            <div class="flex items-center w-full mt-4">
                <div class="w-2/3">
                    <span class="text-4xl font-extrabold text-[#171717]">Verify & Claim</span>
                </div>
                <a href="review-redeem.php">
                    <div class="w-32 bg-[#F3F3F3] p-6 rounded-[30px] flex flex-col items-center justify-center">
                        <i class="fa-solid fa-camera text-[#171717] text-4xl"></i>
                        <p class="text-xs text-[#171717] mt-2 text-center">Upload Photo</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="bg-white rounded-[30px] p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-3xl font-bold text-[#171717]">General</h2>
            </div>
            <a href="personal-info.php">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/>
                        </svg>
                        </div>
                        <p class="text-md text-[#171717]">Personal Information</p>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="address-before.php">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/>
                        </svg>
                        </div>
                        <p class="text-md text-[#171717]">Address</p>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="family-before.php">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M38-428q-18-36-28-73T0-576q0-112 76-188t188-76q63 0 120 26.5t96 73.5q39-47 96-73.5T696-840q112 0 188 76t76 188q0 38-10 75t-28 73q-11-19-26-34t-35-24q9-23 14-45t5-45q0-78-53-131t-131-53q-81 0-124.5 44.5T480-616q-48-56-91.5-100T264-760q-78 0-131 53T80-576q0 23 5 45t14 45q-20 9-35 24t-26 34ZM0-80v-63q0-44 44.5-70.5T160-240q13 0 25 .5t23 2.5q-14 20-21 43t-7 49v65H0Zm240 0v-65q0-65 66.5-105T480-290q108 0 174 40t66 105v65H240Zm540 0v-65q0-26-6.5-49T754-237q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780ZM480-210q-57 0-102 15t-53 35h311q-9-20-53.5-35T480-210Zm-320-70q-33 0-56.5-23.5T80-360q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-280Zm640 0q-33 0-56.5-23.5T720-360q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-280Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-440q0 50-34.5 85T480-320Zm0-160q-17 0-28.5 11.5T440-440q0 17 11.5 28.5T480-400q17 0 28.5-11.5T520-440q0-17-11.5-28.5T480-480Zm0 40Zm1 280Z"/>
                        </svg>
                        </div>
                        <p class="text-md text-[#171717]">Family Member</p>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="notification-before.php">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/>
                        </svg>
                        </div>
                        <p class="text-md text-[#171717]">Notification</p>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="mt-4">
        <div class="bg-white rounded-[30px] p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-3xl font-bold text-[#171717]">Legal Notice</h2>
            </div>
            <a href="privacy-policy.php">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h280v-480H160v480Zm360 0h280v-480H520v480Zm-320-80h200v-80H200v80Zm0-120h200v-80H200v80Zm0-120h200v-80H200v80Zm360 240h200v-80H560v80Zm0-120h200v-80H560v80Zm0-120h200v-80H560v80ZM440-240v-480 480Z"/>
                        </svg>
                        </div>
                        <p class="text-md text-[#171717]">Privacy Policy</p>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="shipping-policy.php">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h280v-480H160v480Zm360 0h280v-480H520v480Zm-320-80h200v-80H200v80Zm0-120h200v-80H200v80Zm0-120h200v-80H200v80Zm360 240h200v-80H560v80Zm0-120h200v-80H560v80Zm0-120h200v-80H560v80ZM440-240v-480 480Z"/>
                        </svg>
                        </div>
                        <p class="text-md text-[#171717]">Shipping Policy</p>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="return-policy.php">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h280v-480H160v480Zm360 0h280v-480H520v480Zm-320-80h200v-80H200v80Zm0-120h200v-80H200v80Zm0-120h200v-80H200v80Zm360 240h200v-80H560v80Zm0-120h200v-80H560v80Zm0-120h200v-80H560v80ZM440-240v-480 480Z"/>
                        </svg>
                        </div>
                        <p class="text-md text-[#171717]">Return and Refund Policy</p>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="terms.php">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h280v-480H160v480Zm360 0h280v-480H520v480Zm-320-80h200v-80H200v80Zm0-120h200v-80H200v80Zm0-120h200v-80H200v80Zm360 240h200v-80H560v80Zm0-120h200v-80H560v80Zm0-120h200v-80H560v80ZM440-240v-480 480Z"/>
                        </svg>
                        </div>
                        <p class="text-md text-[#171717]">Terms and Condition</p>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#171717">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

</body>
</html>