@extends('layouts.base')

@section('content')


<div class="row ">
	<div class="col-md-9"><h1>Post Index </h1></div>
	<div class="col-md-3">
		<a href="{{route('posts.create')}}" class="btn btn-block btn-primary">Ajouter un Post</a>
	</div>

	@foreach ($posts as $element)
	{{-- expr --}}
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-title">
					<h1>{{$element->title}}</h1>
				</div>
				<div>
					<p>
						{{$element->description}}
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<small>Créer le {{ $element->created_at}}</small>
			<p>Nombre de commentaire : 25</p>
			<p>
				<a href="{{ route('comments.create', [
					'id' => $element->id
					]) }}">Commentez</a>
			</p>
			<button>Like ❤️</button>
			<p>Nombre de Like : 25</p>
		</div>
	</div>

	<hr>
	@endforeach
</div>
@endsection