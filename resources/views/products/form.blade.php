<h4>Category</h3>
<p>{{$category}}</p>
<div class="form-group">
    <label for="name">Product Name</label>
    <input type="text" name="name" value="{{@$product ? $product->name : ''}}" class="form-control">
</div>
<div class="form-group">
    <label for="description">Product Description</label>
    <textarea name="description" class="form-control" rows="3" form="editForm">{{@$product->description ? $product->description : ''}}</textarea>
</div>
<div class="form-group">
    <label for="condition">Product Condition</label>
    <select name="condition" class="form-control">
        <option value="New" @if(strtolower(@$product ? $product['condition'] : '') == 'new') selected @endif>New</option>
        <option value="Used - Like New" @if(strtolower(@$product ? $product['condition'] : '') == 'used - like new') selected @endif>Used - Like New</option>
        <option value="Used - Very Good" @if(strtolower(@$product ? $product['condition'] : '') == 'used - very good') selected @endif>Used - Very Good</option>
        <option value="Used - Good" @if(strtolower(@$product ? $product['condition'] : '') == 'used - good') selected @endif>Used - Good</option>
        <option value="Used - Acceptable" @if(strtolower(@$product ? $product['condition'] : '') == 'used - acceptable') selected @endif>Used - Acceptable</option>
    </select>
</div>
<?php if($category != 'consoles'): ?>
    <div class="form-group">
        <label for="console_for">Console</label>
        <input type="text" name="console_for" value="{{@$product ? $product->console_for : ''}}" class="form-control">
    </div>
<?php endif; ?>
<div class="form-group">
    <label for="price">Product Price</label>
    <input type="float" name="price" class="form-control" value="{{@$product ? $product->price : ''}}">
</div>
