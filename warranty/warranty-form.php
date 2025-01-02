<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty</title>
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
<body class="font-[Poppins] bg-[#F2F2F2] h-auto">

    <div class="w-full bg-[#171717] h-40 rounded-b-[90px] py-4 z-50">
        <div class="flex items-center justify-between px-6 h-full">
            <a href="warranty-product.php" class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-chevron-left text-[#171717]"></i>
            </a>
            <h1 class="text-white text-2xl font-extrabold sm:text-xl md:text-2xl lg:text-3xl">Warranty</h1>
            <div class="w-10 h-10"></div>
        </div>
    </div>

    <div class="mt-10 px-6">
        <h2 class="text-[#171717] text-2xl font-bold mb-4">Kindly complete the form to activate your warranty</h2>
    </div>

    <div class="mt-10 px-6">
        <form>
            <div class="mb-4">
                <label for="name" class="block text-[#171717] text-md font-semibold">Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 mt-2 rounded-full" placeholder="your name" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-[#171717] text-md font-semibold">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="w-full p-3 mt-2 rounded-full" placeholder="60123456789" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-[#171717] text-md font-semibold">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 mt-2 rounded-full" placeholder="email@mail.com" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-[#171717] text-md font-semibold">Product Category</label>
                <div class="bg-[#266FF1] rounded-[30px] p-4 relative mt-2 cursor-pointer" onclick="toggleProductGrid('stroller')">
                    <p class="text-xl font-semibold text-white ml-4">Stroller</p>
                </div>
                <div id="strollerGrid" class="mt-4 hidden">
                    <div class="grid grid-cols-3 gap-2">
                        <div class="text-center">
                            <div class="bg-white rounded-[30px] p-2 relative group product">
                                <img src="../assets/nior.webp" alt="product-img-1" class="w-full h-auto object-cover">
                                <div class="absolute inset-0 bg-black opacity-30 hidden overlay rounded-[30px]"></div>
                                <p class="mt-2 text-sm md:text-base text-[#171717]">Nior</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="bg-white rounded-[30px] p-2 relative group product">
                                <img src="../assets/mova.webp" alt="product-img-2" class="w-full h-auto object-cover">
                                <div class="absolute inset-0 bg-black opacity-30 hidden overlay rounded-[30px]"></div>
                                <p class="mt-2 text-sm md:text-base text-[#171717]">Mova</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="bg-white rounded-[30px] p-2 relative group product">
                                <img src="../assets/nior.webp" alt="product-img-3" class="w-full h-auto object-cover">
                                <div class="absolute inset-0 bg-black opacity-30 hidden overlay rounded-[30px]"></div>
                                <p class="mt-2 text-sm md:text-base text-[#171717]">Nior</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#684CF0] rounded-[30px] p-4 relative mt-2 cursor-pointer" onclick="toggleProductGrid('carseat')">
                    <p class="text-xl font-semibold text-white ml-4">Car Seat</p>
                </div>
                <div id="carseatGrid" class="mt-4 hidden">
                    <div class="grid grid-cols-3 gap-2">
                        <div class="text-center">
                            <div class="bg-white rounded-[30px] p-2 relative group product">
                                <img src="../assets/nior.webp" alt="product-img-1" class="w-full h-auto object-cover">
                                <div class="absolute inset-0 bg-black opacity-30 hidden overlay rounded-[30px]"></div>
                                <p class="mt-2 text-sm md:text-base text-[#171717]">Car Seat 1</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="bg-white rounded-[30px] p-2 relative group product">
                                <img src="../assets/mova.webp" alt="product-img-2" class="w-full h-auto object-cover">
                                <div class="absolute inset-0 bg-black opacity-30 hidden overlay rounded-[30px]"></div>
                                <p class="mt-2 text-sm md:text-base text-[#171717]">Car Seat 2</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="bg-white rounded-[30px] p-2 relative group product">
                                <img src="../assets/nior.webp" alt="product-img-1" class="w-full h-auto object-cover">
                                <div class="absolute inset-0 bg-black opacity-30 hidden overlay rounded-[30px]"></div>
                                <p class="mt-2 text-sm md:text-base text-[#171717]">Car Seat 3</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#F6643C] rounded-[30px] p-4 relative mt-2 cursor-pointer" onclick="toggleProductGrid('highchair')">
                    <p class="text-xl font-semibold text-white ml-4">High Chair</p>
                </div>
            </div>

            <div class="mt-6 mb-4">
                <label for="dateOfPurchase" class="block text-[#171717] text-md font-semibold">Date of Purchase</label>
                <input type="date" id="dateOfPurchase" name="dateOfPurchase" class="w-full p-3 mt-2 rounded-full" required>
            </div>

            <div class="mb-4">
                <label for="invoiceNumber" class="block text-[#171717] text-md font-semibold">Invoice Number</label>
                <input type="text" id="invoiceNumber" name="invoiceNumber" class="w-full p-3 mt-2 rounded-full" placeholder="invoice number on receipt" required>
            </div>

            <div class="mb-4">
                <label for="firstQuintonProduct" class="block text-[#171717] text-md font-semibold">Is this your 1st Quinton product?</label>
                <div class="flex items-center mt-2 text-sm">
                    <label for="yes" class="mr-4">
                        <input type="radio" id="yes" name="firstQuintonProduct" value="yes" class="mr-2 w-4 h-4" required> Yes
                    </label>
                    <label for="no">
                        <input type="radio" id="no" name="firstQuintonProduct" value="no" class="mr-2 w-4 h-4" required> No
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label for="howDidYouFindOut" class="block text-[#171717] text-md font-semibold">How did you find out about Quinton?</label>
                <div class="mt-2 text-sm">
                    <label for="website" class="block flex items-center">
                        <input type="checkbox" id="website" name="howDidYouFindOut" value="website" class="mr-2 w-5 h-5"> Quinton Website
                    </label>
                    <label for="babyFair" class="block flex items-center mt-2">
                        <input type="checkbox" id="babyFair" name="howDidYouFindOut" value="babyFair" class="mr-2 w-5 h-5"> Baby Fair / Baby Expo
                    </label>
                    <label for="shopee" class="block flex items-center mt-2">
                        <input type="checkbox" id="shopee" name="howDidYouFindOut" value="shopee" class="mr-2 w-5 h-5"> Shopee / Lazada
                    </label>
                    <label for="babyStore" class="block flex items-center mt-2">
                        <input type="checkbox" id="babyStore" name="howDidYouFindOut" value="babyStore" class="mr-2 w-5 h-5"> Baby Store
                    </label>
                    <label for="family" class="block flex items-center mt-2">
                        <input type="checkbox" id="family" name="howDidYouFindOut" value="family" class="mr-2 w-5 h-5"> Family / Friends
                    </label>
                    <label for="facebook" class="block flex items-center mt-2">
                        <input type="checkbox" id="facebook" name="howDidYouFindOut" value="facebook" class="mr-2 w-5 h-5"> Blog / Facebook / Instagram / Tiktok
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label for="whyChooseQuinton" class="block text-[#171717] text-md font-semibold">Why did you choose Quinton?</label>
                <div class="mt-2 text-sm">
                    <label for="quality" class="block flex items-center ">
                        <input type="checkbox" id="quality" name="whyChooseQuinton" value="quality" class="mr-2 w-5 h-5"> Quality
                    </label>
                    <label for="price" class="block flex items-center mt-2">
                        <input type="checkbox" id="price" name="whyChooseQuinton" value="price" class="mr-2 w-5 h-5"> Price
                    </label>
                    <label for="appearance" class="block flex items-center mt-2">
                        <input type="checkbox" id="appearance" name="whyChooseQuinton" value="appearance" class="mr-2 w-5 h-5"> Appearance
                    </label>
                    <label for="functionality" class="block flex items-center mt-2">
                        <input type="checkbox" id="functionality" name="whyChooseQuinton" value="functionality" class="mr-2 w-5 h-5"> Functionality
                    </label>
                    <label for="review" class="block flex items-center mt-2">
                        <input type="checkbox" id="review" name="whyChooseQuinton" value="review" class="mr-2 w-5 h-5"> Good Reviews
                    </label>
                    <label for="gift" class="block flex items-center mt-2">
                        <input type="checkbox" id="gift" name="whyChooseQuinton" value="gift" class="mr-2 w-5 h-5"> I received the product as a gift
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label for="rating" class="block text-[#171717] text-md font-semibold">How many stars would you give Quinton?</label>
                <div class="flex items-center mt-2 space-x-2" id="starRating">
                    <i class="fa fa-star text-2xl text-gray-400 cursor-pointer" data-rating="1"></i>
                    <i class="fa fa-star text-2xl text-gray-400 cursor-pointer" data-rating="2"></i>
                    <i class="fa fa-star text-2xl text-gray-400 cursor-pointer" data-rating="3"></i>
                    <i class="fa fa-star text-2xl text-gray-400 cursor-pointer" data-rating="4"></i>
                    <i class="fa fa-star text-2xl text-gray-400 cursor-pointer" data-rating="5"></i>
                </div>
            </div>

            <div class="mb-4">
                <label for="receipt" class="block text-[#171717] text-md font-semibold">Upload Receipt</label>
                <label for="file-input" class="mt-1 w-full h-32 border-2 border-dashed border-[#171717] p-4 rounded-[30px] flex flex-col items-center justify-center mb-4 cursor-pointer">
                    <i class="fa-solid fa-camera text-4xl"></i>
                    <span class="text-[#171717] text-sm">Upload files here. Max 2 files</span>
                    <input type="file" id="file-input" class="hidden">
                </label>
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" id="terms" name="terms" class="mr-2 w-5 h-5" required>
                <label for="terms" class="text-[#171717] text-md">I have read and agree to the <a href="../profile/terms.php" class="text-blue-600">Terms & Conditions</a></label>
            </div>

        </form>
    </div>

    <div class="mt-10 px-6 mb-6">
        <a href="warranty-submit.php" class="w-full inline-block bg-[#232323] py-6 rounded-full text-white text-lg font-bold text-center sm:text-base md:text-lg lg:text-xl">
            Submit
        </a>
    </div>

    <script>
        function toggleProductGrid(category) {
            const grids = document.querySelectorAll('[id$="Grid"]');
            grids.forEach(grid => {
                grid.classList.add('hidden');
            });
            const selectedGrid = document.getElementById(category + 'Grid');
            selectedGrid.classList.remove('hidden');
        }

        const stars = document.querySelectorAll('#starRating .fa-star');
        let selectedRating = 0;

        stars.forEach(star => {
            star.addEventListener('click', () => {
                selectedRating = star.getAttribute('data-rating');
                updateStars(selectedRating);
            });

            star.addEventListener('mouseover', () => {
                updateStars(star.getAttribute('data-rating'));
            });

            star.addEventListener('mouseout', () => {
                updateStars(selectedRating);
            });
        });

        function updateStars(rating) {
            stars.forEach(star => {
                if (star.getAttribute('data-rating') <= rating) {
                    star.classList.add('text-yellow-500');
                    star.classList.remove('text-gray-400');
                } else {
                    star.classList.add('text-gray-400');
                    star.classList.remove('text-yellow-500');
                }
            });
        }

        const products = document.querySelectorAll('.product');
        products.forEach(product => {
            product.addEventListener('click', () => {
                products.forEach(p => p.querySelector('.overlay').classList.add('hidden'));
                const overlay = product.querySelector('.overlay');
                overlay.classList.remove('hidden');
            });
        });
    </script>
    
</body>
</html>