<?php
    include_once '../session.php';
    include_once '../../../models/TypeAccident.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $type = new TypeAccident();
        $return = $type->insert([
            'name' => $_POST['name'], 
            'nickname' => $_POST['nickname']
        ]);
      	
        if( $return ) {
            header("location: list.php");
        }else{
            $error = "Se presentó un error al crear el tipo de accidente";
        }
        
    }
?>
<html>
   
    <head>
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        
       <title>Tipos de Accidente</title>
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
                <h1>Crear Tipo de Accidente</h1>
            </div>
            <form class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nickname" class="col-sm-2 control-label">Nombre clave</label>
                    <div class="col-sm-10">
                      <input type="text" name="nickname" class="form-control" id="group" placeholder="nombreclave">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Crear</button>
                    </div>
                </div>
            </form>
            <p><?php echo $error; ?></p>
        </div>
    </body>
    <script>
    
    </script>
</html>