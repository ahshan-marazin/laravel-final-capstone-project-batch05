<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body onload="window.print()">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Sales Invoice No {{ $sale->invoice_number }}</h1>
                    <h1>Sales Date {{ $sale->sale_date }}</h1>
                    <h1>Customer Name {{ $sale->customer->name }}</h1>
                    <h1>Total {{ $sale->sub_total }}</h1>
                    <h1>Final Discount {{ $sale->discount }}</h1>
                    <h1>Final Total {{ $sale->net_total }}</h1>
                </div>
            </div>
        </div>
    <table class="datatable table table-stripped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Selling Price</th>
                <th>Discount</th>
                <th>Final Total</th>
            </tr>
        </thead>
        @foreach ($sale->saleItems as $index=> $item)
            <tbody>
                <tr>
                    <td>{{ $index +1}}</td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->selling_price }}</td>
                    <td>{{ $item->discount }}</td>
                    <td>{{ $item->net_total }}</td>
                </tr>
            </tbody>
        @endforeach
    </table>


    <script>
        window.onafterprint = function() {
            window.location.href = "{{ route('sales.create') }}";
        };
    </script>
</body>

</html>