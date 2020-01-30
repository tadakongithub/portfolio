<?php
    session_start();

    function h($value){
        return  htmlspecialchars($value, ENT_QUOTES);
    }

    if (!empty($_POST)){
        header('Location: send_email.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <p>入力内容の確認</p>
        <form action="" method="post">
            <dl>       
                <dt>お名前: </dt><dd><?php echo h($_SESSION['mail']['name']); ?></dd>
                <dt>メール: </dt><dd><?php echo h($_SESSION['mail']['email']); ?></dd>
                <dt>メッセージ: </dt>
                <dd><?php echo h($_SESSION['mail']['message']); ?></dd>
            </dl>
            <input type="hidden" name="action" value="submit">
            <div><button class="rewrite"><a href="index.php?action=rewrite">書き直す</a></button><input type="submit" value="送信"></div>
        </form>
    </body>
</html>