<article class="case-study case-{{ $project['slug'] }}">
    <header>
        <div class="case-study-nav">
            <a href="{{ route('portfolio.work') }}" class="back-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                All work
            </a>
            @if(!empty($project['url']))
                <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary case-live-link" aria-label="Visit {{ $project['name'] }} live product">
                    Live product
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        <polyline points="15 3 21 3 21 9"></polyline>
                        <line x1="10" y1="14" x2="21" y2="3"></line>
                    </svg>
                </a>
            @endif
        </div>
        <p class="eyebrow">{{ $project['category'] }} / CASE {{ $project['number'] }}</p>
        <h1>{{ $project['name'] }}</h1>
        <p class="lede">{{ $project['summary'] }}</p>
    </header>

    <div class="case-visual">
        <span>ENGINEERING CASE / {{ $project['number'] }}</span>
        <strong>{{ $project['name'] }}</strong>
        <div></div>
        <i></i>
        <i></i>
        <i></i>
    </div>

    <!-- 01 Overview -->
    <section class="case-narrative">
        <span>01</span>
        <div>
            <p class="eyebrow">Overview</p>
            <h2>{{ $project['summary'] }}</h2>
            @if(!empty($project['note']))
                <p>{{ $project['note'] }}</p>
            @endif
            @if(!empty($project['url']))
                <p class="case-url-row">
                    <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="case-url-link">
                        <span>Live product: {{ $project['url'] }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                </p>
            @endif
        </div>
    </section>

    <!-- 02 Problem / Intent -->
    <section class="case-narrative">
        <span>02</span>
        <div>
            <p class="eyebrow">Problem / Intent</p>
            <h2>{{ $project['intent'] }}</h2>
        </div>
    </section>

    <!-- 03 System / Architecture -->
    @if(!empty($project['architecture']))
        <section class="case-system dark-band">
            <div class="case-section-heading">
                <span>03</span>
                <div>
                    <p class="eyebrow">System / Architecture</p>
                    <h2>{{ $project['architecture'] }}</h2>
                </div>
            </div>
            <x-portfolio.workflow-diagram :project="$project" :active-flow-index="$activeFlowIndex" />
        </section>
    @endif

    <!-- 04 Key Workflows -->
    <section class="case-workflows">
        <div class="case-section-heading">
            <span>04</span>
            <div>
                <p class="eyebrow">Key Workflows</p>
                <h2>Connected operations, represented as system flows.</h2>
            </div>
        </div>
        <ul>
            @foreach($project['capabilities'] as $i => $item)
                <li>
                    <span>{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </section>

    <!-- 05 Implementation -->
    <section class="case-narrative">
        <span>05</span>
        <div>
            <p class="eyebrow">Implementation</p>
            <h2>{{ $project['implementation'] }}</h2>
            <p>{{ implode(' · ', $project['technologies']) }}</p>
        </div>
    </section>

    <!-- 06 Technical Decisions -->
    @if(!empty($project['decisions']))
        <section class="case-decisions">
            <div class="case-section-heading">
                <span>06</span>
                <div>
                    <p class="eyebrow">Technical Decisions</p>
                    <h2>Product boundaries shaped around the operating model.</h2>
                </div>
            </div>
            <ol>
                @foreach($project['decisions'] as $index => $decision)
                    <li>
                        <span>0{{ $index + 1 }}</span>
                        {{ $decision }}
                    </li>
                @endforeach
            </ol>
        </section>
    @endif

    <!-- 07 Interface / Product -->
    <section class="case-interface">
        <div class="case-section-heading">
            <span>07</span>
            <div>
                <p class="eyebrow">Interface / Product</p>
                <h2>The software, made visible.</h2>
            </div>
        </div>
        <x-portfolio.interface-concept :project="$project" />
    </section>

    <!-- 08 Current Status / Learning -->
    <section class="case-narrative case-status">
        <span>08</span>
        <div>
            <p class="eyebrow">Current Status / Learning</p>
            <h2>{{ $project['status'] }}</h2>
        </div>
    </section>

    <footer class="case-footer">
        <p>{{ implode(' · ', $project['technologies']) }}</p>
        <div class="case-footer-actions">
            @if(!empty($project['url']))
                <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="case-live-link-footer" aria-label="Visit {{ $project['name'] }} live product">
                    Live product
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        <polyline points="15 3 21 3 21 9"></polyline>
                        <line x1="10" y1="14" x2="21" y2="3"></line>
                    </svg>
                </a>
            @endif
            <a href="{{ route('portfolio.contact') }}">
                Discuss a project
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </a>
        </div>
    </footer>
</article>
