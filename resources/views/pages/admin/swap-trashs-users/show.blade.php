@extends('layout-admin.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Tukar Timbangan Sampah</h2>

        <div class="w-full mt-4">
            <div class="md:flex">
                <div class="md:w-2/3 px-6 py-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h4 class="text-gray-600 dark:text-gray-200 mb-3">Daftar semua sampah yang akan di proses</h4>
                    <div class="relative overflow-x-auto my-3">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="">
                                    <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                        Bukti Timbangan
                                    </th>
                                    <th class="px-2 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                        Tanggal
                                    </th>
                                    <th class="px-2 py-3 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                        Berat
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($swap_trash_items as $trash_item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 text-center">
                                        <div class="flex justify-center items-center">
                                            <img src="{{ url('assets/proof_trash/'.$trash_item->trash->proof_of_weight) }}" class="w-36 h-auto">
                                        </div>
                                    </td>
                                    <td scope="row" class="py-4 text-center">
                                        {{ $trash_item->trash->date }}
                                    </td>
                                    <td class="py-4 text-center">
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-1 rounded-xl dark:bg-yellow-900 dark:text-yellow-300">{{$trash_item->trash->weight}} Gram</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="my-3">
                        {{ $swap_trash_items->links('pagination::tailwind') }}
                    </div>
                </div>

                <div class="md:w-1/3 md:ml-3 mt-3 md:mt-0">
                    <div class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="text-gray-600 dark:text-gray-200 mb-3">Informasi</h3>
                        <div>
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Tanggal Transaksi :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">
                                    {{-- {{ $swap_trash->date }} --}}
                                    {{ date('d M Y', strtotime($swap_trash->date)) }}
                                </p>
                            </div>
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Token :</p>
                                <p class="block mb-1 text-sm font-bold text-gray-500 dark:text-white">{{$swap_trash->token}}</p>
                            </div>
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Total Timbangan :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">{{$swap_trash->total_weight}} Gram</p>
                            </div>
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Total Uang :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">Rp. {{$swap_trash->total_money}}</p>
                            </div>
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Status :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">
                                    @if($swap_trash->status == "choose")
                                    <span class="text-[#F2BE22] text-sm font-medium dark:text-[#F2BE22]">Pilih Tiket / Uang</span>
                                    @elseif($swap_trash->status == "process")
                                    <span class="text-[#22A699] text-sm font-medium dark:text-[#22A699]">Konfirmasi</span>
                                    @elseif($swap_trash->status == "done")
                                    <span class="text-[#F24C3D] text-sm font-medium dark:text-[#F24C3D]">Selesai</span>
                                    @endif
                                </p>
                            </div>
                            <hr>
                            @if($swap_trash->status == "done")
                            <div class="flex justify-between my-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Tukar Dengan :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">
                                    @if($swap_trash->choose_ticket_money == "ticket")
                                    Tiket
                                    @elseif($swap_trash->choose_ticket_money == "money")
                                    Uang
                                    @endif
                                </p>
                            </div>
                            @if($swap_trash->choose_ticket_money !== "ticket")
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Nama Bank :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">{{$swap_trash->bank_name}}</p>
                            </div>
                            <div class="flex justify-between mb-3">
                                <p class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Nomor Rekening :</p>
                                <p class="block mb-1 text-sm text-gray-500 dark:text-white">{{$swap_trash->no_rekening}}</p>
                            </div>
                            @endif
                            @endif
                            @if($swap_trash->status == "choose")
                            <form action="{{ url('swap-trash-user/' . $swap_trash->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="my-3">
                                    <label for="choose_ticket_money" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Tukar Tiket atau Uang</label>
                                    <select id="choose_ticket_money" name="choose_ticket_money" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        <option value="">Pilih Tukar</option>
                                        @if($swap_trash->status_swap == "only_ticket")
                                        <option value="ticket">Tiket</option>
                                        @elseif($swap_trash->status_swap == "only_money")
                                        <option value="money">Uang</option>
                                        @else
                                        <option value="ticket">Tiket</option>
                                        <option value="money">Uang</option>
                                        @endif
                                    </select>
                                    @error('choose_ticket_money')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="addelement"></div>
                                <div class="mb-3">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                                    <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tinggalkan pesan anda disini..." required></textarea>
                                </div>
                                <button type="submit" class="w-full text-[#22A699] hover:text-white border border-[#22A699] hover:bg-[#22A699] focus:ring-4 focus:outline-none focus:ring-[#22A699] font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-[#22A699] dark:text-[#22A699] dark:hover:text-white dark:hover:bg-[#22A699] dark:focus:ring-[#22A699]">Tukar Sekarang</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="module">
    // saat input select diubah
    $('#choose_ticket_money').on('change', function() {
        // mendapatkan nilai yang dipilih
        var selectedValue = $(this).val();

        var newElementMoney = "<div class='mb-3'><label for='bank_name' class='block mb-2 text-sm font-medium text-gray-700 dark:text-white'>Bank</label><select id='bank_name' name='bank_name' class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' required><option value=''>Pilih Nama Bank</option><option value='BNI'>BNI</option><option value='BRI'>BRI</option><option value='BCA'>BCA</option><option value='Mandiri'>Mandiri</option></select></div><div class='mb-3'><label for='no_rekening' class='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>Nomor Rekening</label><input type='text' id='no_rekening' name='no_rekening' class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' placeholder='XXXX-XXXX-XXXX-XXXX' required></div>";
        console.log(selectedValue)
        if (selectedValue == 'money') {
            $('.addelement').append(newElementMoney);
            // } else if (selectedValue == 'ticket_money') {
            //     $('.addelement').append(newElementMoney);
            // } 
        } else {
            $('.addelement').empty();
        }
    });
</script>

@endsection