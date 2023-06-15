@extends('layout-admin.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">

    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Edit Profile</h2>


        <div class="w-full mt-4 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-sm text-gray-600 dark:text-gray-200 mb-3">Edit Data lengkap pengguna</h3>

            <form method="post" action="/profile/{{auth()->user()->id}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Maulana" value="{{auth()->user()->name}}" required>
                        @if($errors->first('name'))
                        <small class="text-xs text-red-500">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email@gmail.com" value="{{auth()->user()->email}}" required>
                        @if($errors->first('email'))
                        <small class="text-xs text-red-500">{{$errors->first('email')}}</small>
                        @endif
                    </div>
                    <div>
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                        <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="laki-laki" {{ auth()->user()->gender == 'laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                            <option value="perempuan" {{ auth()->user()->gender == 'perempuan' ? 'selected' : ''}}>Perempuan</option>
                        </select>
                        @if($errors->first('gender'))
                        <small class="text-xs text-red-500">{{$errors->first('gender')}}</small>
                        @endif
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                        <input type="number" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+628" value="{{auth()->user()->phone}}" required>
                        @if($errors->first('phone'))
                        <small class="text-xs text-red-500">{{$errors->first('phone')}}</small>
                        @endif
                    </div>
                    <div>
                        <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="current_password" name="current_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="*****">
                        @if($errors->first('current_password'))
                        <small class="text-xs text-red-500">{{$errors->first('current_password')}}</small>
                        @endif
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password Baru</label>
                        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="*****">
                        @if($errors->first('password'))
                        <small class="text-xs text-red-500">{{$errors->first('password')}}</small>
                        @endif
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <textarea id="address" name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="alamat ..." required>{{auth()->user()->address}}</textarea>
                        @if($errors->first('address'))
                        <small class="text-xs text-red-500">{{$errors->first('address')}}</small>
                        @endif
                    </div>
                    <div>
                        <label for="image_new" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profil</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image_new" name="image_new" type="file" accept="image/png, image/jpg, image/jpeg">
                        @if($errors->first('image'))
                        <small class="text-xs text-red-500">{{$errors->first('image')}}</small>
                        @endif
                    </div>
                </div>
                <a href="{{ url('/profile') }}" class="text-gray-100 bg-[#F2BE22] border border-[#F2BE22] focus:outline-none hover:bg-[#dca911] focus:ring-4 focus:ring-[#F2BE22] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#F2BE22] dark:text-gray-800 dark:border-[#F2BE22] dark:hover:bg-[#dca911] dark:hover:border-[#F2BE22] dark:focus:ring-[#F2BE22]">Kembali</a>
                <button type="submit" class="text-white bg-[#F24C3D] hover:bg-[#e73424] focus:ring-4 focus:outline-none focus:ring-[#e73424] font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-[#F24C3D] dark:hover:bg-[#e73424] dark:focus:ring-[#e73424]">Simpan</button>
            </form>

        </div>
    </div>
</div>


@endsection