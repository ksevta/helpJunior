<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<?php
    if(isset($_GET['faculty']))
      $sel_faculty = $_GET['faculty'];
    else
      $sel_faculty = NUll;
?>

<html>
<head>
  <title>helpJunior</title>
  </head>
<body>
    <ul>
    <?php

      echo "<a href=\"logout.php\">logout</a>";

      //echo $sel_faculty;
      echo "<li>";
      $curr_faculty = get_faculty_by_name($sel_faculty);
      $curr_faculty = mysql_fetch_array($curr_faculty);
      echo "{$curr_faculty["faculty_name"]}";


    ?>
    </ul>
    <form action = "temp1.php" >
    <p>review
      <input type="text" rowes = "10">
    </p>
    </form>
</body>
</html>
