<?php

declare(strict_types=1);

namespace Pest\Livewire;

use Illuminate\Support\ServiceProvider;
use Illuminate\Testing\TestResponse;
use Laravel\Dusk\Console\DuskCommand;
use Livewire\Features\SupportTesting\Testable;
use Pest\Laravel\Commands\PestDatasetCommand;
use Pest\Laravel\Commands\PestDuskCommand;
use Pest\Laravel\Commands\PestTestCommand;
use Pest\Plugins\Snapshot;

final class PestServiceProvider extends ServiceProvider
{
    /**
     * Register Artisan Commands.
     */
    public function register(): void
    {
        // Livewire v3.x
        if(class_exists(Testable::class)) {
            Snapshot::intercept(Testable::class, function (Testable $component): string {
                return $component->html(stripInitialData: true);
            });
        }

        Snapshot::macro('livewire.wire-key', function (string $value) {
            return preg_replace('/wire:id="[0-9a-zA-Z]*"/', 'wire:id="..."', $value);
        });
    }
}
