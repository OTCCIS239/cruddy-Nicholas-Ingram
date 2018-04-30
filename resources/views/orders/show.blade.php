@extends('layouts.app')

@section('content')
    <div style="margin: 80px 500px">
        <div style="float:left;width: 60%">
            <h2 class="mb-4 pb-2" style="border-bottom: 1px solid rgba(83, 83, 83, 0.72);text-align: center">Order Description</h2>
            <h4>Order ID</h4>
            <p><?= $order['id'] ?></p>
            <h4>User Name</h4>
            <p><?= $order['name'] ?></p>
            <h4>User Address</h4>
            <p><?= $order['address'] ?></p>
            <h4>Status</h4>
            <p><?= $order['status'] ?></p>
            <h4>Order Summary</h4>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orderedItems as $index => $orderItem): ?>
                        <tr>
                            <td>{{$orderItem}}</td>
                            <td>$
                                <?php try{
                                    echo $orderedItemsPrice[$index];
                                } catch(Exception $e) {
                                    echo "0.00";
                                } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="pl-3 pt-5 pb-5" style="float:right;border-left:1px solid rgba(83, 83, 83, 0.72)">
            <h3>Price: ${{$totalPrice}}</h3>
            <p>Shipping: ${{$order['ship_amount']}}</p>
            <p>Tax: ${{$order['tax_amount']}}</p>
            <p>Total: ${{$totalPrice + $order['ship_amount'] + $order['tax_amount']}}</p>
            <form action="/orders/{{$order['id']}}" method="post">
                <input type="hidden" name="_method" value="delete">
                {{csrf_field()}}

                <button class="btn btn-danger">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection
