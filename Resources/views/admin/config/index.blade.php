@extends('adm_theme::layouts.app', ['id_dashboard' => 1])
@section('page_heading','settings')
@section('content')
<x-flash-message />

{{--
<div class="nav-tabs-custom">
	{!! settings::topToolbar() !!}
	<div class="tab-content">
	</div>
</div>
--}}
<div class="row">
	<div class="col-md-12">
		<div class="nav-tabs-custom">
			@include($view.'.nav')
			{{--  settings::topToolbar() --}}
			<div class="tab-content">
				 @include($view.'.body')
				<br style="clear:both" />
			</div>
		</div>
	</div>
</div>
@endsection
