@php
    $isDarkPage = isset($mode) && $mode === 'dark';
@endphp
<header class="sticky top-0 z-10 border-b transition-colors
               {{ $isDarkPage ? 'bg-g-dark-bg border-g-dark-border' : 'bg-white border-g-border' }}">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between gap-4">

        {{-- Logo mark: 4 kuadran warna, khas identitas visual Google, tanpa meniru logo resminya --}}
        <a href="{{ route('beranda') }}" class="flex items-center gap-2.5 shrink-0">
            <span class="w-6 h-6 rounded-md grid grid-cols-2 grid-rows-2 overflow-hidden">
                <span class="bg-g-blue"></span>
                <span class="bg-g-red"></span>
                <span class="bg-g-yellow"></span>
                <span class="bg-g-green"></span>
            </span>
            <span class="text-[19px] font-medium tracking-[-0.01em] {{ $isDarkPage ? 'text-g-dark-text' : 'text-g-ink' }}">
                Portal Akademik
            </span>
        </a>

        {{-- Nav pill, gaya Google Workspace: tonal blue saat aktif --}}
        <nav class="flex items-center gap-1 text-sm">
            <a href="{{ route('beranda') }}"
               class="px-4 py-2 rounded-full font-medium transition
                      {{ request()->routeIs('beranda')
                          ? 'bg-g-blue-tonal text-g-blue'
                          : ($isDarkPage ? 'text-g-dark-text-secondary hover:bg-g-dark-surface' : 'text-g-ink-secondary hover:bg-gray-100') }}">
                Beranda
            </a>
            <a href="{{ route('profil') }}"
               class="px-4 py-2 rounded-full font-medium transition
                      {{ request()->routeIs('profil')
                          ? 'bg-g-blue-tonal text-g-blue'
                          : ($isDarkPage ? 'text-g-dark-text-secondary hover:bg-g-dark-surface' : 'text-g-ink-secondary hover:bg-gray-100') }}">
                Profil
            </a>
            <a href="{{ route('ide-agent') }}"
               class="px-4 py-2 rounded-full font-medium transition
                      {{ request()->routeIs('ide-agent')
                          ? ($isDarkPage ? 'bg-g-dark-surface-2 text-g-blue-dark' : 'bg-g-blue-tonal text-g-blue')
                          : ($isDarkPage ? 'text-g-dark-text-secondary hover:bg-g-dark-surface' : 'text-g-ink-secondary hover:bg-gray-100') }}">
                Ide Riset
            </a>
        </nav>
    </div>
</header>
