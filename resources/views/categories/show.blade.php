@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1 class="text-center">Recent Blogs on <b>{{ $category->name }}</b></h1>
				<a href="{{ action('CategoryController@edit',[$category->id]) }}">Edit</a>
			</div>
			

			<div class="col-sm-12">
			@foreach($category->blog as $blog)
				@if ($category->blog->count() > 0)
					<h3><a href="{{ action('BlogController@show',[$blog->id])}}">{{ $blog->title }}</a></h3>
				@endif
			@endforeach
			</div>

		</div>
</main>

@endsection
