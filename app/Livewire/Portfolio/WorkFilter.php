<?php

namespace App\Livewire\Portfolio;

use App\Data\Portfolio\PortfolioData;
use Livewire\Component;

class WorkFilter extends Component
{
    public string $selectedCategory = 'all';
    public string $search = '';

    public function setCategory(string $category): void
    {
        $this->selectedCategory = $category;
    }

    public function render()
    {
        $projects = PortfolioData::getProjects();

        if ($this->selectedCategory !== 'all') {
            $projects = array_filter($projects, fn ($p) => strtolower($p['category']) === strtolower($this->selectedCategory) || str_contains(strtolower($p['category']), strtolower($this->selectedCategory)));
        }

        if (!empty(trim($this->search))) {
            $query = strtolower(trim($this->search));
            $projects = array_filter($projects, function ($p) use ($query) {
                return str_contains(strtolower($p['name']), $query)
                    || str_contains(strtolower($p['summary']), $query)
                    || in_array($query, array_map('strtolower', $p['technologies']))
                    || in_array($query, array_map('strtolower', $p['capabilities']));
            });
        }

        $categories = [
            'all' => 'All Work',
            'enterprise' => 'Professional / Enterprise',
            'saas' => 'Independent SaaS',
            'business' => 'Business Application',
        ];

        return view('livewire.portfolio.work-filter', [
            'projects' => $projects,
            'categories' => $categories,
        ]);
    }
}
