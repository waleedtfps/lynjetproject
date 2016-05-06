@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Motors
      </h1>
</section>
<div class="col-sm-12 box fullheight">
   		<div class="col-sm-12 text-right button-div" style="margin-bottom: 30px;">
   			<div class="btn btn-success">
				<a href="{{URL::to('airplane/motor/create')}}">Add new</a>	
			</div>
   		</div>
		
		<div class="box-body" style="padding-top: 50px;">
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-bordered table-striped dataTable">
						<thead></thead>
						<tbody>
						<tr>
							<th>Motors</th>
						</tr>
						@foreach($motor as $motor)
						<tr>
							<td>{{$motor->motor}}</td>
							<td><button class="btn btn-sm btn-primary">Edit</button>|<button class="btn-sm btn btn-danger">Delete</button></td>
						</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
    </div>


@stop