<?php
    include_once '../session.php';
    include_once '../../../models/Accident.php';
    
    $class = new Accident();
    $accidents = $class->getList();
?>
<html>
   
    <head>
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        
       <title>Accidentes</title>
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="../../index.php">Inicio</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="../../logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="page-header">
                <h1>Accidentes</h1>
            </div>
            <table id="table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de Accidente</th>
                        <th>Usuario</th>
                        <th>Observaciones</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($accidents as $accident) {
                        echo "<tr>";
                        echo "<td>" . $accident['id'] . "</td>";
                        echo "<td>" . $accident['TypeAccident']['name'] . "</td>";
                        echo "<td>" . $accident['User']['name'] . "</td>";
                        echo "<td>" . $accident['observations'] . "</td>";
                        echo "<td>" . $accident['datetime'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            
        </div>
    </body>
    <script>
    
    $(document).ready(function() {
        $('#table').DataTable();
    });
    
    </script>
</html>