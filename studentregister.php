<script src="js/jquery-2.1.3.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.8.7/dist/sweetalert2.all.js"></script>
<?php
require('db.php');
?>
<script src="js/jquery-2.1.3.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.8.7/dist/sweetalert2.all.js"></script>
<?php
if (isset($_POST['add'])){
    $name=$_POST['name'];
    $rollnumber=$_POST['rollnumber'];
    $class=$_POST['class'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    
    
$query = "INSERT into `students` (name, rollnumber, class,address,phone,gender)
VALUES ('$name', '$rollnumber', '$class','$address','$phone','$gender')";
$result = mysqli_query($con,$query);
        if($result){
            ?>  
            <script>   $(document).ready(function(){
             sweetAlert({
                title:'Sucess!',
                text: 'Successfully Inserted',
                type:'success'
          },function(isConfirm){
                alert('ok');
          });
          $('.swal2-confirm').click(function(){
                window.location.href = '<?php echo $baseurl;?>';
          });
             });  
         
</script>
<?php 
       
   
    die;
} 
else {
    echo "Error : " . mysqli_error($con);
    die;
}  
    
}
   
        
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from modularcode.io/modular-admin-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Nov 2018 09:00:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>STUDENT PANEL</title>
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
                            </div>STUDENT PANEL</h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">SIGN UP STUDENT</p>
                        <form   method="post" autocomplete="off">
                            <div class="form-group">
                                <label for="username">Name</label>
                                <input type="text" autocomplete="false" autofocus="false" class="form-control underlined" name="name" id="name" placeholder="Your Name" required> </div>
                            <div class="form-group">
                                <label for="rollnumber">Roll Number</label>
                                <input type="text" autocomplete="false" autofocus="false" class="form-control underlined" name="rollnumber" id="rollnumber" placeholder="Your Roll Number" required> </div>
                            <div class="form-group">
                                <label for="class">Class</label>
                                <input type="text" autocomplete="false" autofocus="false" class="form-control underlined" name="class" id="class" placeholder="Your Class" required> </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" autocomplete="false" autofocus="false" class="form-control underlined" name="address" id="address" placeholder="Your Address" required> </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" autocomplete="false" autofocus="false" class="form-control underlined" name="phone" id="phone" placeholder="Your Phone Number" required> </div>
                            <div class="form-group">
                                            <label class="control-label">Gender</label><br>
                                            <select class="form-control" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        
                                        </select> 
                                        </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-primary" name="add" value="Sign Up" />


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