<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
<body class="font-[Poppins]">

    <div class="fixed inset-0 bg-cover bg-center bg-[url('assets/photo.webp')] h-full">
        <div class="absolute inset-0 bg-black bg-opacity-80"></div>
        <div class="relative h-full flex flex-col justify-between text-white p-6 sm:p-8 md:p-10 lg:p-12">
            <div class="flex flex-col justify-center items-center mt-20 text-center">
                <img src="assets/explore.png" alt="Explore the World Together" class="w-3/4 sm:w-2/3 md:w-1/2 lg:w-1/3 h-auto">
            </div>
            <div class="flex flex-col items-center space-y-4 mb-12 px-4 sm:px-8 md:px-10 lg:px-12">
                <button onclick="window.location.href='login.php'" class="bg-white text-[#272829] py-4 px-6 rounded-full w-full font-semibold hover:bg-[#61677A] hover:text-white transition-all duration-200 ease-in-out">
                    Login
                </button>
                <button onclick="window.location.href='register.php'" class="bg-transparent border-2 border-white text-white py-4 px-6 rounded-full w-full font-semibold hover:bg-[#FFFFFF] hover:text-[#272829] transition-all duration-200 ease-in-out">
                    Register
                </button>
                <button onclick="window.location.href='guest.php'" class="bg-transparent border-2 border-white text-white py-4 px-6 rounded-full w-full font-semibold hover:bg-[#FFFFFF] hover:text-[#272829] transition-all duration-200 ease-in-out">
                    Continue as Guest
                </button>
            </div>
        </div>
    </div>

</body>
</html>