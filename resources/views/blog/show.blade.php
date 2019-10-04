@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>{{ $blog->title }}</h1>
			</div>
			<div>
			<article>
					<p>{{ $blog->body }}</p>
			</article>
			</div>
		</div>
</main>

@endsection
