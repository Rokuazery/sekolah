<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertMessage extends Component
{
    public $message;
    public $type;

    // simple, success, danger, warning
    public function __construct($message, $type = 'simple')
    {
        $this->message = $message;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-message');
    }
}
