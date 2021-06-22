<?php

include("db.php");
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_mysql_crud'
);

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM task WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: task_register.php');
}

?>
