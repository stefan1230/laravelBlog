@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>Edit Categories</h1>
			</div>
			

			<div class="">
				{!! Form::model($category,['method' => 'PATCH', 'action'=>['CategoryController@update',$category->id]]) !!}
					<div class="form-group">
						{!! Form::label("name","Category Name:") !!}
						{!! Form::text("name",null, ['class'=>'form-control'] ) !!}
					</div>
					<div class="form-group">
						{!! Form::submit("Edit category",['class'=>'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}

				{!! Form::open(['method' => 'DELETE', 'action'=>['CategoryController@destroy',$category->id]]) !!}
					<div class="form-group">
						{!! Form::submit("Delete category",['class'=>'btn btn-danger']) !!}
					</div>
				{!! Form::close() !!}

			</div>

		</div>
</main>

@endsection
