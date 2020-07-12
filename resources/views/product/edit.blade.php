@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p class="float-left">Edit Product</p>
			<p class="float-right"><a href="{{url('product')}}" class="btn btn-primary">back</a></p>
		</div>
	</div>

	<div class="row">
      <div class="col-md-12">
      	<form class="form-horizontal" method="post" action="{{url('product/'.$data->id)}}">
      		@csrf
      		@method('PUT')
			<div class="form-group">
				<label class="control-label col-sm-4" for="name">Product Name</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="product_name" value="{{$data->product_name}}">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="code">Product Code</label>
				<div class="col-sm-8">          
					<input type="text" class="form-control" id="code" placeholder="Enter Product Code" name="product_code" value="{{$data->product_code}}">
				</div>
			</div>

			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" value="update" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
      </div>		
	</div>
</div>
@endsection