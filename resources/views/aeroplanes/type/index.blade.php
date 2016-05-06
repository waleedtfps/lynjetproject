@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Airplanes Type
      </h1>
</section>
<div class="col-sm-12 box fullheight">
		<div class="col-sm-12 button-div text-right" style="margin-bottom: 30px;">
			<div class="btn btn-success">
				<a href="{{URL::to("airplane/type/create")}}">Add new</a>
			</div>
		</div>
		<div class="col-sm-12 text-center" style="padding-top:40px;padding-bottom:40px;">
		    @if (Session::has('message'))
		      <p class="text-green">{{ Session::get('message') }}</p>
		    @endif
		   
		</div>
		<div class="box-body">
			<table class="table table-bordered table-striped dataTable">
				<tbody>
					<tr>
						<th>Type</th>
						<th>Motor</th>
					</tr>
					@foreach($airplanetypes as $airplanetype)
					<tr>
						<td>{{$airplanetype->type}}</td>
						<td>{{$airplanetype->motor}}</td>
						<td><a href="{{URL::to('airplanetype/edit/'.$airplanetype->id )}}" class="btn btn-sm btn-primary">Edit</a>|<a href="{{URL::to('airplanetype/delete/'.$airplanetype->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
		
	
</div>

@stop