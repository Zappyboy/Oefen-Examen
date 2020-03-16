<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Programma Overzicht</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            color: black;
            font-family: "Roboto Cn", sans-serif;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Klantnummer</th>
        <th>Naam</th>
        <th>Adres</th>
        <th>Postcode</th>
        <th>Plaats</th>
        <th>Telefoonnummer</th>

    </tr>

    <?php
    $sql = "SELECT * FROM Klant WHERE Plaats = 'Eindhoven'";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["Klantnummer"] . "</td><td>". $row["Naam"] ."</td><td>". $row["Adres"] ."</td><td>". $row["Postcode"] . "</td><td>". $row["Plaats"] . "</td><td>". $row["Telefoonnummer"] . "</td></tr>";
        }
        echo "</table>";
    }else {
        echo "0 results";
    }
    $conn-> close();
    ?>
</table>
</body>
</html>
