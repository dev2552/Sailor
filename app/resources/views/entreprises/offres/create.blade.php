@extends('layouts.main')

@section('content')
	<h4>Create new Offre</h4>
	<div class="row justify-content-md-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					
					<form>
					<div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" class="form-control">
                        </div>
					</div>

					<div class="form-group">
						<div class="container">
							<label>Description</label>
							<textarea id="editor"></textarea>
						</div>
					</div>

					<div class="form-group bmd-form-group">
						<div class="container">
							<label>Date debut</label>
							<input type="datetime-local" name="" class="form-control">
						</div>
					</div>

					<div class="form-group bmd-form-group">
						<div class="container">
							<label>Date fin</label>
							<input type="datetime-local" name="" class="form-control">
						</div>
					</div>
					<button class="btn btn-primary">Create</button>
					</form>
					
				</div>
		</div>
		
	</div>
@endsection

@section('scripts')
	<script>
		ClassicEditor.create(document.querySelector('#editor'));
	</script>
	 <script type="text/javascript">
          
                $('#datetimepicker1').datetimepicker();
            
        </script>
@endsection