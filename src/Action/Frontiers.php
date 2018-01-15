<?php

namespace dansup\RaiBlocks\Action;

trait Frontiers {

  public function frontiers($account = null, $count = 1)
  {
    $this->params = [
      'action'  => 'frontiers',
      'account' => $account,
      'count'   => $count
    ];
    return $this;
  }

  public function frontierCount()
  {
    $this->params = [
      'action'  => 'frontier_count'
    ];
    return $this;
  }

}