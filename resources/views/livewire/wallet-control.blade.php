<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    {{-- YOur Balance is

    {{ Auth::user()->balance }} Naira

    <button wire:click='showWalletBalance'>Fund</button>

    This is your referal id - {{ Auth::user()->getReferralLink() }} --}}


    <form wire:submit.prevent="airtime">
        <label class="text-md mb-1">Select your network</label>
        <div class="mb-3 mt-2 d-flex justify-between gap-xl-4">

            <div class="form-check">
                <input class="form-check-input" id="groupSales" type="radio" name="network" wire:model="network_id"
                    value="1">
                <label class="form-check-label text-lg" for="groupSales">MTN</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="groupDevs" type="radio" name="network" wire:model="network_id"
                    value="4">
                <label class="form-check-label text-lg" for="groupDevs">AIRTEL</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="groupMarketing" type="radio" name="network"
                    wire:model="network_id" value="2">
                <label class="form-check-label text-lg" for="groupMarketing">GLO</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="groupManagers" type="radio" name="network" wire:model="network_id"
                    value="3">
                <label class="form-check-label text-lg" for="groupManagers">9MOBILE</label>
            </div>

        </div>
        <!-- Form Row-->
        <div class="row  mb-4">
            <!-- Form Group (first name)-->
            <div class="col-md-8 mb-4">
                <label class="medium mb-1" for="inputFirstName">Amount</label>
                <input class="form-control" type="text" wire:model='amount'>
            </div>

            <div class="col-md-8">
                <label class="medium mb-1" for="inputFirstName">Phone Number</label>
                <input class="form-control" type="text" wire:model='phone'>
            </div>
            <!-- Form Group (last name)-->

        </div>

        <button class="btn btn-primary" type="submit">Buy Airtime ></button>
    </form>

</div>
