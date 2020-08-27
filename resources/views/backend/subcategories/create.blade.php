@extends('backendtemplate')

@section('content')

	<div class="container-fluid">
		<h2>Subcategory Create (Form)</h2>

		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form method="POST" action="{{route('subcategories.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
						<label>Photo</label>
						<input type="file" name="photo" class="form-control-file">
				</div>


				<div class="form-group">
					<label>Price</label>
					<input type="number" name="price" class="form-control">
				</div>

								
				<div class="form-group">
					<label>Category</label>
						<select name="category" class="form-control">
							<optgroup label="Choose Category">
							@foreach($categories as $category)

							<option value="{{$category->id}}">
								{{$category->name}}
							</option>
							@endforeach
							</optgroup>						
						
						</select>
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" name="description"></textarea>
					
				</div>

				

				<input type="submit" value="Insert" class="btn btn-primary">
				
			</form>			
		</div>

	</div>

	</div>

@endsection
