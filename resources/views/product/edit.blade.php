<form method = 'POST' action= "{{ route('product.update' , ['product'=> $product->id]) }}"  >

@csrf 
	@method('put')
	<label>Name</label>
	<input type="text" name="name" class="form-control" value="{{$product->name}}">

	<label>Qty</label>
	<input type="number" name="qty" class="form-control" value="{{$product->qty}}">
 
	<label>Price</label>
	<input type="number" name="price" class="form-control" value="{{$product->price}}">

	<label>Description</label>
	<input type="text" name="description" class="form-control" value="{{$product->description}}">

	<input type="submit" value="edit" class="btn btn-warning">
</form>
