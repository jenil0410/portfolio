@props([
    'index' => '01',
    'eyebrow' => '',
    'title' => '',
    'copy' => '',
])

<section class="page-intro">
    <div class="coordinate">{{ $index }} / SYSTEM INDEX</div>
    @if($eyebrow)
        <p class="eyebrow">{{ $eyebrow }}</p>
    @endif
    <h1>{{ $title }}</h1>
    <p class="lede">{{ $copy }}</p>
</section>
