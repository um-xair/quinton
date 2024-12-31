<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty</title>
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
            animation: fadeIn 1s ease-in-out forwards;
        }
    </style>
</head>
<body class="font-[Poppins] bg-[#F2F2F2] h-screen fade-in">

    <div class="w-full bg-[#171717] h-40 rounded-b-[90px] py-4 z-50">
        <div class="flex items-center justify-between px-6 h-full">
            <a href="../home.php" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-[#171717]"></i>
            </a>
            <h1 class="text-white text-2xl font-extrabold sm:text-xl md:text-2xl lg:text-3xl">Warranty</h1>
            <div class="w-10 h-10"></div>
        </div>
    </div>

    <div class="mt-10 px-6">
        <h2 class="text-[#171717] text-3xl font-bold mb-4 sm:text-2xl md:text-3xl lg:text-4xl">Let's get your Quinton product set up!</h2>
        <img src="../assets/warranty.png" alt="warranty" class="mt-6 w-80 mx-auto sm:w-72 md:w-80 lg:w-96">
    </div>

    <div class="fixed bottom-10 left-0 w-full px-6 z-[999]">
        <a href="warranty-category.php" class="w-full inline-block bg-[#232323] py-6 rounded-full text-white text-lg font-bold text-center sm:text-base md:text-lg lg:text-xl">
            Add Product
        </a>
    </div>

</body>
</html>