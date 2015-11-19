<html>
    <head>
        <meta http-equiv="content-type" content="text/html;char-set=utf-8">
    </head>
    <body>
        <h1用户管理系统</h1>
        <form action="loginProcess.php" method="post">
            <table>
                <tr><td>用户id</td><td><input type="text" name="id"/></td></tr>
                <tr><td>密 &nbsp; 码</td><td><input type="text" name="password"/></td></tr>
                <tr><td><input type="submit" value="提交"></td><td><input type="reset" value="重置"></td></tr>
            </table>
        </form>
    </body>
    <?php
        if(!empty($_GET['errno'])){
            $errno=$_GET['errno'];
            if($errno==1){
                echo "<font color='red' size='4'>你的密码错误</font>";
            }elseif($errno==2){
                echo "<font color='red' size='4'>你的用户名错误</font>";
            }
        }
   ?>

</html>
