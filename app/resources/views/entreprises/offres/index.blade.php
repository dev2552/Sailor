@extends('layouts.main')



@section('content')
<style>
	.create
	{
		font-size: 1rem;
	}
</style>
	<div class="row">
		<div class="col-md-12">
			<button class="btn btn-primary">create new offre</button>
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
									<th>Date creation</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>dfkjdfkdk fdfkjdkfj dkjfkdf</td>
									<td>25/25/2025 25:12</td>
									<td><p class="badge badge-success">Active</p></td>
									<td>
										<button class="btn btn-primary">Voir</button>
										<button class="btn btn-danger">Delete</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection