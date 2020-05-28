<?php

it('has global function', function () {
    assertTrue(function_exists('livewire'));
});

it('has plugin trait method', function () {
    assertTrue(method_exists($this, 'livewire'));
});
