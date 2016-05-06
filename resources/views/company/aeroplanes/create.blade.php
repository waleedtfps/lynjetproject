@extends('company.layouts.master')

@section('content')

<div class="col-sm-12 box fullheight">
    <!-- Nav tabs -->
     <form class="form-horizontal" role="form" action="{{URL::to('company/aeroplanes/store')}}"  enctype="multipart/form-data" method="POST">            
                {!! csrf_field() !!}
    <div class="col-md-12">
                <div class="quality text-right">
                    <div class="form-inline">
                        <label>
                        Active
                        <input type="checkbox" name="active" style="margin-left: 5px;" value="1">
                    </label>
                    </div>
                </div>
                <div class="quality text-right">
                    <div class="form-inline">
                        <label>
                        Aircraft Rating
                        <select name="rating" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </label>
                    </div>
                </div>
             </div>
    <ul class="nav nav-tabs" role="tablist" style="margin-top: 30px;">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Main</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Specification</a></li>    
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Services/Facilities</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Airports</a></li>
        <li role="presentation"><a href="#config" aria-controls="settings" role="tab" data-toggle="tab">Config/Comments</a></li> 

    </ul>

   
        
        <div class="box-body">
           

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="home">

                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Reference</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="ref">
                            </div>
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Registration</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="reg">
                            </div>
                        </div>



                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Base</label>
                            <div class=" col-sm-7"> 
                               
                                <select name="base" class="form-control" >
                                    <option class="form-control" value="ANDR|Gre">ANDR|Gre</option>
                                    <option value="SNDS|La Ocean Bus">SNDS|La Ocean Bus</option>
                                    <option value="PDF|la Pro">PDF|la Pro</option>
                                </select>
                               
                            </div>
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Company</label>
                            <div class=" col-sm-7"> 
                                <select class="form-control " id="sel1" name="id_company">
                                   
                                <option value="{{$companies[0]->id_user}}">{{$companies[0]->company_name}}</option>
                                
                                </select>
                            </div>
                        </div>


                        <div class="form-group col-md-6 col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">YOM(year of manufacturing)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="yom">
                            </div>
                        </div>



                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">YOR(year of refurbishment)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="yor">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left">Airplane type</label>
                            <div class="col-sm-7">
                                <select name="id_type" class="form-control"  id="">
                                @foreach($airplanetype as $airplanetype)
                                <option value="{{$airplanetype->id}}">{{$airplanetype->type}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                         <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left">Upload Images</label>
                            <div class="col-sm-7">
                                    <label for="file" class="label-input"><i id="icon-upload" class="fa  fa-cloud-upload"></i><span id="span-label">Select images</span></label>
                                    <input type="file" name="file[]" id="file" multiple>
                            </div>
                        </div>

                    </div>


                    <div role="tabpanel" class="tab-pane" id="profile">      

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Seats(without toilet seat)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="seats">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Minimum 2 crew members?</label>

                            <label class="radio-inline"><input type="radio" checked="checked" name="2crew" value="crewy" >yes</label>
                            <label class="radio-inline"><input type="radio" name="2crew" value="crewn">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Smoking permitted?</label>

                            <label class="radio-inline"><input type="radio"  name="smoke" value="smokey">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="smoke" value="smoken">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Pet permitted?</label>

                            <label class="radio-inline"><input type="radio" name="pet" value="pety">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="pet" value="petn">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Hot catering in cabin?</label>

                            <label class="radio-inline"><input type="radio" name="catering" value="cateringy">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="catering" value="cateringn">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Owner approval needed?</label>

                            <label class="radio-inline"><input type="radio" name="owner" value="ownery">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="owner" value="ownern">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Allowed to perform worldwide?</label>

                            <label class="radio-inline"><input type="radio" name="worldwide" value="worldwidey">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="worldwide" value="worldwiden">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Excluded countries</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="excluded_countries">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Skis in luggage compartment?</label>

                            <label class="radio-inline"><input type="radio" name="skis_luggage" value="skis_luggage_y">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="skis_luggage" value="skis_luggage_n">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many luggage</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="luggage_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many skiss</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="skis_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Golf bag in luggage compartment?</label>

                            <label class="radio-inline"><input type="radio" name="golfbag" value="golfbagy">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="golfbag" value="golfbagn">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many golf bags</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="golfbag_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Maximum takeoff weight(MTOW)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="takeoff_weight">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Crew duty time</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="crew_time">
                            </div>
                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="messages"> 

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Included catering type</label>
                            <div class=" col-sm-4"> 
                                <select class="form-control" id="sel1" name="catering_type">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>                        

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Flight attendent included?</label>

                            <label class="radio-inline"><input type="radio" name="flight_attendent" value="flight_attendent_y">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="flight_attendent" value="flight_attendent_n">no</label>
                        </div>                        

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Flight attendent number</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="flight_attendent_no">
                            </div>
                        </div>                                     


                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If no is it upon request and on extra charge?</label>

                            <label class="radio-inline"><input type="radio" name="attendent_extra" value="attendent_extra_y">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="attendent_extra" value="attendent_extra_n">no</label>
                        </div>                             

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Flight attendent extra charges</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="attendent_extra_charge">
                            </div>
                        </div>              

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Engineer cost</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="engineer_cost">
                            </div>
                        </div>                           

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Has bedroom?</label>

                            <label class="radio-inline"><input type="radio" name="bedroom" value="bedroomy">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="bedroom" value="bedroomn">no</label>
                        </div>                            


                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Possible beds with additional mattress?</label>

                            <label class="radio-inline"><input type="radio" name="additional_matteres" value="additional_matteresy">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="additional_matteres" value="additional_matteresn">no</label>
                        </div>                            


                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many beds</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="beds_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Individual screen?</label>

                            <label class="radio-inline"><input type="radio" name="Individual_screen" value="screeny">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="Individual_screen" value="screenn">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many screens</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="screens_no">
                            </div>
                        </div>                        

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Ipad tablet number</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="tablet_no">
                            </div>
                        </div>    

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Ipad tablet cost(per item)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="tablet_cost">
                            </div>
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Internet connection?</label>

                            <label class="radio-inline"><input type="radio" name="Internet_connection" value="Internet_connectiony">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="Internet_connection" value="Internet_connectionn">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how much is the extra per mb</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="net_mb_extra">
                            </div>
                        </div>                          

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Wheelchair assistance cost</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" placeholder="" name="Wheelchair_assistance_cost">
                            </div>
                        </div>                         
                    </div>  

                    <div role="tabpanel" class="tab-pane" id="settings"> 

                        <div class="col-md-12 padzero" style="margin-bottom: 30px;">
                            <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Africa permitted?</label>

                            <label class="radio-inline"><input type="radio" name="africa" value="africay">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="africa" value="african">no</label>
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Waiver program member?</label>

                            <label class="radio-inline"><input type="radio" name="Waiver" value="Waivery">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="Waiver" value="Waivern">no</label>
                        </div>
                        </div> 
                        <h4> Airplane and crew qualified to perform in following locations</h4>
                        <hr style="border-top:1px solid black; margin-top: 5px;margin-bottom: 30px;">

                        <div class="col-md-12 padzero" style="margin-bottom: 30px;">
                            <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Figari</label>

                            <label class="radio-inline"><input type="radio" name="figari-radio">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="figari-radio">no</label>
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">London City</label>

                            <label class="radio-inline"><input type="radio" name="london-radio">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="london-radio">no</label>
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">La Mole</label>

                            <label class="radio-inline"><input type="radio" name="lamole-radio">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="lamole-radio">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Annecy</label>

                            <label class="radio-inline"><input type="radio" name="annecy-radio">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="annecy-radio">no</label>
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Cannes</label>

                            <label class="radio-inline"><input type="radio" name="cannes-radio">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="cannes-radio">no</label>
                        </div> 

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Samedan</label>

                            <label class="radio-inline"><input type="radio" name="samedan-radio">yes</label>
                            <label class="radio-inline"><input type="radio" checked="checked" name="samedan-radio">no</label>
                        </div> 

                        </div>

                        <h4> Please add locations your aircraft is not approved to get into</h4>   
                        <hr style="border-top:1px solid black; margin-top: 5px;margin-bottom: 30px;">
                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Locations
                            </label>
                            <div class="col-sm-7 ui-widget">
                                <input type="text" class="form-control" id="loc" name="location">
                            </div>
                        </div> 

                        

                    </div>
                    <div role="tabpanel" class="tab-pane" id="config"> 
                        <div class="form-group col-md-6">
                            <label for="" class="control-label col-sm-4 text-left">Configuration</label>
                            <div class="col-sm-7">
                                <input type="text" name="config" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Red Flag</label>
                            <div class="col-sm-7">
                                    <label class="radio-inline"><input type="radio" name="redflag-radio">yes</label>
                                <label class="radio-inline"><input type="radio" checked="checked" name="redflag-radio">no</label>
                            </div>
                            
                        </div>
                        <div class="form-group col-md-6">
                                <label  class="control-label col-sm-4 text-left">Comment</label>
                            <div class="col-sm-7"><textarea name="comment" id="" class="form-control" rows="5" cols="20"></textarea></div>
                        </div>
                       
                        <div class="col-md-12 padzero">
                            <input class="btn btn-primary col-sm-2" type="submit"> 
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>                
</div>
</div>

</script>

@stop
@section('scripts')
<script>
    $(function(){
         var availableTags = [
         @foreach($airports as $airport)
            "{{$airport->city}}",
         @endforeach
    ];
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#loc" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        minLength: 0,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( $.ui.autocomplete.filter(
            availableTags, extractLast( request.term ) ) );
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
      });
    });
</script>
@stop