<x-layouts.portfolio
    title="Independent Products — Jenil Desai"
    description="Independent SaaS and marketplace products by Jenil Desai."
>
    <x-portfolio.system-index
        index="03"
        eyebrow="Independent products"
        title="Learning by building the whole system."
        copy="Products where architecture, tenancy, workflows, commerce and interface decisions are considered together."
    />

    <section class="work-section route-work">
        <div class="projects-list">
            @foreach($products as $project)
                <x-portfolio.project-panel :project="$project" />
            @endforeach
        </div>
    </section>
</x-layouts.portfolio>
