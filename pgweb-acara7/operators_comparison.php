<!-- Identical -->
<!DOCTYPE html>
<html>

<body>

    <p>Arithmetic Operators (Addition) </p>
    <?php
    $x = 10;
    $y = 6;

    echo $x + $y;
    ?>

    <p>Assignment Operators (Modulus) </p>
    <?php
    $x = 9;
    $x %= 2;

    echo $x;
    ?>

    <p>Comparison Operators</p>
    <p>// Identical</p>
    <!-- Mengembalikan nilai true jika $x sama dengan $y,  -->
    <!-- dan keduanya memiliki tipe yang sama -->
    <?php
    $x = 5;
    $y = 5.0;

    if ($x === $y) {
        echo "Nilai true <br>";
    }

    echo "Hasil = Finish";
    ?>

    <p>// Less than</p>
    <!-- Mengembalikan nilai true jika $x kurang dari $y -->
    <?php
    $t = 144;

    if ($t < 20) {
        echo "Nilai benar!";
    } else {
        echo "Hasil = Nilai salah";
    }
    ?>

</body>

</html>