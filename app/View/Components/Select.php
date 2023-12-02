<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $icon;
    public $label;

    public function __construct($name, $icon, $label)
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->label = $label;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
