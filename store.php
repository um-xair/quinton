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
    </style>
</head>
<body class="bg-gray-100">

    <div class="fade-in bg-gradient-to-r from-[#151515] via-[#272829] to-[#151515] px-4 py-10 relative rounded-b-[30px] backdrop-blur-sm bg-opacity-40 h-24">
        <div class="flex justify-between items-center">
            <div>
                <button class="w-10 h-10 rounded-[30px] bg-white flex items-center justify-center" onclick="goBack()">
                    <i class="fas fa-chevron-left text-lg text-[#272829]"></i>
                </button>
            </div>

            <div class="flex-1 text-center">
                <h1 class="text-white text-xl font-semibold">Store Locator</h1>
            </div>
        </div>
    </div>

    <div id="map-container" class="relative">
    <!-- Search box overlay -->
    <div class="absolute top-0 left-0 w-full p-5 z-10 bg-white shadow-md"
         style="background: rgba(255, 255, 255, 0.5); -webkit-backdrop-filter: blur(10px); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.25);">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-4">
            <div class="flex-1">
                <label for="state" class="block font-semibold mb-1">Select State:</label>
                <select id="state" class="w-full p-3 border border-gray-300 rounded-lg">
                    <option value="">--Select State--</option>
                </select>
            </div>
            <div class="flex-1">
                <label for="district" class="block font-semibold mb-1">Select District:</label>
                <select id="district" class="w-full p-3 border border-gray-300 rounded-lg" disabled>
                    <option value="">--Select District--</option>
                </select>
            </div>
            <div class="flex-1">
                <label for="search" class="block font-semibold mb-1">Search Store:</label>
                <input type="text" id="search" placeholder="Enter store name..." class="w-full p-3 border border-gray-300 rounded-lg">
            </div>
            <button id="searchBtn" class="p-3 bg-blue-900 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
                Search
            </button>
        </div>
    </div>

    <!-- Fullscreen map -->
    <div id="map" class="h-screen w-full"></div>
</div>


    <div id="store-container" class="container mx-auto p-5 flex flex-col gap-5"></div>

    <script>
        let map;
        const markers = [];

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 1.552259247971418, lng: 103.7474106101468 },
                zoom: 12,
                styles: [
                    {
                        featureType: "poi",
                        stylers: [{ visibility: "off" }]
                    }
                ]
            });
        }

        function updateMarkers(state, district, searchQuery) {
            markers.forEach(marker => marker.setMap(null));
            markers.length = 0;
            document.getElementById('store-container').innerHTML = '';

            const query = new URLSearchParams({
                state: state || '',
                district: district || '',
                search: searchQuery || ''
            });

            fetch(`fetch_stores.php?${query.toString()}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        console.log('No stores found.');
                        return;
                    }

                    data.forEach(store => {
                        createStoreCard(store);

                        const marker = new google.maps.Marker({
                            position: { lat: parseFloat(store.lat), lng: parseFloat(store.lng) },
                            map: map,
                            title: store.name,
                        });

                        marker.addListener('click', () => {
                            const content = `
                                <div style="font-family: 'Poppins', sans-serif;">
                                    <img src="${store.photo}" alt="${store.name}" style="width: 150px; height: 100px; object-fit: cover;">
                                    <h3>${store.name}</h3>
                                    <p>${store.address}</p>
                                    <button onclick="window.open('https://www.google.com/maps/dir/?api=1&destination=${store.lat},${store.lng}', '_blank')" class="bg-blue-900 text-white p-2 rounded-lg">Get Directions</button>
                                </div>
                            `;
                            const infoWindow = new google.maps.InfoWindow({
                                content: content
                            });
                            infoWindow.open(map, marker);
                        });

                        markers.push(marker);
                    });

                    if (data.length) {
                        const bounds = new google.maps.LatLngBounds();
                        data.forEach(store => {
                            bounds.extend(new google.maps.LatLng(parseFloat(store.lat), parseFloat(store.lng)));
                        });
                        map.fitBounds(bounds);
                    }
                })
                .catch(error => console.error('Error fetching store data:', error));
        }

        function createStoreCard(store) {
            const card = document.createElement('div');
            card.className = 'store-card p-5 bg-white shadow-md rounded-lg';

            card.innerHTML = `
                <img src="${store.photo}" alt="${store.name}" class="w-full h-48 object-cover rounded-lg mb-3">
                <h3 class="text-lg font-semibold">${store.name}</h3>
                <p>${store.address}</p>
                <a href="https://www.google.com/maps/dir/?api=1&destination=${store.lat},${store.lng}" target="_blank" class="bg-blue-900 text-white p-2 rounded-lg inline-block mt-2">Get Directions</a>
            `;

            document.getElementById('store-container').appendChild(card);
        }

        document.getElementById('searchBtn').addEventListener('click', () => {
            const state = document.getElementById('state').value;
            const district = document.getElementById('district').value;
            const searchQuery = document.getElementById('search').value.trim().toLowerCase();
            updateMarkers(state, district, searchQuery);
        });

        document.addEventListener('DOMContentLoaded', () => {
            const stateSelect = document.getElementById('state');
            const districtSelect = document.getElementById('district');

            fetch('fetch_states.php')
                .then(response => response.json())
                .then(states => {
                    states.forEach(state => {
                        const option = document.createElement('option');
                        option.value = state;
                        option.textContent = state.charAt(0).toUpperCase() + state.slice(1);
                        stateSelect.appendChild(option);
                    });
                });

            stateSelect.addEventListener('change', () => {
                const state = stateSelect.value;
                districtSelect.innerHTML = '<option value="">--Select District--</option>';
                if (state) {
                    districtSelect.disabled = false;
                    fetch(`fetch_districts.php?state=${state}`)
                        .then(response => response.json())
                        .then(districts => {
                            districts.forEach(district => {
                                const option = document.createElement('option');
                                option.value = district;
                                option.textContent = district.replace(/_/g, ' ').toUpperCase();
                                districtSelect.appendChild(option);
                            });
                        });
                } else {
                    districtSelect.disabled = true;
                }
            });
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANfUHc27kQ5YhPOxLQO9AKG8m-OmvV7Nk&callback=initMap" async defer></script>
</body>
</html>
