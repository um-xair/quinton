<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Register</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <script src="https://cdn.tailwindcss.com"></script> 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet"> 
    <style> 
        body { 
            font-family: 'Poppins', sans-serif; 
        } 
    </style> 
</head> 
<body class="h-screen bg-cover bg-center relative" style="background-image: url('assets/photo.webp');"> 
    <div class="absolute inset-0 bg-black bg-opacity-50"></div> 

    <div class="relative z-10 flex justify-center items-center h-full px-4"> 
        <div class="bg-white bg-opacity-50 backdrop-blur-md rounded-[30px] p-10 w-full text-center"> 
            <div class="mb-6 text-[#171717]"> 
                <h2 class="text-2xl font-bold">Let's make it official!</h2> 
                <p class="text-sm">Begin your registration now.</p> 
            </div> 
            <form action="" method="POST">
                <div class="mb-6">
                    <div class="flex items-center rounded-full px-4 py-3 mb-4 bg-white">
                        <i class="fas fa-user text-[#171717]"></i>
                        <input type="text" name="full_name" placeholder="full name" required class="flex-1 w-full px-2 text-gray-700 focus:outline-none">
                    </div>
                    <div class="flex items-center rounded-full px-4 py-3 mb-4 bg-white">
                        <i class="fas fa-phone text-[#171717]"></i>
                        <input type="tel" name="phone_number" placeholder="phone number" required class="flex-1 w-full px-2 text-gray-700 focus:outline-none">
                    </div>
                    <div class="flex items-center rounded-full px-4 py-3 mb-4 bg-white">
                        <i class="fas fa-envelope text-[#171717]"></i>
                        <input type="email" name="email" placeholder="email address" required class="flex-1 w-full px-2 text-gray-700 focus:outline-none">
                    </div>
                    <div class="flex items-center rounded-full px-4 py-3 mb-4 bg-white relative">
                        <i class="fas fa-lock text-[#171717]"></i>
                        <input type="password" id="password" name="password" placeholder="Password" required class="flex-1 w-full px-2 text-gray-700 focus:outline-none">
                        <i class="fas fa-eye-slash text-[#171717] absolute right-4 cursor-pointer" id="togglePassword1" onclick="togglePassword('password', 'togglePassword1')"></i>
                    </div>
                    <div class="flex items-center rounded-full px-4 py-3 mb-4 bg-white relative">
                        <i class="fas fa-lock text-[#171717]"></i>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required class="flex-1 w-full px-2 text-gray-700 focus:outline-none">
                        <i class="fas fa-eye-slash text-[#171717] absolute right-4 cursor-pointer" id="togglePassword2" onclick="togglePassword('confirm_password', 'togglePassword2')"></i>
                    </div>
                </div>
                <div>
                    <button type="submit" name="user_register" class="w-full bg-[#232323] text-white py-3 rounded-full font-semibold">Register Now</button>
                    <a href="login.php" class="block mt-10 text-sm text-[#171717]">Already have an account? <u>Log In</u></a>
                    <a href="#" class="block mt-2 text-sm text-[#171717]"><u>Continue as Guest</u></a>
                </div>
            </form>

        </div> 
    </div>

    <script>
        function togglePassword(inputId, toggleIconId) {
        const passwordInput = document.getElementById(inputId);
        const toggleIcon = document.getElementById(toggleIconId);
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        }
    }
    </script>
</body> 
</html>
