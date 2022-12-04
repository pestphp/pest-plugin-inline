<?php

declare(strict_types=1);

namespace Pest\Inline\FakePendingCalls;

use Pest\PendingCalls\UsesCall;

/**
 * @internal
 *
 * @mixin UsesCall
 */
final class FakeUsesCall
{
    use Concerns\IgnoresCalls, Concerns\Singletonable;
}
