<?php

declare(strict_types=1);

use Pest\Expectation;
use Pest\Inline\Exceptions\InlineException;
use Pest\Inline\FakePendingCalls\FakeAfterEachCall;
use Pest\Inline\FakePendingCalls\FakeBeforeEachCall;
use Pest\Inline\FakePendingCalls\FakeTestCall;
use Pest\Inline\FakePendingCalls\FakeUsesCall;
use Pest\PendingCalls\AfterEachCall;
use Pest\PendingCalls\BeforeEachCall;
use Pest\PendingCalls\TestCall;
use Pest\PendingCalls\UsesCall;
use PHPUnit\Framework\TestCase;

if (! array_key_exists('__PEST__', $_SERVER)) {
    if (! function_exists('expect')) {
        /**
         * Creates a new expectation.
         *
         * @template TValue
         *
         * @param  TValue|null  $value
         * @return Expectation<TValue|null>
         */
        function expect(mixed $value = null)
        {
            throw new InlineException(
                'The function `expect` is not available at root level when writing inline tests. Please use within the `Pest.php` file.',
            );
        }
    }

    if (! function_exists('beforeAll')) {
        /**
         * Runs the given closure before all tests in the current file.
         */
        function beforeAll(Closure $closure): void
        {
            // ...
        }
    }

    if (! function_exists('beforeEach')) {
        /**
         * Runs the given closure before each test in the current file.
         *
         * @return BeforeEachCall|TestCase|mixed
         */
        function beforeEach(Closure $closure = null)
        {
            return FakeBeforeEachCall::getInstance();
        }
    }

    if (! function_exists('dataset')) {
        /**
         * Registers the given dataset.
         *
         * @param  Closure|iterable<int|string, mixed>  $dataset
         */
        function dataset(string $name, Closure|iterable $dataset): void
        {
            // ...
        }
    }

    if (! function_exists('uses')) {
        /**
         * The uses function binds the given
         * arguments to test closures.
         *
         * @param  class-string  ...$classAndTraits
         * @return UsesCall
         */
        function uses(string ...$classAndTraits)
        {
            return FakeUsesCall::getInstance(); // @phstan-ignore-line
        }
    }

    if (! function_exists('test')) {
        /**
         * Adds the given closure as a test. The first argument
         * is the test description; the second argument is
         * a closure that contains the test expectations.
         *
         * @return TestCall|TestCase|mixed
         */
        function test(string $description = null, Closure $closure = null)
        {
            return FakeTestCall::getInstance();
        }
    }

    if (! function_exists('it')) {
        /**
         * Adds the given closure as a test. The first argument
         * is the test description; the second argument is
         * a closure that contains the test expectations.
         *
         * @return TestCall|TestCase|mixed
         */
        function it(string $description, Closure $closure = null)
        {
            return FakeTestCall::getInstance();
        }
    }

    if (! function_exists('todo')) {
        /**
         * Adds the given todo test. Internally, this test
         * is marked as incomplete. Yet, Collision, Pest's
         * printer, will display it as a "todo" test.
         *
         * @return TestCall|TestCase|mixed
         */
        function todo(string $description)
        {
            return FakeTestCall::getInstance();
        }
    }

    if (! function_exists('afterEach')) {
        /**
         * Runs the given closure after each test in the current file.
         *
         * @return AfterEachCall|TestCase|mixed
         */
        function afterEach(Closure $closure = null)
        {
            return FakeAfterEachCall::getInstance();
        }
    }

    if (! function_exists('afterAll')) {
        /**
         * Runs the given closure after all tests in the current file.
         */
        function afterAll(Closure $closure): void
        {
            // ...
        }
    }
}
