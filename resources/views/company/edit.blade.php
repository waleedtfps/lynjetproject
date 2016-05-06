@extends('company.layouts.master')
@section('content')
<div class="row box fullheight" style="padding-top: 30px;">
	<div class="col-md-12 fullheight">
        @if (Session::has('message'))
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Alert!</h4>
              
              {{ Session::get('message') }}
          </div>
        @endif


          <div class="nav-tabs-custom" style="padding-top: 30px;">
            <ul class="nav nav-tabs">
              
              <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Settings</a></li>
            </ul>
            <div class="tab-content" style="min-height: 100vh;">
              

              <div class="tab-pane active" id="settings">
                <form class="form-horizontal" action="{{URL::to("profile/update")}}" method="post">
                {!! csrf_field() !!}
                  <div class="form-group col-sm-6">
                    <label for="inputName" class="col-sm-2 control-label">Company Name</label>

                    <div class="col-sm-10">
                      <input type="text" name="companyname" class="form-control" id="inputName" value="{{$company[0]->company_name}}">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="inputName" class="col-sm-2 control-label">Phone</label>

                    <div class="col-sm-10">
                      <input type="text" name="companyphone" class="form-control" id="inputName" Value="{{$company[0]->company_phone}}">
                    </div>
                  </div>
                   <div class="form-group col-sm-6">
                    <label for="inputName" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="text" name="companyemail" class="form-control" id="inputName" Value="{{$company[0]->company_email}}">
                    </div>
                  </div>
                   <div class="form-group col-sm-6" >
                    <label for="inputName" class="col-sm-2 control-label">Zone</label>

                    <div class="col-sm-10">
                      <input type="text" name="companyzone" class="form-control" id="inputName" Value="{{$company[0]->company_zone}}">
                    </div>
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="inputName" class="col-sm-2 control-label">Supplier</label>

                    <div class="col-sm-10">
                       <label  class="control-label">

                         <input type="radio" name="supplier" @if($company[0]->is_supplier == 'yes') {{'checked = "checked"'}} @endif value="yes">Yes
                       </label>
                       <label  class="control-label">
                           <input type="radio" name="supplier" @if($company[0]->is_supplier == 'no')checked @endif value="no">No
                       </label>
                      </div>
                    </div>
                     <div class="form-group col-sm-6">
                      <label for="inputName" class="col-sm-2 control-label">Active</label>

                      <div class="col-sm-10">
                         <label  class="control-label">
                           <input type="radio" name="is_active" @if($company[0]->is_active == 'yes') checked @endif value="yes">Yes
                         </label>
                         <label  class="control-label">
                             <input type="radio" name="is_active" @if($company[0]->is_active == 'no')checked @endif value="no">No
                         </label>
                        </div>
                    </div>
                
                  <div class="form-group col-sm-6 text-right">
                   
                      <button type="submit" class="btn btn-danger">Submit</button>
                    
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
</div>
			
	

@stop