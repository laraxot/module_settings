@extends('adm_theme::layouts.app')
@section('page_heading',$namespace.'::'.$listum)
@section('content')
@include('theme::includes.flash')


@include($view.'.nav')
{!! Form::bsOpen([],'update') !!}
@foreach($rows as $k=>$v)
	@if(!is_array($v))
	{{ Form::bsText($k,$v,['label'=>$k]) }}
	@else
	@include($view.'.item',['rows'=>$v,'sub'=>$k])
	@endif
@endforeach
{!! Form::bsSubmit() !!}
{!! Form::close() !!}
{{--
<br class="clearfix"/>
@foreach($rows as $k=>$v)
	@if(!is_array($v))

	@else
	@php
		$params['listum']=$listum.'.'.$k;
	@endphp
	<a href="{{ route('settings.translation.lista.edit',$params) }}" class="btn btn-default">{{ $k }}</a>
	<br class="clearfix"/>
	@endif
@endforeach
--}}
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<hr/><hr/><hr/><hr/>


@endsection