<?php
  session_start();

  $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'sistema_properseed'
  ) or die(mysqli_erro($mysqli));
?>