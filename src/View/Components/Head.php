<?php

namespace Damilaredev\LaravelEmail\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Head extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
            <head {{ $attributes }}>
                <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                {{ $slot }}
            </head>
        blade;
    }
}
