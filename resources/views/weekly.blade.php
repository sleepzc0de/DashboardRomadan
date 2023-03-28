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
				    		<div class="card border border-purple">
								<div class="card-header bg-purple text-white">
									<h1 class="mb-0">Weekly Report</h1>
								</div>

								<div class="card-body">
									<iframe class="w-100" height="240" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSPouFKELrmpY4j867yN_Mllm3UiswTQP6xjPD5D0B5XbPyK4i2jwGWEu0XwVMNOcfaZKDSsytVlV5a/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe></iframe>
								</div>
							</div>
				    	</div>
                                    <a href="https://kemenkeu.sharepoint.com/:p:/s/ROMADANPASTI-WeeklyReportBiroMadan/EcNdkwMPI4NEvRZfPTKPgFMBgm3-MmWM4cMjohw3hEKB9g?e=dNcgLA" target="_blank" class="btn btn-dark border-dark"><i class="ph-graph me-2"></i>Weekly Report</a>
					</div>
                </div>
				<!-- /content area -->

@endsection
