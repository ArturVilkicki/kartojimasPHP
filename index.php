<?php

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<pre><!-- // 1. Aprasyti for cikla kuris suskaiciuotu nuo 200 iki 1 -->
<?php
/*
for ($i=200; $i >0 ; $i-=5) { 
	echo $i .",";
}
echo "<br />";
// 2. Parasyti pvz kuris iliustruotu sort() ir shuffle() funciju veikima

$a = ["a", "b", "c"];
print_r($a);
echo "<br />";

sort($a);
print_r($a);

echo "<br />";
shuffle($a);
print_r($a);

// 3. Parasyti pvz. kuris patikrintu ar yra sukurtas(ar egzistuoja) tam tikras kintamasis (pvz $a) jei taip atvaizduoti jo reiksme ir sunaikinti kintamaji
$a = 1;
if (isset($a)) {
	echo $a;
	unset($a);
	echo $a;
} 

// 4. parasyti funkcija kuri patikrintu ar ar tam tikrame masyve  yra tam tikra reiksme pvz2 ir priklausomai nuo rezultato parodytu pranesima
$b = [1,25,11,3,7,0,2];
$sk = 3;

function rask($skaicius, $masyvas){
	if (in_array($masyvas, $skaicius)) {
		echo "radau";
	} else {
		echo "Neradau";
	}

}
rask($b, $sk);


//if (in_array($sk, $a)) {
	//echo "Yra";
//}
echo "<br />";

// 5. parasyti funkcija, kuri apskaiciuotu ir grazintu skritulio plota, pagal funkcijai perduota spinduli (cm)

function apskaiciuok($r) {
	$plotas = pi() * $r * $r;
	return round($plotas, 2);

}
echo apskaiciuok(10);

//6. parasyti funkcija, kuri apskaiciuotu ir grazintu trapecijos plota, kai funkcijai perduodami krastiniu ilgiai ir aukstine (cm)
function trapecijos_plotis($ilgis, $plotas, $aukstine) {
	$plotas = (($ilgis+$plotas)/2)*$aukstine;
	return round($plotas,2);
}
echo trapecijos_plotis(10,10,10);

// 7. parasyti funkcija, kuri paskaiciuotu, kiek reikes paleciu trinkeliu aikstei iskloti pagal perduota aikstes plota, paletes talpa, ir trinkeliu manetmenis (viso 4matmenis) Kontroliniai duomenys S.Daukanto aikstes plotas yra 500 kv.m., trinles 0.3 x 0.2, paleteje telpa 500 vnt., reikes 167 paleciu
function get_pallets ($plotas, $a_t, $b_t, $paletes_talpa = 500) {
	$pallets = $plotas/($a_t*$b_t)/$paletes_talpa;
	return ceil($pallets);
}
 echo get_pallets (5000, 0.3, 0.2, 500);

 // 8. parasyti funkcija, kuriai perdavus masyva pvz [['name' =>'Delfi, 'url' >= 'http://delfi.lt'], ['name' =>'Delfi, 'url' >= 'http://delfi.lt']]
$nuorodos = [['name' => 'Delfi', 'url' => 'http://delfi.lt'], ['name' =>'15min.lt', 'url' => 'http://15min.lt']];
function print_links($nuorodos){
	foreach ($nuorodos as $nuoroda) {
	echo '<a href=" ' .$nuoroda['url'] .'">' .$nuoroda['name'] . '</a> <br />';
    }
}
print_links($nuorodos);



function format_number($t) {
	return str_replace("+370", "8", $t);
}

function format_number_e($t) {
	$ta = explode (" ", $t);
	return "8 " .$ta[1] . " " .$ta[2];
}
$tel = "+370 688 77777";
echo format_number($tel);
echo "<br />";
echo format_number_e ($tel);
*/
//9. parasyti funkcija, kuri parodytu, kiek liko dienu iki kaledu ir rugsejo pirmosios date(), mktime(), strtotime()
date_default_timezone_set("Europe");
function get_days($date) {
	dienu_skaiciavimas = strtotime($date) - time()/60/60/24;
	return floor(dienu_skaiciavimas);
}
echo get_days("1-9-2018");

/*$cdate = mktime(0, 0, 0, 12, 31, 2017);
$today = time();
$difference = $cdate - $today;
if ($difference < 0) { $difference = 0; }
echo "There are ". floor($difference/60/60/24)." days remaining";

$cdate = mktime(0, 0, 0, 9, 01, 2018);
$today = time();
$difference = $cdate - $today;
if ($difference < 0) { $difference = 0; }
echo "There are ". floor($difference/60/60/24)." days remaining";
*/

//function days_until($date){
   // return (isset($date)) ? floor((strtotime($date) - time())/60/60/24) : FALSE;
//}
//echo days_until("1-9-2018");
?>
</pre>

</body>
</html>