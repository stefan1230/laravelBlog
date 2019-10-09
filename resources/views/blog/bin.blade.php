@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>Trash</h1>
			</div>
			<div>
			@foreach($deletedBlogs as $blog)
				<article>
					<a><h3>{{ $blog->title }}</h3></a>
					<p>{{ $blog->body }}</p>

					{!!Form::open(['method'=>'GET', 'action'=>['BlogController@restore',$blog->id]])!!}
						<div class="form-group">
							{!! Form::submit("Restore",['class'=>'btn btn-success'])!!}
						</div>
					{!!Form::close()!!}

					{!!Form::open(['method'=>'DELETE', 'action'=>['BlogController@destroyBlog',$blog->id]])!!}
						<div class="form-group">
							{!! Form::submit("Delete Permenantly",['class'=>'btn btn-danger'])!!}
						</div>
					{!!Form::close()!!}

					<hr>
				</article>
			@endforeach
			</div>
		</div>
</main>

@endsection
