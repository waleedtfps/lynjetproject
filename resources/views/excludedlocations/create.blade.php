@extends('layouts.master')

@section('content')

	 
          @if (Session::has('message'))
          <div class="col-sm-12 callout callout-success">
            <p>{{ Session::get('message') }}</p>
            </div>
          @endif
      

<form action="{{URL::to('location/store')}}">
	<div class="form-group">
		<label>Enter Excluded Locations</label>
		<input type="text" name="location">
		<input type="submit" value="Add Location">
	</div>
</form>






@stop