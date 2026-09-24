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
        </article>
    </section>
@endif
