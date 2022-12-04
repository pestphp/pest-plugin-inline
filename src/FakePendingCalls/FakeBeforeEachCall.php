<?php

declare(strict_types=1);

namespace Pest\Inline\FakePendingCalls;

use Pest\PendingCalls\BeforeEachCall;

/**
 * @internal
 *
 * @mixin BeforeEachCall
 */
final class FakeBeforeEachCall
{
    use Concerns\IgnoresCalls, Concerns\Singletonable;
}
