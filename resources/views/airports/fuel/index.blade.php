@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Fuels
      </h1>
</section>
<div class="col-sm-12 box fullheight">
	<div class="col-sm-12 text-right">
	<div class="button-div">
		<a class="btn btn-success" type="button" href="{{URL::to('fuel/create')}}">Add new</a>
	</div>
		
	</div>
		<div class="col-sm-12 text-center" style="padding-top:40px;padding-bottom: 40px;">
          @if (Session::has('message'))
            <p class="text-green">{{ Session::get('message') }}</p>
          @endif
      </div>
		<div class="box-body" style="padding-top: 30px;">
			<table class="table table-bordered table-striped dataTable">
				<tdead></tdead>
				<tbody>
					<tr>
						
						<th>Airport Fuels</th>
						
					</tr>
					@foreach($fuel as $fuel)
					<tr>
						
						<td>{{$fuel->name}}</td>
						<td><a href="{{URL::to('fuel/edit/'.$fuel->id)}}" class="btn btn-sm btn-primary">Edit</a>|
							<a href="{{URL::to('fuel/delete/'.$fuel->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
						
				    </tr>
				    @endforeach
				</tbody>
			</table>
		</div>
		
</div>

@stop