<?php
class Todo = {
  var $userId; 
  var $title; 
  var $done; 
  var $dateCreated; 

  function __construct($userId, $title, $done, $dateCreated) {
    $this->userId = $userId; 
    $this->title = $title; 
    $this->done = $done; 
    $this->dateCreated = $dateCreated; 
  }
}; 

function getAllTodo($con, $userId) {
  $q = "SELECT * FROM todos WHERE userId='$userId'"; 
  $todos = []; 
  $result = mysqli_query($con, $q); 
  if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
      $todos[] = $row; 
    }
    return $todos; 
  } else {
    echo "No todo added yet <br>"; 
  }
  mysqli_close($con); 
}

function createTodo($con, Todo $todo) {
  $userId = $todo->userId; 
  $title = $todo->title; 
  $dateCreated = $todo->dateCreated; 

  $q = "INSERT INTO todos (userId, title, done, dateCreated) VALUES ('$userId', '$title', 0, '$dateCreated')";

  $result = mysqli_query($con, $q); 
  if ($result) {
    echo "Created new todo<br>";
  } else {
    echo "Failed to create new todo: " . mysqli_error($con) . "<br>";
  }
  mysqli_close($con); 
}

function editTodo($con, Todo $todo) {
  $userId = $todo->userId; 
  $title = $todo->title; 
  $q = "UPDATE todos SET title='$title' WHERE userId='$userId'";

  $result = mysqli_query($con, $q); 
  if ($result) {
    echo "Updated todo <br>";
  } else {
    echo "Failed to update todo: " . mysqli_error($con) . "<br>";
  }
  mysqli_close($con); 
}

function finishTodo($con, $userId) {
  $q = "UPDATE todos SET done=1 WHERE userId=$userId";
  $result = mysqli_query($con, $q); 
  if ($result) {
    echo "Finished todo<br>";
  } else {
    echo "Failed to set todo to done: " . mysqli_error($con) . "<br>";
  }
  mysqli_close($con);
}

function deleteTodo($con, $id) {
  $q = "DELETE FROM todos WHERE id=$id"; 

  if (mysqli_affected_rows($con) > 0) {
    echo "Deleted task <br>"; 
  } else {
    echo "Failed to delete task <br>"; 
  }
  mysqli_close($con); 
}
?>
