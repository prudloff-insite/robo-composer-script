<?php

namespace RoboComposerScript;

use Robo\Task\Composer\Base;

abstract class BaseTask extends Base {

  /**
   * Script options.
   *
   * @var array
   */
  protected $scriptOptions = [];

  /**
   * Add a script option.
   *
   * @param string $option Option name
   * @param string $value Option value
   *
   * @return \RoboComposerScript\BaseTask
   * @noinspection PhpUnused
   */
  public function scriptOption($option, $value = NULL) {
    $this->scriptOptions[$option] = $value;

    return $this;
  }

  /**
   * Add script options to command.
   */
  public function buildCommand() {
    parent::buildCommand();

    $this->option('');
    $this->options($this->scriptOptions);
  }

  /**
   * Run the command.
   *
   * @return \Robo\Result
   */
  public function run() {
    return $this->executeCommand($this->getCommand());
  }
}