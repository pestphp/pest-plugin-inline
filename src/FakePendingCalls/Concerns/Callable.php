<?php

declare(strict_types=1);

namespace Pest\Inline\FakePendingCalls\Concerns;

/**
 * @internal
 */
trait IgnoresCalls
{
    /**
     * Pretends to be "callable" by ignoring the calls, and returning the instance.
     *
     * @param  array<int, mixed>  $arguments
     * @return $this
     */
    public function __call(string $name, array $arguments): self
    {
        // ...

        return $this;
    }
}
