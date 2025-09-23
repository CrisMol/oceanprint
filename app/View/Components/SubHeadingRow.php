<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubHeadingRow extends Component
{
    public string $title;
    public string $subtitle;
    public string $companyName;
    public string $description;
    public string $icon;

    public function __construct(
        string $title = 'Principales', 
        string $subtitle = 'Servicios',
        string $companyName = 'OceanPrint',
        string $description = 'Somos una imprenta profesional que cuenta con una amplia gama de servicios de impresión para satisfacer tus necesidades.',
        string $icon = ''
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->companyName = $companyName;
        $this->description = $description;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sub-heading-row');
    }
}
