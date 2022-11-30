<?php 
    // variabili
    $string = $_POST['my_string'];
    $badword = $_POST['my_badword'];

    //stampa paragrafo con la sua lunghezza
    echo "$string . <br> Lunghezza paragrafo: "; echo strlen("$string"); echo "caratteri <br> <br>";

    //stampa paragrafo sostituendo badword con ***
    echo "Paragrafo con parola vietata censurata: <br>";
    echo str_replace("$badword", "***", "$string"); 
?>