<?php
// DB 연결
include_once 'db.php';

$sql = 'SELECT * FROM myguests';
$stmt = $conn->prepare($sql);
$stmt->execute();

$rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>";
echo '<tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>reg_data</th>
    </tr>';

foreach ($rs as $row) {
    echo "<tr>
    <td>{$row['firstname']}</td>
    <td>{$row['lastname']}</td>
    <td>{$row['email']}</td>
    <td>{$row['reg_date']}</td>
    </tr>";
}
echo '</table>';

$conn = null;
