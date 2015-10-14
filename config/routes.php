<?php
/**
 * ZF2rapid - Zend Framework 2 Rapid Development Tool
 *
 * @link        https://github.com/ZFrapid/zf2rapid
 * @copyright   Copyright (c) 2014 - 2015 Ralf Eggert
 * @license     http://opensource.org/licenses/MIT The MIT License (MIT)
 */
use ZF\Console\Filter\Explode as ExplodeFilter;
use ZF2rapid\Filter\NormalizeList as NormalizeListFilter;
use ZF2rapid\Filter\NormalizeParam as NormalizeParamFilter;

return [
    [
        'name'                 => 'activate-module',
        'route'                => 'activate-module <module> [--workingPath=] [--configFile=] [--without-project]',
        'description'          => 'route_activate_module_description',
        'short_description'    => 'route_activate_module_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_activate_module_option_module',
            '--workingPath='    => 'route_param_working_path',
            '--configFile='     => 'route_param_config_file',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'configFile'  => false,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Activate\ActivateModule',
    ],
    [
        'name'                 => 'create-action',
        'route'                => 'create-action <module> <controller> <action> [--workingPath=] [--without-project]',
        'description'          => 'route_create_action_description',
        'short_description'    => 'route_create_action_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_action_option_module',
            '<controller>'      => 'route_create_action_option_controller',
            '<action>'          => 'route_create_action_option_action',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'no-factory'  => false,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
            'action'     => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateAction',
    ],
    [
        'name'                 => 'create-controller',
        'route'                => 'create-controller <module> <controller> [--workingPath=] [--without-project] [--no-factory]',
        'description'          => 'route_create_controller_description',
        'short_description'    => 'route_create_controller_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_controller_option_module',
            '<controller>'      => 'route_create_controller_option_controller',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--no-factory'      => 'route_create_controller_option_factory',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'no-factory'  => false,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateController',
    ],
    [
        'name'                 => 'create-controller-factory',
        'route'                => 'create-controller-factory <module> <controller> [--workingPath=] [--without-project]',
        'description'          => 'route_create_controller_factory_description',
        'short_description'    => 'route_create_controller_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_controller_factory_option_module',
            '<controller>'      => 'route_create_controller_factory_option_controller',
            '--without-project' => 'route_param_without_project',
            '--workingPath='    => 'route_param_working_path',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'factory'     => true,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateControllerFactory',
    ],
    [
        'name'                 => 'create-controller-plugin',
        'route'                => 'create-controller-plugin <module> <controllerPlugin> [--workingPath=] [--without-project] [--no-factory]',
        'description'          => 'route_create_controller_plugin_description',
        'short_description'    => 'route_create_controller_plugin_short_description',
        'options_descriptions' => [
            '<module>'           => 'route_create_controller_plugin_option_module',
            '<controllerPlugin>' => 'route_create_controller_plugin_option_plugin',
            '--workingPath='     => 'route_param_working_path',
            '--without-project'  => 'route_param_without_project',
            '--no-factory'       => 'route_create_controller_plugin_option_factory',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'no-factory'  => false,
        ],
        'filters'              => [
            'module'           => new NormalizeParamFilter(),
            'controllerPlugin' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateControllerPlugin',
    ],
    [
        'name'                 => 'create-controller-plugin-factory',
        'route'                => 'create-controller-plugin-factory <module> <controllerPlugin> [--workingPath=] [--without-project]',
        'description'          => 'route_create_controller_plugin_factory_description',
        'short_description'    => 'route_create_controller_plugin_factory_short_description',
        'options_descriptions' => [
            '<module>'           => 'route_create_controller_plugin_factory_option_module',
            '<controllerPlugin>' => 'route_create_controller_plugin_factory_option_plugin',
            '--workingPath='     => 'route_param_working_path',
            '--without-project'  => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'factory'     => true,
        ],
        'filters'              => [
            'module'           => new NormalizeParamFilter(),
            'controllerPlugin' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateControllerPluginFactory',
    ],
    [
        'name'                 => 'create-filter',
        'route'                => 'create-filter <module> <filter> [--workingPath=] [--without-project] [--no-factory]',
        'description'          => 'route_create_filter_description',
        'short_description'    => 'route_create_filter_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_filter_option_module',
            '<filter>'          => 'route_create_filter_option_filter',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--no-factory'      => 'route_create_filter_option_factory',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'no-factory'  => false,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'filter' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateFilter',
    ],
    [
        'name'                 => 'create-filter-factory',
        'route'                => 'create-filter-factory <module> <filter> [--workingPath=] [--without-project]',
        'description'          => 'route_create_filter_factory_description',
        'short_description'    => 'route_create_filter_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_filter_factory_option_module',
            '<filter>'          => 'route_create_filter_factory_option_filter',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'factory'     => true,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'filter' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateFilterFactory',
    ],
    [
        'name'                 => 'create-form',
        'route'                => 'create-form <module> <form> [--workingPath=] [--without-project] [--no-factory]',
        'description'          => 'route_create_form_description',
        'short_description'    => 'route_create_form_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_form_option_module',
            '<form>'            => 'route_create_form_option_form',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--no-factory'      => 'route_create_form_option_factory',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'no-factory'  => false,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'form'   => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateForm',
    ],
    [
        'name'                 => 'create-form-factory',
        'route'                => 'create-form-factory <module> <form> [--workingPath=] [--without-project]',
        'description'          => 'route_create_form_factory_description',
        'short_description'    => 'route_create_form_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_form_factory_option_module',
            '<form>'            => 'route_create_form_factory_option_form',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'factory'     => true,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'form'   => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateFormFactory',
    ],
    [
        'name'                 => 'create-hydrator',
        'route'                => 'create-hydrator <module> <hydrator> [--workingPath=] [--without-project] [--baseHydrator=] [--no-factory]',
        'description'          => 'route_create_hydrator_description',
        'short_description'    => 'route_create_hydrator_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_hydrator_option_module',
            '<hydrator>'        => 'route_create_hydrator_option_hydrator',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--baseHydrator'    => 'route_create_hydrator_option_base_hydrator',
            '--no-factory'      => 'route_create_hydrator_option_factory',
        ],
        'defaults'             => [
            'workingPath'  => '.',
            'factory'      => false,
            'baseHydrator' => 'ClassMethods',
        ],
        'filters'              => [
            'module'       => new NormalizeParamFilter(),
            'hydrator'     => new NormalizeParamFilter(),
            'baseHydrator' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateHydrator',
    ],
    [
        'name'                 => 'create-hydrator-factory',
        'route'                => 'create-hydrator-factory <module> <hydrator> [--workingPath=] [--without-project]',
        'description'          => 'route_create_hydrator_factory_description',
        'short_description'    => 'route_create_hydrator_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_hydrator_factory_option_module',
            '<hydrator>'        => 'route_create_hydrator_factory_option_hydrator',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'factory'     => true,
        ],
        'filters'              => [
            'module'   => new NormalizeParamFilter(),
            'hydrator' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateHydratorFactory',
    ],
    [
        'name'                 => 'create-input-filter',
        'route'                => 'create-input-filter <module> <inputFilter> [--workingPath=] [--without-project] [--no-factory]',
        'description'          => 'route_create_input_filter_description',
        'short_description'    => 'route_create_input_filter_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_input_filter_option_module',
            '<inputFilter>'     => 'route_create_input_filter_option_input_filter',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--no-factory'      => 'route_create_input_filter_option_factory',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'no-factory'  => false,
        ],
        'filters'              => [
            'module'      => new NormalizeParamFilter(),
            'inputFilter' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateInputFilter',
    ],
    [
        'name'                 => 'create-input-filter-factory',
        'route'                => 'create-input-filter-factory <module> <inputFilter> [--workingPath=] [--without-project]',
        'description'          => 'route_create_input_filter_factory_description',
        'short_description'    => 'route_create_input_filter_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_input_filter_factory_option_module',
            '<inputFilter>'     => 'route_create_input_filter_factory_option_input_filter',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'factory'     => true,
        ],
        'filters'              => [
            'module'      => new NormalizeParamFilter(),
            'inputFilter' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateInputFilterFactory',
    ],
    [
        'name'                 => 'create-module',
        'route'                => 'create-module <module> [--workingPath=] [--configFile=] [--without-project] [--no-activation]',
        'description'          => 'route_create_module_description',
        'short_description'    => 'route_create_module_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_module_option_module',
            '--workingPath='    => 'route_param_working_path',
            '--configFile='     => 'route_param_config_file',
            '--without-project' => 'route_param_without_project',
            '--no-activation'   => 'route_create_module_option_no_activation',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'configFile'    => false,
            'no-activation' => false,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateModule',
    ],
    [
        'name'                 => 'create-project',
        'route'                => 'create-project [--workingPath=]',
        'description'          => 'route_create_project_description',
        'short_description'    => 'route_create_project_short_description',
        'options_descriptions' => [
            '--workingPath=' => 'route_param_working_path',
        ],
        'defaults'             => [
            'workingPath' => false,
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateProject',
    ],
    [
        'name'                 => 'create-routing',
        'route'                => 'create-routing <module> [--workingPath=] [--without-project] [--strict]',
        'description'          => 'route_create_routing_description',
        'short_description'    => 'route_create_routing_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_routing_option_module',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--strict'          => 'route_create_routing_option_strict',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'strict'      => false,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateRouting',
    ],
    [
        'name'                 => 'create-validator',
        'route'                => 'create-validator <module> <validator> [--workingPath=] [--without-project] [--no-factory]',
        'description'          => 'route_create_validator_description',
        'short_description'    => 'route_create_validator_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_validator_option_module',
            '<validator>'       => 'route_create_validator_option_validator',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--no-factory'      => 'route_create_validator_option_factory',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'no-factory'  => false,
        ],
        'filters'              => [
            'module'    => new NormalizeParamFilter(),
            'validator' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateValidator',
    ],
    [
        'name'                 => 'create-validator-factory',
        'route'                => 'create-validator-factory <module> <validator> [--workingPath=] [--without-project]',
        'description'          => 'route_create_validator_factory_description',
        'short_description'    => 'route_create_validator_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_validator_factory_option_module',
            '<validator>'       => 'route_create_validator_factory_option_validator',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'factory'     => true,
        ],
        'filters'              => [
            'module'    => new NormalizeParamFilter(),
            'validator' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateValidatorFactory',
    ],
    [
        'name'                 => 'create-view-helper',
        'route'                => 'create-view-helper <module> <viewHelper> [--workingPath=] [--without-project] [--no-factory]',
        'description'          => 'route_create_view_helper_description',
        'short_description'    => 'route_create_view_helper_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_view_helper_option_module',
            '<viewHelper>'      => 'route_create_view_helper_option_view_helper',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--no-factory'      => 'route_create_view_helper_option_factory',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'no-factory'  => false,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'viewHelper' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateViewHelper',
    ],
    [
        'name'                 => 'create-view-helper-factory',
        'route'                => 'create-view-helper-factory <module> <viewHelper> [--workingPath=] [--without-project]',
        'description'          => 'route_create_view_helper_factory_description',
        'short_description'    => 'route_create_view_helper_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_create_view_helper_factory_option_module',
            '<viewHelper>'      => 'route_create_view_helper_factory_option_view_helper',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'factory'     => true,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'viewHelper' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Create\CreateViewHelperFactory',
    ],
    [
        'name'                 => 'crud-check-db',
        'route'                => 'crud-check-db [--workingPath=]',
        'description'          => 'route_crud_check_db_description',
        'short_description'    => 'route_crud_check_db_short_description',
        'options_descriptions' => [
            '--workingPath=' => 'route_param_working_path',
        ],
        'defaults'             => [
            'workingPath' => '.',
        ],
        'handler'              => 'ZF2rapid\Command\Crud\CheckDb',
    ],
    [
        'name'                 => 'crud-create-application',
        'route'                => 'crud-create-application <module> <entity> [--workingPath=]',
        'description'          => 'route_crud_create_application_description',
        'short_description'    => 'route_crud_create_application_short_description',
        'options_descriptions' => [
            '<module>'       => 'route_crud_create_application_option_module',
            '<entity>'       => 'route_crud_create_application_option_entity',
            '--workingPath=' => 'route_param_working_path',
        ],
        'defaults'             => [
            'workingPath' => '.',
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'entity' => new ExplodeFilter('/'),
        ],
        'handler'              => 'ZF2rapid\Command\Crud\CreateApplication',
    ],
    [
        'name'                 => 'crud-create-model',
        'route'                => 'crud-create-model <module> <tables> [--workingPath=]',
        'description'          => 'route_crud_create_model_description',
        'short_description'    => 'route_crud_create_model_short_description',
        'options_descriptions' => [
            '<module>'       => 'route_crud_create_model_option_module',
            '<tables>'       => 'route_crud_create_model_option_tables',
            '--workingPath=' => 'route_param_working_path',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'tables'      => [],
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'tables' => new ExplodeFilter(','),
        ],
        'handler'              => 'ZF2rapid\Command\Crud\CreateModel',
    ],
    [
        'name'                 => 'crud-show-tables',
        'route'                => 'crud-show-tables [--workingPath=]',
        'description'          => 'route_crud_show_tables_description',
        'short_description'    => 'route_crud_show_tables_short_description',
        'options_descriptions' => [
            '--workingPath=' => 'route_param_working_path',
        ],
        'defaults'             => [
            'workingPath' => '.',
        ],
        'handler'              => 'ZF2rapid\Command\Crud\ShowTables',
    ],
    [
        'name'                 => 'deactivate-module',
        'route'                => 'deactivate-module <module> [--workingPath=] [--configFile=] [--without-project]',
        'description'          => 'route_deactivate_module_description',
        'short_description'    => 'route_deactivate_module_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_deactivate_module_option_module',
            '--workingPath='    => 'route_param_working_path',
            '--configFile='     => 'route_param_config_file',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'configFile'  => false,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Deactivate\DeactivateModule',
    ],
    [
        'name'                 => 'delete-action',
        'route'                => 'delete-action <module> <controller> <action> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_action_description',
        'short_description'    => 'route_delete_action_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_action_option_module',
            '<controller>'      => 'route_delete_action_option_controller',
            '<action>'          => 'route_delete_action_option_action',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
            'action'     => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteAction',
    ],
    [
        'name'                 => 'delete-controller',
        'route'                => 'delete-controller <module> <controller> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_controller_description',
        'short_description'    => 'route_delete_controller_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_controller_option_module',
            '<controller>'      => 'route_delete_controller_option_controller',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteController',
    ],
    [
        'name'                 => 'delete-controller-factory',
        'route'                => 'delete-controller-factory <module> <controller> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_controller_factory_description',
        'short_description'    => 'route_delete_controller_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_controller_factory_option_module',
            '<controller>'      => 'route_delete_controller_factory_option_controller',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'controller' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteControllerFactory',
    ],
    [
        'name'                 => 'delete-controller-plugin',
        'route'                => 'delete-controller-plugin <module> <controllerPlugin> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_controller_plugin_description',
        'short_description'    => 'route_delete_controller_plugin_short_description',
        'options_descriptions' => [
            '<module>'           => 'route_delete_controller_plugin_option_module',
            '<controllerPlugin>' => 'route_delete_controller_plugin_option_plugin',
            '--workingPath='     => 'route_param_working_path',
            '--without-project'  => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'           => new NormalizeParamFilter(),
            'controllerPlugin' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteControllerPlugin',
    ],
    [
        'name'                 => 'delete-controller-plugin-factory',
        'route'                => 'delete-controller-plugin-factory <module> <controllerPlugin> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_controller_plugin_factory_description',
        'short_description'    => 'route_delete_controller_plugin_factory_short_description',
        'options_descriptions' => [
            '<module>'           => 'route_delete_controller_plugin_factory_option_module',
            '<controllerPlugin>' => 'route_delete_controller_plugin_factory_option_plugin',
            '--workingPath='     => 'route_param_working_path',
            '--without-project'  => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'           => new NormalizeParamFilter(),
            'controllerPlugin' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteControllerPluginFactory',
    ],
    [
        'name'                 => 'delete-filter',
        'route'                => 'delete-filter <module> <filter> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_filter_description',
        'short_description'    => 'route_delete_filter_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_filter_option_module',
            '<filter>'          => 'route_delete_filter_option_filter',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'filter' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteFilter',
    ],
    [
        'name'                 => 'delete-filter-factory',
        'route'                => 'delete-filter-factory <module> <filter> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_filter_factory_description',
        'short_description'    => 'route_delete_filter_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_filter_factory_option_module',
            '<filter>'          => 'route_delete_filter_factory_option_filter',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'filter' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteFilterFactory',
    ],
    [
        'name'                 => 'delete-form',
        'route'                => 'delete-form <module> <form> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_form_description',
        'short_description'    => 'route_delete_form_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_form_option_module',
            '<form>'            => 'route_delete_form_option_form',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'form'   => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteForm',
    ],
    [
        'name'                 => 'delete-form-factory',
        'route'                => 'delete-form-factory <module> <form> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_form_factory_description',
        'short_description'    => 'route_delete_form_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_form_factory_option_module',
            '<form>'            => 'route_delete_form_factory_option_form',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
            'form'   => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteFormFactory',
    ],
    [
        'name'                 => 'delete-hydrator',
        'route'                => 'delete-hydrator <module> <hydrator> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_hydrator_description',
        'short_description'    => 'route_delete_hydrator_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_hydrator_option_module',
            '<hydrator>'        => 'route_delete_hydrator_option_hydrator',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'   => new NormalizeParamFilter(),
            'hydrator' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteHydrator',
    ],
    [
        'name'                 => 'delete-hydrator-factory',
        'route'                => 'delete-hydrator-factory <module> <hydrator> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_hydrator_factory_description',
        'short_description'    => 'route_delete_hydrator_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_hydrator_factory_option_module',
            '<hydrator>'        => 'route_delete_hydrator_factory_option_hydrator',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'   => new NormalizeParamFilter(),
            'hydrator' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteHydratorFactory',
    ],
    [
        'name'                 => 'delete-input-filter',
        'route'                => 'delete-input-filter <module> <inputFilter> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_input_filter_description',
        'short_description'    => 'route_delete_input_filter_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_input_filter_option_module',
            '<inputFilter>'     => 'route_delete_input_filter_option_input_filter',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'      => new NormalizeParamFilter(),
            'inputFilter' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteInputFilter',
    ],
    [
        'name'                 => 'delete-input-filter-factory',
        'route'                => 'delete-input-filter-factory <module> <inputFilter> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_input_filter_factory_description',
        'short_description'    => 'route_delete_input_filter_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_input_filter_factory_option_module',
            '<inputFilter>'     => 'route_delete_input_filter_factory_option_input_filter',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'      => new NormalizeParamFilter(),
            'inputFilter' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteInputFilterFactory',
    ],
    [
        'name'                 => 'delete-module',
        'route'                => 'delete-module <module> [--workingPath=] [--configFile=] [--without-project] [--no-deactivation]',
        'description'          => 'route_delete_module_description',
        'short_description'    => 'route_delete_module_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_module_option_module',
            '--workingPath='    => 'route_param_working_path',
            '--configFile='     => 'route_param_config_file',
            '--without-project' => 'route_param_without_project',
            '--no-deactivation' => 'route_delete_module_option_no_deactivation',
        ],
        'defaults'             => [
            'workingPath'     => '.',
            'configFile'      => false,
            'no-deactivation' => false,
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteModule',
    ],
    [
        'name'                 => 'delete-validator',
        'route'                => 'delete-validator <module> <validator> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_validator_description',
        'short_description'    => 'route_delete_validator_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_validator_option_module',
            '<validator>'       => 'route_delete_validator_option_validator',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'    => new NormalizeParamFilter(),
            'validator' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteValidator',
    ],
    [
        'name'                 => 'delete-validator-factory',
        'route'                => 'delete-validator-factory <module> <validator> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_validator_factory_description',
        'short_description'    => 'route_delete_validator_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_validator_factory_option_module',
            '<validator>'       => 'route_delete_validator_factory_option_validator',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'    => new NormalizeParamFilter(),
            'validator' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteValidatorFactory',
    ],
    [
        'name'                 => 'delete-view-helper',
        'route'                => 'delete-view-helper <module> <viewHelper> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_view_helper_description',
        'short_description'    => 'route_delete_view_helper_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_view_helper_option_module',
            '<viewHelper>'      => 'route_delete_view_helper_option_view_helper',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'viewHelper' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteViewHelper',
    ],
    [
        'name'                 => 'delete-view-helper-factory',
        'route'                => 'delete-view-helper-factory <module> <viewHelper> [--workingPath=] [--without-project]',
        'description'          => 'route_delete_view_helper_factory_description',
        'short_description'    => 'route_delete_view_helper_factory_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_delete_view_helper_factory_option_module',
            '<viewHelper>'      => 'route_delete_view_helper_factory_option_view_helper',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath'   => '.',
            'removeFactory' => true,
        ],
        'filters'              => [
            'module'     => new NormalizeParamFilter(),
            'viewHelper' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Delete\DeleteViewHelperFactory',
    ],
    [
        'name'                 => 'generate-classmap',
        'route'                => 'generate-classmap <module> [--workingPath=] [--without-project]',
        'description'          => 'route_generate_classmap_description',
        'short_description'    => 'route_generate_classmap_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_generate_classmap_option_module',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Generate\GenerateClassMap',
    ],
    [
        'name'                 => 'generate-templatemap',
        'route'                => 'generate-templatemap <module> [--workingPath=] [--without-project]',
        'description'          => 'route_generate_templatemap_description',
        'short_description'    => 'route_generate_templatemap_short_description',
        'options_descriptions' => [
            '<module>'          => 'route_generate_templatemap_option_module',
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
        ],
        'filters'              => [
            'module' => new NormalizeParamFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Generate\GenerateTemplateMap',
    ],
    [
        'name'                 => 'show-actions',
        'route'                => 'show-actions [--workingPath=] [--without-project] [--modules=] [--controllers=]',
        'description'          => 'route_show_actions_description',
        'short_description'    => 'route_show_actions_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--modules'         => 'route_show_actions_option_modules',
            '--controllers'     => 'route_show_actions_option_controllers',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'modules'     => [],
            'controllers' => [],
        ],
        'filters'              => [
            'modules'     => new NormalizeListFilter(),
            'controllers' => new ExplodeFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowActions',
    ],
    [
        'name'                 => 'show-controllers',
        'route'                => 'show-controllers [--workingPath=] [--without-project] [--modules=]',
        'description'          => 'route_show_controllers_description',
        'short_description'    => 'route_show_controllers_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--modules'         => 'route_show_controllers_option_modules',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'modules'     => [],
        ],
        'filters'              => [
            'modules' => new NormalizeListFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowControllers',
    ],
    [
        'name'                 => 'show-controller-plugins',
        'route'                => 'show-controller-plugins [--workingPath=] [--without-project] [--modules=]',
        'description'          => 'route_show_controller_plugins_description',
        'short_description'    => 'route_show_controller_plugins_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--modules'         => 'route_show_controller_plugins_option_modules',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'modules'     => [],
        ],
        'filters'              => [
            'modules' => new NormalizeListFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowControllerPlugins',
    ],
    [
        'name'                 => 'show-filters',
        'route'                => 'show-filters [--workingPath=] [--without-project] [--modules=]',
        'description'          => 'route_show_filters_description',
        'short_description'    => 'route_show_filters_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--modules'         => 'route_show_filters_option_modules',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'modules'     => [],
        ],
        'filters'              => [
            'modules' => new NormalizeListFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowFilters',
    ],
    [
        'name'                 => 'show-forms',
        'route'                => 'show-forms [--workingPath=] [--without-project] [--modules=]',
        'description'          => 'route_show_forms_description',
        'short_description'    => 'route_show_forms_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--modules'         => 'route_show_forms_option_modules',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'modules'     => [],
        ],
        'filters'              => [
            'modules' => new NormalizeListFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowForms',
    ],
    [
        'name'                 => 'show-hydrators',
        'route'                => 'show-hydrators [--workingPath=] [--without-project] [--modules=]',
        'description'          => 'route_show_hydrators_description',
        'short_description'    => 'route_show_hydrators_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--modules'         => 'route_show_hydrators_option_modules',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'modules'     => [],
        ],
        'filters'              => [
            'modules' => new NormalizeListFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowHydrators',
    ],
    [
        'name'                 => 'show-input-filters',
        'route'                => 'show-input-filters [--workingPath=] [--without-project] [--modules=]',
        'description'          => 'route_show_input_filters_description',
        'short_description'    => 'route_show_input_filters_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--modules'         => 'route_show_input_filters_option_modules',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'modules'     => [],
        ],
        'filters'              => [
            'modules' => new NormalizeListFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowInputFilters',
    ],
    [
        'name'                 => 'show-modules',
        'route'                => 'show-modules [--workingPath=] [--without-project]',
        'description'          => 'route_show_modules_description',
        'short_description'    => 'route_show_modules_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowModules',
    ],
    [
        'name'                 => 'show-validators',
        'route'                => 'show-validators [--workingPath=] [--without-project] [--modules=]',
        'description'          => 'route_show_validators_description',
        'short_description'    => 'route_show_validators_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--modules'         => 'route_show_validators_option_modules',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'modules'     => [],
        ],
        'filters'              => [
            'modules' => new NormalizeListFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowValidators',
    ],
    [
        'name'                 => 'show-version',
        'route'                => 'show-version [--workingPath=] [--without-project]',
        'description'          => 'route_show_version_description',
        'short_description'    => 'route_show_version_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
        ],
        'defaults'             => [
            'workingPath' => '.',
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowVersion',
    ],
    [
        'name'                 => 'show-view-helpers',
        'route'                => 'show-view-helpers [--workingPath=] [--without-project] [--modules=]',
        'description'          => 'route_show_view_helpers_description',
        'short_description'    => 'route_show_view_helpers_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--modules'         => 'route_show_view_helpers_option_modules',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'modules'     => [],
        ],
        'filters'              => [
            'modules' => new NormalizeListFilter(),
        ],
        'handler'              => 'ZF2rapid\Command\Show\ShowViewHelpers',
    ],
    [
        'name'                 => 'tool-config',
        'route'                => 'tool-config [--workingPath=] [--without-project] [--configKey=] [--configValue=]',
        'description'          => 'route_tool_config_description',
        'short_description'    => 'route_tool_config_short_description',
        'options_descriptions' => [
            '--workingPath='    => 'route_param_working_path',
            '--without-project' => 'route_param_without_project',
            '--configKey='      => 'route_tool_config_option_config_key',
            '--configValue='    => 'route_tool_config_option_config_value',
        ],
        'defaults'             => [
            'workingPath' => '.',
            'configKey'   => false,
            'configValue' => false,
        ],
        'handler'              => 'ZF2rapid\Command\Tool\ToolConfiguration',
    ],
    [
        'name'              => 'tool-version',
        'route'             => 'tool-version',
        'description'       => 'route_tool_version_description',
        'short_description' => 'route_tool_version_short_description',
        'handler'           => 'ZF2rapid\Command\Tool\ToolVersion',
    ],
];
