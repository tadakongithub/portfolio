<?php

    session_start();

    $email = 'konnotadashi47@yahoo.co.jp';

    mb_language('japanese');
    mb_internal_encoding('UTF-8');

    $subject = 'Thank you for contacting me!';

    function h($value){
        return htmlspecialchars($value, ENT_QUOTES);
    }

    $name = h($_SESSION['mail']['name']);
    $mail = h($_SESSION['mail']['email']);
    $message = h($_SESSION['mail']['message']);

    $body = 'Name '.$name.'<br /><br />'.'Email: '.$mail.'<br /><br />'.'Message: '.$message;

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
        <p>I will get back to you in the next 24 hours.</p>
        <div><a href="index.php">Return to My Portfolio</a></div>
        <?php else: ?>
        <p>An error has occured. Fill in the form and submit it again. Sorry for the inconvenience.</p>
        <div><a href="index.php#contact">Return to My Portfolio</a></div>
        <?php endif; ?>
        </div>
    </body>
</html>