@extends('template')

@section('contenu')
    <br>
	<div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-info">
			<div class="panel-heading">Envoi d'une photo</div>
			<div class="panel-body"> 
				@if(session()->has('error'))
					<div class="alert alert-danger">{!! session('error') !!}</div>
				@endif
				{{-- {!! Form::open(['url' => 'photo', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
					<div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
						{!! Form::file('image', ['class' => 'form-control']) !!}
						{!! $errors->first('image', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
				{!! Form::close() !!} --}}
				<form method="POST" action="{{ url('photo') }}" enctype="multipart/form-data">
					<input type="file" name="image">
					<input type="submit" name="Envoyer" class="btn btn-info pull-right">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>
		</div>
	</div>
@endsection