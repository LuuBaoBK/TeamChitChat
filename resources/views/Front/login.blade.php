@extends('template.core')
@section('CSS')
	<link href="{{ asset('/css/front/login.css') }}" rel="stylesheet">
@stop

@section('content')
	<div class="login">
		<div class="login_form col-lg-6 col-lg-offset-3">
			{{ Form::open(['route' => 'login', 'method' => 'POST']) }}
			<div class="form-group">
				<h3 class="text-center"><b>{{ trans('messages.LoginFormName') }}</b></h3>
			</div>
			<div class="form-group has-feedback has-error @if($errors->has('email')) has-error @endif">
				{{ Form::text('email','',['class' => 'form-control text-center', 'placeholder' => 'Email']) }}
				<div class="form-control-feedback">
				@if($errors->has('email'))
					<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> 
				@endif
  				</div>
				@foreach($errors->get('email') as $msg)
					<p class="text-danger">{{ $msg }}</p>
				@endforeach
			</div>
			<div class="form-group @if($errors->has('password')) has-error @endif">
				{{ Form::password('password',['class' => 'form-control text-center', 'placeholder' => 'Password']) }}
				@foreach($errors->get('password') as $msg)
					<p class="text-danger">{{ $msg }}</p>
				@endforeach
			</div>
			<div class="form-group">
				{{ Form::submit(trans('messages.Login'), ['class' => 'btn btn-block btn-primary']) }}
			</div>
			<div class="form-group">
				{{ Form::button(trans('messages.ForgotPassword'), ['class' => 'btn btn-block btn-danger']) }}
			</div>
			<div class="form-group">
				<div class="col-lg-4">
					<a href="#" class="btn btn-primary btn-block" role="button"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
				</div>
				<div class="col-lg-4">
					<a href="#" class="btn btn-primary btn-block" role="button"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
				</div>
				<div class="col-lg-4">
					<a href="#" class="btn btn-primary btn-block" role="button"><i class="fa fa-google-plus" aria-hidden="true"></i> google-plus</a>
				</div>
			</div>
			

			{{ Form::close() }}
		</div>
	</div>
@endsection