

<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/session.php");?>

<?php confirm_logged_in() ?>

<html>
<head>
  <title>helpJunior</title>
    <link href="stylesheets/all_.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/nav.css">

    </style>
</head>
<body>

  <ul class = "horizontal">
    <li ><a class="heading" href="content.php">helpjunior</a></li>
    <ul style="float:right;list-style-type:none;">
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
  <!-- ------------------------------------------------------------------------------------------- -->

   <?php
      // all branches
      echo "<a href=\"logout.php\">logout</a>";
      $branches_all = get_all_branches();
      echo "<div id = \"branches\">";

      echo "<div id = \"main\" >";
      while($branches = mysql_fetch_array($branches_all)){
        echo "<div class=\"main_left\">";

        echo "<a href =\"branch.php?branch=" . urldecode($branches["branch_name"]) .
            "\"> {$branches{'branch_name'}} </a>";

       echo "</div>";

      }
      echo "</div>";
  ?>
 <!-- ------------------------------------------------------------------------------------------- -->
  </div>
</body>
</html>















