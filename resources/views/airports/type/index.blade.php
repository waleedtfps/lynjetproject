@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Airport Type
      </h1>
</section>
<div class="col-sm-12 box fullheight">
	<div class="col-md-12 text-right " style="margin-bottom: 30px;">
		<div class="button-div">
			<a href="{{URL::to('airportstype/create')}}" type="button" class="btn  btn-success">Add new</a>
		</div>
	</div>
	<div class="col-sm-12 text-center" style="padding-top:40px;padding-bottom:40px;">
          @if (Session::has('message'))
            <p class="text-green">{{ Session::get('message') }}</p>
          @endif
      </div>
		<div class="box-body">
			<table class="table table-bordered table-striped dataTable">
				<tdead></tdead>
				<tbody>
					<tr>
						
						<th>Airport Types</th>
						
					</tr>
					@foreach($airporttype as $airporttype)
					<tr>
						
						<td>{{$airporttype->type}}</td>
						<td><a href="{{URL::to('airportstype/edit/' .$airporttype->id)}}" class="btn btn-sm btn-primary">Edit</a>|<a href="{{URL::to('airportstype/delete/' .$airporttype->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
						
				    </tr>
				    @endforeach
				</tbody>
			</table>
		</div>
		
	
</div>
@stop