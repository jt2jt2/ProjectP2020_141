<!DOCTYPE html> 
<html lang="ja">
    <head>
	<title>php2</title>
    </head>
    <body>    
        <?php
        ini_set( 'display_errors', 1 );
            $addresses = [
                ["name" => "東京太郎","address" => "東京都", "phone" => "012-345-6789", "email" =>"taro@example.com"],
                ["name" =>"工科花子","address" =>  "北海道","phone" => "987-654-3210","email" => "hana@example.com"]
                ];
            function print_table($data_array){
                print "<table border=1>";
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
    </body>
</html>