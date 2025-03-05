<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
</head>
<body>
<?php
require_once("../DbConnection/connectionDb.php");
require_once("methods/returnTables.php");
?>

<label for="adder">Добавление</label>
<form name="adder" action="methods/add.php" method="post">
    <label for="tableNames">Таблица</label>
    <select name="tableNames">
        <?php foreach ($returnTableNames($database, $connection) as $table): ?>
            <option value="<?=$table[0]?>"><?=$table[0]?></option>
        <?php endforeach; ?>
    </select><br>
    <label for="header">Заголовок</label>
    <input name="header" require type="text"><br>
    <label for="text">Текст</label>
    <input type="text" name="text" require><br>
    <button type="submit">Подтвердить</button><br>
</form>
<br>
<label for="updater">Редактировать</label>
<form action="methods/update.php" method="post">
<label for="tableNames">Таблица</label>
    <select name="tableNames">
        <?php foreach ($tableNames as $table): ?>
            <option value="<?=$table[0]?>"><?=$table[0]?></option>
        <?php endforeach; ?>
    </select><br>
    <label for="id">Идентификатор</label>
    <input type="text" name="id"><br>
    <label for="header">Заголовок</label>
    <input type="text" name="header"><br>
    <label for="text">Текст</label>
    <input type="text" name="text" require><br>
    <button type="submit">Подтвердить</button><br>
</form>
</body>
</html>

