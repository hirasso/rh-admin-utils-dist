<?php

declare (strict_types=1);
namespace RH\AdminUtils\Scoped\Composer\Pcre\PHPStan;

use RH\AdminUtils\Scoped\PHPStan\Analyser\Scope;
use RH\AdminUtils\Scoped\PHPStan\Type\ArrayType;
use RH\AdminUtils\Scoped\PHPStan\Type\Constant\ConstantArrayType;
use RH\AdminUtils\Scoped\PHPStan\Type\Constant\ConstantIntegerType;
use RH\AdminUtils\Scoped\PHPStan\Type\IntersectionType;
use RH\AdminUtils\Scoped\PHPStan\Type\TypeCombinator;
use RH\AdminUtils\Scoped\PHPStan\Type\Type;
use RH\AdminUtils\Scoped\PhpParser\Node\Arg;
use RH\AdminUtils\Scoped\PHPStan\Type\Php\RegexArrayShapeMatcher;
use RH\AdminUtils\Scoped\PHPStan\Type\TypeTraverser;
use RH\AdminUtils\Scoped\PHPStan\Type\UnionType;
final class PregMatchFlags
{
    public static function getType(?Arg $flagsArg, Scope $scope): ?Type
    {
        if ($flagsArg === null) {
            return new ConstantIntegerType(\PREG_UNMATCHED_AS_NULL);
        }
        $flagsType = $scope->getType($flagsArg->value);
        $constantScalars = $flagsType->getConstantScalarValues();
        if ($constantScalars === []) {
            return null;
        }
        $internalFlagsTypes = [];
        foreach ($flagsType->getConstantScalarValues() as $constantScalarValue) {
            if (!is_int($constantScalarValue)) {
                return null;
            }
            $internalFlagsTypes[] = new ConstantIntegerType($constantScalarValue | \PREG_UNMATCHED_AS_NULL);
        }
        return TypeCombinator::union(...$internalFlagsTypes);
    }
    public static function removeNullFromMatches(Type $matchesType): Type
    {
        return TypeTraverser::map($matchesType, static function (Type $type, callable $traverse): Type {
            if ($type instanceof UnionType || $type instanceof IntersectionType) {
                return $traverse($type);
            }
            if ($type instanceof ConstantArrayType) {
                return new ConstantArrayType($type->getKeyTypes(), array_map(static function (Type $valueType) use ($traverse): Type {
                    return $traverse($valueType);
                }, $type->getValueTypes()), $type->getNextAutoIndexes(), [], $type->isList());
            }
            if ($type instanceof ArrayType) {
                return new ArrayType($type->getKeyType(), $traverse($type->getItemType()));
            }
            return TypeCombinator::removeNull($type);
        });
    }
}
