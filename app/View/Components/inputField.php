<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $icon;
    public $name;
    public $type;
    public $placeholder;
    public $autocomplete;
    public $autofocus;
    public $errorType;
    public $value;

    public function __construct($icon, $name, $type, $placeholder, $autocomplete = "on", $autofocus = "false", $errorType = "none", $value = "")
    {
        $this->icon = $icon;
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->autocomplete = $autocomplete;
        $this->autofocus = $autofocus;
        $this->errorType = $errorType;
        $this->value = $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
