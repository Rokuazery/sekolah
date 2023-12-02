<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $icon;
    public $title;
    // public $content;
    public function __construct($icon, $title)
    {
        $this->icon = $icon;
        $this->title = $title;
        // $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
