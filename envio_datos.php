Ejecución
<?php
  require('conexion.php');
 
  //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $sql = "INSERT INTO datos (nombre, email, contrasena)
    VALUES ('$nombre', '$email', '$pass')";
    
    // Utilizar exec() dado que no se regresan resultados
    $conn->exec($sql);
    
    //------------------------------------//
    //--- Aplicable a Sentencia SELECT ---//
    
    $sql = "SELECT * FROM datos";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    // Configura los resultados como un arreglo asociativo
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    // $stmt->fetchAll() Obtiene el arreglo asociativo
    foreach ($stmt->fetchAll() as $row) {
        //...Implementar
    }
?>