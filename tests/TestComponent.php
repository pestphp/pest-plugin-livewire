<?php

namespace Pest\Livewire\Tests;

use Livewire\Component;

class TestComponent extends Component
{
    public $title;

    public function render()
    {
        return view('null-view');
    }
}
