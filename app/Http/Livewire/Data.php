<?php

namespace App\Http\Livewire;
use App\Models\prices;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Data extends Component
{

    protected $price = prices::class;
    public $planid;
    public $network_id;
    public $phoneNo;
    public $amount;

    protected $rules = [
        'planid' => 'required',
        'phoneNo' => 'required',
        'network_id' => 'required',
        'amount' => 'required',
        ];

    public function __construct()
    {

    }
    public function render()
    {
        return view('livewire.data');

    }

    public function updatedPlanid() {


        $this->amount = DB::table('prices')
                            ->where('planid', '=', $this->planid)
                            ->first()
                            ->abgoldAmount;

    }

        public function data()
    {
        $this->validate();

        if (Auth::user()->balance < $this->amount) {
            session()->flash('message', 'You have insufficient funds to perform this transaction 😢');
        } else {
            $res = Http::withHeaders([
                'Authorization' => config('app.auth_key'),
                'Content-Type' => 'application/json',
                ])->post('https://www.drockno1datasub.com/api/topup/', [
                    "network"=>$this->network_id,
                    "amount" =>$this->planid,
                    "mobile_number"=>$this->phoneNo,
                    "Ported_number"=>true,
                    "airtime_type"=>"VTU"
            ]);

            if ($res->status()=='400') {
                 Auth::user()->withdraw($this->amount);
                 return redirect('/users/dashboard')->back()->with('message',
                 'Your Airtime Purchase Was Successful! 😉');

                } else {
                # code...
            }


        }

    }
}
