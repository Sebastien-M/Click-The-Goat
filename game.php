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
            $_SESSION['name'] = $_POST['name'];
        ?>
        <header>
            <div class="titre">
                <h1>Click the goat!</h1>
            </div>
            <section class="infos">
                <p class="eh"><?php echo $_POST['name']; ?></p>
                <p class="eh">score : </p>
                <p id="score">0</p>
                <input type="submit"  class="eh" value="save">
            </section>
        </header>
        <main>
        <span class="img">
            <img id="goat" src="img/goat02.gif" alt="goat" width="500" height="400">
        </span>
    </main>
    <script src="js/main.js"></script>
</body>
</html>