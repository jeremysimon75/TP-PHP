<?php

$lesCapitales = array('France' => 'Paris',
'Portugal'=> 'Lisboa', 'Italie'=> 'Rome',
'Tunisie'=> 'Tunis') ;

print_r($lesCapitales) ;

$lesCapitales['Allemagne'] = 'Berlin' ;

echo "<BR> Après ajout Deutschland <BR>" ;
print_r($lesCapitales) ;
