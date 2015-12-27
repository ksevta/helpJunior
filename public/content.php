<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/session.php");?>

<?php confirm_logged_in() ?>

<html>
<head>
  <title>helpJunior</title>
    <link href="stylesheets/content.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
  <h1>helpJunior</h1>

  <a href="logout.php">logout</a>
  <?php
    //all company
    $company_all = get_all_company();
    echo "<div id = \"company\">";

    echo "<a href =\"all_company.php\"> Company </a>";

    echo "<ul>";
    while($company = mysql_fetch_array($company_all)){
      echo "<li> <a href =\"company.php?company=" .urldecode($company["company_name"]) .
       "\">{$company["company_name"]} </a>";
      echo "</li>";

    }
    echo "</ul>";
    echo "</div>";

     // all faculty
      $faculty_all = get_all_faculty();

      echo "<div id = \"faculty\" >";

      echo "<a href =\"all_faculty.php\"> Faculty </a>";

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

      //all courses
      $courses_all = get_all_courses();
      echo "<div id = \"courses\" >";

      echo "<a href =\"all_courses.php\"> Courses </a>";

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

      //all branches
      $branches_all = get_all_branches();
      echo "<div id = \"branches\">";

      echo "<a href =\"all_branches.php\"> Branches </a>";

      echo "<ul>";
      while($branches = mysql_fetch_array($branches_all)){
        echo "<li>";
        echo "<a href =\"branch.php?branch=" . urldecode($branches["branch_name"]) .
            "\"> {$branches{'branch_name'}} </a>";
        echo "</li>";
      }
      echo "</ul>";
  ?>
</body>
</html>















