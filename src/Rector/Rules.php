<?php

namespace BristolSU\CodeStyle\Rector;

use Rector\CodeQuality\Rector\Ternary\ArrayKeyExistsTernaryThenValueToCoalescingRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator;
use Rector\CodeQuality\Rector\Assign\CombinedAssignRector;
use Rector\CodeQuality\Rector\ClassMethod\DateTimeToDateTimeInterfaceRector;
use Rector\CodeQuality\Rector\FuncCall\IntvalToTypeCastRector;
use Rector\CodeQuality\Rector\Identical\GetClassToInstanceOfRector;
use Rector\CodeQuality\Rector\If_\ConsecutiveNullCompareReturnsToNullCoalesceQueueRector;
use Rector\CodeQuality\Rector\Name\FixClassCaseSensitivityNameRector;
use Rector\CodeQuality\Rector\New_\NewStaticToNewSelfRector;
use Rector\CodeQuality\Rector\Return_\SimplifyUselessVariableRector;
use Rector\CodingStyle\Rector\ClassConst\SplitGroupedConstantsAndPropertiesRector;
use Rector\CodingStyle\Rector\ClassConst\VarConstantCommentRector;
use Rector\CodingStyle\Rector\ClassMethod\MakeInheritedMethodVisibilitySameAsParentRector;
use Rector\CodingStyle\Rector\Encapsed\WrapEncapsedVariableInCurlyBracesRector;
use Rector\CodingStyle\Rector\Throw_\AnnotateThrowablesRector;
use Rector\CodingStyle\Rector\Use_\SplitGroupedUseImportsRector;
use Rector\DeadCode\Rector\ClassMethod\RemoveDeadConstructorRector;
use Rector\DeadCode\Rector\Foreach_\RemoveUnusedForeachKeyRector;
use Rector\DeadCode\Rector\FunctionLike\RemoveDeadReturnRector;
use Rector\Naming\Rector\Property\UnderscoreToCamelCasePropertyNameRector;
use Rector\Naming\Rector\Variable\UnderscoreToCamelCaseLocalVariableNameRector;
use Rector\Naming\Rector\Variable\UnderscoreToCamelCaseVariableNameRector;
use Rector\PHPUnit\Rector\Class_\AddProphecyTraitRector;
use Rector\PSR4\Rector\Namespace_\MultipleClassFileToPsr4ClassesRector;

class Rules
{
    public function setRules(ServicesConfigurator $services)
    {
        $services->set(ArrayKeyExistsTernaryThenValueToCoalescingRector::class);
        $services->set(CombinedAssignRector::class);
        $services->set(ConsecutiveNullCompareReturnsToNullCoalesceQueueRector::class);
        $services->set(DateTimeToDateTimeInterfaceRector::class);
        $services->set(FixClassCaseSensitivityNameRector::class);
        $services->set(GetClassToInstanceOfRector::class);
        $services->set(IntvalToTypeCastRector::class);
        $services->set(NewStaticToNewSelfRector::class);
        $services->set(AnnotateThrowablesRector::class);
        $services->set(MakeInheritedMethodVisibilitySameAsParentRector::class);
        $services->set(SplitGroupedConstantsAndPropertiesRector::class);
        $services->set(SplitGroupedUseImportsRector::class);
        $services->set(SimplifyUselessVariableRector::class);
        $services->set(VarConstantCommentRector::class);
        $services->set(WrapEncapsedVariableInCurlyBracesRector::class);
        $services->set(RemoveDeadConstructorRector::class);
        $services->set(RemoveDeadReturnRector::class);
        $services->set(RemoveUnusedForeachKeyRector::class);
        $services->set(UnderscoreToCamelCaseLocalVariableNameRector::class);
        $services->set(UnderscoreToCamelCasePropertyNameRector::class);
        $services->set(UnderscoreToCamelCaseVariableNameRector::class);
        $services->set(MultipleClassFileToPsr4ClassesRector::class);
        $services->set(AddProphecyTraitRector::class);
        $services->set(AnnotateThrowablesRector::class);
    }
}
