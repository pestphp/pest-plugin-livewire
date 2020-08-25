<?php

use function Pest\Livewire\livewire;
use Tests\TestCase;
use Tests\TestComponent;

uses(TestCase::class);

it('adds the trait globally', function () {
    $this->assertTrue(method_exists($this, 'livewire'));
});

it('can test a livewire component')
    ->livewire(TestComponent::class)
    ->set('title', 'foo')
    ->assertSet('title', 'foo');

it('can test a livewire component with parameters')
    ->livewire(TestComponent::class, ['title' => 'bar'])
    ->assertSet('title', 'bar');

livewire(TestComponent::class)->assertSet('title', null);
