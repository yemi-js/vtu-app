<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\price;
use Livewire\Component;

class Prices extends Component
{

    public $priceList;

    public function render()
    {
        $this->priceList = price::all();
        return view('livewire.prices');
    }
}
