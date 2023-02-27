@extends('layouts.base')

@section('content')

<h1>{{ $post->title}}</h1>

<p>
	{{ $post->description}}
</p>

<form action="{{ route('comments.store') }}" method="post">
	@csrf
	<input type="hidden" name="post_id" value="{{ $post->id}}">
	<div class="form-group">
		<label for="title">Username</label>
		<input class="form-control" type="text" name="title" value="{{ old('title')}}">

	</div>

	<div>
		<textarea class="form-control" name="body"></textarea>
	</div>

	<button type="submit">Commentez 😂</button>

</form>

<div>
	<h4>Recent Comment</h4>


	<div>
		@foreach ($post->comments as $element)
			{{-- expr --}}
			<div class="card">
				<h2>{{$element->title}}</h2>

				<p>{{$element->body}}</p>
				<p>Comment at {{$element->created_at}}</p>
			</div>
		@endforeach
	</div>
</div>

@endsection