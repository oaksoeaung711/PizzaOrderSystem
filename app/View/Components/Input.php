<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $name;
    public $icon;
    public $type;
    public $placeholder;
    public $value;
    public function __construct($label="",$name,$icon,$type,$placeholder="",$value="")
    {
        $this->label = $label;
        $this->name = $name;
        $this->icon = $icon;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->type = $type;
    }

    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}