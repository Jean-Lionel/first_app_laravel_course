@extends('layouts.base')

@section('content')

<h1>Création d'un Post </h1>

<form action="{{ route('posts.store') }}" method="post">
	@csrf

	<div class="form-group">
		<label for="title">title</label>
		<input type="text" value="{{old('title')}}" class="form-control" name="title" id="title">
		@error('title')
		<span class="error text-danger">{{ $message }}</span>
		@enderror
	</div>
	<div class="form-group">
		<label for="description">description</label>

		<textarea class="form-control" name="description">{{old('description')}}</textarea>
		@error('description')
		<span class="error text-danger">{{ $message }}</span>
		@enderror
	</div>

	<div class="form-group">
		<button class="btn btn-primary" type="submit">Enregistrer</button>
	</div>
	

</form>
@endsection