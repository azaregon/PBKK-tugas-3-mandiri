@php
    $isDarkPage = isset($mode) && $mode === 'dark';
@endphp
<footer class="mt-auto py-6 border-t transition-colors
               {{ $isDarkPage ? 'border-g-dark-border' : 'border-g-border' }}">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 flex items-center justify-between text-xs
                {{ $isDarkPage ? 'text-g-dark-text-secondary' : 'text-g-ink-secondary' }}">
        <span>&copy; {{ date('Y') }} Departemen Teknik Informatika ITS</span>
        <span>Dibangun dengan Laravel &amp; Blade</span>
    </div>
</footer>
