<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $cherche  = '';
    
    public function render()
    {
        return view('livewire.test');

    }
}
