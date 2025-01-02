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
<body class="font-[Poppins] bg-[#F2F2F2] h-auto fade-in mb-[200px]">

    <div class="w-full bg-[#171717] h-40 rounded-b-[90px] py-4 z-50">
        <div class="flex items-center justify-between px-6 h-full">
            <a href="profile.php" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-[#171717]"></i>
            </a>
            <h1 class="text-white text-2xl font-extrabold sm:text-xl md:text-2xl lg:text-3xl px-1 text-center">Personal Information</h1>
            <div class="w-10 h-10"></div>
        </div>
    </div>

    <div class="mt-10 px-6 flex justify-center">
        <div class="relative">
            <a href="pfp-edit.php" class="block">
                <img src="https://i.pinimg.com/736x/c4/be/01/c4be019342074aba27dbe03dfe597c04.jpg" alt="Profile" class="w-40 h-40 rounded-full object-cover">
                <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center p-2 rounded-full">
                    <i class="fa-solid fa-camera text-white text-xl"></i>
                    <span class="text-white text-xl font-bold ml-2">Edit</span>
                </div>
            </a>
        </div>
    </div>

    <div class="mt-10 px-6">
        <form>
            <div class="mb-6">
                <label for="full-name" class="block text-[#171717] text-md font-semibold">Full Name</label>
                <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" class="w-full p-3 mt-2 rounded-full" required>
            </div>

            <div class="mb-6">
                <label for="ic-number" class="block text-[#171717] text-md font-semibold">IC Number</label>
                <input type="text" id="ic-number" name="ic-number" placeholder="Enter your IC number" class="w-full p-3 mt-2 rounded-full" required>
            </div>

            <div class="mb-6">
                <label for="email" class="block text-[#171717] text-md font-semibold">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-3 mt-2 rounded-full" required>
            </div>

            <div class="mb-6">
                <label for="phone-number" class="block text-[#171717] text-md font-semibold">Phone Number</label>
                <input type="tel" id="phone-number" name="phone-number" placeholder="Enter your phone number" class="w-full p-3 mt-2 rounded-full" required>
            </div>

            <div class="mb-6">
                <label for="dob" class="block text-[#171717] text-md font-semibold">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="w-full p-3 mt-2 rounded-full" required>
            </div>

            <div class="mb-6">
                <label for="race" class="block text-[#171717] text-md font-semibold">Race</label>
                <input type="text" id="race" name="race" placeholder="Enter your race" class="w-full p-3 mt-2 rounded-full" required>
            </div>

        </form>
    </div>

    <div class="fixed bottom-10 left-0 w-full px-6 z-[999]">
        <a href="address-form.php" class="w-full inline-block bg-[#232323] py-6 rounded-full text-white text-lg font-bold text-center sm:text-base md:text-lg lg:text-xl">
            Save
        </a>
    </div>

</body>
</html>