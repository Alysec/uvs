<?php
/* Déclarer une variable $budget qui contient la somme de 1 553,89 €. 
 Déclarer une variable $achats qui contient la somme de 1 554,76 €. 
 Afficher si le budget permet de payer les achats.
 */
$budget=1559.89;
$achats=1554.76;

if ($budget >= $achats){
    printf("Oui le budget $budget permet de le payer");
}else{
    print("non le budget ne permet pas de le payer\n");
}