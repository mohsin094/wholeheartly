<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">

        <nav class="bg-white shadow-sm w-full py-3 px-2">
            <div class="flex items-center justify-between max-w-6xl mx-auto">
                <!-- left side -->
                <div class="text-xl">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!-- Right side -->
                <div class="">
                    <ul class="flex items-center gap-4">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="">
            @yield('content')
        </main>
    </div>

    <script>
        // 
        function initializeCKEditor(editorId) {
            ClassicEditor
                .create(document.querySelector(editorId))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        }

        // Call the function with different IDs
        initializeCKEditor('#editor1');
        initializeCKEditor('#editor2');
        initializeCKEditor('#editor3');
        initializeCKEditor('#editor4');
        initializeCKEditor('#editor5');
        initializeCKEditor('#editor6');
        // Add more instances as needed




        const DashBoard = document.getElementById('dashboard');
        const OrderInfo = document.getElementById('orderinfo');
        const Update = document.getElementById('update');

        const InfoSec = document.getElementById('infosection');
        const UpdateSec = document.getElementById('updatesection');
        const OrderSec = document.getElementById('ordersection');

        const dashboard = () => {
            InfoSec.classList.remove('hidden');
            UpdateSec.classList.add('hidden');
            OrderSec.classList.add('hidden');

            DashBoard.classList.add('bg-yellow-400', 'text-white');
            OrderInfo.classList.add('hover:bg-yellow-400', 'hover:text-white');
            Update.classList.add('hover:bg-yellow-400', 'hover:text-white');

            DashBoard.classList.remove('hover:bg-yellow-400', 'hover:text-white');
            OrderInfo.classList.remove('bg-yellow-400', 'text-white');

            Update.classList.remove('bg-yellow-400', 'text-white');
            Update.classList.add('hover:bg-yellow-400', 'hover:text-white');
        }

        const orderinfo = () => {
            InfoSec.classList.add('hidden');
            UpdateSec.classList.add('hidden');
            OrderSec.classList.remove('hidden');

            DashBoard.classList.remove('bg-yellow-400', 'text-white');
            DashBoard.classList.add('hover:bg-yellow-400', 'hover:text-white');
            OrderInfo.classList.add('bg-yellow-400', 'text-white');

            OrderInfo.classList.remove('hover:bg-yellow-400', 'hover:text-white');

            Update.classList.remove('bg-yellow-400', 'text-white');
            Update.classList.add('hover:bg-yellow-400', 'hover:text-white');
        }
        const update = () => {
            InfoSec.classList.add('hidden');
            UpdateSec.classList.remove('hidden');
            OrderSec.classList.add('hidden');

            DashBoard.classList.remove('bg-yellow-400', 'text-white');
            DashBoard.classList.add('hover:bg-yellow-400', 'hover:text-white');
            OrderInfo.classList.remove('bg-yellow-400', 'text-white');

            OrderInfo.classList.add('hover:bg-yellow-400', 'hover:text-white');

            Update.classList.add('bg-yellow-400', 'text-white');
            Update.classList.remove('hover:bg-yellow-400', 'hover:text-white');

        }

        // modal

        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.querySelector('[data-modal-hide="defaultModal"]');
        const modal = document.getElementById('defaultModal');
        const editIcon = document.getElementById('editIcon');

        // Function to open the modal
        const openModal = () => {
            modal.classList.remove('hidden');
        };

        // Function to close the modal
        const closeModal = () => {
            modal.classList.add('hidden');
        };

        // Add event listeners
        openModalBtn.addEventListener('click', openModal);
        closeModalBtn.addEventListener('click', closeModal);
        editIcon.addEventListener('click', openModal);
    </script>
</body>

</html>