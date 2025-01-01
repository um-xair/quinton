<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <a href="profile.php">
            <button class="w-10 h-10 rounded-full bg-[#171717] flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-white"></i>
            </button>
        </a>
    </div>

    <div class="mt-2 px-6 text-[#171717] slide-up-fade-in">
        <h2 class="font-extrabold text-[#171717] text-4xl mb-4">Privacy Policy</h2>
        <p class="mb-6 text-sm">
        Quinton is committed to protecting your privacy. This policy explains how we collect, use, and safeguard your personal information when you use our website. We may update this policy from time to time, so please check back regularly to stay informed.
        </p>
    </div>

    <div class="mt-6 px-6 text-[#171717] text-justify slide-up-fade-in">
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">What We Collect</h3>
        <ol class="mb-6 text-sm list-decimal list-inside">
            <li>Full name and identification details (e.g., IC number).</li>
            <li>Email address and phone number.</li>
            <li>Date of birth and demographic details, such as race and address.</li>
            <li>Preferences, interests, and other related information.</li>
            <li>Details related to surveys, promotional offers, or feedback submissions.</li>
        </ol>


        <h3 class="font-extrabold text-[#171717] text-lg mb-4">How We Use Your Information</h3>
        <ol class="mb-6 text-sm list-decimal list-inside">
            <li>To improve our products and services.</li>
            <li>To send promotional emails about new products, offers, or updates (with your consent).</li>
            <li>To occasionally contact you for market research.</li>
            <li>To personalize your website experience.</li>
        </ol>

        <div class="flex items-center mb-4">
            <img src="../assets/cookie.png" alt="Cookies Icon" class="w-10 h-10 mr-2">
            <h3 class="font-extrabold text-[#171717] text-lg">Cookies</h3>
        </div>
        <p class="mb-6 text-sm">
            We use cookies (small files placed on your computer) to analyze web traffic and help improve your experience. Cookies help us track which pages you visit, but they do not access personal data unless you provide it. You can decline cookies by changing your browser settings, but this may limit your website experience.
        </p>

        <div class="flex items-center mb-4">
            <img src="../assets/cyber-security.png" alt="Security Icon" class="w-10 h-10 mr-2">
            <h3 class="font-extrabold text-[#171717] text-lg">Security</h3>
        </div>
        <p class="mb-6 text-sm">
            We take the security of your information seriously. We have measures in place to protect your data from unauthorized access, and we continuously update our security to stay ahead of potential threats.
        </p>


        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Controlling Your Information</h3>
        <ol class="mb-6 text-sm list-decimal list-inside">
            <li>If you no longer want us to use your information for marketing, you can opt out by emailing support@quintonbaby.com.my.</li>
            <li>We will not sell or share your information without your permission, except as required by law.</li>
            <li>If any of your information is incorrect, please let us know, and we’ll correct it promptly.</li>
        </ol>

    </div>
    
</body>
</html>