<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Livewire\Livewire;
use Livewire\Testing\TestableLivewire;

trait InteractsWithLivewire
{
    /** @param  array<string, mixed>  $params */
    public function livewire(string $name, array $params = [], array $queryParams = []): TestableLivewire
    {
        return Livewire::withQueryParams($queryParams)->test($name, $params);
    }
}
