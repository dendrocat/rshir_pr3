<html lang="en">
<head>
    <title>Page Read Users</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
    <body>
        <div class="nav">
            <a href="../nav.html">Назад</a>
        </div>
        <table>
            <tr><th>ID</th><th>Логин</th><th>Пароль</th><th>Группа</th></tr>
            <?php
                include_once "./database.php";

                $q = "SELECT * FROM users JOIN user_group ON users.groupID = user_group.gID";
                $res = Database::query($q);
                foreach ($res as $row)
                    echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['passwd']}</td><td>{$row['gName']}</td></tr>";
            ?>
        </table>
    </body>
</html>