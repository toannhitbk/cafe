@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Login Page</div>

				<div class="panel-body">
					<form action="{{route('login')}}" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label>Username:</label>
							<input type="text" name="username"/>
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="password" name="password"/>
						</div>
						<div class="form-group">
							<input type="submit" value="Login"/>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
