<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    private $type;
    private $data;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $data = "")
    {
        $this->type= $type;
        $this->data= $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card',["type"=>$this->type, "data"=>$this->data]);
    }
}
