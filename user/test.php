<?php 

 function RandStr($length, $encrypt = 10){
    $reg_id = '';
    for($i=0;$i<$encrypt;$i++){
        $reg_id = base64_encode(md5(microtime(true)));}
    return substr($reg_id, 0, $length);
}

$authcd = RandStr(10);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<p style="color: red;"> This is the Output: <?php echo $authcd; ?></p>
</body>
</html>