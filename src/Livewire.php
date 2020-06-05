<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Livewire\Testing\TestableLivewire;

/**
 * @return TestableLivewire
 */
function livewire(string $name, array $params = [])
{
    return test()->livewire(...func_get_args());
}
