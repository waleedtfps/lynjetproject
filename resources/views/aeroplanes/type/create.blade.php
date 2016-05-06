@extends('layouts.master')

@section('content')
	<div class="col-sm-12 box fullheight">
		
			<div class="box-header">
				
				<div class="box-body" style="padding-top: 50px;">
					<form action="{{URL::to('airplane/type/create')}}" method="POST">
					 	{!! csrf_field() !!}
					 	<div class="form-group col-md-6">
					 		<label for="" class="col-sm-3">Type</label>
					 		<div class="col-md-7">
					 			<input type="text" class="form-control" name="type" >
					 		</div>
					 	</div>
					 	<div class="form-group col-sm-6">
					 		<label for="" class="col-sm-3">Category</label>
					 		<div class="col-md-7">
					 			<select name="id_category" class="form-control" id="">
								@foreach($category as $category)
								<option value="{{$category->id}}">{{$category->category}}</option>
								@endforeach
						    </select>
					 		</div>
					 		
					 	</div>
					 	
					 	<div class="form-group col-sm-6">
					 		<label for="" class="col-sm-3">Speed(Km/h)</label>
					 		<div class="col-md-7">
					 			<input type="text" class="form-control" name="speed">
					 		</div>
					 		
					 	</div>
					 	<div class="form-group col-sm-6">
					 		<label for="" class="col-sm-3">Motor</label>
					 		<div class="col-md-7">
					 			<select name="id_motor" class="form-control" id="">
								@foreach($motor as $motor)
								<option value="{{$motor->id}}">{{$motor->motor}}</option>
								@endforeach
							</select>
					 		</div>
					 		
					 	</div>
					 	<div class="form-group col-sm-6">
					 		<label for="" class="col-sm-3">Altitude(m)</label>
					 		<div class="col-md-7">
					 			<input type="text" class="form-control" name="altitude">
					 		</div>
					 		
					 	</div>
					 	<div class="form-group col-sm-6">
					 		<label for="" class="col-sm-3">Cabin Height(m)</label>
					 		<div class="col-md-7">
					 			<input type="text" class="form-control" name="cabinheight">
					 		</div>
					 		
					 	</div>
					 	<div class="form-group col-sm-6">
					 		<label for="" class="col-sm-3">Cabin Width(m)</label>
					 		<div class="col-sm-7">
					 			<input type="text" class="form-control" name="cabinwidth">
					 		</div>
					 		
					 	</div>
					 	<div class="form-group col-sm-6">
					 		<label for="" class="col-sm-3">Cabin Length(m)</label>
					 		<div class="col-md-7">
					 			<input type="text" class="form-control" name="cabinlength">
					 		</div>
					 		
					 	</div>
					 	<div class="form-group col-sm-6">
					 		<label for="" class="col-sm-3">Range(km)</label>
					 		<div class="col-md-7">
					 			<input type="text" class="form-control" name="range">
					 		</div>
					 		
					 	</div>
					 	
					 	<div class="col-md-12" style="padding-left: 30px;">
					 		<input class="btn btn-success" type="submit">
					 	</div>
						
					</form>
				</div>
			</div>
		
	</div>

@stop