<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti"></script>
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
        <a href="home.php">
            <button class="w-10 h-10 rounded-full bg-[#171717] flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </button>
        </a>
    </div>

    <div class="flex flex-col items-center justify-center slide-up-fade-in" id="streak-container">
        <img src="assets/streak.png" alt="Streak Image" class="w-96 object-cover mb-4">
        <h2 class="text-6xl font-extrabold text-[#171717] mb-2">5 DAYS</h2>
        <p class="text-center text-[#171717] text-sm px-6">with Quinton, and the adventure continues! Stay with us for 10 days to unlock exciting new features.</p>
    </div>

    <script>
        const streakContainer = document.getElementById('streak-container');
        streakContainer.addEventListener('animationend', function() {
            confetti();
        });
    </script>

</body>
</html>