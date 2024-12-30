<?php

declare (strict_types=1);
namespace RH\AdminUtils\Scoped\Composer\Pcre\PHPStan;

use RH\AdminUtils\Scoped\Composer\Pcre\Preg;
use RH\AdminUtils\Scoped\PhpParser\Node\Expr\StaticCall;
use RH\AdminUtils\Scoped\PHPStan\Analyser\Scope;
use RH\AdminUtils\Scoped\PHPStan\Reflection\MethodReflection;
use RH\AdminUtils\Scoped\PHPStan\Reflection\ParameterReflection;
use RH\AdminUtils\Scoped\PHPStan\TrinaryLogic;
use RH\AdminUtils\Scoped\PHPStan\Type\Php\RegexArrayShapeMatcher;
use RH\AdminUtils\Scoped\PHPStan\Type\StaticMethodParameterOutTypeExtension;
use RH\AdminUtils\Scoped\PHPStan\Type\Type;
final class PregMatchParameterOutTypeExtension implements StaticMethodParameterOutTypeExtension
{
    /**
     * @var RegexArrayShapeMatcher
     */
    private $regexShapeMatcher;
    public function __construct(RegexArrayShapeMatcher $regexShapeMatcher)
    {
        $this->regexShapeMatcher = $regexShapeMatcher;
    }
    public function isStaticMethodSupported(MethodReflection $methodReflection, ParameterReflection $parameter): bool
    {
        return $methodReflection->getDeclaringClass()->getName() === Preg::class && in_array($methodReflection->getName(), ['match', 'isMatch', 'matchStrictGroups', 'isMatchStrictGroups', 'matchAll', 'isMatchAll', 'matchAllStrictGroups', 'isMatchAllStrictGroups'], \true) && $parameter->getName() === 'matches';
    }
    public function getParameterOutTypeFromStaticMethodCall(MethodReflection $methodReflection, StaticCall $methodCall, ParameterReflection $parameter, Scope $scope): ?Type
    {
        $args = $methodCall->getArgs();
        $patternArg = $args[0] ?? null;
        $matchesArg = $args[2] ?? null;
        $flagsArg = $args[3] ?? null;
        if ($patternArg === null || $matchesArg === null) {
            return null;
        }
        $flagsType = PregMatchFlags::getType($flagsArg, $scope);
        if ($flagsType === null) {
            return null;
        }
        if (stripos($methodReflection->getName(), 'matchAll') !== \false) {
            return $this->regexShapeMatcher->matchAllExpr($patternArg->value, $flagsType, TrinaryLogic::createMaybe(), $scope);
        }
        return $this->regexShapeMatcher->matchExpr($patternArg->value, $flagsType, TrinaryLogic::createMaybe(), $scope);
    }
}
