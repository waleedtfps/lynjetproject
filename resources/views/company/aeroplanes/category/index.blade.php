@extends('layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Airplane Categories
      </h1>
</section>

<div class="col-sm-12 box fullheight">
	<div class="col-sm-12 button-div text-right" style="margin-bottom: 30px;">
		<div class="btn btn-success">
				<a href="{{URL::to('airplane/category/create')}}">Add New</a>
			</div>
	</div>
		
		<div class="box-body">
			<table class="table table-bordered table-striped dataTable">
				<tdead></tdead>
				<tbody>
					<tr>
						
						<th>Category Name</th>
						<th>Minimum Seats</th>
						<th>Maximum Seats</th>
					</tr>
					@foreach($categories as $category)
					<tr>
						
						<td>{{$category->category}}</td>
						<td>{{$category->min_seats}}</td>
						<td>{{$category->max_seats}}</td>
                        <td><button class="btn btn-sm btn-primary">Edit</button>|<button class="btn btn-sm btn-danger">Delete</button></td>

				    </tr>
				    @endforeach
				</tbody>
			</table>
		</div>
		
	</div>

@stop