@extends('layouts.dashboard.master_layout')

@section('css')
@endsection


@section('script_atas')
<script src="{{asset('webromadan/be/js/jquery/jquery.min.js')}}"></script>
@endsection

@section('script_bawah')
@endsection


@section('content')


				<!-- Content area -->
				<div class="content">
					<div class="col-lg-12">
				    		<div class="card border border-warning">
								<div class="card-header bg-warning text-white">
									<h1 class="mb-0">DAMS</h1>
								</div>

								<div class="card-body">
									<iframe class="w-100" height="450" src="https://lookerstudio.google.com/embed/reporting/607f5c07-ef1e-4ec5-8cdd-7934c8991a0d/page/sn63C" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
				    	</div>
					</div>
                </div>
				<!-- /content area -->

@endsection
