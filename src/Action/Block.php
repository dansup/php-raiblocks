<?php

namespace dansup\RaiBlocks\Action;

trait Block {

  public function availableSupply()
  {
    $this->params = [
      'action' => 'available_supply'
    ];
    return $this;
  }

  public function block(string $hash = null)
  {
    $this->params = [
      'action' => 'block',
      'hash'   => $hash
    ];
    return $this;
  }

  public function blocks(array $hashes = [])
  {
    $this->params = [
      'action' => 'blocks',
      'hashes'   => $hashes
    ];
    return $this;
  }

  public function blocksInfo(array $hashes = [], $pending = false, $source = false)
  {
    $this->params = [
      'action' => 'blocks_info',
      'hashes'   => $hashes,
      'pending'  => $pending,
      'source'   => $source
    ];
    return $this;
  }

  public function blockAccount($hash = null)
  {
    $this->params = [
      'action' => 'block_account',
      'hash'   => $hash,
    ];
    return $this;
  }

  public function blockCount()
  {
    $this->params = [
      'action' => 'block_count'
    ];
    return $this;
  }


  public function blockCountType()
  {
    $this->params = [
      'action' => 'block_count_type'
    ];
    return $this;
  }

  public function chain($block = null, $count = 1)
  {
    $this->params = [
      'action' => 'chain',
      'block'  => $block,
      'count'  => $count
    ];
    return $this;
  }

  public function delegators($account)
  {
    $this->params = [
      'action'  => 'delegators',
      'account' => $account
    ];
    return $this;
  }

  public function delegatorsCount($account)
  {
    $this->params = [
      'action'  => 'delegators_count',
      'account' => $account
    ];
    return $this;
  }

  public function deterministicKey($seed = null, $index = 0)
  {
    $this->params = [
      'action' => 'deterministic_key',
      'seed'   => $seed,
      'index'  => $index
    ];
    return $this;
  }

  public function history($hash = null, $count = 1)
  {
    $this->params = [
      'action' => 'history',
      'hash'   => $hash,
      'count'  => $count
    ];
    return $this;
  }

}