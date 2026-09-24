@props([
    'title' => null,
    'description' => null,
    'ogType' => 'website',
])

<x-layouts.portfolio :title="$title" :description="$description" :og-type="$ogType">
    {{ $slot }}
</x-layouts.portfolio>
