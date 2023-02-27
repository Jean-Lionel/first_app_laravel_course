@extends('layouts.base')

@section('content')


<div class="row ">
	<div class="col-md-9"><h1>Post Index </h1></div>
	<div class="col-md-3">
		<a href="{{route('posts.create')}}" class="btn btn-block btn-primary">Ajouter un Post</a>
	</div>

	@foreach ($posts as $element)
		{{-- expr --}}
	@endforeach
</div>
@endsection