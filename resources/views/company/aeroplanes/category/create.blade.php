@extends('layouts.master')

@section('content')
<div class="col-md-12 box fullheight">
	
		
		<div class="box-body" style="padding-top: 30px;">
			<form action="{{URL::to('airplane/category/store')}}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group col-sm-6">
					<label for="" class="col-sm-3">Category</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="airplane_category">
					</div>
					
				</div>
				<div class="form-group col-sm-6">
				  	<label for="" class="col-sm-3">Minimum Seats</label>
				  	<div class="col-sm-7">
						<input type="text" class="form-control" name="min_seats">
					</div>
				  	
				</div>
				<div class="form-group col-sm-6">
					<label for="" class="col-sm-3">Maximum Seats</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="max_seats">
					</div>
					
				</div>
				<div class="col-sm-12" style="padding-left: 30px;">
					<input class="btn btn-success" type="submit">
				</div>
				
			</form>
		</div>
	
</div>



@stop