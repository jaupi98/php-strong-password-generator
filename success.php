 <?php

    session_start();
    if(empty($_SESSION)){
        header('Location: ./index.php');
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>La password e':</h2>
                <div class="alert alert-info">
                   <?php echo $_SESSION["password"]; ?>    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="./index.php" class="btn btn-info"> Torna alla Homepage</a>
            </div>
        </div>
    </div>
</body>
</html>