@props([
    'experience',
    'variant' => 'timeline', // 'timeline' | 'page'
])

@if($variant === 'timeline')
    <div class="timeline">
        <div class="timeline-marker"><i></i></div>
        <div>
            <p class="eyebrow">{{ $experience['period'] }} · {{ $experience['location'] }}</p>
            <h2>{{ $experience['role'] }}</h2>
            <h3>{{ $experience['company'] }}</h3>
        </div>
        <p>Building Laravel applications and RESTful APIs, improving databases and caching, debugging backend systems, and translating client requirements into scalable enterprise workflows.</p>
    </div>
@else
    <section class="experience-page">
        <div class="xp-rail">
            <i></i>
            <span>2024</span>
            <span>NOW</span>
        </div>
        <article>
            <p class="eyebrow">{{ $experience['period'] }} · {{ $experience['location'] }}</p>
            <h2>{{ $experience['role'] }}</h2>
            <h3>{{ $experience['company'] }}</h3>
            <p>Contributing to Laravel application development across enterprise and business systems, with responsibility spanning application code, data performance, reliability and requirement translation.</p>
            <ul>
                @foreach($experience['responsibilities'] as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
            <div style="margin-top: 2.5rem;">
                <a href="{{ route('portfolio.resume') }}" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="padding: 0.65rem 1.4rem; font-size: 0.72rem; letter-spacing: 0.05em; text-transform: uppercase;">
                    Download R&eacute;sum&eacute; (PDF)
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg>
                </a>
            </div>
        </article>
    </section>
@endif
