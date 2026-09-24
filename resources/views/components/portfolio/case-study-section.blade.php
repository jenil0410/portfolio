@props([
    'number',
    'label',
    'title',
    'note' => null,
    'class' => '',
])

<section class="case-narrative {{ $class }}">
    <span>{{ $number }}</span>
    <div>
        <p class="eyebrow">{{ $label }}</p>
        <h2>{{ $title }}</h2>
        @if($note)
            <p>{{ $note }}</p>
        @endif
        {{ $slot }}
    </div>
</section>
