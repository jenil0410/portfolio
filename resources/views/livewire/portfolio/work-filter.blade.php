<div>
    <div class="mb-12 flex flex-wrap items-center justify-between gap-4 border-b border-border pb-6">
        <div class="flex flex-wrap gap-2">
            @foreach($categories as $key => $label)
                <button
                    type="button"
                    wire:click="setCategory('{{ $key }}')"
                    class="btn {{ $selectedCategory === $key ? 'btn-primary' : 'btn-secondary' }} text-xs uppercase tracking-wider py-1.5 px-3"
                >
                    {{ $label }}
                </button>
            @endforeach
        </div>

        <div class="relative min-w-[240px]">
            <input
                type="text"
                wire:model.live.debounce.250ms="search"
                placeholder="Filter by keyword or stack..."
                class="w-full bg-card border border-border px-3 py-1.5 text-xs text-foreground placeholder:text-muted-foreground focus:outline-none focus:border-primary"
            />
            @if(!empty($search))
                <button
                    type="button"
                    wire:click="$set('search', '')"
                    class="absolute right-2 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground text-xs"
                >
                    &times;
                </button>
            @endif
        </div>
    </div>

    @if(count($projects) > 0)
        <div class="projects-list">
            @foreach($projects as $project)
                <x-portfolio.project-panel :project="$project" />
            @endforeach
        </div>
    @else
        <div class="py-16 text-center border border-dashed border-border p-8">
            <p class="text-muted-foreground text-sm">No systems match your filter criteria.</p>
            <button
                type="button"
                wire:click="setCategory('all'); $set('search', '')"
                class="btn btn-secondary mt-4 text-xs"
            >
                Reset filters
            </button>
        </div>
    @endif
</div>
