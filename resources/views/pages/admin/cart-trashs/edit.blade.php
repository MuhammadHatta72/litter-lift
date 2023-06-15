@extends('layout-admin.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">

    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Edit User</h2>


        <div class="w-full mt-4 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 mb-3">Edit Data lengkap pengguna</h3>

            <form method="post" action="/users/{{$user->id}}">
                @csrf
                @method('put')
                <!-- <div class="grid gap-6 mb-6 md:grid-cols-2"> -->
                <div class="grid gap-6 mb-6">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Maulana" value="{{$user->name}}" required>
                        @if($errors->first('name'))
                        <small class="text-xs text-red-500">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                </div>
                <a href="{{ url('/users') }}" class="text-gray-100 bg-[#F2BE22] border border-[#F2BE22] focus:outline-none hover:bg-[#F2BE22] focus:ring-4 focus:ring-[#F2BE22] font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#F2BE22] dark:text-gray-800 dark:border-[#F2BE22] dark:hover:bg-[#F2BE22] dark:hover:border-[#F2BE22] dark:focus:ring-[#F2BE22]">Kembali</a>
                <button type="submit" class="text-white bg-[#22A699] hover:bg-[#0dc2b0] focus:ring-4 focus:outline-none focus:ring-[#0dc2b0] font-medium rounded-full text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-[#0dc2b0] dark:hover:bg-[#0dc2b0] dark:focus:ring-[#0dc2b0]">Update</button>
            </form>

        </div>
    </div>
</div>


@endsection