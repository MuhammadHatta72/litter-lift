@extends('layout-admin.index')

@section('content')

<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        @can('isUser')
        <h2 class="text-2xl text-gray-800 dark:text-gray-100 mt-4">List Sampah</h2>

        <div class="mt-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bukti Timbangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Berat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trashs as $trash)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-cart" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-cart" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex justify-center items-center">
                                    @if($trash->proof_of_weight !== "not_found")
                                    <img src="{{ url('./assets/proof_trash/' .$trash->proof_of_weight) }}" class="w-28 h-auto">
                                    @else
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-14 h-auto text-[#F7C04B]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z"></path>
                                    </svg>
                                    @endif
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{$trash->date}}
                            </td>
                            <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{$trash->weight}} Gram</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-start">
                                    <a href="{{ url('trash-scales/'.$trash->id)}}" class="text-white bg-[#F2BE22] hover:bg-[#d3a008] focus:ring-4 focus:outline-none focus:ring-[#F2BE22] font-medium rounded-full text-sm p-2 text-center inline-flex items-center mr-1 dark:bg-[#F2BE22] dark:hover:bg-[#d3a008] dark:focus:ring-[#d3a008]">
                                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="p-4">
                </div>

                <form action="/swap-trash" method="post">
                    @csrf
                    <div class="trashs">
                        @foreach($trashs as $trash_hidden)
                        <input type="hidden" id="trash_id" name="trash_id[]" value="{{$trash_hidden->id}}" disabled>
                        @endforeach
                    </div>
                    <button type="submit" class=" text-white bg-[#22A699] hover:bg-[#22A699]/90 focus:ring-4 focus:outline-none focus:ring-[#22A699]/50 font-medium rounded-lg text-sm mx-6 mt-4 px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#22A699]/55 mr-2 mb-4">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                        </svg>
                        Tukarkan Sekarang
                    </button>
                </form>
            </div>
        </div>
        @endcan
    </div>
</div>
<script>
    const carts = document.querySelectorAll('#trash_id');
    const checkbox_carts = document.querySelectorAll('#checkbox-cart');

    checkbox_carts.forEach((checkbox_cart, index) => {
        checkbox_cart.addEventListener('click', () => {
            if (checkbox_cart.checked) {
                carts[index].removeAttribute('disabled');
            } else {
                carts[index].setAttribute('disabled', '');
            }
        });
    });

    const checkbox_all = document.querySelector('#checkbox-all');
    checkbox_all.addEventListener('click', () => {
        if (checkbox_all.checked) {
            carts.forEach((cart) => {
                cart.removeAttribute('disabled');
            });
            checkbox_carts.forEach((checkbox) => {
                checkbox.checked = true;
            });
        } else {
            carts.forEach((cart) => {
                cart.setAttribute('disabled', '');
            });
            checkbox_carts.forEach((checkbox) => {
                checkbox.checked = false;
            });
        }
    });
</script>

@endsection