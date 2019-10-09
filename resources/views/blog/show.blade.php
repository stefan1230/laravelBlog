@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>{{ $blog->title }}</h1><a style="float: right;" href="{{action('BlogController@edit',[$blog->id])}}">Edit</a>
				<p>Categories: 
					@foreach($blog->category as $category)
						<b><a href="{{ route('category.show', $category->slug)}}">{{ $category->name }}</a></b>
					@endforeach
				</p>
			</div>
			<div>
			<article>
					<p>{{ $blog->body }}</p>
			</article>
			</div>
		</div>
</main>

@endsection
