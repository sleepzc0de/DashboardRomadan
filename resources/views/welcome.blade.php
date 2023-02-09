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
									<iframe class="w-100" height="450" src="https://lookerstudio.google.com/embed/reporting/465dcbc8-d600-40d6-be68-63b6e31b8560/page/p_d225045h1c" frameborder="0" style="border:0;" allowfullscreen></iframe>
								</div>
							</div>
				    	</div>
					<div class="col-lg-12">
				    		<div class="card border border-info">
								<div class="card-header bg-info text-white">
									<h1 class="mb-0">Indeks Pengelolaan Aset (IPA)</h1>
								</div>

								<div class="card-body">
									<iframe class="w-100" height="450" src="https://lookerstudio.google.com/embed/reporting/465dcbc8-d600-40d6-be68-63b6e31b8560/page/p_d225045h1c" frameborder="0" style="border:0;" allowfullscreen></iframe>
								</div>
							</div>
				    	</div>

						 <div class="col-lg-12">
                                    <a href="https://ebmn.kemenkeu.go.id/dashboard" target="_blank">
                                    <!-- Members online -->
									<div class="card bg-purple text-white text-center">
										<div class="card-body">
											<div>
												<h1 class="mb-0">DASHBOARD BMN</h1>
						                	</div>
										</div>

										<div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
									</div>
									<!-- /members online -->
                                    </a>
						</div>	

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

						<div class="col-lg-12">
                                    <a href="https://kemenkeu.sharepoint.com/:p:/s/ROMADANPASTI-WeeklyReportBiroMadan/EcNdkwMPI4NEvRZfPTKPgFMBgm3-MmWM4cMjohw3hEKB9g?e=dNcgLA" target="_blank">
                                    <!-- Members online -->
									<div class="card bg-pink text-white text-center">
										<div class="card-body">
											<div>
												<h1 class="mb-0">WEEKLY REPORT</h1>
						                	</div>
										</div>

										<div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
									</div>
									<!-- /members online -->
                                    </a>
						</div>	

				</div>
				<!-- /content area -->

@endsection
