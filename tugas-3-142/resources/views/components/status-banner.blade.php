@props(['type' => 'info'])

@php
    $style = [
        'success' => ['bg' => 'bg-g-green-tonal',  'text' => 'text-g-green',    'icon' => 'check_circle'],
        'error'   => ['bg' => 'bg-g-red-tonal',    'text' => 'text-g-red',      'icon' => 'error'],
        'warning' => ['bg' => 'bg-g-yellow-tonal', 'text' => 'text-[#a35b00]',  'icon' => 'warning'],
        'info'    => ['bg' => 'bg-g-blue-tonal',   'text' => 'text-g-blue',     'icon' => 'info'],
    ][$type] ?? ['bg' => 'bg-gray-100', 'text' => 'text-g-ink-secondary', 'icon' => 'info'];
@endphp

{{-- Komponen status-banner: notifikasi tonal. Atribut type: success, error, warning, atau info. Pesan lewat slot. --}}
<div class="flex items-center gap-3 p-4 rounded-gl {{ $style['bg'] }}">
    <span class="material-symbols-outlined {{ $style['text'] }}">{{ $style['icon'] }}</span>
    <p class="text-sm font-medium text-g-ink">{{ $slot }}</p>
</div>
