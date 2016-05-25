<?php

function login {
  if(isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) and !empty($_POST['password'])) 
  {
    $username=safe($_POST['username']);
    $password=md5($_POST['password']);
    
    # Database query, use bind values and compare $password and the password extracted from the database with the operator ===
    # ....
  }
}
function safe($string,$i=0) {
    $safe=strtolower($string);
    $safe = addslashes($safe);
    if ($i==1) $safe=htmlspecialchars($safe);
    return $safe;
}

?>
