<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<?php
    if(isset($_GET['course']))
      $sel_course = $_GET['course'];
    else
      $sel_course = NUll;
?>

<html>
<head>
  <title>helpJunior</title>
  </head>
<body>
    <ul>
    <?php

      echo "<a href=\"logout.php\">logout</a>";
      echo "<li>";
      $curr_course = get_course_by_name($sel_course);
      $curr_course = mysql_fetch_array($curr_course);
      echo "{$curr_course["course_name"]}";

      // get course review
      $curr_course_review = get_course_review($sel_course);
      while($course_review = mysql_fetch_array($curr_course_review)){
       echo "<p>{$course_review["c_review"]}</p>";
      }
      echo "</li>";
    ?>
    </ul>

</body>
</html>
