<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="icon/goat.png" />
    <title>Click the goat!</title>
</head>
<body>
    
        <?php
            session_start();
            if(isset($_POST['name'])){
                $_SESSION['name'] = $_POST['name'];
            }
            else{

            }
        ?>
        <header>
            <div class="titre">
                <h1>Click the goat!</h1>
            </div>
            <section class="infos">
                <p class="eh"><?php echo $_SESSION['name']; ?></p>
                <p class="eh">score : </p>
                <p id="score">0</p>
                <p id="test"></p>
                <form action="save.php" method="POST">
                <input type="hidden" name="score" id="scoresent">
                <input type="submit"  class="eh" value="save">
                </form>
            </section>
        </header>
        <main>
            <div class="scores">
            <h3>Scores</h3>
            <ul>
                <?php
                    $scoresDir = scandir("scores");
                    foreach ($scoresDir as $key => $value) {
                        if($value === "." || $value === ".."){}
                        else{
                            $fileVal = file_get_contents("scores/".$value);
                            $player = str_replace(".txt","",$value);
                            echo "<li>".$player." : ".$fileVal."</li>";
                        }
                    }
                ?>
            </ul>
        </div>
        <span class="img">
            <img id="goat" src="img/goat02.gif" alt="goat" width="500" height="400">
        </span>
    </main>
    <script src="js/main.js"></script>
    <?php $_SESSION['score'] = "<script> score </script>" ?>
</body>
</html>