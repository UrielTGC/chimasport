<?php
include("../pages/php/conexion.php");

if(isset($_POST['tg'])){
    $nom = trim($_POST['nom']);
    $num = trim($_POST['num']);
    $cod = trim($_POST['cd']);
    $cv = trim($_POST['cvv']);

    // Validar si todos los campos están llenos
    if(empty($nom) || empty($num) || empty($cod) || empty($cv)){
        ?>
        <script>
            alert('Rellena todos los campos');
            window.location.href='target/';
        </script>
        <?php
        exit; // Detener la ejecución del código
    }

    // Verificar si el correo ya está registrado
    $sql_check_email = "SELECT * FROM tarjetas WHERE numero='$num'";
    $res_check_email = mysqli_query($conex, $sql_check_email);

    if(mysqli_num_rows($res_check_email) > 0){ // Si hay filas, el correo ya está registrado
        ?>
        <script>
            alert('La targeta ya está registrada');
        </script>
        <?php
        exit; // Detener la ejecución del código
    }

    // Insertar nuevo usuario
    $sql_insert_user = "INSERT INTO tarjetas (id,numero,nombre,expiracion,ccv) VALUES ('0','$num','$nom', '$cv', '$cod')";
    $res_insert_user = mysqli_query($conex, $sql_insert_user);

    if($res_insert_user){
        ?>
        <script>
            alert('Tu registro ha sido exitoso');
        </script>
        <h2>Regresa a la pantalla inicial</h2>
        <?php
    }else{
        ?>
        <script>
            alert('Ocurrió un error al registrar el usuario');
            window.location.href='login.php';
        </script>
        <?php
    }
}
?>
