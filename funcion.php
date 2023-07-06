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
?>