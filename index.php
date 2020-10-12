<script src="js/jquery-2.1.3.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.8.7/dist/sweetalert2.all.js"></script>
<?php
require('db.php');

session_start();
if(isset($_SESSION["username"])){
header("Location: dashboard.php");
}

            
    
// If form submitted, insert values into the database.
if (isset($_POST['login'])){
        // removes backslashes
    $username = stripslashes($_REQUEST['uname']);
        //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['pass']);
    $password = mysqli_real_escape_string($con,$password);
         $query = "SELECT * FROM `admin` WHERE username='$username'
and password='$password'";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
        $_SESSION['username'] = $username;
         $_SESSION['logged']=true;
            // Redirect user to index.php
        header("Location: dashboard.php");
         }else{ $_SESSION['logged']=false;
         ?>
               <script>
             $(document).ready(function(){
            swal({
  title: 'Error!',
  text: 'Username Error',
  type: 'error',
  confirmButtonText: 'close'
})
             });
             </script>

             <?php
    }
    }else{
    }
?>
<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from modularcode.io/modular-admin-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Nov 2018 09:00:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ADMIN PANEL</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
    </head>
    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo">
                                <span class="l l1"></span>
                                <span class="l l2"></span>
                                <span class="l l3"></span>
                                <span class="l l4"></span>
                                <span class="l l5"></span>
                            </div>ADMIN PANEL</h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">LOGIN TO CONTINUE</p>
                        <form   method="post" autocomplete="off">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" autocomplete="false" autofocus="false" class="form-control underlined" name="uname" id="username" placeholder="Your username" required> </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control underlined" name="pass" id="password" placeholder="Your password" required> </div>
                            <div class="form-group">
                                <label for="remember">
                                    <input class="checkbox" id="remember" type="checkbox">
                                    <span>Remember me</span>
                                </label>
                                
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-primary" name="login" value="Login" />
                                <a href="adminregister.php" class="btn btn-block btn-primary">Admin Register</a>
                                <a href="studentregister.php" class="btn btn-block btn-primary">Student Register</a>

                            </div>
                           
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>

<!-- Mirrored from modularcode.io/modular-admin-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Nov 2018 09:00:58 GMT -->
</html>