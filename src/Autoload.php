<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Livewire\Testing\TestableLivewire;
use Pest\Plugin;

Plugin::uses(InteractsWithLivewire::class);

/**
 * @return TestableLivewire
 */
function livewire(string $name, array $params = [])
{
    return test()->livewire(...func_get_args());
}

/**
 * @return TestableLivewire
 */
function livewireWithQuery(string $name, array $params = [], array $query = [])
{
    return test()->livewireWithQuery(...func_get_args());
}
