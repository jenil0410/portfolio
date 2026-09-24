<x-layouts.portfolio
    title="Experience — Jenil Desai"
    description="Jenil Desai's professional Laravel development experience in enterprise applications."
>
    <x-portfolio.system-index
        index="02"
        eyebrow="Experience"
        title="Engineering for operational reality."
        copy="Professional experience building and supporting Laravel systems where business rules, data and daily workflows meet."
    />

    <x-portfolio.experience-item :experience="$experience" variant="page" />

    <section class="experience-projects">
        <header class="section-heading">
            <div>
                <p class="eyebrow">PROFESSIONAL SYSTEMS</p>
                <h2>Experience in context</h2>
            </div>
            <p>The enterprise projects below show how those responsibilities connect to operational software.</p>
        </header>
        <div class="projects-list">
            @foreach($relatedProjects as $project)
                <x-portfolio.project-panel :project="$project" />
            @endforeach
        </div>
    </section>
</x-layouts.portfolio>
