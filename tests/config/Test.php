<?php

use hannespries\config\Configs;

class Test extends \PHPUnit\Framework\TestCase
{
    public function test_simpleValue()
    {
        $configValues = ['test' => 'blubb23'];
        $moduleName = 'TestModule';

        Configs::instance()->add($moduleName, $configValues);

        $this->assertEquals('blubb23', Configs::instance()->getConfig('TestModule')->get('test'));
    }

    public function test_simpleName()
    {
        $configValues = ['test' => 'blubb23'];
        $moduleName = 'TestModule';

        Configs::instance()->add($moduleName, $configValues);

        $this->assertEquals('TestModule', Configs::instance()->getConfig('TestModule')->getName());
    }

    public function test_simpleDefault()
    {
        $configValues = ['test' => 'blubb23'];
        $moduleName = 'TestModule';

        Configs::instance()->add($moduleName, $configValues);

        $this->assertEquals('def', Configs::instance()->getConfig('TestModule')->get('test_2', 'def'));
    }
}
