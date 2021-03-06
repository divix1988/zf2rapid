<?php
/**
 * ZF2rapid - Zend Framework 2 Rapid Development Tool
 *
 * @link      https://github.com/ZFrapid/zf2rapid
 * @copyright Copyright (c) 2014 - 2015 Ralf Eggert
 * @license   http://opensource.org/licenses/MIT The MIT License (MIT)
 */
namespace ZF2rapid\Task\GenerateClass;

use ZF2rapid\Generator\ViewHelperClassGenerator;

/**
 * Class GenerateViewHelperClass
 *
 * @package ZF2rapid\Task\GenerateClass
 */
class GenerateViewHelperClass extends AbstractGenerateClass
{
    /**
     * Process the command
     *
     * @return integer
     */
    public function processCommandTask()
    {
        $result = $this->generateClass(
            $this->params->viewHelperDir,
            $this->params->paramViewHelper,
            'view helper',
            new ViewHelperClassGenerator($this->params->config)
        );

        return $result == true ? 0 : 1;
    }
}