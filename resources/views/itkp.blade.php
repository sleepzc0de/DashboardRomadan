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
				    		<div class="card border border-danger">
								<div class="card-header bg-danger text-white">
									<h1 class="mb-0">Indeks Tata Kelola Pengadaan (ITKP)</h1>
								</div>

								<div class="card-body">
									<iframe class="w-100" height="450" src="https://lookerstudio.google.com/embed/reporting/0c5c9906-63fb-4361-b954-8f650b8e47c6/page/p_rb82c01i1c" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
				    </div>
				<!-- /content area -->

@endsection
