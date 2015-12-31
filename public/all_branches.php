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

</body>
</html>
