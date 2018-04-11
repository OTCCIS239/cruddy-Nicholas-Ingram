 @extends('layouts.app')

 @section('content')
     <div style="width:100vw">
         <div style="width:25%; margin:100px auto">
             <form>
                 <h2 style="border-bottom: 1px solid rgba(78, 78, 78, 0.65);margin:20px 0;padding: 0 0 20px 0;text-align: center">Product Creation</h2>
                 <h4>Category</h3>
                 <p>{{$category}}</p>
                 <div class="form-group">
                     <label for="product-id">Product ID</label>
                     <input type="text" id="product-ID" value="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="product-name">Product Name</label>
                     <input type="text" id="product-name" value="" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="product-description">Product Description</label>
                     <input type="text" id="product-description" value="" class="form-control">
                 </div>
                 <button class="btn btn-primary" type="submit">Create Product</button>
             </form>
         </div>
     </div>
 @endsection
