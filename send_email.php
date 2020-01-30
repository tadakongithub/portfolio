<?php

    session_start();

    $email = 'konnotadashi47@yahoo.co.jp';

    mb_language('japanese');
    mb_internal_encoding('UTF-8');

    $subject = 'ポートフォリオからのメッセージ';

    function h($value){
        return htmlspecialchars($value, ENT_QUOTES);
    }

    $name = h($_SESSION['mail']['name']);
    $mail = h($_SESSION['mail']['email']);
    $message = h($_SESSION['mail']['message']);

    $body = '名前: '.$name.'\n\n'.'メール: '.$mail.'\n\n'.'メッセージ: '.$message;

    $success = mb_send_mail($email, $subject, $body);

    session_unset();
?>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="sent">
        <?php if($success): ?>
        <p>メッセージが送信されました。2日以内にお返事いたします。</p>
        <div><a href="index.php">Return to My Portfolio</a></div>
        <?php else: ?>
        <p>メッセージが正しく送信されませんでした。恐れ入りますが、もう一度入力をお願いします。</p>
        <div><a href="index.php#contact">Return to My Portfolio</a></div>
        <?php endif; ?>
        </div>
    </body>
</html>