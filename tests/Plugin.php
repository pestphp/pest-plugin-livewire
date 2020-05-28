<?php

it('adds the trait globally', function () {
    assertTrue(method_exists($this, 'livewire'));
});
