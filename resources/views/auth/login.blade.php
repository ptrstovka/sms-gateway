@section('title', 'Login')

@extends('auth.master')

@section('content')
	<div class="row">

		@include('admin.error')

		<div class="col-md-6">
			<h2 class="font-bold">Welcome to SMSgw</h2>

			<p>Before access to application you need to login first.</p>

		</div>
		<div class="col-md-6">
			<div class="ibox-content">

				{!! Form::open(['route' => 'login', 'method' => 'post', 'class' => 'm-t', 'id' => 'login-form']) !!}

				{{-- email field --}}
				<div class="form-group">
					{!! Form::text('email', null, [
						'class' => 'form-control',
						'placeholder' => 'Email',
						'required' => 'true'
					]) !!}
				</div>

				{{--  password field --}}
				<div class="form-group">
					{!! Form::password('password', [
						'class' => 'form-control',
						'placeholder' => 'Password',
						'required' => 'true'
					]) !!}
				</div>

				{{--  submit field --}}
				<div class="form-group">
					{!! Form::submit('Login', [
						'class' => 'btn btn-primary block full-width m-b'
					]) !!}
				</div>

				<a href="{{ route('reset.page')  }}">
					<small>Forgot password?</small>
				</a>

				<p class="text-muted text-center">
					<small>Don't have an account?</small>
				</p>
				<a class="btn btn-sm btn-white btn-block" href="{{ route('register.page') }}">Register</a>

				{!! Form::close() !!}

			</div>
		</div>
	</div>
@endsection

@section('scripts')
	@parent

	<script type="text/javascript">


		$('#login-form').validate({
			rules: {
				email: {
					email   : true,
					required: true
				},
				password: {
					password: true,
					required: true
				}
			}
		});

	</script>

@endsection