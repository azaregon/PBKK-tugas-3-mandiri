@props(['label', 'value', 'icon' => 'info'])

{{-- Komponen info-card: ikon tonal + label + value. Atribut wajib: label, value. Opsional: icon (nama Material Symbols). --}}
<div class="flex items-center gap-4 p-4 bg-white rounded-g border border-g-border shadow-g1">
    <span class="w-10 h-10 shrink-0 rounded-full bg-g-blue-tonal flex items-center justify-center">
        <span class="material-symbols-outlined text-g-blue">{{ $icon }}</span>
    </span>
    <div class="min-w-0">
        <p class="text-xs text-g-ink-secondary font-medium leading-tight">{{ $label }}</p>
        <p class="text-[15px] font-medium text-g-ink truncate">{{ $value }}</p>
    </div>
</div>
