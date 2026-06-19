@extends('layouts.main')

@section('title', 'Dashboard - MagangIn')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-6">
    <h1 class="text-2xl font-bold text-[#10367D]">Selamat datang, {{ Auth::user()->name }}!</h1>
    <p class="text-gray-500 mt-2">Ini adalah halaman dashboard kamu.</p>
</div>
@endsection