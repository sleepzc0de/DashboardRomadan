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

                    	<!-- Quick stats boxes -->
							<div class="row">
								 <div class="col-lg-4">
                                    <a href="https://datastudio.google.com/reporting/465dcbc8-d600-40d6-be68-63b6e31b8560/page/p_d0kdf95h1c">
                                    <!-- Members online -->
									<div class="card bg-success text-white text-center">
										<div class="card-body">
											<div>
												<h1 class="mb-0">IPA</h1>
						                	</div>
										</div>

										<div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
									</div>
									<!-- /members online -->
                                    </a>
								</div>

                                <div class="col-lg-4">
                                    <a href="https://datastudio.google.com/u/0/reporting/0c5c9906-63fb-4361-b954-8f650b8e47c6/page/p_5iou69rlsc">
                                    <!-- Members online -->
									<div class="card bg-warning text-white text-center">
										<div class="card-body">
											<div>
												<h1 class="mb-0">ITKP</h1>
						                	</div>
										</div>

										<div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
									</div>
									<!-- /members online -->
                                    </a>
								</div>
                                <div class="col-lg-4">
                                    <a href="https://ebmn.kemenkeu.go.id/dashboard">
                                    <!-- Members online -->
									<div class="card bg-teal text-white text-center">
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
							</div>
                            <div class="row">
                                <div class="col-lg-2">
                                </div>

								 <div class="col-lg-4">
                                    <a href="https://datastudio.google.com/u/0/reporting/607f5c07-ef1e-4ec5-8cdd-7934c8991a0d/page/sn63C">
                                    <!-- Members online -->
									<div class="card bg-pink text-white text-center">
										<div class="card-body">
											<div>
												<h1 class="mb-0">DAMS</h1>
						                	</div>
										</div>

										<div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
									</div>
									<!-- /members online -->
                                    </a>
								</div>
                                
                                
                                <div class="col-lg-4">
                                    <a href="https://kemenkeu.sharepoint.com/:p:/s/ROMADANPASTI-WeeklyReportBiroMadan/EcNdkwMPI4NEvRZfPTKPgFMBgm3-MmWM4cMjohw3hEKB9g?e=dNcgLA">
                                    <!-- Members online -->
									<div class="card bg-purple text-white text-center">
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
							<!-- /quick stats boxes -->

				</div>
				<!-- /content area -->

@endsection
