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
        <h2 class="font-extrabold text-[#171717] text-4xl mb-4">Return Policy</h2>
        <p class="mb-6 text-sm">
        At Quinton Baby, your satisfaction is our priority. We’ve made our return and refund process simple and transparent.
        </p>
    </div>

    <div class="mt-6 px-6 text-[#171717] text-justify slide-up-fade-in">
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Order Cancellations</h3>
        <p class="mb-6 text-sm">
        Changes or cancellations can only be made for orders that have not yet been delivered.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Refunds</h3>
        <ol class="mb-6 text-sm list-decimal list-inside">
            <li>Refunds are processed within 3 to 4 working weeks. They may not show up immediately on your next card statement.</li>
            <li>If you’ve received the product, we do not offer refunds unless the item is damaged.</li>
        </ol>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Exchange Policy</h3>
        <ol class="mb-6 text-sm list-decimal list-inside">
            <li>We inspect all products before delivery to ensure they’re in good condition.</li>
            <li>If you receive a damaged item, contact us within 12 working hours to arrange an exchange.</li>
            <li>Items must be returned in their original packaging, unused, unwashed, and unaltered.</li>
        </ol>
        
    </div>
    
</body>
</html>