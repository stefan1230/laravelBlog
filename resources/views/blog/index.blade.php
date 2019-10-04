@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>Latest Blogs</h1>
			</div>
			

			<div class="col-sm-12">
			@foreach($blogs as $blog)
				<article>
					<a href="{{ action('BlogController@show',[$blog->id]) }}"><h3>{{ $blog->title }}</h3></a>
					<p>{{ $blog->body }}</p>
					<hr>
				</article>
			@endforeach
			</div>

		</div>
</main>

@endsection
