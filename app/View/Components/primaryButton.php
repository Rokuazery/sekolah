<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrimaryButton extends Component
{
    public $isDisabled;
    public $type;
    public $content;


    public function __construct($type = "submit", $content = "Button", $isDisabled = false)
    {
        $this->type = $type;
        $this->content = $content;
        $this->isDisabled = $isDisabled;
    }

    public function render(): View|Closure|string
    {
        return view('components.primary-button');
    }
}
