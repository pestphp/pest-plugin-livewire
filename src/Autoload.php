<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Livewire\Testing\TestableLivewire;
use Pest\Expectation;
use Pest\Plugin;

Plugin::uses(InteractsWithLivewire::class);

/**
 * @return TestableLivewire
 */
function livewire(string $name, array $params = [])
{
    return test()->livewire(...func_get_args());
}

expect()->extend('livewire', function (array $params = []): Expectation {
    // @phpstan-ignore-next-line
    $this->value = livewire($this->value, $params);
    // @phpstan-ignore-next-line
    return $this;
});
