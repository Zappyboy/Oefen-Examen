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
        <th>Id</th>
        <th>Time</th>
        <th>Beschrijving</th>
    </tr>

<?php
$sql = "SELECT id, time, beschrijving FROM KKSoul";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["id"] . "</td><td>". $row["time"] ."</td><td>". $row["beschrijving"] ."</td></tr>";
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
