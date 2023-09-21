<?php
$adres="localhost";
$user="root";
$pass="";
$database="dane3";

$conn = mysqli_connect($adres, $user, $pass, $database);



?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div class="baner">
        <div class="baner-lewy">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </div>
        <div class="baner-prawy">
            <table>
                <tr>
                    <th>Kryminał</th>
                    <th>Horror</th>
                    <th>Przygodowy</th>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </div>
    </div>
    <h3>Polecamy</h3>
    <div class="list">
    <?php
    $query = 'SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id=18 OR id=22 OR id=23 OR id=25';

    if ($result = $conn->query($query)) {
    
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $nazwa = $row["nazwa"];
            $opis = $row["opis"];
            $zdjecie = $row["zdjecie"];
  
            echo '<div class="post">';
            echo '<h4 class="title">'.$id.'. '.$nazwa.'</p>';
            echo '<img src="'.$zdjecie.'" alt="film">';
            echo '<p>'.$opis.'</p>';
            echo '</div>';
            
        }

    }
    ?>
    </div>
    <h3>Filmy fantastyczne</h3>
    <div class="list">
    <?php
    $query = 'SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id=12';

    if ($result = $conn->query($query)) {
    
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $nazwa = $row["nazwa"];
            $opis = $row["opis"];
            $zdjecie = $row["zdjecie"];
  
            echo '<div class="post">';
            echo '<h4 class="title">'.$id.'. '.$nazwa.'</p>';
            echo '<img src="'.$zdjecie.'" alt="film">';
            echo '<p>'.$opis.'</p>';
            echo '</div>';
            
        }
    }
    ?>
    </div>
    <footer>
        <form action="remove.php" method="post">
            <input type="number" name="numer" id="numer">
            <input type="submit" value="Usuń film">
        </form></br>
        <p>Stronę wykonał: <a href="mailto:patryk.kosinski@zseiulaziska.pl">000000000</a></p>
    </footer>
</body>
</html>