<!DOCTYPE html>
<html>

<body>

    <pre>
<?php
// Deklarasi variabel
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

// variabel diubah ($ cast) menjadi tipe data string
$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

// menampilkan tipe data dan nilai dari masing-masing variabel setelah casting
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

    <p> Nilai boolean true akan diubah menjadi string "1" dan NULL tidak memiliki nilai</p>

</body>

</html>