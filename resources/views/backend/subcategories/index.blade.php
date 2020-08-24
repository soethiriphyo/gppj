@extends('backendtemplate')
@section('content')

<div class="container-fluid my-2">
		<h2 class="d-inline-block">Subcategory List (Table)</h2>
		<a href="{{route('subcategories.create')}}" class="btn btn-success float-right">Add New Subcategory</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>NO</th>
					
					<th>Name</th>
					<th>Photo</th>
					<th>Price</th>
					<th>Frequency</th>
					
					{{-- <th>Category</th> --}}
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

				@php $i=1; @endphp
				@foreach($subcategories as $subcategory)
				<tr>
					<td>{{$i++}}</td>
				
					<td>{{$subcategory->name}}   
						  <a href="{{route('subcategories.show',$subcategory->id)}}">
							<span class="badge badge-primary badge-pill">Detail</span></td>
					<td><img src="{{asset($subcategory->photo)}}" width="100" height="100"></td>
					<td>{{$subcategory->price}}</td>
					<td>{{$subcategory->frequency}}</td>
					
					<td>
						

						<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>

						<form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						</form>
					
					</td>
					

					
				</tr>

				@endforeach
			</tbody>
		</table>

	</div>

@endsection