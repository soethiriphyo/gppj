@extends ('backendtemplate')

@section('content')

<main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Email</th>               
                                                <th>Phone</th>
                                                <th>Description</th>
                                                <th>Insurance Plans</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>User Name</th>
                                                <th>Email</th>               
                                                <th>Phone</th>
                                                <th>Description</th>
                                                <th>Insurance Plans</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        	@foreach ($claims as $claim) 
                                        	<tr>
                                        		
                                        		<td>{{$claim->user_id}}</td>
                                                <td>{{$claim->email}}</td>
                                        		<td>{{$claim->phone}}</td>
                                        		<td>{{$claim->description}}</td>
                                        		<td>{{$claim->subcategory_id}}</td>
                                        		<td><a href="" class="btn btn-primary">Accept</a>
                                        			<a href="" class="btn btn-danger">Cancel</a>
                                        		</td>
                                        	</tr>
                                        	@endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

@endsection
