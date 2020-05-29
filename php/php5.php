<!DOCTYPE html> 
<html lang="ja">
    <head>
    <title>php5</title>
    <style>
        table,tr,th,td{
            border:1px solid #000000;
        }
    </style>
    </head>
    <body>    
        <?php
            $file = './addresses.json';
            $json = file_get_contents($file); //指定したファイルの要素をすべて取得する
            $getjson = json_decode($json,true);
            
            if($file!=NULL&&$json!=NULL){
                $addressJSON;
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $plusaddress = ["name"=>$_POST['name'],"address" => $_POST['address'], "phone" => $_POST['phone'], "email" =>$_POST['email']];
                    if($_POST!=NULL){
                            $getjson [count($getjson)+1] = $plusaddress;
                            $addressJSON = json_encode($getjson,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                            file_put_contents("addresses.json" , $addressJSON);
                    }
                }
            }else{
                echo("file、もしくはfileの中身が見つかりませんでした");
            }
            function print_table($data_array){
                    print "<table>";
                    print "<tr>";
                    print "<td>";
                    print "名前";
                    print "</td>";
                    print "<td>";
                    print "住所";
                    print "</td>";
                    print "<td>";
                    print "電話";
                    print "</td>";
                    print "<td>";
                    print "Email";
                    print "</td>";
                    print "</tr>";
                    foreach($data_array as $value){
                        print "<tr>";
                        print "<td>";
                        print $value["name"];
                        print "</td>";
                        print "<td>";
                        print $value["address"];
                        print "</td>";
                        print "<td>";
                        print $value["phone"];
                        print "</td>";
                        print "<td>";
                        print $value["email"];
                        print "</td>";
                        print "</tr>";
                    }
                    print"</table>";
                }
                print_table($getjson);
            
        ?>
    <form method="post" action="php5.php">
    名前
    <input type="text" name="name">
    住所
    <input type="text" name="address">
    電話
    <input type="text" name="phone">
    Email
    <input type="text" name="email">
    <input type="submit" value="送信">
    </form>
    </body>
</html>