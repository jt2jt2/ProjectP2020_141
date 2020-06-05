<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>phpadvance-2</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(is_uploaded_file($_FILES['up_file']['tmp_name'])){
                if(move_uploaded_file($_FILES['up_file']['tmp_name'],"./".$_FILES['up_file']['name'])){
                    echo "Successful:ファイルのアップロードに成功しました。";
                }else{
                    echo "Error:書き込む際にエラーが発生しました。";
                }
            }else{
                echo "Error:ファイルが選択されていません";
            }
        }
    ?>
    <h1>ファイルアップローダー</h1>
<form method="post" action="phpadvance-2.php" enctype="multipart/form-data">
<input type="file" name="up_file">
<input type="submit" value="送信">
</form>
</body>
</html>