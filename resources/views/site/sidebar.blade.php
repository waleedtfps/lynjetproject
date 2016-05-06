

<div class="container-fluid" id="wrapper" style="padding-left:0px;">


<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <img alt="Brand" src="{{asset('/images/admin/logo/lynjet-logo-login.png')}}">
        </li>
        <li>
            <hr style="width: 30%; color: #999999; ">
        </li>
        <li class="icon">
            <div>           
            <span class="glyphicon glyphicon-user fa-3x" aria-hidden="true" style="color: white; display: block; padding-top: 27px; padding-bottom: 10px;">
            	
            </span>
            </div>
        </li>
        <li class="button">
            <a href="{{URL::to('login')}}"class="btn btn-form">LOG IN</a>
        </li>
        <li class="button">
            <a href="{{URL::to('register')}}"class="btn btn-form">REGISTRATION</a>
        </li>
        <li class="heading devise" style="padding-top: 25px;">
            <span style="color: white; border-bottom: 1px solid #FFFFFF; padding-right: 110px;">
            MOTO
            </span>
        </li>
        <li>
            <span class="devise btn btn-form first">USD</span>
            <span class="devise btn btn-form">EUR</span>
            <span class="devise btn btn-form">CHF</span>
            <span class="devise btn btn-form">GBP</span>
        </li>
        <li class="heading" style="padding-top: 20px;">
            <span style="color: white; border-bottom: 1px solid #FFFFFF; padding-right: 65px;">
            QUICK SEARCH
            </span>
        </li>
        <li class="select">
            <select>
                <option>ALL FLIGHTS</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
            <select>
                <option>DATE OF DEPARTURE</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
            <select>
                <option>DEPARTURE</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
            <select>
                <option>DESTINATION</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
                <option>lorem ipsum...</option>
            </select>
        </li>
        <li class="select-actions">
            <a class="small" href="#">MORE...</a>
            <button class="btn btn-form" style="display: inline-block; width: 35%; ">SEARCH</button>
        </li>
    </ul>
</div>
</div>



<a style="    padding: 10px; background: black; color: white; opacity: 0.8;" href="#menu-toggle" class=" menu-toggled" id="menu-toggle">
<i id="menubutton" class="fa fa-close fa-4x" aria-hidden="true">
	
</i></a>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        if($('#wrapper').hasClass('toggled')) {
            $("#menu-toggle").removeClass('menu-toggled'); 
            $("#menubutton").removeClass('fa-close');

            $("#menubutton").addClass('fa-plus');

        }
        else {
            $("#menubutton").removeClass('fa-plus');

            $("#menubutton").addClass('fa-close');
                $("#menu-toggle").addClass('menu-toggled'); 
        }

                
        
    });
    </script>


 