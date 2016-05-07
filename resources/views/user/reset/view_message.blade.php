<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lynjet</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <style media="screen">
      body{
        font-family: 'Roboto', sans-serif;
      }
      .content-wrap{
        background: url('{{URL::to('/images/bgoffre.jpg')}}');
        min-height: 100vh;
        background-size:cover;
        background-position: center center;
        position: absolute;
        top:0px;
        left:0px;
        right:0px;
      }
      .content-overlay{
        background: rgba(0, 0, 0, 0.75);
        min-height: 100vh;
        position: absolute;
        top:0px;
        left:0px;
        right:0px;
      }
      .content{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
      }
      .content-text{
        font-weight: 300;
        color:white;
      }
      h2{
        font-weight: 300;
        color:white;
      }


    </style>
  </head>
  <body>
    <div class="content-wrap">
      <div class="content-overlay">
        <div class="content">
          <h2 class="content-text">We have sent an email with <strong>RESET link</strong> to your email account.Check your email</h>
        </div>
      </div>
    </div>

  </body>
</html>
