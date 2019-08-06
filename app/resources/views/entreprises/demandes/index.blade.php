@extends('layouts.main')
@section('content')
<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title">demandes</h4>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Offre</th>
					<th>User</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>qnkdos</td>
					<td>msdkdk</td>
					<td>
						<button class="btn btn-primary">Voir profile</button>
						<button class="btn btn-primary">send msg to user</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection