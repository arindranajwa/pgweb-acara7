<!DOCTYPE html>
<html>

<body>

    <?php // memilih salah satu dari banyak blok kode yang akan dieksekusi 
    $favcolor = "purple";

    switch ($favcolor) {
        case "purple":
            echo "Your favorite color is purple!";
            break; // digunakan untuk memisah, jika tidak dikasi break dia akan memunculkan hasil sampai blue
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "pink":
            echo "Your favorite color is pink!";
            break;
        default:
            echo "Your favorite color is neither purple, blue, nor pink!";
    }
    ?>

</body>

</html>