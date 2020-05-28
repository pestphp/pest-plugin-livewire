<?php

use Pest\Livewire\Tests\TestCase;
use Pest\Livewire\Tests\TestComponent;

uses(TestCase::class);

it('adds the trait globally', function () {
    assertTrue(method_exists($this, 'livewire'));
});

it('can test a livewire component')
    ->livewire(TestComponent::class)
    ->set('title', 'foo')
    ->assertSet('title', 'foo');
