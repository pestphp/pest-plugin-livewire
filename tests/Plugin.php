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

it('can create a new expectation as a livewire component')
    ->expect(TestComponent::class)->livewire()
    ->lastRenderedDom
    ->toBeString()
    ->set('title', 'foo')
    ->assertSet('title', 'foo')
    ->get('status')
    ->toBeTrue()
    ->assertSee('foo')
    ->set('status', false)
    ->assertSet('status', false);

it('can create a new expectation as livewire a component with parameters')
    ->expect(TestComponent::class)->livewire(['title' => 'bar'])
    ->toBeInstanceOf('Livewire\Testing\TestableLivewire')
    ->lastRenderedDom
    ->toBeString()
    ->assertSet('title', 'bar')
    ->set('title', 'foo')
    ->assertSet('title', 'foo')
    ->toBeInstanceOf('Livewire\Testing\TestableLivewire')
    ->get('title')
    ->toBeString();
