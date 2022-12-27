<div>


    <div>
        <div class="card mb-4 mt-4 py-4 px-4">
            <table class="table " id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>API Amount</th>
                        <th>Selling Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        @foreach($priceList as $price)
            <tr>
                <td>{{ $price->id }}</td>
                <td>{{ $price->apiAmount }}</td>
                <td>{{ $price->abgoldAmount }}</td>

            </tr>
            @endforeach

                </tbody>
            </table>


        </div>

    </div>

    {{-- Success is as dangerous as failure. --}}
</div>
