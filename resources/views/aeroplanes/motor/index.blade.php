@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Motors
      </h1>
</section>
<div class="col-sm-12 box fullheight">
	<div class="col-sm-12 text-center" style="padding-top:40px;padding-bottom:40px;">
	    @if (Session::has('message'))
	      <p class="text-green">{{ Session::get('message') }}</p>
	    @endif
	   
	</div>
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
						@foreach($motors as $motor)
						<tr>
							<td>{{$motor->motor}}</td>
							
							<td><a href="{{URL::to('airplane/motor/' .$motor->id .'/edit')}}" class="btn btn-sm btn-primary">Edit</a>|<a href="{{URL::to('airplane/motor/' .$motor->id .'/delete')}}" class="btn-sm btn btn-danger">Delete</a></td>
						</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
    </div>


@stop