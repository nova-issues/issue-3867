<?php

namespace App\Http\Livewire;

use InvalidArgumentException;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        if ($this->count >= 5) {
            throw new InvalidArgumentException('Cannot be above 5');
        }
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
