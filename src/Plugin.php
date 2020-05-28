<?php

declare(strict_types=1);

use Livewire\Testing\TestableLivewire;
use Pest\Livewire\InteractsWithLivewire;

Pest\Plugin::uses(InteractsWithLivewire::class);

if (!function_exists('livewire')) {
    /** @param array<string, mixed> $params */
    function livewire(string $name, $params = []): TestableLivewire
    {
        return test()->livewire($name, $params);
    }
}
