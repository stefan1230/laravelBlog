@extends('layouts.app')


@section('content')
<main class="container">
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>Admin Dashborad</h1>
			</div>
			

			<div class="col-sm-12">
				<a class="btn btn-primary" href="{{url('blog/create')}}">Create Blog</a>
				<a class="btn btn-primary" href="{{url('blog/bin')}}">Trash</a>

			</div>

		</div>
</main>

@endsection
