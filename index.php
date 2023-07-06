<?php

//FUNZIOONE CHE GENERA UN NMERO CASUALE COMPRESO TRA 0 ED IL NUMERO INSERITO
function randomNumber($min,$max){
    return rand($min,$max);
}


//FUNZIONE CHE GENERA LA PASSWORD

function generatePassword($length){
    $result = ''; //VARIABILE CONTENETE I MESSAGI DI ERRORE
    $password = ''; //VARIABILE CONTENTE LA PASSWORD GENERATA
    $numbers ='0123456789';
    $letters ='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY';
    $symbols ='!@#$%^&*()';
    //CASUALMENTE DEVE PRENDERE I DATI DA TUTTE E TRE LE STINGHE 
    
    $baseString = $numbers.$letters.$symbols;
    //verifico la validita della lunghezza inserita
    if(empty($length)){
        $result = 'Nessun parametro valido';
    }
    else if($length < 8 || $length > 32) {
        $result = 'Attenzione! La lunghezza della password non ripetta le condizionis';
    }
    else {
        //ciclo finche la mia password non e generata ed ha la lunghezza stabilita
        while (strlen($password) < $length) {
            $index = randomNumber(0, strlen($baseString));//genero un indice casuale copreso tra 0 e la lunghezza di baseString
            $char = $baseString[$index];// vado a recuperare il carattere in quel indice da quella stringa
            $password.=$char; // concateno la password

            // var_dump($password);
        }
        return $password;
    }
    return $result;

}


if(isset($_GET['length'])){
    $response = generatePassword($_GET['length']);
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
            <div class="col-12 col-md-6 offset-md-3">
                <?php if(isset($response)){ ?>
                    <div class="alert alert-info">
                        <?php echo $response; ?>
                    </div>
                <?php } ?>
                <form action="index.php" method="GET">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="length" class="control-label">Lunghezza</label>
                            <input type="number" id="length" name="length" placeholder="Lunghezza" class="form-control">
                        </div>
                        <div class="col-12 col-md-6">
                            <button type="submit" class="btn btn-success float-end mt-3">invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>