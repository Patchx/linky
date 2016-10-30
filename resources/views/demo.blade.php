
@extends('layouts.demo-layout')

@section('content')

<div>
	<div class="top-banner">
		<div class="banner-title">
			<a href="#" class="pull-left banner-button fadeOut">
				<span class="glyphicon glyphicon-list"></span>
			</a>
			<a href="/">Linky</a>
			<a href="#" class="pull-right banner-button fadeOut">
				<span class="glyphicon glyphicon-comment"></span>
			</a>
		</div>
	</div>
	<div class="banner-spacer">
		<div class="banner-title">Linky</div>
	</div>
</div>

<div class="scroll-wrapper">
	<iframe style="width:100%; height:90vh" src="https://www.hotels.com/hotel/details.html?pa=4&tab=description&hotel-id=346635&q-room-0-adults=2&ZSX=0&SYE=3&q-room-0-children=0"></iframe>
</div>

<script>
	$('.banner-title .fadeOut').on('click',function(){
		$('iframe').fadeTo("slow", 0.33);
	});
</script>

@endsection