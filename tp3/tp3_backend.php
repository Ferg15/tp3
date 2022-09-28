<?php
$i = 0;
	while ($i <= 100) {
	echo "$i";
	$i++;
}
?>
<br>
<hr>
<?php
$i = 100;
	while ( $i > 0) {
	print "$i";
	$i--;
}
?>
<br>
<hr>
<?php
 
for($n=2; $n<=100; $n= $n+2){
 
    echo "$n";
}
 
?>
<br>
<hr>
<?php
 	$x = 1;
 	$n = 100;
 	$impar = 1;
 	while ($x <= $n) {
 		echo "$impar";
 		$x = $x + 1;
 		$impar = $impar + 2;
 	}
 
?>
<br>
<hr>

<?php
	$i = 1;
	$suma= 0;
	for ($i=1; $i < 20; $i++) { 
		$suma += $i;
	}
	print $suma;
?>
<br>
<hr>
<?php
	$n = 0;
	for ($a=0; $a <= 20; $a++) { 
		if (($a%2) == 0) {
			$s= $n;
			$n = $n + $a;
			print "<p>$s + $a = $n</p>";
		}
	}
	
?>