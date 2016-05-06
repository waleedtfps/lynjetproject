@extends('layouts.master')

@section('content')
<div class="col-md-4">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Add a new category</h3>
		</div>
		<div class="box-body">
			<form {{'ariplane/category'}}{{'/'}}{{$category->id}}{{'/update'}} method="PATCH">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="">Category Name</label>
					<input type="text" class="form-control" value="{{$category->category}}" name="airplane_category">
				</div>
				<div class="form-group">
				  	<label for="">Minimum Seats</label>
				  	<input type="number" class="form-control" value="{{$category->min_seats}}" name="min_seats">
				</div>
				<div class="form-group">
					<label for="">Maximum Seats</label>
					<input type="number" class="form-control" value="{{$category->max_seats}}" name="max_seats">
				</div>
				<input class="form-control btn btn-primary" type="submit" value="update">
			</form>
		</div>
	</div>
</div>



@stop