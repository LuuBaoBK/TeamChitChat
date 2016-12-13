@extends('template.core')
@section('CSS')
	<link href="{{ asset('/css/front/login.css') }}" rel="stylesheet">
@stop

@section('content')
	<div class="login">
		<div class="login_form col-xs-6 col-xs-offset-3" style="border-style: solid; border-width: 1px; border-color: black;">
		<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>aa
			{{ Form::open(['route' => 'login', 'method' => 'POST']) }}
			<div class="form-group">
				<h3 class="text-center"><b>{{ trans('messages.login_form_name') }}</b></h3>
				@if($errors->has('login_fails'))
					<p class="text-danger text-center">{{ $errors->first('login_fails') }}</p>
				@endif
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
				{{ Form::submit(trans('messages.login'), ['class' => 'btn btn-block btn-primary']) }}
			</div>
			<div class="form-group">
				{{ Form::button(trans('messages.forgot_password'), ['class' => 'btn btn-block btn-danger']) }}
			</div>
			<hr>
			<h4 class="text-center"><b>{{ trans('messages.login_via') }}</b></h4>
			<div class="form-group">
				<div class="col-md-6"  style="margin-top:2px">
					<a href="#" class="login-via btn btn-primary btn-block" role="button"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
				</div>
				<div class="col-md-6"  style="margin-top:2px">
					<a href="#" class="login-via btn btn-danger btn-block" role="button"><i class="fa fa-google-plus" aria-hidden="true"></i> google-plus</a>
				</div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
@endsection
@section('javascript')
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1340837419280281',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@endsection