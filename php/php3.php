<!DOCTYPE html> 
<html lang="ja">
    <head>
    <title>php3</title>
    <style>
        table,tr,th,td{
            border:1px solid #000000;
        }
    </style>
    </head>
    <body>    
        <?php
            $addresses = [
                ["name" => "東京太郎","address" => "東京都", "phone" => "012-345-6789", "email" =>"taro@example.com"],
                ["name" =>"工科花子","address" =>  "北海道","phone" => "987-654-3210","email" => "hana@example.com"]
                ];
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $plusaddress = ["name"=>$_POST['name'],"address" => $_POST['address'], "phone" => $_POST['phone'], "email" =>$_POST['email']];
                    if($_POST!=NULL){
                            $addresses[2]= $plusaddress;
                    }
                } else {
                    
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
        print_table($addresses);
        ?>
    <form method="post" action="php3.php">
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