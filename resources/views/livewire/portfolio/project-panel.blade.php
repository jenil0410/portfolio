<article class="project-panel project-{{ $project['scale'] }}">
    <div class="project-top">
        <span class="project-number">{{ $project['number'] }}</span>
        <span>{{ $project['category'] }}</span>
    </div>

    <div class="project-copy">
        <h3>{{ $project['name'] }}</h3>
        <p>{{ $project['summary'] }}</p>
        @if(!empty($project['note']))
            <p class="project-note">{{ $project['note'] }}</p>
        @endif
    </div>

    <div class="software-preview preview-{{ $project['slug'] }}" aria-label="{{ $project['name'] }} interface concept">
        <div class="preview-bar">
            <span>INTERFACE CONCEPT</span>
            <i></i>
            <i></i>
            <i></i>
        </div>
        <div class="preview-shell">
            <aside>
                @foreach(array_slice($views, 0, 4) as $view)
                    <span
                        wire:click="setActiveView('{{ $view }}')"
                        class="cursor-pointer transition-colors {{ $view === $activeView ? 'active' : '' }}"
                    >
                        {{ $view }}
                    </span>
                @endforeach
            </aside>
            <div class="preview-workspace">
                <div class="preview-heading">
                    <b>{{ $activeView }}</b>
                    <span>SYS/{{ $project['number'] }}</span>
                </div>
                <div class="preview-grid">
                    @foreach(array_values(array_filter($views, fn($v) => $v !== $activeView)) as $index => $view)
                        <div wire:click="setActiveView('{{ $view }}')" class="cursor-pointer hover:border-primary transition-colors">
                            <span>0{{ $index + 1 }}</span>
                            <strong>{{ $view }}</strong>
                            <i></i>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <ul class="capability-list">
        @php
            $maxCaps = ($project['scale'] === 'compact') ? 4 : 8;
        @endphp
        @foreach(array_slice($project['capabilities'], 0, $maxCaps) as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <div class="project-bottom">
        <p>{{ implode(' · ', $project['technologies']) }}</p>
        <a href="{{ route('portfolio.work.show', $project['slug']) }}" aria-label="View {{ $project['name'] }} case study">
            Case study
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
        </a>
    </div>
</article>
