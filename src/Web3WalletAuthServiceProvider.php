<?php

namespace Meetthosar\Web3WalletAuth;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Meetthosar\Web3WalletAuth\Livewire\Web3LoginLogout;

class Web3WalletAuthServiceProvider extends ServiceProvider
{
  public function register()
  {
    //
  }

  public function boot()
  {
    $this->loadViewsFrom(__DIR__.'/resources/views', "Web3WalletAuth");
    $this->publishes([
        __DIR__.'/resources/js/reach.js' => public_path('vendor/web3walletauth/js/reach.js'),
      ], 'web3walletauth:public');

    Livewire::component('Web3WalletAuth::web3-login-logout',Web3LoginLogout::class);
  }
}