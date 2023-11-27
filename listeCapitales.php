<?php
$paysCapitales = array('France' => 'Paris', 'Portugal' => 'Lisboa', 'Italie' => 'Rome' );

foreach ($paysCapitales as $nomPays => $nomCapitale){
    echo "Quelle merveilleuse capitale que $nomCapitale pour ce beau pays $nomPays !<BR>";
    echo "Le pays : $nomPays a pour capitale :$nomCapitale";
}