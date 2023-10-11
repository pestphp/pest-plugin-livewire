<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Livewire\Features\SupportTesting\Testable;
use Livewire\Testing\TestableLivewire;
use Pest\Plugin;

Plugin::uses(InteractsWithLivewire::class);

function livewire(string $name, array $params = [])
{
    // @phpstan-ignore-next-line
    return test()->livewire(...func_get_args());
}