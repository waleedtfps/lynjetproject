@extends('site.master')


@section('content')

<body style="background: url(images/bgcontact.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
 <form role="form" id="contact-form" action="{{URL::to('/results')}}" method="POST" class=" ">  
  {!! csrf_field() !!}
  <div class="col-md-10 col-md-offset-2 category none">

<h2 style="text-align: center;"> NORTE FLOTTE </h2>

<div class="col-md-12" style="padding: 0px;     margin-bottom: 9px;">



<div class="col-md-2 col-md-offset-2" style="background: rgba(0, 0, 0, 0.1); top: 125px;     margin-right: 10px;">

<a href="#" style="color: black;">

<div class="col-md-12" style="padding: 0px;">

<div class="col-md-9" style="padding: 0px; text-align: center;">
<img src="images/plane.png" alt="Smiley face" height="100" width="180">
</div>

<div class="col-md-3 col-md-offset-4" style="bottom: 35px; padding: 0px; padding-bottom: 10px;">
<hr style="border-color: black;"> 
</div>

</div>
 
<div class="col-md-12" style="padding: 0px;">
<h4 style="margin-bottom: 0px;">   VERY LIGHT JET</h4>

<p style="margin-bottom:0px;">  SIEGES: 1-4</p>
<p>AUTONOMIE(h): 2:00</p>

</div>

</a>

</div>




<div class="col-md-2" style="background: rgba(0, 0, 0, 0.1); top: 125px;     margin-right: 10px;">

<a href="eeeeee" style="color: black;">

<div class="col-md-12" style="padding: 0px;">

<div class="col-md-9" style="padding: 0px; text-align: center;">
<img src="images/plane.png" alt="Smiley face" height="100" width="180">
</div>

<div class="col-md-3 col-md-offset-4" style="bottom: 35px; padding: 0px; padding-bottom: 10px;">
<hr style="border-color: black;"> 
</div>

</div>
 
<div class="col-md-12" style="padding: 0px;">
<h4 style="margin-bottom: 0px;">  LIGHT JET</h4>

<p style="margin-bottom:0px;">  SIEGES: 1-6</p>
<p>AUTONOMIE(h): 3:00</p>

</div>

</a>

</div>





<div class="col-md-2" style="background: rgba(0, 0, 0, 0.1); top: 125px;     margin-right: 10px;">

<a href="#" style="color: black;">

<div class="col-md-12" style="padding: 0px;">

<div class="col-md-9" style="padding: 0px; text-align: center;">
<img src="images/plane.png" alt="Smiley face" height="100" width="180">
</div>

<div class="col-md-3 col-md-offset-4" style="bottom: 35px; padding: 0px; padding-bottom: 10px;">
<hr style="border-color: black;"> 
</div>

</div>
 
<div class="col-md-12" style="padding: 0px;">
<h4 style="margin-bottom: 0px;">   MIDSIZE JET</h4>

<p style="margin-bottom:0px;">  SIEGES: 1-8</p>
<p>AUTONOMIE(h): 4:00</p>

</div>

</a>

</div>




<div class="col-md-2" style="background: rgba(0, 0, 0, 0.1); top: 125px;     margin-right: 10px;">

<a href="#" style="color: black;">

<div class="col-md-12" style="padding: 0px;">

<div class="col-md-9" style="padding: 0px; text-align: center;">
<img src="images/plane.png" alt="Smiley face" height="100" width="180">
</div>

<div class="col-md-3 col-md-offset-4" style="bottom: 35px; padding: 0px; ">
<hr style="border-color: black;"> 
</div>

</div>
 
<div class="col-md-12" style="padding: 0px;">
<h4 style="margin: 0px;">   SUPERMIDSIZE JET</h4>

<p style="margin-bottom:0px;">  SIEGES: 1-10</p>
<p>AUTONOMIE(h): 6:00</p>

</div>

</a>

</div>

</div>




<div class="col-md-12" style="padding: 0px;">


<div class="col-md-2 col-md-offset-2" style="background: rgba(0, 0, 0, 0.1); top: 125px;     margin-right: 10px;">

<a href="#" style="color: black;">

<div class="col-md-12" style="padding: 0px;">

<div class="col-md-9" style="padding: 0px; text-align: center;">
<img src="images/plane.png" alt="Smiley face" height="100" width="180">
</div>

<div class="col-md-3 col-md-offset-4" style="bottom: 35px; padding: 0px; padding-bottom: 10px;">
<hr style="border-color: black;"> 
</div>

</div>
 
<div class="col-md-12" style="padding: 0px;">
<h4 style="margin-bottom: 0px;">   LARGE JET</h4>

<p style="margin-bottom:0px;">  SIEGES: 1-12</p>
<p>AUTONOMIE(h): 7:30</p>

</div>

</a>

</div>



<div class="col-md-2" style="background: rgba(0, 0, 0, 0.1); top: 125px;     margin-right: 10px;">

<a href="#" style="color: black;">

<div class="col-md-12" style="padding: 0px;">

<div class="col-md-9" style="padding: 0px; text-align: center;">
<img src="images/plane.png" alt="Smiley face" height="100" width="180">
</div>

<div class="col-md-3 col-md-offset-4" style="bottom: 35px; padding: 0px; padding-bottom: 10px;">
<hr style="border-color: black;"> 
</div>

</div>
 
<div class="col-md-12" style="padding: 0px;">
<h4 style="margin-bottom: 0px;">   GLOBAL JET</h4>

<p style="margin-bottom:0px;">  SIEGES: 1-14</p>
<p>AUTONOMIE(h): 12:00</p>

</div>

</a>

</div>



<div class="col-md-2" style="background: rgba(0, 0, 0, 0.1); top: 125px;     margin-right: 10px;">

<a href="#" style="color: black;">

<div class="col-md-12" style="padding: 0px;">

<div class="col-md-9" style="padding: 0px; text-align: center;">
<img src="images/plane.png" alt="Smiley face" height="100" width="180">
</div>

<div class="col-md-3 col-md-offset-4" style="bottom: 35px; padding: 0px; padding-bottom: 10px;">
<hr style="border-color: black;"> 
</div>

</div>
 
<div class="col-md-12" style="padding: 0px;">
<h4 style="margin-bottom: 0px;">  VIP AIRLINER</h4>

<p style="margin-bottom:0px;">  SIEGES: 1-60</p>
<p>AUTONOMIE(h): 7:30</p>

</div>

</a>

</div>



<div class="col-md-2" style="background: rgba(0, 0, 0, 0.1); top: 125px;     margin-right: 10px;">

<a href="#" style="color: black;">

<div class="col-md-12" style="padding: 0px;">

<div class="col-md-9" style="padding: 0px; text-align: center;">
<img src="images/plane.png" alt="Smiley face" height="100" width="180">
</div>

<div class="col-md-3 col-md-offset-4" style="bottom: 35px; padding: 0px;">
<hr style="border-color: black;"> 
</div>

</div>
 
<div class="col-md-12" style="padding: 0px;">
<h4 style="margin: 0px;">   TURBO PROPULSER</h4>

<p style="margin-bottom:0px;">  SIEGES: 1-19</p>
<p>AUTONOMIE(h): 2:30</p>

</div>

</a>

</div>

<div class="col-md-12 text-center">
  <button class="btn btn-form" style="display: inline-block; width: 35%; float: right; ">SEARCH</button>
</div>


</div>




</div>
  <div class="row firstform act" >
    <div class="col-md-8 col-md-offset-3">

<div class="col-md-12  " style="margin-top: 60px;">



   <div class="col-md-4" style="background: rgba(0, 0, 0, 0.8);" >

    
<h3 style="color:white; text-align: center;">RECHER UN VOLT</h3>
<hr>
<div class="checkbox" style="color: white ">
  <label style=""><input type="checkbox" style="margin-top: 0px;"value="" >ALLER SIMPLE</label>


<span class="topic" style="background: #17839b; padding: 2px 5px; float: right;">MULTI DESTINATION</span>

</div>
<div class="checkbox" style="color: white">
  <label><input type="checkbox" value="" style="" >ALLER RETOUR</label>
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
                <option>TYPE DE VOL</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
        
            <select style="width: 100%">
                <option>TYPE D'APPAREIL</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
     
            <select style="width: 100%">
                <option>NOMBRE DE PASSAGERS</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
            
            <p style="color: white;     margin: 0px;"> dont:</p>
            
            <select style="width: 50%;">
                <option>ADULTES</option>
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
                <option>BEBES(<2)</option>
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
    $('#buttonform').on('click',function(){
      $('.none').removeClass('none');
      $('.act').addClass('none');

    })

  });
    
  </script>
 
</body>






@stop
