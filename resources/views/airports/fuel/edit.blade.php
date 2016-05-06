@extends('layouts.master')

@section('content')
<div class="col-md-12 box fullheight" style="padding-top: 50px;">
	<form action="{{URL::to('fuel/update/'.$fuel->id)}}" method="POST">
	{!! csrf_field() !!}

	  <div class="form-group col-sm-6">
	  	<label class="col-sm-3">Name</label>
	  	<div class="col-sm-7">
	  		<input type="text" value="{{$fuel->name}}" class="form-control" name="name">
	  	</div>
		
	  </div>
	  <div class="col-md-12" style="padding-left: 30px;">
	  	<input type="submit" value="update" class="btn btn-success">
	  </div>

		
	</form>
</div>

@stop