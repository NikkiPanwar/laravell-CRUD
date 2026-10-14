<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<title>product</title>
</head>
<body>
	<h1>Product name</h1>
	<div>index</div>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				@if(session()->has('success'))
				<div>
			{{session('success')}}
				</div>
				@endif
			</div>
			<div class="col-md-6">
				<a href="product/create">Add</a>
				<table border ="1">
					<tr>
				<th>Name</th>
				<th>Qty</th>
				<th>Price</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		@foreach($products as $product)
		<tr>
			
		<td>{{$product->name}}</td>
			<td>{{$product->qty}}</td>
			<td>{{$product->price}}</td>
			<td>{{$product->description}}</td>
			<td>
	    <a href="{{ route('product.edit',['product' => $product->id]) }}" class="btn btn-warning">Edit</a></td>
		<td>
			<form action = "{{ route('product.destory' , ['product'=>$product])}}" method = "post">
				@csrf 
				@method('delete')
				<input type="submit" value="Delete" />
</td>
</tr>
@endforeach
		</table>
		</div>
</div>
</div>
</body>
</html>
