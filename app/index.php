<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>PHP PDO Example</title>

        <!-- CSS  -->  
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        
    </head>
    <body>
        <nav class="blue" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="<?php echo $_SERVER['REQUEST_URI'] ?>" class="brand-logo">
                    PHP PDO Example
                </a>
            </div>
        </nav>

        <div class="section no-pad-bot" id="index-banner">

            <div class="container">
        
                <?php
                    include_once './db/db.php';
                    
                    $op = $_POST['op'];

                    if(!$op || $op == 'list'):                        

                        include_once './listar.php';

                    elseif ($op == 'edit'):
                                            
                        include_once './editar.php';

                    elseif ($op == 'new'):

                        include_once './novo.php';

                    endif;
                ?>
            </div>
            
        </div>

        <!--  Scripts-->        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>                
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
                M.AutoInit();      
            });
        </script>

    </body>
</html>
