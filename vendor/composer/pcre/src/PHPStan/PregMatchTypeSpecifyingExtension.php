<?php

declare (strict_types=1);
namespace RH\AdminUtils\Scoped\Composer\Pcre\PHPStan;

use RH\AdminUtils\Scoped\Composer\Pcre\Preg;
use RH\AdminUtils\Scoped\PhpParser\Node\Expr\StaticCall;
use RH\AdminUtils\Scoped\PHPStan\Analyser\Scope;
use RH\AdminUtils\Scoped\PHPStan\Analyser\SpecifiedTypes;
use RH\AdminUtils\Scoped\PHPStan\Analyser\TypeSpecifier;
use RH\AdminUtils\Scoped\PHPStan\Analyser\TypeSpecifierAwareExtension;
use RH\AdminUtils\Scoped\PHPStan\Analyser\TypeSpecifierContext;
use RH\AdminUtils\Scoped\PHPStan\Reflection\MethodReflection;
use RH\AdminUtils\Scoped\PHPStan\TrinaryLogic;
use RH\AdminUtils\Scoped\PHPStan\Type\Constant\ConstantArrayType;
use RH\AdminUtils\Scoped\PHPStan\Type\Php\RegexArrayShapeMatcher;
use RH\AdminUtils\Scoped\PHPStan\Type\StaticMethodTypeSpecifyingExtension;
use RH\AdminUtils\Scoped\PHPStan\Type\TypeCombinator;
use RH\AdminUtils\Scoped\PHPStan\Type\Type;
final class PregMatchTypeSpecifyingExtension implements StaticMethodTypeSpecifyingExtension, TypeSpecifierAwareExtension
{
    /**
     * @var TypeSpecifier
     */
    private $typeSpecifier;
    /**
     * @var RegexArrayShapeMatcher
     */
    private $regexShapeMatcher;
    public function __construct(RegexArrayShapeMatcher $regexShapeMatcher)
    {
        $this->regexShapeMatcher = $regexShapeMatcher;
    }
    public function setTypeSpecifier(TypeSpecifier $typeSpecifier): void
    {
        $this->typeSpecifier = $typeSpecifier;
    }
    public function getClass(): string
    {
        return Preg::class;
    }
    public function isStaticMethodSupported(MethodReflection $methodReflection, StaticCall $node, TypeSpecifierContext $context): bool
    {
        return in_array($methodReflection->getName(), ['match', 'isMatch', 'matchStrictGroups', 'isMatchStrictGroups', 'matchAll', 'isMatchAll', 'matchAllStrictGroups', 'isMatchAllStrictGroups'], \true) && !$context->null();
    }
    public function specifyTypes(MethodReflection $methodReflection, StaticCall $node, Scope $scope, TypeSpecifierContext $context): SpecifiedTypes
    {
        $args = $node->getArgs();
        $patternArg = $args[0] ?? null;
        $matchesArg = $args[2] ?? null;
        $flagsArg = $args[3] ?? null;
        if ($patternArg === null || $matchesArg === null) {
            return new SpecifiedTypes();
        }
        $flagsType = PregMatchFlags::getType($flagsArg, $scope);
        if ($flagsType === null) {
            return new SpecifiedTypes();
        }
        if (stripos($methodReflection->getName(), 'matchAll') !== \false) {
            $matchedType = $this->regexShapeMatcher->matchAllExpr($patternArg->value, $flagsType, TrinaryLogic::createFromBoolean($context->true()), $scope);
        } else {
            $matchedType = $this->regexShapeMatcher->matchExpr($patternArg->value, $flagsType, TrinaryLogic::createFromBoolean($context->true()), $scope);
        }
        if ($matchedType === null) {
            return new SpecifiedTypes();
        }
        if (in_array($methodReflection->getName(), ['matchStrictGroups', 'isMatchStrictGroups', 'matchAllStrictGroups', 'isMatchAllStrictGroups'], \true)) {
            $matchedType = PregMatchFlags::removeNullFromMatches($matchedType);
        }
        $overwrite = \false;
        if ($context->false()) {
            $overwrite = \true;
            $context = $context->negate();
        }
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists('RH\AdminUtils\Scoped\PHPStan\Analyser\SpecifiedTypes', 'setRootExpr')) {
            $typeSpecifier = $this->typeSpecifier->create($matchesArg->value, $matchedType, $context, $scope)->setRootExpr($node);
            return $overwrite ? $typeSpecifier->setAlwaysOverwriteTypes() : $typeSpecifier;
        }
        // @phpstan-ignore arguments.count
        return $this->typeSpecifier->create(
            $matchesArg->value,
            $matchedType,
            $context,
            // @phpstan-ignore argument.type
            $overwrite,
            $scope,
            $node
        );
    }
}
