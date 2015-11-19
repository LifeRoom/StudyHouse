<html>
    <head>
        <meta http-equiv="content-type" content="text/html;char-set=utf-8">
        <title>members list</title>
    </head>
    <?php
        $conn=new mysqli("localhost","root","","pj1");
        $conn->query("set names utf8");
        
        $SqlMembers="select * from user";
        $pagesize=2;//how many pagies on one page
        $rowcount=0;//all rows
        
        if(!empty($_GET['pagenow'])){
            $pagenow=$_GET['pagenow'];//the current page
        }else{
            $pagenow=1;
        }
        echo $pagenow;
        $pagecount=0;//pages count
        
        $SqlMemCount="select count(1) as cnt from user ";
                
        //all rows
        if($resultMemCount=$conn->query($SqlMemCount)){
            if($row=$resultMemCount->fetch_assoc()){
                $rowcount=$row['cnt'];
            }
            $resultMemCount->free();            
        }
        //pages count
        $pagecount=ceil($rowcount/$pagesize);
        
        //sql
        $SqlMemPage="select *  from user limit " . $pagesize*($pagenow-1) . "," . $pagesize;
        //result for the page

        echo "<table border='2' width=700px>";
        echo "<tr><th>id</th><th>name</th><th>level</th><th>email</th><th>salary</th><th>Delete</th><th>Update</th>";
        if($resultMemPage=$conn->query($SqlMemPage)){
            while($row=$resultMemPage->fetch_assoc()){
                   echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['level']}</td><td>{$row['email']}</td><td>{$row['salary']}</td>" .
                    "<td><a href='#'>Delete</a></td><td><a href='#'>Update</a></td>"
                    ;
            }
            $resultMemPage->free();
        }
        echo "<h1>List</h1>";
        echo"</table>";
        $conn->close();
        for($i=1;$i<=$pagecount;$i++){
            echo "<a href='userlist.php?pagenow=$i'>$i</a>&nbsp;";
        }
    ?>
    
</html>

