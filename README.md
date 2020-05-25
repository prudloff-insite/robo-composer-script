# Robo Composer script tasks

This packages contains [Robo](https://robo.li/) tasks that allows you to run
custom [Composer scripts](https://getcomposer.org/doc/articles/scripts.md#running-scripts-manually)
and `composer exec`.

## Script task

You can use it like this:

```php
/** @var \RoboComposerScript\ComposerScriptTask $composerTask */
$composerTask = $this->taskComposerScript();
$composerTask->arg('myscript')
  ->scriptOption('option');
$composerTask->run();
```

This will run:
```shell script
composer run-script myscript --ansi -- --option
```

## Exec task

You can use it like this:

```php
/** @var \RoboComposerScript\ComposerExecTask $composerTask */
$composerTask = $this->taskComposerExec();
$composerTask->arg('mycommand');
$composerTask->run();
```

This will run:
```shell script
composer exec mycommand --ansi
```
