<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<?php

      //all courses
      echo "<a href=\"logout.php\">logout</a>";

      $courses_all = get_all_courses();
      echo "<div id = \"courses\" >";
      echo "<ul>";
      while($courses = mysql_fetch_array($courses_all)){
        echo "<li> <a href = \"course.php?course=" . urldecode($courses['course_name']) .
              "\">{$courses{"course_name"}} </a>";
        echo "<p> <a href = \"branch.php?branch=" . urldecode($courses{"course_branch"}) .
              "\">{$courses{"course_branch"}} </a></p> ";
        echo "</li>";
      }
      echo "</ul>";
      echo "</div>";
?>
