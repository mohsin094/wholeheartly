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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body class="antialiased overflow-hidden bg-gray-100">
    <div class="relative min-h-screen flex items-center justify-center">
        <img src="{{ asset('images/bridge.jpg') }}" alt="bridge" class="absolute inset-0 w-full h-full object-cover">
        <!-- main -->
        <div class="absolute inset-0 flex items-center justify-center max-w-3xl mx-auto lg:px-0 px-4">
            <div class="bg-white rounded-xl py-5 px-8 w-full max-h-full overflow-y-auto">
                <div class="flex flex-col items-center gap-y-6 w-full overflow-y-auto">
                    <!-- if selected stars are 4 less than 4 stars and give feedback then hide this -->
                    <div class=" flex flex-col items-center gap-y-6 w-full">
                        <div>
                            <h1 class="text-2xl">Thank you for your Order</h1>
                        </div>
                        <!--  -->
                        <div class="grid grid-cols-3 w-full items-center bg-gray-200 rounded-full">
                            <div class="rounded-l-full bg-yellow-400 text-white">
                                <h1 class="text-center md:px-2 px-0 py-3 cursor-default md:text-sm text-xs whitespace-nowrap">1. YOUR ORDER</h1>
                            </div>
                            <div class="hover:bg-gray-300 ">
                                <h1 class="text-center md:px-2 px-0 py-3 cursor-default md:text-sm text-xs whitespace-nowrap">2. YOUR FEEDBACK</h1>
                            </div>
                            <div class="hover:bg-gray-300 rounded-r-full">
                                <h1 class="text-center md:px-2 px-0 py-3 cursor-default md:text-sm text-xs whitespace-nowrap">3. GET YOUR BENEFIT</h1>
                            </div>
                        </div>
                    </div>
                    <!-- if cradential match and click on next button this whole dive hidden and show next things -->
                    <div class=" flex flex-col items-center gap-y-6 w-full">

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
                    <div class="hidden">
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
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-8 h-8 cursor-pointer star" data-rating="2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-8 h-8 cursor-pointer star" data-rating="3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-8 h-8 cursor-pointer star" data-rating="4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-8 h-8 cursor-pointer star" data-rating="5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
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
                    <!-- if selected stars are 4 less than 4 stars then it shows  -->
                    <div class="hidden w-full">
                        <div class="w-full">
                            <div class="text-2xl mb-4">
                                <h1>*Why is this item short of your expectations?</h1>
                                <h1>*How would you like us to improve?</h1>
                            </div>
                            <div class="mb-8">
                                <textarea name="message" id="message" rows="3" class="w-full border-b border-gray-400 focus:outline-none focus:border-yellow-300"></textarea>
                            </div>
                            <div class="w-full flex items-center justify-end mb-4">
                                <div class="bg-yellow-400 p-2 px-6 rounded-lg hover:bg-yellow-500 cursor-pointer">
                                    <button class="text-white uppercase">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- if selected stars are 4 less than 4 stars and give feedback everything is hide only shows this -->
                    <div class="hidden w-full">
                        <div class="flex flex-col items-center gap-y-8 w-full">
                            <i class="fa fa-check-circle text-9xl text-yellow-500" aria-hidden="true"></i>
                            <div class="flex flex-col gap-4 w-full text-lg">
                                <h1>Thank you for your feedback!</h1>
                                <h1>Our customer service will contact you shortly.</h1>
                                <h1>Please CHECK YOUR EMAIL INBOX (or SPAM BOX) for further assistance!</h1>
                                <h1>Have a Nice Day!</h1>
                            </div>
                            <div class="">
                                <p>wholeheartly.com Customer Support Team</p>
                            </div>
                        </div>

                    </div>
                    <!-- if you selected all 5 stars then show this -->
                    <div class="hidden w-full">
                        <div class="text-center text-sm w-full mb-5">
                            <h1 class="max-w-lg mx-auto">Thank you! We are so excited you came for your Benefit! You can choose to receive
                                <strong>a same product (for free)</strong>
                            </h1>
                            <h1 class="w-full">when you complete these steps. We truly appreciate your review on Amazon as it helps us immensely!</h1>
                            <h1 class="w-full">Please kindly support our growing business. <strong> Please save your review screenshot and return here to upload it </strong> , so that you can unlock your benefit! Thank you for your business and your time!</h1>
                        </div>
                        <!--  -->
                        <div class="w-full text-center mb-5">
                            <button class="mb-1 font-medium text-gray-700 text-xl bg-yellow-100 py-3 px-5 rounded-full border-4 border-yellow-400 hover:bg-yellow-200">Leave Feedback</button>
                            <p class="text-xs text-yellow-500">Leave Feedback for the products on Amazon and claim all offers!</p>
                        </div>
                        <!--  -->
                        <div class="w-full">
                            <div class="relative inline-flex items-center justify-center space-x-2 w-full">
                                <input type="file" id="fileInput" class="hidden" accept="image/*">
                                <button id="uploadButton" class="flex items-center px-6 py-3 border rounded-lg bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none">
                                    <svg class="w-5 h-5 mr-1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 312.602 312.602" xml:space="preserve" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path style="fill:#000002;" d="M251.52,137.244c-3.966,0-7.889,0.38-11.738,1.134c-1.756-47.268-40.758-85.181-88.448-85.181 c-43.856,0-80.964,32.449-87.474,75.106C28.501,129.167,0,158.201,0,193.764c0,36.106,29.374,65.48,65.48,65.48h54.782 c4.143,0,7.5-3.357,7.5-7.5c0-4.143-3.357-7.5-7.5-7.5H65.48c-27.835,0-50.48-22.645-50.48-50.48c0-27.835,22.646-50.48,50.48-50.48 c1.367,0,2.813,0.067,4.419,0.206l7.6,0.658l0.529-7.61c2.661-38.322,34.861-68.341,73.306-68.341 c40.533,0,73.51,32.977,73.51,73.51c0,1.863-0.089,3.855-0.272,6.088l-0.983,11.968l11.186-4.367 c5.356-2.091,10.99-3.151,16.747-3.151c25.409,0,46.081,20.672,46.081,46.081c0,25.408-20.672,46.08-46.081,46.08 c-0.668,0-20.608-0.04-40.467-0.08c-19.714-0.04-39.347-0.08-39.999-0.08c-4.668,0-7.108-2.248-7.254-6.681v-80.959l8.139,9.667 c2.667,3.17,7.399,3.576,10.567,0.907c3.169-2.667,3.575-7.398,0.907-10.567l-18.037-21.427c-2.272-2.699-5.537-4.247-8.958-4.247 c-3.421,0-6.686,1.548-8.957,4.247l-18.037,21.427c-2.668,3.169-2.262,7.9,0.907,10.567c1.407,1.185,3.121,1.763,4.826,1.763 c2.137,0,4.258-0.908,5.741-2.67l7.901-9.386v80.751c0,8.686,5.927,21.607,22.254,21.607c0.652,0,20.27,0.04,39.968,0.079 c19.874,0.041,39.829,0.081,40.498,0.081c33.681,0,61.081-27.4,61.081-61.08C312.602,164.644,285.201,137.244,251.52,137.244z"></path>
                                        </g>
                                    </svg>
                                    <span class="uppercase">upload review screenshort</span>
                                </button>
                            </div>
                            <!-- when image is upload show this otherwise hidden-->
                            <div class="hidden w-full my-2 text-center">
                                <div>
                                    <h1>image name with their formate</h1>
                                </div>
                                <div class="flex items-center gap-2 my-2">
                                    <div class="w-full bg-yellow-400 py-1 rounded-full"></div>
                                    <i class="fa fa-check-circle text-gray-500 text-lg"></i>
                                    <i class="fa fa-trash text-gray-500 text-lg cursor-pointer hover:text-gray-600"></i>

                                </div>
                            </div>
                            <!--  -->
                        </div>
                        <!--  -->
                        <div class="">
                            <div class="flex items-center gap-2">
                                <div class="flex items-center">
                                    <svg class="w-3 h-3 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-3 h-3 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-3 h-3 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-3 h-3 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-3 h-3 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                                <div class="font-medium">
                                    <h1>Love it</h1>
                                </div>
                            </div>
                            <div class="text-xs text-gray-500">
                                <h1>March 20, 2023</h1>
                            </div>
                            <div class="grid md:grid-cols-4 grid-cols-1 text-[10px] text-gray-500 items-center w-full">
                                <p class="capitalize ">digital storage capacity: <span>8</span></p>
                                <p class="capitalize ">offer type: <span>with special offers</span></p>
                                <p class="capitalize ">connectivity: <span>Wi-Fi</span></p>
                                <p class="capitalize  text-red-800 text-xs">verified purchase</p>
                            </div>
                            <div class=" text-sm">
                                <h1>You FeedBack here</h1>
                            </div>
                        </div>
                        <!-- it shows when you do not upload image but press next button -->
                        <div class="hidden text-center text-red-500 text-sm my-4" id="uploadErrorMessage">
                            <p>Please Upload Review Screenshot before proceeding to the next step. Please feel free to contact us if there are any problems. Email address: <strong>scogurei@gmail.com</strong></p>
                        </div>
                        <!--  -->
                        <div class="w-full flex items-center justify-end">
                            <div class="bg-gray-400 p-2 px-6 rounded-lg hover:bg-gray-500 cursor-pointer" onclick="validateAndProceed()">
                                <button class="text-white uppercase">Next</button>
                            </div>
                        </div>

                    </div>
                    <!-- Get your benefits  -->
                    <div class="hidden w-full">
                        <div class="">
                            <div>
                                <h1>Please select your benefit type, for free product please enter your address to receive it.</h1>
                            </div>

                            <div class="">
                                <input type="radio" name="free" id="free" class="cursor-pointer" onchange="toggleHiddenDiv()">
                                <label for="free" class="capitalize font-medium cursor-pointer">same free product</label>
                                <div class="my-2">
                                    <img src="{{ asset('images/product.png') }}" alt="product" class="w-56">
                                </div>
                                <!-- if free product is selected then show this div -->
                                <div class="hidden mb-5" id="hiddenDiv">
                                    <div class="text-center mb-5">
                                        <h1 class="text-sm">Please finish the address information form, we will send you the bonus quickly!</h1>
                                    </div>
                                    <div class="">
                                        <input type="text" placeholder="Address Line 1" required id="address1" name="address1" class="w-full border-b-2 border-gray-200 p-2.5 focus:outline-none focus:border-yellow-300 mb-4">
                                        <input type="text" placeholder="Address Line 2" required id="address2" name="address2" class="w-full border-b-2 border-gray-200 p-2.5 focus:outline-none focus:border-yellow-300 mb-4">
                                        <div class="grid md:grid-cols-3 grid-cols-1 gap-2">
                                            <input type="text" placeholder="City" required id="city" name="city" class="w-full border-b-2 border-gray-200 p-2.5 focus:outline-none focus:border-yellow-300">
                                            <input type="text" placeholder="State" required id="State" name="State" class="w-full border-b-2 border-gray-200 p-2.5 focus:outline-none focus:border-yellow-300">
                                            <input type="text" placeholder="Zipcode" required id="Zipcode" name="Zipcode" class="w-full border-b-2 border-gray-200 p-2.5 focus:outline-none focus:border-yellow-300">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="checkbox" name="join" id="join" class="cursor-pointer">
                                    <label for="join" class="text-gray-400 cursor-pointer">Join our Customers Club to Receive Newly Released Products, Amazon Gift Card & Lifetime Warranty</label>
                                </div>
                                <div class="text-center text-sm my-2">
                                    <p>wholeheartly.com is the sole owner of information collected from its customers. We will not sell or share this information with third parties in ways different from what is disclosed in our Privacy Policy.</p>
                                </div>

                                <div class="w-full flex items-center justify-end">
                                    <div class="bg-yellow-400 p-2 px-6 rounded-lg hover:bg-yellow-500 cursor-pointer">
                                        <button class="text-white uppercase">submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        // upload button functionality
        const uploadButton = document.getElementById('uploadButton');
        const fileInput = document.getElementById('fileInput');

        uploadButton.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', () => {
            const fileName = fileInput.files[0]?.name || 'No file selected';
            uploadButton.querySelector('span').textContent = fileName;
        });

        // 
        function toggleHiddenDiv() {
            var radio = document.getElementById("free");
            var hiddenDiv = document.getElementById("hiddenDiv");

            if (radio.checked) {
                hiddenDiv.classList.remove("hidden");
            } else {
                hiddenDiv.classList.add("hidden");
            }
        }

        // 
        function validateAndProceed() {
            const fileInput = document.getElementById('fileInput'); // Change this ID if needed
            const uploadErrorMessage = document.getElementById('uploadErrorMessage');

            // Check if a file has been selected
            if (!fileInput.files || fileInput.files.length === 0) {
                uploadErrorMessage.classList.remove('hidden');
            } else {
                // Proceed to the next step
                // Add your code to perform the next step here
            }
        }
    </script>
</body>

</html>