@extends('layouts.app')

@section('body-id', 'fonts')

@section('content')

<div id="controls">
	<div class="container">
		<h2>Controls</h2>

		<form>
		<div class="row">
			<div class="col-md-4">
				<select class="fonts-card-title-family form-control">
					<option>Select Card Title Font</option>
					@foreach($fontlist->items as $font)
						<option>{{ $font->family }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<select class="fonts-card-text-family form-control">
					<option>Select Card Text Font</option>
					@foreach($fontlist->items as $font)
						<option>{{ $font->family }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-4">
				<select class="fonts-button-text-family form-control">
					<option>Select Button Text Font</option>
					@foreach($fontlist->items as $font)
						<option>{{ $font->family }}</option>
					@endforeach
				</select>
			</div>
		</div>
		</form>
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