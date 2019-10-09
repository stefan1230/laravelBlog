@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>Create Blogs</h1>
			</div>
			

			<div class="" id="form">
				{!! Form::open(['method' => 'POST', 'action'=>'BlogController@store']) !!}
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
						{!! Form::select("category_id[]",$category,null,
						 ['id'=>'tag_lists', 'class'=>'tag_select form-control', 'multiple'=>'multiple']) !!}
					</div>
					<div class="form-group">
						{!! Form::submit("create blog",['class'=>'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
			</div>

		</div>
</main>


  
@endsection



  