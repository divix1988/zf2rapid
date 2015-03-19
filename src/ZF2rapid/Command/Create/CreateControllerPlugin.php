<?php
/**
 * ZF2rapid - Zend Framework 2 Rapid Development Tool
 *
 * @link      https://github.com/ZFrapid/zf2rapid
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */
namespace ZF2rapid\Command\Create;

use Zend\Console\ColorInterface as Color;
use ZF2rapid\Command\AbstractCommand;

/**
 * Class CreateControllerPlugin
 *
 * @package ZF2rapid\Command\Create
 */
class CreateControllerPlugin extends AbstractCommand
{
    /**
     * @var array
     */
    protected $tasks
        = array(
            'ZF2rapid\Task\Setup\ProjectPath',
            'ZF2rapid\Task\Setup\ConfigFile',
            'ZF2rapid\Task\Setup\Params',
            'ZF2rapid\Task\Check\ModulePathExists',
            'ZF2rapid\Task\ControllerPlugin\CreateControllerPluginStructure',
            'ZF2rapid\Task\ControllerPlugin\GenerateControllerPluginClass',
            'ZF2rapid\Task\ControllerPlugin\GenerateControllerPluginFactory',
            'ZF2rapid\Task\ControllerPlugin\UpdateControllerPluginConfig',
        );

    /**
     * Start the command
     */
    public function startCommand()
    {
        // start output
        $this->console->writeGoLine('Creating new controller plugin...');
    }

    /**
     * Stop the command
     */
    public function stopCommand()
    {
        $this->console->writeOkLine(
            'Congratulations! The new ZF2 controller plugin '
            . $this->console->colorize(
                $this->params->paramControllerPlugin, Color::GREEN
            ) . ' for module ' . $this->console->colorize(
                $this->params->paramModule, Color::GREEN
            ) . ' was successfully created.'
        );
    }
}