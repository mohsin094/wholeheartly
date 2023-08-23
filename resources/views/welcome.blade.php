<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        
    </head>
    <body class="antialiased overflow-hidden bg-gray-100">
    <div class="relative min-h-screen flex items-center justify-center">
        <img src="{{ asset('images/bridge.jpg') }}" alt="bridge" class="absolute inset-0 w-full h-full object-cover">
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
        <!-- main -->
        <div class="absolute inset-0 flex items-center justify-center max-w-2xl mx-auto lg:px-0 px-4">
            <div class="bg-white rounded-xl py-5 px-8 w-full">
                <div class="flex flex-col items-center gap-y-8">
                    <div>
                        <h1 class="text-2xl">Thank you for your Order</h1>
                    </div>
                    <!--  -->
                    <div class="grid grid-cols-3 w-full items-center bg-gray-200 rounded-full">
                        <div class=" rounded-l-full bg-yellow-400 text-white">
                            <h1 class="text-center md:px-2 px-0 py-4 cursor-default md:text-sm text-xs whitespace-nowrap">1. YOUR ORDER</h1>
                        </div>
                        <div class="hover:bg-gray-300 ">
                            <h1 class="text-center md:px-2 px-0 py-4 cursor-default md:text-sm text-xs whitespace-nowrap">2. YOUR FEEDBACK</h1>
                        </div>
                        <div class="hover:bg-gray-300 rounded-r-full">
                            <h1 class="text-center md:px-2 px-0 py-4 cursor-default md:text-sm text-xs whitespace-nowrap">3. GET YOUR BENEFIT</h1>
                        </div>
                    </div>
                    <!-- if cradential match and click on next button this whole dive hidden and show next things -->
                    <div class="hidden flex flex-col items-center gap-y-6 w-full">

                        <div class="text-center w-full">
                            <h1>Please enter your Amazon ORDER ID here.</h1>
                            <h1 class="">Use the <strong>"FIND ID"</strong> button to get it easily from your Amazon Order History page.</h1>
                        </div>
                        <!--  -->
                        <form action="" class="w-full flex flex-col items-center gap-6">
                            <input type="text" placeholder="Your Name" required id="name" name="name" class="w-full border-b-2 border-gray-200 p-2.5 focus:outline-none focus:border-yellow-300">
                            <input type="email" placeholder="Your Email" required id="email" name="email" class="w-full border-b-2 border-gray-200 p-2.5 focus:outline-none focus:border-yellow-300">
                            <div class="flex items-center w-full">
                                <div class="w-full">
                                <input type="text" placeholder="Your Amazon Order ID" required id="orderId" name="orderId" class="w-full border-b-2 border-gray-200 p-2.5 focus:outline-none focus:border-yellow-300">
                                </div>
                                <div class="bg-gray-500 py-1 px-2 rounded-lg ml-2 w-24 text-center">
                                    <a href="https://www.amazon.com/ap/signin?_encoding=UTF8&accountStatusPolicy=P1&openid.assoc_handle=usflex&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fgp%2Fcss%2Forder-history%3Fie%3DUTF8%26amp%253Bref_%3Dnav_nav_orders_first&pageId=webcs-yourorder&showRmrMe=1" class="text-sm text-white uppercase">Find ID</a>
                                </div>
                            </div>
                            <!--  -->
                            <div class="w-full flex items-center justify-end">
                                <div class="bg-yellow-400 p-2 px-6 rounded-lg hover:bg-yellow-500 cursor-pointer">
                                    <button class="text-white uppercase">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- then show this div -->
                    <div class="">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-4 gap-y-8">
                            <!--  -->
                        <div class="">
                                <h1 class="text-lg">*How long have you been using it?</h1>
                            </div>
                            <!--  -->
                            <div class="flex flex-col gap-y-2 items-start">
    <div>
        <input type="radio" id="started" name="usage" value="started">
        <label for="started" class="text-sm">Just started (less than 7 days)</label>
    </div>
    <div>
        <input type="radio" id="while" name="usage" value="while">
        <label for="while" class="text-sm">I've been using it for a while!</label>
    </div>
    <div>
        <input type="radio" id="more" name="usage" value="more">
        <label for="more" class="text-sm">I have been using it for more than 60 days.</label><br>
    </div>
</div>
<!--  -->
<div class="">
    <h1 class="text-lg">*How satisfied are you with our product?</h1>
</div>
<div class="">
<div class="flex items-center space-x-3">
    <svg class="w-8 h-8 cursor-pointer star" data-rating="1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-8 h-8 cursor-pointer star" data-rating="2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-8 h-8 cursor-pointer star" data-rating="3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-8 h-8 cursor-pointer star" data-rating="4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
    <svg class="w-8 h-8 cursor-pointer star" data-rating="5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
    </svg>
</div>
</div>
<!--  -->

                        </div>
                        <!-- button -->
                        <div class="w-full flex items-center justify-end my-4">
                                <div class="bg-yellow-400 p-2 px-6 rounded-lg hover:bg-yellow-500 cursor-pointer">
                                    <button class="text-white uppercase">Next</button>
                                </div>
                            </div>
                            <!--  -->
                    </div>
                    
                    <!--  -->
                </div>
            </div>
        </div>
        <!-- -->
    </div>



    <!-- script -->
    <script>
    const ratingIcons = document.querySelectorAll('.star');
    let hoveredRating = 0;
    let selectedRating = 0;

    ratingIcons.forEach(icon => {
        icon.addEventListener('mouseover', () => {
            const starRating = icon.getAttribute('data-rating');
            ratingIcons.forEach(star => {
                const currentStarRating = star.getAttribute('data-rating');
                star.classList.remove('text-yellow-300');
                if (currentStarRating <= starRating) {
                    star.classList.add('text-yellow-300');
                }
            });
            hoveredRating = starRating;
        });

        icon.addEventListener('mouseout', () => {
            ratingIcons.forEach(star => {
                const starRating = star.getAttribute('data-rating');
                star.classList.remove('text-yellow-300');
                if (starRating <= selectedRating) {
                    star.classList.add('text-yellow-300');
                }
            });
            hoveredRating = 0;
        });

        icon.addEventListener('click', () => {
            selectedRating = icon.getAttribute('data-rating');
            ratingIcons.forEach(star => {
                const starRating = star.getAttribute('data-rating');
                star.classList.remove('text-yellow-300');
                if (starRating <= selectedRating) {
                    star.classList.add('text-yellow-300');
                }
            });
            console.log(`Selected Rating: ${selectedRating}`);
        });
    });
</script>
</body>
</html>
