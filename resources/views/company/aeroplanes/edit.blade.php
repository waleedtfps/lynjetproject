@extends('company.layouts.master')

@section('content')

<div class="col-sm-12 box fullheight">
    <!-- Nav tabs -->
     <form class="form-horizontal" role="form" action="{{URL::to('company/aeroplanes/update/'.$aeroplanes->id)}}"  enctype="multipart/form-data" method="POST">
                {!! csrf_field() !!}
    <div class="col-md-12">
                <div class="quality text-right">
                    <div class="form-inline">
                        <label>
                          Active
                        <input type="checkbox" @if($aeroplanes->active == '1') checked @endif name="active" style="margin-left: 5px;" value="1">
                    </label>
                    </div>
                </div>
                <div class="quality text-right">
                    <div class="form-inline">
                        <label>
                        Aircraft Rating
                        <select name="rating" >
                            <option @if($aeroplanes->rating == '1') selected @endif value="1">1</option>
                            <option @if($aeroplanes->rating == '2') selected @endif value="2">2</option>
                            <option @if($aeroplanes->rating == '3') selected @endif value="3">3</option>
                            <option @if($aeroplanes->rating == '4') selected @endif value="4">4</option>
                            <option @if($aeroplanes->rating == '5') selected @endif value="5">5</option>
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
                                <input type="text" class="form-control" id="email" value="{{$aeroplanes->ref}}" name="ref">
                            </div>
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Registration</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->registration}}" name="reg">
                            </div>
                        </div>



                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Base</label>
                            <div class=" col-sm-7">

                                <select name="base" class="form-control" >
                                    <option @if($aeroplanes->base == 'ANDR') selected @endif value="ANDR|Gre">ANDR|Gre</option>
                                    <option @if($aeroplanes->base == 'SNDS') selected @endif value="SNDS|La Ocean Bus">SNDS|La Ocean Bus</option>
                                    <option @if($aeroplanes->base == 'PDF') selected @endif value="PDF|la Pro">PDF|la Pro</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left">Company</label>
                            <div class=" col-sm-7">
                                <select class="form-control " id="sel1" name="id_company">
                                  
                                <option   value="{{$companies[0]->id}}">{{$companies[0]->company_name}}</option>
                                 
                                </select>
                            </div>
                        </div>


                        <div class="form-group col-md-6 col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">YOM(year of manufacturing)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->yom}}" id="email" placeholder="" name="yom">
                            </div>
                        </div>



                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">YOR(year of refurbishment)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->yor}}" id="email" placeholder="" name="yor">
                            </div>
                        </div>

                        <div class="form-group  col-md-6">
                            <label class="control-label col-sm-4 text-left">Airplane type</label>
                            <div class="col-sm-7">
                                <select name="id_type" class="form-control"  id="">
                                @foreach($airplanetype as $airplanetype)
                                <option @if($aeroplanes->id_type == $airplanetype->id) selected @endif value="{{$airplanetype->id}}">{{$airplanetype->type}}</option>
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
                            <label class="control-label col-sm-4 text-left">Seats(without toilet seat)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="email" value="{{$aeroplanes->seat}}" name="seats">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Minimum 2 crew members?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_minimum_2_crews == '1') checked @endif name="min_crew_members" value="1" >yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_minimum_2_crews == '0') checked @endif name="min_crew_members" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Smoking permitted?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_smoking_permitted == '1') checked @endif  name="smoke" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_smoking_permitted == '0') checked @endif name="smoke" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left">Pet permitted?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_pet_admitted == '1') checked @endif name="pet" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_pet_admitted == '0') checked @endif name="pet" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Hot catering in cabin?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_hot_catering_available_in_cabin == '1') checked @endif name="catering" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_hot_catering_available_in_cabin == '0') checked @endif  name="catering" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Owner approval needed?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_owner_approval_needed == '1') checked @endif name="owner" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_owner_approval_needed == '0') checked @endif name="owner" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Allowed to perform worldwide?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_allowed_to_perform_worldwide == '1') checked @endif name="worldwide" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_allowed_to_perform_worldwide == '0') checked @endif name="worldwide" value="0">no</label>
                        </div>



                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Skis in luggage compartment?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->skis_in_luggage_compartment == '1') checked @endif name="skis_luggage" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->skis_in_luggage_compartment == '0') checked @endif  name="skis_luggage" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many luggage</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->skis_luggage_number}}" name="luggage_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many skiss</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->skis_number}}"  name="skis_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Golf bag in luggage compartment?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->golf_bag_in_luggage_compartment == '1') checked @endif name="golfbag" value="1">yes</label>
                            <label class="radio-inline"><input type="radio"  @if($aeroplanes->golf_bag_in_luggage_compartment == '0') checked @endif  name="golfbag" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many golf bags</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->golf_bag_number}}" name="golfbag_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Maximum takeoff weight(MTOW)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->maximum_takeoff_weight}}" name="takeoff_weight">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Crew duty time</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->crew_duty_time}}" name="crew_time">
                            </div>
                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="messages">

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Included catering type</label>
                            <div class=" col-sm-4">
                                <select class="form-control" id="sel1" name="catering_type">
                                    <option @if($aeroplanes->included_catering_type == '1') selected @endif value="1">1</option>
                                    <option @if($aeroplanes->included_catering_type == '2') selected @endif value="2">2</option>
                                    <option @if($aeroplanes->included_catering_type == '3') selected @endif value="3">3</option>
                                    <option @if($aeroplanes->included_catering_type == '4') selected @endif value="4">4</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Flight attendent included?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_flight_attendant_included == '1') checked @endif name="flight_attendent" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_flight_attendant_included == '0') checked @endif name="flight_attendent" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Flight attendent number</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->flight_attendant_number}}" name="flight_attendent_no">
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If no is it upon request and on extra charge?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_flight_attendant_on_extra == '1') checked @endif name="attendent_extra" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_flight_attendant_on_extra == '0') checked @endif  name="attendent_extra" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Flight attendent extra charges</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->flight_attendant_extra_price}}"  name="attendent_extra_charge">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Engineer cost</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->engineer_price}}"  name="engineer_cost">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Has bedroom?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->has_bedroom == '1') checked @endif name="bedroom" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->has_bedroom == '0') checked @endif name="bedroom" value="0">no</label>
                        </div>


                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Possible beds with additional mattress?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->possible_beds_with_additionnal_mattress =='1') checked @endif name="additional_matteres" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->possible_beds_with_additionnal_mattress =='0') checked @endif name="additional_matteres" value="0">no</label>
                        </div>


                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many beds</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->possible_beds_number}}" name="beds_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Individual screen?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->has_individual_screen =='1') checked @endif name="Individual_screen" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->has_individual_screen =='0') checked @endif  name="Individual_screen" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how many screens</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->individual_screen_number}}" name="screens_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Ipad tablet number</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->ipad_tablet_number}}" name="tablet_no">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Ipad tablet cost(per item)</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->ipad_tablet_cost_per_item}}" name="tablet_cost">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Internet connection?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->internet_connection =='1') checked @endif name="Internet_connection" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->internet_connection =='0') checked @endif name="Internet_connection" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">If 'yes' how much is the extra per mb</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->internet_connection_cost_per_mb}}" name="net_mb_extra">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Wheelchair assistance cost</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="{{$aeroplanes->wheelchair_assistance_price}}" name="Wheelchair_assistance_cost">
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="settings">

                        <div class="col-md-12 padzero" style="margin-bottom: 30px;">
                            <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Africa permitted?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_africa_permitted =='1') checked @endif name="africa" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_africa_permitted =='0') checked @endif name="africa" value="0">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Waiver program member?</label>

                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_waiver_program_member =='1') checked @endif name="Waiver" value="1">yes</label>
                            <label class="radio-inline"><input type="radio" @if($aeroplanes->is_waiver_program_member =='0') checked @endif name="Waiver" value="0">no</label>
                        </div>
                        </div>
                        <h4> Airplane and crew qualified to perform in following locations</h4>
                        <hr style="border-top:1px solid black; margin-top: 5px;margin-bottom: 30px;">

                        <div class="col-md-12 padzero" style="margin-bottom: 30px;">
                            <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Figari</label>

                            <label class="radio-inline"><input type="radio"  name="figari-radio" value="1">yes</label>
                            <label class="radio-inline"><input type="radio"  checked="checked" value="0" name="figari-radio">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">London City</label>

                            <label class="radio-inline"><input type="radio"  value="1" name="london-radio">yes</label>
                            <label class="radio-inline"><input type="radio"  value="0" checked="checked" name="london-radio">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">La Mole</label>

                            <label class="radio-inline"><input type="radio"  value="1" name="lamole-radio">yes</label>
                            <label class="radio-inline"><input type="radio"  value="0" checked="checked" name="lamole-radio">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Annecy</label>

                            <label class="radio-inline"><input type="radio" value="1" name="annecy-radio">yes</label>
                            <label class="radio-inline"><input type="radio"  value="0" checked="checked" name="annecy-radio">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Cannes</label>

                            <label class="radio-inline"><input type="radio" value="1" name="cannes-radio">yes</label>
                            <label class="radio-inline"><input type="radio"  value="0" checked="checked" name="cannes-radio">no</label>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Samedan</label>

                            <label class="radio-inline"><input type="radio"  value="1" name="samedan-radio">yes</label>
                            <label class="radio-inline"><input type="radio"  value="0" checked="checked" name="samedan-radio">no</label>
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
                                <input type="text" name="config" value="{{$aeroplanes->configuration}}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-4 text-left" for="">Red Flag</label>
                            <div class="col-sm-7">
                                    <label class="radio-inline"><input type="radio" @if($aeroplanes->red_flag =='1') checked @endif value="1" name="redflag-radio">yes</label>
                                <label class="radio-inline"><input type="radio" @if($aeroplanes->red_flag =='0') checked @endif value="0" name="redflag-radio">no</label>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                                <label  class="control-label col-sm-4 text-left">Comment</label>
                            <div class="col-sm-7"><textarea name="comment" id="" class="form-control" rows="5" cols="20">{{$aeroplanes->comment}}</textarea></div>
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