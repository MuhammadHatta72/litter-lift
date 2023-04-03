@extends('layout.master')

@section('master.content')
    <div class="h-screen bg-orange-50 flex justify-center items-center dark:bg-gray-900">
        <div class="mx-auto bg-white p-4 shadow  flex-col justify-center items-center w-96 dark:bg-gray-800 rounded-lg">
            <div class="flex justify-center mb-5">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-36 h-auto text-center">
            </div>
            <form method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email" class="input" placeholder="user@gmail.com" required>
                </div>
                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="********" class="input" required>
                    <a href="#"
                        class="text-sm text-gray-600 dark:text-gray-200 hover:text-gray-500 dark:hover:text-gray-300 w-full flex justify-end mt-2">Forgot
                        password?</a>
                </div>
                <button type="submit" class="btn btn-primary flex w-full text-center items-center justify-center">
                    Login
                </button>
                <div class="flex justify-center mt-4">
                    <span class="text-sm text-gray-600 dark:text-gray-200">Don't have an account?</span>
                    <a href="{{ route('register') }}"
                        class="text-sm text-blue-600 dark:text-blue-400 hover:text-blue-500 dark:hover:text-blue-300 ml-1">Register</a>
                </div>
            </form>

        </div>
    </div>
@endsection
