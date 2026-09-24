@php
    $nodes = [
        ['label' => 'ERP', 'x' => 14, 'y' => 20],
        ['label' => 'SAAS', 'x' => 68, 'y' => 16],
        ['label' => 'API', 'x' => 45, 'y' => 44],
        ['label' => 'PAYMENTS', 'x' => 76, 'y' => 68],
        ['label' => 'AI', 'x' => 24, 'y' => 76],
        ['label' => 'DATA', 'x' => 51, 'y' => 86],
    ];
@endphp

<div
    class="systems-visual js-systems-visual"
    aria-label="Animated diagram connecting ERP, SaaS, API, payments, AI and data systems"
    role="img"
>
    <div class="visual-meta">
        <span>SYS/JD-26</span>
        <span>LIVE ARCHITECTURE</span>
    </div>

    <svg viewBox="0 0 100 100" aria-hidden="true">
        <path d="M14 20 L45 44 L68 16 M45 44 L76 68 L51 86 L24 76 Z" />
        <path class="signal-path" d="M14 20 L45 44 L76 68 L51 86" />
    </svg>

    @foreach($nodes as $node)
        <div class="system-node" style="left: {{ $node['x'] }}%; top: {{ $node['y'] }}%;">
            <i></i>
            <span>{{ $node['label'] }}</span>
        </div>
    @endforeach

    <div class="visual-coordinate">
        23.0225&deg; N<br />72.5714&deg; E
    </div>
</div>
