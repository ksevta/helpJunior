<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<?php
    if(isset($_GET['company']))
      $sel_company = $_GET['company'];
    else
      $sel_company = NUll;
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
      $curr_company = get_company_by_name($sel_company);
      $curr_company = mysql_fetch_array($curr_company);
      echo "{$curr_company["company_name"]}";

      //get company review
      $curr_company_review = get_company_review($sel_company);
      while($company_review = mysql_fetch_array($curr_company_review)){
       echo "<p>{$company_review["c_review"]}</p>";
      }
      echo "</li>";
    ?>
    </ul>
</body>
</html>
