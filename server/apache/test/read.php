<html lang="ru">
    <head>
        <title>Page READ</title>
        <link rel="stylesheet" href="./style.css" type="text/css"/>
    </head>
    <body>
        <div class="nav">
            <a href="../nav.html">Назад</a>
        </div>
        <div class="cont">
            <table>
                <tr><th>ID</th><th>Наименование</th><th>Цена</th></tr>
                <?php
                    include_once "./database.php";

                    $q = "SELECT * FROM products";
                    $res = Database::query($q);
                    foreach ($res as $row) {
                        echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['price']} ₽</td></tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>