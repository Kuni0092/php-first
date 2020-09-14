<?php

try{
  $dbh = new PDO('mysql:host=localhost;dbname=bbsapl','root','root');
}catch(PDOException $e){
  var_dump($e->getMessage());
  exit;
}

$sql = "SELECT * FROM bbstable";
$posts = file($dataFile, FILE_IGNORE_NEW_LINES);

if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['message'])) {
   if(empty($_POST['user'])) {
      $newData = $_POST['message']."|ななしさん";
    } else {
      $newData = $_POST['message']."|".$_POST['user'];
    }
    $newData .= date("|Y-m-d H:i:s");
    array_unshift($posts, $newData);
    $fp = fopen($dataFile, "w");
    fwrite($fp, implode("\n", $posts));
}

?>
<!DOCTYPE html>
<html long="ja">
  <head>
    <meta charset="UTF-8">
    <titile>一行掲示板</titile>
  </head>
  <body>
    <h1>一行掲示板</h1>
    <form action="" method="post">
      message: <input type="text" name="message">
      name: <input type="text" name="user">
      <input type="submit" value="投稿">
    </form>
    <h2>投稿一覧(<?php echo count($posts); ?>件)</h2>
    <u1>
    $id = null;
    $name = $_POST["name"];
    $message = $_POST["message"];
    date_default_timezone_set('Asia/Tokyo');
    $created_at = date("Y-m-d H:i:s");
  
    
    </u1>
    </body>
</html>
