@extends('layouts.app')

{{-- set title --}}
@section('title', 'Nurse')

@section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">

		{{-- error --}}
		@if ($errors->any())
		<div class="alert bg-danger alert-dismissible mb-2" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>

			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		{{-- breadcumb --}}
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
				<h3 class="content-header-title mb-0 d-inline-block">Nurse</h3>
				<div class="row breadcrumbs-top d-inline-block">
					<div class="breadcrumb-wrapper col-12">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('backsite.dashboard.index') }}">Dashboard</a>
							</li>
							<li class="breadcrumb-item active">Nurse</li>
						</ol>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- END: Content-->

@endsection