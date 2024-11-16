<html lang="ru">
    <head>
        <title>Page Create</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <div class="nav">
            <a href="../nav.html">Назад</a>
        </div>
        <div class="cont">
            <form method="post">
                <label for="name">Введите наименование товара:</label>
                <input type="text" name="name" id="name">
                <label for="price">Введите цену товара:</label>
                <input type="number" name="price" id="price">
                <button type="submit" name="addBtn">Добавить запись</button>
            </form>
        </div>  
        
        <?php
            include_once "database.php";

            if (isset($_POST['addBtn'])) {
                if (!isset($_POST['name']) || !isset($_POST['price'])) {
                    echo "Все поля должны быть заполнены";
                    die();
                }

                $name = $_POST['name'];
                $price = $_POST['price'];
                $sql = "INSERT INTO products (name, price) VALUES ('{$name}', '{$price}')";
                
                if (Database::query($sql)) {
                    echo "Товар {$name} - {$price} ₽ был успешно добавлен";
                }
                else echo "Добавление записи провалено";
            }
        ?>

    </body>
</html>