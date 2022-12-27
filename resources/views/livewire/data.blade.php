<div>

    @if (session()->has('message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h5 class="alert-heading">Error</h5>

            {{ session('message') }}
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif


    <form wire:submit.prevent="data">
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

        <div class="row  mb-4">

            <div class="col-md-8 mb-4">

                @if ($network_id == '1')
                    <p>MTN Data</p>
                    <select class="form-control" id="exampleFormControlSelect1" required="required" name="data-mtn"
                        wire:model="planid">

                        <option value="" selected="selected" required="required">Select MTN DATA</option>

                        <option class="dropdown-item" value="213">500MB - 30days</option>

                        <option class="dropdown-item" value="209">1.0GB - 30days</option>

                        <option class="dropdown-item" value="8">2.0GB - 30days</option>

                        <option class="dropdown-item" value="217">3.0GB - 30days</option>

                        <option class="dropdown-item" value="11">5.0GB - 30days</option>

                        <option class="dropdown-item" value="210">10.0GB - 30days</option>

                    </select>
                @endif

                @if ($network_id == '4')
                    <p>Airtel Data</p>
                    <select class="form-control" id="exampleFormControlSelect1" required="required" name="data-airte;"
                        wire:model="planid">

                        <option value="" selected="selected" required="required">Select AIRTEL DATA</option>

                        <option class="dropdown-item" value="240">500MB - 30days</option>

                        <option class="dropdown-item" value="241">1.0GB - 30days</option>

                        <option class="dropdown-item" value="242">2.0GB - 30days</option>

                        <option class="dropdown-item" value="243">5.0GB - 30days</option>

                        <option class="dropdown-item" value="244">10.0GB - 30days</option>

                        <option class="dropdown-item" value="245">15.0GB - 30days</option>

                    </select>
                @endif

                @if ($network_id == '2')
                    <p>Glo Data</p>
                    <select class="form-control" id="exampleFormControlSelect1" required="required" name="data-airte;"
                        wire:model="planid">

                        <option value="" selected="selected" required="required">Select GLO DATA</option>

                        <option class='dropdown-item' value='194'>1.8 GB - 30 days</option>
                        <option class='dropdown-item' value='195'>3.9 GB - 30 days</option>
                        <option class='dropdown-item' value='196'>7.1 GB - 30 days</option>
                        <option class='dropdown-item' value='197'>9.2 GB - 30 days</option>
                        <option class='dropdown-item' value='198'>10.8 GB - 30 days</option>
                        <option class='dropdown-item' value='199'>14.0 GB - 30 days</option>
                        <option class='dropdown-item' value='200'>18.0 GB - 30 days</option>
                        <option class='dropdown-item' value='201'>24.0 GB - 30 days</option>
                        <option class='dropdown-item' value='202'>29.5 GB - 30 days</option>
                        <option class='dropdown-item' value='203'>50.0 GB - 30 days</option>
                        <option class='dropdown-item' value='204'>93.0 GB - 30 days</option>
                        <option class='dropdown-item' value='205'>119.0 GB - 30 days</option>
                        <option class='dropdown-item' value='206'>138.0 GB - 30 days</option>

                    </select>
                @endif

                @if ($network_id == '3')
                    <p>9MOBILE Data</p>
                    <select class="form-control" id="exampleFormControlSelect1" required="required"
                        name="data-airte;" wire:model="planid">

                        <option value="" selected="selected" required="required">Select 9MOBILE DATA</option>

                        <option class='dropdown-item' value='182'>500.0 MB - 30 days</option>
                        <option class='dropdown-item' value='183'>1.5 GB - 30 days</option>
                        <option class='dropdown-item' value='184'>2.0 GB - 30 days</option>
                        <option class='dropdown-item' value='185'>3.0 GB - 30 days</option>
                        <option class='dropdown-item' value='186'>4.5 GB - 30 days</option>
                        <option class='dropdown-item' value='187'>11.0 GB - 30 days</option>
                        <option class='dropdown-item' value='188'>15.0 GB - 30 days</option>
                        <option class='dropdown-item' value='189'>40.0 GB - 30 days</option>
                        <option class='dropdown-item' value='190'>75.0 GB - 30 days</option>

                    </select>
                @endif

            </div>

            <h1>Your id is {{ $planid }} </h1>
        </div>



        <!-- Form Row-->
        <div class="row  mb-4">
            <!-- Form Group (first class="dropdown-item" name)-->
            <div class="col-md-8 mb-4">
                <label class="text-md fw-700 mb-1" for="inputFirstName">Amount</label>
                <input class="form-control" type="text" wire:model='amount'disabled>
                @error('amount')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="col-md-8">
                <label class="text-md fw-700 mb-1" for="inputFirstName">Phone Number</label>
                <input class="form-control" type="text" wire:model='phoneNo'>
                @error('phoneNo')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror

            </div>
            <!-- Form Group (last name)-->

        </div>

        <button class="btn btn-primary px-4 py-2 mb-4" type="submit">Buy Data ></button>
    </form>
</div>
