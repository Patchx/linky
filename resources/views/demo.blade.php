
@extends('layouts.demo-layout')

@section('content')

<div>
	<div class="top-banner">
		<div class="banner-title">
			<a href="#" data-toggle="modal" data-target="#myModal" class="pull-left banner-button fadeOut">
				<span class="glyphicon glyphicon-list"></span>
			</a>
			<a href="/">Linky</a>
			<a href="#" data-toggle="modal" data-target="#myModal" class="pull-right banner-button fadeOut">
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

<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="modal-title" id="myModalLabel">Conversation: <span class="simple-font">Remm Hibiya</span></h1>
			</div>

			<div class="modal-body">
				<p><strong>Robert:</strong></p>
				<div class="well">We can take the train to the theatre from here. I always wanted to see a Kabuki show!</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default big-button" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary big-button"><span class="glyphicon glyphicon-plus"></span> Comment</button>
			</div>

		</div>
	</div>
</div>


@endsection