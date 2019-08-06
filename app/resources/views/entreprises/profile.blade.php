@extends('layouts.main')



@section('content')
	<style>
		.card-avatar
		{
			text-align: center;
		}
		.entrp
		{
			width: 10vw;
		}
		.bold
		{
			font-weight: bold;
		}
		.mt-5
		{
			margin-top:2vh;
		}
		.material-icons
		{
			cursor: pointer;
		}
	</style>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="card-avatar">
						<img class="entrp" src="{{ asset('img/entrp.jpg') }}">
						<p class="bold mt-5">Info-pro2 <i class="material-icons">create</i></p>
					</div>
					<div class="alert alert-default">
						<h4>Description <i class="material-icons">create</i></h4>
						<hr>
						<p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus lorem fringilla, finibus sem quis, finibus dui. Pellentesque sagittis eros nec laoreet tempor. Nullam ac sodales nulla. Etiam facilisis orci ac orci imperdiet, id suscipit urna convallis. Fusce vulputate condimentum vulputate. Vivamus id accumsan ipsum, id ornare turpis. Sed bibendum mi a dolor elementum sagittis. Curabitur congue nunc nibh, at rutrum magna mattis a. Ut vel magna nibh. Duis mattis nec neque vel posuere. Phasellus eu maximus libero. Vivamus id semper mauris, sit amet suscipit diam. Cras nisi nibh, tempus nec leo ut, feugiat molestie urna. Etiam at malesuada turpis. Quisque vel congue ipsum. Aliquam a libero velit.</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus lorem fringilla, finibus sem quis, finibus dui. Pellentesque sagittis eros nec laoreet tempor. Nullam ac sodales nulla. Etiam facilisis orci ac orci imperdiet, id suscipit urna convallis. Fusce vulputate condimentum vulputate. Vivamus id accumsan ipsum, id ornare turpis. Sed bibendum mi a dolor elementum sagittis. Curabitur congue nunc nibh, at rutrum magna mattis a. Ut vel magna nibh. Duis mattis nec neque vel posuere. Phasellus eu maximus libero. Vivamus id semper mauris, sit amet suscipit diam. Cras nisi nibh, tempus nec leo ut, feugiat molestie urna. Etiam at malesuada turpis. Quisque vel congue ipsum. Aliquam a libero velit.</p>

						</p>
					</div>
					<button class="btn btn-primary">Voir votre offres</button>
					<button class="btn btn-primary">Voir votre formations</button>
				</div>
			</div>
		</div>
	</div>
@endsection