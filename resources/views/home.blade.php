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
                    <table class="w-full text-sm text-left text-gray-500 text-gray-400 ">
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
                                <th scope="col" class="px-6 py-3">
                                    Picture
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
                                        <div class="flex items-center gap-4">
                                            @foreach ($item->images as $item)
                                                <img src="{{ asset('uploads/' . $item->image) }}" alt="product"
                                                    class="w-10">
                                            @endforeach
                                        </div>
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
                    <h1 class="text-xl mb-4">Your Order design Update</h1>
                    <div class="mb-4">
                        <label for="orderid">"Please enter your Amazon ORDER ID here"</label><br>
                        <input type="text" id="orderid" name="orderid" placeholder="Change this text"
                            class="w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">
                    </div>
                    <div class="mb-4">
                        <label for="findid">"Use the "FIND ID" button to get it easily from your Amazon Order History
                            page."</label><br>
                        <input type="text" id="findid" name="findid" placeholder="Change this text"
                            class="w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">
                    </div>
                    <div class="flex items-center justify-end">
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 py-2 px-4 text-white font-medium rounded-lg text-md uppercase">Update</button>
                    </div>
                </div>
                <!-- 5 stars feedback -->
                <div class="w-full bg-white p-3 rounded-xl shadow-sm my-4">
                    <h1 class="text-xl mb-4">5 Stars Feedback Update</h1>
                    <div class="mb-4">
                        <label for="orderid">"Thank you! We are so excited you came for your Benefit! You can choose to
                            receive
                            a same product (for free)"</label><br>
                        <input type="text" id="freeP" name="freeP" placeholder="Change this text"
                            class="w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">
                    </div>
                    <div class="mb-4">
                        <label for="findid">"when you complete these steps. We truly appreciate your review on Amazon as
                            it helps us immensely!"</label><br>
                        <input type="text" id="findid" name="findid" placeholder="Change this text"
                            class="w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">
                    </div>
                    <div class="mb-4">
                        <label for="findid">"Please kindly support our growing business. Please save your review
                            screenshot and return here to upload it, so that you can unlock your benefit! Thank you for your
                            business and your time!"</label><br>
                        <input type="text" id="review" name="review" placeholder="Change this text"
                            class="w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">
                    </div>
                    <div class="mb-4">
                        <label for="findid">"Leave feedback text"</label><br>
                        <input type="text" id="Leavefb" name="Leavefb" placeholder="Change this text"
                            class="w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">
                    </div>
                    <div class="flex items-center justify-end">
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 py-2 px-4 text-white font-medium rounded-lg text-md uppercase">Update</button>
                    </div>
                </div>
                <!--  -->
            </div>

            <!-- order Information -->
            <div class="hidden" id="ordersection">
                <div class="mb-2">
                    <h1 class="text-2xl font-medium uppercase">Order Information</h1>
                </div>
                <div class="flex items-center justify-end mb-3">
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
                                            <i onclick="deleteOrder({{ $item->id }})" class="fa fa-trash text-lg hover:text-yellow-400 cursor-pointer"></i>
                                        </div>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--  -->
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

        function deleteOrder(OrderId){
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
    </script>
@endsection
