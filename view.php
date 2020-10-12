<?php
include ('db.php');
include ('auth.php');

include('header.php'); 

?>

                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content responsive-tables-page">
                    <div class="title-block">
                        <h1 class="title">Students</h1>
                        
                    </div>
                    <a href="add.php" class="btn btn-oval btn-primary"> Add </a>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <?php
                                                            $sql="SELECT * FROM `students_table_header` ";
                                                    $result = mysqli_query($con, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <th><?php echo $row["heading"] ?></th>
                                                     <?php }
                                                    } ?>       
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <?php 
                                                    $sql="SELECT * FROM `students` ";
                                                    $result = mysqli_query($con, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                    $i=1;
                                                    // output data of each row
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row["name"] ?></td>
                                                    <td><?php echo $row["rollnumber"] ?></td>
                                                    <td><?php echo $row["class"] ?></td>
                                                    <td><?php echo $row["address"] ?></td>
                                                    <td><?php echo $row["phone"] ?></td>
                                                    <td><?php echo $row["gender"] ?></td>
                                                    <td><a href="edit-student.php?id=<?php echo $row["studentid"]?>">Edit</a>/<a href="student-delete.php?id=<?php echo $row["studentid"]?>">Delete</a></td>
                                                </tr>
                                                <?php 
                                                $i++;
                                                    }
                                                    }
                                                    else{ ?>
                                                        <tr><td colspan="8">No Data Found</td></tr>

                                                    <?php }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
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

</html>