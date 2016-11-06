
@extends('layouts.demo-layout')

@section('content')

<div>
	<div class="top-banner">
		<div class="banner-title">
			<a href="#" data-toggle="modal" data-target="#list-modal" class="pull-left banner-button fadeOut">
				<span class="glyphicon glyphicon-list"></span>
			</a>
			<a href="/">Linky</a>
			<a href="#" data-toggle="modal" data-target="#comments-modal" class="pull-right banner-button fadeOut">
				<span class="glyphicon glyphicon-comment"></span>
			</a>
		</div>
	</div>
	<div class="banner-spacer">
		<div class="banner-title">Linky</div>
	</div>
</div>

<div class="scroll-wrapper">
	<iframe name="main-iframe" style="width:100%; height:90vh" src="https://www.hotels.com/hotel/details.html?pa=4&tab=description&hotel-id=346635&q-room-0-adults=2&ZSX=0&SYE=3&q-room-0-children=0"></iframe>
</div>

<!-- Link List Modal -->

<div class="modal fade" id="list-modal" tabindex="-1" role="dialog" aria-labelledby="list-modal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="modal-title" id="myModalLabel">Links:</h1>
			</div>

			<div class="modal-body">
				<ol>
					<li><a target="main-iframe" class="list-link" href="https://www.hotels.com/hotel/details.html?pa=4&tab=description&hotel-id=346635&q-room-0-adults=2&ZSX=0&SYE=3&q-room-0-children=0">Remm Hibiya</a></li>
					<li><a target="main-iframe" class="list-link" href="http://en.japantravel.com/tokyo/sawanoya-ryokan/7735">Sawanoya Ryokan</a></li>
					<li><a target="main-iframe" class="list-link" href="#">Blogger's Linky</a></li>
					<li><a target="main-iframe" class="list-link" href="#">My Research Paper</a></li>
				</ol>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default big-button close-modal" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>

<!-- Comments Modal -->

<div class="modal fade" id="comments-modal" tabindex="-1" role="dialog" aria-labelledby="comments-modal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1 class="modal-title" id="myModalLabel">Conversation: <span class="simple-font">Remm Hibiya</span></h1>
			</div>

			<div class="modal-body">
				<p><strong>Robert:</strong></p>
				<div class="well">We can take the train to the theatre from here. I always wanted to see a Kabuki show!</div>

				<div class="new-comment">
					<hr>
					<input type="text" maxlength="100">
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default big-button" data-dismiss="modal">Close</button>
				<button type="button" id="new-comment-btn" class="btn btn-primary big-button"><span class="glyphicon glyphicon-plus"></span> Comment</button>
			</div>

		</div>
	</div>
</div>

<script>

	// ------------
	// -- Events --
	// ------------

	$('.list-link').on('click', function(){
		$('#list-modal').modal('hide');
	});

	$('#new-comment-btn').on('click', function(){
		$('.new-comment').show();
	});


</script>

@endsection