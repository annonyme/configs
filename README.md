# hannespries\config

Simple configs-container for multiple modules.

```
$configValues = ['test' => 'blubb23'];
$moduleName = 'TestModule';
Configs::instance()->add($moduleName, $configValues);

$configValue = Configs::instance()->getConfig('TestModule')->get('test')
```