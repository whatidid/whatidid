<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

$isFirstLine = true;

$array;
$columnName;

$mailaddress = "";
$subject = $_POST['subject'];
$template = $_POST['body'];

// Dosyayı oku
$input = file_get_contents("mail.csv");
$input = mb_convert_encoding($input, "UTF-8", "ISO-8859-9");

//Tüm satırları dolaş
foreach(explode(PHP_EOL, $input) as $lineStr) {
if($lineStr == "") break;
$lineStr = trim(preg_replace('/\s\s+/', ' ', $lineStr));
$parsedLine = explode(";", $lineStr);

// İlk satırsa değişken ismidir
if($isFirstLine){
$columnName = $parsedLine;
$isFirstLine = false;
} else {
// Seçili satırdaki kolonları dolaş
foreach ($columnName as $i => $value) {
$line[$value] = $parsedLine[$i];
}
$array[] = $line;
}
}

print_r($array);

// Template içerisindeki süslü parantezlerle değiştirip ekrana yazdır
foreach ($array as $i => $line) {
$temp = $template;

foreach ($line as $key => $value) {
$temp = preg_replace('/\['.$key.'\]/', $value, $temp);
if(strstr($value, "@")){
$mailaddress = $value;
}
}
echo $temp."\n<br>";

//SMTP AYARLARI
$host = 'sv23.byethost23.org';
$usrname = 'ekdepoby';
$pass = 'Karli_1_Gundu';
$mailName = 'A Sevinc';

$mail = new PHPMailer(true);
try {
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = $host;
$mail->SMTPAuth = true;
$mail->Username = $usrname;
$mail->Password = $pass;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
$mail->setFrom($usrname, $mailName);
$mail->CharSet = 'utf-8';
$mail->addAddress($mailaddress);
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $temp;
$mail->send();
} catch (Exception $e) {
}
}
?>