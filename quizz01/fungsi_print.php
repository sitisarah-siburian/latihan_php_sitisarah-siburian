<!-- Fungsi echo -->
<?php
echo "<h1> Mari Belajar PHP di Politeknik Bisnis Indonesia</h1>";
echo "Hello Dunia!!...<br>";
echo "Ini adalah contoh tulisan<br>";
echo "Ini ", "contoh ", "teks ", "yang ", "terpisah.";
?>

<!-- Fungsi print -->
<?php
print "<h2>Ini adalah contoh mencetak Teks</h2>";
print "Contoh mencetak teks 1<br>";
print ("Contoh mencetak teks 2");
?>

<!-- Fungsi printf() -->
<?php
$var1 = 123456789;
$var2 = -123456789;
$var3 = 50; 

echo "<h2>Ini adalah contoh mencetak Fungsi Printf()</h2>";
printf("s = %s <br>", $var1);
printf("d = %d <br>", $var1);
printf("d = %d <br>", $var2);
printf("f = %f <br>", $var1);
printf("b = %b <br>", $var1);
printf("c = %c <br>", $var3);
?>