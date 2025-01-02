<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review and Redeem</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes slideUpFadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-up-fade-in {
            animation: slideUpFadeIn 0.5s ease-out;
        }
    </style>
</head>
<body class="bg-[#F2F2F2] overflow-auto mb-[50px]">

    <div class="flex items-center px-6 py-2 h-40">
        <a href="../profile.php">
            <button class="w-10 h-10 rounded-full bg-[#171717] flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </button>
        </a>
    </div>

    <div class="mt-2 px-6 text-[#171717] slide-up-fade-in">
        <h2 class="font-extrabold text-[#171717] text-4xl mb-4">Want to get started? Here's how! </h2>
    </div>

    <div class="mt-10 px-6 text-[#171717] slide-up-fade-in">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-1">
                <img src="../../assets/redeem1.png" alt="Image" class="w-full h-auto object-cover">
            </div>
            <div class="col-span-2 ml-4">
                <h2 class="text-4xl font-extrabold">Write the review</h2>
                <p class="mt-2 text-sm">Tell the world why Quinton products are the best!</p>
            </div>

            <div class="col-span-1">
                <img src="../../assets/redeem2.png" alt="Image" class="w-full h-auto object-cover">
            </div>
            <div class="col-span-2 ml-4">
                <h2 class="text-4xl font-extrabold">Share your post</h2>
                <p class="mt-2 text-sm">Post it on your favorite social media platform!</p>
            </div>

            <div class="col-span-1">
                <img src="../../assets/redeem3.png" alt="Image" class="w-full h-auto object-cover">
            </div>
            <div class="col-span-2 ml-4">
                <h2 class="text-4xl font-extrabold">Screenshot</h2>
                <p class="mt-2 text-sm">Snap a screenshot, share the proof with us, and you could be the lucky winner of Quinton's best prize!</p>
            </div>
        </div>
    </div>

    <div class="mt-10 px-6 w-full px-6 slide-up-fade-in">
        <a href="../redeem/redeem-form.php" class="w-full inline-block bg-[#232323] py-6 rounded-full text-white text-lg font-bold text-center sm:text-base md:text-lg lg:text-xl">
            Join Now
        </a>
    </div>
    
</body>
</html>