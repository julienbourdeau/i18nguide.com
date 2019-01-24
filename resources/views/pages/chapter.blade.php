@extends('layouts.base')

@section('content')

	<div class="container flex">

	@section('sidebar')
		<div id="sidebar" class="w-1/4">
			{!! $toc !!}
		</div>
	@show

	@section('chapter')
		<div id="chapter" class="w-3/4">
			{!! $content !!}
		</div>
	@show

	</div>

@endsection
