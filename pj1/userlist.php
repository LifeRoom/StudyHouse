<html>
    <head>
        <meta http-equiv="content-type" content="text/html;char-set=utf-8">
        <title>members list</title>
    </head>
    <?php
        
        require_once 'UserService.class.php';
        require_once 'Paging.class.php';
        
        $paging= new Paging();
        //init
        $paging->pageNow=1;
        $paging->pageSize=10;
//        
        if(!empty($_GET['pagenow'])){
            $paging->pageNow=$_GET['pagenow'];//the current page
        }else{
            $paging->pageNow=1;
        }
              
        $userService=new UserService();
        $userService->getPaging($paging);

        echo "<table border='1px' bordercolor='green' cellspacing='0' width=700px>";
        echo "<tr><th>id</th><th>name</th><th>level</th><th>email</th><th>salary</th><th>Delete</th><th>Update</th>";
        if($paging->res_array){
            for($i=0;$i<count($paging->res_array);$i++){
                   $row=$paging->res_array[$i];
                   echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['level']}</td><td>{$row['email']}</td><td>{$row['salary']}</td>" .
                    "<td><a href='#'>Delete</a></td><td><a href='#'>Update</a></td>"
                    ;
            }
  
        }
        echo "<h1>List</h1>";
        echo"</table>";

        echo $paging->navigate;
     
    ?>
    <form action="userlist.php" method="get">
        <input type="text" name="pagenow"/>
        <input type="submit" value="goto">
    </form>
</html>

