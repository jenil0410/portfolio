@props([
    'group',
    'items',
    'index' => 1,
])

<div class="stack-group">
    <span>0{{ $index }}</span>
    <h3>{{ $group }}</h3>
    <ul>
        @foreach($items as $item)
            <li>
                {{ $item }}
                <i></i>
            </li>
        @endforeach
    </ul>
</div>
