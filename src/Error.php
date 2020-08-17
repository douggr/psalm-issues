<?php declare(strict_types=1);

namespace DL2\PsalmIssue;

/**
 * @psalm-import-type TFoo from Application
 *
 * @psalm-type TError = array{
 *      foo: TFoo
 * }
 */
class Error
{
    /**
     * @var array
     * @psalm-var ?TError
     */
    public $error;
}
