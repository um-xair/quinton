<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty</title>
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
<body class="bg-[#F2F2F2] overflow-auto">

    <div class="flex items-center px-6 py-2 h-40">
        <a href="warranty-details.php">
            <button class="w-10 h-10 rounded-full bg-[#171717] flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </button>
        </a>
    </div>

    <div class="mt-2 px-6 text-[#171717] text slide-up-fade-in">
        <h2 class="font-extrabold text-[#171717] text-4xl mb-4">FAQ Section</h2>
    </div>

    <div class="mt-6 px-6 text-[#171717] text-justify slide-up-fade-in">
        <div class="flex items-center space-x-4 mt-10">
            <img src="../assets/baby.png" alt="Description of image" class="w-16 h-16 object-cover">
            <div>
                <h4 class="font-semibold text-lg">What age group is the Nior Stroller suitable for?</h4>
                <p class="text-sm mt-2">The Nior Stroller is designed for babies from newborn to 5 or 6 years old, depending on the child’s weight and size.</p>
            </div>
        </div>
        <div class="flex items-center space-x-4 mt-10">
            <img src="../assets/laundry.png" alt="Description of image" class="w-16 h-16 object-cover">
            <div>
                <h4 class="font-semibold text-lg">How do I clean the Nior Stroller?</h4>
                <p class="text-sm mt-2">The seat fabric of the Nior Stroller is removable and should be hand-washed. Use mild detergent and lukewarm water to gently clean the fabric.</p>
            </div>
        </div>
    </div>

</body>
</html>