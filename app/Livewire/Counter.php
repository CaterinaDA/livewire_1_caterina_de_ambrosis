<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;

    public $value = 5;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function incrementByX($x)
    {
        $this->count += $x;
    }

    public function decrementByX($x)
    {
        $this->count -= $x;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
