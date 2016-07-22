<?php  
    include('conexion.php');

    if ($_FILES['archivo']["error"] > 0)
  {
  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
else
  {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $place = $_POST['place'];
    $date_event = $_POST['date'];
  echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
  echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
  echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
  echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];

  /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/
  $destino = "subidas/".$_FILES['archivo']['name'];
  move_uploaded_file($_FILES['archivo']['tmp_name'],$destino);
  echo "<br>".$destino;
  $sql = "INSERT INTO events(name,description,place,date_event,foto,managment_id)
  VALUES ('$name','$description','$place','$date_event','$destino',1)";
  $ok = $base->exec($sql);
            if ($ok == FALSE) {
                # code...
                echo "Error";
            }
            else{
                
                     echo "Evento guardado";
                    
                    
                } 
 }
 
 ?>