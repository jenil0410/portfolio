<?php

namespace App\Livewire\Portfolio;

use App\Data\Portfolio\PortfolioData;
use Livewire\Component;

class ProjectCaseStudy extends Component
{
    public array $project;
    public ?int $activeFlowIndex = null;
    public ?string $activeConcept = null;

    public function mount(array $project)
    {
        $this->project = $project;
        $this->activeConcept = $project['interfaceViews'][0] ?? null;
    }

    public function selectFlow(?int $index): void
    {
        $this->activeFlowIndex = ($this->activeFlowIndex === $index) ? null : $index;
    }

    public function selectConcept(string $view): void
    {
        $this->activeConcept = $view;
    }

    public function render()
    {
        return view('livewire.portfolio.project-case-study');
    }
}
