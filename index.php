<!DOCTYPE html>
<html>
<head>
    <title>Selección de Menú Básico</title>
</head>
<body>
    <h1>Menú de Opciones multiples</h1>
    <ul>
        <li><a href="?opcion=suma">Suma</a></li>
        <li><a href="?opcion=resta">Resta</a></li>
        <li><a href="?opcion=multiplicacion">Multiplicación</a></li>
        <li><a href="?opcion=division">División</a></li>
    </ul>

    <?php
    if (isset($_GET['opcion'])) {
        $opcion = $_GET['opcion'];

        switch ($opcion) {
            case 'suma':
                echo "Has seleccionado la opción de Suma.";
                // Aquí puedes escribir el código para la suma
                break;

            case 'resta':
                echo "Has seleccionado la opción de Resta.";
                // Aquí puedes escribir el código para la resta
                break;

            case 'multiplicacion':
                echo "Has seleccionado la opción de Multiplicación.";
                // Aquí puedes escribir el código para la multiplicación
                break;

            case 'division':
                echo "Has seleccionado la opción de División.";
                // Aquí puedes escribir el código para la división
                break;

            default:
                echo "Opción inválida.";
                break;
        }
    }
    ?>
</body>
</html>
