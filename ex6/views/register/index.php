<?php

include('views/elements/header.php');
?>
<?php
public function index(){


}

 ?>
<div class="container">
	<div class="page-header">
   <h1>Register</h1>

   <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

<?php include ('elements/registration_form.php');
echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';
?>

</div>
</div>

<?php include('views/elements/footer.php');
?>
