<h4>Category</h3>
<p>Order</p>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{@$order ? $order['name'] : ''}}" class="form-control">
</div>
<div class="form-group">
    <label for="address">Address 1</label>
    <input type="text" name="address" value="{{@$order ? $order['address'] : ''}}" class="form-control">
</div>
<div class="form-group">
    <label for="items_ordered">Product Names (Seperate with '|')</label>
    <input type="text" name="items_ordered" class="form-control" value="{{@$order ? $order['items_ordered'] : ''}}">
</div>
<div class="form-group">
    <label for="items_ordered_prices">Product Prices (Seperate with '|')</label>
    <input type="text" name="items_ordered_prices" value="{{@$order ? $order['items_ordered_prices'] : ''}}" class="form-control">
</div>
<div class="form-group">
    <label for="shipp_amount">Shipping Price</label>
    <input type="text" name="ship_amount" value="{{@$order ? $order['ship_amount'] : ''}}" class="form-control">
</div>
<div class="form-group">
    <label for="status">Shipping Status</label>
    <select name="status" class="form-control">
        <option value="Waiting for Shipment" @if(strtolower(@$order ? $order['status'] : '') == 'waiting for shipment') selected @endif>Waiting for Shipment</option>
        <option value="Shipped" @if(strtolower(@$order ? $order['status'] : '') == 'shipped') selected @endif>Shipped</option>
        <option value="Out for Delivery" @if(strtolower(@$order ? $order['status'] : '') == 'out for delivery') selected @endif>Out for Delivery</option>
        <option value="Delivered" @if(strtolower(@$order ? $order['status'] : '') == 'delivered') selected @endif>Delivered</option>
    </select>
</div>
<div class="form-group">
    <label for="ship_date">Ship Date</label>
    <input type="date" name="ship_date" value="{{@$order ? $order['ship_date'] : ''}}" class="form-control">
</div>
<div class="form-group">
    <label for="tax_amount">Tax Price</label>
    <input type="text" name="tax_amount" value="{{@$order ? $order['tax_amount'] : ''}}" class="form-control">
</div>
