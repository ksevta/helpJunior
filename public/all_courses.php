<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="stylesheets/all_.css">

</head>
<body>
<?php

      //all courses
      echo "<a href=\"logout.php\">logout</a>";

      $courses_all = get_all_courses();
      echo "<div id = \"main\" >";
      while($courses = mysql_fetch_array($courses_all)){
        echo "<div class=\"main_left\">";
        echo "<a href = \"course.php?course=" . urldecode($courses['course_name']) .
              "\">{$courses{"course_name"}} </a>";
        echo "<br>";
        echo "<p1> <a href = \"branch.php?branch=" . urldecode($courses{"course_branch"}) .
              "\">{$courses{"course_branch"}} </a></p1> ";
        echo "<div>";
      }
      echo "</div>";
?>


</body>
</html>
