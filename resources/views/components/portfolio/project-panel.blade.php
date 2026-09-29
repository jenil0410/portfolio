@props([
    'project',
])

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

    <x-portfolio.project-preview :project="$project" />

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
        <div class="project-actions">
            @if(!empty($project['url']))
                <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="project-live-link" aria-label="Visit {{ $project['name'] }} live product">
                    Live product
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        <polyline points="15 3 21 3 21 9"></polyline>
                        <line x1="10" y1="14" x2="21" y2="3"></line>
                    </svg>
                </a>
            @endif
            <a href="{{ route('portfolio.work.show', $project['slug']) }}" aria-label="View {{ $project['name'] }} case study">
                Case study
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </a>
        </div>
    </div>
</article>
