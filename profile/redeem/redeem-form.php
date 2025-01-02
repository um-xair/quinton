<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review and Redeem</title>
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
<body class="font-[Poppins] bg-[#F2F2F2] h-auto fade-in">

    <div class="w-full bg-[#171717] h-40 rounded-b-[90px] py-4 z-50">
        <div class="flex items-center justify-between px-6 h-full">
            <a href="../profile.php" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-[#171717]"></i>
            </a>
            <h1 class="text-white text-2xl font-extrabold sm:text-xl md:text-2xl lg:text-3xl px-2 text-center">Review and Redeem</h1>
            <div class="w-10 h-10"></div>
        </div>
    </div>

    <div class="mt-10 px-6 flex flex-col items-center justify-center">
        <img src="https://i.etsystatic.com/26699832/r/il/50c360/3661617567/il_570xN.3661617567_bbqe.jpg" alt="Sample Image" class="w-full mb-4">
        <p class="text-[#171717] text-sm font-medium">Love Quinton? Share your review on social media, snap a screenshot, and upload it to the Quinton app for a premium gift. Terms and conditions apply.</p>
    </div>

    <div class="mt-10 px-6">
        <form>
            <label for="file-input-label" class="block text-[#171717] text-md font-semibold mb-2">Upload Screenshot</label>
            <label for="file-input" class="w-full h-32 border-2 border-dashed border-[#171717] p-4 rounded-[30px] flex flex-col items-center justify-center mb-4 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#171717">
                    <path d="M480-260q75 0 127.5-52.5T660-440q0-75-52.5-127.5T480-620q-75 0-127.5 52.5T300-440q0 75 52.5 127.5T480-260Zm0-80q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM160-120q-33 0-56.5-23.5T80-200v-480q0-33 23.5-56.5T160-760h126l74-80h240l74 80h126q33 0 56.5 23.5T880-680v480q0 33-23.5 56.5T800-120H160Zm0-80h640v-480H638l-73-80H395l-73 80H160v480Zm320-240Z"/>
                </svg>
                <span class="text-[#171717] text-sm">Upload New Image Here</span>
                <input type="file" id="file-input" class="hidden">
            </label>
        </form>
    </div>

    <div class="mt-10 mb-6 w-full px-6">
        <a href="../redeem/redeem-submit.php" class="w-full inline-block bg-[#232323] py-6 rounded-full text-white text-lg font-bold text-center sm:text-base md:text-lg lg:text-xl">
            Submit
        </a>
    </div>

</body>
</html>