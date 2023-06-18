<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Добавление протокола</title>
</head>
<body>
    <div class="content">
        <form action="save.php" method="POST">
            <label>Номер протокола:</label>
            <input type="text" name="protocol_number" required><br>

            <label>Дата выдачи (дд.мм.гг)</label>
            <input type="date" name="issue_date" required><br>

            <label>Ответственный (ФИО):</label>
            <input type="text" name="responsible_employee" required><br>
            
            <label for="compliance_flag">Соответствие:</label>
            <select name="compliance_flag" required>
                <option value="да">да</option>
                <option value="нет">нет</option>
            </select><br>

            <input type="submit" value="Сохранить">

        </form>
    </div>
</body>
</html>
