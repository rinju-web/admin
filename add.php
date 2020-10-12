<?php
require('db.php');
include ('auth.php');
include('header.php'); 
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
                window.location.href = '<?php echo $baseurl;?>view.php';
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

                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content forms-page">
                    <div class="title-block">
                        <h3 class="title">Student</h3>
                        <!-- <p class="title-description"> Sample form elements </p> -->
                    </div>
                    <div class="subtitle-block">
                        <h3 class="subtitle">Add Student</h3>
                    </div>
                   <section class="section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        
                                        <section class="example">
                                           <form role="form"  method="POST">   
                                              
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input type="text" name="name" class="form-control underlined" value="" > 
                                        </div>
                                            <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <textarea rows="2"  type="text" name="address" class="form-control underlined"></textarea>
                                            
                                            </div>
                                        <div class="form-group">
                                            <label class="control-label">Phone Number</label>
                                            <input type="text" name="phone" class="form-control underlined"value="" > 
                                        </div>
                                        <div class="col-md-12" style="text-align: center;">
                                        <button style="width:150px;text-align: center;" name="add" type="submit"  class="btn btn-oval btn-primary">Add</button>
                                    </div>
  
                                            </div></div></div>
                                            <div class="col-md-6">
                                                
                                             <div class="card">
                                            <div class="card-block">
                                        
                                            <section class="example">  
                                            <div class="form-group">
                                            <label class="control-label">Roll number</label>
                                            <input type="text" name="rollnumber" class="form-control underlined" value="" > 
                                             </div>
                                             <div class="form-group">
                                            <label class="control-label">Class</label>
                                            <input type="text" name="class" class="form-control underlined" value="" > 
                                             </div>
                                            <div class="form-group">
                                            <label class="control-label">Gender</label><br>
                                            <select class="form-control" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        
                                        </select> 
                                        </div>
                                            </div>


                                            
                                                </form> 
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                   
                    
                </article>
                <footer class="footer">
                   
                    <div class="footer-block author">
                        <ul>
                            <li> created by
                                <a href="#">Rinju</a>
                            </li>
                            <li>
                                <a href="#">get in touch</a>
                            </li>
                        </ul>
                    </div>
                </footer>
               
                <!-- /.modal -->
              
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
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
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

<!-- Mirrored from modularcode.io/modular-admin-html/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Nov 2018 09:00:59 GMT -->
</html>