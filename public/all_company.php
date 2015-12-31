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
    //all company

    echo "<a href=\"logout.php\">logout</a>";
    $company_all = get_all_company();

    echo "<div id = \"main\" >";
    while($company = mysql_fetch_array($company_all)){
      echo "<div class=\"main_left\">";

      echo " <a href =\"company.php?company=" .urldecode($company["company_name"]) .
       "\"><img width = \"100\" height = \"100 \"src =\"images/company/{$company["company_id"]}.png\"  </a>";
      echo "<a href =\"company.php?company=" .urldecode($company["company_name"]) .
       "\">{$company["company_name"]} </a>";
       echo "</div>";
    }
    echo "</div>";

?>


</body>
</html>
