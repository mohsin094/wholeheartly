@extends('layouts.app')

@section('content')
    <section class="flex">
        <!-- Sidebar -->
        <aside class="w-1/6 bg-white py-4 px-2 shadow-sm h-screen mt-0.5 overflow-hidden">
            <div class="flex flex-col items-center gap-2">
                <div class="bg-yellow-400 text-white py-2 px-4 rounded-lg w-full text-center cursor-pointer" id="dashboard"
                    onclick="dashboard()">
                    <h1 class="text-lg font-medium uppercase">Dashboard</h1>
                </div>
                <div class="hover:bg-yellow-400 hover:text-white py-2 px-4 rounded-lg w-full text-center cursor-pointer"
                    id="orderinfo" onclick="orderinfo()">
                    <h1 class="text-lg font-medium uppercase">order Info</h1>
                </div>
                <div class="hover:bg-yellow-400 hover:text-white py-2 px-4 rounded-lg w-full text-center cursor-pointer"
                    id="update" onclick="update()">
                    <h1 class="text-lg font-medium uppercase">Update</h1>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="w-5/6 py-4 px-6 ml-auto overflow-auto">
            <!-- Information -->
            <div class="" id="infosection">
                <div class="mb-2">
                    <h1 class="text-2xl font-medium uppercase">FeedBack Info</h1>
                </div>

                <div class="relative overflow-x-auto shadow-sm border border-gray-200">
                    <table class="w-full text-sm text-left text-gray-500 text-gray-400">
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Order ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Day in use
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Rating
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Comment
                                </th>
                                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                    Picture
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedback as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $item->order_id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->day_in_use }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->rating }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->comment ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4 flex-wrap">
                                            @foreach ($item->images as $item)
                                                <img src="{{ asset('uploads/' . $item->image) }}" alt="product"
                                                    class="w-10">
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->created_at ?? '-' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Update -->
            <div class="hidden" id="updatesection">
                <div class="mb-2">
                    <h1 class="text-2xl font-medium uppercase">Update</h1>
                </div>
                <!-- Order design update -->
                <div class="w-full bg-white p-3 rounded-xl shadow-sm">
                    <h1 class="text-xl mb-4"><strong>Your Order design Update</strong></h1>
                    <form action="{{ route('saveSetting') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4 mb-3">
                                <label class="form-label labeltxt"><strong>Tabs Text</strong></label>
                                <input type="text" name="thanks_header" class="form-control inputStyle mt-2"
                                    id="" value="{{ $setting->thanks_header }}">
                                <input type="text" name="tabs_txt[]" class="form-control inputStyle mt-2" id=""
                                    value="{{ $setting->tabs_txt[0] }}">
                                <input type="text" name="tabs_txt[]" class="form-control inputStyle mt-2" id=""
                                    value="{{ $setting->tabs_txt[1] }}">
                                <input type="text" name="tabs_txt[]" class="form-control inputStyle mt-2" id=""
                                    value="{{ $setting->tabs_txt[2] }}">

                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="mt-4"><strong>Background Image </strong></label><br>
                            <input type="file" id="fileInput" name="bg_img" accept="image/*" />
                        </div>
                        <div class="mb-4">
                            <label for="findid"><strong>First Tab </strong></label><br><br>
                            <textarea name="first_tab[]" id="editor1" rows="3" placeholder="Change this text"
                                class=" w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">{{ $setting->first_tab[0] }}</textarea>
                            <label for="" class="mt-4"><strong>Duration and Stars </strong></label><br>
                            <input type="text" name="first_tab[]" class="form-control inputStyle" id=""
                                value="{{ $setting->first_tab[1] }}">
                            <input type="text" name="first_tab[]" class="form-control inputStyle mt-2" id=""
                                value="{{ $setting->first_tab[2] }}">
                            <input type="text" name="first_tab[]" class="form-control inputStyle" id=""
                                value="{{ $setting->first_tab[3] }}">
                            <input type="text" name="first_tab[]" class="form-control inputStyle mt-2" id=""
                                value="{{ $setting->first_tab[4] }}">
                            <input type="text" name="first_tab[]" class="form-control inputStyle" id=""
                                value="{{ $setting->first_tab[5] }}">
                        </div>
                        <div class="mb-4">
                            <label for="findid"><strong>4 star reviw page </strong></label><br><br>
                            <textarea name="four_star_page[]" id="editor2" rows="3" placeholder="Change this text"
                                class=" w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">{{ $setting->four_star_page[0] }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="findid"><strong>5 star reviw page </strong></label><br><br>
                            <textarea name="five_star_page[]" id="editor4" rows="3" placeholder="Change this text"
                                class=" w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">{{ $setting->five_star_page[0] }}</textarea>
                            <input type="text" name="five_star_page[]" class="form-control inputStyle mt-2"
                                id="" value="{{ $setting->five_star_page[1] }}">
                            <input type="text" name="five_star_page[]" class="form-control inputStyle mt-2"
                                id="" value="{{ $setting->five_star_page[2] }}">
                            <input type="text" name="five_star_page[]" class="form-control inputStyle mt-2"
                                id="" value="{{ $setting->five_star_page[3] }}">
                            <label for="" class="mt-2">Review Screenshot Error Message </label><br>
                            <textarea name="review[]" id="editor7" rows="3" placeholder="Change this text"
                                class=" w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">{{ $setting->review[0] }}</textarea>

                            <div class="w-full">
                                <label for="reviewfileInput" class="mt-2">Review Screenshots </label><br>
                                <div class="relative inline-flex items-center justify-left space-x-2 w-full">
                                    <input type="file" id="reviewfileInput" class="hidden" name="images[]"
                                        accept="image/*" multiple>
                                    <button id="uploadButton" type="button"
                                        class="flex items-center px-6 py-3 border rounded-lg bg-yellow-500 text-white hover:bg-yellow-600 focus:outline-none">
                                        <svg class="w-5 h-5 mr-1" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0 0 312.602 312.602" xml:space="preserve" fill="#000000">
                                            <!-- SVG icon code -->
                                        </svg>
                                        <span class="uppercase">upload review screenshot</span>
                                    </button>
                                </div>

                                <!-- Preview uploaded images -->
                                <div class="w-full my-2 text-center" id="uploadimagesection">
                                    <div class="grid gap-2" id="uploadedImages"></div>
                                </div>

                                <div class="w-full my-2 text-center" id="preloadedImagesSection">
                                    <div class="grid gap-2" id="preloadedImagesContainer">

                                        @foreach ($setting->images as $index => $item)
                                            <div class="flex items-center gap-2 my-2" id="{{ $item->id }}">
                                                <img src="{{ asset('uploads/' . $item->image) }}" alt="Preloaded Image"
                                                    style="max-width: 100px;">
                                                <a class="cursor-pointer hover:text-gray-600"
                                                    onclick="deletePreloadedImage({{ $index }},{{ $item->id }})">
                                                    <i class="fa fa-trash text-gray-500 text-lg"></i>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Display preloaded data -->



                                <!--  -->
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="findid"><strong>Thanks page </strong></label><br><br>
                            <textarea name="thanks_page[]" id="editor3" rows="3" placeholder="Change this text"
                                class=" w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">{{ $setting->thanks_page[0] }}</textarea>
                            <input type="text" name="thanks_page[]" class="form-control inputStyle mt-2"
                                id="" value="{{ $setting->thanks_page[1] }}">
                        </div>
                        <div class="flex items-center justify-end">
                            <button type="submit"
                                class="bg-yellow-400 hover:bg-yellow-500 py-2 px-4 text-white font-medium rounded-lg text-md uppercase">Update</button>
                        </div>
                    </form>
                </div>
                <!-- 5 stars feedback -->
                {{-- <div class="w-full bg-white p-3 rounded-xl shadow-sm my-4">
                    <h1 class="text-xl mb-4">5 Stars Feedback Update</h1>
                    <div class="mb-4">
                        <input type="text" id="freeP" name="freeP" placeholder="Change this text"
                            class="w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">
                        a same product (for free)"</label><br><br>
                        <textarea name="" id="editor3" rows="3" placeholder="Change this text"
                            class=" w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="">"when you complete these steps. We truly appreciate your review on Amazon as
                            it helps us immensely!"</label><br><br>
                        <textarea name="" id="editor4" rows="3" placeholder="Change this text"
                            class=" w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="">"Please kindly support our growing business. Please save your review
                            screenshot and return here to upload it, so that you can unlock your benefit! Thank you for your
                            business and your time!"</label><br><br>
                        <textarea name="" id="editor5" rows="3" placeholder="Change this text"
                            class=" w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400"></textarea>

                    </div>
                    <div class="mb-4">
                        <label for="">"Leave feedback text"</label><br><br>
                        <textarea name="" id="editor6" rows="3" placeholder="Change this text"
                            class=" w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400"></textarea>
                    </div>
                    <div class="flex items-center justify-end">
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 py-2 px-4 text-white font-medium rounded-lg text-md uppercase">Update</button>
                    </div>
                </div> --}}
                <!--  -->
            </div>

            <!-- order Information -->
            <div class="hidden" id="ordersection">
                <div class="mb-2">
                    <h1 class="text-2xl font-medium uppercase">Order Information</h1>
                </div>
                <div class="flex items-center justify-end mb-3">
                    <button id=""
                        class="uppercase bg-green-400 hover:bg-green-500 text-white font-bold py-2.5 px-8 rounded-xl ml-2"
                        onclick="openImportModal()">+ Import Orders</button>
                    <button id="openModalBtn"
                        class="uppercase bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2.5 px-8 rounded-xl">+
                        Add</button>
                </div>
                <!-- table -->
                <div class="relative overflow-x-auto shadow-sm border border-gray-200">
                    <table class="w-full text-sm text-left text-gray-500 text-gray-400 ">
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                    Order ID
                                </th>
                                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4  whitespace-nowrap ">
                                        {{ $item->amazon_order_id }}
                                    </th>
                                    <th scope="row" class="px-6 py-4  whitespace-nowrap ">
                                        <div class="flex items-center gap-2">
                                            <i id="editIcon"
                                                onclick="editOrder(`{{ $item->amazon_order_id }}`, `{{ $item->id }}`)"
                                                class="fa fa-edit text-lg hover:text-yellow-400 cursor-pointer"></i>
                                            <i onclick="deleteOrder({{ $item->id }})"
                                                class="fa fa-trash text-lg hover:text-yellow-400 cursor-pointer"></i>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--  -->
            </div>
            <div id="importModal"
                class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
                <div class="bg-white p-4 rounded-lg">
                    <h2 class="text-lg font-semibold mb-2">Import Orders</h2>
                    <form action="{{ route('importOrders') }}" method="POST" id="myForm"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="fileInput" name="file" accept=".xlsx, .xls">
                        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">Import</button>
                        <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded ml-2"
                            onclick="closeImportModal()">Cancel</button>
                    </form>

                </div>
            </div>
            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                class="fixed inset-0 flex items-center hidden justify-center z-50">
                <div class="w-full max-w-2xl">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Add Order Info
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                                data-modal-hide="defaultModal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6 w-full">
                            <form action=""></form>
                            <div class="flex flex-col gap-2">
                                <div class="">
                                    <label for="amazon_order_id" class="font-bold">Order ID.</label><br>
                                    <input type="hidden" name="order_id" value="">
                                    <input type="text" name="amazon_order_id" id="amazon_order_id" required
                                        placeholder="Enter Order ID"
                                        class="p-2 w-full border-b border-gray-300 focus:outline-none focus:border-yellow-300">
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button id="modalSubmitButton"
                                class="bg-yellow-400 text-white hover:bg-yellow-500 py-2 px-6 rounded-lg font-bold">Submit</button>
                        </div>
                    </div>
                </div>
            </div>




        </main>
    </section>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
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
        // const editIcon = document.getElementById('editIcon');

        function editOrder($amazon_order_id, $orderId) {
            $("input[name=amazon_order_id]").val($amazon_order_id);
            $("input[name=order_id]").val($orderId);
            modal.classList.remove('hidden');
        }
        // Function to open the modal
        const openModal = () => {
            var OrderId = $("input[name=amazon_order_id]").val('');
            modal.classList.remove('hidden');
        };

        // Function to close the modal
        const closeModal = () => {
            var OrderId = $("input[name=amazon_order_id]").val('');
            modal.classList.add('hidden');
        };

        // Add event listeners
        openModalBtn.addEventListener('click', openModal);
        closeModalBtn.addEventListener('click', closeModal);
        // editIcon.addEventListener('click', openModal);


        const modalSubmitButton = document.getElementById('modalSubmitButton');
        modalSubmitButton.addEventListener('click', () => {

            var amazon_order_id = $("input[name=amazon_order_id]").val();
            var OrderId = $("input[name=order_id]").val();

            if (OrderId == null || OrderId.length === 0) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "/order/add",
                    data: {
                        amazon_order_id: amazon_order_id,
                    },
                    success: function(data) {
                        closeModal();
                        window.location.reload();
                    }
                });

            } else {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: `/order/update`,
                    data: {
                        amazon_order_id: amazon_order_id,
                        order_id: OrderId,
                    },
                    success: function(data) {
                        closeModal();
                        window.location.reload();
                    }
                });
            }
        });

        function deleteOrder(OrderId) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: `/order/delete`,
                data: {
                    order_id: OrderId,
                },
                success: function(data) {
                    window.location.reload();
                }
            });
        }

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



        initializeCKEditor('#editor5');
        initializeCKEditor('#editor6');
        initializeCKEditor('#editor7');

        ClassicEditor
            .create(document.querySelector('#editor4'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckeditor.upload') . '?_token=' . csrf_token() }}',
                },
                alignment: {
                    options: ['left', 'center', 'right'],
                },
                textAlignment: {
                    options: ['left', 'center', 'right', 'justify']
                },
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:alignLeft',
                        'imageStyle:alignCenter',
                        'imageStyle:alignRight',
                        'toggleImageCaption',
                        'imageResize'
                    ],
                    styles: [
                        'alignLeft',
                        'alignCenter',
                        'alignRight'
                    ],
                    resizeOptions: [{
                            name: 'resizeImage:original',
                            label: 'Original',
                            value: null
                        },
                        {
                            name: 'resizeImage:50',
                            label: '50%',
                            value: '50'
                        },
                        {
                            name: 'resizeImage:75',
                            label: '75%',
                            value: '75'
                        }
                    ]
                }
            })
            .catch(error => {
                console.error(error);
            });


        // Add more instances as needed

        function openImportModal() {
            document.getElementById("importModal").classList.remove("hidden");
        }

        function closeImportModal() {
            document.getElementById("importModal").classList.add("hidden");
        }

        function importOrders() {
            const formData = new FormData(document.getElementById('myForm'));

            // const fileInput = document.getElementById("fileInput");
            // const file = fileInput.files[0];

            // // Assuming you're using FormData to send the file to the backend
            // const formData = new FormData();
            // formData.append('file', file);

            // Send the file to the backend using an AJAX request
            fetch('/import-orders', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Handle success or error messages
                    console.log(data);
                    closeImportModal();
                })
                .catch(error => {
                    console.error(error);
                    closeImportModal();
                });
        }

        const uploadButton = document.getElementById('uploadButton');
        const reviewfileInput = document.getElementById('reviewfileInput');
        const uploadImageSection = document.getElementById('uploadimagesection');
        const uploadedImagesContainer = document.getElementById('uploadedImages');
        const preloadedDataSection = document.getElementById('preloadedDataSection');

        uploadButton.addEventListener('click', () => {
            reviewfileInput.click();
        });

        reviewfileInput.addEventListener('change', () => {
            if (reviewfileInput.files.length === 0) {
                console.log('No files selected');
                uploadImageSection.classList.add('hidden');
            } else {
                console.log('Files selected');
                uploadImageSection.classList.remove('hidden');

                // Clear previous previews
                uploadedImagesContainer.innerHTML = '';

                // Preview uploaded images
                for (const file of reviewfileInput.files) {
                    const imageContainer = document.createElement('div');
                    imageContainer.className = 'flex items-center gap-2 my-2';

                    // Create an image element for preview
                    const imageElement = document.createElement('img');
                    imageElement.src = URL.createObjectURL(file);
                    imageElement.alt = file.name;
                    imageElement.style.maxWidth = '100px'; // Adjust image size as needed

                    // Add the image element to the container
                    imageContainer.appendChild(imageElement);

                    // Add a delete button
                    const deleteButton = document.createElement('button');
                    deleteButton.innerHTML = '<i class="fa fa-trash text-gray-500 text-lg"></i>';
                    deleteButton.className = 'cursor-pointer hover:text-gray-600';
                    deleteButton.addEventListener('click', () => {
                        // Remove the image container when the delete button is clicked
                        imageContainer.remove();
                    });
                    imageContainer.appendChild(deleteButton);

                    // Append the image container to the uploaded images container
                    uploadedImagesContainer.appendChild(imageContainer);
                }
            }
        });

        function deletePreloadedImage(index, id) {
            const preloadedImageContainer = document.getElementById('preloadedImagesContainer');
            const image = document.getElementById(id);

            // Hide the parent div element containing the image
            image.style.display = 'none';

            $.ajax({
                url: '/media-delete/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Handle success if needed
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }
        // Function to add preloaded data (modify as needed)
    </script>
@endsection
