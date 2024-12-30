<?php

declare (strict_types=1);
namespace RH\AdminUtils\Scoped\Snicco\Component\BetterWPCLI\Exception;

use RuntimeException;
/**
 * Throw this exception if the user provided invalid input from the command
 * line.
 */
final class InvalidAnswer extends RuntimeException
{
}
