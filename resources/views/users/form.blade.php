<h4>Category</h3>
<p><?= $category ?></p>
<div class="form-group">
    <label for="name">User Name</label>
    <input type="text" name="name" value="{{@$user ? $user->name : ''}}" class="form-control">
</div>
<div class="form-group">
    <label for="shipping_address">Address 1</label>
    <input type="text" name="shipping_address" value="{{@$user ? $user->shipping_address : ''}}" class="form-control">
</div>
<div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" name="email" value="{{@$user ? $user->email : ''}}" class="form-control">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" value="{{@$user ? $user->password : ''}}" class="form-control">
</div>
