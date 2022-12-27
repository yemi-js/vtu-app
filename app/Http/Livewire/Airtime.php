<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Airtime extends Component
{
    public $amount;
    public $network_id;
    public $phone;


    protected $rules = [
        'amount' => 'required|min:2|integer',
        'phone' => 'required',
        'network_id' => 'required',
    ];



    public function render()
    {
        return view('livewire.airtime');
    }

    public function airtime()
    {
        $this->validate();

        if (Auth::user()->balance < $this->amount) {
            session()->flash('message', 'You have insufficient funds to perform this transaction 😢');
        } else {
            $res = Http::withHeaders([
                'Authorization' => config('app.auth_key'),
                'Content-Type' => 'application/json',
            ])->post('https://www.drockno1datasub.com/api/topup/', [
                    "network" => $this->network_id,
                    "amount" => $this->amount,
                    "mobile_number" => $this->phone,
                    "Ported_number" => true,
                    "airtime_type" => "VTU"
                ]);

            if ($res->status() == '400') {
                Auth::user()->withdraw($this->amount);
                return redirect('/users/dashboard')->back()->with(
                    'message',
                    'Your Airtime Purchase Was Successful! 😢'
                );

            } else {

            }


        }

    }
}
