<?php

declare(strict_types=1);

namespace Pest\Inline\Exceptions;

use RuntimeException;
use Symfony\Component\Console\Exception\ExceptionInterface;

/**
 * @internal
 */
final class InlineException extends RuntimeException implements ExceptionInterface
{
    // ...
}
