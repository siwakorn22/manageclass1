<?php

 include_once "../model/ConDB.php";
 include_once "../model/User.php";
 $teacher_id = $_GET["teacher_id"];
 $obj_id = new User();
 $rs= $obj_id->delCourse($teacher_id);
?>


<?php
 include "../view/manage_users.php";
?>
