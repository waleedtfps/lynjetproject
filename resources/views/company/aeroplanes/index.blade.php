@extends('company.layouts.master')

@section('content')
<section class="content-header">
      <h1>
        Airplanes
      </h1>
</section>

<div class="col-sm-12 col-xs-12 text-right">
    

    
      
</div>
    <div class="col-sm-12 col-xs-12 table-responsive">  
    <div class="box">
    <div class="col-md-12 button-div text-right" style="margin-bottom: 30px;">
      <div class="btn btn-success">
        <a href="{{URL::to('company/aeroplanes/create')}}">Add new</a>
      </div>
    </div>
          
            <!-- /.box-header -->
            <div class="box-body">
             <div class="col-sm-12 text-center" style="padding-top:40px;padding-bottom:40px;">
                @if (Session::has('message'))
                  <p class="text-green">{{ Session::get('message') }}</p>
                @endif
               
            </div>
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="example1_length">
                            <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                        </select> entries
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div id="example1_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 table-responsive">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr role="row">
                           
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Reference</th>
                               <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Registration Number</th>
                                
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">YOM</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">YOR</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Airplane type</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Seats</th>
                                

                                
                              </tr>
                            </thead>
                            <tbody>   
                           @foreach($aeroplane as $aeroplanes)
                               <tr role="row" class="odd">
                               
                                  <td>{{$aeroplanes->ref}}</td>
                                  
                                  <td>{{$aeroplanes->registration}}</td>
                                 
                                  <td>{{$aeroplanes->yom}}</td>
                                  <td>{{$aeroplanes->yor}}</td>
                                  <td>{{$aeroplanes->type}}</td>
                                  <td>{{$aeroplanes->seat}}</td>

                                 
                                  <td><a href="{{URL::to('company/aeroplanes/edit/' .$aeroplanes->id)}}" class="btn-sm btn btn-primary">Edit</a>|<a href="{{URL::to('company/aeroplanes/delete/' .$aeroplanes->id)}}" class="btn btn-sm btn-danger">Delete</a>  </td>
                               </tr>
                           @endforeach
                            </tbody>
                      
                            
              </table>
              
              </div>
              </div>
              <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        {!! $aeroplane->render() !!}
                        </div>
                    </div>
              </div>
        </div>
      </div>
            <!-- /.box-body -->
    </div>
</div>
</div>

@stop