<div class="container">
	<div class="row">
<div class="col-md-6"></div>
<div class="col-md-6">


<h2>form</h2>

	@if($errors->any())
	<ul>
	
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>

	@endforeach
	</ul>
	@endif


<form method="post" action = "{{route('product.store')}}">
@csrf 

<label>Name</label>
<input type="text" name="name" class="form-control">

<label>Qty </label>
<input type="number" name="qty" class="form-control">

<label>Price</label>
<input type="number" name="price" class="form-control">

<label>Description</label>
<input type="text" name="description" class="form-control">

<button class="btn btn-success" type="submit">ADD</button>
</form>

</div>

	</div>
</div>
