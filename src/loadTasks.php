<?php

namespace RoboComposerScript;

/**
 * Trait loadTasks
 *
 * @package RoboComposerScript
 * @method task(string $class, ...$args)
 */
trait loadTasks {

  /**
   * Create a Composer script command.
   *
   * @param null|string $pathToComposer Path to Composer executable
   *
   * @return \RoboComposerScript\ComposerScriptTask
   */
  protected function taskComposerScript($pathToComposer = NULL) {
    return $this->task(ComposerScriptTask::class, $pathToComposer);
  }

  /**
   * Create a Composer script command.
   *
   * @param bool $global Run "composer global exec"
   * @param null|string $pathToComposer Path to Composer executable
   *
   * @return \RoboComposerScript\ComposerExecTask
   */
  protected function taskComposerExec($global = FALSE, $pathToComposer = NULL) {
    return $this->task(ComposerExecTask::class, $global, $pathToComposer);
  }

}
