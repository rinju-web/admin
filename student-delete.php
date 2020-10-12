<script src="js/jquery-2.1.3.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.8.7/dist/sweetalert2.all.js"></script>
<?php
require('db.php');
$id=mysqli_real_escape_string($con, $_GET['id']);
$sql1="DELETE FROM `students` WHERE `studentid`='{$id}';";
if (mysqli_query($con, $sql1)) {
	?>
<script>   $(document).ready(function(){
             sweetAlert({
                title:'Sucess!',
                text: 'Successfully Deleted',
                type:'success'
          },function(isConfirm){
                alert('ok');
          });
          $('.swal2-confirm').click(function(){
              window.location.href = '<?php echo $baseurl;?>view.php';
          });
             });  
         
</script>
<?php } ?>