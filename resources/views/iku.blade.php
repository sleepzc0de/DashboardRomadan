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
				    		<div class="card border border-primary">
								<div class="card-header bg-primary text-white">
									<h1 class="mb-0">IKU</h1>
								</div>

								{{-- <div class="card-body"> --}}
									<iframe class="w-100" height="450" src="http://iku.romadan.id/" frameborder="0" style="border:0" allowfullscreen></iframe>
								{{-- </div> --}}
							</div>
				    	</div>
					</div>
                </div>
				<!-- /content area -->

@endsection
