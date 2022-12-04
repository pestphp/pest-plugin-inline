<?php

declare(strict_types=1);

namespace Pest\Inline\FakePendingCalls;

use Pest\PendingCalls\AfterEachCall;

/**
 * @internal
 *
 * @mixin AfterEachCall
 */
final class FakeAfterEachCall
{
    use Concerns\IgnoresCalls, Concerns\Singletonable;
}
