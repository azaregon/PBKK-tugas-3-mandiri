@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="mb-6">
        <h1 class="text-[28px] leading-tight font-normal text-g-ink tracking-[-0.01em]">
            Selamat datang di portal akademik
        </h1>
        <p class="text-g-ink-secondary mt-1.5 text-[15px]">
            Profil diri, ide riset Agentic AI, dan ringkasan progres perkuliahan — dalam satu tempat.
        </p>
    </div>

    {{-- Challenge 2: sapaan dinamis lewat parameter ?user=Nama (contoh: /?user=Andi) --}}
    @isset($user)
        <x-status-banner type="success">
            Selamat datang kembali, {{ $user }}.
        </x-status-banner>
    @else
        <x-status-banner type="info">
            Tambahkan <code class="px-1 py-0.5 bg-white/60 rounded text-[13px]">?user=NamaAnda</code> di URL untuk melihat sapaan personal.
        </x-status-banner>
    @endisset

    <div class="grid sm:grid-cols-2 gap-3 mt-6">
        <a href="{{ route('profil') }}"
           class="group p-5 bg-white rounded-gl border border-g-border shadow-g1 hover:shadow-g2 transition-shadow">
            <span class="w-10 h-10 rounded-full bg-g-blue-tonal flex items-center justify-center mb-3">
                <span class="material-symbols-outlined text-g-blue">badge</span>
            </span>
            <h2 class="font-medium text-g-ink">Profil Mahasiswa</h2>
            <p class="text-sm text-g-ink-secondary mt-1">Data diri, mata kuliah, dan status keaktifan.</p>
            <span class="inline-flex items-center gap-1 text-sm text-g-blue font-medium mt-3">
                Lihat profil
                <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-0.5">arrow_forward</span>
            </span>
        </a>

        <a href="{{ route('ide-agent') }}"
           class="group p-5 bg-white rounded-gl border border-g-border shadow-g1 hover:shadow-g2 transition-shadow">
            <span class="w-10 h-10 rounded-full bg-g-blue-tonal flex items-center justify-center mb-3">
                <span class="material-symbols-outlined text-g-blue">psychology</span>
            </span>
            <h2 class="font-medium text-g-ink">Ide Riset Agentic AI</h2>
            <p class="text-sm text-g-ink-secondary mt-1">Rancangan proyek kelompok yang sedang digarap.</p>
            <span class="inline-flex items-center gap-1 text-sm text-g-blue font-medium mt-3">
                Lihat daftar
                <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-0.5">arrow_forward</span>
            </span>
        </a>
    </div>
@endsection
