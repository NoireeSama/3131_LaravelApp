@extends('layouts.admin')
@section('content')
<!-- Header -->
<header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-black">Dashboard Ringkasan</h1>
                <p class="text-slate-500 font-medium">Selamat datang kembali, Admin!</p>
            </div>
            <div class="flex items-center gap-4">
                <div class="text-right hidden md:block">
                    <p class="font-bold">Admin Super</p>
                    <p class="text-xs text-slate-400">Penyelenggara Utama</p>
                </div>
                <div class="w-12 h-12 bg-white rounded-2xl shadow-sm border flex items-center justify-center p-1">
                    <img src="https://ui-avatars.com/api/?name=Admin+Super&background=6366f1&color=fff"
                        class="rounded-xl">
                </div>
            </div>
        </header>
@endsection