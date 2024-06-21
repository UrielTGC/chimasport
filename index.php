<?php
$user_id = isset($_GET['id']) ? $_GET['id'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="">
            </label>

            <a href="#" class="logo">ChimaSport</a>
            <input type="checkbox" id="menu"/>

            <a href="target/index.html?id=<?php echo $user_id; ?>"><img class="menu-icono" src="icon/card.svg" alt="Target"></a>
            <a href="index.html"><img class="menu-icono" src="icon/logout.svg" alt="Logout"></a>

            <nav class="navbar">
                <ul>
                    <li><a href="#Services">Servicios</a></li>
                    <li><a href="pages/custom/renta/rent.html">Rentar Canchas</a></li>
                    <li><a href="pages/update.php?id=<?php echo $user_id; ?>">Usuario</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Los mejores sitios para visitar</h1>
                <p>
                    ¡Descubre las mejores canchas de deportes en Chimalhuacán y 
                    vive una experiencia deportiva única! ¡Bienvenido a tu nuevo 
                    destino deportivo!
                </p>
            </div>

            <div class="header-img">
                <img src="img/BG.jpg" alt="">
            </div>
        </div>
    </header>

    <section class="general container">
        <div class="general-1">
            <div class="general-card">
                <img src="img/FB.svg" alt="">
                <h3>Canchas de Futbol </h3>
                <p>
                    Las mejores canchas de Futbol de 
                    Chimalhuacán
                </p>
            </div>

            <div class="general-card">
                <img src="img/Columpios.svg" alt="">
                <h3>Parques</h3>
                <p>
                    Areas recreativas para
                    los niños de la localidad
                </p>
            </div>

            <div class="general-card">
                <img src="img/Ejercicio.svg" alt="">
                <h3>Ejercicio </h3>
                <p>
                    Zonas especiales para realizar 
                    ejercicio
                </p>
            </div>
        </div>
            
        <div class="general-2">
            <h2 id="Services">Servicios</h2>
            <p>En el municipio de Chimalhuacán contamos con
                areas recreativas para todo tipo de edades, 
                entre ellas tenemos las siguientes
            </p>
        </div>
    </section>

    <!-- Divide la otra seccion-->
    <section class="general container">
        <div class="general-2">
            <h2>Canchas la Joya</h2>
            <p>
                Las canchas La Joya en Chimalhuacán, Estado de México, son un vibrante centro deportivo comunitario con 
                instalaciones modernas y un ambiente acogedor que promueve el compañerismo y la pasión por el deporte.
            </p>
            <a href="pages/custom/renta/rent.html?id=<?php echo $user_id; ?>" class="btn-2">Rentar</a>            
        </div>

        <div class="general-1">
            <div class="general-card bg-1">
            </div>
        </div>
    </section>

    <section class="general container">
        <div class="general-2">
            <h2>Canchas la Llorona</h2>
            <p>La Cancha La Llorona en Chimalhuacán, un espacio deportivo comunitario, ofrece instalaciones 
                modernas para practicar deportes y fomentar la pasión por el juego en un entorno vibrante y acogedor.
            </p>
            <a href="pages/custom/renta/rent.html?id=<?php echo $user_id; ?>" class="btn-2">Rentar</a>         
        </div>

        <div class="general-1">
            <div class="general-card bg-2">
            </div>
        </div>
    </section>

    <section class="general container">
        <div class="general-2">
            <h2>Tepalcates</h2>
            <p>La Cancha Tepalcates en Chimalhuacán, un espacio deportivo mas conocido, ofrece instalaciones 
                modernas para practicar deportes y fomentar la pasión por el juego en un entorno vibrante y acogedor.
            </p>
            <a href="pages/custom/renta/rent.html?id=<?php echo $user_id; ?>" class="btn-2">Rentar</a>         
        </div>

        <div class="general-1">
            <div class="general-card bg-3">
            </div>
        </div>
    </section>
    
    <main class="information">
        <h2>Más Informacion</h2>
        <div class="information-content container">
            <div class="information-1">
                <h3>Reservacion</h3>
                <p>
                    Rellena el siguiente Formulario para hacer la reservacion de la cancha que desees
                </p>
                <a href="pages/sign.php" class="btn-2">Registrate</a>
            </div>

            <div class="information-1">
                <h3>Torneos</h3>
                <p>
                    Puedes conocer que equipos jugaran en los proximos
                    dias y en cuales canchas estaran compitiendo.
                    Ingresa para conocer a los jugadores
                </p>
                <a href="pages/custom/hour.php" class="btn-2">Informacion</a>
            </div>
        </div>
    </main>

    <section class="modal">
        <div class="modal-container">
            <img src="img/trofeo.png" class="modal-img">
            <h2 class="modal-title">Visitanos</h2>
            <p class="modal-paragraph">
                Para obtener la experiencia e informacion completa te recomendamos
                visitarnos en el planetario Digital de Chimalhuacán
            </p>
                <a href="#" class="modal-close">Cerrar</a>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-row">

                <div class="footer-links">
                    <h4>Ayuda</h4>
                    <ul>
                        <li><a href="#">Acerca del sistema</a></li>
                        <li><a href="#">Sugerencias</a></li>
                        <li><a href="#">Politica de privacidad</a></li>
                        <li><a href="#">Errores del sistema</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Siguenos</h4>
                    <div class="social-link">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-youtube"></a>
                        <a href="#" class="fab fa-whatsapp"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
