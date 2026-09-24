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
        <a href="{{ route('portfolio.work.show', $project['slug']) }}" aria-label="View {{ $project['name'] }} case study">
            Case study
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
        </a>
    </div>
</article>
