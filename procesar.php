<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Celulares</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .resultado {
        background: #fff; 
        padding: 20px;
        border-radius: 10px;
        max-width: 500px;
        width: 100%;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
    }
    h2 {
        text-align: center;
        color: #555; 
    }
    .detalle {
        background: #f7f7f7; 
        padding: 15px;
        border-radius: 8px;
        margin-top: 15px;
        color: #333; 
    }
    strong {
        color: #888;
    }
    a {
        display: block;
        margin-top: 15px;
        text-align: center;
        text-decoration: none;
        color: white;
        background: #8c8c8c; 
        padding: 10px;
        border-radius: 5px;
    }
    a:hover {
        background: #666; 
    }
</style>
</head>
<body>
<div class="resultado">
    <h2>Resultados de Compra</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $producto1 = $_POST['producto1'];
        $precio1 = (float)$_POST['precio1'];

        $producto2 = $_POST['producto2'];
        $precio2 = (float)$_POST['precio2'];

        $producto3 = $_POST['producto3'];
        $precio3 = (float)$_POST['precio3'];

        $suma = $precio1 + $precio2 + $precio3;
        $descuento = $suma * 0.16;
        $total = $suma - $descuento;

        echo "<div class='detalle'>";
        echo "Computador 1: $producto1 - $" . number_format($precio1, 2) . "<br>";
        echo "Computador 2: $producto2 - $" . number_format($precio2, 2) . "<br>";
        echo "Computador 3: $producto3 - $" . number_format($precio3, 2) . "<br><br>";
        echo "Suma de precios: $" . number_format($suma, 2) . "<br>";
        echo "Descuento (16%): -$" . number_format($descuento, 2) . "<br>";
        echo "<strong>Total a pagar: $" . number_format($total, 2) . "</strong>";
        echo "</div>";
    } else {
        echo "<p>No se recibieron datos del formulario.</p>";
    }
    ?>
    <a href="form.html">← Volver al formulario</a>
</div>
</body>
</html>
