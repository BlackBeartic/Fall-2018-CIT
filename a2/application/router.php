<?php
function __autoload($class) {
include_once 'application/load.class.php';
include_once 'application/model/user.class.php';
include_once 'application/model/model.class.php';
include_once 'application/controller/controller.class.php';
}
new Controller();

?>
