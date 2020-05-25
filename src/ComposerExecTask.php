<?php

namespace RoboComposerScript;

/**
 * Class ComposerScriptTask
 *
 * @package RoboComposerScript
 */
class ComposerExecTask extends BaseTask {

  /**
   * @var string
   */
  protected $action = 'exec';

  /**
   * ComposerScriptTask constructor.
   *
   * @param bool $global Run "composer global exec"
   * @param null|string $pathToComposer Path to Composer executable
   *
   * @throws \Robo\Exception\TaskException
   */
  public function __construct($global = FALSE, $pathToComposer = NULL) {
    parent::__construct($pathToComposer);

    if ($global) {
      $this->action = 'global ' . $this->action;
    }
  }

}