<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<?php
    if(isset($_GET['branch']))
      $sel_branch = $_GET['branch'];
    else
      $sel_branch = NUll;
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
      $curr_branch = get_branch_by_name($sel_branch);
      $curr_branch = mysql_fetch_array($curr_branch);
      echo "{$curr_branch["branch_name"]}";


      //get branch review
      $curr_branch_review = get_branch_review($sel_branch);
      while($branch_review = mysql_fetch_array($curr_branch_review)){
       echo "<p>{$branch_review["b_review"]}</p>";
      }
      echo "</li>";
    ?>
    </ul>

</body>
</html>
