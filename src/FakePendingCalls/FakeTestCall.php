<?php

declare(strict_types=1);

namespace Pest\Inline\FakePendingCalls;

use Pest\PendingCalls\TestCall;

/**
 * @internal
 *
 * @mixin TestCall
 */
final class FakeTestCall
{
    use Concerns\IgnoresCalls, Concerns\Singletonable;
}
