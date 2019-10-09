@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>Edit Blog</h1>
			</div>
			

			<div class="">
				{!! Form::model($blog, ['method' => 'PATCH', 'action'=>['BlogController@update', $blog->id]]) !!}
					<!-- {{ method_field("PATCH")}} -->
					<div class="form-group">
						{!! Form::label("title","Title:") !!}
						{!! Form::text("title",null, ['class'=>'form-control'] ) !!}
					</div>
					<div class="form-group">
						{!! Form::label("body","Body:") !!}
						{!! Form::textarea("body",null, ['class'=>'form-control'] ) !!}
					</div>
					<div class="form-group">
						{!! Form::label("category_id","Category:") !!}
						{!! Form::select("category_id[]",$categories,null,
						 ['id'=>'tag_lists','class'=>'edit_tag_select form-control', 'multiple'=>'multiple']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit("Edit blog",['class'=>'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}

				{!! Form::open(['method' => 'DELETE', 'action'=>['BlogController@destroy', $blog->id]]) !!}
					<div class="form-group">
						{!! Form::submit('Move to Trash', ['class'=>'btn btn-danger']) !!}
					</div>
				{!! Form::close() !!}
			</div>

		</div>
</main>

@endsection


