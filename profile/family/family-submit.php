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

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        .slide-up-fade-in {
            animation: slideUpFadeIn 0.5s ease-out;
        }

        .fade-out {
            animation: fadeOut 1s ease-out forwards;
        }
    </style>
</head>
<body class="font-[Poppins] bg-[#FFFFFF] h-screen flex justify-center items-center">
    <div id="content" class="text-center px-6 slide-up-fade-in">
        <img src="https://i.pinimg.com/736x/b5/07/f9/b507f94fd46bcf368d83607989ca4533.jpg" alt="Family Image" class="w-[80%] mx-auto mb-4">
        <p class="text-3xl font-extrabold text-[#171717]">Family Added – Welcome Aboard!</p>
    </div>

    <script>
        setTimeout(() => {
            const content = document.getElementById('content');
            content.classList.add('fade-out');
            setTimeout(() => {
                window.location.href = "family-after.php";
            }, 1000);
        }, 1500);
    </script>
</body>
</html>