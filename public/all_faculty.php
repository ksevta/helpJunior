<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<?php
  // all faculty
      $faculty_all = get_all_faculty();
      echo "<a href=\"logout.php\">logout</a>";
      echo "<div id = \"faculty\" >";
      echo "<ul>";
      while($faculty = mysql_fetch_array($faculty_all)){
        echo "<li> <a href = \"faculty.php?faculty=" . urldecode($faculty['faculty_name']) .
            "\">{$faculty["faculty_name"]} </a>";
        echo "<p> <a href = \"branch.php?branch=" . urldecode($faculty['faculty_branch']) .
            "\">{$faculty['faculty_branch']}</a></p>";
        echo "</li>";
      }
      echo "</ul>";
      echo "</div>";
?>
