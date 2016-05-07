<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="content-wrap" style="display: block;Margin:0 auto;margin:0 auto;background-color: #001f3f;width:600px;">
            <div class="content" style="padding: 10px; background-color: #39CCCC;text-align: center;font-size: 18px;color: white;padding: 20px 30px;">
            <div class="logo" style="margin:50px auto;Margin:50px auto;">
                <img src="{{asset('images/admin/logo/lynjet-logo-login-black.png')}}">
            </div>
            <div class="text-div" style="margin: 50px auto;Margin:50px auto;">

                <h3 style="margin: 30px auto;Margin:30px auto;">Hit reset to complete password reset and get ready to get on-board with us</h3>

            </div>
            <a href="{{URL::to('/newpassword/' .$reset_token)}}" style="background-color: #001f3f;border:3px solid #001f3f;display: inline-block;padding: 10px 40px;box-shadow: 1px 3px 5px #001f3f;text-decoration: none;cursor: pointer;color: white;margin: 30px auto;Margin:30px auto;">Reset</a>
            </div>
            <div class="footer" style="color:white;padding: 20px 30px;text-align: center;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>




        </div>

    </body>
</html>
