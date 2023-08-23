@extends('layouts.app')

@section('content')
<section class="flex">
    <!-- Sidebar -->
    <aside class="w-1/6 bg-white py-4 px-2 shadow-sm h-screen fixed mt-0.5">
        <div class="flex flex-col items-center gap-2">
            <div class="hover:bg-yellow-400 hover:text-white py-2 px-4 rounded-lg w-full text-center cursor-pointer">
                <h1 class="text-lg font-medium">Dashboard</h1>
            </div>
            <div class="hover:bg-yellow-400 hover:text-white py-2 px-4 rounded-lg w-full text-center cursor-pointer">
                <h1 class="text-lg font-medium">Update</h1>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="w-5/6 py-4 px-6 ml-auto overflow-auto">
        <!-- Information -->
        <div class="">
            <div class="mb-2">
                <h1 class="text-2xl font-medium uppercase">Information</h1>
            </div>

            <div class="relative overflow-x-auto shadow-sm border border-gray-200">
                <table class="w-full text-sm text-left text-gray-500 text-gray-400 ">
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Picture
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Name@gmail
                            </th>
                            <td class="px-6 py-4">
                                Name
                            </td>
                            <td class="px-6 py-4">
                                F546G45
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('images/product.png') }}" alt="product" class="w-12">
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Name@gmail
                            </th>
                            <td class="px-6 py-4">
                                Name
                            </td>
                            <td class="px-6 py-4">
                                F546G45
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('images/product.png') }}" alt="product" class="w-12">
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Update -->
        <div class="hidden">
            <div class="mb-2">
                <h1 class="text-2xl font-medium uppercase">Update</h1>
            </div>
            <div class="w-full bg-white p-3 rounded-xl shadow-sm">
                <h1 class="text-xl mb-4">Your Order design Update</h1>
                <div class="mb-4">
                    <label for="orderid">"Please enter your Amazon ORDER ID here"</label><br>
                    <input type="text" id="orderid" name="orderid" placeholder="Change this text" class="w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">
                </div>
                <div class="mb-4">
                    <label for="findid">"Use the "FIND ID" button to get it easily from your Amazon Order History page."</label><br>
                    <input type="text" id="findid" name="findid" placeholder="Change this text" class="w-full border-b border-gray-300 p-2 focus:outline-none focus:border-yellow-400">
                </div>
                <div class="flex items-center justify-end">
                    <button class="bg-yellow-400 hover:bg-yellow-500 py-2 px-4 text-white font-medium rounded-lg text-md uppercase">Update</button>
                </div>
            </div>
        </div>
    </main>
</section>

@endsection