<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Livewire\Features\SupportTesting\Testable;
use Livewire\Livewire;
use Livewire\Testing\TestableLivewire;

if (class_exists(Testable::class)) {
    trait InteractsWithLivewire
    {
        /** @param  array<string, mixed>  $params */
        public function livewire(string $name, array $params = []): Testable
        {
            return Livewire::test($name, $params);
        }
    }
} else {
    trait InteractsWithLivewire
    {
        /** @param  array<string, mixed>  $params */
        public function livewire(string $name, array $params = []): TestableLivewire
        {
            return Livewire::test($name, $params);
        }
    }
}
