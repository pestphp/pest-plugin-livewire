<?php

namespace Tests;

use Livewire\Component;

class TestComponent extends Component
{
    public $title;

    public $search;

    protected $queryString = ['search'];

    public function mount(string $title = ''): void
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('null-view');
    }
}
