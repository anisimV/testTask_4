<html>
<body>
    <h3>Тестовое задание следующее:</h3>
    <div class="task">
        <ul>
            <li>Создайте БД</li>
            <li>Создайте таблицу в БД под названием PROTOCOL_TABLE</li>
            <li>Добавьте в нее столбцы:</li>
            <ul>
                <li>- Номер протокола</li>
                <li>- Дата выдачи</li>
                <li>- Ответственный сотрудник</li>
                <li>- Признак соответствия значений в протоколе нормам</li>
            </ul>
            <li>Создайте на сервере файл protocol.php, который позволяет вывести в табличном виде данные из PROTOCOL_TABLE:</li>
            <ul>
                <li>№ п\п</li>
                <li>Номер протокола</li>
                <li>Дата выдачи (дд.мм.гг)</li>
                <li>Ответственный (ФИО)</li>
                <li>Соответствие («да», «нет»)</li>
            </ul>
            <li>Создайте под таблицей с результатами запроса к БД кнопку: «Добавить протокол». При клике происходит переход к форме добавления записи в таблицу PROTOCOL_TABLE. В форме должны содержаться требуемые поля для заполнения и кнопка «сохранить»</li>
            <li>По нажатию кнопки "сохранить", должна производится запись значений в PROTOCOL_TABLE и возврат к таблице с протоколами</li>
            <li>В случае, когда указанный номер протокола совпадает с уже существующим в базе, должно появляться всплывающее окно с текстом предупреждения. Сохранения в БД введенных данных при этом не производится</li>
        </ul>
    </div>
</body>
</html>
