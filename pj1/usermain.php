<html>
    <head>
        <meta http-equiv="content-type" content="text/html;char-set=utf-8">
    </head>
    <?php
    echo "welcome &nbsp;" .$_GET['name'] . "<br/>";
    echo "login success";
    echo "<br/><a href='login.php'>logout</a>";
    ?>
    <body>
        <h1>主画面</h1>
        <a href="#">manage</a>
        <a href="#">add</a>
        <a href="#">delete</a>
        <a href="userlist.php">member list</a>
    </body>

</html>