<x-layouts.portfolio
    title="Jenil Desai — Systems in Motion"
    description="Backend-focused developer building enterprise systems, SaaS products and digital platforms with Laravel and PHP."
>
    <!-- HERO SECTION -->
    <section class="hero section-grid">
        <div class="hero-copy reveal">
            <p class="eyebrow">Software Developer / Product Builder</p>
            <h1>I build systems that turn complex workflows into <em>usable products.</em></h1>
            <p class="lede">Backend-focused developer working with Laravel and PHP, with professional experience building enterprise systems and independently developing SaaS and marketplace products.</p>
            
            <div class="hero-actions">
                <a href="{{ route('portfolio.work') }}" class="btn btn-primary btn-lg">
                    Explore my work
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <polyline points="19 12 12 19 5 12"></polyline>
                    </svg>
                </a>
                <a href="{{ route('portfolio.contact') }}" class="btn btn-secondary btn-lg">
                    Contact Jenil
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </a>
            </div>

            <p class="hero-meta">Laravel &middot; PHP &middot; Livewire &middot; MySQL &middot; SaaS</p>
        </div>

        <x-portfolio.systems-visual />

        <div class="hero-index">
            <span>PORTFOLIO / 2026</span>
            <span>Scroll to inspect</span>
        </div>
    </section>

    <!-- 01 POSITION -->
    <section class="positioning dark-band">
        <div class="section-label">01 / POSITION</div>
        <h2>I don't just build features. I build systems around how people actually work.</h2>
        <div class="position-grid">
            <article>
                <span>01A</span>
                <h3>Professional</h3>
                <p>Enterprise applications, ERP platforms, APIs, databases and business workflows built for operational clarity.</p>
            </article>
            <article>
                <span>01B</span>
                <h3>Independent</h3>
                <p>SaaS, marketplaces and automation explored through product architecture, iteration and hands-on development.</p>
            </article>
        </div>
    </section>

    <!-- 02 SELECTED WORK -->
    <section class="work-section">
        <header class="section-heading">
            <div>
                <p class="eyebrow">02 / Case file</p>
                <h2>Selected Work</h2>
            </div>
            <p>A mix of production engineering and independent product development.</p>
        </header>
        <div class="projects-list">
            @foreach($projects as $project)
                <x-portfolio.project-panel :project="$project" />
            @endforeach
        </div>
    </section>

    <!-- 03 ENGINEERING INDEX -->
    <section class="other-work">
        <div class="section-label">03 / ENGINEERING INDEX</div>
        <h2>Other things I've built</h2>
        <div class="word-index">
            @foreach($otherWork as $i => $item)
                <span><sup>{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</sup>{{ $item }}</span>
            @endforeach
        </div>
    </section>

    <!-- 04 EXPERIENCE -->
    <section class="experience-band">
        <div class="section-label">04 / EXPERIENCE</div>
        <x-portfolio.experience-item :experience="$experience" variant="timeline" />
    </section>

    <!-- 05 TOOLSET -->
    <section class="stack-section">
        <header class="section-heading">
            <div>
                <p class="eyebrow">05 / TOOLSET</p>
                <h2>Technical index</h2>
            </div>
            <p>Grouped by where I work deeply—and where I am still learning.</p>
        </header>
        <div class="stack-grid">
            @foreach($stack as $group => $items)
                <x-portfolio.technology-group :group="$group" :items="$items" :index="$loop->iteration" />
            @endforeach
        </div>
    </section>

    <!-- 06 POINT OF VIEW -->
    <section class="about-teaser dark-band">
        <div class="section-label">06 / POINT OF VIEW</div>
        <div class="about-layout">
            <h2>A developer who thinks in systems.</h2>
            <div>
                <p>My work sits between software engineering and product thinking: understanding the workflow, finding the right boundaries, and building the system behind the interface.</p>
                <p class="architecture-note">
                    <span>Before software, I learned to think spatially.</span>
                    Architectural training sharpened how I approach constraints, user behavior, problem solving and iterative design.
                </p>
                <a href="{{ route('portfolio.about') }}" class="btn btn-inverse btn-md">
                    About my approach
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- EXPLORING TICKER -->
    <section class="exploring">
        <div class="section-label">CURRENTLY EXPLORING</div>
        <div class="ticker" aria-label="Current technical explorations">
            <div>
                @foreach(array_merge($explorations, $explorations) as $x)
                    <span>{{ $x }}<i></i></span>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 07 CONTACT CTA -->
    <section class="contact-cta">
        <p class="eyebrow">07 / START A CONVERSATION</p>
        <h2>Have a problem<br />worth building?</h2>
        <p>I'm open to software engineering opportunities, product-focused roles and interesting technical collaborations.</p>
        <div class="contact-lines">
            <a href="mailto:{{ $contact['email'] }}">
                {{ $contact['email'] }}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </a>
            <a href="tel:{{ str_replace(' ', '', $contact['phone']) }}">
                {{ $contact['phone'] }}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </a>
            <span>{{ $contact['location'] }}</span>
        </div>
    </section>
</x-layouts.portfolio>
