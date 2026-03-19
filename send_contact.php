<?php
include_once('include/class.phpmailer.php');
include_once('include/class.smtp.php');
include_once('include/php-spam-filter/spamfilter.php');
include_once('include/black_ip.php');

$filter = new SpamFilter();

header("Content-type:text/html; charset=utf-8");

$allowed_origin = 'canakkale-webyazilim.com.tr/iletisim.php';
if ($_SERVER['HTTP_REFERER'] !== $allowed_origin) {
echo "bok";  exit;
}

if (!empty($_POST)) {

$_name     = $_POST['_name'];
$_email    = $_POST['_email'];
$_phone    = $_POST['_phone'];
$_message  = $_POST['_message'];

$result1 = $filter->check_text($_name); if ($result1) { echo "nok"; exit; }
$result2 = $filter->check_text($_email); if ($result2) { echo "nok"; exit; }
$result3 = $filter->check_text($_phone); if ($result3) { echo "nok"; exit; }
$result4 = $filter->check_text($_message); if ($result4) { echo "nok"; exit; }

if (contains($spam_list, $_name) == TRUE) { echo "bad"; exit; }
if (contains($spam_list, $_email) == TRUE) { echo "bad"; exit; }
if (contains($spam_list, $_phone) == TRUE) { echo "bad"; exit; }
if (contains($spam_list, $_message) == TRUE) { echo "bad"; exit; }

if (empty($_name)) { echo "name"; exit; }
if (empty($_phone) OR strlen($_phone) < 10) { echo "phone"; exit; }
if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) { echo "emailbad"; exit; }
if (empty($_email) OR strlen($_email) < 9) { echo "email"; exit; }
if (empty($_message)) { echo "message"; exit; }
if (strlen($_message) < 15) { echo "message_short"; exit; }

$email_title    = "canakkale-webyazilim.com.tr - ".date("d-m-Y h:i");
$emailbodytitle = "canakkale-webyazilim.com.tr - ".date("d-m-Y h:i");

$emailbodytext  = "Ad Soyad: ".$_name."<br>Telefon: ".$_phone."<br>Email: ".$_email."<br>Mesaj: ".$_message;

$subject  = '=?UTF-8?B?'.base64_encode($email_title).'?=';

$mail              = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet     = "UTF-8";
$mail->SMTPDebug   = 0;
$mail->SMTPAuth    = true;
$mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                    );
$mail->SMTPSecure  = "SSL";
$mail->Host        = "smtppro.zoho.eu";
$mail->Port        = 465;
$mail->Username    = "info@cozumcloud.com.tr";
$mail->Password    = "xn9BnUk4R634";
$mail->IsHTML(true);
$mail->SetFrom("info@cozumcloud.com.tr", "Çözüm Cloud");
$mail->Subject     = $subject;
$mail->MsgHTML($emailbodytext);

$address = "info@cozumcloud.com.tr";

$mail->AddAddress($address);

$mail->send();
$mail->ClearAllRecipients();

echo "ok"; exit;

} else {

echo "nok"; exit;

}

?>