<?php 
    include("connecion.php");
    $con=conectar();

    $sql="SELECT *  FROM registro";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> MOSTRAR REGISTROS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h3>Registro Personal </h3>
                                <form action="insertar.php" method="POST">

                                <input type="text" class="form-control mb-3" name="Id" placeholder="Id">
                                <input type="text" class="form-control mb-3" name="Nombre_Completo" placeholder="Nombre_Completo">
                                 <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                  <input type="submit" class="btn btn-primary">

                                  
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre Completo</th>
                                        <th>Direccion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Nombre_Completo']?></th>
                                                <th><?php  echo $row['Direccion']?></th>    
                                                <th><a href="mostrar.php?Id=<?php echo $row['Id'] ?>" class="btn btn-info">Mostrar</a></th>                                      
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>