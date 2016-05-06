@extends('site.master')


@section('content')
<body style="background: url(images/bgcontact.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
    
<h1 style="text-align: center; padding-bottom: 35px; padding-top: 40px;">Contact</h1>

<div class="col-md-12">

<div class="col-md-5" style="float: none; margin: 0 auto; padding: 0px;">

<form role="form" id="contact-form" class="form-horizontal contact-form">

   
		
		 <div class=" col-md-12 row location">
                <div class="col-md-4 center left allign" style="padding-right: 0px;">
                    <p><span class="country" style="border: 2px solid #236173; color: #236173; padding: 3px;">UK</span></p>
                    <p>Londres (Siège)<br/>
                    66 Buxington Road<br/>
                    London<br/>
                    020 2789 5789<br/>
                    london@pjet.com</p>
                </div>
               <div class="col-md-4">
                    <img src="images/world-map.png" width="140" height="100">
               </div>
                <div class="col-md-4 center right allign" style="padding-left: 0px;">
                <p><span class="country" style="border: 2px solid #236173; color: #236173; padding: 3px;">Fr</span></p>
                <p>Paris<br/>
                15 Rue de Miromensnil<br/>
                75008 Paris<br/>
                08 99 70 11 15<br/>
                paris@pjet.com</p>

            </div>
            </div>

            <div class="row">
            <div class="col-md-12" style="padding-top: 10px;">
                <div class="col-md-6" style="margin-top: 10px;">
                    <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name" required />
                </div>
                <div class=" col-md-6 " style="margin-top: 10px;">
                    <input type="text" class="form-control" name="surname" autocomplete="off" id="surname" placeholder="Surname" required />
                </div>
                </div>
            </div>

            	  <div class="row">
            	    <div class="col-md-12">
                <div class="col-md-6 " style="margin-top: 10px;">
                     <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail" required />
                </div>
                <div class=" col-md-6 " style="margin-top: 10px;">
                    <input type="text" class="form-control" name="Subject" autocomplete="off" id="Subject" placeholder="Subject" required />
                </div>
                </div>
            </div>

             <div class="row">
               <div class="col-md-12">
                <div class="col-md-12 " style="  margin-bottom: 5px; margin-top: 10px;">
                   
                        <textarea class="form-control textarea" style="height: 165px;" rows="3" name="Message" id="Message" placeholder="Message" required></textarea>
                     
                         <button type="submit" class=" main-btn pull-right btn-form" style="margin-top: 10px; font-family: 'Montserrat', sans-serif;">SEND A MESSAGE</button>
                </div>
                </div>
            </div>


           

</form>

</div>



</div>
</div>
</body>
@stop