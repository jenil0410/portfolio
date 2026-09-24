<x-layouts.portfolio
    :title="$project['name'] . ' — Jenil Desai'"
    :description="$project['summary']"
    og-type="article"
>
    <livewire:portfolio.project-case-study :project="$project" />
</x-layouts.portfolio>
