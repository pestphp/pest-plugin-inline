<?php

use Pest\Inline\FakePendingCalls\FakeAfterEachCall;
use Pest\Inline\FakePendingCalls\FakeBeforeEachCall;

it('is a singleton', function () {
    $a = FakeBeforeEachCall::getInstance();
    $b = FakeBeforeEachCall::getInstance();

    expect($a)->toBe($b);
});

it('ignores calls', function () {
    $instance = FakeAfterEachCall::getInstance()->foo()->bar();

    expect($instance)->toBeInstanceOf(FakeAfterEachCall::class);
});
