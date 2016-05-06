@extends('layouts.master')
@section('pageheader')
<section class="content-header">
      <h1>
        Airports
      </h1>
</section>
@stop
@section('content')

<div class="col-sm-12 box fullheight">
    
        
    <div class="col-sm-12 text-center" style="padding-top:40px;padding-bottom:40px;">
          @if (Session::has('message'))
            <p class="text-green">{{ Session::get('message') }}</p>
          @endif
      </div>
	
		<div class="button-div text-right">
			<div class="btn btn-success"><a href="{{URL::to('airports/create')}}">Add New</a></div>
		</div>
		<div class="box-body">
			<table class="table table-bordered table-striped dataTable">
				<tdead></tdead>
				<tbody>
					<tr>
						<th>Name</th>
						<th>ICAO</th>
						<th>IATA</th>
						<th>City</th>
						
					</tr>
					@foreach($airports as $airport)
					<tr>
						    <td>{{$airport->name }}</td>
						  <td>{{$airport->icao }}</td>
						  <td> {{$airport->iata }}</td>
						  <td>{{$airport->city}}</td>
				
                          <td> <a href="{{URL::to('airports/edit/' .$airport->id)}}" class="btn btn-sm btn-primary">Edit</a>|<a href="{{URL::to('airports/delete/' .$airport->id)}}" class="btn btn-sm btn-danger">Delete</a>
                          </td>
				    </tr>
				    @endforeach
                                    
                                    
				</tbody>
			</table>
                                   
		</div>
		<div class="row">
            <div class="col-md-12">
            	<div class="col-sm-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing  1 to 10 of 57 entries
                </div>
            </div>
            <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                {!! $airports->render() !!}
                </div>
            </div>
            </div>
         </div>
	
</div>

@stop