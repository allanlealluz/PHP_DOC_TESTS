<?php
require_once 'vendor/autoload.php';

$redis = new Predis\Client([
    'scheme' => 'tcp',
    'host' => '127.0.0.1',
    'port' => 6379,
]);
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){  
    $name = $_POST["name"];
    $message = $_POST["message"];
    $user_data = [
        "name" => $name,
        "message" => $message
    ];
    $user_id = session_id();
    $redis->rpush("user:$user_id:entries", json_encode($user_data));
}
$user_id = session_id();
$user_entry = $redis->lrange("user:$user_id:entries",0,-1);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redis tests</title>
</head>
<body>
<form method="POST">
<input type="text" name="name">
<input type="text" name="message">
<input type="submit" value="submit">
</form>
<h2>Ultimas mensagens </h2>
<?php
foreach($user_entry as $v){
    $decoded = json_decode($v,true);
    ?><h3><?php echo $decoded['name'];?><?php
    ?>------<?php echo $decoded['message'];?> </h3><?php
}
?>
</script>
</body>
</html>