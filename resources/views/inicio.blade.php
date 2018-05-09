@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-6 col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					Bienvenido
				</div>
			</div>
		</div>
		
		
		<div class="panel panel-default">
          <div class="panel-body">
              Bienvenido {{Auth::user()->nombre}}
              </div>
        </div>
	</div>
</div>
@endsection
