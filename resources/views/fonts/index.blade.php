@extends('layouts.app')

@section('body-id', 'fonts')

@section('footer-script')
	@if ($titleFont != null && $textFont != null && $buttonFont != null)
		<script type="text/javascript">
			$( document ).ready(function() {
				WebFont.load({
					google: {
						families: [ {{ $titleFont }}, {{ $textFont }}, {{$buttonFont }} ]
					}
				});
			});
		</script>
		<style type="text/css">
		    .wombos-cs .card-title {
		    	font-family: {{ $titleFont }};
		    }

		    .wombos-cs .card-text, .wombos-cs li {
		    	font-family: {{ $textFont }};
		    }

		    .wombos-cs .button-text {
		    	font-family: {{ $buttonFont }};
		    }
		</style>
	@endif
@endsection

@section('content')

<div id="controls">
	<div class="container">
		<h2>Controls</h2>

		<form>
		<div class="row">
			<div class="col-md-3">
				<select class="fonts-card-title-family form-control">
					<option>Select Card Title Font</option>
					@foreach($fontlist->items as $font)
						<option @if ($font->family == $titleFont) selected="selected" @endif data-category="{{ $font->category }}">{{ $font->family }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-3">
				<select class="fonts-card-text-family form-control">
					<option>Select Card Text Font</option>
					@foreach($fontlist->items as $font)
						<option @if ($font->family == $textFont) selected="selected" @endif data-category="{{ $font->category }}">{{ $font->family }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-3">
				<select class="fonts-button-text-family form-control">
					<option>Select Button Text Font</option>
					@foreach($fontlist->items as $font)
						<option @if ($font->family == $buttonFont) selected="selected" @endif data-category="{{ $font->category }}">{{ $font->family }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-md-3">
				<select class="font-popular-combos form-control">
					<option>Select Popular Combos</option>
					@foreach($popularCombos as $combo) 
						<option data-title="{{ $combo['fonts']['title'] }}" data-text="{{ $combo['fonts']['text'] }}"  data-button="{{ $combo['fonts']['button'] }}" >{{ $combo['name'] }}</option>
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