<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserTransactionsTable extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                <div class="card mb-4 mt-4 py-4 px-4">
                <table class="table " id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Transaction Type</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            @foreach (Auth::user()->walletTransactions as $transaction)
                                <td>{{ $transaction->created_at }}</td>

                                @if ($transaction->confirmed == '1')
                                    <td><span class="badge bg-success">success</span></td>
                                @endif

                                @if ($transaction->type == 'deposit')
                                    <td><h5><span class="badge bg-black">Deposit</span></h5></td>
                                      @else<td><h5><span class="badge bg-danger">Debit</span></h5></td>
                                @endif

                                <td><h2 class="fw-600 text-lg">₦{{ $transaction->amount }}.00</h2></td>


                        </tr>

                        @endforeach

                    </tbody>
                </table>


            </div>

            </div>
        blade;
    }
}
