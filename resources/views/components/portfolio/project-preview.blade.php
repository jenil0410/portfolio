@props([
    'project',
    'activeView' => null,
])

@php
    $views = App\Data\Portfolio\PortfolioData::getPreviewViews($project);
    $currentActive = $activeView ?: ($views[0] ?? '');
@endphp

<div class="software-preview preview-{{ $project['slug'] }}" aria-label="{{ $project['name'] }} interface concept">
    <div class="preview-bar">
        <span>INTERFACE CONCEPT</span>
        <i></i>
        <i></i>
        <i></i>
    </div>
    <div class="preview-shell">
        <aside>
            @foreach(array_slice($views, 0, 4) as $index => $view)
                <span class="{{ $view === $currentActive ? 'active' : '' }}">
                    {{ $view }}
                </span>
            @endforeach
        </aside>
        <div class="preview-workspace">
            <div class="preview-heading">
                <b>{{ $currentActive }}</b>
                <span>SYS/{{ $project['number'] }}</span>
            </div>
            <div class="preview-grid">
                @foreach(array_values(array_filter($views, fn($v) => $v !== $currentActive)) as $index => $view)
                    <div>
                        <span>0{{ $index + 1 }}</span>
                        <strong>{{ $view }}</strong>
                        <i></i>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
