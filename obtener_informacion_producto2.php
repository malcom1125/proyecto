<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>libretas y pulpitos</h1>
    </header>
    
    <nav>
        <a href="./index.html">Inicio</a>
    </nav>

    <section>
    <!DOCTYPE html>
<html>
<head>
    <title>Información del Producto</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Información del Producto</h1>
    <img src="foto2.jfif" alt="foto de librito" width="200px">
    <div class="producto-info">
        <?php
        // Simula la obtención de información del producto desde una fuente de datos
        $producto = array(
            'nombre' => 'Producto: Pulpito',
            'descripcion' => 'Este Pulpito esta hecho 100% dede 0 y esta hecho a mano en lana.',
            'precio' => '$4.000',
            'caracteristicas' => array(
                'Color:morado ',
                'Tamaño: pequeño',
                'Disponible: Sí'
            )
        );
        ?>

        <h2><?php echo $producto['nombre']; ?></h2>
        <p class="precio">Precio: <?php echo $producto['precio']; ?></p>
        <p><?php echo $producto['descripcion']; ?></p>

        <h3>Características:</h3>
        <ul>
            <?php
            foreach ($producto['caracteristicas'] as $caracteristica) {
                echo '<li>' . $caracteristica . '</li>';
            }
            ?>
        </ul>
    </div>
    <div class="boton">
    <form method="post">
        <button type="submit" name="comprar">Hacer la compra</button>
        <button type="submit" name="apartar">Apartar el producto</button>
    </form>
    </div>
    <?php
    // Verificar si se ha enviado una solicitud POST desde el botón "Hacer la compra"
    if (isset($_POST['comprar'])) {
        echo '<script>alert("¡Gracias por comprar nuestro producto! 😊");</script>';
    }

    // Verificar si se ha enviado una solicitud POST desde el botón "Apartar el producto"
    if (isset($_POST['apartar'])) {
        $pc = rand(1, 30); // Generar un número aleatorio entre 1 y 30
        echo '<script>alert("Usted ha apartado este producto. Quedan ' . $pc . ' unidades");</script>';
    }
    ?>
</body>
</html>

    </section>

    <footer>
        &copy; 2023 Mi Proyecto
    </footer>
        
</body>
</html>