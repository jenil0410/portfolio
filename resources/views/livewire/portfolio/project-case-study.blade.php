<article class="case-study case-{{ $project['slug'] }}">
    <header>
        <a href="{{ route('portfolio.work') }}" class="back-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            All work
        </a>
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
        <a href="{{ route('portfolio.contact') }}">
            Discuss a project
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
        </a>
    </footer>
</article>
