<?php

namespace App\Http\Livewire;

use App\Models\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class WalletControl extends Component
{
    public $amount;
    public $network_id;
    public $phone;

    public function airtime()
    {
        dd($this->amount,$this->network_id,$this->phone);
    }
    public function render()
    {
        return view('livewire.wallet-control');
    }

    public function mount(){

    }

    public function showWalletBalance()
    {
        // $userid= Auth::id();

        $user = Auth::user();


        $user->deposit(200);
    }
}
