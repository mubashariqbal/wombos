@extends('layouts.app')

@section('body-id', 'fonts')

@section('content')


<div id="controls">
	<div class="container">
		<h2>Controls</h2>

		<a id="tester" class="btn btn-default" href="">Click me</a>
	</div>
</div>

<div id="light-cs" class="wombos-cs">
	<div class="container">
		<h2>Light Color Scheme</h2>

		<div class="row">
			@include('fonts._card')
		</div>
	</div>
</div>

<div id="dark-cs" class="wombos-cs">
	<div class="container">
		<h2>Dark Color Scheme</h2>

		<div class="row">
			@include('fonts._card', ['inverse' => true])
		</div>

	</div>
</div>


@endsection