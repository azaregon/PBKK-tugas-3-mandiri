@extends('layouts.app')

@section('title', 'Ide Riset Agentic AI')

@section('content')
    {{--
        Challenge 1: Toggle Tema Dinamis
        Kelas Tailwind dipilih dinamis lewat variabel PHP ($mode) berdasarkan
        parameter rute /ide-agent?mode=dark. Warna yang dipakai adalah palet
        dark theme asli Google Workspace (#202124 / #303134 / #8ab4f8),
        bukan slate/gray generik.
    --}}
    @php
        $isDark = $mode === 'dark';
    @endphp

    <div class="rounded-gl p-6 sm:p-8 transition-colors
                {{ $isDark ? 'bg-g-dark-surface border border-g-dark-border' : 'bg-white border border-g-border shadow-g1' }}">

        <div class="flex items-center justify-between gap-4 mb-6">
            <div>
                <h1 class="text-[28px] leading-tight font-normal tracking-[-0.01em] {{ $isDark ? 'text-g-dark-text' : 'text-g-ink' }}">
                    Ide riset Agentic AI
                </h1>
                <p class="mt-1.5 text-[15px] {{ $isDark ? 'text-g-dark-text-secondary' : 'text-g-ink-secondary' }}">
                    Rancangan proyek kelompok yang sedang digarap.
                </p>
            </div>

            <a href="{{ route('ide-agent', ['mode' => $isDark ? 'light' : 'dark']) }}"
               class="shrink-0 inline-flex items-center gap-2 px-4 py-2 rounded-full text-sm font-medium transition
                      {{ $isDark
                          ? 'bg-g-dark-surface-2 text-g-dark-text hover:bg-[#3c4043]'
                          : 'bg-g-surface text-g-ink hover:bg-gray-200' }}">
                <span class="material-symbols-outlined text-[18px]">{{ $isDark ? 'light_mode' : 'dark_mode' }}</span>
                {{ $isDark ? 'Mode terang' : 'Mode gelap' }}
            </a>
        </div>

        <div class="space-y-2.5">
            @forelse ($proyek as $p)
                <div class="p-4 rounded-g transition-colors
                            {{ $isDark ? 'bg-g-dark-surface-2' : 'bg-g-surface' }}
                            {{ $loop->first ? ($isDark ? 'ring-1 ring-g-blue-dark' : 'ring-1 ring-g-blue') : '' }}">
                    <p class="text-xs {{ $isDark ? 'text-g-dark-text-secondary' : 'text-g-ink-secondary' }}">
                        Proyek {{ $loop->iteration }} dari {{ $loop->count }}
                    </p>
                    <h3 class="font-medium mt-0.5 {{ $isDark ? 'text-g-dark-text' : 'text-g-ink' }}">
                        {{ $p['nama'] }}
                    </h3>
                    <p class="text-sm mt-0.5 {{ $isDark ? 'text-g-dark-text-secondary' : 'text-g-ink-secondary' }}">
                        {{ $p['deskripsi'] }}
                    </p>
                </div>
            @empty
                <p class="text-sm {{ $isDark ? 'text-g-dark-text-secondary' : 'text-g-ink-secondary' }}">
                    Belum ada ide proyek terdaftar.
                </p>
            @endforelse
        </div>
    </div>
@endsection
