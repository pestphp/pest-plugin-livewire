<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Livewire\Features\SupportTesting\Testable;
use Pest\Plugin;

Plugin::uses(InteractsWithLivewire::class);

/**
 * @return Testable
 */
function livewire(string $name, array $params = [])
{
    // @phpstan-ignore-next-line
    return test()->livewire(...func_get_args());
}
