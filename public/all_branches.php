<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<?php
      // all branches
      echo "<a href=\"logout.php\">logout</a>";
      $branches_all = get_all_branches();
      echo "<div id = \"branches\">";

      echo "<ul>";
      while($branches = mysql_fetch_array($branches_all)){
        echo "<li>";
        echo "<a href =\"branch.php?branch=" . urldecode($branches["branch_name"]) .
            "\"> {$branches{'branch_name'}} </a>";
        echo "</li>";
      }
      echo "</ul>";
      echo "</div>";
?>
