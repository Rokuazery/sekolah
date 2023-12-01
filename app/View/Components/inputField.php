<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class inputField extends Component
{
    public $icon;
    public $name;
    public $type;
    public $placeholder;

    public function __construct($icon, $name, $type, $placeholder)
    {
        $this->icon = $icon;
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
