<?php

use Robo\Tasks;
use RoboComposerScript\loadTasks;

class RoboFile extends Tasks {

  use loadTasks;

  /**
   * Very basic test command
   *
   * @return void
   */
  public function test() {
    $composerTask = $this->taskComposerScript();
    $composerTask->arg('test');
    $composerTask->run();
  }

}
