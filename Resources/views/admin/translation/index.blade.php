@extends('adm_theme::layouts.app')
@section('page_heading','trasnlations')
@section('content')
<x-flash-message />


@include($view.'.nav');

<table class="table">
@foreach($rows as $k=>$v)
<tr>
	<td>{{ $k }}</td>
	<td>{{ $v }}</td>
	<td><a class="btn btn-default" href="{{ route('settings.translation.lista.index',['namespace'=>$k]) }}"><i class="fa fa-eye"></i></a></td>
</tr>
@endforeach
</table>

@endsection
