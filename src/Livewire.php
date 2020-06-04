<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Livewire\Testing\TestableLivewire;

function livewire(string $name, array $params = []): TestableLivewire
{
    return test()->livewire(...func_get_args());
}
