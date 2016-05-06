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
						<td><button class="btn btn-sm btn-primary">Edit</button>|<button class="btn btn-sm btn-danger">Delete</button></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
		
	
</div>

@stop