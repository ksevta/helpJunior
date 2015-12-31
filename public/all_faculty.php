<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<html>
<head>
  <title>helpjunior</title>
  <link rel="stylesheet" type="text/css" href="stylesheets/all_.css">
</head>
<body>
  <?php
  // all faculty
      echo "<a href=\"logout.php\">logout</a>";

      $faculty_all = get_all_faculty();
      echo "<div id = \"main\" >";
      while($faculty = mysql_fetch_array($faculty_all)){
        echo "<div class=\"main_left\">";
        echo "<a href = \"faculty.php?faculty=" . urldecode($faculty['faculty_name']) .
            "\"><img src =\"images/faculty/{$faculty["faculty_id"]}.jpg\" </a>";
        echo "<br>";
        echo "<p1> <a href = \"faculty.php?faculty=" . urldecode($faculty['faculty_name']) .
            "\">{$faculty["faculty_name"]} </a></p1>";
        echo "<br>";
        echo "<p1> <a href = \"branch.php?branch=" . urldecode($faculty['faculty_branch']) .
            "\">{$faculty['faculty_branch']}</a></p1>";
        echo "</div>";
      }
      echo "</div>";
?>

</body>
</html>
