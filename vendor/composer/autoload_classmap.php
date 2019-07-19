<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'ezcBase' => $vendorDir . '/zetacomponents/base/src/base.php',
    'ezcBaseAutoloadException' => $vendorDir . '/zetacomponents/base/src/exceptions/autoload.php',
    'ezcBaseAutoloadOptions' => $vendorDir . '/zetacomponents/base/src/options/autoload.php',
    'ezcBaseConfigurationInitializer' => $vendorDir . '/zetacomponents/base/src/interfaces/configuration_initializer.php',
    'ezcBaseDoubleClassRepositoryPrefixException' => $vendorDir . '/zetacomponents/base/src/exceptions/double_class_repository_prefix.php',
    'ezcBaseException' => $vendorDir . '/zetacomponents/base/src/exceptions/exception.php',
    'ezcBaseExportable' => $vendorDir . '/zetacomponents/base/src/interfaces/exportable.php',
    'ezcBaseExtensionNotFoundException' => $vendorDir . '/zetacomponents/base/src/exceptions/extension_not_found.php',
    'ezcBaseFeatures' => $vendorDir . '/zetacomponents/base/src/features.php',
    'ezcBaseFile' => $vendorDir . '/zetacomponents/base/src/file.php',
    'ezcBaseFileException' => $vendorDir . '/zetacomponents/base/src/exceptions/file_exception.php',
    'ezcBaseFileFindContext' => $vendorDir . '/zetacomponents/base/src/structs/file_find_context.php',
    'ezcBaseFileIoException' => $vendorDir . '/zetacomponents/base/src/exceptions/file_io.php',
    'ezcBaseFileNotFoundException' => $vendorDir . '/zetacomponents/base/src/exceptions/file_not_found.php',
    'ezcBaseFilePermissionException' => $vendorDir . '/zetacomponents/base/src/exceptions/file_permission.php',
    'ezcBaseFunctionalityNotSupportedException' => $vendorDir . '/zetacomponents/base/src/exceptions/functionality_not_supported.php',
    'ezcBaseInit' => $vendorDir . '/zetacomponents/base/src/init.php',
    'ezcBaseInitCallbackConfiguredException' => $vendorDir . '/zetacomponents/base/src/exceptions/init_callback_configured.php',
    'ezcBaseInitInvalidCallbackClassException' => $vendorDir . '/zetacomponents/base/src/exceptions/invalid_callback_class.php',
    'ezcBaseInvalidParentClassException' => $vendorDir . '/zetacomponents/base/src/exceptions/invalid_parent_class.php',
    'ezcBaseMetaData' => $vendorDir . '/zetacomponents/base/src/metadata.php',
    'ezcBaseMetaDataPearReader' => $vendorDir . '/zetacomponents/base/src/metadata/pear.php',
    'ezcBaseMetaDataTarballReader' => $vendorDir . '/zetacomponents/base/src/metadata/tarball.php',
    'ezcBaseOptions' => $vendorDir . '/zetacomponents/base/src/options.php',
    'ezcBasePersistable' => $vendorDir . '/zetacomponents/base/src/interfaces/persistable.php',
    'ezcBasePropertyNotFoundException' => $vendorDir . '/zetacomponents/base/src/exceptions/property_not_found.php',
    'ezcBasePropertyPermissionException' => $vendorDir . '/zetacomponents/base/src/exceptions/property_permission.php',
    'ezcBaseRepositoryDirectory' => $vendorDir . '/zetacomponents/base/src/structs/repository_directory.php',
    'ezcBaseSettingNotFoundException' => $vendorDir . '/zetacomponents/base/src/exceptions/setting_not_found.php',
    'ezcBaseSettingValueException' => $vendorDir . '/zetacomponents/base/src/exceptions/setting_value.php',
    'ezcBaseStruct' => $vendorDir . '/zetacomponents/base/src/struct.php',
    'ezcBaseValueException' => $vendorDir . '/zetacomponents/base/src/exceptions/value.php',
    'ezcBaseWhateverException' => $vendorDir . '/zetacomponents/base/src/exceptions/whatever.php',
    'ezcDbException' => $vendorDir . '/zetacomponents/database/src/exceptions/exception.php',
    'ezcDbFactory' => $vendorDir . '/zetacomponents/database/src/factory.php',
    'ezcDbHandler' => $vendorDir . '/zetacomponents/database/src/handler.php',
    'ezcDbHandlerMssql' => $vendorDir . '/zetacomponents/database/src/handlers/mssql.php',
    'ezcDbHandlerMysql' => $vendorDir . '/zetacomponents/database/src/handlers/mysql.php',
    'ezcDbHandlerNotFoundException' => $vendorDir . '/zetacomponents/database/src/exceptions/handler_not_found.php',
    'ezcDbHandlerOracle' => $vendorDir . '/zetacomponents/database/src/handlers/oracle.php',
    'ezcDbHandlerPgsql' => $vendorDir . '/zetacomponents/database/src/handlers/pgsql.php',
    'ezcDbHandlerSqlite' => $vendorDir . '/zetacomponents/database/src/handlers/sqlite.php',
    'ezcDbInstance' => $vendorDir . '/zetacomponents/database/src/instance.php',
    'ezcDbMissingParameterException' => $vendorDir . '/zetacomponents/database/src/exceptions/missing_parameter.php',
    'ezcDbMssqlOptions' => $vendorDir . '/zetacomponents/database/src/options/identifiers.php',
    'ezcDbTransactionException' => $vendorDir . '/zetacomponents/database/src/exceptions/transaction.php',
    'ezcDbUtilities' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/utilities.php',
    'ezcDbUtilitiesMysql' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/utilities_mysql.php',
    'ezcDbUtilitiesOracle' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/utilities_oracle.php',
    'ezcDbUtilitiesPgsql' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/utilities_pgsql.php',
    'ezcDbUtilitiesSqlite' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/utilities_sqlite.php',
    'ezcQuery' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/query.php',
    'ezcQueryDelete' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/query_delete.php',
    'ezcQueryException' => $vendorDir . '/zetacomponents/database/src/exceptions/query_exception.php',
    'ezcQueryExpression' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/expression.php',
    'ezcQueryExpressionMssql' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/expression_mssql.php',
    'ezcQueryExpressionOracle' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/expression_oracle.php',
    'ezcQueryExpressionPgsql' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/expression_pgsql.php',
    'ezcQueryExpressionSqlite' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/expression_sqlite.php',
    'ezcQueryInsert' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/query_insert.php',
    'ezcQueryInvalidException' => $vendorDir . '/zetacomponents/database/src/exceptions/query/invalid.php',
    'ezcQueryInvalidParameterException' => $vendorDir . '/zetacomponents/database/src/exceptions/query/invalid_parameter.php',
    'ezcQuerySelect' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/query_select.php',
    'ezcQuerySelectMssql' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/query_select_mssql.php',
    'ezcQuerySelectOracle' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/query_select_oracle.php',
    'ezcQuerySelectSqlite' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/query_select_sqlite.php',
    'ezcQuerySqliteFunctions' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/implementations/query_sqlite_function_implementations.php',
    'ezcQuerySubSelect' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/query_subselect.php',
    'ezcQueryUpdate' => $vendorDir . '/zetacomponents/database/src/sqlabstraction/query_update.php',
    'ezcQueryVariableParameterException' => $vendorDir . '/zetacomponents/database/src/exceptions/query/variable_parameter.php',
    'ezcWorkflow' => $vendorDir . '/zetacomponents/workflow/src/workflow.php',
    'ezcWorkflowCondition' => $vendorDir . '/zetacomponents/workflow/src/interfaces/condition.php',
    'ezcWorkflowConditionAnd' => $vendorDir . '/zetacomponents/workflow/src/conditions/and.php',
    'ezcWorkflowConditionBooleanSet' => $vendorDir . '/zetacomponents/workflow/src/interfaces/condition_boolean_set.php',
    'ezcWorkflowConditionComparison' => $vendorDir . '/zetacomponents/workflow/src/interfaces/condition_comparison.php',
    'ezcWorkflowConditionInArray' => $vendorDir . '/zetacomponents/workflow/src/conditions/in_array.php',
    'ezcWorkflowConditionIsAnything' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_anything.php',
    'ezcWorkflowConditionIsArray' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_array.php',
    'ezcWorkflowConditionIsBool' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_bool.php',
    'ezcWorkflowConditionIsEqual' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_equal.php',
    'ezcWorkflowConditionIsEqualOrGreaterThan' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_equal_or_greater_than.php',
    'ezcWorkflowConditionIsEqualOrLessThan' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_equal_or_less_than.php',
    'ezcWorkflowConditionIsFalse' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_false.php',
    'ezcWorkflowConditionIsFloat' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_float.php',
    'ezcWorkflowConditionIsGreaterThan' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_greater_than.php',
    'ezcWorkflowConditionIsInteger' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_integer.php',
    'ezcWorkflowConditionIsLessThan' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_less_than.php',
    'ezcWorkflowConditionIsNotEqual' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_not_equal.php',
    'ezcWorkflowConditionIsObject' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_object.php',
    'ezcWorkflowConditionIsString' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_string.php',
    'ezcWorkflowConditionIsTrue' => $vendorDir . '/zetacomponents/workflow/src/conditions/is_true.php',
    'ezcWorkflowConditionNot' => $vendorDir . '/zetacomponents/workflow/src/conditions/not.php',
    'ezcWorkflowConditionOr' => $vendorDir . '/zetacomponents/workflow/src/conditions/or.php',
    'ezcWorkflowConditionType' => $vendorDir . '/zetacomponents/workflow/src/interfaces/condition_type.php',
    'ezcWorkflowConditionVariable' => $vendorDir . '/zetacomponents/workflow/src/conditions/variable.php',
    'ezcWorkflowConditionVariables' => $vendorDir . '/zetacomponents/workflow/src/conditions/variables.php',
    'ezcWorkflowConditionXor' => $vendorDir . '/zetacomponents/workflow/src/conditions/xor.php',
    'ezcWorkflowDefinitionStorage' => $vendorDir . '/zetacomponents/workflow/src/interfaces/definition_storage.php',
    'ezcWorkflowDefinitionStorageException' => $vendorDir . '/zetacomponents/workflow/src/exceptions/definition_storage.php',
    'ezcWorkflowDefinitionStorageXml' => $vendorDir . '/zetacomponents/workflow/src/definition_storage/xml.php',
    'ezcWorkflowException' => $vendorDir . '/zetacomponents/workflow/src/exceptions/exception.php',
    'ezcWorkflowExecution' => $vendorDir . '/zetacomponents/workflow/src/interfaces/execution.php',
    'ezcWorkflowExecutionException' => $vendorDir . '/zetacomponents/workflow/src/exceptions/execution.php',
    'ezcWorkflowExecutionListener' => $vendorDir . '/zetacomponents/workflow/src/interfaces/execution_listener.php',
    'ezcWorkflowExecutionListenerPlugin' => $vendorDir . '/zetacomponents/workflow/src/execution/plugin/listener.php',
    'ezcWorkflowExecutionNonInteractive' => $vendorDir . '/zetacomponents/workflow/src/execution/non_interactive.php',
    'ezcWorkflowExecutionPlugin' => $vendorDir . '/zetacomponents/workflow/src/interfaces/execution_plugin.php',
    'ezcWorkflowExecutionVisualizerPlugin' => $vendorDir . '/zetacomponents/workflow/src/execution/plugin/visualizer.php',
    'ezcWorkflowExecutionVisualizerPluginOptions' => $vendorDir . '/zetacomponents/workflow/src/options/execution_plugin_visualizer.php',
    'ezcWorkflowInvalidInputException' => $vendorDir . '/zetacomponents/workflow/src/exceptions/invalid_input.php',
    'ezcWorkflowInvalidWorkflowException' => $vendorDir . '/zetacomponents/workflow/src/exceptions/invalid_workflow.php',
    'ezcWorkflowNode' => $vendorDir . '/zetacomponents/workflow/src/interfaces/node.php',
    'ezcWorkflowNodeAction' => $vendorDir . '/zetacomponents/workflow/src/nodes/action.php',
    'ezcWorkflowNodeArithmeticBase' => $vendorDir . '/zetacomponents/workflow/src/interfaces/node_arithmetic_base.php',
    'ezcWorkflowNodeBranch' => $vendorDir . '/zetacomponents/workflow/src/interfaces/node_branch.php',
    'ezcWorkflowNodeCancel' => $vendorDir . '/zetacomponents/workflow/src/nodes/cancel.php',
    'ezcWorkflowNodeConditionalBranch' => $vendorDir . '/zetacomponents/workflow/src/interfaces/node_conditional_branch.php',
    'ezcWorkflowNodeDiscriminator' => $vendorDir . '/zetacomponents/workflow/src/nodes/control_flow/discriminator.php',
    'ezcWorkflowNodeEnd' => $vendorDir . '/zetacomponents/workflow/src/nodes/end.php',
    'ezcWorkflowNodeExclusiveChoice' => $vendorDir . '/zetacomponents/workflow/src/nodes/control_flow/exclusive_choice.php',
    'ezcWorkflowNodeFinally' => $vendorDir . '/zetacomponents/workflow/src/nodes/finally.php',
    'ezcWorkflowNodeInput' => $vendorDir . '/zetacomponents/workflow/src/nodes/variables/input.php',
    'ezcWorkflowNodeLoop' => $vendorDir . '/zetacomponents/workflow/src/nodes/control_flow/loop.php',
    'ezcWorkflowNodeMerge' => $vendorDir . '/zetacomponents/workflow/src/interfaces/node_merge.php',
    'ezcWorkflowNodeMultiChoice' => $vendorDir . '/zetacomponents/workflow/src/nodes/control_flow/multi_choice.php',
    'ezcWorkflowNodeParallelSplit' => $vendorDir . '/zetacomponents/workflow/src/nodes/control_flow/parallel_split.php',
    'ezcWorkflowNodeSimpleMerge' => $vendorDir . '/zetacomponents/workflow/src/nodes/control_flow/simple_merge.php',
    'ezcWorkflowNodeStart' => $vendorDir . '/zetacomponents/workflow/src/nodes/start.php',
    'ezcWorkflowNodeSubWorkflow' => $vendorDir . '/zetacomponents/workflow/src/nodes/sub_workflow.php',
    'ezcWorkflowNodeSynchronization' => $vendorDir . '/zetacomponents/workflow/src/nodes/control_flow/synchronization.php',
    'ezcWorkflowNodeSynchronizingMerge' => $vendorDir . '/zetacomponents/workflow/src/nodes/control_flow/synchronizing_merge.php',
    'ezcWorkflowNodeVariableAdd' => $vendorDir . '/zetacomponents/workflow/src/nodes/variables/add.php',
    'ezcWorkflowNodeVariableDecrement' => $vendorDir . '/zetacomponents/workflow/src/nodes/variables/decrement.php',
    'ezcWorkflowNodeVariableDiv' => $vendorDir . '/zetacomponents/workflow/src/nodes/variables/div.php',
    'ezcWorkflowNodeVariableIncrement' => $vendorDir . '/zetacomponents/workflow/src/nodes/variables/increment.php',
    'ezcWorkflowNodeVariableMul' => $vendorDir . '/zetacomponents/workflow/src/nodes/variables/mul.php',
    'ezcWorkflowNodeVariableSet' => $vendorDir . '/zetacomponents/workflow/src/nodes/variables/set.php',
    'ezcWorkflowNodeVariableSub' => $vendorDir . '/zetacomponents/workflow/src/nodes/variables/sub.php',
    'ezcWorkflowNodeVariableUnset' => $vendorDir . '/zetacomponents/workflow/src/nodes/variables/unset.php',
    'ezcWorkflowServiceObject' => $vendorDir . '/zetacomponents/workflow/src/interfaces/service_object.php',
    'ezcWorkflowUtil' => $vendorDir . '/zetacomponents/workflow/src/util.php',
    'ezcWorkflowVariableHandler' => $vendorDir . '/zetacomponents/workflow/src/interfaces/variable_handler.php',
    'ezcWorkflowVisitable' => $vendorDir . '/zetacomponents/workflow/src/interfaces/visitable.php',
    'ezcWorkflowVisitor' => $vendorDir . '/zetacomponents/workflow/src/interfaces/visitor.php',
    'ezcWorkflowVisitorNodeCollector' => $vendorDir . '/zetacomponents/workflow/src/visitors/node_collector.php',
    'ezcWorkflowVisitorReset' => $vendorDir . '/zetacomponents/workflow/src/visitors/reset.php',
    'ezcWorkflowVisitorVerification' => $vendorDir . '/zetacomponents/workflow/src/visitors/verification.php',
    'ezcWorkflowVisitorVisualization' => $vendorDir . '/zetacomponents/workflow/src/visitors/visualization.php',
    'ezcWorkflowVisitorVisualizationOptions' => $vendorDir . '/zetacomponents/workflow/src/options/visitor_visualization.php',
);
