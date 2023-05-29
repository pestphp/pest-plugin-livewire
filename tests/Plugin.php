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

it('can test a livewire component with query parameters')
    ->livewire(TestComponent::class, [], ['search' => 'text'])
    ->assertSet('search', 'text');

livewire(TestComponent::class)->assertSet('title', null);

livewire(TestComponent::class)->assertSet('search', null);
