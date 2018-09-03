<html>
<?php

$mystuff = array('myName' => 'Patrick', 'favoriteColor' => 'Blue', 'favoriteMovie' => 'none' , 'favoriteBook' => 'Oblivion',
'favoriteWebsite' => 'twitch.tv' );

include("includes/header.inc.php");


?>

<body>
<h1><?php echo $myName = $mystuff ['myName']; ?></h1>


<?php

function arrayLoop(){
$mystuff = array('myName' => 'Patrick', 'favoriteColor' => 'Blue', 'favoriteMovie' => 'none' , 'favoriteBook' => 'Oblivion',
'favoriteWebsite' => 'twitch.tv' );

  foreach ($mystuff as $item){
    echo  $item . "<br />";
  }

};


?>

  <?php arrayLoop(); ?>



</body>
<footer>
  <?php
  include("includes/footer.php");
  ?>
</footer>
</html>
