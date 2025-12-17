<?php
class User = {
  var $username; 
  var $pass; 

  function __construct($user, $pass) {
    $this->user = $user; 
    $this->pass = $pass; 
  }
} 

function createUser($con, User $user) {
  $username = $user->$username; 
  $pass = $user->pass; 
  $hash = password($pass, PASSWORD_DEFAULT); 
  
  $q = "INSERT INTO users (username, pass) VALUES ('$username', '$pass')";
  mysqli_query($con, $q); 
  if ($result) {
    echo "Created new user <br>";
  } else {
    echo "Failed to create new user: " . mysqli_error($con) . "<br>";
  }
  mysqli_close($con); 
}

function getUser($con, $username) {
  $q = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($con, $q); 

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result); 
    return $row[0]
  } else {
    echo "No user found"; 
  }
  mysqli_close($con); 
}

function deleteUser($con, $id) {
  $q = "DELETE FROM users WHERE id = '$id'";
  $result = mysqli_query($con, $q); 

  if (mysqli_affected_rows($con) > 0) {
    echo "User deleted";
  } else {
    echo "User not found"; 
  }
}
?>
