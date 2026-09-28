@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <div class="mb-6">
        <h1 class="text-[28px] leading-tight font-normal text-g-ink tracking-[-0.01em]">Profil mahasiswa</h1>
        <p class="text-g-ink-secondary mt-1.5 text-[15px]">Data akademik yang terdaftar di sistem.</p>
    </div>

    <x-status-banner :type="$aktif ? 'success' : 'warning'">
        Status akademik: {{ $aktif ? 'Aktif kuliah semester ini' : 'Sedang cuti akademik' }}
    </x-status-banner>

    <div class="grid sm:grid-cols-2 gap-3 mt-4">
        <x-info-card icon="person"  label="Nama Lengkap"   :value="$nama" />
        <x-info-card icon="badge"   label="NRP"             :value="$nrp" />
        <x-info-card icon="school"  label="Program Studi"   :value="$prodi" />
        <x-info-card icon="mail"    label="Email"           :value="$email" />
    </div>

    <div class="mt-6 p-5 bg-white rounded-gl border border-g-border shadow-g1">
        <h2 class="font-medium text-g-ink mb-3">Mata kuliah semester ini</h2>
        <div class="flex flex-wrap gap-2">
            @forelse ($mataKuliah as $mk)
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-g-surface border border-g-border text-sm text-g-ink">
                    <span class="material-symbols-outlined text-[18px] text-g-ink-secondary">menu_book</span>
                    {{ $mk }}
                </span>
            @empty
                <p class="text-sm text-g-ink-secondary">Belum ada mata kuliah terdaftar.</p>
            @endforelse
        </div>
    </div>
@endsection
