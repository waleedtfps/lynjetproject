<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/bootstrap/css/bootstrap.min.css")}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset("bower_components/AdminLTE/plugins/iCheck/square/blue.css")}}">
  <link rel="stylesheet" href="{{asset("css/login-style.css")}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
  <div class="content-wrap">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><img src="{{asset('images/admin/logo/lynjet-logo-login-black.png')}}"></a>
      </div>
      <!-- /.login-logo -->
      <div class="col-sm-12 text-center" style="padding-top:40px;">
          @if (Session::has('message'))
            <p class="text-green">{{ Session::get('message') }}</p>
          @endif
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Write Your Email</p>

        <form action="{{URL::to('/password/reset')}}" method="post">
           {!! csrf_field() !!}

          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="row">

            <!-- /.col -->
            <div class="col-xs-4 btn-signin">
              <button type="submit" class="btn btn-primary">Send Email</button>
            </div>
            <!-- /.col -->
          </div>
        </form>





      </div>
      <!-- /.login-box-body -->
    </div>
  </div>

<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="{{asset("bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.0.min.js")}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset("bower_components/AdminLTE/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- iCheck -->
<script src="{{asset("bower_components/AdminLTE/plugins/iCheck/icheck.min.js")}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
