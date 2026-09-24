<header id="site-header" class="site-header">
    <div class="site-header-inner">
        <a href="{{ route('portfolio.home') }}" class="wordmark" aria-label="Jenil Desai, home">
            <span>JENIL</span>
            <span>DESAI</span>
        </a>

        <nav class="desktop-nav" aria-label="Primary navigation">
            @foreach($navItems as $item)
                @php
                    $isActive = request()->is(trim($item['path'], '/')) || (request()->routeIs('portfolio.home') && $item['label'] === 'Home');
                @endphp
                <a href="{{ $item['url'] }}" class="{{ $isActive ? 'is-active' : '' }}">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="availability">
            <i aria-hidden="true"></i>
            Open to opportunities
        </div>

        <button
            type="button"
            wire:click="toggleMenu"
            class="menu-trigger cursor-pointer bg-transparent border-0 p-2 text-foreground"
            aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
            aria-controls="mobile-menu"
            aria-label="{{ $isOpen ? 'Close menu' : 'Open menu' }}"
        >
            @if($isOpen)
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <line x1="4" y1="6" x2="20" y2="6"></line>
                    <line x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
            @endif
        </button>
    </div>

    <nav id="mobile-menu" class="mobile-nav {{ $isOpen ? 'is-open' : '' }}" aria-label="Mobile navigation">
        @foreach($navItems as $index => $item)
            <a href="{{ $item['url'] }}" wire:click="closeMenu">
                <span>0{{ $index + 1 }}</span>
                {{ $item['label'] }}
            </a>
        @endforeach
    </nav>
</header>
