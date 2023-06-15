@extends('layout-admin.master')

@section('master.content')

<!-- Navbar -->
@include('components-admin.navbar')
<!-- End Navbar -->

<!-- Sidebar -->
@include('components-admin.sidebar')
<!-- End Sidebar -->

<!-- Content -->
@yield('content')
<!-- End Content -->

<!-- Footer -->
@include('components-admin.footer')
<!-- End Footer -->

@endsection()