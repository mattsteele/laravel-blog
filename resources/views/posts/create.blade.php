@extends('main')
@section('title', '| Create New Post')
@section('stylesheets')
{!! Html::style('css/parsley.css') !!}
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Create New Post</h1>
		<hr>
		{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => 'true']) !!}
		    {{ Form::label('title', 'Title:') }}
		    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'max-length' => '255')) }}

		    {{ Form::label('body', 'Post Body:', array('style' => 'margin-top: 10px;')) }}
		    {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

		    {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:20px;')) }}
		{!! Form::close() !!}
	</div>
</div>
@endsection
