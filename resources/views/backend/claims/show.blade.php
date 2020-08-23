@extends('backendtemplate')

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
                                    			<th colspan="4" class="text-center"><h2>Insurance Management System</h2>
                                    				<p>No.123, Mahar Aung Myay Township, Mandalay. Ph-0998745621</p>
                                    			</th>
                                    		</tr>
                                    		<tr>
                                    			<th>Cashier:</th>
                                    			<td></td>
                                    			<th>Date:</th>
                                    			<td>{{-- {{$claim->claimdate}}</td --}}
                                    		</tr>
                                    		<tr>
                                    			<th>Voucher:</th>
                                    			<td>{{-- {{$claim->claimno}} --}}</td>
                                    			<th>Order Date:</th>
                                    			<td>{{-- {{$claim->claimdate}} --}}</td>
                                    		</tr>
                                    		<tr>
                                    			<th>Policy Name</th>
                                    			<th>Customer Name</th>
                                    			<th>Frequency</th>
                                    			<th>Amount</th>
                                    		</tr>
                                    		{{-- @foreach($claims as $claim)
                                    		<tr>
                                    			<td> {{$claim->name}}</td>
                                    			<td>{{$claim->user_id}}</td>
                                    			<td>{{$claim->freq}}</td>
                                    			<td>{{$claim->amount}}</td>
                                    		</tr>
                                    		@endforeach --}}
                                    		
                                    	</thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection
