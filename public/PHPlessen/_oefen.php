<?php
// met dubbele slashes maak je een commentaarregel
echo 'Hello <strong>world</strong>!!';

$bestie=array('voornaam' => 'Marit', 'achternaam' => 'de Jong');
$bestie['sport']='voetbal';
$bestie['leeftijd']='16 jaar oud';

echo "<h2>".$bestie['voornaam']." ".$bestie['achternaam']." speelt ".$bestie['sport']." en is ".$bestie['leeftijd']."</h2>";
?>