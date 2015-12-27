<?php
  //to store all basic functions.


  function confirm_query($result_set) {
    if (!$result_set) {
      die("Database query failed: " . mysql_error());
    }
  }

  //function for redirect
  function redirect_to( $location = NULL ) {
    if ($location != NULL) {
      header("Location: {$location}");
      exit;
    }
  }

  //get user by id
  function get_user_by_id($user_id){
    global  $connection;

    $query = "SELECT username ";
    $query .= "FROM user ";
    $query .= "WHERE id = '{$user_id}' ";
    $query .= "LIMIT 1";

    $curr_user = mysql_query($query , $connection);
    confirm_query($curr_user);
    return $curr_user;
  }

  // get all faculty
  function get_all_faculty(){
    global $connection;
    $query = "SELECT *
            FROM faculty
            ORDER BY  faculty_name ASC ";
    $faculty_all = mysql_query($query,$connection);
    confirm_query($faculty_all);
    return $faculty_all;
  }

  // get all faculty by branch
  function get_faculty_by_branch($user_branch){
    global $connection;
    $query = "SELECT *
          FROM faculty
          WHERE faculty_branch = {$user_branch}
          ORDER BY  faculty_name ASC ";
    $faculty_bb = mysql_query($query , $connection);
    confirm_query($faculty_bb);                      //faculty_bb = faculty by branch
    return $faculty_bb;
  }

  // in faculty.php give data of selected faculty
  function get_faculty_by_name($sel_faculty){
    global $connection;
    $query = "SELECT *
            FROM faculty
            WHERE faculty_name = '{$sel_faculty}'";
    $faculty_bn = mysql_query($query , $connection);
    confirm_query($faculty_bn);
    return $faculty_bn;

  }

  //get faculty review
  function get_faculty_review($sel_faculty){
    global $connection;
    $query = "SELECT *
            FROM faculty_review
            WHERE f_name = '{$sel_faculty}'";
    $f_review = mysql_query($query , $connection);
    confirm_query($f_review);
    return $f_review;
  }



  //get all courses
   function get_all_courses(){
    global $connection;
    $query = "SELECT *
            FROM courses
            ORDER BY course_name ASC ";
    $courses_all = mysql_query($query,$connection);
    confirm_query($courses_all);
    return $courses_all;
  }

  //all data for selected course
  function get_course_by_name($sel_course){
    global $connection;
    $query = "SELECT *
            FROM courses
            WHERE course_name = '{$sel_course}'";
    $course_bn = mysql_query($query , $connection);
    confirm_query($course_bn);
    return $course_bn;
  }

  //get course review
   function get_course_review($sel_course){
    global $connection;
    $query = "SELECT *
            FROM course_review
            WHERE c_name = '{$sel_course}'";
    $c_review = mysql_query($query , $connection);
    confirm_query($c_review);
    return $c_review;
  }

  //get all branches
  function get_all_branches(){
    global $connection;
    $query = "SELECT *
           FROM branches
           ORDER BY branch_name ASC ";
    $branches_all = mysql_query($query , $connection);
    confirm_query($branches_all);
    return $branches_all;
  }

  //all data for selected branch
  function get_branch_by_name($sel_branch){
    global $connection;
    $query = "SELECT *
            FROM branches
            WHERE branch_name = '{$sel_branch}'";
    $branch_bn = mysql_query($query , $connection);
    confirm_query($branch_bn);
    return $branch_bn;

  }

  //get faculty review
  function get_branch_review($sel_branch){
    global $connection;
    $query = "SELECT *
            FROM branch_review
            WHERE b_name = '{$sel_branch}'";
    $b_review = mysql_query($query , $connection);
    confirm_query($b_review);
    return $b_review;
  }

  //company

  // get all company
  function get_all_company(){
    global $connection;
    $query = "SELECT *
            FROM company
            ORDER BY  company_name ASC ";
    $company_all = mysql_query($query,$connection);
    confirm_query($company_all);
    return $company_all;
  }

  // in company.php give data of selected faculty
  function get_company_by_name($sel_company){
    global $connection;
    $query = "SELECT *
            FROM company
            WHERE company_name = '{$sel_company}'";
    $company_bn = mysql_query($query , $connection);
    confirm_query($company_bn);
    return $company_bn;

  }

   //get company review
  function get_company_review($sel_company){
    global $connection;
    $query = "SELECT *
            FROM company_review
            WHERE c_name = '{$sel_company}'";
    $c_review = mysql_query($query , $connection);
    confirm_query($c_review);
    return $c_review;
  }

  // add review
  function add_review($new_review , $sel_faculty ,$user_id){
      if(!empty($new_review)){
        global $connection;
        $query = "INSERT INTO
                faculty_review(f_name , f_review , f_review_user_id)
                VALUES ('$sel_faculty' , '$new_review' , '$user_id')";
        $add_review = mysql_query($query, $connection);
        confirm_query($add_review);
    }
  }
?>
