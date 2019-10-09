@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>Blogs category</h1>
			</div>
			

			<div class="col-sm-12">
			@foreach($categories as $category)
				@if ($category->blog->count() > 0)
					<a href="{{ route('category.show',$category->slug) }}">{{ $category->name }}</a>
				@endif
			@endforeach
			</div>

		</div>
</main>

@endsection
