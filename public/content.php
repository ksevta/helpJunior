

<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/session.php");?>

<?php confirm_logged_in() ?>

<html>
<head>
  <title>helpJunior</title>
    <link href="stylesheets/content.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/nav.css">

    </style>
</head>
<body>

  <ul class = "horizontal">
    <li ><a class="heading" href="content.php">helpjunior</a></li>
    <ul style="float:right;list-style-type:none;">
      <li><a href="#user"><?php echo $_SESSION['username'] ;?></a></li>
      <li><a href="#about">About</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
   </ul>

  <ul class = "vertical">
    <li ><a class="active" href="content.php">Home</a></li>
    <li ><a href="all_company.php">Company</a></li>
    <li ><a href="all_faculty.php">Faculty</a></li>
    <li ><a href="all_courses.php">Courses</a></li>
    <li ><a href="all_branches.php">Branches</a></li>
  </ul>

  <div style="padding:20px;margin-top:30px;margin-left:25%;height:1000px;">
  <?php
    //all company
    $company_all = get_all_company();
    echo "<div id = \"main\">";

    echo "<a href =\"all_company.php\"> Company </a>";
    while($company = mysql_fetch_array($company_all)){
      echo "<div class = \"main_left\" >";

      echo " <a href =\"company.php?company=" .urldecode($company["company_name"]) .
       "\"><img width = \"100\" height = \"100 \"src =\"images/company/{$company["company_id"]}.png\"  </a>";

      echo " <a href =\"company.php?company=" .urldecode($company["company_name"]) .
       "\">{$company["company_name"]} </a>";
       echo "</div>";
    }
    echo "</div>";

     // all faculty
     $faculty_all = get_all_faculty();

      echo "<div id = \"main\" >";
      echo "<a href =\"all_faculty.php\"> Faculty </a>";

      while($faculty = mysql_fetch_array($faculty_all)){
        echo "<div class = \"main_left\" >";
        echo "<a href = \"faculty.php?faculty=" . urldecode($faculty['faculty_name']) .
            "\"><img width = \"100\" height = \"100\" src =\"images/faculty/{$faculty["faculty_id"]}.jpg\" </a>";
        echo "<p1><a href = \"faculty.php?faculty=" . urldecode($faculty['faculty_name']) .
            "\">{$faculty["faculty_name"]} </a></p1>";
        echo "<br>";
        echo "<p1> <a href = \"branch.php?branch=" . urldecode($faculty['faculty_branch']) .
            "\">{$faculty['faculty_branch']}</a></p1>";
        echo "</div>";
      }
      echo "</div>";

      //all courses
      $courses_all = get_all_courses();
      echo "<div id = \"main\" >";

      echo "<a href =\"all_courses.php\"> Courses </a>";
      while($courses = mysql_fetch_array($courses_all)){

        echo "<div class = \"main_left\" >";
        echo "<a href = \"course.php?course=" . urldecode($courses['course_name']) .
              "\">{$courses{"course_name"}} </a>";
        echo "<p1> <a href = \"branch.php?branch=" . urldecode($courses{"course_branch"}) .
              "\">{$courses{"course_branch"}} </a></p1> ";
        echo "</div>";
      }
      echo "</div>";

      //all branches
      $branches_all = get_all_branches();
      echo "<div id = \"branches\">";
      echo "<div id = \"main\" >";
      echo "<a href =\"all_branches.php\"> Branches </a>";
      while($branches = mysql_fetch_array($branches_all)){
        echo "<div class = \"main_left\" >";
        echo "<a href =\"branch.php?branch=" . urldecode($branches["branch_name"]) .
            "\"> {$branches{'branch_name'}} </a>";
        echo "</div>";
      }
      echo "</div>";
  ?>
  </div>
</body>
</html>















