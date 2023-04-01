@extends('layout.master')

@section('master.content')
{{-- Navbar --}}
@include('components.navbar')
{{-- End Navbar --}}

{{-- Start Content --}}
@yield('content')
{{-- End Content --}}

{{-- Start Footer --}}
@include('components.footer')
{{-- End Footer --}}

@endsection()
