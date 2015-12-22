<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<html>
<head>
  <title>helpJunior</title>
    <link href="stylesheets/content.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
  <h1>helpJunior</h1>

  <?php
      $faculty_all = get_all_faculty();

      echo "<div id = \"faculty\" >";
      echo "<ul>";
      while($faculty = mysql_fetch_array($faculty_all)){
        echo "<li> <a href = '#'>{$faculty['faculty_name']} </a>";
        echo "<p> <a href = '#'>{$faculty['faculty_branch']}</a></p>";
        echo "</li>";
      }
      echo "</ul>";
      echo "</div>";

      //all courses
      $courses_all = get_all_courses();
      echo "<div id = \"courses\" >";
      echo "<ul>";
      while($courses = mysql_fetch_array($courses_all)){
        echo "<li> <a href = '#'>{$courses{"course_name"}} </a>";
        echo "<p> <a href = '#'>{$courses{"course_branch"}} </a></p> ";
        echo "</li>";
      }
      echo "</ul>";
      echo "</div>";

      //all branches
      $branches_all = get_all_branches();
      echo "<div id = \"branches\">";
      echo "<ul>";
      while($branches = mysql_fetch_array($branches_all)){
        echo "<li>";
        echo "<a href =\"#\"> {$branches{'branch_name'}} </a>";
        echo "</li>";
      }
  ?>
</body>
</html>















