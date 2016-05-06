<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset("css/home.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("css/contact.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/simple-sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset("css/sidebar.css")}}">
<link rel="stylesheet" href="{{URL::asset('bower_components/jt.timepicker/jquery.timepicker.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans|Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

@include('site.sidebar')

  @include('site.navbar')
  
  @yield('content')
  
@yield('scripts')
</html>