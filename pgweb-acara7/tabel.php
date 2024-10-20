<!DOCTYPE html>
<html>

<body>

    <?php
    $movie = array("Harry Potter", "Narnia", "Avatar", "The Maze Runner", "Twilight", "Little Woman");
    $tahunrilis = array(2001, 2008, 2009, 2014, 2008, 2019);
    $genre = array("Fantasi", "Fantasi", "Fantasi", "Fiksi Ilmiah", "Fantasi", "Drama");

    echo "<table border='1'>";
    for ($i = 0; $i <= 5; $i++) {
        echo "<tr><td> $movie[$i] </td><td> $tahunrilis[$i] </td><td> $genre[$i] </td></tr>";
    }
    echo "</table>";
    ?>

</body>

</html>