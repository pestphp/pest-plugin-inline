<?php

declare(strict_types=1);

namespace Pest\Inline\FakePendingCalls\Concerns;

/**
 * @internal
 */
trait Singletonable
{
    /**
     * The singleton instance.
     */
    private static self|null $instance = null;

    /**
     * Get the singleton instance.
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
