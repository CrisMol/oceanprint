<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextContainerMain extends Component
{
    public $smallText;
    public $bigText;

    public function __construct(
        $smallText = 'DESCUBRE', 
        $bigText = 'Destacados', 
    ) {
        $this->smallText = $smallText;
        $this->bigText = $bigText;
    }

    public function render()
    {
        return view('components.text-container-main');
    }
}
