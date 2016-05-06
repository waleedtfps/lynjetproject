@extends('layouts.master')

@section('content')
<div class="col-md-12 box fullheight" style="padding-top: 50px;">
	<form action="{{URL::to('airportstype/store')}}" method="POST">
		{!! csrf_field() !!}

	  <div class="form-group col-md-6">
	  	<label class="col-sm-3">Airport Type</label>
	  	<div class="col-md-7">
	  		<input type="text" class="form-control" name="type">
	  	</div>
		
	  </div>
	  <div class="col-md-12" style="padding-left: 30px;">
	  	<input type="submit" class="btn btn-primary">
	  </div>
		
	</form>
</div>


@stop