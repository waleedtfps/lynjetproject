
@extends('site.master')


@section('content')

<body  style="background: url(images/homeseat.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">


<div class="container ">
<div class=" col-sm-6 col-sm-offset-3 ">
    <h1  style="color: black; text-align: center; font-size: 32px;" >THE NEWS</h1>
    <div class="row actions">
        <button type="button" class="btn main-btn pull-left btn-form">&darr;</button>
        <button type="button" class="btn main-btn pull-left btn-form">PREC.</button>
        <button type="button" class="btn main-btn pull-left btn-form">SEQ.</button>
    </div>
    <article class="news">
        <img src="images/inside.png" style="width: 100%;" >
        <p><span class="topic">NEWS THEME</span> 18.03.2015</p>
        <h4>AS NEWS</h4>
        <h5 >"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</h5> 
        <div data-spy="scroll" id="lipsum" style="max-height: 50%; overflow:scroll";>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis aliquet placerat. Nunc pulvinar eu elit nec consequat. Praesent scelerisque, lorem at tristique aliquam, justo lacus scelerisque lacus, a aliquam turpis enim sodales lorem. Duis faucibus condimentum dictum. Aliquam tristique aliquet diam, non volutpat quam luctus nec. Donec at mauris odio. Fusce a consectetur augue. Donec sed lacinia est, eu malesuada justo. Suspendisse vitae augue id ex luctus molestie ac convallis eros. Cras eu convallis leo, eget mollis metus. Duis consectetur libero a dolor sodales, vitae tempor ipsum finibus. Donec eget vehicula nisi. Sed volutpat, mi ac ullamcorper venenatis, lorem tortor lacinia nulla, et dignissim ex orci sit amet neque. Quisque sed elementum purus. Morbi ac pulvinar est.</p>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis aliquet placerat. Nunc pulvinar eu elit nec consequat. Praesent scelerisque, lorem at tristique aliquam, justo lacus scelerisque lacus, a aliquam turpis enim sodales lorem. Duis faucibus condimentum dictum. Aliquam tristique aliquet diam, non volutpat quam luctus nec. Donec at mauris odio. Fusce a consectetur augue. Donec sed lacinia est, eu malesuada justo. Suspendisse vitae augue id ex luctus molestie ac convallis eros. Cras eu convallis leo, eget mollis metus. Duis consectetur libero a dolor sodales, vitae tempor ipsum finibus. Donec eget vehicula nisi. Sed volutpat, mi ac ullamcorper venenatis, lorem tortor lacinia nulla, et dignissim ex orci sit amet neque. Quisque sed elementum purus. Morbi ac pulvinar est.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis aliquet placerat. Nunc pulvinar eu elit nec consequat. Praesent scelerisque, lorem at tristique aliquam, justo lacus scelerisque lacus, a aliquam turpis enim sodales lorem. Duis faucibus condimentum dictum. Aliquam tristique aliquet diam, non volutpat quam luctus nec. Donec at mauris odio. Fusce a consectetur augue. Donec sed lacinia est, eu malesuada justo. Suspendisse vitae augue id ex luctus molestie ac convallis eros. Cras eu convallis leo, eget mollis metus. Duis consectetur libero a dolor sodales, vitae tempor ipsum finibus. Donec eget vehicula nisi. Sed volutpat, mi ac ullamcorper venenatis, lorem tortor lacinia nulla, et dignissim ex orci sit amet neque. Quisque sed elementum purus. Morbi ac pulvinar est.</p>
           
        </div>
    </article>
    <div class="row actions" style="margin-bottom: 100px;">
        <button type="button" class="btn main-btn pull-left btn-form">&uarr;</button>
        <button type="button" class="btn main-btn pull-left btn-form">PREC.</button>
        <button type="button" class="btn main-btn pull-left btn-form">SEQ.</button>
        <button type="button" class="btn main-btn pull-right btn-form">TO CLOSE</button>
    </div>
</div>

                </div>


@stop

