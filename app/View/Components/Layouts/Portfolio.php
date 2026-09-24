<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;
use Illuminate\View\View;

class Portfolio extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $description = null,
        public string $ogType = 'website',
    ) {}

    public function render(): View
    {
        return view('layouts.portfolio');
    }
}
