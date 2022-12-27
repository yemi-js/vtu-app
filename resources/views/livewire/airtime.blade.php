<div>

    @if (session()->has('message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h5 class="alert-heading">Error</h5>

            {{ session('message') }}
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif


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
            @error('network_id')
                <span class="text-sm text-danger">{{ $message }}</span>
            @enderror

        </div>
        <!-- Form Row-->
        <div class="row  mb-4">
            <!-- Form Group (first name)-->
            <div class="col-md-8 mb-4">
                <label class="text-md fw-700 mb-1" for="inputFirstName">Amount</label>
                <input class="form-control" type="text" wire:model='amount'>
                @error('amount')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="col-md-8">
                <label class="text-md fw-700 mb-1" for="inputFirstName">Phone Number</label>
                <input class="form-control" type="text" wire:model='phone'>
                @error('phone')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror

            </div>
            <!-- Form Group (last name)-->

        </div>

        <button class="btn btn-primary px-4 py-2 mb-4" type="submit">Buy Airtime ></button>
    </form>
</div>
