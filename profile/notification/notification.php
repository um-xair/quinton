<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

        .floatUp {
            animation: floatUp 0.5s ease-out forwards;
        }

        @keyframes floatUp {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .floatDown {
            animation: floatDown 0.5s ease-in-out forwards;
        }

        @keyframes floatDown {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(20px);
                opacity: 0;
            }
        }
        
        .fade-out {
            animation: fadeOut 1s ease-out forwards;
        }
    </style>
</head>
<body class="font-[Poppins] bg-[#F2F2F2] h-screen fade-in mb-[100px]">

    <div class="w-full bg-[#171717] h-40 rounded-b-[90px] py-4 z-50">
        <div class="flex items-center justify-between px-6 h-full">
            <a href="../profile.php" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-[#171717]"></i>
            </a>
            <h1 class="text-white text-2xl font-extrabold sm:text-xl md:text-2xl lg:text-3xl">Notification</h1>
            <div class="w-10 h-10"></div>
        </div>
    </div>

    <div id="notifications">
        <div class="mt-6 px-4">
            <div class="bg-white p-6 rounded-[30px]">
                <p class="text-xs text-gray-600 mb-4">1 December 2024</p>
                <h3 class="font-bold text-[#171717] text-lg mb-4">Exciting News! Our 12.12 Promotion is here!</h3>
                <p class="text-[#171717] text-sm mb-4" id="promoText">
                    Enjoy amazing discounts from December 12th to December 15th. Don’t miss out on special deals, including our exclusive stroller promotion!
                    Shop now and save big! 🛍️
                    <span id="moreText" class="hidden">This is just the beginning! Take advantage of unbeatable prices on all our products, including exclusive online-only offers. Hurry, while stocks last!</span>
                </p>
                <a href="javascript:void(0)" id="seeMoreLink" class="text-blue-500 text-sm" onclick="toggleText()">See More</a>
                <img src="../../assets/banner.png" alt="12.12 Promotion" class="w-full rounded-lg mt-4">
            </div>
        </div>

        <div class="mt-4 px-4">
            <div class="bg-white p-6 rounded-[30px]">
                <p class="text-xs text-gray-600 mb-4">1 December 2024</p>
                <h3 class="font-bold text-[#171717] text-lg mb-4">Big Savings Alert!</h3>
                <p class="text-[#171717] text-sm mb-4">
                    Our 12.12 Sale is live! Enjoy unbeatable discounts from December 12th to 15th. Special deals on strollers and more await you! 🎁🛒
                </p>
            </div>
        </div>
    </div>

    <a href="javascript:void(0)" onclick="toggleMenu()" class="fixed bottom-6 right-6 bg-[#171717] rounded-full w-14 h-14 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF">
            <path d="M240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400Z"/>
        </svg>
    </a>

    <div id="dropdownMenu" class="hidden fixed bottom-20 right-6 bg-[#171717] rounded-[10px] w-48 mb-4">
        <ul class="py-2 text-[#FFFFFF]">
            <li class="px-4 py-2 cursor-pointer" onclick="deleteAllNotifications()">Delete All</li>
        </ul>
    </div>

    <div id="successModal" class="modal w-full h-full fixed inset-0 bg-white flex items-center justify-center z-30 hidden">
        <div id="content" class="text-center px-6 slide-up-fade-in">
            <img src="https://i.pinimg.com/736x/b5/07/f9/b507f94fd46bcf368d83607989ca4533.jpg" alt="notification" class="w-[80%] mx-auto mb-4">
            <p class="text-3xl font-extrabold text-[#171717]">Poof! Your Notification Is Gone!</p>
        </div>
    </div>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('dropdownMenu');
            menu.classList.toggle('hidden');
        }

        function deleteAllNotifications() {
            const notificationsContainer = document.getElementById('notifications');
            notificationsContainer.innerHTML = ''; 
            const menu = document.getElementById('dropdownMenu');
            menu.classList.add('hidden');
            const modal = document.getElementById('successModal');
            modal.classList.remove('hidden'); 
            modal.classList.add('floatUp'); 
            setTimeout(() => {
                modal.classList.remove('floatUp');
                modal.classList.add('floatDown'); 
            }, 3000);
        }

        function closeModal() {
            const modal = document.getElementById('successModal');
            modal.classList.add('hidden');
        }
        document.addEventListener('click', (event) => {
            const menu = document.getElementById('dropdownMenu');
            const button = document.querySelector('a[onclick="toggleMenu()"]');

            if (!menu.contains(event.target) && !button.contains(event.target)) {
                menu.classList.add('hidden');
            }
        });

        function toggleText() {
            var moreText = document.getElementById('moreText');
            var seeMoreLink = document.getElementById('seeMoreLink');

            if (moreText.classList.contains('hidden')) {
                moreText.classList.remove('hidden');
                seeMoreLink.innerText = "See Less";
            } else {
                moreText.classList.add('hidden');
                seeMoreLink.innerText = "See More";
            }
        }
    </script>

</body>
</html>