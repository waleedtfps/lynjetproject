@extends('layouts.master')

@section('content')

	<div class="col-md-12 box fullheight">
	<form action="{{URL::to('airports/update/'.$airports->id)}}" method="POST">
	 {!! csrf_field() !!}
             <!-- Nav tabs -->
            
             <div class="col-md-12">
             	<div class="quality text-right">
             		<div class="form-inline">
             			<label>
             			quality
             			<select name="quality_port">
             				<option @if($airports->quality_port == '1' ) selected @endif value="1">1</option>
             				<option @if($airports->quality_port == '2' ) selected @endif value="2">2</option>
             				<option @if($airports->quality_port == '3' ) selected @endif value="3">3</option>
             				<option @if($airports->quality_port == '4' ) selected @endif value="4">4</option>
             				<option @if($airports->quality_port == '5' ) selected @endif value="5">5</option>
             			</select>
             		</label>
             		</div>
             	</div>
             </div>
	    <ul class="nav nav-tabs" role="tablist" style="margin-top:40px;">
		    <li role="presentation" class="active"><a href="#main" aria-controls="home" role="tab" data-toggle="tab">Main</a></li>
		    <li role="presentation"><a href="#geo" aria-controls="profile" role="tab" data-toggle="tab">Geolocation</a></li>
		    <li role="presentation"><a href="#customs" aria-controls="messages" role="tab" data-toggle="tab">Customs</a></li>
		    <li role="presentation"><a href="#extentsion" aria-controls="settings" role="tab" data-toggle="tab">Extention&Restrictions</a></li>
		    <li role="presentation"><a href="#hours" aria-controls="settings" role="tab" data-toggle="tab">Hours</a></li>
	    </ul>
            
           

         <!-- Tab panes -->
   <div class="tab-content">
        
        <div role="tabpanel" class="tab-pane active" id="main">
             
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Icao</label>
		<div class="col-md-7">
			<input type="text" value="{{$airports->icao}}" class="form-control" name="field_icao">
		</div>
		
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Iata</label>
		<div class="col-md-7">
			<input type="text" value="{{$airports->iata}}"  class="form-control" name="field_iata">
		</div>
		
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Data Origin</label>
		<div class="col-md-7">
			<input type="text" value="{{$airports->dataorigin}}" class="form-control" name="field_dataorigin">
		</div>
		
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Airport Name</label>
		<div class="col-md-7">
			<input type="text" value="{{$airports->name}}"  class="form-control" name="field_name">
		</div>
		
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Country</label>
		<div class="col-md-7">
			<input type="text" value="{{$airports->countryiso2}}"  class="form-control" name="field_countryiso2">
		</div>
		
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">City</label>
		<div class="col-md-7">
			<input type="text" value="{{$airports->city}}"  class="form-control" name="field_city">
		</div>
		
	</div>
    <div class="form-group col-md-6">
			<label class="label-control col-md-3">Type</label>
			<div class="col-md-7">
				<select name="type" class="form-control">
				@foreach($airporttypes as $airporttype)
					<option @if($airports->idtype == $airporttype->id) selected @endif value="{{$airporttype->id}}">{{$airporttype->type}}</option>
				@endforeach
				</select>
			</div>
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Timezone</label>
		<div class="col-md-7">
		     <input type="text" value="{{$airports->timezone}}" name="airport_timezone" class="form-control">
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Address</label>
		<div class="col-md-7">
			<textarea name="airport_address" id="" value="" cols="40" rows="7">{{$airports->address_port}}</textarea>
		</div>
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Phone</label>
		<div class="col-md-7">
		     <input type="text" value="{{$airports->phone_port}}" name="airport_phone" class="form-control">
		</div>
	</div>
	 <div class="form-group col-md-6">
		<label class="label-control col-md-3">Elevation Feet</label>
		<div class="col-md-7">
			<input type="name" value="{{$airports->elevationfeet}}"   class="form-control" name="field_elevationfeet">
		</div>
		
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Ground Type</label>
		<div class="col-md-7">
			<input type="name" value="{{$airports->groundtype}}" class="form-control" name="field_groundtype">
		</div>
		
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Ground Length</label>
		<div class="col-md-7">
			<input type="name" value="{{$airports->groundlength}}" class="form-control" name="field_groundlength">
		</div>
		
	</div>
	
	<div class="form-group col-md-6">
			<label class="label-control col-md-3">Strip Type</label>
			<div class="col-md-7">
				<select name="airport_strip" class="form-control" id="">
					<option @if($airports->striptype = 'Long') selected @endif value="Long">Long</option>
					<option @if($airports->striptype = 'Short') selected @endif value="Short">Short</option>
					<option @if($airports->striptype = 'Very Short') selected @endif value="Very Short">Very Short</option>
				</select>
			</div>
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Fuel</label>
		<div class="col-md-7">
			<select name="id_fuel" class="form-control">
				@foreach($fuels as $fuel)
					<option @if($airports->idfuel == $fuel->id) selected @endif value="{{$fuel->id}}">{{$fuel->name}}</option>
				@endforeach
			</select>
		</div>
		
	</div>
	<div class="form-group col-md-6">
		<label class="label-control col-md-3">Closed</label>
		<div class="col-md-7">
			<label  class="radio-inline">
				<input type="radio" @if($airports->closed == '1') checked @endif name="airport_closed" value="1">	Yes
			</label>
			<label  class="radio-inline">
				<input type="radio"  @if($airports->closed == '0') checked @endif name="airport_closed" value="0">	No
			</label>
		</div>
		
	</div>
 </div>    
       
   <div role="tabpanel" class="tab-pane" id="geo">
		<div class="col-md-6">
			<div class="form-group col-md-12">
			<label class="label-control col-md-3">Latitude</label>
			<div class="col-md-7">
				<input type="text" value="{{$airports->latitude}}" class="form-control" name="field_latitude">
			</div>
			
		</div>
		<div class="form-group col-md-12">
			<label class="label-control col-md-3">Longitude</label>
			<div class="col-md-7">
				<input type="text" value="{{$airports->longitude}}"  class="form-control" name="field_longitude">
			</div>
			
		</div>
		</div>
		
		
		
	           
	    </div>
       
       <div role="tabpanel" class="tab-pane" id="customs">
           
			
        </div>
        <div role="tabpanel" class="tab-pane" id="extentsion">
        <div class="col-md-12">
            <div class="form-group col-md-6">
           		<label  class="col-md-3">Restricted</label>
           			<div class="col-md-7">
           				<label class="radio-inline">
           					<input type="radio" @if($airports->restricted == '1') checked @endif name="field_restriction" value="1"> Yes
           				</label>
	           			<label class="radio-inline">
							<input type="radio"  @if($airports->restricted == '0') checked @endif name="field_restriction" value="0">No
	           			</label>
           			</div>
           		</div>
        </div>
           <div class="col-md-12">
           		<div class="form-group col-md-6">
           		<label  class="col-md-3">Extention</label>
           			<div class="col-md-7">
           				<label class="radio-inline">
           					<input type="radio"  @if($airports->extention == '1') checked @endif name="extention"id="yes" value="1"> Yes
           				</label>
	           			<label class="radio-inline">
							<input type="radio"  @if($airports->extention == '0') checked @endif name="extention" value="0">No
	           			</label>
           			</div>
           		</div>
           		<div class="col-md-12" style="padding-left: 30px;margin-bottom: 20px;">
           			<h4>If 'yes' than fill out these fields.</h4>
           		</div>
           	    <div class="form-group col-md-6">
					<label class="col-md-3">Extention fee</label>
					<div class="col-md-7">
						<input type="text" value="{{$airports->ext_fee}}" class="form-control" name="field_extention">
					</div>
		   		</div>
		   		<div class="form-group col-md-6">
		   			<label class="col-md-3">Comment</label>
		   			<textarea name="comment_ext"  id="" cols="40" rows="5">{{$airports->ext_comment}}</textarea>
		   		</div>
           </div>
		   
			
        </div>

    <div role="tabpanel" class="tab-pane" id="hours">
    		<div class="col-md-6 padzero">
    			
    				<label class="col-md-6 padzero">Open On Demand</label>
    				<div class="col-md-6">
    					<input type="checkbox" @if($airports->ondemand == '1') checked @endif value="1" name="demand">
    				</div>
    			
    		</div>
    		<div class="form-group col-md-6 padzero">
				<label class="col-md-6 padzero">24 Hours</label>
    				<div class="col-md-6">
    					<label class="radio-inline label-control align-top">
    						<input type="radio" @if($airports->twentyfourhour == '1') checked @endif value="1" name="twentyfourhour">Yes
    					</label>
    					<label class="radio-inline align-top">
    						<input type="radio" @if($airports->twentyfourhour == '0') checked @endif value="0" name="twentyfourhour">No
    					</label>
    				</div>
			</div>
    		<div class="form-group col-md-6 padzero">
				<label class="col-md-3 padzero">Open</label>
				<div class="col-md-7">
					<input type="text" value="{{$airports->houropen}}" id="hoursopen" name="field_houropen"  class="houropen form-control">
				</div>
			</div>
			

				<div class="form-group col-md-6 padzero">
					<label class="col-md-3 padzero">Close</label>
					<div class="col-md-7">
						<input type="text" value="{{$airports->hourclose}}"  class="form-control hourclose" name="field_hourclose">
					</div>
					
				</div>
			<div class="col-md-6 padzero">
				<h3>Saturday</h3>
				<div class="form-group col-md-12 padzero">
				<label class="col-md-6 padzero">Open Saturday</label>
    				<div class="col-md-6">
    					<label class="radio-inline label-control align-top">
    						<input type="radio" @if($airports->open_sat == '1') checked @endif value="1" name="satopen">Yes
    					</label>
    					<label class="radio-inline align-top">
    						<input type="radio" @if($airports->open_sat == '0') checked @endif value="0" name="satopen"> No
    					</label>
    				</div>
			    </div>
			    <div class="form-group col-md-12 padzero">
					<label class="col-md-3 padzero">Hours Open</label>
					<div class="col-md-7">
						<input type="text" value="{{$airports->houropensat}}"  class="form-control sathouropen" name="field_houreopensat">
					</div>
				
				</div>
				<div class="form-group col-md-12 padzero">
					<label class="col-md-3 padzero">Hours Close</label>
					<div class="col-md-7">
						<input type="text" value="{{$airports->hourclosesat}}" class="form-control sathourclose" name="field_houreclosesat">
					</div>
					
				</div>
			</div>
			<div class="col-md-6 padzero">
				<h3>Sunday</h3>
				<div class="form-group col-md-12 padzero">
				<label class="col-md-6 padzero">Open Sunday</label>
    				<div class="col-md-6">
    					<label class="radio-inline label-control align-top">
    						<input type="radio" @if($airports->open_sun == '1') checked @endif value="1" name="sundayopen"> Yes
    					</label>
    					<label class="radio-inline align-top">
    						<input type="radio" @if($airports->open_sun == '0') checked @endif value="0" name="sundayopen"> No
    					</label>
    				</div>
			    </div>
				<div class="form-group col-md-12 padzero">
					<label class="col-md-3 padzero">Hours Open</label>
					<div class="col-md-7">
						<input type="text"  value="{{$airports->houropensunday}}" class="form-control sunhouropen" name="field_houreopensunday">
					</div>
				
				</div>
				<div class="form-group col-md-12 padzero">
					<label class="col-md-3 padzero">Hours Close</label>
					<div class="col-md-7">
						<input type="text" value="{{$airports->hourclosesunday}}"  class="form-control sunhourclose" name="field_houreclosesunday">
					</div>
				</div> 
			</div>
			
	
			<div class="col-md-12 padzero">
		    	<input type="submit" value="update" class="btn btn-success">
		    </div>
    </div>
    
    
	</form>
</div>
@stop
@section('scripts')
<script>
	$(function(){
		$('#element').click(function(){
			 if($('#yes').is(':checked')){
		 	   $('.fee').addClass('active_field');
		}
		else{
			 $('.fee').removeClass('active_field');
		}
		});


		///time picker
		$('.sunhourclose').wickedpicker({twentyFour: true});
		$('.sunhouropen').wickedpicker({twentyFour: true});
		$('.sathourclose').wickedpicker({twentyFour: true});
		$('.sathouropen').wickedpicker({twentyFour: true});
		$('.houropen').wickedpicker({twentyFour: true});
		$('.hourclose').wickedpicker({twentyFour: true});

});
</script>


@stop