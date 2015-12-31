<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>

<?php
    if(isset($_GET['faculty']))
      $sel_faculty = $_GET['faculty'];
    else
      $sel_faculty = NUll;
?>

<?php

    if(isset($_POST['new_review'])){

      $new_review = $_POST['new_review'];
      add_review($new_review , $sel_faculty , $_SESSION['user_id']);
      $new_review = "";
    }
    else
      $new_review = "";
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
      $curr_faculty = get_faculty_by_name($sel_faculty);
      $curr_faculty = mysql_fetch_array($curr_faculty);
      echo "{$curr_faculty["faculty_name"]}";
      echo "<p>{$curr_faculty["faculty_branch"]}</p>";
      echo "<img src =\"images/faculty/{$curr_faculty["faculty_id"]}.jpg\"";


      //get faculty review
      $curr_faculty_review = get_faculty_review($sel_faculty);
      while($faculty_review = mysql_fetch_array($curr_faculty_review)){
       echo "<p>{$faculty_review["f_review"]}</p>";
       echo "user :";
       echo "<p>";

       $curr_user = get_user_by_id($faculty_review['f_review_user_id']);
       $curr_user = mysql_fetch_array($curr_user);
       echo $curr_user['username'];

      }
      echo "</li>";

      // to add review
      ?>
      <br>
      <form method = "post" >
      <textarea name="new_review" rows="5" cols="40"><?php echo $faculty_review['f_review']; ?></textarea>
      </p>
      <input type = "submit" value="Comment">
    </ul>
</body>
</html>
