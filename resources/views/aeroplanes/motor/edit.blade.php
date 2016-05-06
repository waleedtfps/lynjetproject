@extends('layouts.master')

@section('content')

<div class="col-sm-12 box fullheight">
	
	
	<div class="box-body" style="padding-top: 50px;">
	
		<form action="{{URL::to('airplane/motor/' .$motors->id .'/update')}}" method="POST">
			{!! csrf_field() !!}
			
			<div class="form-group col-sm-6">
				<label class="col-sm-3">Motor Name</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" value="{{$motors->motor}}" name="motor">
				</div>
				
			</div>
			<div class="col-sm-12" style="padding-left: 30px;">
				<input type="submit" value="update" class="btn btn-success">
			</div>
			
		</form>
	</div>
</div>



@stop