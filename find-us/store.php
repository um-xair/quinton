<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Locator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #map {
            height: 100vh;
            width: 100%;
        }

        .gm-style-iw {
            font-family: 'Poppins', sans-serif;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 50;
        }

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
<body class="bg-[#F2F2F2] fade-in">

    <div class="header w-full bg-[#171717] h-40 rounded-b-[90px] py-4">
        <div class="flex items-center justify-between px-6 h-full">
            <a href="../home.php" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-[#171717]"></i>
            </a>
            <h1 class="text-white text-2xl font-extrabold sm:text-xl md:text-2xl lg:text-3xl px-1 text-center">Retails Partner</h1>
            <div class="w-10 h-10"></div>
        </div>
    </div>

    <div id="map"></div>

    <div class="absolute top-[200px] left-1/2 transform -translate-x-1/2 bg-white bg-opacity-50 backdrop-blur-md border border-white border-opacity-25 p-6 rounded-[30px] flex flex-col items-center w-[90%] z-10">
        <div class="flex items-center space-x-2 w-full">
            <input type="text" placeholder="Search address.." class="flex-1 p-2 bg-[#EAEAEA] rounded-full text-sm">
            <button class="w-10 h-10 flex items-center justify-center bg-[#266FF1] rounded-full">
                <i class="fa-solid fa-magnifying-glass text-white"></i>
            </button>
            <button id="filterButton" class="w-10 h-10 flex items-center justify-center bg-[#266FF1] rounded-full">
                <i class="fa-solid fa-sliders text-white"></i>
            </button>
        </div>

        <div id="filterSection" class="flex flex-col w-full space-y-2 hidden">
            <div class="mt-4 flex items-center justify-between w-full space-x-2">
                <label for="district" class="text-[#171717] text-sm">Select District</label>
                <select id="district" class="p-2 bg-[#EAEAEA] rounded-full text-sm flex-1">
                    <option value="district 1">district 1</option>
                    <option value="district 2">district 2</option>
                    <option value="district 3">district 3</option>
                    <option value="district 4">district 4</option>
                </select>
            </div>
            <div class="flex items-center justify-between w-full space-x-2">
                <label for="state" class="text-[#171717] text-sm">Select State</label>
                <select id="state" class="p-2 bg-[#EAEAEA] rounded-full text-sm flex-1">
                    <option value="state1">State 1</option>
                    <option value="state2">State 2</option>
                    <option value="state3">State 3</option>
                    <option value="state4">State 4</option>
                </select>
            </div>
        </div>
    </div>

    <script>
        const filterButton = document.getElementById('filterButton');
        const filterSection = document.getElementById('filterSection');

        filterButton.addEventListener('click', () => {
            filterSection.classList.toggle('hidden');
        });

        let map;
        const markers = [];

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 2.8467465737744786, lng: 102.40383352607294 },
                zoom: 15,
                disableDefaultUI: true, 
                styles: [
                    {
                        featureType: "poi",
                        stylers: [{ visibility: "off" }]
                    }
                ]
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANfUHc27kQ5YhPOxLQO9AKG8m-OmvV7Nk&callback=initMap" async defer></script>
</body>
</html>