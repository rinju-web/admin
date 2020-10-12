<script src="js/jquery-2.1.3.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.8.7/dist/sweetalert2.all.js"></script>
<?php
include ('db.php');
include ('auth.php');
include('header.php'); 
$id=mysqli_real_escape_string($con, $_GET['id']);
if (isset($_POST['update'])){  
    $name=$_POST['name'];
    $rollnumber=$_POST['rollnumber'];
    $class=$_POST['class'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    
 
$query="UPDATE `students` SET 
`name`='{$name}',
`rollnumber`='{$rollnumber}',
`class`='{$class}',
`address`='{$address}',
`phone`='{$phone}',
`gender`='{$gender}'

 WHERE `studentid`='{$id}';";
  
     $result = mysqli_query($con,$query);
        if($result){?>  
            <script>   $(document).ready(function(){
             sweetAlert({
                title:'Sucess!',
                text: 'Successfully Updated',
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
        }
    else{
         echo "Error : " . mysqli_error($con);
        
            }
            
}   


?>

                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content responsive-tables-page">
                    <div class="title-block">
                        <h1 class="title">Student</h1>
                        
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        
                                        <section class="example">
                                           <form role="form"  method="POST">   
                                                    <?php 
                                                    $sql="SELECT * FROM `students` WHERE `studentid`='{$id}';";
                                                    $result = mysqli_query($con, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                    $i=1;
                                                    // output data of each row
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                      
                                        <div class="form-group">
                                            <label class="control-label">Name</label>
                                            <input type="text" name="name" class="form-control underlined" value="<?php echo $row["name"] ?>" > 
                                        </div>
                                            <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <textarea rows="2"  type="text" name="address" class="form-control underlined"> <?php echo $row["address"] ?>
                                            </textarea>
                                            
                                            </div>
                                        <div class="form-group">
                                            <label class="control-label">Phone Number</label>
                                            <input type="text" name="phone" class="form-control underlined" value="<?php echo $row["phone"] ?>" > 
                                        </div>
                                        <div class="col-md-12" style="text-align: center;">
                                        <button style="width:150px;text-align: center;" name="update" type="submit"  class="btn btn-oval btn-primary">Update</button>
                                    </div>
  
                                            </div></div></div>
                                            <div class="col-md-6">
                                                
                                             <div class="card">
                                            <div class="card-block">
                                        
                                            <section class="example">  
                                            <div class="form-group">
                                            <label class="control-label">Roll number</label>
                                            <input type="text" name="rollnumber" class="form-control underlined" value="<?php echo $row["rollnumber"] ?>" > 
                                             </div>
                                             <div class="form-group">
                                            <label class="control-label">Class</label>
                                            <input type="text" name="class" class="form-control underlined" value="<?php echo $row["class"] ?>" > 
                                             </div>
                                            <div class="form-group">
                                            <label class="control-label">Gender</label><br>
                                            <select class="form-control" name="gender">
                                            <option value="Male"
                                            <?php global $a;$a = $row["gender"];if (preg_match('/\bMale\b/',$a))
                                                                    { ?> selected="selected"<?php } ?>>Male
                                            </option>
                                            <option value="Female"
                                            <?php if (preg_match('/\bFemale\b/',$a)) { ?> selected="selected"<?php } ?>>Female
                                            </option>
                                        
                                        </select> 
                                        </div>
                                            </div>


                                             <?php 
                                                    }
                                                    }
                                                    ?>
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
                <div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Media Library</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                                    </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row"> </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="https://modularcode.io/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Insert Selected</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    <i class="fa fa-warning"></i> Alert</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to do this?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
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

<!-- Mirrored from modularcode.io/modular-admin-html/responsive-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Nov 2018 09:00:58 GMT -->
</html>