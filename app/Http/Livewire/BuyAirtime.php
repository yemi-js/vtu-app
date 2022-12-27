<?php

namespace App\Http\Livewire;
use App\Models\User;
// use GuzzleHttp\Client;
use Livewire\Component;

use Illuminate\Support\Facades\Http;

class BuyAirtime extends Component
{
    // public $amount;
    // public $network_id;
    // public $phone;
    // public $phoneNo;
    // public $plan_id;


    public function airtime()
    {
        dd(1);
    }
    public function render()
    {
        return view('livewire.user.buy-airtime');
    }
    public function showData()
    {
        return view('livewire.user.buy-data');
    }
    public function showHistory()
    {
        return view('livewire.user.transactionhistory');
    }


//         $client = new Client();
// $headers = [
//   'Authorization' => 'Token 66f2e5c39ac8640f13cd888f161385b12f7e5e92',
//   'Content-Type' => 'application/json'
// ];
// $body = ' {"network": network_id,
//  "amount" :amount,
//  "mobile_number": phone,
//  "Ported_number":true,
//  "airtime_type":"VTU"}';
// $request = new Request('POST', 'https://www.drockno1datasub.com/api/topup/', $headers, $body);
// $res = $client->sendAsync($request)->wait();
// echo $res->getBody();


}
