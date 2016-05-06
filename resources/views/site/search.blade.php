@extends('site.master')


@section('content')

<body style="background: url(images/bgcontact.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
 <form role="form" id="contact-form" action="{{URL::to('/results')}}" method="POST" class=" ">  
  {!! csrf_field() !!}
  <div class="col-md-10 col-md-offset-3 none">
    @foreach($airplanetypes as $type)
    <label for="{{$type->id}}" class="col-md-3 text-center overlay">
      <img src="{{asset('images/plane.png')}}" alt="" class="img-responsive">
      <h4>{{$type->type}}</h4>
      <p>Min Seats: {{$type->min_seats}}</p>
      <p>Max Seats: {{$type->max_seats}}</p>
    </label>
    <input type="radio" value="{{$type->id}}" class="hidden" name="arptype" id="{{$type->id}}">
    @endforeach
    
    <div class="col-md-12 text-left">

      <input type="submit" value="submit" class="cta cta-submit">
    </div>
  </div>  


  <div class="row firstform act" >
    <div class="col-md-8 col-md-offset-3">

<div class="col-md-12  " style="margin-top: 60px;">



   <div class="col-md-4" style="background: rgba(0, 0, 0, 0.8);" >

    
<h3 style="color:white; text-align: center;">Search Flight</h3>
<hr>
<div class="checkbox" style="color: white ">
  <label style=""><input type="checkbox" style="margin-top: 0px;"value="" >One Way</label>


<span class="topic" style="background: #17839b; padding: 2px 5px; float: right;">MULTI DESTINATION</span>

</div>
<div class="checkbox" style="color: white">
  <label><input type="checkbox" value="" style="" >Round Trip</label>
</div>

<div class="col-md-12" style="padding: 0px;">
    
<ul class="search" style="    padding: 0px;">
   
    <div class="col-md-12 seletp" style="padding: 0px; text-indent: 0px !important; line-height: 26px !important;"> 
    
        <li class="selectc" style="">
            <input type="text" name="dpt_city" id="tags" placeholder="Departure City">
            <input type="text" name="dst-city" id="tags1" placeholder="Destination">
            
            <input type="text" class="dates" name="dpt-date" placeholder="Departure Date" id="datepicker">
            <input type="text" class="hours" name="dpt-hours" id="basicExample" placeholder="Hours">
            <input type="text" class="dates" name="rtn-date" placeholder="Return Date" id="datepicker1">
            <input type="text" class="hours" name="rtn-hours" id="basicExample1" placeholder="Hours">
            
            <select style="width: 100%">
                <option>Flight Type</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
        
            <select style="width: 100%">
                <option>TYPE DEVICE</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
     
            <select style="width: 100%">
                <option>NUMBER OF PASSAGERS</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
            
            <p style="color: white;     margin: 0px;"> dont:</p>
            
            <select style="width: 50%;">
                <option>ADULTS</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
          
             <select style="width: 50%; line-height: 26px !important;">
                <option>ENFANTS(<16)</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
            
             <select style="width: 50%">
                <option>BABIES(<2)</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
        </li>
        <li class="select-actions" style="margin-bottom: 11px;">
            <a href="#" id="buttonform">select category</a>
            
        </li>
   </div>
</ul>
</div>    
</form>
</div>
             
<div class="col-md-4">
       <div class="col-md-10" style="position: relative;">
       <div class="col-md-12" style="position: absolute; top: 180px;">
       <img src="images/world-map.png" class="img-responsive" alt="Cinque Terre">
       </div>
       </div>
   </div>
   
<div class="col-md-4">

      <div class="col-md-12" style="background: rgba(0, 0, 0, 0.5);  color: white;" >

            <button class="btn1 btn-form " style="display: inline-block;     margin-top: 15px; ">24 april 2016</button>

            <h3 style="margin-bottom: 0px;">PARIS</h3>
            <p>FRANCE</p>

            <h3 style="margin-bottom: 0px;">KUALA LUMPUR </h3>
            <p>MALAYSIA</p>

            <hr> 
            <div class="col-md-12" style=" padding: 0px; padding-bottom: 7px;">
            <div class="col-md-6 text-left" style="padding-left: 0px;">
               <div >
                <a style="display: inline-block; color: white;">a partir de.</a>
            </div> 
            </div>
            <div class="col-md-6 text-right" style="padding-right: 0px; bottom: 7px;">
               <div class="btn1">
                <a class="btn1 btn-form" style="display: inline-block; font-size: 12px; ">9800 eur.</a>
            </div> 
            </div>
             </div>   
           

            

      </div>



     <div class="col-md-12" style="background: rgba(0, 0, 0, 0.5);  color: white; margin-top: 10px;" >

            <button class="btn1 btn-form " style="display: inline-block; margin-top: 15px; ">24 april 2016</button>

            <h3 style=" margin-bottom: 0px;">PARIS</h3>
            <p>FRANCE</p>

            <h3 style=" margin-bottom: 0px;">KUALA LUMPUR </h3>
            <p>MALAYSIA</p>

            <hr> 

            <div class="col-md-12" style=" padding: 0px; padding-bottom: 7px;">
            <div class="col-md-6 text-left" style="padding-left: 0px;">
               <div >
                <a style="display: inline-block; color: white;">a partir de.</a>
            </div> 
            </div>
            <div class="col-md-6 text-right" style="padding-right: 0px; bottom: 7px;">
               <div class="btn1">
                <a class="btn1 btn-form" style="display: inline-block; font-size: 12px;">9800 eur.</a>
            </div> 
            </div>
            </div>
      </div>

   </div>
   
       <div class="col-md-12" style="background: rgba(49, 112, 143, 0.82);  color: white; margin-top: 8px;" >
       
       <div class="col-md-6">
       <h4 style="margin-bottom: 0px;">LES DEASDSD ACTUS</h4>
       </div>
       <div class="col-md-6">
       <button class="btn btn-form" style="display: inline-block; margin-top: 9px; float: right; width: 37%; "> toutes les active.</button>
       </div>

       <div class="col-md-12">
       <hr style="margin-top: 5px;
    margin-bottom: 10px;">
       </div>

       <div class="col-md-12" style="    padding-bottom: 10px;">
       <div class="col-md-3" style="border-left: 2px solid; border-left-color: black;">
       <p style="margin: 0px;">THEME</p>
       <p style="margin: 0px;">TITRE ASDASD ASDASD DD D DDDD asdasdd asdas</p>
       </div>


       <div class="col-md-3" style="border-left: 2px solid; border-left-color: black;">
       <p style="margin: 0px;">THEME</p>
       <p style="margin: 0px;">TITRE ASDASD ASDASD DD D DDDD asdasdd asdas</p>
       </div>



        <div class="col-md-3" style="border-left: 2px solid; border-left-color: black;">
       <p style="margin: 0px;">THEME</p>
       <p style="margin: 0px;">TITRE ASDASD ASDASD DD D DDDD asdasdd asdas</p>
       </div>


        <div class="col-md-3" style="border-left: 2px solid; border-left-color: black;">
       <p style="margin: 0px;">THEME</p>
       <p style="margin: 0px;">TITRE ASDASD ASDASD DD D DDDD asdasdd asdas</p>
       </div>

       </div>     
       </div>


</div>
</div>
  </div>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="{{URL::asset('bower_components/jt.timepicker/jquery.timepicker.js')}}"></script>
<script>
  $(function() {

    var availableTags = [
      @foreach($airports as $airport)
        "{{$airport->city}}",
      @endforeach
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
    $( "#tags1" ).autocomplete({
      source: availableTags
    });
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>
  <script>
  $(function(){
    $('#basicExample').timepicker();
    $('#basicExample1').timepicker();
    

  });
    
  </script>
 
</body>






@stop
@section('scripts')
<script>
  $(function(){
    $('#buttonform').on('click',function(){
      $('.none').removeClass('none');
      $('.act').addClass('none');

    });
  });
</script>

@stop