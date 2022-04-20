<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=round($rec,7);

$afgekapt=floor($rec * 1000000) / 1000000 ;

$a=3;
$b=2.3;
$c= round(sqrt(pow($a,2) +pow($b,2)),3);

$mod=fmod($a,$b);

echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $afgerond<br>
      Het afgeronde getal is $afgekapt<br>
      <br>
      De driehoek heeft een schuine zijde van $c<br>
      de restwaarde van $a delen door $b is $mod";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>