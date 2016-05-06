@extends('layouts.master')

@section('content')

<div class="col-sm-8">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Main</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Specification</a></li>    
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Services/Facilities</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Airports</a></li> 

    </ul>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add a new Aeroplane</h3>
        </div>
        <div class="box-body">
            <form class="form-horizontal" role="form" action="{{URL::to('aeroplanes/update')}}" method="POST">            
                {!! csrf_field() !!}

                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="home">

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Reference</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="ref" value="{{$aeroplane->ref}}>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Base</label>
                            <div class=" col-sm-4"> 
                               
                                <select class="form-control" id="sel1" name="base" value="{{$aeroplane->base }}>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Type</label>
                            <div class=" col-sm-4"> 
                      
                                <select class="form-control" id="sel1" name="type" value="{{$aeroplane->_type }}>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Company</label>
                            <div class=" col-sm-4"> 
                                <select class="form-control" id="sel1" name="company" value="{{ }}>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">YOM(year of manufacturing)</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="yom" value="{{$aeroplane->yom }}>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">YOR(year of refurbishment)</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="yor" value="{{$aeroplane->yor }}>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Airplane type</label>
                            <select name="id_type" class="form-control"  id="">
                                @foreach($airplanetype as $airplanetype)
                                <option value="{{$airplanetype->id}}">{{$airplanetype->type}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>


                    <div role="tabpanel" class="tab-pane" id="profile">      

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Seats(without toilet seat)</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="seats" value="{{$aeroplane->seat}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Minimum 2 crew members?</label>
                                
                            <label class="radio-inline"><input type="radio" name="2crew" value="crewy" @if($aeroplane->is_minimum_2_crews=='crewy')selected @endif >yes</label>
                            
                            <label class="radio-inline"><input type="radio" name="2crew" value="crewn" @if($aeroplane->is_minimum_2_crews=='crewn')selected @endif>no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Smoking permitted?</label>

                            <label class="radio-inline"><input type="radio" name="smoke" value="smokey">yes</label>
                            <label class="radio-inline"><input type="radio" name="smoke" value="smoken">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Pet permitted?</label>

                            <label class="radio-inline"><input type="radio" name="pet" value="pety">yes</label>
                            <label class="radio-inline"><input type="radio" name="pet" value="petn">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Hot catering in cabin?</label>

                            <label class="radio-inline"><input type="radio" name="catering" value="cateringy">yes</label>
                            <label class="radio-inline"><input type="radio" name="catering" value="cateringn">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Owner approval needed?</label>

                            <label class="radio-inline"><input type="radio" name="owner" value="ownery">yes</label>
                            <label class="radio-inline"><input type="radio" name="owner" value="ownern">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Allowed to perform worldwide?</label>

                            <label class="radio-inline"><input type="radio" name="worldwide" value="worldwidey">yes</label>
                            <label class="radio-inline"><input type="radio" name="worldwide" value="worldwiden">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Excluded countries</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="excluded_countries">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Skis in luggage compartment?</label>

                            <label class="radio-inline"><input type="radio" name="skis_luggage" value="skis_luggage_y">yes</label>
                            <label class="radio-inline"><input type="radio" name="skis_luggage" value="skis_luggage_n">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">If 'yes' how many luggage</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="luggage_no">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">If 'yes' how many skiss</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="skis_no">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Golf bag in luggage compartment?</label>

                            <label class="radio-inline"><input type="radio" name="golfbag" value="golfbagy">yes</label>
                            <label class="radio-inline"><input type="radio" name="golfbag" value="golfbagn">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">If 'yes' how many golf bags</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="golfbag_no">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Maximum takeoff weight(MTOW)</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="takeoff_weight">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Crew duty time</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="crew_time">
                            </div>
                        </div>

                    </div>

                    <div role="tabpanel" class="tab-pane" id="messages"> 

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Included catering type</label>
                            <div class=" col-sm-4"> 
                                <select class="form-control" id="sel1" name="catering_type">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Flight attendent included?</label>

                            <label class="radio-inline"><input type="radio" name="flight_attendent" value="flight_attendent_y">yes</label>
                            <label class="radio-inline"><input type="radio" name="flight_attendent" value="flight_attendent_n">no</label>
                        </div>                        

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Flight attendent number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="flight_attendent_no">
                            </div>
                        </div>                                     


                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">If no is it upon request and on extra charge?</label>

                            <label class="radio-inline"><input type="radio" name="attendent_extra" value="attendent_extra_y">yes</label>
                            <label class="radio-inline"><input type="radio" name="attendent_extra" value="attendent_extra_n">no</label>
                        </div>                             

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Flight attendent extra charges</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="attendent_extra_charge">
                            </div>
                        </div>              

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Engineer cost</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="engineer_cost">
                            </div>
                        </div>                           

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Has bedroom?</label>

                            <label class="radio-inline"><input type="radio" name="bedroom" value="bedroomy">yes</label>
                            <label class="radio-inline"><input type="radio" name="bedroom" value="bedroomn">no</label>
                        </div>                            


                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Possible beds with additional mattress?</label>

                            <label class="radio-inline"><input type="radio" name="additional_matteres" value="additional_matteresy">yes</label>
                            <label class="radio-inline"><input type="radio" name="additional_matteres" value="additional_matteresn">no</label>
                        </div>                            


                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">If 'yes' how many beds</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="beds_no">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Individual screen?</label>

                            <label class="radio-inline"><input type="radio" name="Individual_screen" value="screeny">yes</label>
                            <label class="radio-inline"><input type="radio" name="Individual_screen" value="screenn">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">If 'yes' how many screens</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="screens_no">
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Ipad tablet number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="tablet_no">
                            </div>
                        </div>    

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Ipad tablet cost(per item)</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="tablet_cost">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Internet connection?</label>

                            <label class="radio-inline"><input type="radio" name="Internet_connection" value="Internet_connectiony">yes</label>
                            <label class="radio-inline"><input type="radio" name="Internet_connection" value="Internet_connectionn">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">If 'yes' how much is the extra per mb</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="net_mb_extra">
                            </div>
                        </div>                          

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Wheelchair assistance cost</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="" name="Wheelchair_assistance_cost">
                            </div>
                        </div>                         
                    </div>  

                    <div role="tabpanel" class="tab-pane" id="settings"> 

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Africa permitted?</label>

                            <label class="radio-inline"><input type="radio" name="africa" value="africay">yes</label>
                            <label class="radio-inline"><input type="radio" name="africa" value="african">no</label>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Waiver program member?</label>

                            <label class="radio-inline"><input type="radio" name="Waiver" value="Waivery">yes</label>
                            <label class="radio-inline"><input type="radio" name="Waiver" value="Waivern">no</label>
                        </div> 
                        <h4> Airplane and crew qualified to perform in following locations</h4>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Figari</label>

                            <label class="radio-inline"><input type="radio" name="optradio">yes</label>
                            <label class="radio-inline"><input type="radio" name="optradio">no</label>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">London City</label>

                            <label class="radio-inline"><input type="radio" name="optradio">yes</label>
                            <label class="radio-inline"><input type="radio" name="optradio">no</label>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">La Mole</label>

                            <label class="radio-inline"><input type="radio" name="optradio">yes</label>
                            <label class="radio-inline"><input type="radio" name="optradio">no</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Annecy</label>

                            <label class="radio-inline"><input type="radio" name="optradio">yes</label>
                            <label class="radio-inline"><input type="radio" name="optradio">no</label>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Cannes</label>

                            <label class="radio-inline"><input type="radio" name="optradio">yes</label>
                            <label class="radio-inline"><input type="radio" name="optradio">no</label>
                        </div> 

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Samedan</label>

                            <label class="radio-inline"><input type="radio" name="optradio">yes</label>
                            <label class="radio-inline"><input type="radio" name="optradio">no</label>
                        </div> 


                        <h4> Please add locations your aircraft is not approved to get into</h4>   

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="">Locations
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" placeholder="">
                            </div>
                        </div> 

                        <input class="form-control btn btn-primary" type="submit">	

                    </div>

                </div>










            </form>
        </div>
    </div>                
</div>
</div>


@stop