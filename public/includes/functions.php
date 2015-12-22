<?php
  //to store all basic functions.

  function confirm_query($result_set) {
    if (!$result_set) {
      die("Database query failed: " . mysql_error());
    }
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
    confirm_query("$faculty_bb");                      //faculty_bb = faculty by branch
    return $faculty_bb;
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

?>
