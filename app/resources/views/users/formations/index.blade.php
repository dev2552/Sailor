@extends('layouts.main')

@section('content')
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title">Formations</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Formation</th>
							<th>Etat</th>
							<th>date de demmarage</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Lorem ipsum dolor sit amet.</td>
							<td><p class="badge badge-warning">not payed</p></td>
							<td>12/58/2013 25:00</td>
							<td>
								<button class="btn btn-primary">Voir la formation</button>
								<button class="btn btn-primary">payement</button>
								<button class="btn btn-danger">pas intéressé</button>

							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection