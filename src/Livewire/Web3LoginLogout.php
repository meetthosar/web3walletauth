<?php

namespace Meetthosar\Web3WalletAuth\Livewire;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class Web3LoginLogout extends Component
{
    public string $loginText = 'Login';
    public string $loginClass = 'inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs
            leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none
            focus:ring-0 active:bg-blue-800 active:shadow-lg
            transition duration-150 ease-in-out';


    public string $logoutText = 'Logout';

    public $participant = null;


    public function render(): Factory|View|Application
    {
        return view('Web3WalletAuth::livewire.web3-login-logout');
    }

    public function login($account){
        $address = $account['networkAccount']['addr'];
        $user = User::where('address' , $address )->first();
        if(is_null($user)) {
            $user = User::create([
                'name' => $this->participant.' User',
                'address' => $address,
                'password' => Hash::make(Str::random(10))
            ]);
        }
        Auth::login($user);
        return redirect()->to(route('dashboard'));
    }
}
