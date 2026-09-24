<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;

class Navigation extends Component
{
    public bool $isOpen = false;
    public string $currentRoute = '';

    public function mount(string $currentRoute = '')
    {
        $this->currentRoute = $currentRoute ?: request()->path();
    }

    public function toggleMenu(): void
    {
        $this->isOpen = !$this->isOpen;
    }

    public function closeMenu(): void
    {
        $this->isOpen = false;
    }

    public function render()
    {
        $navItems = [
            ['label' => 'Work', 'url' => route('portfolio.work'), 'path' => 'work*'],
            ['label' => 'Experience', 'url' => route('portfolio.experience'), 'path' => 'experience*'],
            ['label' => 'Products', 'url' => route('portfolio.products'), 'path' => 'products*'],
            ['label' => 'About', 'url' => route('portfolio.about'), 'path' => 'about*'],
            ['label' => 'Contact', 'url' => route('portfolio.contact'), 'path' => 'contact*'],
        ];

        return view('livewire.portfolio.navigation', [
            'navItems' => $navItems,
        ]);
    }
}
