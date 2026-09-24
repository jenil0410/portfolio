<?php

namespace App\Livewire\Portfolio;

use App\Data\Portfolio\PortfolioData;
use Livewire\Component;

class ProjectPanel extends Component
{
    public array $project;
    public string $activeView = '';

    public function mount(array $project)
    {
        $this->project = $project;
        $views = PortfolioData::getPreviewViews($project);
        $this->activeView = $views[0] ?? '';
    }

    public function setActiveView(string $view): void
    {
        $this->activeView = $view;
    }

    public function render()
    {
        $views = PortfolioData::getPreviewViews($this->project);

        return view('livewire.portfolio.project-panel', [
            'views' => $views,
        ]);
    }
}
