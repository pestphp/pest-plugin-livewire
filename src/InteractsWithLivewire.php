<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Livewire\Livewire;
use Livewire\Testing\TestableLivewire;

trait InteractsWithLivewire
{
    /** @param array<string, mixed> $params */
    public function livewire(string $name, array $params = []): TestableLivewire
    {
        return Livewire::test($name, $params);
    }

    /**
     * @param array<string, mixed> $params
     * @param array<string, mixed> $query
     */
    public function livewireWithQuery(string $name, array $params = [], array $query = []): TestableLivewire
    {
        return Livewire::withQueryParams($query)->test($name, $params);
    }
}
