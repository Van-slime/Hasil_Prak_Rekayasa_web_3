<?php
// Praktek Operator
// Operator Aritmatika
$a=5;
$b=10;

echo "Contoh Operator Aritmatika Untuk a=5 dan b=10 <br>";
echo "Penjumlahan   a+b     = ".($a+$b)  ."<br>";
echo "Pengurangan   a-b     = ".($a-$b)  ."<br>";
echo "Perkalian     a*b     = ".($a*$b)  ."<br>";
echo "Pembagian     a/b     = ".($a/$b)  ."<br>";
echo "Modulus       a%b     = ".($a%$b)  ."<br>";
echo "Exponensial   a**b    = ".($a**$b) ."<br>";

echo"<hr> Contoh Operator Assigment Untuk Nilai Awal x=8 <br>";
$x=8;
print("Nilai x= ".$x."<br>");
print("Nilai x+=3 => ".($x+=3)."<br>");
print("Nilai x-=3 => ".($x-=3)."<br>");
print("Nilai x*=3 => ".($x*=3)."<br>");
print("Nilai x/=3 => ".($x/=3)."<br>");
print("Nilai x%=3 => ".($x%=3)."<br>");

echo"<hr> Contoh Operator Comparison Untuk a=5 dan b=10 <br>";
echo"Equal a==b => ".($a==$b)."<br>";
echo"Not Equal a!=b => ".($a!=$b)."<br>";
echo"Greater Than a>b => ".($a>$b)."<br>";
echo"Less Than a<b => ".($a<$b)."<br>";
echo"Greater Than or Equal a>=b => ".($a>=$b)."<br>";
echo"Less Than or Equal a<=b => ".($a<=$b)."<br>";

?>