@props([
    'project',
])

<div class="interface-concepts concepts-{{ $project['slug'] }}">
    <header>
        <span>PRODUCT INTERFACE CONCEPTS</span>
        <p>Conceptual representations—not production screenshots or live product data.</p>
    </header>
    <div class="concept-grid">
        @foreach($project['interfaceViews'] as $index => $view)
            <article>
                <div class="concept-toolbar">
                    <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <i></i>
                    <i></i>
                </div>
                <h3>{{ $view }}</h3>
                <div class="concept-content">
                    @foreach([0, 1, 2] as $row)
                        <div>
                            <span></span>
                            <b></b>
                            <i></i>
                        </div>
                    @endforeach
                </div>
            </article>
        @endforeach
    </div>
</div>
