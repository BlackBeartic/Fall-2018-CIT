
<?php
include('views/elements/header.php');?>

<?php
if( is_array($user) ) {
	extract($user);}?>

<div class="container">
	<div class="page-header">

<h1>Member <?php echo $user[uID];?></h1>
        <p>Email: <?php echo $user['email'];?></p>
  </div>
	<?php if($u->isAdmin()) { ?>
		<input type = "button">Approve</button> <button type = "button">Delete</button>


</div>

<?php include('views/elements/footer.php');?>
