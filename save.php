<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Click the goat!</title>
</head>
<body>
    <p>saved!</p>
    <?php
        session_start();
        $_SESSION['score'] = $_POST['score'];
        if(!is_dir("scores")){
            mkdir("scores");
        }
        $file = fopen("scores/".$_SESSION['name'].".txt","w");
        fwrite($file,$_SESSION['score']);
        fclose($file);
        echo "<script>document.location.href='game.php'</script>"
    ?>
</body>
</html>