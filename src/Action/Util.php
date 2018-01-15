<?php

namespace dansup\RaiBlocks\Action;

trait Util {

  public function mraiFromRaw($amount = 1)
  {
    $this->params = [
      'action'  => 'mrai_from_raw',
      'amount'  => $amount
    ];
    return $this;
  }

}