@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>Product List</p>
			<a href="{{url('product/create')}}" class="btn btn-primary">Add Product</a>
		</div>

		<div class="col-md-12">
			<table class="table table-hover">
				<tr>
					<th>sl</th>
					<th>Product Image</th>
					<th>Product Name </th>
					<th>Product Code</th>
					<th>Action</th>
				</tr>

				@foreach($product_list  as $key => $value)
				<tr>
					<td>{{$key + 1}}</td>
					<td><img style="height: 50px;width: 8s0px" src="{{URL::to('images/'.$value->product_image)}}"></td>
					<td>{{$value->product_name}}</td>
					<td>{{$value->product_code}}</td>
					<td>
						<a href="{{url('product/'.$value->id.'/edit')}}" class="btn btn-primary float-left">Edit</a>

						<form method="post" action="{{url('product/'.$value->id)}}">
							@csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
							
						</form>
						
					</td>
				</tr>
				@endforeach

				
				
			</table>
			
		</div>
	</div>
</div>
@endsection