<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login</title> 
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
                <h2 class="text-2xl font-bold">Let's get you back in!</h2> 
                <p class="text-sm">Please log in to continue.</p> 
            </div> 
            <form action="" method="POST"> 
                <div class="mb-6"> 
                    <div class="flex items-center rounded-full px-4 py-3 mb-4 bg-white">
                        <i class="fas fa-envelope text-[#171717]"></i>
                        <input type="email" name="email" placeholder="email address" required class="flex-1 w-full px-2 text-gray-700 focus:outline-none">
                    </div>
                    <div class="flex items-center rounded-full px-4 py-3 relative bg-white"> 
                        <i class="fas fa-lock text-[#171717]"></i> 
                        <input type="password" id="password" name="password" placeholder="password" required class="flex-1 w-full px-2 text-gray-700 focus:outline-none"> 
                        <i class="fas fa-eye-slash text-[#171717] absolute right-4 cursor-pointer" id="togglePassword" onclick="togglePassword()"></i> 
                    </div> 
                </div> 
                <div> 
                    <a href="home.php" class="w-full">
                        <button type="submit" name="user_login" class="w-full bg-[#232323] text-white py-3 rounded-full font-semibold">
                            Log In
                        </button>
                    </a>
                    <a href="register.php" class="block mt-10 text-sm text-[#171717]">Don't have an account? <u>Register Now</u></a> 
                    <a href="guest.php" class="block mt-2 text-sm text-[#171717]"><u>Continue as Guest</u></a>
                </div> 
            </form> 
        </div> 
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('togglePassword');
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
