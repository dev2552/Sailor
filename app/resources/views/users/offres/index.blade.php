@extends('layouts.main')

@section('content')
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title">Offres</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Offre</th>
							<th>Etat</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Lorem ipsum dolor sit amet.</td>
							<td><p class="badge badge-warning">In review</p></td>
							<td>
								<button class="btn btn-primary">Voir l'offre</button>
								<button class="btn btn-danger">pas intéressé</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection