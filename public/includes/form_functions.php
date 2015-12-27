<?php require_once("includes/functions.php") ?>

<?php

  function mysql_prep( $value ) {
    $magic_quotes_active = get_magic_quotes_gpc();
    $new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
    if( $new_enough_php ) { // PHP v4.3.0 or higher
      // undo any magic quote effects so mysql_real_escape_string can do the work
      if( $magic_quotes_active ) { $value = stripslashes( $value ); }
      $value = mysql_real_escape_string( $value );
    } else { // before PHP v4.3.0
      // if magic quotes aren't already on then add slashes manually
      if( !$magic_quotes_active ) { $value = addslashes( $value ); }
      // if magic quotes are active, then the slashes already exist
    }
    return $value;
  }

function check_required_fields($required_array) {
  $field_errors = array();
  foreach($required_array as $fieldname) {
    if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]) && $_POST[$fieldname] != 0)) {
      $field_errors[] = $fieldname;
    }
  }
  return $field_errors;
}


function check_max_field_lengths($field_length_array) {
  $field_errors = array();
  foreach($field_length_array as $fieldname => $maxlength ) {
    if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength) { $field_errors[] = $fieldname; }
  }
  return $field_errors;
}

function display_errors($error_array) {
  echo "<p class=\"errors\">";
  echo "Please review the following fields:<br />";
  foreach($error_array as $error) {
    echo " - " . $error . "<br />";
  }
  echo "</p>";
}

//check email is already registered or not
  function check_email($email){
      $query = "SELECT id, username ";
      $query .= "FROM user ";
      $query .= "WHERE email = '{$email}' ";
      $query .= "LIMIT 1";
      $result_set = mysql_query($query);
      confirm_query($result_set);
      $email_error = array();
      if(mysql_num_rows($result_set) > 0)
      {
        $email_error[] = "email is used";
      }
      return $email_error;
  }

?>
