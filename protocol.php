<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PROTOCOL_TABLE</title>
</head>
<body>
<?php 

require_once 'db/dbConnect.php';

$sql = "SELECT * FROM PROTOCOL_TABLE";
$result = $conn->query($sql);

if ($result->num_rows) {
    echo "<table>
            <tr>
                <th>№ п\п</th>
                <th>Номер протокола</th>
                <th>Дата выдачи (дд.мм.гг)</th>
                <th>Ответственный (ФИО)</th>
                <th>Соответствие («да», «нет»)</th>
            </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["protocol_number"] . "</td>
                <td>" . $row["issue_date"] . "</td>
                <td>" . $row["responsible_employee"] . "</td>
                <td>" . $row["compliance_flag"] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Нет данных для отображения.";
}

echo '<a href="addProtocol.php"><button>Добавить протокол</button></a>';

$conn->close();

?>
</body>
</html>