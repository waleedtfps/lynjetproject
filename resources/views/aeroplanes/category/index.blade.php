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
						
						<th>Category Name</th>
						<th>Minimum Seats</th>
						<th>Maximum Seats</th>
					</tr>
					@foreach($categories as $category)
					<tr>
						
						<td>{{$category->category}}</td>
						<td>{{$category->min_seats}}</td>
						<td>{{$category->max_seats}}</td>
                        <td><a href="{{URL::to('category/'.$category->id .'/edit')}}" class="btn btn-sm btn-primary">Edit</a>|<a href="{{URL::to('category/'.$category->id .'/delete')}}" class="btn btn-sm btn-danger">Delete</a></td>

				    </tr>
				    @endforeach
				</tbody>
			</table>
		</div>
		
	</div>

@stop