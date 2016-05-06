@extends('layouts.master')

@section('content')
<div class="col-md-12 box fullheight" style="padding-top: 30px;">
	
		
		<div class="box-body">
			<form action="{{URL::to('category/'.$category->id.'/update')}}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group col-sm-6">
					<label for="" class="col-sm-3">Category</label>
					<div class="col-sm-7">
						<input type="text" value="{{$category->category}}" class="form-control" name="airplane_category">
					</div>
					
				</div>
				<div class="form-group col-sm-6">
				  	<label for="" class="col-sm-3">Minimum Seats</label>
				  	<div class="col-sm-7">
						<input type="text" value="{{$category->min_seats}}" class="form-control" name="min_seats">
					</div>
				  	
				</div>
				<div class="form-group col-sm-6">
					<label for="" class="col-sm-3">Maximum Seats</label>
					<div class="col-sm-7">
						<input type="text" value="{{$category->max_seats}}" class="form-control" name="max_seats">
					</div>
					
				</div>
				<div class="col-sm-12" style="padding-left: 30px;">
					<input class="btn btn-success" type="submit" value="update">
				</div>
				
			</form>
		</div>
	
</div>



@stop