

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>SOY JOAN RAMIREZ</h1>
    
    <?php
        $mysqli = new mysqli("mysql", "root", "joanramirez", "20211850");

        if ($mysqli->connect_error) {
            die("Error de conexión: " . $mysqli->connect_error);
        }

        $sql = "SELECT * FROM usuarios";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
            }
        } else {
            echo "No hay resultados";
        }

        $mysqli->close();
    ?>
</body>
</html>