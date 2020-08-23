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
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
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
                                                <th>Claim No</th>
                                                <th>Photos</th>               
                                                <th>Policy Name</th>
                                                <th>Note</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Claim No</th>
                                                <th>Photos</th>               
                                                <th>Policy Name</th>
                                                <th>Note</th>
                                                <th>Date</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        	{{-- @foreach ($claims as $claim) 
                                        	<tr>
                                        		<td>{{$claim->claimno}}</td>
                                        		<td>{{$claim->photos}}</td>
                                        		<td>{{$claim->policy_id}}</td>
                                        		<td>{{$claim->note}}</td>
                                        		<td>{{$claim->claim_date}}</td>
                                        		<td><a href="" class="btn btn-primary">Accept</a>
                                        			<a href="" class="btn btn-danger">Cancel</a>
                                        		</td>
                                        	</tr>
                                        	@endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

@endsection
