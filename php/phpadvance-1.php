<?php
    session_start();
?>
<!DOCTYPE html> 
<html lang="ja">
    <head>
    <title>phpadvance-1</title>

    </head>
    <body>    
        <?php
            
            if (!isset($_SESSION["access_count"])){
                print('初めての訪問です！');
                $_SESSION["access_count"] = 1;
            }else{
                $access_count= $_SESSION["access_count"];
                $access_count++;

                print($access_count.'回目の訪問です！<br>');

                $_SESSION["access_count"] = $access_count;
            }

        ?>
    </body>
</html>