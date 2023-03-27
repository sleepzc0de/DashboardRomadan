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
                                    <a href="{{url('ipa')}}">
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
                                    <a href="{{url('itkp')}}">
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
                                    <a href="https://ebmn.kemenkeu.go.id/dashboard" target="_blank">
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
                               <div class="col-lg-4">
                                    <a href="{{url('iku')}}">
                                    <!-- Members online -->
									<div class="card bg-primary text-white text-center">
										<div class="card-body">
											<div>
												<h1 class="mb-0">IKU</h1>
						                	</div>
										</div>

										<div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
									</div>
									<!-- /members online -->
                                    </a>
								</div>

								 <div class="col-lg-4">
                                    <a href="{{url('dams')}}">
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
                                    <a href="https://kemenkeu.sharepoint.com/:p:/s/ROMADANPASTI-WeeklyReportBiroMadan/EcNdkwMPI4NEvRZfPTKPgFMBgm3-MmWM4cMjohw3hEKB9g?e=dNcgLA" target="_blank">
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
