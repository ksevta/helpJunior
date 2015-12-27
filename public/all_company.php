<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<?php
    //all company

    echo "<a href=\"logout.php\">logout</a>";
    $company_all = get_all_company();
    echo "<div id = \"company\">";
    echo "<ul>";
    while($company = mysql_fetch_array($company_all)){
      echo "<li> <a href =\"company.php?company=" .urldecode($company["company_name"]) .
       "\">{$company["company_name"]} </a>";
      echo "</li>";

    }
    echo "</ul>";
    echo "</div>";

?>
