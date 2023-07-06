Milestone 1 Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

1-creare graficamnete la form
2- collegare al file index.php
3- creare uan funzione che prenda in input la lunghezza inserita, generi la pasword
    3.1-creare tre variabili che contengono rispettivamnete lettere , numeri  e caratteri speciali 
    3.2-creare una variabile per il risultto finale (pasword) ed una per contenere eventuali errori
    3.3 verifico il valore inserito
    3.4 ? SE non rispecchia i criteri (stringa vuota o lunghezza non compresa tra alcuni valori) valorizza la variabile contenente  il messagio di errore 
    3.5 : ALTRIMENTI genero la password 
    3.5.1 -genero un numero randomico compreso tra 0 e la lunghezza della stringa  -1 attrvesro una funzione
    3.5.2 recupero il carattere della stringa corispondente alla posizione generata nel punto precedente
    3.5.3 concateno la stringa 
    3.5.4 ? SE la stringa ha la lunghezza inseita allora restituisco la password
    3.5.5 ALTRIMENTI continuo a svolgere le operazioni precedenti
4-restituisca la pasword nella pagina 

Milestone 2 Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

1-creare il file funcion.php 
2 metterci dentro la definizione di funzioni create
3 importo il file creato in index.php

Milestone 3 (BONUS) Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

1-Creare la pagina success.php 
2-iniziare la sessione nel file funcion.php , valorizare la variabile $_SESSION ed effetuare il redirect alla nuova pagina 
3-Nella nuova pagina controlare se la variabile di sessione e'valorizata 
    3.1 - ? SE e'valorizzata allora  stampo la password
    3.3 - ALTRIMENTI faccio il redirect alla index mostrando un messagio di impossibilita adaccedere alla pagina