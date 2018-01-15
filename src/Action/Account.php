<?php

namespace dansup\RaiBlocks\Action;

trait Account {

  public function accountBalance($account = null)
  {
    $this->params = [
      'action'  => 'account_balance',
      'account' => $account
    ];
    return $this;
  }

  public function accountBlockCount($account = null)
  {
    $this->params = [
      'action'  => 'account_block_count',
      'account' => $account
    ];
    return $this;
  }

  public function accountInfo(
    $account = null, 
    $representative = false,
    $weight = false,
    $pending = false
  )
  {
    $this->params = [
      'action'  => 'account_info',
      'account' => $account,
      'representative' => $representative,
      'weight'  => $weight,
      'pending' => $pending
    ];
    return $this;
  }

  public function accountCreate($wallet = null, $work = true) {}

  public function accountGet($key = null)
  {
    $this->params = [
      'action'  => 'account_get',
      'key' => $key
    ];
    return $this;
  }

  public function accountHistory($account = null, $count = 1)
  {
    $this->params = [
      'action'  => 'account_history',
      'account' => $account,
      'count'   => $count
    ];
    return $this;
  }

  public function accountList($wallet = null)
  {
    $this->params = [
      'action' => 'account_list',
      'wallet' => $wallet
    ];
    return $this;
  }

  public function accountMove($wallet = null, $source = null, $accounts = []) {}

  public function accountKey($account)
  {
    $this->params = [
      'action'  => 'account_key',
      'account' => $account
    ];
    return $this;
  }

  public function accountRemove($wallet = null, $account = null) {}

  public function accountRepresentative($account = null)
  {
    $this->params = [
      'action' => 'account_representative',
      'account' => $account
    ];
    return $this;
  }

  public function accountRepresentativeSet() {}

  public function accountWeight($account)
  {
    $this->params = [
      'action'  => 'account_weight',
      'account' => $account
    ];
    return $this;
  }
}