@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>Create Categories</h1>
			</div>
			

			<div class="">
				{!! Form::open(['method' => 'POST', 'action'=>'CategoryController@store']) !!}
					<div class="form-group">
						{!! Form::label("name","Category Name:") !!}
						{!! Form::text("name",null, ['class'=>'form-control'] ) !!}
					</div>
					<div class="form-group">
						{!! Form::submit("create category",['class'=>'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
			</div>

		</div>
</main>

@endsection
