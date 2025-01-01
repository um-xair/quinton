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
        <h2 class="font-extrabold text-[#171717] text-4xl mb-4">Shipping Policy</h2>
        <p class="mb-6 text-sm">
        This policy applies to purchases made from Quinton Baby.
        </p>
    </div>

    <div class="mt-6 px-6 text-[#171717] text-justify slide-up-fade-in">
        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Delivery Time</h3>
        <ol class="mb-6 text-sm list-decimal list-inside">
            <li>Orders are delivered within 2-5 business days.</li>
            <li>Once your order is processed, you’ll receive an email confirmation and tracking details.</li>
        </ol>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">International Shipping</h3>
        <p class="mb-6 text-sm">
        For international shipping, please contact us at sales@quintonbaby.com.my for shipping times.
        </p>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Shipping Service</h3>
        <ol class="mb-6 text-sm list-decimal list-inside">
            <li>We do not deliver to P.O. boxes or hotels.</li>
            <li>Customers are responsible for any taxes or fees.</li>
            <li>A signature is required for all deliveries.</li>
            <li>Deliveries are made on weekdays (Monday to Friday).</li>
        </ol>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Shipping Charges</h3>
        <ol class="mb-6 text-sm list-decimal list-inside">
            <li>Free shipping within West Malaysia.</li>
            <li>Low-cost shipping for East Malaysia through our designated courier.</li>
            <li>We are not responsible for any damage or loss during shipping.</li>
            <li>Shipping is currently available within Malaysia only.</li>
        </ol>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Shipping Delays</h3>
        <ol class="mb-6 text-sm list-decimal list-inside">
            <li>Delivery may be delayed due to weather or festive seasons.</li>
            <li>If your parcel is undelivered, the courier will attempt delivery again or leave a notice for self-pickup.</li>
            <li>If delivery fails twice, your package will be returned to Quinton, and you can pick it up from our warehouse. Additional delivery attempts will require extra payment.</li>
        </ol>

        <h3 class="font-extrabold text-[#171717] text-lg mb-4">Track Your Parcel</h3>
        <p class="mb-6 text-sm">
        Use the tracking number sent to you to monitor your parcel’s status. If your package is lost, please contact us immediately for assistance.
        </p>
        
    </div>
    
</body>
</html>